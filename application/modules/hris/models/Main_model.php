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

 		public function getDivison(){
 		 $query = $this->db->query(" SELECT * FROM tb_divisi")->result_array();
			return json_encode($query);				                     

 			
 		}

 		public function getJbtitle(){
 		 $query = $this->db->query(" SELECT a.*, b.nm_jbtn FROM tb_job_title a
 		 							 JOIN tb_jabatan b on b.id_jabatan=a.id_jabatan")->result_array();

 	
			return json_encode($query);				                     
 			
 		}	


 		public function getMRenumerasi(){
 		 $query = $this->db->query(" SELECT a.*, b.nm_jnjng_pddk FROM tb_renum_gaji a
 		 							 JOIN tb_jenjang_pddkn b on b.id_jnjng_pddk=a.id_jnjng_pddk 
 		 							  Group by b.id_jnjng_pddk, a.golongan, a.masa_kerjaMin, a.masa_kerjaMax ASC ")->result_array();

 	
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

 		public function deleteMemployee($id, $id2)

 		{
 			$this->db->trans_start();
 			$this->db->set("deleted","true");
 			$this->db->WHERE("kd_karyawan",$id);
 			$this->db->UPDATE("tb_karyawan");

 			$this->db->set("deleted","true");
 			$this->db->WHERE("nip",$id2);
 			$this->db->UPDATE("tb_user");
 			if($this->db->trans_status()===FALSE){
 				$this->db->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}
 		}

 		public function inputMJabatanEmployee($data)
 		{

 			$this->db->trans_status();
 			$this->db->insert("tb_jabatan_tambahan",$data);

 			if($this->db->trans_status()===FALSE){
 				$this->db->trans_rollback();
 				return "failed";
 			}else{
 				$this->db->trans_commit();
 				return "success";
 			}
  		}

  		public function getTmbhJbtnEmployee($nip,$id)
  		{
  			if( $id ==''){
  			$query = $this->db->query("SELECT a.*, b.nm_jbtn, c.job_title FROM tb_jabatan_tambahan a
  									   JOIN tb_jabatan b ON b.id_jabatan =a.id_jabatan
  									   JOIN tb_job_title c ON c.id_job_title=a.id_job_title

  									   WHERE a.deleted='false'  AND a.nip='$nip' order by nip ASC

  				")->result_array();
  		}else{
  			$query = $this->db->query("SELECT a.*, b.nm_jbtn, c.job_title FROM tb_jabatan_tambahan a
  									   JOIN tb_jabatan b ON b.id_jabatan =a.id_jabatan
  									   JOIN tb_job_title c ON c.id_job_title=a.id_job_title

  									   WHERE a.deleted='false'  AND a.id_jabatan_tambahan='$id' order by nip ASC

  				")->result_array();

  		}

  			return json_encode($query);

  		}

  		public function updateMJabatanEmployee($data,$id)
  		{
  			$this->db->trans_start();
  			$this->db->set($data);
  			$this->db->WHERE('id_jabatan_tambahan',$id);
  			$this->db->update('tb_jabatan_tambahan');

			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
  		}

  		public function deleteMTmbhjbtnEmployee($id)
  		{
  			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("id_jabatan_tambahan",$id);
			$this->db->update("tb_jabatan_tambahan");
			if ($this->db->trans_status()===FALSE){
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

 	    public function GetMUnit($id){
 			$sql =$this->db->query(
      			"SELECT * FROM tb_unit
 		  		 WHERE id_divisi ='$id' ORDER BY unit;"
 		  	)->result_array();

 		  	return json_encode($sql);

 		}

 		/*
			 belum digunakan karena pakai tabeljs
 		public function GetMEmployebyunit($id){
 			$sql =$this->db->query(
 				"SELECT * FROM tb_karyawan
 				  WHERE deleted='false' AND kd_unit ='$id' order by nip ")->result_array();

 			return json_encode($sql);
 		}	
*/
 		public function GetMEmployenip($kd_unit,$id_divisi){
 			$this->datatables->select("a.*,b.*,c.*,d.*,e.*,f.*,g.*,h.*,i.*,k.*,m.*"); 

			$this->datatables->from("tb_karyawan a");
			$this->datatables->join("tb_jabatan b"," a.id_jabatan = b.id_jabatan");
			$this->datatables->join("tb_divisi c"," a.id_divisi = c.id_divisi");	
			$this->datatables->join("tb_cabang d"," a.id_cbg = d.id_cbg","LEFT");
			$this->datatables->join("tb_kabupaten e"," a.id_kab = e.id_kab");
			$this->datatables->join("tb_kecamatan f"," a.id_kec = f.id_kec");
			$this->datatables->join("tb_kelurahan g"," a.id_kel = g.id_kel");
			$this->datatables->join("tb_provinsi h"," a.id_prov = h.id_prov");
			$this->datatables->join("tb_status_karyawan i"," a.id_status_karyawan =i.id_status_karyawan");
			
			$this->datatables->join("tb_unit k"," a.kd_unit =k.kd_unit");
			/*$this->datatables->join("tb_penggajian l"," a.id_jnjng_pddk =l.id_gaji", "left");*/
			$this->datatables->join("tb_renum_gaji m"," m.id_jnjng_pddk =a.id_jnjng_pddk");
			$this->datatables->WHERE(" m.kategorDi = 'Freshgraduate' AND a.deleted = 'false' AND k.kd_unit='$kd_unit' AND c.id_divisi ='$id_divisi' ");
			$this->db->order_by("a.nama ASC");
			
			return $this->datatables->generate();		
		}

 		public function  getMEmployeeid($id){
 		 		   $sql = $this->db->query(
 		   		"SELECT a.*,b.country_name, c.namaProv, d.namaKab, e.namaKec, f.namaKel, g.nm_jbtn, h.job_title, i.nm_cbg, j.nm_divisi,YEAR(curdate()) - YEAR(a.mulai_brgbg) AS jml_brgb, k.nm_status_karyawan, l.nm_jnjng_pddk, m.nm_college_krywn, n.nm_fakultas_krywn, o.nm_jurusan_krywn FROM tb_karyawan a
 		   		 JOIN tb_countries b ON  a.id_country =b.id_country
 		   		 JOIN tb_provinsi c ON  a.id_prov =c.id_prov
 		   		 JOIN tb_kabupaten d ON  a.id_kab =d.id_kab
 		   		 JOIN tb_kecamatan e ON  a.id_kec =e.id_kec
 		   		 JOIN tb_kelurahan f ON  a.id_kel =f.id_kel
 		   		 JOIN tb_jabatan   g ON    a.id_jabatan =g.id_jabatan
 		   		 JOIN tb_job_title h ON    a.id_job_title =h.id_job_title
 		   		 JOIN tb_cabang i ON    a.id_cbg =i.id_cbg
 		   		 JOIN tb_divisi j ON    a.id_divisi =j.id_divisi
 		   		 JOIN tb_status_karyawan k ON    a.id_status_karyawan =k.id_status_karyawan
 		   		 JOIN tb_jenjang_pddkn l ON    a.id_jnjng_pddk =l.id_jnjng_pddk
 		   		 JOIN tb_college_krywn m ON    a.id_college_krywn =m.id_college_krywn
 		   		 JOIN tb_fakultas_krywn n ON    a.id_fakultas_krywn =n.id_fakultas_krywn
 		   		 JOIN tb_jurusan_krywn o ON    a.id_jurusan_krywn =o.id_jurusan_krywn
 		   		
 		  
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