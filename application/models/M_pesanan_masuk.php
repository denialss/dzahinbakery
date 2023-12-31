<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model
{

	public function pesanan()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('statusPembayaran=0');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_diproses()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('statusPembayaran=1');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_dikirim()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('statusPembayaran=2');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_selesai()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('statusPembayaran=3');
		$this->db->order_by('idTransaksi', 'desc');
		return $this->db->get()->result();
	}

	public function update_order($data)
	{
		$this->db->where('idTransaksi', $data['idTransaksi']);
		$this->db->update('tbl_transaksi', $data);
	}

	public function detail_masuk()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_rinci_transaksi', 'tbl_rinci_transaksi.no_order = tbl_transaksi.no_order', 'left');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
}
