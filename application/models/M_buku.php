<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index(){

	}

	public function select_buku($data)
	{
		return $this->db->query("SELECT ID_buku,Judul,Penerbit,Tahun,Pengarang FROM buku WHERE Judul ='".$data['judul']."' AND Penerbit = '".$data['penerbit']."' AND Tahun = '".$data['tahun']."' AND Pengarang = '".$data['pengarang']."' AND Tanggal_masuk = '".$data['tanggalmasuk']."' " );
	}

	public function caribuku($data)
	{
		return $this->db->query("SELECT ID_buku,Judul,Penerbit,Tahun,Pengarang,Stok,Tanggal_masuk FROM buku WHERE ID_buku ='".$data['databuku']."' OR Judul ='".$data['databuku']."' OR Penerbit = '".$data['databuku']."' OR Tahun = '".$data['databuku']."' OR Pengarang = '".$data['databuku']."' OR Tanggal_masuk = '".$data['databuku']."' " );
	}

	public function select_semua_buku()
	{
		return $this->db->query(" SELECT * FROM buku  ");
	}
	
	public function insert_buku($data)
	{
		return $this->db->insert('buku',$data);
	}

	public function cekidbuku($data)
	{
		return $this->db->query("SELECT * FROM buku WHERE ID_buku=".$data['cekidbuku']." ");
	}

	public function update_stok($data)
	{
		return $this->db->query("UPDATE buku SET Stok= Stok + ".$data['stok']." WHERE ID_buku=".$data['id_buku']."  ");
	}

	public function update_stok2($data)
	{
		return $this->db->query("UPDATE buku SET Stok=Stok - ".$data['jumlah']." WHERE ID_buku=".$data['id_buku']." ");
	}
	public function update_buku($data)
	{
		return $this->db->query("UPDATE buku SET Judul='".$data['judul']."', Penerbit='".$data['penerbit']."', Tahun='".$data['tahun']."', Pengarang='".$data['pengarang']."', Stok=".$data['stok']." , Tanggal_masuk='".$data['tanggal_masuk']."' WHERE ID_buku=".$data['idbuku']." ");
	}

	public function delete_buku($data)
	{
		return $this->db->delete('buku',array('ID_buku'=>$data));
	}

	public function select_toexcelBuku($data)
	{
		return $this->db->query("SELECT * FROM buku WHERE Tanggal_masuk BETWEEN '".$data['tampungtgl1']."' AND '".$data['tampungtgl2']."'  ");
	}
}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */