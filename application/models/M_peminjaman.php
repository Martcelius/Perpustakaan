<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_peminjaman($data){
		return $this->db->insert('transaksi',$data);
	}
	
	public function select_data($data){
		return $this->db->query("SELECT * FROM buku,mahasiswa,petugas
								WHERE ID_buku=".$data['id_buku']." AND Stok >= ".$data['jumlah']."  AND Nim=".$data['nim']." AND ID_petugas=".$data['id_petugas']." AND Judul='".$data['judul']."' " );
	}

	public function select_data_transaksi($data){
		return $this->db->query("SELECT * FROM transaksi
								WHERE ID_transaksi='".$data['cekdatatransaksi']."' OR ID_petugas = '".$data['cekdatatransaksi']."'  OR Nim='".$data['cekdatatransaksi']."' OR Status='".$data['cekdatatransaksi']."' " );
	}

	public function select_semua_transaksi()
	{
		return $this->db->query(" SELECT * FROM transaksi  ");
	}

	public function cekidtransaksi($data)
	{
		return $this->db->query("SELECT * FROM transaksi WHERE ID_transaksi=".$data['cekidtransaksi']." ");
	}

	public function cekidtransaksi2($data)
	{
		return $this->db->query("SELECT * FROM transaksi WHERE ID_transaksi=".$data['cekidpeminjaman']." ");
	}

	public function delete_transaksi($data)
	{
		return $this->db->delete('transaksi',array('ID_transaksi'=>$data));
	}

	public function update_transaksi($data)
	{
		return $this->db->query("UPDATE transaksi SET ID_petugas=".$data['id_petugas']." ,Nim=".$data['nim'].",Jumlah=".$data['jumlah'].",ID_buku=".$data['id_buku'].",Judul='".$data['judul']."',Status='".$data['status']."' WHERE ID_transaksi=".$data['cekidtransaksi']."  ");
	}

	public function update_transaksi2($data)
	{
		return $this->db->query("UPDATE transaksi SET Status='".$data['status']."' ,Tanggal_kembali='".$data['tanggalpengembalian']."' WHERE ID_transaksi=".$data['cekidtransaksi']."  ");
	}

	public function update_transaksi3($data)
	{
		return $this->db->query("UPDATE transaksi SET Judul='".$data['judul']."' WHERE ID_buku=".$data['idbuku']."  ");
	}

	public function select_toexcel($data)
	{
		return $this->db->query("SELECT * FROM transaksi WHERE Tanggal_pinjam BETWEEN '".$data['tampungtgl1']."' AND '".$data['tampungtgl2']."'  ");
	}

	
}

/* End of file M_peminjaman.php */
/* Location: ./application/models/M_peminjaman.php */