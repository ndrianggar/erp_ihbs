<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById($id)
		{
			$this->datatables->select("*");
			$this->datatables->from("tb_pegawai");
			$this->datatables->order_by("asc");
			return $this->datatables->genarate();
 		}

	}
?>