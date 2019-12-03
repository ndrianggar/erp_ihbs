<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Model extends CI_Model{

		public function checkAppaccess($nip)
		{
			$query = $this->db->query("SELECT hak_akses FROM tb_user WHERE nip = '$nip'");
			return $query;
		}
		
	}
?>