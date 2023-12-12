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

  public function edit_produk_action($pk, $id, $dataproduk_Update, $datafoto_Update)
	{
		$this->db->where($pk, $id);
		$this->db->set($data_produk);
		$this->db->update('tbl_produk', $dataproduk_Update);

		$where  = array('idProduk' => $datafoto_Update['idProduk']);

		$this->db->where($where);
		$this->db->update('tbl_foto', $datafoto_Update);

		$this->db->where($where);
		return $this->db->get('tbl_foto')->row()->stid;
	}
}
