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

  public function produk(){
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
          'stok' => $stok,
          'harga' => $harga,
          'deskripsi_produk' => $deskripsi_produk
        );
        $this->Madmin->insert('tbl_produk', $data_insert);
        redirect(base_url("admin/produk"));
      } else {
        redirect("admin/produk , $error");
      }
    }

    public function edit_produk()
    {
        $this->Madmin->edit_produk_action($this->input->post());
        redirect(base_url("admin/produk"));

    }

  public function kategori(){
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/sidebar');
        $this->load->view('admin/menu');
        $this->load->view('admin/kategori', $data);
        $this->load->view('admin/footer');
    }

  public function pesanan(){
        $this->load->view('admin/sidebar');
        $this->load->view('admin/menu');
        $this->load->view('admin/pesanan');
        $this->load->view('admin/footer');
    }

  public function penjualan(){
        $this->load->view('admin/sidebar');
        $this->load->view('admin/menu');
        $this->load->view('admin/penjualan');
        $this->load->view('admin/footer');
    }
}
