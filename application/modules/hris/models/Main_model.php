<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById()
		{
			$this->datatables->select("a.photo_pegawai, 
				                       CONCAT(a.nama,' (<i>',YEAR(curdate()) - YEAR(a.tgl_lahir),' th</i>)<br><b>Nip</b> : ',a.nip,'<br>','
				                       <b>Agama</b> :' ,a.agama, '<br>',a.tempat_lahir,',',a.tgl_lahir,'<br>', a.status_nikah, '<br><br><br>','
				                       <b>Alamat</b> :', '<br>', a.alamat, '<br>', '<b>RT/RW</b> : ', a.rt,'/',a.rw, '<br>', '<b>Kel</b> : ', a.desa, '<br>', '<b>Kecamatan</b> : ', a.kecamatan, '<br>', '<b>Kota</b> : ', a.kota,'&nbsp;',a.kd_pos) AS biodata_pegawai,
				                       CONCAT ('<b>Jabatan</b> : ', b.nm_jbtn, '<br>', '<b>Status Pegawai</b> : ', a.status_pegawai, '<br>', '<b>Divisi</b> : ', c.nm_divisi, '<br>','<b>Cabang</b> : ', d.nm_cbg)
				                        AS pangkat_jabatan"); 

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