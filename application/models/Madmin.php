<?php
defined('BASEPATH') or exit('No direct scripts access allowed');

class Madmin extends CI_Model
{

  public function insert($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function user_check($u, $p)
  {
    $q = $this->db->get_where('tbl_user', array('username' => $u, 'password' => $p));
    return $q;
  }

  public function get_all_data($tabel)
  {
    $q = $this->db->get($tabel);
    return $q;
  }

  public function get_by_id($tabel, $id)
  {
    return $this->db->get_where($tabel, $id);
  }

  public function update($tabel, $data, $pk, $id)
  {
    $this->db->where($pk, $id);
    $this->db->update($tabel, $data);
  }

  public function delete($tabel, $id, $val)
  {
    $this->db->delete($tabel, array($id => $val));
  }

  public function tampilJoin(){
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
		$query = $this->db->get();

		return $query;
	}

  public function tampilJoinKategori(){
    $this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
		$this->db->where('tbl_produk.idKategori');
		return $this->db->get();
	}

  public function data_settings(){
		$this->db->select('*');
		$this->db->from('tbl_toko');
		$this->db->where('idToko', 1);
		$query = $this->db->get()->row();

		return $query;
	}

  // public function edit_produk_action($dataproduk){
	// 	$dataUpdate=array(
  //     'idProduk' => $id ['idProduk'],
  //     'foto'=>$dataproduk['foto'],
  //     'idKategori'=>$dataproduk['idKategori'], 
  //     'namaProduk'=>$dataproduk['namaProduk'], 
  //     'harga'=>$dataproduk['harga'], 
  //     'stok'=>$dataproduk['stok'], 
  //     'deskripsi_produk'=>$dataproduk['deskripsi_produk']
  //   );
  //     $this->Madmin->update('tbl_produk', $dataUpdate, 'idProduk', $id);
	// }

  public function simpan_transaksi($data)
	{
		$this->db->insert('tbl_transaksi', $data);
	}

	public function simpan_rinci_transaksi($data_rinci)
	{
		$this->db->insert('tbl_detail_transaksi', $data_rinci);
	}

	public function verifikasi()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('idUser', $this->session->userdata('idUser'));
		$this->db->where('statusPembayaran=0');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

	public function diproses()
		{
			$this->db->select('*');
			$this->db->from('tbl_transaksi');
			$this->db->where('idUser', $this->session->userdata('idUser'));
			$this->db->where('statusPembayaran=1');
			$this->db->order_by('idTransaksi', 'desc');
			return $this->db->get()->result();
		}

	public function dikirim()
		{
			$this->db->select('*');
			$this->db->from('tbl_transaksi');
			$this->db->where('idUser', $this->session->userdata('idUser'));
			$this->db->where('statusPembayaran=2');
			$this->db->order_by('idTransaksi', 'desc');
			return $this->db->get()->result();
		}

	public function selesai()
		{
			$this->db->select('*');
			$this->db->from('tbl_transaksi');
			$this->db->where('idUser', $this->session->userdata('idUser'));
			$this->db->where('statusPembayaran=3');
			$this->db->order_by('idTransaksi', 'desc');
			return $this->db->get()->result();
		}

  public function transaksi()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('idUser', $this->session->userdata('idUser'));
		$this->db->where('statusPesanan=0');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

  public function detail_transaksi($idTransaksi)
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('idTransaksi', $idTransaksi);
		return $this->db->get()->row();
	}

	//fungsi memanggil detail barang per transaksi
	public function detail_transaksi_produk($idTransaksi)
	{
		$this->db->select('*');
		$this->db->from('tbl_detail_transaksi');
		$this->db->join('tbl_transaksi', 'tbl_transaksi.noPesanan = tbl_detail_transaksi.noPesanan', 'left');
		$this->db->join('tbl_produk', 'tbl_produk.idProduk = tbl_detail_transaksi.idProduk', 'left');
		$this->db->where('idTransaksi', $idTransaksi);
		return $this->db->get()->result();
	}

	public function update_order($data)
	{
		$this->db->where('idTransaksi', $data['idTransaksi']);
		$this->db->update('tbl_transaksi', $data);
	}

	public function tile_count_user()
	{   
		$query = $this->db->get('tbl_user');
		if($query->num_rows()>0)
		{
		return $query->num_rows();
		}
		else
		{
		return 0;
		}
	}

	public function tile_count_produk()
	{   
		$query = $this->db->get('tbl_produk');
		if($query->num_rows()>0)
		{
		return $query->num_rows();
		}
		else
		{
		return 0;
		}
	}

	public function tile_count_pesanan()
	{   
		$query = $this->db->get('tbl_transaksi');
		if($query->num_rows()>0)
		{
		return $query->num_rows();
		}
		else
		{
		return 0;
		}
	}

	public function tile_count_stok()
	{
	$this->db->select_sum('stok');
	$query = $this->db->get('tbl_produk');
	if($query->num_rows()>0)
	{
		return $query->row()->stok;
	}
	else
	{
		return 0;
	}
	}
	
	public function get_filtered_products($category, $price_range) {
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
	
		if ($category !== 'all') {
			$this->db->where('tbl_kategori.namaKategori', $category);
		}
	
		$this->db->where('tbl_produk.harga <=', $price_range);
	
		return $this->db->get();
	}
	
	public function get_filtered_kue_basah($price_range) {
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
		$this->db->where('tbl_kategori.namaKategori', 'kue basah');
		$this->db->where('tbl_produk.harga <=', $price_range);
		return $this->db->get()->result();
	}
	
	public function get_filtered_kue_kering($price_range) {
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
		$this->db->where('tbl_kategori.namaKategori', 'kue kering');
		$this->db->where('tbl_produk.harga <=', $price_range);
		return $this->db->get()->result();
	}

	public function get_filtered_all_produk($price_range) {
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_produk.idKategori = tbl_kategori.idKategori', 'left');
		$this->db->where('tbl_produk.harga <=', $price_range);
		return $this->db->get()->result();
	}
	
	
	
	
	

	public function tes(){
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.idKategori = tbl_produk.idKategori', 'left');

		$query = $this->db->get();
		return $query->result();
	}
	



}
