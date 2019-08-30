<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main_model extends CI_Model{

		public function check_login($user,$pass)
		{
			$query = $this->db->query("SELECT * FROM tb_siswa WHERE nipd = '$user' AND password = '$pass'");
			return $query;
		}

		public function getDataSiswa($id)
		{
			$query = $this->db->query("SELECT a.*, b.*, c.nm_kelas, d.nm_kls_paralel FROM tb_siswa a INNER JOIN tb_ortu b on a.nipd = b.nipd INNER JOIN tb_kelas c on a.kd_kls = c.kd_kls LEFT JOIN tb_kls_paralel d on a.kd_kls_paralel = d.kd_kls_paralel WHERE a.nipd = '$id'");
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

		/*ini untuk tampilan front*/
		public function showslider()
		{
			$this->db->order_by("id_slider","DESC");
			$query=$this->db->get("tb_slider");
			$this->db->limit(6);
			return $query;
		}

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

		public function get_data_kurikulum()
		{
			$this->db->order_by("kd_kur","desc");
			$query=$this->db->get("tb_kurikulum");
			return $query->result_array();
		}

	     public function create_data_kurikulum()
		{
			$this->db->insert("tb_kurikulum",array('nm_kur'=>''));
			return $this->db->insert_id();
		}

		public function update_data_kurikulum($kd,$value,$modul)
		{
			$this->db->where(array("kd_kur"=>$kd));
			$this->db->update("tb_kurikulum",array($modul=>$value));
		
		}

		public function delete_data_kurikulum($kd){
		$this->db->where("kd_kur",$kd);
		$this->db->delete("tb_kurikulum");

		}

			public function get_data_golongan()
		{
			$this->db->order_by("kd_gol","desc");
			$query=$this->db->get("tb_golongan");
			return $query->result_array();
		}

	     public function create_data_golongan()
		{
			$this->db->insert("tb_golongan",array('nm_gol'=>''));
			return $this->db->insert_id();
		}

		public function update_data_golongan($kd,$value,$modul)
		{
			$this->db->where(array("kd_gol"=>$kd));
			$this->db->update("tb_golongan",array($modul=>$value));
		
		}

		public function delete_data_golongan($kd){
		$this->db->where("kd_gol",$kd);
		$this->db->delete("tb_golongan");

		}

		public function get_data_sttspegawai()
		{
			$this->db->order_by("kd_stts_kpgw","desc");
			$query=$this->db->get("tb_stts_kepg");
			return $query->result_array();
		}

		public function create_data_sttspegawai()
		{
			$this->db->insert("tb_stts_kepg", array('nm_stts_peg'=>''));
			return $this->db->insert_id();
		}

		public function update_data_sttspegawai($kd,$value,$modul)
		{
			$this->db->where(array("kd_stts_kpgw"=>$kd));
			$this->db->update("tb_stts_kepg",array($modul=>$value));
		}

		public function delete_data_sttspegawai($kd)
		{
			$this->db->where("kd_stts_kpgw",$kd);
			$this->db->delete("tb_stts_kepg");

		}

		public function get_data_jurusan()
		{
			$this->db->order_by("kd_jur","desc");
			$query=$this->db->get("tb_jurusan");
			return $query->result_array();
		}


	}
?>