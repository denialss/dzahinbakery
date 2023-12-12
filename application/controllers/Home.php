<?php 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->library('cart');
		}

 
	function index(){
			$id = $this->session->userdata('idUser');
			$datawhere = array('idUser' => $id);
			$data_user['username'] = $this->Madmin->get_by_id('tbl_user', $datawhere)->row();
			
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header', $data_user);
			$this->load->view('website/home', $data);
			$this->load->view('website/footer');
		}

	public function login_action()
		{
		  $u = $this->input->post('username');
		  $p = md5($this->input->post('password'));
		  $check = $this->Madmin->user_check($u, $p)->row_object();
		  $result = $this->Madmin->user_check($u, $p)->row_object();
	  
		  if ($check==1) {
			$user_session = array(
			  'idUser' => $result->idUser,
			  'User' => $u,
			  'status' => 'login'
			);
	  
			$this->session->set_userdata($user_session);
			redirect('home');
		  } else {
			echo 'error';
		  }
		}

	public function register_action()
		{
		  $username = $this->input->post('username');
		  $password = md5($this->input->post('password'));
		  $name = $this->input->post('name');
		  $email = $this->input->post('email');
		  $phone = $this->input->post('phone');
		  $address = $this->input->post('address');
	  
		  $dataInput = array(
			'username' => $username,
			'password' => $password,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
		  );
		  $this->Madmin->insert('tbl_user', $dataInput);
		  redirect('home');
			$this->session->set_flashdata('success_register', 'Berhasil melakukan registrasi');
        //   $this->session->set_flashdata('success_register', 'Berhasil melakukan registrasi');
		  
		}

	public function logout()
		{
		  $this->session->sess_destroy();
		  redirect('home');
		}

	public function produk(){
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header');
			$this->load->view('website/produk', $data);
			$this->load->view('website/footer');
		}

	public function detail_produk($idProduk){
        	$dataWhere = array('idProduk' => $idProduk);
			$data['detailProduk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        	$data['produk'] = $this->Madmin->tampilJoin()->row_object();
			$this->load->view('website/header');
			$this->load->view('website/detail_produk', $data);
			$this->load->view('website/footer');
		}

	public function about(){
			$this->load->view('website/header');
			$this->load->view('website/about');
			$this->load->view('website/footer');
		}

	public function cart(){
			$id = $this->session->userdata('idUser');
			$datawhere = array('idUser' => $id);
			$data['profil'] = $this->Madmin->get_by_id('tbl_user', $datawhere)->row();
		
			$data['cartItems'] = $this->cart->contents();
			$this->load->view('website/header');
			$this->load->view('website/cart', $data);
			$this->load->view('website/footer');
		}
	
	public function add_cart($idProduk)
		{
			$dataWhere = array('idProduk' => $idProduk);
			$produk = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();

			// add product to the cart
			$data = array(
			'id' => $produk->idProduk,
			'image' => $produk->foto,
			'name' => $produk->namaProduk,
			'price' => $produk->harga,
			'berat' => $produk->berat,
			'qty' => 1
			);
			$this->cart->insert($data);

			redirect(base_url($redirect_page, 'refresh'));
		}

	public function update_cart()
		{
			$i = 1;
			foreach ($this->cart->contents() as $item){
				$dataUpdate = array(
					'rowid' => $item['rowid'],
					'qty' => $this->input->post('qty'),
				);
	
				$this->cart->update($dataUpdate);
				$i++;
			}
			redirect(base_url('home/cart'));
		}
	
	public function delete_cart($rowid)
	{
		$this->cart->remove($rowid);
		redirect(base_url('home/cart'));
	}

	public function checkout(){
		$id = $this->session->userdata('idUser');
		$datawhere = array('idUser' => $id);
		$data['profil'] = $this->Madmin->get_by_id('tbl_user', $datawhere)->row();
	
		$data['cartItems'] = $this->cart->contents();
		$this->load->view('website/header');
		$this->load->view('website/checkout', $data);
		$this->load->view('website/footer', $data);
	}

	public function checkout_action(){

		// BELOM SELESAI INI!!
		$config['upload_path'] = './upload/bukti_pembayaran/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('buktiPembayaran')) {
			$data_file = $this->upload->data();
			$data = array(
				'idUser' => $this->session->userdata('idUser'),
				'noPesanan' => $this->input->post('noPesanan'),
				'tglPesanan' => date('Y-m-d'),
				'namaPenerima' => $this->input->post('namaPenerima'),
				'noPenerima' => $this->input->post('noPenerima'),
				'provinsi' => $this->input->post('provinsi'),
				'kota' => $this->input->post('kota'),
				'alamat' => $this->input->post('alamat'),
				'ekspedisi' => $this->input->post('ekspedisi'),
				'paket' => $this->input->post('paket'),
				'estimasi' => $this->input->post('estimasi'),
				'ongkir' => $this->input->post('ongkir'),
				'berat' => $this->input->post('berat'),
				'buktiPembayaran' => $data_file['file_name'],
				'total_bayar' => $this->input->post('total_bayar'),
				'statusPembayaran' => '1',
				'statusPesanan' => '0',
			);
			
				$this->Madmin->simpan_transaksi($data);
				//simpan ke tabel rinci transaksi
				$i = 1;
				foreach ($this->cart->contents() as $items) {
					$data_rinci = array(
						'noPesanan' => $this->input->post('noPesanan'),
						'idProduk' => $items['id'],
						'qty' => $this->input->post('qty' . $i++),
						'namaProduk' => $items['name'],
					);
					$this->Madmin->simpan_rinci_transaksi($data_rinci);
			//=========================================
			$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
			$this->cart->destroy();
			redirect('home/pesanan');
			}
		}
	}

	public function profil(){
			$id = $this->session->userdata('idUser');
			$datawhere = array('idUser' => $id);
			$data_user['profil'] = $this->Madmin->get_by_id('tbl_user', $datawhere)->row();

			$this->load->view('website/header');
			$this->load->view('website/profil', $data_user);
			$this->load->view('website/footer');
		}

	public function edit_profil(){
			$id = $this->session->userdata('idUser');
			$datawhere = array('idUser' => $id);
			$data_user['profil'] = $this->Madmin->get_by_id('tbl_user', $datawhere)->row();
			$this->load->view('website/header');
			$this->load->view('website/edit_profil', $data_user);
			$this->load->view('website/footer');
		}

	public function edit_profil_action()
		{
			$id = $this->session->userdata('idUser');
			$username = $this->input->post('username');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
	  
		  $dataUpdate = array(
			'idUser' => $id,
			'username' => $username,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
		  );
		  $this->Madmin->update('tbl_user', $dataUpdate, 'idUser', $id);
		  redirect('home');
		}

	public function pesanan(){
			$data['pesanan'] = $this->Madmin->transaksi();

			$this->load->view('website/header');
			$this->load->view('website/pesanan', $data);
			$this->load->view('website/footer');
		}
}