<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById()
		{
			$this->datatables->select("a.photo_pegawai, a.nama"); 

			$this->datatables->from("tb_karyawan a");
			$this->datatables->join("tb_jabatan b"," a.id_jabatan = b.id_jabatan");
			$this->datatables->join("tb_divisi c"," a.id_divisi = c.id_divisi");	
			$this->datatables->join("tb_cabang d"," a.id_cbg = d.id_cbg");

		/*	$this->datatables->order_by("nip asc");
	*/		return $this->datatables->generate();
 		}

 		public function getPosition(){
 		 $query = $this->db->query(" SELECT * FROM tb_jabatan")->result_array();
			return json_encode($query);				                     

 			
 		}

	}
?>