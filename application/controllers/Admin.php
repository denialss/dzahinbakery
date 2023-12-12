<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Madmin');
  }

    public function index()
    {
      if (empty($this->session->userdata('username'))) {
          redirect('admin/login');
      }
      $this->load->view('admin/sidebar');
      $this->load->view('admin/menu');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/footer');
    }

    // LOGIN ADMIN ---------------------------------------------------------------------
    public function login()
    {
      $this->load->view('admin/login');
    }

    public function login_action()
    {
      $u = $this->input->post('username');
      $p = $this->input->post('password');

      $check = $this->db->get_where('tbl_admin', ['username' => $u])->row_array();

      if (password_verify($p, $check['password'])) {
        $data_session = array(
          'username' => $u,
          'status' => 'login'
        );

        $this->session->set_userdata($data_session);
        redirect('admin');
      } else {
        redirect('admin_login');
      }
    }

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('admin/login');
    }
    // /LOGIN ADMIN ---------------------------------------------------------------------

    // Olah Data Produk --------------------------------------------------------------------
    public function produk()
      {
          $data['produk'] = $this->Madmin->tampilJoin()->result();
          $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
          $this->load->view('admin/sidebar');
          $this->load->view('admin/menu');
          $this->load->view('admin/produk', $data);
          $this->load->view('admin/footer');
      }

    Public function add_produk()
      {
        $foto = $this->input->post('foto');
        $idKategori = $this->input->post('idKategori');
        $namaProduk = $this->input->post('namaProduk');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $berat = $this->input->post('berat');
        $deskripsi_produk = $this->input->post('deskripsi_produk');
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $data_file = $this->upload->data();
          $data_insert = array(
            'idKategori' => $idKategori,
            'foto' => $data_file['file_name'],
            'namaProduk' => $namaProduk,
            'harga' => $harga,
            'stok' => $stok,
            'berat' => $berat,
            'deskripsi_produk' => $deskripsi_produk
          );
          $this->Madmin->insert('tbl_produk', $data_insert);
          redirect(base_url("admin/produk"));
        } else {
          echo 'errror';
        }
      }

    public function edit_produk()
      {
        $idProduk = $this->input->post('idProduk');
        $idKategori = $this->input->post('idKategori');
        $namaProduk = $this->input->post('namaProduk');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');
        $deskripsi_produk = $this->input->post('deskripsi_produk');
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('foto')) {
          $data_file = $this->upload->data();
          $dataUpdate = array(
            'idKategori' => $idKategori,
            'foto' => $data_file['file_name'],
            'namaProduk' => $namaProduk,
            'harga' => $harga,
            'stok' => $stok,
            'berat' => $berat,
            'deskripsi_produk' => $deskripsi_produk
          );
          
          $this->Madmin->update('tbl_produk', $dataUpdate, 'idProduk', $idProduk);
          redirect(base_url("admin/produk"));

        } else {
          echo "error";
        }
      }

    public function delete_produk($id)
      {
          $this->Madmin->delete('tbl_produk', 'idProduk', $id);
          redirect('admin/produk');
      }
    // /Olah Data Produk --------------------------------------------------------------------


    // Olah Data Kategori -------------------------------------------------------------------
    public function kategori()
      {
          $data['produk'] = $this->Madmin->tampilJoinKategori()->result();
          $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
          $this->load->view('admin/sidebar');
          $this->load->view('admin/menu');
          $this->load->view('admin/kategori', $data);
          $this->load->view('admin/footer');
      }

    public function add_kategori()
      {
        $idKategori = $this->input->post('idKategori');
        $namaKategori = $this->input->post('namakategori');

        $data_insert = array(
          'idKategori' => $idKategori,
          'namakategori' => $namaKategori
        );
        $this->Madmin->insert('tbl_kategori', $data_insert);
        redirect(base_url("admin/kategori"));
      }

    public function edit_kategori()
      {
        $id = $this->input->post('idkategori');
        $namaKategori = $this->input->post('namakategori');
        $dataUpdate = array(
          'namakategori' => $namaKategori
        );

        $this->Madmin->update('tbl_kategori', $dataUpdate, 'idkategori', $id);
      $this->session->set_flashdata('error');
        redirect(base_url("admin/kategori"));
      }

    public function delete_kategori($id)
      {
          $this->Madmin->delete('tbl_kategori', 'idKategori', $id);
          redirect('admin/kategori');
      }

    // /Olah Data Kategori --------------------------------------------------------------------

  public function pesanan(){
        $data['pesanan'] = $this->Madmin->get_all_data('tbl_transaksi')->result();

        $this->load->view('admin/sidebar');
        $this->load->view('admin/menu');
        $this->load->view('admin/pesanan', $data);
        $this->load->view('admin/footer');
    }

  public function penjualan(){
        $this->load->view('admin/sidebar');
        $this->load->view('admin/menu');
        $this->load->view('admin/penjualan');
        $this->load->view('admin/footer');
    }

    public function settings(){
      $data['settings'] = $this->Madmin->data_Settings();

      $this->load->view('admin/sidebar');
      $this->load->view('admin/menu');
      $this->load->view('admin/settings', $data);
      $this->load->view('admin/footer');
    }

    public function settings_action(){
      
      $id = $this->input->post('idToko');
      $namaToko = $this->input->post('namaToko');
      $telepon = $this->input->post('telepon');
      $alamat = $this->input->post('alamat');
      $lokasi = $this->input->post('kota');

        $dataUpdate = array(
          'namaToko' => $namaToko,
          'telepon' => $telepon,
          'alamat' => $alamat,
          'lokasi' => $lokasi
        );

        $this->Madmin->update('tbl_toko', $dataUpdate, 'idToko', $id);
        redirect(base_url("admin/settings"));

    }
}
