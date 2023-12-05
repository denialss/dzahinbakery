<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
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
			$data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        	$data['detailProduk'] = $this->Madmin->tampilJoin()->row_object();
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
		
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header');
			$this->load->view('website/cart', $data);
			$this->load->view('website/footer');
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
		  $username = $this->input->post('username');
		  $name = $this->input->post('name');
		  $email = $this->input->post('email');
		  $address = $this->input->post('address');
		  $phone = $this->input->post('phone');
	  
		  $dataUpdate = array(
			'username' => $username,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
		  );
		  $this->Madmin->insert('tbl_user', $dataUpdate);
		  redirect('home');
		}
}