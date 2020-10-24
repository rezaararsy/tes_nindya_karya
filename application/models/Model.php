<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
    function getBarangAll()
	{
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
        return $hasil->result();
	}
}