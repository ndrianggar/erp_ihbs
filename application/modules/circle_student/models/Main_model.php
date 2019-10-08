<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		public function check_login($user,$pass)
		{
			$query = $this->db->query("SELECT * FROM tb_siswa WHERE nipd = '$user' AND password = '$pass'");
			return $query;
		}

		public function getDataSiswaById($id)
		{
			$query = $this->db->query("SELECT a.*, b.*, c.nm_kelas, d.nm_kls_paralel FROM tb_siswa a INNER JOIN tb_ortu b on a.nipd = b.nipd INNER JOIN tb_kelas c on a.kd_kls = c.kd_kls LEFT JOIN tb_kls_paralel d on a.kd_kls_paralel = d.kd_kls_paralel WHERE a.nipd = '$id' AND a.deleted = 'false' AND a.status = 'Aktif'");
			return $query;
		}

		public function updateProfil($dataS,$dataO)
		{
			$this->db->trans_start();
			$this->db->set($dataS);
			$this->db->where('nipd', $dataS["nipd"]);
			$this->db->update('tb_siswa');

			$this->db->set($dataO);
			$this->db->where('nipd', $dataS["nipd"]);
			$this->db->update('tb_ortu');

			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function check_oldPass($data)
		{
			$pass = md5($data["oldPass"]);
			$query = $this->db->query("SELECT nipd FROM tb_siswa WHERE nipd = '$data[id]' AND password = '$pass'");
			return $query->num_rows();
		}

		public function update_pass($data)
		{
			$this->db->trans_start();
			$this->db->set("password",md5($data["newPass"]));
			$this->db->where("nipd",$data["id"]);
			$this->db->update("tb_siswa");

			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataUnit()
		{
			$query = $this->db->query("SELECT * FROM tb_unit WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function changeStatusUnit($id)
		{
			$this->db->trans_start();
			$check = $this->db->query("SELECT * FROM tb_unit WHERE kd_unit = '$id'");
			if ($check->row()->status == "nonaktif") {
				$this->db->set("status","aktif");
			}else{
				$this->db->set("status","nonaktif");
			}
			$this->db->where("kd_unit",$id);
			$this->db->update("tb_unit");

			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function saveUnit($unit)
		{
			$this->db->trans_start();
			$this->db->set('unit', $unit);
			$this->db->insert("tb_unit");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getUnitById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_unit WHERE kd_unit = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateUnit($id,$unit)
		{
			$this->db->trans_start();
			$this->db->set("unit",$unit);
			$this->db->where("kd_unit",$id);
			$this->db->update("tb_unit");
			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteUnit($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_unit",$id);
			$this->db->update("tb_unit");
			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}
			/*ini untuk tampilan front*/
		public function showslider()
		{
			$this->db->order_by("id_slider","DESC");
			$query=$this->db->get("tb_slider");
			$this->db->limit(6);
			return $query;
		}
         //////////////////////////////////////////////

		
			public function getslider()
			{
				$query = $this->db->query("SELECT * FROM tb_slider WHERE id_slider")->
				result_array();
			return json_encode($query);
			}

			public function muploadslider($data)
			{
				$this->db->trans_start();
				$result = $this->db->insert('tb_slider',$data);

				if ($this->db->trans_status()===FALSE) {
					$this->db->trans_rollback();
					return "failed";
				}else{
					$this->db->trans_commit();
					return "success";
				}					
			}

			public function getSliderById($id)
			{
				$query = $this->db->query("SELECT * FROM tb_slider WHERE id_slider ='$id'")->result_array();
				return json_encode($query);
			}

			public function updateSlider($data,$id)
			{
				
				$this->db->trans_start();
				$this->db->set($data);
				$this->db->where('id_slider', $id);
				$this->db->update('tb_slider');

				if ($this->db->trans_status()===FALSE) {
					$this->db->trans_rollback();
					return "failed";
				}else{
					$this->db->trans_commit();
					return "success";
				}
			}
		 	
		 	public function deleteListSlider($id)
		 	{
		 		$this->db->trans_start();
		 		$this->db->where("id_slider",$id);
		 		$this->db->delete("tb_slider");
		 			if($this->db->trans_status()===FALSE){
		 				$this->db->trans_rollback();
		 				return "failed";
		 			}else{

		 				$this->db->trans_commit();
		 				return "success";
		 			}
		 	}
		public function get_dataSekolah()
		{
			$query = $this->db->query("SELECT * FROM tb_id_sekolah WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function insertDataSekolah($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_id_sekolah",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteListSekolah($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_sekolah",$id);
			$this->db->update("tb_id_sekolah");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataSekolahById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_id_sekolah WHERE kd_sekolah = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateSekolah($data,$id)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_sekolah', $id);
			$this->db->update('tb_id_sekolah');

			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKurikulum()
		{
			$query = $this->db->query("SELECT * FROM tb_kurikulum WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function changeStatusKurikulum($id)
		{
			$this->db->trans_start();
			$check = $this->db->query("SELECT * FROM tb_kurikulum WHERE kd_kurikulum = '$id'");
			if ($check->row()->status == "nonaktif") {
				$this->db->set("status","aktif");
			}else{
				$this->db->set("status","nonaktif");
			}
			$this->db->where("kd_kurikulum",$id);
			$this->db->update("tb_kurikulum");

			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function saveKurikulum($data)		
		{
			$this->db->trans_start();
			$this->db->set('nm_kurikulum', $data);
			$this->db->insert("tb_kurikulum");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteKurikulum($id)
		{
			
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_kurikulum",$id);
			$this->db->update("tb_kurikulum");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getKurikulumById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_kurikulum WHERE deleted ='false' AND kd_kurikulum = '$id'")->result_array();
			return json_encode($query);
		}

		public function getDataThnAkademik()
		{
			$query = $this->db->query("SELECT * FROM tb_thn_akademik WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function insertThnAkademik($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_thn_akademik",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteThnAkademik($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_thn_akademik",$id);
			$this->db->update("tb_thn_akademik");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getThnAkademikById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_thn_akademik WHERE deleted ='false' AND kd_thn_akademik = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateThnAkademik($data,$id)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_thn_akademik', $id);
			$this->db->update('tb_thn_akademik');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataGedung()
		{
			$query = $this->db->query("SELECT * FROM tb_gedung WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function insertDataGedung($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_gedung",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteGedung($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_gedung",$id);
			$this->db->update("tb_gedung");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getGedungById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_gedung WHERE deleted = 'false' AND kd_gedung = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateDataGedung($data,$id)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_gedung', $id);
			$this->db->update('tb_gedung');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataRuangan()
		{
			$query = $this->db->query("SELECT * FROM tb_ruangan WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function deleteRuangan($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_ruangan",$id);
			$this->db->update("tb_ruangan");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function insertDataRuangan($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_ruangan",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataRuanganById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_ruangan WHERE kd_ruangan = '$id' and deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function updateRuangan($data,$id)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_ruangan', $id);
			$this->db->update('tb_ruangan');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataJurusan()
		{
			$query = $this->db->query("SELECT * FROM tb_jurusan WHERE deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function getDataJurusanById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_jurusan WHERE kd_jurusan = '$id' AND deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function insertDataJurusan($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_jurusan",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function updateDataJurusan($data,$id)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_jurusan', $id);
			$this->db->update('tb_jurusan');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteJurusan($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_jurusan",$id);
			$this->db->update("tb_jurusan");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKelas()
		{
			$query = $this->db->query("SELECT * FROM tb_kelas WHERE deleted = 'false' order by angka")->result_array();
			return json_encode($query);
		}

		public function insertDataKelas($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_kelas",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKelasById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_kelas WHERE kd_kls = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateDataKelas($id,$data)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_kls', $id);
			$this->db->update('tb_kelas');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteKelas($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_kls",$id);
			$this->db->update("tb_kelas");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKlsParalel()
		{
			$query = $this->db->query("SELECT a.*, b.*, d.nama FROM tb_kls_paralel a INNER JOIN tb_kelas b ON a.kd_kls = b.kd_kls LEFT JOIN tb_guru c ON a.wali_kelas = c.nip LEFT JOIN tb_karyawan d ON c.nip = d.nip WHERE a.deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function getDataGuru()
		{
			$query = $this->db->query("SELECT a.nip, a.nama_guru FROM tb_guru a LEFT JOIN tb_karyawan b ON a.nip = b.nip WHERE a.deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function insertKlsParalel($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_kls_paralel",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteKlsParalel($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_kls_paralel",$id);
			$this->db->update("tb_kls_paralel");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKlsParalelById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_kls_paralel WHERE kd_kls_paralel = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateKlsParalel($id,$data)
		{
			$this->db->trans_start();
			$this->db->set($data);
			$this->db->where('kd_kls_paralel', $id);
			$this->db->update('tb_kls_paralel');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataSiswa()
		{
			$this->datatables->select("a.nipd, a.nisn, a.nama, a.kd_kls, a.kd_kls_paralel, b.unit, c.nm_kls_paralel, d.jurusan");
			$this->datatables->from("tb_siswa a");
			$this->datatables->join("tb_kelas b","a.kd_kls = b.kd_kls","LEFT");
			$this->datatables->join("tb_kls_paralel c","a.kd_kls_paralel = c.kd_kls_paralel","LEFT");
			$this->datatables->join("tb_jurusan d","a.kd_jurusan = d.kd_jurusan","LEFT");
			$this->datatables->where("a.deleted = 'false' AND a.status = 'Aktif'");
			$this->db->order_by("a.nama asc");

			return $this->datatables->generate();
		}

		public function getDataSiswaByKelas($unit,$kd_kls_paralel)
		{
			$this->datatables->select("a.nipd, a.nisn, a.nama, a.kd_kls, a.kd_kls_paralel, b.unit, c.nm_kls_paralel, d.jurusan");
			$this->datatables->from("tb_siswa a");
			$this->datatables->join("tb_kelas b","a.kd_kls = b.kd_kls","LEFT");
			$this->datatables->join("tb_kls_paralel c","a.kd_kls_paralel = c.kd_kls_paralel","LEFT");
			$this->datatables->join("tb_jurusan d","a.kd_jurusan = d.kd_jurusan","LEFT");
			$this->datatables->where("a.unit = '$unit' AND a.kd_kls_paralel = '$kd_kls_paralel' AND a.deleted = 'false' AND a.status = 'Aktif'");
			$this->db->order_by("a.nama asc");
			return $this->datatables->generate();
		}

		public function getDataKlsParalelByUnit($unit)
		{
			$query = $this->db->query("SELECT b.kd_kls_paralel,b.nm_kls_paralel FROM tb_kelas a INNER JOIN tb_kls_paralel b ON a.kd_kls = b.kd_kls WHERE a.unit = '$unit' AND b.deleted = 'FALSE'  AND a.deleted = 'FALSE' order by a.angka")->result_array();
			return json_encode($query);
		}

		public function getDataSiswaByNipd($id)
		{
			$query = $this->db->query("SELECT a.*, b.nm_bpk, b.nm_ibu, b.thn_lahir_bpk, b.thn_lahir_ibu, b.pendidikan_bpk, b.pendidikan_ibu, b.pekerjaan_bpk, b.pekerjaan_ibu, b.no_tlp_bpk, b.no_tlp_ibu, c.nm_kelas, d.nm_kls_paralel FROM tb_siswa a LEFT JOIN tb_ortu b on a.nipd = b.nipd LEFT JOIN tb_kelas c on a.kd_kls = c.kd_kls LEFT JOIN tb_kls_paralel d on a.kd_kls_paralel = d.kd_kls_paralel WHERE a.nipd = '$id' AND a.deleted = 'false' AND a.status = 'Aktif'")->result_array();
			return json_encode($query);
		}

		public function updateDataSiswa($id,$dataS,$dataO)
		{
			$this->db->trans_start();
			$this->db->set($dataS);
			$this->db->where("nipd", $id);
			$this->db->update('tb_siswa');

			$this->db->set($dataO);
			$this->db->where('nipd', $id);
			$this->db->update('tb_ortu');
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKlsByUnit($unit)
		{
			$query = $this->db->query("SELECT kd_kls,nm_kelas, unit FROM tb_kelas WHERE unit = '$unit' ORDER BY angka ASC ")->result_array();
			return json_encode($query);
		}

		public function getDataKlsParalelByKls($kd_kls)
		{
			$query = $this->db->query("SELECT kd_kls_paralel, nm_kls_paralel FROM tb_kls_paralel WHERE kd_kls = '$kd_kls'")->result_array();
			return json_encode($query);
		}

		public function insertDataSiswa($dataS,$dataO)
		{
			$this->db->trans_start();
			$this->db->insert('tb_siswa',$dataS);
			$this->db->insert('tb_ortu',$dataO);
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteSiswa($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("nipd",$id);
			$this->db->update("tb_siswa");
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function importDataSiswa($dataS)
		{
			$this->db->trans_start();
			$this->db->insert_batch("tb_siswa",$dataS);
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataPrintSiswa($unit,$klsP)
		{
			$query = $this->db->query("SELECT `a`.`nipd`, `a`.`nisn`, `a`.`nama`, `a`.`kd_kls`, `a`.`kd_kls_paralel`, `b`.`unit`, `c`.`nm_kls_paralel`, `d`.`jurusan` FROM `tb_siswa` `a` LEFT JOIN `tb_kelas` `b` ON `a`.`kd_kls` = `b`.`kd_kls` LEFT JOIN `tb_kls_paralel` `c` ON `a`.`kd_kls_paralel` = `c`.`kd_kls_paralel` LEFT JOIN `tb_jurusan` `d` ON `a`.`kd_jurusan` = `d`.`kd_jurusan` WHERE `a`.`unit` = '$unit' AND `a`.`kd_kls_paralel` = '$klsP' AND `a`.`deleted` = 'false' AND `a`.`status` = 'Aktif' ORDER BY `a`.`nama` asc")->result_array();
			return $query;
		}

		public function getDataGuruByUnit($unit)
		{
			$this->datatables->select("*");
			$this->datatables->from("tb_guru");
			// $this->datatables->join("tb_karyawan b","a.nip = b.nip","LEFT");
			$this->datatables->where("unit = '$unit' AND deleted = 'false'");
			$this->db->order_by(" nama_guru asc");
			return $this->datatables->generate();
		}

		public function getDetailGuru($id)
		{
			// $query = $this->db->query("SELECT a.*, b.* FROM tb_guru a LEFT JOIN tb_karyawan b ON a.nip = b.nip WHERE a.nip = '$id' AND a.deleted = 'false'")->result_array();
			$query = $this->db->query("SELECT * FROM tb_guru WHERE nip = '$id' AND deleted = 'false'")->result_array();
			return json_encode($query);
		} 


		public function updateDataGuru($dataG,$nip)
		{
			$this->db->trans_start();
			$this->db->set($dataG);
			$this->db->where("nip", $nip);
			$this->db->update('tb_guru');
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function check_oldPassGuru($data)
		{
			$pass = md5($data["oldPass"]);
			$query = $this->db->query("SELECT nip FROM tb_user WHERE nip = '$data[id]' AND password = '$pass'");
			return $query->num_rows();
		}

		public function update_passGuru($data)
		{
			$this->db->trans_start();
			$this->db->set("password",md5($data["newPass"]));
			$this->db->where("nip",$data["id"]);
			$this->db->update("tb_user");

			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function inputDataGuru($data,$data_akun)
		{
			$this->db->trans_start();
			$this->db->insert("tb_guru",$data);
			$this->db->insert("tb_user",$data_akun);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteGuru($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_guru",$id);
			$this->db->update("tb_guru");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function importDataGuru($data_akun,$data_guru)
		{
			$this->db->trans_start();
			$this->db->insert_batch("tb_guru",$data_guru);
			$this->db->insert_batch("tb_user",$data_akun);
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}


		public function getDataKepsek()
		{
			$this->datatables->select("a.*, b.nm_sekolah, b.unit, c.nama_guru");
			$this->datatables->from("tb_kepsek a");
			$this->datatables->join("tb_id_sekolah b","a.kd_sekolah = b.kd_sekolah");
			$this->datatables->join("tb_guru c","a.nip = c.nip");
			$this->datatables->where("a.deleted = 'false' and b.deleted = 'false' and c.deleted = 'false'");
			$this->db->order_by("c.nama_guru asc");
			return $this->datatables->generate();
		}

		public function getDataSekolahByUnit($unit)
		{
			$query = $this->db->query("SELECT kd_sekolah, nm_sekolah, unit FROM tb_id_sekolah WHERE deleted = 'false' AND unit = '$unit' ")->result_array();
			return json_encode($query);
		}

		public function getDetailKepsek($id)
		{
			$query = $this->db->query("SELECT a.*, b.nama_guru, c.unit FROM tb_kepsek a JOIN tb_guru b ON a.nip = b.nip JOIN tb_id_sekolah c ON a.kd_sekolah = c.kd_sekolah WHERE a.deleted = 'false' AND a.kd_kepsek = '$id'")->result_array();
			return json_encode($query);
		}

		public function inputDataKepsek($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_kepsek",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function updateDataKepsek($kd_kepsek,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_kepsek",$kd_kepsek);
			$this->db->update("tb_kepsek",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteKepsek($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_kepsek",$id);
			$this->db->update("tb_kepsek");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getAdminSekolah()
		{
			$this->datatables->select("*");
			$this->datatables->from("tb_user");
			$this->datatables->where("section = 'akademik' AND level in ('1','2') and deleted='false'");
			return $this->datatables->generate();
		}

		public function inputDataAdminSekolah($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_user",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataAdminSekolahById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_user WHERE kd_user = '$id' AND deleted = 'false'")->result_array();
			return json_encode($query);
		}

		public function updateDataAdminSekolah($kd_user,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_user",$kd_user);
			$this->db->update("tb_user",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteAdmin($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_user",$id);
			$this->db->update("tb_user");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataKelompokMapel()
		{
			$query = $this->db->query("SELECT * FROM tb_kelompok_mapel WHERE deleted = 'false'")->result_array();
			return json_encode($query);			
		}

		public function changeStatusKelompokMapel($id)
		{
			$this->db->trans_start();
			$check = $this->db->query("SELECT * FROM tb_kelompok_mapel WHERE kd_kelompok_mapel = '$id'");
			if ($check->row()->status == "nonaktif") {
				$this->db->set("status","Aktif");
			}else{
				$this->db->set("status","Tidak Aktif");
			}
			$this->db->where("kd_kelompok_mapel",$id);
			$this->db->update("tb_kelompok_mapel");

			if ($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getKelompokMapelById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_kelompok_mapel WHERE deleted = 'false' AND kd_kelompok_mapel = '$id'")->result_array();
			return json_encode($query);
		}

		public function inputDataKelompokMapel($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_kelompok_mapel",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function updateDataKelompokMapel($id,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_kelompok_mapel",$id);
			$this->db->update("tb_kelompok_mapel",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteKelompokMapel($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_kelompok_mapel",$id);
			$this->db->update("tb_kelompok_mapel");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataMapel()
		{
			$this->datatables->select("a.*, b.nama_guru");
			$this->datatables->from("tb_mapel a");
			$this->datatables->join("tb_guru b","a.nip_guru = b.nip");
			$this->datatables->where("a.deleted = 'false' and b.deleted = 'false'");
			$this->db->order_by("a.nm_mapel asc");
			return $this->datatables->generate();
		}

		public function getDataKelasByUnit($unit)
		{
			$query = $this->db->query("SELECT * FROM tb_kelas WHERE unit = '$unit' AND deleted = 'false' ORDER BY angka ASC")->result_array();
			return json_encode($query);
		}

		public function getDataJurusanByUnit($unit)
		{
			$query = $this->db->query("SELECT * FROM tb_jurusan WHERE $unit = '$unit'")->result_array();
			return json_encode($query);
		}

		public function inputDataMapel($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_mapel",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function generateKdMapel(){
		    $maxCode = $this->db->query("SELECT MAX(RIGHT(LEFT(`kd_mapel`, 5),3)) AS kode FROM tb_mapel");
		    foreach ($maxCode->result() as $arrMaxCode) {
		      if($arrMaxCode->kode == NULL){
		        $tempCode = "00";
		      }
		      $tempCode = "00".(intval($arrMaxCode->kode)+1);
		      $fixCode = "MP".substr($tempCode,(strlen($tempCode)-3));
		    }
		    return $fixCode;
		}

		public function deleteMapel($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_mapel",$id);
			$this->db->update("tb_mapel");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getMapelById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_mapel WHERE kd_mapel = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateDataMapel($id,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_mapel",$id);
			$this->db->update("tb_mapel",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataJadwal($data)
		{
			$this->datatables->select("a.*, b.nm_mapel,b.nip_guru, c.nama_guru, d.nm_kls_paralel, e.nm_ruangan, f.nm_hari, g.nm_thn_akademik");
			$this->datatables->from("tb_jadwal a");
			$this->datatables->join("tb_mapel b","a.kd_mapel = b.kd_mapel");
			$this->datatables->join("tb_guru c","b.nip_guru = c.nip");
			$this->datatables->join("tb_kls_paralel d","a.kd_kls_paralel = d.kd_kls_paralel");
			$this->datatables->join("tb_ruangan e","a.kd_ruangan = e.kd_ruangan");
			$this->datatables->join("tb_hari f","a.hari = f.kd_hari");
			$this->datatables->join("tb_thn_akademik g","a.kd_thn_akademik = g.kd_thn_akademik");
			$this->datatables->where("a.deleted = 'false' and b.deleted = 'false' and c.deleted = 'false' and a.unit = '$data[unit]' and a.kd_kls_paralel = '$data[kd_kls_paralel]' and a.kd_thn_akademik = '$data[kd_thn_akademik]'");
			$this->db->order_by("a.hari asc");
			return $this->datatables->generate();
		}

		public function getJadwalById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_jadwal WHERE deleted = 'false' AND kd_jadwal = '$id'")->result_array();
			return json_encode($query);
		}

		public function getDataHari()
		{
			$query = $this->db->query("SELECT * FROM tb_hari")->result_array();
			return json_encode($query);
		}

		public function inputDataJadwal($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_jadwal",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getListMapel()
		{
			$query = $this->db->query("SELECT * FROM tb_mapel WHERE deleted = 'false' AND status = 'aktif'")->result_array();
			return json_encode($query);
		}

		public function getGuruByMapel($kd_mapel)
		{
			$query = $this->db->query("SELECT * FROM tb_mapel WHERE deleted = 'false' AND status = 'Aktif' AND kd_mapel = '$kd_mapel'")->result_array();
			return json_encode($query);
		}

		public function updateDataJadwal($id,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_jadwal",$id);
			$this->db->update("tb_jadwal",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteJadwal($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_jadwal",$id);
			$this->db->update("tb_jadwal");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataRentangNilai($unit)
		{
			$query = $this->db->query("SELECT a.*, b.nm_thn_akademik FROM tb_predikat a JOIN tb_thn_akademik b ON a.kd_thn_akademik = b.kd_thn_akademik WHERE a.unit = '$unit'")->result_array();
			return json_encode($query);
		}

		public function inputDataPredikat($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_predikat",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function updateDataPredikat($id,$data)
		{
			$this->db->trans_start();
			$this->db->where("kd_predikat",$id);
			$this->db->update("tb_predikat",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getPredikatById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_predikat WHERE kd_predikat = '$id'")->result_array();
			return json_encode($query);
		}

		public function deletePredikat($id)
		{
			$this->db->trans_start();
			$query = $this->db->query("DELETE FROM tb_predikat WHERE kd_predikat = '$id'");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getListAbsenSiswa($idKls)
		{
			$query = $this->db->query("SELECT a.nipd, a.nama, b.kd_absen_siswa, b.sts_kehadiran FROM tb_siswa a LEFT JOIN tb_absen_siswa b ON a.nipd = b.nipd WHERE a.deleted = 'false' AND a.kd_kls_paralel = '1' GROUP BY a.nipd");
			return $query;
		}

		public function getAbsensiSiswa($nipd,$bulan,$idJdwl,$idMpl,$thnAkdmk)
		{
			$query = $this->db->query("SELECT kd_absen_siswa, DATE_FORMAT(`tanggal`,'%m/%d') AS tgl, sts_kehadiran, guru FROM tb_absen_siswa WHERE nipd = '$nipd' AND DATE_FORMAT(`tanggal`,'%Y-%m') = '$bulan' AND kd_jadwal = '$idJdwl' AND kd_mapel = '$idMpl' AND kd_thn_akademik = '$thnAkdmk' GROUP BY tanggal ORDER BY tanggal ASC");
			return $query;
		}

		public function getJmlTglAbsenSiswa($idKls,$bulan,$idJdwl,$idMpl,$thnAkdmk)
		{
			$query = $this->db->query("SELECT DATE_FORMAT(`tanggal`,'%m/%d') AS tgl FROM tb_absen_siswa WHERE kd_kls_paralel = '$idKls' AND DATE_FORMAT(`tanggal`,'%Y-%m') = '$bulan' AND kd_jadwal = '$idJdwl' AND kd_mapel = '$idMpl' AND kd_thn_akademik = '$thnAkdmk' GROUP BY tanggal ORDER BY tanggal ASC");
			return $query;
		}

		public function inputAbsenSiswa($data)
		{
			$this->db->trans_start();
			$this->db->insert_batch("tb_absen_siswa",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getBlnAbsenPerSmstr($idJdwl,$idMpl,$thnAkdmk)
		{
			$query = $this->db->query("SELECT tanggal FROM tb_absen_siswa WHERE kd_jadwal = '$idJdwl' AND kd_mapel = '$idMpl' AND kd_thn_akademik = '$thnAkdmk' GROUP BY DATE_FORMAT(`tanggal`,'%Y-%m')");
			return $query;
		}

		public function countAbsenSiswa($nipd,$idJdwl,$idMpl,$thnAkdmk)
		{
			$query = $this->db->query("SELECT COUNT(IF(`sts_kehadiran`='H',1, NULL)) 'H',COUNT(IF(`sts_kehadiran`='I',1, NULL)) 'I',COUNT(IF(`sts_kehadiran`='S',1, NULL)) 'S',COUNT(IF(`sts_kehadiran`='A',1, NULL)) 'A' FROM `tb_absen_siswa` WHERE nipd = '$nipd' AND kd_jadwal = '$idJdwl' AND kd_mapel = '$idMpl' AND kd_thn_akademik = '$thnAkdmk' GROUP BY DATE_FORMAT(`tanggal`,'%Y-%m')");
			return $query;
		}

		public function getTahunAkademikById($thnAkdmk)
		{
			$query = $this->db->query("SELECT nm_thn_akademik FROM tb_thn_akademik WHERE kd_thn_akademik = '$thnAkdmk'");
			return $query;
		}

		public function getKlsParalelById($idKls)
		{
			$query = $this->db->query("SELECT nm_kls_paralel FROM tb_kls_paralel");
			return $query;
		}

		public function getDataMapelMateri($unit,$kd_kls)
		{
			$this->datatables->select("*");
			$this->datatables->from("tb_mapel a");
			$this->datatables->join("tb_guru b","a.nip_guru = b.nip");
			$this->datatables->where("a.deleted = 'false' AND a.unit = '$unit' AND a.kelas = '$kd_kls'");
			$this->db->order_by("a.nm_mapel asc");
			return $this->datatables->generate();
		}

		public function getDataMateri($kd_mapel)
		{
			$query = $this->db->query("SELECT a.kd_materi, a.kd_mapel, a.judul_materi, b.nm_mapel FROM tb_materi a JOIN tb_mapel b ON a.kd_mapel = b.kd_mapel WHERE a.kd_mapel = '$kd_mapel' AND a.deleted = 'false'");
			return $query;
		}

		public function getSubMateri($kdMateri)
		{
			$query = $this->db->query("SELECT a.*, b.nama_guru FROM tb_sub_materi a JOIN tb_guru b ON a.created_by = b.nip WHERE a.kd_materi = '$kdMateri' AND a.deleted  = 'false'");
			return $query;
		}

		public function getDataJdlBab($kd_mapel)
		{
			$query = $this->db->query("SELECT * FROM tb_materi WHERE kd_mapel = '$kd_mapel'")->result_array();
			return json_encode($query);
		}

		public function insertDataMateri($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_sub_materi",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteMateri($id)
		{
			$this->db->trans_start();
			$this->db->where('kd_sub_materi', $id);
			$this->db->delete('tb_sub_materi');
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataMateriById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_sub_materi WHERE kd_sub_materi = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateDataMateri($id, $data)
		{
			$this->db->trans_start();
			$this->db->where("kd_sub_materi",$id);
			$this->db->update("tb_sub_materi",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function addJnsCbt($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_jenis_cbt",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataTopikSoal($id)
		{
			$query = $this->db->query("SELECT * FROM tb_topik_soal WHERE kd_mapel = '$id'")->result_array();
			return json_encode($query);
		}

		public function addTopikSoal($data)
		{
			$this->db->trans_start();
			$this->db->insert("tb_topik_soal",$data);
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getTopikSoalById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_topik_soal WHERE kd_topik_soal = '$id'")->result_array();
			echo json_encode($query);
		}

		public function updateTopikSoal($id,$topik)
		{
			$this->db->trans_start();
			$this->db->query("UPDATE tb_topik_soal SET nm_topik_soal = '$topik' WHERE kd_topik_soal = '$id'");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteTopikSoal($id)
		{
			$this->db->trans_start();
			$this->db->where("kd_topik_soal",$id);
			$this->db->delete("tb_topik_soal");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function insertDataSoal($dataPg,$dataE)
		{
			$this->db->trans_start();
			if (!empty($dataPg["pertanyaan_pg"])) {
				$this->db->insert("tb_soal_pg",$dataPg);
			}
			if (!empty($dataE["pertanyaan_essay"])) {
				$this->db->insert("tb_soal_essay",$dataE);
			}
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function uploadDataSoal($dataPg,$dataE,$kdSoal)
		{
			$this->db->trans_start();
			if (!empty($dataPg["pertanyaan_pg"])) {
				$this->db->where("kd_soal_pg",$kdSoal);
				$this->db->update("tb_soal_pg",$dataPg);
			}
			if (!empty($dataE["pertanyaan_essay"])) {
				$this->db->where("kd_soal_essay",$kdSoal);
				$this->db->update("tb_soal_essay",$dataE);
			}
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataBankSoalPg($data)
		{
			$this->datatables->select("kd_soal_pg, pertanyaan_pg, jawab_a, jawab_b, jawab_c, jawab_d, jawab_e, kunci, bobot_pg, pembahasan_pg, last_update");
			$this->datatables->from("tb_soal_pg");
			$this->datatables->where("deleted = 'false' AND kd_topik_soal = '$data[topik]' AND kd_mapel = '$data[kdMapel]' AND kd_kls = '$data[kdKls]'");
			return $this->datatables->generate();
		}

		public function getDataBankSoalEssay($data)
		{
			$this->datatables->select("kd_soal_essay, pertanyaan_essay, bobot_essay, pembahasan_essay, last_update");
			$this->datatables->from("tb_soal_essay");
			$this->datatables->where("deleted = 'false' AND kd_topik_soal = '$data[topik]' AND kd_mapel = '$data[kdMapel]' AND kd_kls = '$data[kdKls]'");
			return $this->datatables->generate();
		}

		public function importSoalPg($data)
		{
			$this->db->trans_start();
			$this->db->insert_batch("tb_soal_pg",$data);
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function importSoalEssay($data)
		{
			$this->db->trans_start();
			$this->db->insert_batch("tb_soal_essay",$data);
			
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteSoalPg($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_soal_pg",$id);
			$this->db->update("tb_soal_pg");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteSoalEssay($id)
		{
			$this->db->trans_start();
			$this->db->set("deleted","true");
			$this->db->where("kd_soal_essay",$id);
			$this->db->update("tb_soal_essay");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getSoalEssayById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_soal_essay WHERE deleted = 'false' AND kd_soal_essay = '$id'")->result_array();
			return json_encode($query);
		}

		public function getSoalPgById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_soal_pg WHERE deleted = 'false' AND kd_soal_pg = '$id'")->result_array();
			return json_encode($query);
		}

		public function getDataJnsCbt()
		{
			$query = $this->db->query("SELECT * FROM tb_jenis_cbt WHERE deleted = 'false' ORDER BY nm_jenis_cbt ASC")->result_array();
			return json_encode($query);
		}

		public function getJenisCbtById($id)
		{
			$query = $this->db->query("SELECT * FROM tb_jenis_cbt WHERE deleted = 'false' AND kd_jenis_cbt = '$id'")->result_array();
			return json_encode($query);
		}

		public function updateJnsCbt($id,$jnsCbt)
		{	
			$this->db->trans_start();
			$this->db->set('nm_jenis_cbt', $jnsCbt);
			$this->db->where("kd_jenis_cbt",$id);
			$this->db->update("tb_jenis_cbt");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function deleteJnsCbt($id)
		{
			$this->db->trans_start();
			$this->db->set('deleted', "true");
			$this->db->where("kd_jenis_cbt",$id);
			$this->db->update("tb_jenis_cbt");
			if ($this->db->trans_status()===FALSE) {
				$this->db->trans_rollback();
				return "failed";
			}else{
				$this->db->trans_commit();
				return "success";
			}
		}

		public function getDataCbt($data)
		{
			$this->datatables->select("a.kd_cbt, a.kd_jenis_cbt, a.nm_cbt,a.kd_kls, b.nm_mapel, b.kkm");
			$this->datatables->from("tb_cbt a");
			$this->datatables->join("tb_mapel b","a.kd_mapel = b.kd_mapel");
			$this->datatables->join("tb_jenis_cbt c", "a.kd_jenis_cbt = c.kd_jenis_cbt");
			$this->datatables->where("a.unit = '$data[unit]' AND a.kd_kls = '$data[kd_kls]' AND a.kd_jenis_cbt = '$data[jns_cbt]' AND a.deleted = 'false'");
			$this->db->order_by("a.kd_cbt asc");
			return $this->datatables->generate();
		}

	}