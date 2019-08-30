<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		public function check_login($user,$pass)
		{
			$query = $this->db->query("SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass' AND deleted = 'false'");
			return $query;
		}
	}
?>