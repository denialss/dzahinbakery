<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		}

 
	function index(){
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header');
			$this->load->view('website/home', $data);
			$this->load->view('website/footer');
		}

	function produk(){
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header');
			$this->load->view('website/produk', $data);
			$this->load->view('website/footer');
		}

	function detail_produk(){
			$this->load->view('website/header');
			$this->load->view('website/home');
			$this->load->view('website/footer');
		}

	function about(){
			$this->load->view('website/header');
			$this->load->view('website/about');
			$this->load->view('website/footer');
		}

	function cart(){
		
			$data['detailProduk'] = $this->Madmin->tampilJoin()->result();
			$this->load->view('website/header');
			$this->load->view('website/cart', $data);
			$this->load->view('website/footer');
		}

	function profil(){
			$this->load->view('website/header');
			$this->load->view('website/profil');
			$this->load->view('website/footer');
		}
}