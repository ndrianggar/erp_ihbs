<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById()
		{
			$this->datatables->select("*");
			$this->datatables->from("tb_karyawan");
		/*	$this->datatables->order_by("nip asc");*/
			return $this->datatables->generate();
 		}

	}
?>