<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		

		public function getEmployee()
		{
			$this->datatables->select("a.photo_pegawai, a.nip, a.nama, a.kd_karyawan,
				                       CONCAT(a.nama,' (<i>',YEAR(curdate()) - YEAR(a.tgl_lahir),' th</i>)<br><b>Nip</b> : ',a.nip,'<br>','
				                       <b>Agama</b> :' ,a.agama, '<br>',a.tempat_lahir,',',a.tgl_lahir,'<br>', a.status_nikah, '<br><br><br>','
				                       <b>Alamat</b> :', '<br>', a.alamat, '<br>', '<b>RT/RW</b> : ', a.rt,'/',a.rw, '<br>', '<b>Kel</b> : ', g.namaKel, '<br>', '<b>Kecamatan</b> : ', f.namaKec, '<br>', '<b>Kota/Kab</b> : ', e.namaKab,'&nbsp;',a.kd_pos, '<br>', '<b>Provinsi</b> : ', h.namaProv) AS biodata_employee,
				                       CONCAT ('<b>Jabatan</b> : ', b.nm_jbtn, '<br>', '<b>Status Karyawan</b> : ', i.nm_status_karyawan, '<br>', '<b>Divisi</b> : ', c.nm_divisi, '<br>','<b>Cabang</b> : ', d.nm_cbg)
				                        AS pangkat_jabatan"); 

			$this->datatables->from("tb_karyawan a");
			$this->datatables->join("tb_jabatan b"," a.id_jabatan = b.id_jabatan");
			$this->datatables->join("tb_divisi c"," a.id_divisi = c.id_divisi");	
			$this->datatables->join("tb_cabang d"," a.id_cbg = d.id_cbg","LEFT");
			$this->datatables->join("tb_kabupaten e"," a.id_kab = e.id_kab");
			$this->datatables->join("tb_kecamatan f"," a.id_kec = f.id_kec");
			$this->datatables->join("tb_kelurahan g"," a.id_kel = g.id_kel");
			$this->datatables->join("tb_provinsi h"," a.id_prov = h.id_prov");
			$this->datatables->join("tb_status_karyawan i"," a.id_status_karyawan =i.id_status_karyawan");
			$this->datatables->WHERE("a.deleted = 'false'");
			$this->db->order_by("a.nama ASC");


		/*	$this->datatables->order_by("nip asc");
	*/		return $this->datatables->generate();
 		}

 		public function getPosition(){
 		 $query = $this->db->query(" SELECT * FROM tb_jabatan")->result_array();
			return json_encode($query);				                     

 			
 		}

 		public function importDataEmployee($data_akun,$data_employee)
 		{
 			$this->db->trans_start();
 			$this->db->insert_batch("tb_karyawan",$data_employee);
 			$this->db->insert_batch("tb_user",$data_akun);

 			if($this->db->trans_status()===FALSE){
 				$this->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}

 		}

 		public function inputDataEmployee($data, $data_akun)
 		{
 			$this->db->trans_start();
 			$this->db->insert("tb_karyawan",$data);
 			$this->db->insert("tb_user",$data_akun);
 			if($this->db->trans_status()===FALSE){
 				$this->db->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}

 		}

 		public function updateDataEmployee($data, $data_akun, $kd_karyawan)
 		{
 			$this->db->trans_start();
 			$this->db->set($data);
 			$this->db->WHERE("kd_karyawan",$kd_karyawan);
 			$this->db->update("tb_karyawan");

 			$this->db->set($data_akun);
 			$this->db->WHERE("nip",$data['nip']);
 			$this->db->update("tb_user");

 			if($this->db->trans_status()===FALSE){
 				$this->db->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}

 		}

 		public function deleteMemployee($id)

 		{
 			$this->db->trans_start();
 			$this->db->set("deleted","true");
 			$this->db->WHERE("kd_karyawan",$id);
 			$this->db->UPDATE("tb_karyawan");
 			if($this->db->trans_status()===FALSE){
 				$this->db->trans_rollback();
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
		
		public function GetMJobtitle(){
		 	$sql="SELECT * FROM tb_job_title";
		    $query=$this->db->query($sql)->result_array();
		    return json_encode($query);

 		}

 		public function GetMCountries(){
		 	$sql="SELECT * FROM tb_countries";
		    $query=$this->db->query($sql)->result_array();
		    return json_encode($query);

 		}

 		public function GetMcbg(){
		 	$sql="SELECT * FROM tb_cabang";
		    $query=$this->db->query($sql)->result_array();
		    return json_encode($query);

 		}

    	public function GetMdivisi(){
		 	$sql="SELECT * FROM tb_divisi";
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

 		public function GetMkabupaten($id){
 		  	$sql =$this->db->query(
 		  		"SELECT * FROM tb_kabupaten
 		  		WHERE id_prov ='$id' ORDER BY namaKab;"

 		  	)->result_array();
 		  	return json_encode($sql);
 		}

 		public function GetMkecamatan($id){
 			$sql =$this->db->query(
      			"SELECT * FROM tb_kecamatan
 		  		WHERE id_kab ='$id' ORDER BY namaKec;"
 		  	)->result_array();

 		  	return json_encode($sql);

 		}

 		public function GetMkelurahan($id){
 			$sql =$this->db->query(
      			"SELECT * FROM tb_kelurahan
 		  		WHERE id_kec ='$id' ORDER BY namaKel;"
 		  	)->result_array();

 		  	return json_encode($sql);

 		}

 		public function  getMEmployeeid($id){
 		 		   $sql = $this->db->query(
 		   		"SELECT a.*,b.country_name, c.namaProv FROM tb_karyawan a
 		   		 JOIN tb_countries b ON  a.id_country =b.id_country
 		   		 JOIN tb_countries c ON  a.id_prov =c.id_prov
 		   		 WHERE kd_karyawan ='$id'")->result_array();
 		   return $sql;

	}
	public function  getMUserid($nip){
 		 		   $sql = $this->db->query(
 		   		"SELECT * FROM tb_user
 		   		 WHERE username ='$nip'")->result_array();
 		   return $sql;

	}
}
?>