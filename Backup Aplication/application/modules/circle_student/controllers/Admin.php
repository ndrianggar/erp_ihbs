 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
   Class Admin extends CI_Controller{
      public function __construct(){
                  parent::__construct();
                  $this->load->model("Main_model"); 
                  //template from helper
      }

            public function index()
            {
                  $login = $this->isLogin();
                  if ($login) {
                        $data["parent_title"] = "Dashboard";
                        $data["child_title"] = "";
                        $this->template->load("mainAdmin_v","dashboard_v",$data);
                  }else{
                        redirect();
                  }
            }



             Public function data_slider()
             {
               $data['parent_title'] = "Master";
               $data['child_title'] = "Data Slider";
               $this->template->load("mainAdmin_v","admin/data_master/slider_v",$data);
             }

             public function get_data_slider()
             {
               $result = $this->Main_model->getslider();
               echo $result;
             }
             public function created_slider()
              {
                $config['upload_path']    ='./assets/upload/image/slider';
                $config['allowed_types']  ='gif|jpg|png';
                $config['encrypt_name']   = TRUE;
               

                $this->load->library('upload', $config);
                if($this->upload->do_upload("gambar")){
                    $data =array('upload_data' => $this->upload->data());
                    $image      = $data['upload_data']['file_name'];
                    $id =  $this->input->post('id_slider');
                    $dataslider["nm_slider"] = $this->input->post('nm_slider');
                    $dataslider["urutan"]    = $this->input->post('urutan');
                    $dataslider["keterangan"] = $this->input->post('keterangan');
                    $dataslider["status"]     = $this->input->post('status');
                                    
                    $dataslider['gambar'] = $image;

                    $statinput = $this->input->post('statinput');
                    if ($statinput=="save") {
                      $result=$this->Main_model->muploadslider($dataslider); 
                      echo $result;

                    }elseif($statinput=="update"){
                       $result=$this->Main_model->updateSlider($dataslider,$id); 
                      echo $result;
                    }
                    
                 }
               }
            public function getSliderById()
             {
                $id = $this->input->post('id');
                $result = $this->Main_model->getSliderById($id);
                echo $result;
             }

             public function updateSlider()
             {
               $data= array();
               $id = $this->input->post('id');
               $data["nm_slider"]= $this->input->post('nm_slider');
               $data["gambar"]= $this->input->post('gambar');
               $data["urutan"]= $this->input->post('urutan');
               $data["keterangan"]= $this->input->post('keterangan');
               $data["status"]= $this->input->post('status');

               $result = $this->Main_model->updateSlider($data,$id);
               echo $result;
             }

             public function deleteSlider()
             {
                $id =$this->input->post("id");
                $result = $this->Main_model->deleteListSlider($id);
                echo $result;

             }
            private function isLogin(){
                  $kd_user = $this->session->userdata("kd_user");
                  $user = $this->session->userdata("username");
                  $section = $this->session->userdata("section");
                  $jabatan = $this->session->userdata("jabatan");
                  $level = $this->session->userdata("level");
                  if(!empty($kd_user)&&!empty($user)&&!empty($section)&&!empty($jabatan)&&!empty($level))
                  {
                         return TRUE;
                  }else{
                         return FALSE;
                  }
            }

            public function data_identitas_sekolah()
            {
                  $data["parent_title"] = "Master";
                  $data["child_title"]  = "Data Indentitas Sekolah";
                  $this->template->load("mainAdmin_v","admin/data_master/idSekolah_v",$data);
            }

            public function get_dataSekolah()
            {
                  $result = $this->Main_model->get_dataSekolah();
                  echo $result;
            }

            public function saveDataSekolah()
            {
                  $data = array();
                  $data["nm_sekolah"] = $this->input->post("nmSekolah");
                  $data["npsn"] = $this->input->post("npsn");
                  $data["nss"]  = $this->input->post("nss");
                  $data["alamat_sekolah"] = $this->input->post("alamat");
                  $data["kd_pos"] = $this->input->post("kdPos");
                  $data["desa"]   = $this->input->post("desa");
                  $data["kecamatan"] = $this->input->post("kec");
                  $data["kota"] = $this->input->post("kota");
                  $data["no_tlp"]  = $this->input->post("tlp");
                  $data["fax"]   = $this->input->post("fax");
                  $data["email"] = $this->input->post("email");
                  $data["website"] = $this->input->post("web");
                  $data["unit"] = $this->input->post("unit");
                  $data["deleted"] = "false";

                  $result = $this->Main_model->insertDataSekolah($data);
                  echo $result;
            }

            public function deleteListSekolah()
            {
                  $id = $this->input->post("id");
                  $result = $this->Main_model->deleteListSekolah($id);
                  echo $result;
            }

            public function getDataSekolahById()
            {
                  $id = $this->input->post("id");
                  $result = $this->Main_model->getDataSekolahById($id);
                  echo $result;
            }

            public function updateSekolah()
            {
                  $data = array();
                  $id = $this->input->post("id");
                  $data["nm_sekolah"] = $this->input->post("nmSekolah");
                  $data["npsn"] = $this->input->post("npsn");
                  $data["nss"]  = $this->input->post("nss");
                  $data["alamat_sekolah"] = $this->input->post("alamat");
                  $data["kd_pos"] = $this->input->post("kdPos");
                  $data["desa"]   = $this->input->post("desa");
                  $data["kecamatan"] = $this->input->post("kec");
                  $data["kota"] = $this->input->post("kota");
                  $data["no_tlp"]  = $this->input->post("tlp");
                  $data["fax"]   = $this->input->post("fax");
                  $data["email"] = $this->input->post("email");
                  $data["website"] = $this->input->post("web");
                  $data["unit"] = $this->input->post("unit");
                  $data["deleted"] = "false";

                  $result = $this->Main_model->updateSekolah($data,$id);
                  echo $result;
            }

            public function data_tahun_akademik()
            {
                  $data["parent_title"] = "Master";
                  $data["child_title"]  = "Data Tahun Akademik";
                  $this->template->load("mainAdmin_v","admin/data_master/thnAkademik_v",$data);
            }

            public function getDataThnAkademik()
            {
                  $result = $this->Main_model->getDataThnAkademik();
                  echo $result;
            }

            public function saveThnAkademik()
            {
                  $data = array();
                  $data["unit"] = $this->input->post("unit");
                  $data["nm_thn_akademik"] = $this->input->post("nmThn");
                  $data["keterangan"] = $this->input->post("ket");
                  $data["status"] = $this->input->post("stat");

                  $result = $this->Main_model->insertThnAkademik($data);
                  echo $result;
            }

            public function deleteThnAkademik()
            {
                  $id = $this->input->post("id");
                  $result = $this->Main_model->deleteThnAkademik($id);
                  echo $result;
            }

            public function getThnAkademikById()
            {
                  $id = $this->input->post("id");
                  $result = $this->Main_model->getThnAkademikById($id);
                  echo $result;
            }

            public function updateThnAkademik()
            {
                  $data = array();
                  $id = $this->input->post("id");
                  $data["unit"] = $this->input->post("unit");
                  $data["nm_thn_akademik"] = $this->input->post("nmThn");
                  $data["keterangan"] = $this->input->post("ket");
                  $data["status"] = $this->input->post("stat");

                  $result = $this->Main_model->updateThnAkademik($data,$id);
                  echo $result;
            }

             public function data_kurikulum()
            {
                  $data["parent_title"] = "Master";
                  $data["child_title"]  = "Data Kurikulum";
                  $data["d_kurikulum"]=$this->Main_model->get_data_kurikulum();
                  $this->template->load("mainAdmin_v","admin/data_master/kurikulum_v",$data);
            }
    
            public function create_data_kurikulum()
            {
              echo json_encode(array("id"=>$this->Main_model->create_data_kurikulum()));
            }

            public function update_data_kurikulum()
            {
               $kd=$this->input->post("id");
               $value=$this->input->post("value");
                $modul=$this->input->post("modul");
                $this->Main_model->update_data_kurikulum($kd,$value,$modul);
               echo "{}"; 
            }

            public function delete_data_kurikulum()
            {
                  $kd=$this->input->post("id");
                  $this->Main_model->delete_data_kurikulum($kd);
                  echo"{}";
            }
            
            public function data_golongan()
            {
                  $data["parent_title"] = "Master";
                  $data["child_title"] = "Data Golongan";
                  $data["d_golongan"]=$this->Main_model->get_data_golongan();
                  $this->template->load("mainAdmin_v","admin/data_master/golongan_v",$data); 
            }


            public function create_data_golongan()
            {
              echo json_encode(array("id"=>$this->Main_model->create_data_golongan()));
            }

            public function update_data_golongan()
            {
               $kd=$this->input->post("id");
               $value=$this->input->post("value");
                $modul=$this->input->post("modul");
                $this->Main_model->update_data_golongan($kd,$value,$modul);
               echo "{}"; 
            }

            public function delete_data_golongan()
            {
                  $kd=$this->input->post("id");
                  $this->Main_model->delete_data_golongan($kd);
                  echo"{}";
            }

            public function data_stts_kepegawaian()
            {
                $data["parent_title"] = "Master";
                $data["child_title"] = "Data Status Kepegawaian";
                $data["d_stts_kepegawaian"] =$this->Main_model->get_data_sttspegawai();
                $this->template->load("mainAdmin_v","admin/data_master/stts_kepg_v",$data);

            }

            public function create_data_sttspegw()
            {
                  echo json_encode(array("id"=>$this->Main_model->create_data_sttspegawai()));
            }

            public function update_data_sttspegw()
            {
                  $kd=$this->input->post("id");
                  $value=$this->input->post("value");
                  $modul=$this->input->post("modul");
                  $this->Main_model->update_data_sttspegawai($kd,$value,$modul);
                  echo "{}";
            }

            public function delete_data_sttspegw()
            {
                  $kd=$this->input->post("id");
                  $this->Main_model->delete_data_sttspegawai($kd);
                  echo"{}";
            }
           
           public function data_admin_sekolah()
           {

               $data["parent_title"] = "Master";
               $data["child_title"] = "Data Admin Sekolah";
               $data["d_adm_sekolah"] =$this->Main_model->get_data_admsekolah();
               $this->template->load("mainAdmin_v","admin/data_master/admsekolah_v",$data);
           }
   }
?>