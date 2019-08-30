 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Home extends CI_Controller{
		public function __construct(){
                  parent::__construct();
                  $this->load->model("Main_model");
		}

            public function index()
            {
                  $data['slider'] = $this->Main_model->showslider();
                  $data["session"] = $this->session->userdata("nama");
                  $this->template->load("main_v","home_v",$data);
      	}

      	public function login()
      	{
                  $this->load->view('login_v');
      	}

      	public function check_login()
      	{
      		$user = $this->input->post("user");
      		$pass = $this->input->post("pass");
                  if (!empty($user)||!empty($pass)) {
                        $data = $this->Main_model->check_login($user,md5($pass));
                        $result = $data->num_rows();
                        if ($result>0) {
                              foreach ($data->result_array() as $key) {
                                    $this->session->set_userdata('permition','Siswa');
                                    $this->session->set_userdata('nisn',$key["nisn"]);
                                    $this->session->set_userdata('nipd', $key["nipd"]);
                                    $this->session->set_userdata('nama', $key["nama"]);
                                    $this->session->set_userdata('kelas', $key["kd_kls"]);
                                    $this->session->set_userdata('kd_kls_paralel', $key["kd_kls_paralel"]);
                              }
                              echo json_encode("success");
                        }else{
                              echo json_encode("failed");
                        }
                  }else{
                        echo json_encode("empty");
                  }
      		
      	}

            public function logout()
            {
                  $result = session_destroy();
                  // $this->session->sess_destroy();
                  if ($result) {
                        echo json_encode("success");
                  }else{
                        echo json_encode("failed");
                  }
            }

            public function profile()
            {
                  $id = $this->session->userdata["nipd"];
                  $dt_siswa = $this->Main_model->getDataSiswaById($id);
                  foreach ($dt_siswa->result_array() as $s) {
                        $data = array();
                        // Data Siswa
                        $data["nipd"] = $s["nipd"];
                        $data["nisn"] = $s["nisn"];
                        $data["nik"]  = $s["nik"];
                        $data["nama"] = $s["nama"];
                        $data["tempat_lahir"] = $s["tempat_lahir"];
                        $data["tanggal_lahir"] = $s["tanggal_lahir"];
                        $data["gender"] = $s["gender"];
                        $data["agama"] = $s["agama"];
                        $data["kd_kls"] = $s["kd_kls"];
                        $data["nm_kls_paralel"] = $s["nm_kls_paralel"];
                        $data["kd_jurusan"] = $s["kd_jurusan"];
                        $data["angkatan"] = $s["angkatan"];
                        $data["alamat"] = $s["alamat"];
                        $data["rt"] = $s["rt"];
                        $data["rw"] = $s["rw"];
                        $data["desa"] = $s["desa"];
                        $data["kecamatan"] = $s["kecamatan"];
                        $data["kota"] = $s["kota"];
                        $data["kd_pos"] = $s["kd_pos"];
                        $data["no_tlp"] = $s["no_tlp"];
                        $data["status_kps"] = $s["status_kps"];
                        $data["no_kps"] = $s["no_kps"];
                        $data["skhun"] = $s["skhun"];
                        $data["password"] = $s["password"];
                        $data["status"] = $s["status"];
                        $data["photo"] = $s["photo"];

                        // Data Ortu
                        $data["nm_bpk"] = $s["nm_bpk"];
                        $data["nm_ibu"] = $s["nm_ibu"];
                        $data["thn_lahir_bpk"] = $s["thn_lahir_bpk"];
                        $data["thn_lahir_ibu"] = $s["thn_lahir_ibu"];
                        $data["pendidikan_bpk"] = $s["pendidikan_bpk"];
                        $data["pendidikan_ibu"] = $s["pendidikan_ibu"];
                        $data["pekerjaan_bpk"] = $s["pekerjaan_bpk"];
                        $data["pekerjaan_ibu"] = $s["pekerjaan_ibu"];
                        $data["no_tlp_bpk"] = $s["no_tlp_bpk"];
                        $data["no_tlp_ibu"] = $s["no_tlp_ibu"];
                  }
                  $this->template->load("main_v","profile_v",$data);
            }

            public function update_profil()
            {
                  // Data Siswa
                  $dataS["nipd"] = $this->input->post("nipd");
                  $dataS["nisn"] = $this->input->post("nisn");
                  $dataS["nik"]  = $this->input->post("nik");
                  $dataS["nama"] = $this->input->post("nama");
                  $dataS["tempat_lahir"] = $this->input->post("tmptLahir");
                  $dataS["tanggal_lahir"] = $this->input->post("tglLahir");
                  $dataS["gender"] = $this->input->post("gender");
                  $dataS["agama"] = $this->input->post("agama");
                  $dataS["kd_kls"] = $this->input->post("kls");
                  $dataS["kd_kls_paralel"] = $this->input->post("klsParalel");
                  $dataS["kd_jurusan"] = $this->input->post("jurusan");
                  $dataS["angkatan"] = $this->input->post("angkatan");
                  $dataS["alamat"] = $this->input->post("alamat");
                  $RtRw = explode("/", $this->input->post("RtRw"));
                  $dataS["rt"] = $RtRw[0];
                  $dataS["rw"] = $RtRw[1];
                  $dataS["desa"] = $this->input->post("desa");
                  $dataS["kecamatan"] = $this->input->post("kecamatan");
                  $dataS["kota"] = $this->input->post("kota");
                  $dataS["kd_pos"] = $this->input->post("kdPos");
                  $dataS["no_tlp"] = $this->input->post("tlp");
                  $dataS["status_kps"] = $this->input->post("statusKps");
                  $dataS["no_kps"] = $this->input->post("noKps");
                  $dataS["skhun"] = $this->input->post("skhun");

                  // Data Ortu
                  $dataO["nm_bpk"] = $this->input->post("nmBpk");
                  $dataO["nm_ibu"] = $this->input->post("nmIbu");
                  $dataO["thn_lahir_bpk"] = $this->input->post("thnLhrBpk");
                  $dataO["thn_lahir_ibu"] = $this->input->post("thnLhrIbu");
                  $dataO["pendidikan_bpk"] = $this->input->post("pendidikanBpk");
                  $dataO["pendidikan_ibu"] = $this->input->post("pendidikanIbu");
                  $dataO["pekerjaan_bpk"] = $this->input->post("pekerjaanBpk");
                  $dataO["pekerjaan_ibu"] = $this->input->post("pekerjaanIbu");
                  $dataO["no_tlp_bpk"] = $this->input->post("noTlpBpk");
                  $dataO["no_tlp_ibu"] = $this->input->post("noTlpIbu");

                  $result = $this->Main_model->updateProfil($dataS,$dataO);
                  echo json_encode($result);
            }

            public function change_pass()
            {
                  $data = array();
                  $data["id"] = $this->session->userdata("nipd");
                  $data["oldPass"] = $this->input->post("oldPass");
                  $data["newPass"] = $this->input->post("newPass");
                  if (!empty($data["oldPass"])||!empty($data["newPass"])) {
                        $check_oldPass = $this->Main_model->check_oldPass($data);
                        if ($check_oldPass>0) {
                              $result = $this->Main_model->update_pass($data);
                              echo $result;
                        }else{
                              echo "wrong";
                        }
                  }else{
                        echo "empty";
                  }

            }

            public function library()
            {
                  $this->template->load("main_v","library_v");
            }
	}
?>