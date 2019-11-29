 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main extends CI_Controller{
		public function __construct(){
         parent::__construct();
         $this->load->library('encryption');
         $this->load->model("Main_model");
		}

      public function index()
      {
         $this->isLogin();
         $data["parent_title"] = "Dashboard";
         $data["child_title"] = "";
         $this->template->load("mainAdmin_v","dashboard_v",$data);
   	}

      private function isLogin(){
         $session_kdUser = $this->session->userdata("kd_user");
         $session_username = $this->session->userdata("username");
         $session_section = $this->session->userdata("section");
         $session_jabatan = $this->session->userdata("jabatan");
         $session_level = $this->session->userdata("level");
         if(!empty($session_kdUser)&&
               !empty($session_username)&&
               !empty($session_section)&&
               !empty($session_jabatan)&&
               !empty($session_level))
         {
               
         }else{
                redirect();
         }
      }

      public function data_slider()
      {
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Slider";
         /*   $param = "12345600";*/
            // $var_encrypt = $this->encrypt->encode($param);
            // $var_decrypt = $this->encrypt->decode($var_encrypt);
            $this->template->load("mainAdmin_v","dashboard/front/slider_v",$data);
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

      public function data_unit_sekolah()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Unit Sekolah";
            $this->template->load("mainAdmin_v","dashboard/data_master/unit_v",$data);
      }

      public function getDataUnit()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataUnit();
            echo $result;
      }

      public function changeStatusUnit()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->changeStatusUnit($id);
            echo $result;
      }

      public function saveUnit()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->saveUnit($unit);
            echo $result;
      }

      public function getUnitById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getUnitById($id);
            echo $result;
      }

      public function updateUnit()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $unit = $this->input->post("unit");
            $result = $this->Main_model->updateUnit($id,$unit);
            echo $result;
      }

      public function deleteUnit()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteUnit($id);
            echo $result;
      }

      public function data_identitas_sekolah()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Indentitas Sekolah";
            $this->template->load("mainAdmin_v","dashboard/data_master/idSekolah_v",$data);
      }

      public function get_dataSekolah()
      {
            $this->isLogin();
            $result = $this->Main_model->get_dataSekolah();
            echo $result;
      }

      public function saveDataSekolah()
      {
            $this->isLogin();
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
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteListSekolah($id);
            echo $result;
      }

      public function getDataSekolahById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataSekolahById($id);
            echo $result;
      }

      public function updateSekolah()
      {
            $this->isLogin();
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

      public function data_kurikulum()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Kurikulum";
            $this->template->load("mainAdmin_v","dashboard/data_master/kurikulum_v",$data);
      }

      public function getDataKurikulum()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataKurikulum();
            echo $result;
      }

      public function changeStatusKurikulum()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->changeStatusKurikulum($id);
            echo $result;
      }

      public function saveKurikulum()
      {
            $this->isLogin();
            $nm_kurikulum = $this->input->post("kurikulum");
            $result = $this->Main_model->saveKurikulum($nm_kurikulum);
            echo $result;
      }

      public function deleteKurikulum()
      {
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteKurikulum($id);
            echo $result;
      }

      public function getKurikulumById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getKurikulumById($id);
            echo $result;
      }

      public function data_tahun_akademik()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Tahun Akademik";
            $this->template->load("mainAdmin_v","dashboard/data_master/thnAkademik_v",$data);
      }

      public function getDataThnAkademik()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataThnAkademik();
            echo $result;
      }

      public function saveThnAkademik()
      {
            $this->isLogin();
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
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteThnAkademik($id);
            echo $result;
      }

      public function getThnAkademikById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getThnAkademikById($id);
            echo $result;
      }

      public function updateThnAkademik()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("id");
            $data["unit"] = $this->input->post("unit");
            $data["nm_thn_akademik"] = $this->input->post("nmThn");
            $data["keterangan"] = $this->input->post("ket");
            $data["status"] = $this->input->post("stat");

            $result = $this->Main_model->updateThnAkademik($data,$id);
            echo $result;
      }

      public function data_gedung()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Gedung";
            $this->template->load("mainAdmin_v","dashboard/data_master/gedung_v",$data);
      }

      public function getDataGedung()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataGedung();
            echo $result;
      }

      public function insertDataGedung()
      {
            $this->isLogin();
            $data = array();
            $data["nm_gedung"] = $this->input->post("nm_gedung");
            $data["jml_lantai"] = $this->input->post("jml_lantai");
            $data["panjang"] = $this->input->post("panjang");
            $data["lebar"] = $this->input->post("lebar");
            $data["tinggi"] = $this->input->post("tinggi");
            $data["unit"] = $this->input->post("unit");

            $result = $this->Main_model->insertDataGedung($data);
            echo $result;
      }

      public function deleteGedung()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteGedung($id);
            echo $result;
      }

      public function getGedungById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getGedungById($id);

            echo $result;
      }

      public function updateDataGedung()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("id");
            $data["nm_gedung"] = $this->input->post("nm_gedung");
            $data["jml_lantai"] = $this->input->post("jml_lantai");
            $data["panjang"] = $this->input->post("panjang");
            $data["lebar"] = $this->input->post("lebar");
            $data["tinggi"] = $this->input->post("tinggi");
            $data["unit"] = $this->input->post("unit");

            $result = $this->Main_model->updateDataGedung($data,$id);
            echo $result;
      }

      public function data_ruangan()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Ruangan";
            $data["gedung"] = $this->Main_model->getDataGedung();
            $this->template->load("mainAdmin_v","dashboard/data_master/ruangan_v",$data);
      }

      public function getDataRuangan()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataRuangan();
            echo $result;
      }

      public function deleteRuangan()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteRuangan($id);
            echo $result;
      }

      public function saveRuangan()
      {
            $this->isLogin();
            $data = array();
            $data["unit"] = $this->input->post("unit");
            $data["nm_ruangan"] = $this->input->post("nm_ruangan");
            $data["kd_gedung"] = $this->input->post("kd_gedung"); 
            $data["kapasitas"] = $this->input->post("kapasitas");

            $result = $this->Main_model->insertDataRuangan($data);
            echo $result; 
      }

      public function getDataRuanganById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataRuanganById($id);
            echo $result;
      }

      public function updateRuangan()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("id");
            $data["nm_ruangan"] = $this->input->post("nm_ruangan");
            $data["kd_gedung"] = $this->input->post("kd_gedung");
            $data["kapasitas"] = $this->input->post("kapasitas");
            $data["unit"] = $this->input->post("unit");

            $result = $this->Main_model->updateRuangan($data,$id);
            echo $result;
      }

      public function data_jurusan()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Jurusan";
            $this->template->load("mainAdmin_v","dashboard/data_master/jurusan_v",$data);
      }

      public function getDataJurusan()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataJurusan();
            echo $result;
      }

      public function insertDataJurusan()
      {
            $this->isLogin();
            $data = array();
            $data["jurusan"] = $this->input->post("jurusan");
            $data["nm_jurusan"] = $this->input->post("nm_jurusan");
            $data["bidang_keahlian"] = $this->input->post("bidang_keahlian");
            $data["kopetensi_umum"] = $this->input->post("kopetensi_umum");
            $data["kopetensi_khusus"] = $this->input->post("kopetensi_khusus"); 

            $result = $this->Main_model->insertDataJurusan($data);
            echo $result;
      }

      public function getDataJurusanById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataJurusanById($id);
            echo $result;
      }

      public function updateDataJurusan()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("id");
            $data["jurusan"] = $this->input->post("jurusan");
            $data["nm_jurusan"] = $this->input->post("nm_jurusan");
            $data["bidang_keahlian"] = $this->input->post("bidang_keahlian");
            $data["kopetensi_umum"] = $this->input->post("kopetensi_umum");
            $data["kopetensi_khusus"] = $this->input->post("kopetensi_khusus"); 

            $result = $this->Main_model->updateDataJurusan($data,$id);
            echo $result; 
      }

      public function deleteJurusan()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteJurusan($id);
            echo $result;
      }

      public function data_kelas()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Kelas";
            $this->template->load("mainAdmin_v","dashboard/data_master/kelas_v",$data);
      }

      public function getdataKelas()
      {
            $this->isLogin();
            $result = $this->Main_model->getdataKelas();
            echo $result;
      }

      public function insertdataKelas()
      {
            $this->isLogin();
            $data = array();
            $data["unit"] = $this->input->post("unit");
            $data["kd_kls"] = $this->input->post("kd_kls");
            $data["nm_kelas"] = $this->input->post("nm_kelas");
            $data["angka"] = $this->input->post("angka");

            $result = $this->Main_model->insertdataKelas($data);
            echo $result;
      }

      public function getdataKelasById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getdataKelasById($id);
            echo $result;
      }

      public function updatedataKelas()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("kd_kls");
            $data["unit"] = $this->input->post("unit");
            $data["nm_kelas"] = $this->input->post("nm_kelas");
            $data["angka"] = $this->input->post("angka");

            $result = $this->Main_model->updatedataKelas($id,$data);
            echo $result;
      }

      public function deleteKelas()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteKelas($id);
            echo $result;
      }

      public function data_kelas_paralel()
      {
            $this->isLogin();
            $data["parent_title"] = "Master";
            $data["child_title"]  = "Data Kelas Paralel";
            $this->template->load("mainAdmin_v","dashboard/data_master/klsParalel_v",$data);
      }

      public function getdataKlsParalel()
      {
            $this->isLogin();
            $result = $this->Main_model->getdataKlsParalel();
            echo $result;
      }

      public function getDataGuru()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataGuru();
            echo $result;
      }

      public function insertKlsParalel()
      {
            $this->isLogin();
            $data["kd_kls"] = $this->input->post("kd_kls");
            $data["nm_kls_paralel"] = $this->input->post("kls_paralel");
            $data["wali_kelas"] = $this->input->post("wali_kelas");

            $result = $this->Main_model->insertKlsParalel($data);
            echo $result;
      }

      public function deleteKlsParalel()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteKlsParalel($id);
            echo $result;
      }

      public function getdataKlsParalelById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getdataKlsParalelById($id);
            echo $result;
      }

      public function updateKlsParalel()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $data["kd_kls"] = $this->input->post("kd_kls");
            $data["nm_kls_paralel"] = $this->input->post("kls_paralel");
            $data["wali_kelas"] = $this->input->post("wali_kelas");

            $result = $this->Main_model->updateKlsParalel($id,$data);
            echo $result;
      }

      public function data_siswa()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Pengguna";
            $data["child_title"]  = "Data Siswa";
            $data["sess_unit"] = $this->session->userdata("unit");
            $this->template->load("mainAdmin_v","dashboard/data_pengguna/siswa_v",$data);
      }

      public function getDataSiswa()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $kd_kls_paralel = $this->input->post("kd_kls_paralel");
            $result = $this->Main_model->getDataSiswaByKelas($unit,$kd_kls_paralel);
            echo $result;
      }

      public function getdataKlsParalelByUnit()
      {
            $this->isLogin();
            $unit = explode(" ", $this->input->post("unit"));
            $result = $this->Main_model->getdataKlsParalelByUnit($unit[0]);
            echo $result;
      }

      public function getDataSiswaByNipd()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataSiswaByNipd($id);
            echo $result;
      }

      public function updateDataSiswa()
      {
            $this->isLogin();

            $config['upload_path']="./assets/photo_siswa";
            $config['allowed_types']='gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload',$config);
            if($this->upload->do_upload("edit_photo_siswa")){
                  $data = array('upload_data' => $this->upload->data());
                  $image= $data['upload_data']['file_name']; 
                  
                  $id = $this->input->post("edit_nipd");
                  $dataS["nama"] = $this->input->post("edit_nmSiswa");
                  $dataS["nik"] = $this->input->post("edit_nik");
                  $dataS["nisn"] = $this->input->post("edit_nisn");
                  $dataS["tempat_lahir"] = $this->input->post("edit_tmptLahir");
                  $dataS["tanggal_lahir"] = $this->input->post("edit_tglLahir");
                  $dataS["gender"] = $this->input->post("edit_gender");
                  $dataS["agama"] = $this->input->post("edit_agama");
                  $dataS["unit"] = $this->input->post("edit_unit");
                  $dataS["kd_kls"] = $this->input->post("edit_kls");
                  $dataS["kd_kls_paralel"] = $this->input->post("edit_klsParalel");
                  $dataS["kd_jurusan"] = $this->input->post("edit_jurusan");
                  $dataS["angkatan"] = $this->input->post("edit_angkatan");
                  $dataS["alamat"] = $this->input->post("edit_alamat");
                  $dataS["no_tlp"] = $this->input->post("edit_tlp");
                  $dataS["rt"] = $this->input->post("edit_rt");
                  $dataS["rw"] = $this->input->post("edit_rw");
                  $dataS["desa"] = $this->input->post("edit_desa");
                  $dataS["kecamatan"] = $this->input->post("edit_kecamatan");
                  $dataS["kota"] = $this->input->post("edit_kota");
                  $dataS["kd_pos"] = $this->input->post("edit_kdPos");
                  $dataS["status_kps"] = $this->input->post("edit_statusKPS");
                  $dataS["no_kps"] = $this->input->post("edit_noKPS");
                  $dataS["skhun"] = $this->input->post("edit_skhun");
                  $dataS["photo"] = $image;
                  $dataO["nm_bpk"] = $this->input->post("edit_nmBpk");
                  $dataO["nm_ibu"] = $this->input->post("edit_nmIbu");
                  $dataO["thn_lahir_bpk"] = $this->input->post("edit_thnLhrBpk");
                  $dataO["thn_lahir_ibu"] = $this->input->post("edit_thnLhrIbu");
                  $dataO["pendidikan_bpk"] = $this->input->post("edit_pendidikanBpk");
                  $dataO["pendidikan_ibu"] = $this->input->post("edit_pendidikanIbu");
                  $dataO["pekerjaan_bpk"] = $this->input->post("edit_pekerjaanBpk");
                  $dataO["pekerjaan_ibu"] = $this->input->post("edit_pekerjaanIbu");
                  $dataO["no_tlp_bpk"] = $this->input->post("edit_noTlpBpk");
                  $dataO["no_tlp_ibu"] = $this->input->post("edit_noTlpIbu");

                  $result = $this->Main_model->updateDataSiswa($id,$dataS,$dataO);
                  echo $result;
            }else{

                  $id = $this->input->post("edit_nipd");
                  $dataS["nama"] = $this->input->post("edit_nmSiswa");
                  $dataS["nik"] = $this->input->post("edit_nik");
                  $dataS["nisn"] = $this->input->post("edit_nisn");
                  $dataS["tempat_lahir"] = $this->input->post("edit_tmptLahir");
                  $dataS["tanggal_lahir"] = $this->input->post("edit_tglLahir");
                  $dataS["gender"] = $this->input->post("edit_gender");
                  $dataS["agama"] = $this->input->post("edit_agama");
                  $dataS["unit"] = $this->input->post("edit_unit");
                  $dataS["kd_kls"] = $this->input->post("edit_kls");
                  $dataS["kd_kls_paralel"] = $this->input->post("edit_klsParalel");
                  $dataS["kd_jurusan"] = $this->input->post("edit_jurusan");
                  $dataS["angkatan"] = $this->input->post("edit_angkatan");
                  $dataS["alamat"] = $this->input->post("edit_alamat");
                  $dataS["no_tlp"] = $this->input->post("edit_tlp");
                  $dataS["rt"] = $this->input->post("edit_rt");
                  $dataS["rw"] = $this->input->post("edit_rw");
                  $dataS["desa"] = $this->input->post("edit_desa");
                  $dataS["kecamatan"] = $this->input->post("edit_kecamatan");
                  $dataS["kota"] = $this->input->post("edit_kota");
                  $dataS["kd_pos"] = $this->input->post("edit_kdPos");
                  $dataS["status_kps"] = $this->input->post("edit_statusKPS");
                  $dataS["no_kps"] = $this->input->post("edit_noKPS");
                  $dataS["skhun"] = $this->input->post("edit_skhun");
                  $dataO["nm_bpk"] = $this->input->post("edit_nmBpk");
                  $dataO["nm_ibu"] = $this->input->post("edit_nmIbu");
                  $dataO["thn_lahir_bpk"] = $this->input->post("edit_thnLhrBpk");
                  $dataO["thn_lahir_ibu"] = $this->input->post("edit_thnLhrIbu");
                  $dataO["pendidikan_bpk"] = $this->input->post("edit_pendidikanBpk");
                  $dataO["pendidikan_ibu"] = $this->input->post("edit_pendidikanIbu");
                  $dataO["pekerjaan_bpk"] = $this->input->post("edit_pekerjaanBpk");
                  $dataO["pekerjaan_ibu"] = $this->input->post("edit_pekerjaanIbu");
                  $dataO["no_tlp_bpk"] = $this->input->post("edit_noTlpBpk");
                  $dataO["no_tlp_ibu"] = $this->input->post("edit_noTlpIbu");

                  $result = $this->Main_model->updateDataSiswa($id,$dataS,$dataO);
                  echo $result;
            }
      }

      public function insertDataSiswa()
      {
            $this->isLogin();

            $config['upload_path']="./assets/photo_siswa";
            $config['allowed_types']='gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload',$config);
            if($this->upload->do_upload("photo_siswa")){
                  $data = array('upload_data' => $this->upload->data());
                  $image= $data['upload_data']['file_name']; 
                  
                  $dataS["nipd"] = $this->input->post("nipd");
                  $dataS["nama"] = $this->input->post("nama");
                  $dataS["nik"] = $this->input->post("nik");
                  $dataS["nisn"] = $this->input->post("nisn");
                  $dataS["tempat_lahir"] = $this->input->post("tempat_lahir");
                  $dataS["tanggal_lahir"] = $this->input->post("tanggal_lahir");
                  $dataS["gender"] = $this->input->post("gender");
                  $dataS["agama"] = $this->input->post("agama");
                  $dataS["unit"] = $this->input->post("unit");
                  $dataS["kd_kls"] = $this->input->post("kd_kls");
                  $dataS["kd_kls_paralel"] = $this->input->post("kd_kls_paralel");
                  $dataS["kd_jurusan"] = $this->input->post("kd_jurusan");
                  $dataS["angkatan"] = $this->input->post("angkatan");
                  $dataS["alamat"] = $this->input->post("alamat");
                  $dataS["no_tlp"] = $this->input->post("no_tlp");
                  $dataS["rt"] = $this->input->post("rt");
                  $dataS["rw"] = $this->input->post("rw");
                  $dataS["desa"] = $this->input->post("desa");
                  $dataS["kecamatan"] = $this->input->post("kecamatan");
                  $dataS["kota"] = $this->input->post("kota");
                  $dataS["kd_pos"] = $this->input->post("kd_pos");
                  $dataS["status_kps"] = $this->input->post("status_kps");
                  $dataS["no_kps"] = $this->input->post("no_kps");
                  $dataS["skhun"] = $this->input->post("skhun");
                  $dataS["photo"] = $image;
                  $dataO["nipd"] = $this->input->post("nipd");
                  $dataO["nm_bpk"] = $this->input->post("nm_bpk");
                  $dataO["nm_ibu"] = $this->input->post("nm_ibu");
                  $dataO["thn_lahir_bpk"] = $this->input->post("thn_lahir_bpk");
                  $dataO["thn_lahir_ibu"] = $this->input->post("thn_lahir_ibu");
                  $dataO["pendidikan_bpk"] = $this->input->post("pendidikan_bpk");
                  $dataO["pendidikan_ibu"] = $this->input->post("pendidikan_ibu");
                  $dataO["pekerjaan_bpk"] = $this->input->post("pekerjaan_bpk");
                  $dataO["pekerjaan_ibu"] = $this->input->post("pekerjaan_ibu");
                  $dataO["no_tlp_bpk"] = $this->input->post("no_tlp_bpk");
                  $dataO["no_tlp_ibu"] = $this->input->post("no_tlp_ibu");

                  $result = $this->Main_model->insertDataSiswa($dataS,$dataO);
                  echo $result;
            }else{

                  $dataS["nipd"] = $this->input->post("nipd");
                  $dataS["nama"] = $this->input->post("nama");
                  $dataS["nik"] = $this->input->post("nik");
                  $dataS["nisn"] = $this->input->post("nisn");
                  $dataS["tempat_lahir"] = $this->input->post("tempat_lahir");
                  $dataS["tanggal_lahir"] = $this->input->post("tanggal_lahir");
                  $dataS["gender"] = $this->input->post("gender");
                  $dataS["agama"] = $this->input->post("agama");
                  $dataS["unit"] = $this->input->post("unit");
                  $dataS["kd_kls"] = $this->input->post("kd_kls");
                  $dataS["kd_kls_paralel"] = $this->input->post("kd_kls_paralel");
                  $dataS["kd_jurusan"] = $this->input->post("kd_jurusan");
                  $dataS["angkatan"] = $this->input->post("angkatan");
                  $dataS["alamat"] = $this->input->post("alamat");
                  $dataS["no_tlp"] = $this->input->post("no_tlp");
                  $dataS["rt"] = $this->input->post("rt");
                  $dataS["rw"] = $this->input->post("rw");
                  $dataS["desa"] = $this->input->post("desa");
                  $dataS["kecamatan"] = $this->input->post("kecamatan");
                  $dataS["kota"] = $this->input->post("kota");
                  $dataS["kd_pos"] = $this->input->post("kd_pos");
                  $dataS["status_kps"] = $this->input->post("status_kps");
                  $dataS["no_kps"] = $this->input->post("no_kps");
                  $dataS["skhun"] = $this->input->post("skhun");
                  $dataO["nipd"] = $this->input->post("nipd");
                  $dataO["nm_bpk"] = $this->input->post("nm_bpk");
                  $dataO["nm_ibu"] = $this->input->post("nm_ibu");
                  $dataO["thn_lahir_bpk"] = $this->input->post("thn_lahir_bpk");
                  $dataO["thn_lahir_ibu"] = $this->input->post("thn_lahir_ibu");
                  $dataO["pendidikan_bpk"] = $this->input->post("pendidikan_bpk");
                  $dataO["pendidikan_ibu"] = $this->input->post("pendidikan_ibu");
                  $dataO["pekerjaan_bpk"] = $this->input->post("pekerjaan_bpk");
                  $dataO["pekerjaan_ibu"] = $this->input->post("pekerjaan_ibu");
                  $dataO["no_tlp_bpk"] = $this->input->post("no_tlp_bpk");
                  $dataO["no_tlp_ibu"] = $this->input->post("no_tlp_ibu");

                  $result = $this->Main_model->insertDataSiswa($dataS,$dataO);
                  echo $result;
            }
      }

      public function getdataKlsByUnit()
      {
            $this->isLogin();
            $unit = explode(" ", $this->input->post("unit"));
            $result = $this->Main_model->getdataKlsByUnit($unit[0]);
            echo $result;
      }

      public function getdataKlsParalelByKls()
      {
            $this->isLogin();
            $kd_kls = $this->input->post("kd_kls");
            if (empty($kd_kls)) {
                  $result = $this->Main_model->getdataKlsParalel();
                  echo $result;
            }else{
                  $result = $this->Main_model->getdataKlsParalelByKls($kd_kls);
                  echo $result;
            }
      }

      public function deleteSiswa()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteSiswa($id);
            echo $result;
      }

      public function importDataSiswa()
      {
            $this->isLogin();
            $this->load->library('upload');
      
            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            // $config['max_size']     = '2048';
            $config['overwrite'] = true;
            $config['file_name'] = "import_siswa";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_siswa')){
                  $this->upload->data();
                  // Load plugin PHPExcel
                  include APPPATH.'third_party/PHPExcel/PHPExcel.php';
                  
                  $excelreader = new PHPExcel_Reader_Excel2007();
                  $loadexcel = $excelreader->load('assets/file_format/import_siswa.xlsx'); // Load file yang telah diupload ke folder excel
                  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                  
                  // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
                  $dataS = array();
                  
                  $numrow = 1;
                  foreach($sheet as $row){
                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 1){
                              // Kita push (add) array data ke variabel data
                              array_push($dataS, array(
                                    'nipd' => $row['A'],
                                    'nama' => $row['B'],
                                    'nik' => $row['C'],
                                    'nisn' => $row['D'],
                                    'tempat_lahir' => $row['E'],
                                    'tanggal_lahir' => $row['F'],
                                    'gender' => $row['G'],
                                    'agama' => $row['H'],
                                    'unit' => $row['I'],
                                    'kd_kls' => $row['J'],
                                    'kd_kls_paralel' => $row['K'],
                                    'kd_jurusan' => $row['L'],
                                    'angkatan' => $row['M'],
                                    'alamat' => $row['N'],
                                    'no_tlp' => $row['O'],
                                    'rt' => $row['P'],
                                    'rw' => $row['Q'],
                                    'desa' => $row['R'],
                                    'kecamatan' => $row['S'],
                                    'kota' =>$row['T'],
                                    'kd_pos' => $row['U'],
                                    'status_kps' => $row['V'],
                                    'no_kps' => $row['W'],
                                    'skhun' => $row['X'],
                                    'password' => md5($row['Y']),
                              ));                              
                        }
                        
                        $numrow++; // Tambah 1 setiap kali looping
                  }

                  $return =  $this->Main_model->importDataSiswa($dataS);
                  echo $return;
            }else{
                  echo "failed";
            }
            
      }

      public function printSiswa($unit,$klsP)
      {
            $this->isLogin();
            $dataSiswa  = $this->Main_model->getDataPrintSiswa($unit,$klsP);
            $result = array("siswa" => $dataSiswa);
            $css = "assets/admin/vendor/bootstrap/dist/css/bootstrap.min.css";
            $mpdf = new \Mpdf\Mpdf();
            $page = $this->load->view("data_pengguna/frm_print_siswa",$result,true);
            $mpdf->WriteHTML($page);
            $mpdf->Output();
      }


      public function data_guru()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Pengguna";
            $data["child_title"]  = "Data Guru";
            $this->template->load("mainAdmin_v","dashboard/data_pengguna/guru_v",$data);
      }

      public function getDataGuruByUnit()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->getDataGuruByUnit($unit);
            echo $result;
      }

      public function getDetailGuru()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDetailGuru($id);
            echo $result;
      }

      public function updateDataGuru()
      {
            $this->isLogin();

            $config['upload_path']="./assets/photo_guru";
            $config['allowed_types']='gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload',$config);
            if($this->upload->do_upload("edit_photo_guru")){
                  $data = array('upload_data' => $this->upload->data());
                  $image= $data['upload_data']['file_name']; 
                  
                  $nip  = $this->input->post("edit_nip");
                  $dataG["niy_nigk"] = $this->input->post("edit_niyNig");
                  $dataG["nuptk"] = $this->input->post("edit_nuptk");
                  $dataG["status_kepegawaian"] = $this->input->post("edit_stsPegawai");
                  $dataG["jenis_ptk"] = $this->input->post("edit_ptk");
                  $dataG["pengawas_bidang_studi"] = $this->input->post("edit_bidangStudi");
                  $dataG["tugas_tambahan"] = $this->input->post("edit_tgsTambahan");
                  $dataG["status_keaktifan"] = $this->input->post("edit_stsKeaktifan");
                  $dataG["sk_cpns"] = $this->input->post("edit_skCpns");
                  $dataG["tanggal_cpns"] = $this->input->post("edit_tglCpns");
                  $dataG["sk_pengangkatan"] = $this->input->post("edit_skPengangkatan");
                  $dataG["tmt_pengangkatan"] = $this->input->post("edit_tmtPengangkatan");
                  $dataG["lembaga_pengangkatan"] = $this->input->post("edit_lbPengangkatan");
                  $dataG["golongan"] = $this->input->post("edit_golongan");
                  $dataG["keahlian_laboratorium"] = $this->input->post("edit_ahliLaboratorium");
                  $dataG["sumber_gaji"] = $this->input->post("edit_sumberGaji");
                  $dataG["nama_suami_istri"] = $this->input->post("edit_nmSuamiIstri");
                  $dataG["nip_suami_istri"] = $this->input->post("edit_nmSuamiIstri");
                  $dataG["pekerjaan_suami_istri"] = $this->input->post("edit_pekerjaanSuamiIstri");
                  $dataG["tmt_pns"] = $this->input->post("edit_tmtPns");
                  $dataG["lisensi_kepsek"] = $this->input->post("edit_lisensiKepsek");
                  $dataG["jumlah_sekolah_binaan"] = $this->input->post("edit_sekolahBinaan");
                  $dataG["diklat_kepengawasan"] = $this->input->post("edit_diklatKepengawasan");
                  $dataG["mampu_handle_kk"] = $this->input->post("edit_handleKk");
                  $dataG["keahlian_breile"] = $this->input->post("edit_breile");
                  $dataG["keahlian_bahasa_isyarat"] = $this->input->post("edit_bhsIsyarat");
                  $dataG["photo_guru"] = $image;

                  $dataG["nama_guru"] = $this->input->post("edit_nama");
                  $dataG["agama"] = $this->input->post("edit_agama");
                  $dataG["gender"] = $this->input->post("edit_gender");
                  $dataG["unit"] = $this->input->post("edit_unit");
                  $dataG["alamat"] = $this->input->post("edit_alamat");
                  $dataG["rt"] = $this->input->post("edit_rt");
                  $dataG["rw"] = $this->input->post("edit_rw");
                  $dataG["desa"] = $this->input->post("edit_desa");
                  $dataG["kecamatan"] = $this->input->post("edit_kecamatan");
                  $dataG["kota"] = $this->input->post("edit_kota");
                  $dataG["kd_pos"] = $this->input->post("edit_kdPos");
                  $dataG["no_tlp"] = $this->input->post("edit_tlp");
                  $dataG["email"] = $this->input->post("edit_email");
                  $dataG["tempat_lahir"] = $this->input->post("edit_tmptLahir");
                  $dataG["tanggal_lahir"] = $this->input->post("edit_tglLahir");
                  $dataG["nik"] = $this->input->post("edit_nik");
                  $dataG["npwp"] = $this->input->post("edit_npwp");
                  $dataG["kewarganegaraan"] = $this->input->post("edit_kewarganegaraan");
                  $dataG["status_pernikahan"] = $this->input->post("edit_stsNikah");
                  $dataG["nama_ibu_kandung"] = $this->input->post("edit_ibu");
                  $dataG["npwp"] = $this->input->post("edit_npwp");
                  $dataG["unit"] = $this->input->post("edit_unit");

                  $result = $this->Main_model->updateDataGuru($dataG,$nip);
                  echo $result;
            }else{

                  $nip  = $this->input->post("edit_nip");
                  $dataG["niy_nigk"] = $this->input->post("edit_niyNig");
                  $dataG["nuptk"] = $this->input->post("edit_nuptk");
                  $dataG["status_kepegawaian"] = $this->input->post("edit_stsPegawai");
                  $dataG["jenis_ptk"] = $this->input->post("edit_ptk");
                  $dataG["pengawas_bidang_studi"] = $this->input->post("edit_bidangStudi");
                  $dataG["tugas_tambahan"] = $this->input->post("edit_tgsTambahan");
                  $dataG["status_keaktifan"] = $this->input->post("edit_stsKeaktifan");
                  $dataG["sk_cpns"] = $this->input->post("edit_skCpns");
                  $dataG["tanggal_cpns"] = $this->input->post("edit_tglCpns");
                  $dataG["sk_pengangkatan"] = $this->input->post("edit_skPengangkatan");
                  $dataG["tmt_pengangkatan"] = $this->input->post("edit_tmtPengangkatan");
                  $dataG["lembaga_pengangkatan"] = $this->input->post("edit_lbPengangkatan");
                  $dataG["golongan"] = $this->input->post("edit_golongan");
                  $dataG["keahlian_laboratorium"] = $this->input->post("edit_ahliLaboratorium");
                  $dataG["sumber_gaji"] = $this->input->post("edit_sumberGaji");
                  $dataG["nama_suami_istri"] = $this->input->post("edit_nmSuamiIstri");
                  $dataG["nip_suami_istri"] = $this->input->post("edit_nmSuamiIstri");
                  $dataG["pekerjaan_suami_istri"] = $this->input->post("edit_pekerjaanSuamiIstri");
                  $dataG["tmt_pns"] = $this->input->post("edit_tmtPns");
                  $dataG["lisensi_kepsek"] = $this->input->post("edit_lisensiKepsek");
                  $dataG["jumlah_sekolah_binaan"] = $this->input->post("edit_sekolahBinaan");
                  $dataG["diklat_kepengawasan"] = $this->input->post("edit_diklatKepengawasan");
                  $dataG["mampu_handle_kk"] = $this->input->post("edit_handleKk");
                  $dataG["keahlian_breile"] = $this->input->post("edit_breile");
                  $dataG["keahlian_bahasa_isyarat"] = $this->input->post("edit_bhsIsyarat");

                  $dataG["nama_guru"] = $this->input->post("edit_nama");
                  $dataG["agama"] = $this->input->post("edit_agama");
                  $dataG["gender"] = $this->input->post("edit_gender");
                  $dataG["unit"] = $this->input->post("edit_unit");
                  $dataG["alamat"] = $this->input->post("edit_alamat");
                  $dataG["rt"] = $this->input->post("edit_rt");
                  $dataG["rw"] = $this->input->post("edit_rw");
                  $dataG["desa"] = $this->input->post("edit_desa");
                  $dataG["kecamatan"] = $this->input->post("edit_kecamatan");
                  $dataG["kota"] = $this->input->post("edit_kota");
                  $dataG["kd_pos"] = $this->input->post("edit_kdPos");
                  $dataG["no_tlp"] = $this->input->post("edit_tlp");
                  $dataG["email"] = $this->input->post("edit_email");
                  $dataG["tempat_lahir"] = $this->input->post("edit_tmptLahir");
                  $dataG["tanggal_lahir"] = $this->input->post("edit_tglLahir");
                  $dataG["nik"] = $this->input->post("edit_nik");
                  $dataG["npwp"] = $this->input->post("edit_npwp");
                  $dataG["kewarganegaraan"] = $this->input->post("edit_kewarganegaraan");
                  $dataG["status_pernikahan"] = $this->input->post("edit_stsNikah");
                  $dataG["nama_ibu_kandung"] = $this->input->post("edit_ibu");
                  $dataG["npwp"] = $this->input->post("edit_npwp");
                  $dataG["unit"] = $this->input->post("edit_unit");

                  $result = $this->Main_model->updateDataGuru($dataG,$nip);
                  echo $result;
            }
      }

      public function change_pass_guru()
      {
            $data = array();
            $data["id"] = $this->input->post("nip");
            $data["oldPass"] = $this->input->post("oldPass");
            $data["newPass"] = $this->input->post("newPass");
            if (!empty($data["oldPass"])||!empty($data["newPass"])) {
                $check_oldPass = $this->Main_model->check_oldPassGuru($data);
                if ($check_oldPass>0) {
                      $result = $this->Main_model->update_passGuru($data);
                      echo $result;
                }else{
                      echo "wrong";
                }
            }else{
                echo "empty";
            }
      }

      public function inputDataGuru()
      {
            $this->isLogin();

            $config['upload_path']="./assets/photo_guru";
            $config['allowed_types']='gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload',$config);
            if($this->upload->do_upload("edit_photo_guru")){
                  $data = array('upload_data' => $this->upload->data());
                  $image= $data['upload_data']['file_name']; 

                  $data_akun["nip"] = $this->input->post("input_nip");
                  $data_akun["username"] = $this->input->post("input_nip");
                  $data_akun["password"] = md5($this->input->post("input_password"));
                  $data_akun["section"] = "akademik";
                  $data_akun["jabatan"] = "Guru";
                  $data_akun["level"] = "3";

                  $data["nip"] = $this->input->post("input_nip");
                  $data["nama_guru"] = $this->input->post("input_nama");
                  $data["gender"] = $this->input->post("input_gender"); 
                  $data["tempat_lahir"] = $this->input->post("input_tmptLahir");
                  $data["tanggal_lahir"] = $this->input->post("input_tglLahir");
                  $data["nik"] = $this->input->post("input_nik");
                  $data["niy_nigk"] = $this->input->post("input_niyNigk");
                  $data["nuptk"] = $this->input->post("input_nuptk");
                  $data["status_kepegawaian"] = $this->input->post("input_stsKepegawaian");
                  $data["jenis_ptk"] = $this->input->post("input_ptk");
                  $data["pengawas_bidang_studi"] = $this->input->post("input_bidangStudi");
                  $data["agama"] = $this->input->post("input_agama");
                  $data["alamat"] = $this->input->post("input_alamat");
                  $data["rt"] = $this->input->post("input_rt");
                  $data["rw"] = $this->input->post("input_rw");
                  $data["desa"] = $this->input->post("input_desa");
                  $data["kecamatan"] = $this->input->post("input_kecamatan");
                  $data["kota"] = $this->input->post("input_kota");
                  $data["kd_pos"] = $this->input->post("input_kdPos");
                  $data["no_tlp"] = $this->input->post("input_tlp");
                  $data["email"] = $this->input->post("input_email");
                  $data["tugas_tambahan"] = $this->input->post("input_tgsTambahan");
                  $data["status_keaktifan"] = $this->input->post("input_stsKeaktifan");
                  $data["sk_cpns"] = $this->input->post("input_skCpns");
                  $data["tanggal_cpns"] = $this->input->post("input_tglCpns");
                  $data["sk_pengangkatan"] = $this->input->post("input_skPengangkatan");
                  $data["tmt_pengangkatan"] = $this->input->post("input_tmtPengangkatan");
                  $data["lembaga_pengangkatan"] = $this->input->post("input_lbPengangkatan");
                  $data["golongan"] = $this->input->post("input_golongan");
                  $data["keahlian_laboratorium"] = $this->input->post("input_ahliLaborat");
                  $data["sumber_gaji"] = $this->input->post("input_sumberGaji");
                  $data["nama_ibu_kandung"] = $this->input->post("input_ibu");
                  $data["status_pernikahan"] = $this->input->post("input_stsNikah");
                  $data["nama_suami_istri"] = $this->input->post("input_nmSuamiIstri");
                  $data["nip_suami_istri"] = $this->input->post("input_nipSuamiIstri");
                  $data["pekerjaan_suami_istri"] = $this->input->post("input_pekerjaanSuamiIstri"); 
                  $data["tmt_pns"] = $this->input->post("input_tmtPns");
                  $data["lisensi_kepsek"] = $this->input->post("input_lisensiKepsek");
                  $data["jumlah_sekolah_binaan"] = $this->input->post("input_sekolahBinaan");
                  $data["diklat_kepengawasan"] = $this->input->post("input_diklatKepengawasan");
                  $data["mampu_handle_kk"] = $this->input->post("input_handleKk");
                  $data["keahlian_breile"] = $this->input->post("input_keahlianBreile");
                  $data["keahlian_bahasa_isyarat"] = $this->input->post("input_keahlianBhsIsyarat");
                  $data["npwp"] = $this->input->post("input_npwp");
                  $data["kewarganegaraan"] = $this->input->post("input_kewarganegaraan");
                  $data["photo_guru"] = $image;
                  $data["unit"] = $this->input->post("input_unit");

                  $result = $this->Main_model->inputDataGuru($data,$data_akun);
                  echo $result;
            }else{

                  $data_akun["nip"] = $this->input->post("input_nip");
                  $data_akun["username"] = $this->input->post("input_nip");
                  $data_akun["password"] = md5($this->input->post("input_password"));
                  $data_akun["section"] = "akademik";
                  $data_akun["jabatan"] = "Guru";
                  $data_akun["level"] = "3";

                  $data["nip"] = $this->input->post("input_nip");
                  $data["nama_guru"] = $this->input->post("input_nama");
                  $data["gender"] = $this->input->post("input_gender"); 
                  $data["tempat_lahir"] = $this->input->post("input_tmptLahir");
                  $data["tanggal_lahir"] = $this->input->post("input_tglLahir");
                  $data["nik"] = $this->input->post("input_nik");
                  $data["niy_nigk"] = $this->input->post("input_niyNigk");
                  $data["nuptk"] = $this->input->post("input_nuptk");
                  $data["status_kepegawaian"] = $this->input->post("input_stsKepegawaian");
                  $data["jenis_ptk"] = $this->input->post("input_ptk");
                  $data["pengawas_bidang_studi"] = $this->input->post("input_bidangStudi");
                  $data["agama"] = $this->input->post("input_agama");
                  $data["alamat"] = $this->input->post("input_alamat");
                  $data["rt"] = $this->input->post("input_rt");
                  $data["rw"] = $this->input->post("input_rw");
                  $data["desa"] = $this->input->post("input_desa");
                  $data["kecamatan"] = $this->input->post("input_kecamatan");
                  $data["kota"] = $this->input->post("input_kota");
                  $data["kd_pos"] = $this->input->post("input_kdPos");
                  $data["no_tlp"] = $this->input->post("input_tlp");
                  $data["email"] = $this->input->post("input_email");
                  $data["tugas_tambahan"] = $this->input->post("input_tgsTambahan");
                  $data["status_keaktifan"] = $this->input->post("input_stsKeaktifan");
                  $data["sk_pengangkatan"] = $this->input->post("input_skPengangkatan");
                  $data["tmt_pengangkatan"] = $this->input->post("input_tmtPengangkatan");
                  $data["lembaga_pengangkatan"] = $this->input->post("input_lbPengangkatan");
                  $data["golongan"] = $this->input->post("input_golongan");
                  $data["keahlian_laboratorium"] = $this->input->post("input_ahliLaborat");
                  $data["sumber_gaji"] = $this->input->post("input_sumberGaji");
                  $data["nama_ibu_kandung"] = $this->input->post("input_ibu");
                  $data["status_pernikahan"] = $this->input->post("input_stsNikah");
                  $data["nama_suami_istri"] = $this->input->post("input_nmSuamiIstri");
                  $data["nip_suami_istri"] = $this->input->post("input_nipSuamiIstri");
                  $data["pekerjaan_suami_istri"] = $this->input->post("input_pekerjaanSuamiIstri"); 
                  $data["tmt_pns"] = $this->input->post("input_tmtPns");
                  $data["lisensi_kepsek"] = $this->input->post("input_lisensiKepsek");
                  $data["jumlah_sekolah_binaan"] = $this->input->post("input_sekolahBinaan");
                  $data["diklat_kepengawasan"] = $this->input->post("input_diklatKepengawasan");
                  $data["mampu_handle_kk"] = $this->input->post("input_handleKk");
                  $data["keahlian_breile"] = $this->input->post("input_keahlianBreile");
                  $data["keahlian_bahasa_isyarat"] = $this->input->post("input_keahlianBhsIsyarat");
                  $data["npwp"] = $this->input->post("input_npwp");
                  $data["kewarganegaraan"] = $this->input->post("input_kewarganegaraan");
                  $data["unit"] = $this->input->post("input_unit");

                  $result = $this->Main_model->inputDataGuru($data,$data_akun);
                  echo $result;
            }
      }

      public function deleteGuru()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteGuru($id);
            echo $result;
      }

      public function importDataGuru()
      {
            $this->isLogin();
            $this->load->library('upload');
      
            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            // $config['max_size']     = '2048';
            $config['overwrite'] = true;
            $config['file_name'] = "import_guru";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_guru')){
                  $this->upload->data();
                  // Load plugin PHPExcel
                  include APPPATH.'third_party/PHPExcel/PHPExcel.php';
                  
                  $excelreader = new PHPExcel_Reader_Excel2007();
                  $loadexcel = $excelreader->load('assets/file_format/import_guru.xlsx'); // Load file yang telah diupload ke folder excel
                  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                  
                  // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
                  $data_guru = array();
                  $data_akun = array();
                  
                  $numrow = 1;
                  foreach($sheet as $row){
                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 1){
                              // Push (add) array data ke variabel data
                              array_push($data_akun, array(
                                    'nip' => $row['A'],
                                    'username' => $row['A'],
                                    'password' => md5($row['B']),
                                    'section' => 'akademik',
                                    'jabatan' => 'Guru',
                                    'level' => '3',

                              ));     
                              array_push($data_guru, array(
                                    'nip' => $row['A'],
                                    'nama_guru' => $row['C'],
                                    'gender' => $row['D'],
                                    'tempat_lahir' => $row['E'],
                                    'tanggal_lahir' => $row['F'],
                                    'nik' => $row['G'],
                                    'niy_nigk' => $row['H'],
                                    'nuptk' => $row['I'],
                                    'status_kepegawaian' => $row['J'],
                                    'jenis_ptk' => $row['K'],
                                    'pengawas_bidang_studi' => $row['L'],
                                    'agama' => $row['M'],
                                    'alamat' => $row['N'],
                                    'rt' => $row['O'],
                                    'rw' => $row['P'],
                                    'desa' => $row['Q'],
                                    'kecamatan' => $row['R'],
                                    'kota' =>$row['S'],
                                    'kd_pos' => $row['T'],
                                    'no_tlp' => $row['U'],
                                    'email' => $row['V'],
                                    'tugas_tambahan' => $row['W'],
                                    'status_keaktifan' => $row['X'],
                                    'sk_cpns' => $row['Y'],
                                    'tanggal_cpns' => $row['Z'],
                                    'sk_pengangkatan' => $row['AA'],
                                    'tmt_pengangkatan' => $row['AB'],
                                    'lembaga_pengangkatan' => $row['AC'],
                                    'golongan' => $row['AD'],
                                    'keahlian_laboratorium' => $row['AE'],
                                    'sumber_gaji' => $row['AF'],
                                    'nama_ibu_kandung' => $row['AG'],
                                    'status_pernikahan' => $row['AH'],
                                    'nama_suami_istri' => $row['AI'],
                                    'nip_suami_istri' => $row['AJ'],
                                    'pekerjaan_suami_istri' => $row['AK'],
                                    'tmt_pns' => $row['AL'],
                                    'lisensi_kepsek' => $row['AM'],
                                    'jumlah_sekolah_binaan' => $row['AN'],
                                    'diklat_kepengawasan' => $row['AO'],
                                    'mampu_handle_kk' => $row['AP'],
                                    'keahlian_breile' => $row['AQ'],
                                    'keahlian_bahasa_isyarat' => $row['AR'],
                                    'npwp' => $row['AS'],
                                    'kewarganegaraan' => $row['AT'],
                                    'unit' => $row['AU'],
                              ));                              
                        }
                        
                        $numrow++; // Tambah 1 setiap kali looping
                  }

                  $return =  $this->Main_model->importDataGuru($data_akun,$data_guru);
                  echo $return;
            }else{
                  echo "failed";
            }
            
      }

      public function data_kepala_sekolah()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Pengguna";
            $data["child_title"]  = "Data Kepala Sekolah";
            $this->template->load("mainAdmin_v","dashboard/data_pengguna/kepsek_v",$data);
      }

      public function getDataKepsek()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataKepsek();
            echo $result;
      }

      public function getDataSekolahByUnit()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->getDataSekolahByUnit($unit);
            echo $result;
      }

      public function getDetailKepsek()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDetailKepsek($id);
            echo $result;
      }

      public function inputDataKepsek()
      {
            $this->isLogin();
            $data["nip"] = $this->input->post("input_nip");
            $data["kd_sekolah"] = $this->input->post("select_nmSekolah");
            $result = $this->Main_model->inputDataKepsek($data);
            echo $result;
      }

      public function updateDataKepsek()
      {
            $this->isLogin();
            $kd_kepsek = $this->input->post("kd_kepsek");
            $data["nip"] = $this->input->post("input_nip");
            $data["kd_sekolah"] = $this->input->post("select_nmSekolah");
            $result = $this->Main_model->updateDataKepsek($kd_kepsek,$data);
            echo $result;;
      }

      public function deleteKepsek()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result= $this->Main_model->deleteKepsek($id);
            echo $result;
      }

      public function data_admin()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Pengguna";
            $data["child_title"]  = "Data Admin";
            $this->template->load("mainAdmin_v","dashboard/data_pengguna/admin_v",$data);
      }

      public function getAdminSekolah()
      {
            $this->isLogin();
            $result = $this->Main_model->getAdminSekolah();
            echo $result;
      }

      public function inputDataAdminSekolah()
      {
            $this->isLogin();
            $data  = array();
            $data["nip"] = $this->input->post("input_nip");
            $data["username"] = $this->input->post("input_username");
            $data["password"] = md5($this->input->post("input_password"));
            $data["section"] = "akademik";
            $data["jabatan"] = $this->input->post("input_jabatan");
            $data["level"] = $this->input->post("input_level");

            $result = $this->Main_model->inputDataAdminSekolah($data);
            echo $result;
      }

      public function getDataAdminSekolahById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataAdminSekolahById($id);
            echo $result;
      }

      public function updateDataAdminSekolah()
      {
            $this->isLogin();
            $data  = array();
            $kd_user = $this->input->post("input_kdUser");
            $data["nip"] = $this->input->post("input_nip");
            $data["username"] = $this->input->post("input_username");
            $data["password"] = md5($this->input->post("input_password"));
            $data["section"] = "akademik";
            $data["jabatan"] = $this->input->post("input_jabatan");
            $data["level"] = $this->input->post("input_level");
            $result = $this->Main_model->updateDataAdminSekolah($kd_user,$data);
            echo $result;
      }

      public function deleteAdmin()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteAdmin($id);
            echo $result;
      }

      public function data_kelompok_mapel()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Akademik";
            $data["child_title"]  = "Data Kelompok Mata Pelajaran";
            $this->template->load("mainAdmin_v","dashboard/data_akademik/kelompok_mapel_v",$data);
      }

      public function getDataKelompokMapel()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataKelompokMapel();
            echo $result;
      }

      public function changeStatusKelompokMapel()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->changeStatusKelompokMapel($id);
            echo $result;
      }

      public function getKelompokMapelById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getKelompokMapelById($id);
            echo $result;
      }

      public function inputDataKelompokMapel()
      {
            $this->isLogin();
            $data = array();
            $data["kelompok"] = $this->input->post("input_kelompok");
            $data["keterangan"] = $this->input->post("input_ket");
            $data["status"] = $this->input->post("input_status");

            $result = $this->Main_model->inputDataKelompokMapel($data);
            echo $result;
      }

      public function updateDataKelompokMapel()
      {
            $this->isLogin();
            $id = $this->input->post("input_kdKelompokMapel");
            $data["kelompok"] = $this->input->post("input_kelompok");
            $data["keterangan"] = $this->input->post("input_ket");
            $data["status"] = $this->input->post("input_status");

            $result = $this->Main_model->updateDataKelompokMapel($id,$data);
            echo $result;
      }

      public function deleteKelompokMapel()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteKelompokMapel($id);
            echo $result;
      }

      public function data_mapel()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Akademik";
            $data["child_title"]  = "Data Mata Pelajaran";
            $this->template->load("mainAdmin_v","dashboard/data_akademik/mapel_v",$data);
      }

      public function getDataMapel()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataMapel();
            echo $result;
      }

      public function getDataKelasByUnit()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->getDataKelasByUnit($unit);
            echo $result;
      }

      public function getDataJurusanByUnit()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->getDataJurusanByUnit($unit);
            echo $result;
      }

      public function inputDataMapel()
      {
            $this->isLogin();
            $data = array();
            $data["nm_mapel"] = $this->input->post("input_nmMapel");;
            $data["nip_guru"] = $this->input->post("select_guru");
            $data["nm_mapel_eng"] = $this->input->post("input_nmMapelEng");
            $data["nm_mapel_arb"] = $this->input->post("input_nmMapelArb");
            $data["status_mapel"] = $this->input->post("input_stsMapel");
            $data["sub_mapel"] = $this->input->post("input_subMapel");
            $data["unit"] = $this->input->post("input_unit");
            $data["kelas"] = $this->input->post("input_kelas");
            $data["jurusan"] = $this->input->post("input_jurusan");
            $data["kkm"] = $this->input->post("input_kkm");
            $data["urutan"] = $this->input->post("input_urutan");
            $data["status"] = $this->input->post("input_status");

            $mapel =  explode(" ", $this->input->post("input_nmMapel"));
            $akr_mapel = strtoupper(substr($mapel[0],0,1).substr($mapel[1],0,1));
            $kode = $this->Main_model->generateKdMapel($akr_mapel,$data["kelas"])."/".$akr_mapel."/".$data["kelas"];
            $data["kd_mapel"] = $kode;

            $result = $this->Main_model->inputDataMapel($data);
            echo $result;
      }

      public function getMapelById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getMapelById($id);
            echo $result;

      }

      public function deleteMapel()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteMapel($id);
            echo $result;
      }

      public function updateDataMapel()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("input_kdMapel");
            $data["nm_mapel"] = $this->input->post("input_nmMapel");;
            $data["nip_guru"] = $this->input->post("select_guru");
            $data["nm_mapel_eng"] = $this->input->post("input_nmMapelEng");
            $data["nm_mapel_arb"] = $this->input->post("input_nmMapelArb");
            $data["status_mapel"] = $this->input->post("input_stsMapel");
            $data["sub_mapel"] = $this->input->post("input_subMapel");
            $data["unit"] = $this->input->post("input_unit");
            $data["kelas"] = $this->input->post("input_kelas");
            $data["jurusan"] = $this->input->post("input_jurusan");
            $data["kkm"] = $this->input->post("input_kkm");
            $data["urutan"] = $this->input->post("input_urutan");
            $data["status"] = $this->input->post("input_status");

            $result = $this->Main_model->updateDataMapel($id,$data);
            echo $result;
      }

      public function data_jadwal_pelajaran()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Akademik";
            $data["child_title"]  = "Data Jadwal Pelajaran";
            $this->template->load("mainAdmin_v","dashboard/data_akademik/jadwal_v",$data);
      }

      public function getDataJadwal()
      {
            $this->isLogin();
            $data["unit"] = $this->input->post("unit");
            $data["kd_kls_paralel"] = $this->input->post("kd_kls_paralel");
            $data["kd_thn_akademik"] = $this->input->post("kd_thn_akademik");
            $result = $this->Main_model->getDataJadwal($data);
            echo $result;
      }

      public function getJadwalById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getJadwalById($id);
            echo $result;
      }

      public function getDataHari()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataHari();
            echo $result;
      }

      public function inputDataJadwal()
      {
            $this->isLogin();
            $data = array();
            $data["hari"] = $this->input->post("select_nmHari");
            $data["mulai"] = $this->input->post("input_wktMulai");
            $data["selesai"] = $this->input->post("input_wktSelesai");
            $data["kd_mapel"] = $this->input->post("input_mapel");
            $data["unit"] = $this->input->post("input_unit");
            $data["kd_kls"] = $this->input->post("input_kelas");
            $data["kd_kls_paralel"] = $this->input->post("input_klsParalel");
            $data["kd_ruangan"] = $this->input->post("select_ruangan");
            $data["kd_thn_akademik"] = $this->input->post("select_thnAkademik");
            $data["status"] = $this->input->post("input_status");

            $result = $this->Main_model->inputDataJadwal($data);
            echo $result;
      }

      public function getListMapel()
      {
            $this->isLogin();
            $kls = $this->input->post("kls");
            $result = $this->Main_model->getListMapel($kls);
            echo $result;
      }

      public function getGuruByMapel()
      {
            $this->isLogin();
            $kd_mapel = $this->input->post("kd_mapel");
            $result = $this->Main_model->getGuruByMapel($kd_mapel);
            echo $result;
      }

      public function updateDataJadwal()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("input_kdJadwal");
            $data["hari"] = $this->input->post("select_nmHari");
            $data["mulai"] = $this->input->post("input_wktMulai");
            $data["selesai"] = $this->input->post("input_wktSelesai");
            $data["kd_mapel"] = $this->input->post("input_mapel");
            $data["unit"] = $this->input->post("input_unit");
            $data["kd_kls"] = $this->input->post("input_kelas");
            $data["kd_kls_paralel"] = $this->input->post("input_klsParalel");
            $data["kd_ruangan"] = $this->input->post("select_ruangan");
            $data["kd_thn_akademik"] = $this->input->post("select_thnAkademik");
            $data["status"] = $this->input->post("input_status");

            $result = $this->Main_model->updateDataJadwal($id,$data);
            echo $result;
      }

      public function deleteJadwal()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteJadwal($id);
            echo $result;
      }

      public function data_rentang_nilai()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Akademik";
            $data["child_title"]  = "Data Rentang Nilai";
            $this->template->load("mainAdmin_v","dashboard/data_akademik/rentang_nilai_v",$data);
      }

      public function getDataRentangNilai()
      {
            $this->isLogin();
            $unit = $this->input->post("unit");
            $result = $this->Main_model->getDataRentangNilai($unit);
            echo $result;
      }

      public function inputDataPredikat()
      {
            $this->isLogin();
            $data = array();
            $data["unit"] = $this->input->post("input_unit");
            $data["kd_thn_akademik"] = $this->input->post("select_thnAkademik");
            $data["int_awal"] = $this->input->post("input_intAwal");
            $data["int_akhir"] = $this->input->post("input_intAkhir");
            $data["predikat"] = $this->input->post("input_predikat");
            $data["keterangan"] = $this->input->post("input_keterangan");
            $result = $this->Main_model->inputDataPredikat($data);
            echo $result;
      }

      public function updateDataPredikat()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("kd_predikat");
            $data["unit"] = $this->input->post("input_unit");
            $data["kd_thn_akademik"] = $this->input->post("select_thnAkademik");
            $data["int_awal"] = $this->input->post("input_intAwal");
            $data["int_akhir"] = $this->input->post("input_intAkhir");
            $data["predikat"] = $this->input->post("input_predikat");
            $data["keterangan"] = $this->input->post("input_keterangan");
            $result = $this->Main_model->updateDataPredikat($id,$data);
            echo  $result;
      }

      public function getPredikatById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getPredikatById($id);
            echo $result;
      }

      public function deletePredikat()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deletePredikat($id);
            echo $result;
      }

      public function data_absensi_siswa()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Absensi";
            $data["child_title"]  = "Data Absensi Siswa";
            $data["gedung"] = $this->Main_model->getDataGedung();
            $this->template->load("mainAdmin_v","dashboard/data_absensi/absensi_siswa_v",$data);
      }

      public function getDataAbsensiSiswa()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataAbsensiSiswa();
            echo $result;
      }

      public function getDaftarAbsenSiswa()
      {
            $this->isLogin();
            $nipd = $this->input->post("nipd");
            $result = $this->Main_model->getDaftarAbsenSiswa($nipd);
            echo $result;
      }

      public function getJmlTglAbsenSiswa()
      {
            $this->isLogin();
            $result = $this->Main_model->getJmlTglAbsenSiswa();
            echo $result;
      }

      public function absensi_siswa()
      {
            $this->isLogin();
            $idMpl = $this->input->post("idMpl");
            $idJdwl = $this->input->post("idJdwl");
            $idKls = $this->input->post("idKls");
            $bulan = $this->input->post("bulan");
            $thnAkdmk = $this->input->post("thn");
            $data = array();
            $siswa = $this->Main_model->getListAbsenSiswa($idKls);
            $tanggal = $this->Main_model->getJmlTglAbsenSiswa($idKls,$bulan,$idJdwl,$idMpl,$thnAkdmk);
            $dateNow = date("m/d");
            $data["table"] = "<thead><tr>
              <th class='fixed-side' scope='col' style='background: #91e38e; color: black; text-align: center;' rowspan='2'>#</th>
              <th class='fixed-side' scope='col' style='background: #91e38e; color: black; text-align: center;' rowspan='2'>NIPD</th>
              <th class='fixed-side' scope='col' style='background: #91e38e; color: black; text-align: center;' rowspan='2'>Nama</th>
              <th scope='col' style='text-align: center; background: #91e38e; color: black;' colspan='31'>Kehadiran</th>
            </tr><tr>";
            foreach ($tanggal->result_array() as $tgl):
                   $data["table"] .= "<th style='background: #caf2c6; color: black; text-align: center;'>".$tgl['tgl']."</th>";
            endforeach;
                   $data["table"] .= "<th style='background: #caf2c6; color: black; text-align: center;'><input type='text' class='datepicker' id='tanggal' name='tanggal' style='background:transparent; border:0; font-weight: bold;' size='3' title='Click To Change Date'></th></tr></thead>";
            $no=1; foreach ($siswa->result_array() as $key) {
                  $data["table"] .= "<tbody>
                  <tr>
                        <td class='fixed-side'>".$no++."</td>
                        <td class='fixed-side'>".$key['nipd']."</td>
                        <td class='fixed-side'>".$key['nama']."</td>";
                        $absen = $this->Main_model->getAbsensiSiswa($key['nipd'],$bulan,$idJdwl,$idMpl,$thnAkdmk);
                        foreach ($absen->result_array() as $absen):
                          $data["table"] .= "<td style='padding: 0px; text-align: center;'>";
                            $data["table"] .= "<b>".$absen['sts_kehadiran']."</b></td>";
                        endforeach;

                         $data["table"] .= "<td align='center' style='background:#00b894;'>
                              <input type='hidden' value='".$key['nipd']."' name='nipd[]' id='nipd[]'>
                              <select name='sts_kehadiran[]' id='sts_kehadiran'>
                                 <option>H</option>
                                 <option>I</option>
                                 <option>S</option>
                              </select></td>";
                  $data["table"] .= "</tr>";
            }
                  $data["table"] .= "<tr><td class='fixed-side'></td><td class='fixed-side'></td><td class='fixed-side'></td>";
            foreach ($tanggal->result_array() as $key) {
                  $data["table"] .= "<td align='center'><button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button></td>";
            }
                  $data["table"] .= "<td align='center'><button type='submit' class='btn btn-sm btn-success'><i class='fa fa-check'></i></button></td></tr></tbody>";
            
            echo json_encode($data);
      }

      public function inputAbsenSiswa()
      {
            $this->isLogin();
            $nipd = $this->input->post("nipd");
            $kd_kls_paralel = $this->input->post("kd_kls_paralel");
            $kd_jadwal = $this->input->post("kd_jadwal");
            $kd_mapel = $this->input->post("kd_mapel");
            $kd_thn_akademik = $this->input->post("kd_thn_akademik");
            $tanggal = date("Y-m-d", strtotime($this->input->post("tanggal")));
            $sts_kehadiran = $this->input->post("sts_kehadiran");
            $guru = $this->input->post("guru");



            $data = array();
            foreach ($nipd as $key => $value) {
                  $data[] = array(
                        "nipd" => $nipd[$key],
                        "kd_kls_paralel" => $kd_kls_paralel,
                        "kd_jadwal" => $kd_jadwal,
                        "kd_mapel" => $kd_mapel,
                        "kd_thn_akademik" => $kd_thn_akademik,
                        "tanggal" => $tanggal,
                        "sts_kehadiran" => $sts_kehadiran[$key],
                        "guru" => $guru
                  );
            }

            $result = $this->Main_model->inputAbsenSiswa($data);
            echo $result;
      }

      public function data_rekap_absensi_siswa()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Absensi";
            $data["child_title"]  = "Data Rekap Absensi Siswa";
            $data["gedung"] = $this->Main_model->getDataGedung();
            $this->template->load("mainAdmin_v","data_absensi/rekap_absensi_siswa_v",$data);
      }

      public function rekap_absensi_siswa()
      {
            $this->isLogin();
            $idMpl = $this->input->post("idMpl");
            $idJdwl= $this->input->post("idJdwl");
            $idKls = $this->input->post("idKls");
            $bulan = $this->input->post("bulan");
            $thnAkdmk = $this->input->post("thn");
            $bulan = $this->Main_model->getBlnAbsenPerSmstr($idJdwl,$idMpl,$thnAkdmk);
            $rowspan = 4*$bulan->num_rows();
            $data["table"] = '
            <thead class="thead-light">
            <tr>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">#</th>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">NIPD</th>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">Nama</th>
              <th scope="col" colspan="'.$rowspan.'" style="text-align: center; background: #91e38e; color: black;">Bulan</th>
              <th rowspan="2" colspan="4" style="text-align: center; background: #91e38e; color: black;">Rekap</th>
            </tr>
            <tr>';
            $jml = 0; foreach ($bulan->result_array() as $bln) {
            $data["table"] .= '<th colspan="4" style="text-align: center; background:#00b894; color: black; border-right: 1px solid #fff;">'.date("M", strtotime($bln["tanggal"])).'</th>';$jml++;

            }
            $data["table"] .= '</tr><tr>';
            for ($i=0; $i < $jml; $i++) { 
                  $data["table"] .='
                  <th colspan="col" style="background: #2ecc71; color: black;">H</th>
                  <th colspan="col" style="background: #2ecc71; color: black;">I</th>
                  <th colspan="col" style="background: #2ecc71; color: black;">S</th>
                  <th colspan="col" style="background: #2ecc71; color: black; border-right: 1px solid #fff;">A</th>';
            }
            $data["table"] .= '
                  <th colspan="col" style="background: #27ae60; color: black;">H</th>
                  <th colspan="col" style="background: #27ae60; color: black;">I</th>
                  <th colspan="col" style="background: #27ae60; color: black;">S</th>
                  <th colspan="col" style="background: #27ae60; color: black;">A</th>';

            $data["table"] .= '</tr></thead><tbody>';
            $siswa = $this->Main_model->getListAbsenSiswa($idKls);
            $no=1; foreach ($siswa->result_array() as $key) {
            $countAbsen = $this->Main_model->countAbsenSiswa($key["nipd"],$idJdwl,$idMpl,$thnAkdmk);
                   $data["table"] .= '
                   <tr>
                        <td class="fixed-side">'.$no++.'</td>
                        <td class="fixed-side">'.$key['nipd'].'</td>
                        <td class="fixed-side">'.$key['nama'].'</td>';
                        $totalH=0; $totalI=0; $totalS=0; $totalA=0;  foreach ($countAbsen->result_array() as $absen) {
                        $totalH += $absen['H'];
                        $totalI += $absen['I'];
                        $totalS += $absen['S'];
                        $totalA += $absen['A'];  
                        $data["table"] .= '<td>'.$absen['H'].'</td><td>'.$absen['I'].'</td><td>'.$absen['S'].'</td><td style="border-right: 1px solid #e9ecef;">'.$absen['A'].'</td>';
                        }
                        $data["table"] .= '<td><b>'.$totalH.'</b></td><td><b>'.$totalI.'</b></td><td><b>'.$totalS.'</b></td><td><b>'.$totalA.'</b></td>';

                 $data["table"] .= '</tr>';
            }
            echo json_encode($data);
      }


      public function printRekapAbsenSiswa($unit,$thnAkdmk,$idKls,$idJdwl,$idMpl1,$idMpl2,$idMpl3)
      {
            $this->isLogin();
            $idMpl = $idMpl1."/".$idMpl2."/".$idMpl3;
            $tahun = $this->Main_model->getTahunAkademikById($thnAkdmk)->row();
            $bulan = $this->Main_model->getBlnAbsenPerSmstr($idJdwl,$idMpl,$thnAkdmk);
            $kls = $this->Main_model->getKlsParalelById($idKls)->row();
            $rowspan = 4*$bulan->num_rows();
            $data["table"] = '
            <h3 align="center">REKAP DAFTAR HADIR SISWA '.str_replace("%20", " ", $unit).'</h3>
            <h3 align="center">'.strtoupper($tahun->nm_thn_akademik).'</h3>
            <h3 align="center">KELAS '.$kls->nm_kls_paralel.'</h3>
            <table border="1" style="border-collapse: collapse width:100%; font-size:10px;" width="100%">
            <thead class="thead-light">
            <tr>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">#</th>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">NIPD</th>
              <th class="fixed-side" scope="col" rowspan="3" style="background: #91e38e; color: black; text-align: center;">Nama</th>
              <th scope="col" colspan="'.$rowspan.'" style="text-align: center; background: #91e38e; color: black;">Bulan</th>
              <th rowspan="2" colspan="4" style="text-align: center; background: #91e38e; color: black;">Rekap</th>
            </tr>
            <tr>';
            $jml = 0; foreach ($bulan->result_array() as $bln) {
            $data["table"] .= '<th colspan="4" style="text-align: center; background:#00b894; color: black; border-right: 1px solid #fff;">'.date("M", strtotime($bln["tanggal"])).'</th>';$jml++;

            }
            $data["table"] .= '</tr><tr>';
            for ($i=0; $i < $jml; $i++) { 
                  $data["table"] .='
                  <th colspan="col" style="background: #2ecc71; color: black;">H</th>
                  <th colspan="col" style="background: #2ecc71; color: black;">I</th>
                  <th colspan="col" style="background: #2ecc71; color: black;">S</th>
                  <th colspan="col" style="background: #2ecc71; color: black; border-right: 1px solid #fff;">A</th>';
            }
            $data["table"] .= '
                  <th colspan="col" style="background: #27ae60; color: black;">H</th>
                  <th colspan="col" style="background: #27ae60; color: black;">I</th>
                  <th colspan="col" style="background: #27ae60; color: black;">S</th>
                  <th colspan="col" style="background: #27ae60; color: black;">A</th>';

            $data["table"] .= '</tr></thead><tbody>';
            $siswa = $this->Main_model->getListAbsenSiswa($idKls);
            $no=1; foreach ($siswa->result_array() as $key) {
            $countAbsen = $this->Main_model->countAbsenSiswa($key["nipd"],$idJdwl,$idMpl,$thnAkdmk);
                   $data["table"] .= '
                   <tr>
                        <td class="fixed-side">'.$no++.'</td>
                        <td class="fixed-side">'.$key['nipd'].'</td>
                        <td class="fixed-side">'.$key['nama'].'</td>';
                        $totalH=0; $totalI=0; $totalS=0; $totalA=0;  foreach ($countAbsen->result_array() as $absen) {
                        $totalH += $absen['H'];
                        $totalI += $absen['I'];
                        $totalS += $absen['S'];
                        $totalA += $absen['A'];  
                        $data["table"] .= '<td align="center">'.$absen['H'].'</td><td align="center">'.$absen['I'].'</td><td align="center">'.$absen['S'].'</td><td style="border-right: 1px solid #e9ecef;" align="center">'.$absen['A'].'</td>';
                        }
                        $data["table"] .= '<td align="center"><b>'.$totalH.'</b></td><td align="center"><b>'.$totalI.'</b></td><td align="center"><b>'.$totalS.'</b></td><td align="center"><b>'.$totalA.'</b></td>';

                 $data["table"] .= '</tr>';
            }
            $data["table"] .= '</tbody></table>';
            
            $css = "assets/admin/vendor/bootstrap/dist/css/bootstrap.min.css";
            $mpdf = new \Mpdf\Mpdf();
            $page = $this->load->view("data_absensi/frm_print_rekap_absen_siswa",$data,true);
            $mpdf->WriteHTML($page);
            $mpdf->Output();
            // echo $data["table"];
      }

      public function input_jurnal_kbm()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Jurnal KBM";
            $data["child_title"]  = "Input Jurnal KBM";
            $this->template->load("mainAdmin_v","dashboard/data_jurnal_kbm/input_jurnal_kbm_v",$data);
      }

      public function laporan_jurnal_kbm()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Jurnal KBM";
            $data["child_title"]  = "Laporan Jurnal KBM";
            $this->template->load("mainAdmin_v","dashboard/data_jurnal_kbm/input_jurnal_kbm_v",$data);
      }

      public function data_materi()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Materi & CBT";
            $data["child_title"]  = "Data Materi";
            $this->template->load("mainAdmin_v","dashboard/data_materi_cbt/materi_v",$data);
      }

      public function data_cbt()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Materi & CBT";
            $data["child_title"]  = "Data CBT";
            $this->template->load("mainAdmin_v","dashboard/data_materi_cbt/cbt_v",$data);
            
      }

      public function getDataMapelMateri()
      {
            $this->isLogin();
            $unit =  explode(" ", $this->input->post("unit"));
            $kd_kls = $this->input->post("kd_kls");
            $result = $this->Main_model->getDataMapelMateri($unit[0],$kd_kls);
            echo $result;
      }

      public function getDataMateri()
      {
            $this->isLogin();
            $kd_mapel = $this->input->post("id");
            $mapel  = $this->Main_model->getDataMateri($kd_mapel);
            if ($mapel->num_rows() > 0) {
                  $listMateri = '
            <h1 align="center">'.$mapel->row()->nm_mapel.'</h1>
                <div class="accordion" id="accordionExample">';
                  $i=1;foreach ($mapel->result_array() as $m):
                  $listMateri .= 
                  '<div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="false" aria-controls="collapseTwo">
                          <i class="fa fa-book mr-2"></i>'.$m["judul_materi"].'
                        </button>
                      </h5>
                    </div>
                    <div id="collapse'.$i.'" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <div class="list-group">';
                            $kdMateri = $m["kd_materi"];
                            $subMateri = $this->Main_model->getSubMateri($kdMateri);
                            $n = 1; foreach ($subMateri->result_array() as $s):
                              $listMateri .= '
                              <a class="list-group-item list-group-item-action '; if ($n==1) {$listMateri.="active";} $listMateri .='" id="list-home-list" data-toggle="list" href="#list-'.$n.'" role="tab" aria-controls="home" style="font-size:12px;">'.$s["judul_sub_materi"].'
                                    <span class="nav-link nav-link-icon pull-right" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-settings-gear-65"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbar-default_dropdown_1" style="position: relative;z-index: 10;">
                                          <button class="dropdown-item" href="#" onclick=editMateri("'.$s["kd_sub_materi"].'")><i class="fa fa-edit text-info"></i>Edit</button>
                                          <button class="dropdown-item" href="#" onclick=confirmDelete("Materi","'.$s["kd_sub_materi"].'")><i class="fa fa-trash text-red""></i>Delete</button>                                          
                                    </div>
                              </a>';
                            $n++; endforeach;
                        $listMateri .= '</div></div>
                          <div class="col-9">
                             <div class="tab-content" id="nav-tabContent">';
                                $n = 1; foreach ($subMateri->result_array() as $m):
                                  $listMateri .= '
                                  <div class="tab-pane fade '; if ($n==1) {$listMateri.="show active";} $listMateri .='" id="list-'.$n.'" role="tabpanel" aria-labelledby="list-home-list">
                                    <div class="card">
                                      <div class="card-header"><h3 align="center">'.$m["judul_sub_materi"].'</h3></div>
                                        <div class="card-body">'.$m["content"].'

                                        </div>
                                      </div>
                                      <div class="card-footer"><small class="text-muted">Created By : '.$m["nama_guru"].'</small><small class="pull-right text-muted"> Last Update : '.$m["last_update"].'</small></div>
                                    </div>
                                    ';
                                $n++; endforeach; 
                                $listMateri .= '
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                  $i++; endforeach;
               $listMateri .= '</div>';
            }else{
                  $listMateri = "Tidak Ada Materi"; 
            }
            
            echo $listMateri;
      }


      public function getDataJdlBab()
      {
            $this->isLogin();
            $kd_mapel = $this->input->post("kd_mapel");
            $result = $this->Main_model->getDataJdlBab($kd_mapel);
            echo $result;
      }

      public function insertDataMateri()
      {
            $this->isLogin();
            $data = array();
            $data["kd_materi"] = $this->input->post("select_jdlBab");
            $data["judul_sub_materi"] = $this->input->post("inputJdlMateri");
            $data["content"] = $this->input->post("content");
            $data["created_by"] = $this->session->userdata('nip');
            $result = $this->Main_model->insertDataMateri($data);
            echo $result;
      }

      public function deleteMateri()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteMateri($id);
            echo $result;
      }

      public function getDataMateriById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result =  $this->Main_model->getDataMateriById($id);
            echo $result;
      }

      public function updateDataMateri()
      {
            $this->isLogin();
            $data = array();
            $id = $this->input->post("kdSubMateri");
            $data["kd_materi"] = $this->input->post("select_jdlBab");
            $data["judul_sub_materi"] = $this->input->post("inputJdlMateri");
            $data["content"] = $this->input->post("content");
            $data["created_by"] = $this->session->userdata('nip');
            $result = $this->Main_model->updateDataMateri($id,$data);
            echo $result;
      }

      public function addJnsCbt()
      {
            $this->isLogin();
            $data["nm_jenis_cbt"] = $this->input->post("jns_cbt");
            $result = $this->Main_model->addJnsCbt($data);
            echo $result;
      }

      public function getDataJnsCbt()
      {
            $this->isLogin();
            $result = $this->Main_model->getDataJnsCbt();
            echo $result;
      }

      public function data_bank_soal()
      {
            $this->isLogin();
            $data["parent_title"] = "Data Materi & CBT";
            $data["child_title"]  = "Bank Soal";
            $this->template->load("mainAdmin_v","dashboard/data_materi_cbt/bank_soal_v",$data);
      }

      public function getDataTopikSoal()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getDataTopikSoal($id);
            echo $result;
      }

      public function addTopikSoal()
      {
            $this->isLogin();
            $data = array();
            $data["nm_topik_soal"] = $this->input->post("topik");
            $data["kd_mapel"] = $this->input->post("kd_mapel");
            $result = $this->Main_model->addTopikSoal($data);
            echo $result;
      }

      public function getTopikSoalById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getTopikSoalById($id);
            echo $result;
      }

      public function updateTopikSoal()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $topik = $this->input->post("topik");
            $result = $this->Main_model->updateTopikSoal($id,$topik);
            echo $result;
      }

      public function deleteTopikSoal()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteTopikSoal($id);
            echo $result;
      }

      public function insertDataSoal()
      {
            $this->isLogin();
            $kdSoal = $this->input->post("kdSoal");
            if (empty($kdSoal)) {
                  $dataPg = array();
                  $dataPg["kd_mapel"] = $this->input->post("kdMapel");
                  $dataPg["kd_topik_soal"] = $this->input->post("kdTopik");
                  $dataPg["kd_kls"] = $this->input->post("kdKls");
                  $dataPg["pertanyaan_pg"] = $this->input->post("inputSoalPg");
                  $dataPg["jawab_a"] = $this->input->post("A");
                  $dataPg["jawab_b"] = $this->input->post("B");
                  $dataPg["jawab_c"] = $this->input->post("C");
                  $dataPg["jawab_d"] = $this->input->post("D");
                  $dataPg["jawab_e"] = $this->input->post("E");
                  $dataPg["kunci"] = $this->input->post("kunciJawaban");
                  $dataPg["bobot_pg"] = $this->input->post("bobotSoalPg");
                  $dataPg["pembahasan_pg"] = $this->input->post("pembahasanPg");
                  $dataPg["user"] = $this->session->userdata("nip");

                  $dataE = array();
                  $dataE["kd_mapel"] = $this->input->post("kdMapel");
                  $dataE["kd_topik_soal"] = $this->input->post("kdTopik");
                  $dataE["kd_kls"] = $this->input->post("kdKls");
                  $dataE["pertanyaan_essay"] = $this->input->post("inputSoalEssay");
                  $dataE["pembahasan_essay"] = $this->input->post("pembahasanEssay");
                  $dataE["bobot_essay"] = $this->input->post("bobotSoalEssay");
                  $dataE["user"] = $this->session->userdata("nip");

                  $result = $this->Main_model->insertDataSoal($dataPg,$dataE);
                  echo $result;
            }else{
                  $dataPg = array();
                  $dataPg["kd_mapel"] = $this->input->post("kdMapel");
                  $dataPg["kd_topik_soal"] = $this->input->post("kdTopik");
                  $dataPg["kd_kls"] = $this->input->post("kdKls");
                  $dataPg["pertanyaan_pg"] = $this->input->post("inputSoalPg");
                  $dataPg["jawab_a"] = $this->input->post("A");
                  $dataPg["jawab_b"] = $this->input->post("B");
                  $dataPg["jawab_c"] = $this->input->post("C");
                  $dataPg["jawab_d"] = $this->input->post("D");
                  $dataPg["jawab_e"] = $this->input->post("E");
                  $dataPg["kunci"] = $this->input->post("kunciJawaban");
                  $dataPg["bobot_pg"] = $this->input->post("bobotSoalPg");
                  $dataPg["pembahasan_pg"] = $this->input->post("pembahasanPg");
                  $dataPg["user"] = $this->session->userdata("nip");

                  $dataE = array();
                  $dataE["kd_mapel"] = $this->input->post("kdMapel");
                  $dataE["kd_topik_soal"] = $this->input->post("kdTopik");
                  $dataE["kd_kls"] = $this->input->post("kdKls");
                  $dataE["pertanyaan_essay"] = $this->input->post("inputSoalEssay");
                  $dataE["pembahasan_essay"] = $this->input->post("pembahasanEssay");
                  $dataE["bobot_essay"] = $this->input->post("bobotSoalEssay");
                  $dataE["user"] = $this->session->userdata("nip");

                  $result = $this->Main_model->uploadDataSoal($dataPg,$dataE,$kdSoal);
                  echo $result;
            }
      }

      public function getDataBankSoalPg()
      {
            $this->isLogin();
            $data = array();
            $data["topik"] = $this->input->post("topik");
            $data["kdKls"] = $this->input->post("kdKls");
            $data["kdMapel"] = $this->input->post("kdMapel");
            $result = $this->Main_model->getDataBankSoalPg($data);
            echo $result;
      }

      public function getDataBankSoalEssay()
      {
            $this->isLogin();
            $data = array();
            $data["topik"] = $this->input->post("topik");
            $data["kdKls"] = $this->input->post("kdKls");
            $data["kdMapel"] = $this->input->post("kdMapel");
            $result = $this->Main_model->getDataBankSoalEssay($data);
            echo $result;
      }

      public function uploadSoalPg()
      {
            $this->isLogin();
            $this->load->library('upload');
      
            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            // $config['max_size']     = '2048';
            $config['overwrite'] = true;
            $config['file_name'] = "import_soal_pg";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_soal_pg')){
                  $this->upload->data();
                  // Load plugin PHPExcel
                  include APPPATH.'third_party/PHPExcel/PHPExcel.php';
                  
                  $excelreader = new PHPExcel_Reader_Excel2007();
                  $loadexcel = $excelreader->load('assets/file_format/import_soal_pg.xlsx'); // Load file yang telah diupload ke folder excel
                  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                  
                  // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
                  $data = array();
                  
                  $numrow = 1;
                  foreach($sheet as $row){
                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 2){
                              // Kita push (add) array data ke variabel data
                              array_push($data, array(
                                    'kd_mapel' => $this->input->post("kdMapel"),
                                    'kd_topik_soal' => $this->input->post("topik"),
                                    'kd_kls' => $this->input->post("kdKls"),
                                    'pertanyaan_pg' => $row['B'],
                                    'jawab_a' => $row['C'],
                                    'jawab_b' => $row['D'],
                                    'jawab_c' => $row['E'],
                                    'jawab_d' => $row['F'],
                                    'jawab_e' => $row['G'],
                                    'kunci' => $row['H'],
                                    'bobot_pg' => $row['I'],
                                    'pembahasan_pg' => $row['J'],
                                    'user' => $this->session->userdata("nip"),
                              ));                              
                        }
                        
                        $numrow++; // Tambah 1 setiap kali looping
                  }

                  $return =  $this->Main_model->importSoalPg($data);
                  echo $return;
            }else{
                  echo "failed";
            }
      }

      public function uploadSoalEssay()
      {
            $this->isLogin();
            $this->load->library('upload');
      
            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            // $config['max_size']     = '2048';
            $config['overwrite'] = true;
            $config['file_name'] = "import_soal_essay";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_soal_essay')){
                  $this->upload->data();
                  // Load plugin PHPExcel
                  include APPPATH.'third_party/PHPExcel/PHPExcel.php';
                  
                  $excelreader = new PHPExcel_Reader_Excel2007();
                  $loadexcel = $excelreader->load('assets/file_format/import_soal_essay.xlsx'); // Load file yang telah diupload ke folder excel
                  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                  
                  // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
                  $data = array();
                  
                  $numrow = 1;
                  foreach($sheet as $row){
                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 2){
                              // Kita push (add) array data ke variabel data
                              array_push($data, array(
                                    'kd_mapel' => $this->input->post("kdMapel"),
                                    'kd_topik_soal' => $this->input->post("topik"),
                                    'kd_kls' => $this->input->post("kdKls"),
                                    'pertanyaan_essay' => $row['B'],
                                    'pembahasan_essay' => $row['C'],
                                    'bobot_essay' => $row['D'],
                                    'user' => $this->session->userdata("nip"),
                              ));                              
                        }
                        
                        $numrow++; // Tambah 1 setiap kali looping
                  }

                  $return =  $this->Main_model->importSoalEssay($data);
                  echo $return;
            }else{
                  echo "failed";
            }
      }

      public function deleteSoalPg()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteSoalPg($id);
            echo $result;
      }

      public function deleteSoalEssay()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteSoalEssay($id);
            echo $result;
      }

      public function getSoalEssayById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getSoalEssayById($id);
            echo $result;
      }

      public function getSoalPgById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getSoalPgById($id);
            echo $result;
      }

      public function getJenisCbtById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getJenisCbtById($id);
            echo $result;
      }

      public function updateJnsCbt()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $jnsCbt = $this->input->post("jnsCbt");
            $result = $this->Main_model->updateJnsCbt($id,$jnsCbt);
            echo $result;
      }

      public function deleteJnsCbt()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteJnsCbt($id);
            echo $result;
      }

      public function getDataCbt()
      {
            $this->isLogin();
            $data["kd_kls"] = $this->input->post("kd_kls");
            $data["unit"] = $this->input->post("unit");
            $data["jns_cbt"] = $this->input->post("jns_cbt");
            $result = $this->Main_model->getDataCbt($data);
            echo $result;
      }

      public function saveDataCbt()
      {
            $this->isLogin();
            $data["kd_jenis_cbt"] = $this->input->post("jns_cbt");
            $data["kd_kls"] = $this->input->post("kls");
            $data["kd_mapel"] = $this->input->post("mapel");
            $data["nm_cbt"] = $this->input->post("jdl_cbt");
            $data["user"] = $this->session->userdata("nip");
            $data["unit"] = $this->session->userdata("unit");
            $data["kkm"] = $this->input->post("kkm");
            $result = $this->Main_model->saveDataCbt($data);
            echo $result;
      }

      public function updateDataCbt()
      {
            $this->isLogin();
            $id = $this->input->post("kd_cbt");
            $data["kd_jenis_cbt"] = $this->input->post("jns_cbt");
            $data["kd_kls"] = $this->input->post("kls");
            $data["kd_mapel"] = $this->input->post("mapel");
            $data["nm_cbt"] = $this->input->post("jdl_cbt");
            $data["user"] = $this->session->userdata("nip");
            $data["unit"] = $this->session->userdata("unit");
            $data["kkm"] = $this->input->post("kkm");
            $result = $this->Main_model->updateDataCbt($data,$id);
            echo $result;
      }

      public function deleteCbt()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteCbt($id);
            echo $result;
      }

      public function getCbtById()
      {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->getCbtById($id);
            echo $result;
      }
	}
?>