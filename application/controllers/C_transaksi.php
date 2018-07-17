<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function C_transaksi(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('M_peminjaman');
		$this->load->model('M_buku');
		$this->load->model('M_login');
		$this->load->model('M_denda');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->load->view('V_utama');
	}

	public function tampil_login()
	{
		$this->load->view('V_login');
	}

	public function dashboard()
	{
		$this->load->view('V_dasboard');
	}

	public function cari_buku()
	{
		$data['tampung3']=$this->M_buku->select_semua_buku()->result();
		$this->load->view('V_caribuku',$data);
	}

	public function inputpeminjaman()
	{
		$data['date']=Date('Y-m-d');
		$this->load->view('V_inputpeminjaman',$data);
	}

	public function inputpengembalian()
	{
		$data['tanggalpengembalian']=Date('Y-m-d');
		$this->load->view('V_inputPengembalian',$data);
	}

	public function inputbuku()
	{
		$this->load->view('V_inputbuku');
	}

	public function kelolatransaksi()
	{
		$data['tampung']=$this->M_peminjaman->select_semua_transaksi()->result();
		$this->load->view('V_kelolapeminjaman',$data);
	}

	public function kelola_buku()
	{
		$data['cekidp']=$this->M_buku->select_semua_buku()->result();
		$this->load->view('V_keloladatabuku',$data);
	}

	public function laporan_transaksi()
	{
		$data['tampung']=$this->M_peminjaman->select_semua_transaksi()->result();
		$this->load->view('V_laporantransaksi',$data);
	}

	public function laporan_buku()
	{
		$data['tampung3']=$this->M_buku->select_semua_buku()->result();
		$this->load->view('V_laporanBuku',$data);
	}

	public function laporan_denda()
	{
		$data['tampung4']=$this->M_denda->select_semua_denda()->result();
		$this->load->view('V_laporandenda',$data);
	}

	public function logout()
	{
		$this->load->view('V_utama');
	}

	public function login()
	{
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$ceklogin=$this->M_login->ceklogin($data);
		$cek_row=$ceklogin->num_rows();
		if ($cek_row == 0)
		{
			echo '<script language="javascript">alert("Username atau password tidak ada!");</script>';
			$this->tampil_login();
		}
		else
		{
			$this->dashboard();
		}		
	}

	public function caribuku()
	{
		if ($this->input->post('cekdatabuku')){
			$data['databuku']=$this->input->post('databuku');
			$data['tampung3']=$this->M_buku->caribuku($data)->result();
			$this->load->view('V_caribuku',$data);

		}
	}

	public function insert_peminjaman()
	{
		if ($this->input->post('submit')) 
		{
			 $data['id_petugas']= $this->input->post('id_petugas');
			 $data['nim']= $this->input->post('nim');
			 $data['id_buku']= $this->input->post('id_buku');
			 $data['jumlah']= $this->input->post('jumlah');
			 $data['judul']= $this->input->post('judul');


			$CekPeminjaman= $this->M_peminjaman->select_data($data);
			$cek=$CekPeminjaman->num_rows();
			if ( $cek== 0) 
			{
				echo '<script language="javascript">alert("Data Buku Tidak ada!");</script>';
			}

			else
			{
				$id_petugas= $this->input->post('id_petugas');
				$nim= $this->input->post('nim');
				$id_buku= $this->input->post('id_buku');
				$jumlah= $this->input->post('jumlah');
				$judul=$this->input->post('judul');
				$tanggal= $this->input->post('tanggal');
				$status=$this->input->post('status');
				$data['id_buku']= $this->input->post('id_buku');
				$data['jumlah']= $this->input->post('jumlah');
				
				$this->M_buku->update_stok2($data);
				$data=array (
					'ID_petugas' => $id_petugas,
					'NIM' => $nim,
					'ID_buku' => $id_buku,
					'Jumlah' => $jumlah,
					'Judul'=> $judul,
					'Tanggal_pinjam' => $tanggal,
					'Status' => $status	
					);
				$this->M_peminjaman->insert_peminjaman($data);
				echo '<script language="javascript">alert("Data Berhasil di simpan!"); </script>';	
			}

			$this->inputpeminjaman();
		}
		else
		{
			$this->kelolatransaksi();
		}
	}

	public function insert_pengembalian()
	{
		if ($this->input->post('submit')) 
		{
			$data['cekidtransaksi']=$this->input->post('idpeminjaman');
			$data['tanggalpengembalian']= $this->input->post('tanggalpengembalian');
			$data['status']=$this->input->post('status');
			$data['denda']= $this->input->post('denda');
			$data['judul']= $this->input->post('judul');
			$data['nim']= $this->input->post('nim');
			$data['tanggal']= $this->input->post('tanggal');
			$data['id_buku']= $this->input->post('id_buku');
			$data['stok']= $this->input->post('jumlah');
		
			$this->M_peminjaman->update_transaksi2($data);
			$this->M_buku->update_stok($data);
			$this->M_denda->insertdenda($data);
			echo '<script language="javascript">alert("Data Berhasil di simpan!"); </script>';
			$this->inputpengembalian();
		}
		else
		{
				$this->inputpengembalian();
		}
	}
	
	public function insert_buku()
	{
		if($this->input->post('submit'))
		{
			$data['judul']=$this->input->post('judul');
			$data['penerbit']=$this->input->post('penerbit');
			$data['tahun']=$this->input->post('tahun');
			$data['pengarang']=$this->input->post('pengarang');
			$data['tanggalmasuk']=$this->input->post('tanggal_masuk');
			//$data['stok']=$this->input->post('stok');
			
			$data['cekidbuku']=$this->M_buku->select_buku($data);
			$row=$data['cekidbuku']->num_rows();
			if ($row == 0)
			{
				$judul=$this->input->post('judul');
				$penerbit=$this->input->post('penerbit');
				$tahun=$this->input->post('tahun');
				$pengarang=$this->input->post('pengarang');
				$stok=$this->input->post('stok');
				$tanggal_masuk=$this->input->post('tanggal_masuk');

				$data=array (
					'Judul' => $judul,
					'Penerbit' => $penerbit,
					'Tahun' => $tahun,
					'Pengarang' => $pengarang,
					'Stok' => $stok,
					'Tanggal_masuk'=> $tanggal_masuk
				);
				$this->M_buku->insert_buku($data);
				echo '<script language="javascript">alert("Data Berhasil di simpan!"); </script>';
			}
			else
			{
				$data['stok']=$this->input->post('stok');
				$data['id_buku']=$this->input->post('id_buku');
			
				$this->M_buku->update_stok($data);
				echo '<script language="javascript">alert("Data Berhasil di simpan!"); </script>';
			}
			$this->inputbuku();
		}
	}

	public function updatetransaksi()
	{
		if( $this->input->post('submit'))
		{
			$data['id_petugas']= $this->input->post('id_petugas');
			$data['nim']= $this->input->post('nim');
			$data['id_buku']= $this->input->post('id_buku');
			$data['jumlah']= $this->input->post('jumlah');
			$data['judul']= $this->input->post('judul');
			//$tanggal= $this->input->post('tanggal');
			
			$CekPeminjaman= $this->M_peminjaman->select_data($data);
			$cek=$CekPeminjaman->num_rows();
			if ( $cek == 0) 
			{
				echo '<script language="javascript">alert("Data Buku Tidak ada!");</script>';
				$this->kelolatransaksi();
			}

			else
			{
				$data['id_petugas']= $this->input->post('id_petugas');
				$data['nim']= $this->input->post('nim');
				$data['id_buku']= $this->input->post('id_buku');
				$data['jumlah']= $this->input->post('jumlah');
				$data['judul']=$this->input->post('judul');
				$data['status']=$this->input->post('status');
				$data['cekidtransaksi']=$this->input->post('id_transaksi');
				
				$this->M_peminjaman->update_transaksi($data);
				echo '<script language="javascript">alert("Data Berhasil di Update!"); </script>';
				$this->kelolatransaksi();
			}	
		}
		else
		{
			$this->kelolatransaksi();
		}
		
			
	}
		
	public function update_buku()
	{
		if($this->input->post('submit'))
		{
			$data['judul']=$this->input->post('judul');
			$data['penerbit']=$this->input->post('penerbit');
			$data['tahun']=$this->input->post('tahun');
			$data['pengarang']=$this->input->post('pengarang');
			$data['tanggalmasuk']=$this->input->post('tanggal_masuk');
			//$data['stok']=$this->input->post('stok');
			
			$data['cekidbuku']=$this->M_buku->select_buku($data);
			$row=$data['cekidbuku']->num_rows();
			if ($row == 0)
			{
				$data['idbuku']=$this->input->post('id_buku');
				$data['judul']=$this->input->post('judul');
				$data['penerbit']=$this->input->post('penerbit');
				$data['tahun']=$this->input->post('tahun');
				$data['pengarang']=$this->input->post('pengarang');
				$data['stok']=$this->input->post('stok');
				$data['tanggal_masuk']=$this->input->post('tanggal_masuk');
			
				$this->M_buku->update_buku($data);
				$this->M_peminjaman->update_transaksi3($data);

				echo '<script language="javascript">alert("Data Berhasil di Update!"); </script>';
			}
			else
			{
				echo '<script language="javascript">alert("Data buku sudah ada!"); </script>';
			}
			$this->kelola_buku();
		}
		else
		{
			$this->kelola_buku();
		}
	}

	public function cekpeminjaman()
	{
		if ($this->input->post('cekidpeminjaman'))
		{
			$data['cekidpeminjaman']=$this->input->post('idpeminjaman');
			
			$cekidp=$this->M_peminjaman->cekidtransaksi2($data);
			$num=$cekidp->num_rows();
			if ($num == 0)
			{
				echo '<script  language="javascript">alert("ID Peminjaman tidak ada")</script>';
				$this->inputpengembalian();
			}
			else{
				$cekidpeminjaman=$this->input->post('idpeminjaman');
				$data['tanggalpengembalian']=Date('Y-m-d');
				$data['cek']=$this->db->get_where('transaksi',array('ID_transaksi' => $cekidpeminjaman))->row();
				$data['cekidpeminjaman']=$this->input->post('idpeminjaman');
				$data['denda']=$this->M_denda->denda($data)->row();
				$data['selisih']=$data['denda']->selisih;
				
				if ($data['selisih'] > 7)
				{
					$data['selisih']=($data['selisih'] -7) *1000;
					$this->load->view('V_inputPengembalian2', $data);	
				}
				else
				{
					$data['selisih']="0";
					$this->load->view('V_inputPengembalian2', $data);
				}
			}
		}
	}

	public function cekpeminjaman_kelola()
	{
		if ($this->input->post('cekidpeminjaman'))
		{
			$data['cekdatatransaksi']=$this->input->post('idpeminjaman');
			
			$data['tampung']=$this->M_peminjaman->select_data_transaksi($data);
			$row=$data['tampung']->num_rows();
			if ($row == 0)
			{
				echo '<script  language="javascript">alert("ID transaksi tidak ada")</script>';
				$this->kelolatransaksi();
			}
			else 
			{
			$data['tampung']=$this->M_peminjaman->select_data_transaksi($data)->result();
			$this->load->view('V_kelolapeminjaman', $data);
			}
			
		}

	}

	public function cek_kelola_buku()
	{
		if ($this->input->post('cekidbuku'))
		{
			$data['databuku']=$this->input->post('idBuku');
			
			$data['cekidp']=$this->M_buku->caribuku($data);
			$row=$data['cekidp']->num_rows();
			if ($row == 0)
			{
				echo '<script  language="javascript">alert("Data buku tidak ada")</script>';
				$this->kelola_buku();
			}
			//$cekidbuku=$this->input->post('idBuku');
			// $data['cekidp']=$this->M_peminjaman->cekidpeminjaman($data);
			//$data['nomor']='1';
			//$data['tampung3']=$this->M_buku->caribuku()->row();
			else
			{
				$data['cekidp']=$this->M_buku->caribuku($data)->result();
				$this->load->view('V_keloladatabuku', $data);	
			}
			
		}

	}
	
	public function tampil_data_peminjaman()
	{
		$data['tampung']= $this->M_peminjaman->select_semua_peminjaman();
		$this->load->view('V_kelolapeminjaman', $data);
	}

	public function deletetransaksi($ID_transaksi)
	{
		$this->M_peminjaman->delete_transaksi($ID_transaksi);
		$this->kelolatransaksi();
	}
	
	public function deletedatabuku($ID_buku)
	{
		$this->M_buku->delete_buku($ID_buku);
		$this->kelola_buku();
	}
	
	public function edittransaksi()
	{
		$data['cekidtransaksi']=$this->input->get('ID_transaksi');
		
		$data['datatransaksi'] = $this->M_peminjaman->cekidtransaksi($data)->row();
		$this->load->view('V_edittransaksi', $data);	
	}

	public function editbuku()
	{
		$data['cekidbuku']=$this->input->get('ID_buku');
		
		$data['databuku']=$this->M_buku->cekidbuku($data)->row();
		$this->load->view('V_editbuku', $data);
	}
		
	public function exporttoexcel()
	{
		if ($this->input->post('cetak'))
		{
			$data['tampungtgl1']=$this->input->post('tanggal1');
			$data['tampungtgl2']=$this->input->post('tanggal2');
			
			$data['tampung4']=$this->M_peminjaman->select_toexcel($data)->result();
			$this->load->view('ViewExcelTransaksi',$data);
		}
	}

	public function exporttoexcelbuku()
	{
		if ($this->input->post('cetak'))
		{
			$data['tampungtgl1']=$this->input->post('tanggal1');
			$data['tampungtgl2']=$this->input->post('tanggal2');
			
			$data['tampung5']=$this->M_buku->select_toexcelBuku($data)->result();
			$this->load->view('ViewExcelBuku',$data);
		}
	}

	public function exporttoexceldenda()
	{
		if ($this->input->post('cetak')){
			$data['tampungtgl1']=$this->input->post('tanggal1');
			$data['tampungtgl2']=$this->input->post('tanggal2');
			
			$data['tampung6']=$this->M_denda->select_toexcelDenda($data)->result();
			$this->load->view('ViewExcelDenda',$data);
		}
	}

}

/* End of file C_transaksi.php */
/* Location: ./application/controllers/C_transaksi.php */