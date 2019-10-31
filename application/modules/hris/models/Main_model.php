<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployeeById()
		{
			$this->datatables->select("a.photo_pegawai, a.nip, a.nama,
				                       CONCAT(a.nama,' (<i>',YEAR(curdate()) - YEAR(a.tgl_lahir),' th</i>)<br><b>Nip</b> : ',a.nip,'<br>','
				                       <b>Agama</b> :' ,a.agama, '<br>',a.tempat_lahir,',',a.tgl_lahir,'<br>', a.status_nikah, '<br><br><br>','
				                       <b>Alamat</b> :', '<br>', a.alamat, '<br>', '<b>RT/RW</b> : ', a.rt,'/',a.rw, '<br>', '<b>Kel</b> : ', a.desa, '<br>', '<b>Kecamatan</b> : ', a.kecamatan, '<br>', '<b>Kota</b> : ', a.kota,'&nbsp;',a.kd_pos) AS biodata_karyawan,
				                       CONCAT ('<b>Jabatan</b> : ', b.nm_jbtn, '<br>', '<b>Status Karyawan</b> : ', e.nm_status_karyawan, '<br>', '<b>Divisi</b> : ', c.nm_divisi, '<br>','<b>Cabang</b> : ', d.nm_cbg)
				                        AS pangkat_jabatan"); 

			$this->datatables->from("tb_karyawan a");
			$this->datatables->join("tb_jabatan b"," a.id_jabatan = b.id_jabatan");
			$this->datatables->join("tb_divisi c"," a.id_divisi = c.id_divisi");	
			$this->datatables->join("tb_cabang d"," a.id_cbg = d.id_cbg","LEFT");
			$this->datatables->join("tb_status_karyawan e"," a.id_status_karyawan = e.id_status_karyawan");
			$this->db->order_by("a.nama ASC");


		/*	$this->datatables->order_by("nip asc");
	*/		return $this->datatables->generate();
 		}

 		public function getPosition(){
 		 $query = $this->db->query(" SELECT * FROM tb_jabatan")->result_array();
			return json_encode($query);				                     

 			
 		}

 		public function importDataEmployee($data_akun,$data_karyawan)
 		{
 			$this->db->trans_start();
 			$this->db->insert_batch("tb_karyawan",$data_karyawan);
 			$this->db->insert_batch("tb_user",$data_akun);

 			if($this->db->trans_status()===FALSE){
 				$this->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}

 		}

 		public function importDataUniv($datauniv)
 		{
 			$this->db->trans_start();
 			$this->db->insert_batch("tb_college_krywn",$datauniv);
 		
 			if($this->db->trans_status()===FALSE){
 				$this->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}

 		}


 		public function buat_kodeOtmts(){
 			$query = $this->db->query("SELECT MAX(RIGHT(nip,5)) AS kd_max FROM tb_karyawan");
 			$code = "";

 			if($query->num_rows()>0){
 				foreach($query->result() as $k){ 
 				 $tmp = ((int)$k->kd_max)+1;
 				 $code = sprintf("%05s", $tmp);
 				}
 			}else{
 				$code = "00001";
 			}

 			date_default_timezone_set('Asia/Jakarta');
 			return $code;
 		}

 		public function GetsttsKrywn(){
		 	$sql="SELECT * FROM tb_status_karyawan";
		    $query=$this->db->query($sql)->result_array();
		    return json_encode($query);

 		}

 		public function GetMjbtn(){
		 	$sql="SELECT * FROM tb_jabatan";
		    $query=$this->db->query($sql)->result_array();
		    return json_encode($query);

 		}

 		public function GetMpendidikanTrkhr(){
 			$sql="SELECT * FROM tb_jenjang_pddkn";
 			$query=$this->db->query($sql)->result_array();
 			return json_encode($query);
 		}

 		public function GetMuniversitas(){
 			$sql="SELECT * FROM tb_college_krywn";
 			$query=$this->db->query($sql)->result_array();
 			return json_encode($query);
 		}

 		public function GetMfakultas(){
 			$sql="SELECT * FROM tb_fakultas_krywn";
 			$query=$this->db->query($sql)->result_array();
 			return json_encode($query);
 		}

 		public function GetMjurusan(){
 			$sql="SELECT * FROM tb_jurusan_krywn";
 			$query=$this->db->query($sql)->result_array();
 			return json_encode($query);
 		}
 		
 		public function GetMprovinsi(){
 			$sql="SELECT * FROM tb_provinsi";
 			$query=$this->db->query($sql)->result_array();
 			return json_encode($query);
 		}

	}
?>