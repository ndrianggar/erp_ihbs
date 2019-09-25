<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById()
		{
			$this->datatables->select("photo_pegawai, 
				                       CONCAT(nama,' (<i>',YEAR(curdate()) - YEAR(tgl_lahir),' th</i>)<br><b>Nip</b> : ', nip,'<br> ','<b>Agama</b> :' ,agama, '<br>',tempat_lahir,',',tgl_lahir,'<br>', status_nikah, '<br><br><br>', '<b>Alamat</b> :', alamat ) AS biodata_pegawai,
				                       CONCAT ('<b>Status Pegawai</b> :', status_pegawai) AS pangkat_jabatan
				                      "); 

			$this->datatables->from("tb_karyawan");
		/*	$this->datatables->order_by("nip asc");
	*/		return $this->datatables->generate();
 		}

	}
?>