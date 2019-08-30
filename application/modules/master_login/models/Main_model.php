<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		public function check_login($user,$pass)
		{
			$query = $this->db->query("SELECT a.*, b.unit FROM tb_user a LEFT JOIN tb_guru b ON a.nip = b.nip WHERE a.username = '$user' AND a.password = '$pass' AND a.deleted = 'false'");
			return $query;
		}
	}
?>