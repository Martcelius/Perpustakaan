<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_denda extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertdenda($data)
	{
		return $this->db->query("INSERT INTO denda (Judul,Nim,Tanggal_pinjam,Tanggal_kembali,Denda) VALUES ('".$data['judul']."' , ".$data['nim'].", '".$data['tanggal']."', '".$data['tanggalpengembalian']."', '".$data['denda']."') ");
	}

	public function select_semua_denda()
	{
		return $this->db->query('SELECT * FROM denda');
	}

	public function denda($data)
	{
		return $this->db->query("SELECT Tanggal_pinjam, current_date() as tgl_sekarang, datediff(current_date(),Tanggal_pinjam) as selisih from transaksi WHERE ID_transaksi=".$data['cekidpeminjaman']." ");
	}

	public function select_toexcelDenda($data)
	{
		return $this->db->query("SELECT * FROM denda WHERE Tanggal_pinjam BETWEEN '".$data['tampungtgl1']."' AND '".$data['tampungtgl2']."'  ");
	}
}

/* End of file M_denda.php */
/* Location: ./application/models/M_denda.php */