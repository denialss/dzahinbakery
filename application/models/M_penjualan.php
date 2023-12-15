<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_penjualan extends CI_Model
{
    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('MONTH(tglPesanan)', $bulan);
        $this->db->where('YEAR(tglPesanan)', $tahun);
        $this->db->where('statusPesanan=1');
        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('YEAR(tglPesanan)', $tahun);
        $this->db->where('statusPesanan=1');
        return $this->db->get()->result();
    }
}

/* End of file M_laporan.php */
