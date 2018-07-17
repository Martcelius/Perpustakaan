<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

public function cekLogin($data)
{
	return $this->db->query("SELECT NamaP,Username,Password FROM petugas WHERE Username='".$data['username']."' AND Password='".$data['password']."' ");
}
	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */