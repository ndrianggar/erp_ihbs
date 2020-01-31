 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
    Class Main extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model("Main_model");   
            
        }

        public function index()
        {
            $this->isLogin();
            $data["parent_title"] = "";
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



        public function position_data()
        {   
             $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Position &nbsp</a>";

              $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('Payroll'),AddLblForm('')>Data Position &nbsp</a>";

              $this->template->load("mainAdmin_v","dashboard/master_data/v_position",$data);   
        }

        public function getDataPosition()
        {
            $this->isLogin();
            $result = $this->Main_model->getPosition();
            echo $result;
        }

           public function division_data()
        {   
            $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Position &nbsp</a>";

            $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('Position'),AddLblForm('')>Data Position &nbsp</a>";

            $this->template->load("mainAdmin_v","dashboard/master_data/v_division",$data);
        }

        public function getDataDivision()
        {
            $this->isLogin();
            $result = $this->Main_model->getDivison();
            echo $result;
        }
    

    public function job_title_data()
        {   
            $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Job Title &nbsp</a>";

            $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('JobTitle'),AddLblForm('')>Data Job Title &nbsp</a>";

            $this->template->load("mainAdmin_v","dashboard/master_data/v_Jobtitle",$data);
        }

        public function getDataJbtitle()
        {
            $this->isLogin();
            $result = $this->Main_model->getJbtitle();
            echo $result;
        }

        public function renumerasi_data()
        {   
            $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Renumerasi Salary &nbsp</a>";

            $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('JobTitle'),AddLblForm('')>Data Renumerasi Salary  &nbsp</a>";

            $this->template->load("mainAdmin_v","dashboard/master_payroll/v_renumerasi",$data);
        }

        public function getDataRenumerasi()
        {
            $this->isLogin();
            $result = $this->Main_model->getMRenumerasi();
            echo $result;
        }

        public function addDataRenumerasi()
        {
            $this->isLogin();

           /* $config['']
            $kode_baru = $this->Main_model->buat_kodeOtmts();*/

        }

          public function editDataRenumerasi()
        {
            $this->isLogin();

           /* $config['']
            $kode_baru = $this->Main_model->buat_kodeOtmts();*/

        }
           public function deleteDataRenumerasi()
        {
            $this->isLogin();

           /* $config['']
            $kode_baru = $this->Main_model->buat_kodeOtmts();*/

        }

       public function payroll_data(){

            $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Payroll &nbsp</a>";

              $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('Payroll'),AddLblForm('')>Data Payroll &nbsp</a>";
           
              $this->template->load("mainAdmin_v","dashboard/master_payroll/v_payroll",$data);   

        }

       public function Addpayroll()
        {
           
            $this->template->load("mainAdmin_v","dashboard/master_payroll/v_payroll", $data);
        }
        public function GetCodeOtmts()
        {
            $id_gend = $this->input->post('id');

            if ($id_gend == 'Laki-laki'){
                $id_gend = '1';
            }elseif($id_gend == 'Perempuan'){
                $id_gend = '2';
            }
            
            $kode_baru = $this->Main_model->buat_kodeOtmts();
            $gen_code = date('Ym').$id_gend.$kode_baru;

            echo $gen_code;         

        }

          public function employee_data()
        {
              $data["parent_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href=''>Master Employee &nbsp</a>";

              $data["child_title"] = "<i class='fa fa-angle-right text-white '>&nbsp;</i><a class='h4 mb-0 text-white text-uppercase d-none d-lg-inline-block' href='#' onclick=cancelAdd('Employee'),AddLblForm('')>Data Employee &nbsp</a>";

              $this->template->load("mainAdmin_v","dashboard/master_data/v_employee",$data);    
        }

        public function getEmployee()
        {
            $this->isLogin();
            $result = $this->Main_model->getEmployee();
            echo $result;
        }

        public function inputDataEmployee()
        {
            $this->isLogin();

            $config['upload_path']   ="./assets/file_karyawan/images";
            $config['allowed_types'] ="gif|jpg|png|tif";
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);
            if ($upload1 = $this->upload->do_upload("photo_pegawai")){
                $datafoto = array('upload_data' => $this->upload->data());
                $image1 =$datafoto['upload_data']['file_name'];

            }

              $this->load->library('upload', $config);
            if  ($upload2 = $this->upload->do_upload("file_ktp")){
                $dataktp = array('upload_data' => $this->upload->data());
                $image2 =$dataktp['upload_data']['file_name'];

            }

               $this->load->library('upload', $config);
            if ($upload3 =$this->upload->do_upload("file_kk")){
                $datakk = array('upload_data' => $this->upload->data());
                $image3 =$datakk['upload_data']['file_name'];

            }

            /*if ($upload1 || $upload2 || $upload3){*/
            $data_akun["nip"] = $this->input->post("nip");
            $data_akun["username"] = $this->input->post("nip");
            $data_akun["password"] = md5($this->input->post("password"));
          /*  $data_akun["section"] = $this->input->post("section");*/
            /*$data_akun["jabatan"] = $this->input->post("jabatan");*/
  
            $session = $this->session->userdata("level");
            if($session==="1"){
            $data_akun["level"] = $this->input->post("level");
            }else{
            $data_akun["level"] = "3";
            };
            $data_akun["hak_akses"] = implode(',', $this->input->post("hak_akses"));
            
            //  variable sebelah kiri bersumber dari database
            // variable sebelah kanan bersumber dari name/id inputan

            $data["nip"] = $this->input->post("nip");
            $data["nama"] = $this->input->post("nama");
            $data["no_ktp"] = $this->input->post("no_ktp");
            $data["no_kk"] = $this->input->post("no_kk");
            $data["nm_pnggilan"] = $this->input->post("nm_pnggilan");
            $data["agama"] = $this->input->post("agama");
            $data["gender"] = $this->input->post("gender");
            $data["gol_darah"] = $this->input->post("gol_darah");
        /*    $data["unit"] = $this->input->post("unit");*/
            $data["alamat"] = $this->input->post("alamat");
            $data["id_prov"] = $this->input->post("id_prov");
            $data["id_kab"] = $this->input->post("id_kab");
            $data["id_kec"] = $this->input->post("id_kec");
            $data["id_kel"] = $this->input->post("id_kel");
            $data["rt"] = $this->input->post("rt");
            $data["rw"] = $this->input->post("rw");
            $data["kd_pos"] = $this->input->post("kd_pos");
            $data["no_tlp"] = $this->input->post("no_tlp");
            $data["email"] = $this->input->post("email");
            $data["tempat_lahir"] = $this->input->post("tempat_lahir");
            $data["tgl_lahir"] = $this->input->post("tgl_lahir");
           /* $data["npwp"] = $this->input->post("npwp");*/
            $data["id_country"] = $this->input->post("id_country");
            $data["status_nikah"] = $this->input->post("status_nikah");
            $data["jml_anak"] = $this->input->post("jml_anak");
           /* $data["nm_ibu"] = $this->input->post("nm_ibu");*/
           /* $data["mulai_tugas"] = $this->input->post("mulai_tugas");*/
            $data["id_jnjng_pddk"] = $this->input->post("id_jnjng_pddk");
            $data["id_college_krywn"] = $this->input->post("id_college_krywn");
            $data["id_fakultas_krywn"] = $this->input->post("id_fakultas_krywn");
            $data["thn_lulus"] = $this->input->post("thn_lulus");
            $data["id_jurusan_krywn"] = $this->input->post("id_jurusan_krywn");
            $data["ipk"] = $this->input->post("ipk");
            $data["mulai_brgbg"] = $this->input->post("mulai_brgbg");
            /*$data["masa_kerja"] = $this->input->post("masa_kerja");*/
            $data["id_status_karyawan"] = $this->input->post("id_status_karyawan");
             if(!empty($image1)){
                $data["photo_pegawai"] = $image1;
            }
            if(!empty($image2)){
                $data["file_ktp"] = $image2;
            }
            if(!empty($image3)){
                $data["file_kk"] = $image3;
            }
            $data["nmr_darurat1"] = $this->input->post("nmr_darurat1");
            $data["nm_nmr_darurat1"] = $this->input->post("nm_nmr_darurat1");
           /* $data["nm_nmr_darurat2"] = $this->input->post("nm_nmr_darurat2");
            $data["nmr_darurat2"] = $this->input->post("nmr_darurat2");*/
            $data ["bhs_eng"] = implode('',$this->input->post("sts_eng"));
            $data["bhs_arab"] = implode('',$this->input->post("sts_arb"));
            $data["serti_eng"] = implode('',$this->input->post("sts_brs"));
            $data["serti_arab"] = implode('',$this->input->post("sts_brs_arb")); 
            $data["tilawah"] = implode('', $this->input->post("tilawah"));
            $data["hfln_quran"] = $this->input->post("hfln_quran");
            $data["pelatihan"] = $this->input->post("pelatihan");
            $data["p_kajian"] = $this->input->post("p_kajian");
            $data["aktifitas_kajian"] = implode('',$this->input->post("aktifitas_kajian"));
            $data["komputer"] = implode('',$this->input->post("komputer"));
           /* $data["relasi"] = $this->input->post("relasi");*/
            $data["id_divisi"] = $this->input->post("id_divisi");
            $data["id_jabatan"] = $this->input->post("id_jabatan");
            $data["id_cbg"] = $this->input->post("id_cbg");
            $data["id_job_title"] = $this->input->post("id_job_title");
            $data["no_kk"] = $this->input->post("no_kk");
            $data["input"] = 'MANUAL';

            $result = $this->Main_model->inputDataEmployee($data,$data_akun);
            echo $result;

    }


        public function updateDataEmploye(){

            $this->isLogin();

            $config['upload_path']   ="./assets/file_karyawan/images";
            $config['allowed_types'] ="gif|jpg|png|tif";
            $config['encrypt_name']  = TRUE;

            // if(!empty($_FILE['photo_pegawai']['name'])){
            $this->load->library('upload', $config);
            if ($upload1 = $this->upload->do_upload("photo_pegawai")){
                $datafoto = array('upload_data' => $this->upload->data());
                $image1 =$datafoto['upload_data']['file_name'];

            }
        // }
            // if(!empty($_FILE['file_ktp']['name'])){
            $this->load->library('upload', $config);
            if  ($upload2 = $this->upload->do_upload("file_ktp")){
                $dataktp = array('upload_data' => $this->upload->data());
                $image2 =$dataktp['upload_data']['file_name'];

            }
        // }
               // if(!empty($_FILE['file_kk']['name'])){
            $this->load->library('upload', $config);
            if ($upload3 =$this->upload->do_upload("file_kk")){
                $datakk = array('upload_data' => $this->upload->data());
                $image3 =$datakk['upload_data']['file_name'];
            }
        // }
/*
            if ($upload1 || $upload2 || $upload3){*/
            $data_akun["nip"] = $this->input->post("nip");
            $data_akun["username"] = $this->input->post("nip");
            $data_akun["password"] = md5($this->input->post("password"));
          /*  $data_akun["section"] = $this->input->post("section");*/
            /*$data_akun["jabatan"] = $this->input->post("jabatan");*/
  
            $session = $this->session->userdata("level");
            if($session==="1"){
            $data_akun["level"] = $this->input->post("level");
            }else{
            $data_akun["level"] = "3";
            };
            $data_akun["hak_akses"] = implode(',', $this->input->post("hak_akses"));
            
            //  variable sebelah kiri bersumber dari database
            // variable sebelah kanan bersumber dari name/id inputan

            $kd_karyawan = $this->input->post("kd_karyawan");
            $data["nip"] = $this->input->post("nip");
            $data["nama"] = $this->input->post("nama");
            $data["no_ktp"] = $this->input->post("no_ktp");
            $data["no_kk"] = $this->input->post("no_kk");
            $data["nm_pnggilan"] = $this->input->post("nm_pnggilan");
            $data["agama"] = $this->input->post("agama");
/*            $data["gender"] = $this->input->post("gender");
*/            $data["gol_darah"] = $this->input->post("gol_darah");
        /*    $data["unit"] = $this->input->post("unit");*/
            $data["alamat"] = $this->input->post("alamat");
            $data["id_prov"] = $this->input->post("id_prov");
            $data["id_kab"] = $this->input->post("id_kab");
            $data["id_kec"] = $this->input->post("id_kec");
            $data["id_kel"] = $this->input->post("id_kel");
            $data["rt"] = $this->input->post("rt");
            $data["rw"] = $this->input->post("rw");
            $data["kd_pos"] = $this->input->post("kd_pos");
            $data["no_tlp"] = $this->input->post("no_tlp");
            $data["email"] = $this->input->post("email");
            $data["tempat_lahir"] = $this->input->post("tempat_lahir");
            $data["tgl_lahir"] = $this->input->post("tgl_lahir");
           /* $data["npwp"] = $this->input->post("npwp");*/
            $data["id_country"] = $this->input->post("id_country");
            $data["status_nikah"] = $this->input->post("status_nikah");
            $data["jml_anak"] = $this->input->post("jml_anak");
           /* $data["nm_ibu"] = $this->input->post("nm_ibu");*/
           /* $data["mulai_tugas"] = $this->input->post("mulai_tugas");*/
            $data["id_jnjng_pddk"] = $this->input->post("id_jnjng_pddk");
            $data["id_college_krywn"] = $this->input->post("id_college_krywn");
            $data["id_fakultas_krywn"] = $this->input->post("id_fakultas_krywn");
            $data["thn_lulus"] = $this->input->post("thn_lulus");
            $data["id_jurusan_krywn"] = $this->input->post("id_jurusan_krywn");
            $data["ipk"] = $this->input->post("ipk");
            $data["mulai_brgbg"] = $this->input->post("mulai_brgbg");
           /* $data["masa_kerja"] = $this->input->post("masa_kerja");*/
            $data["id_status_karyawan"] = $this->input->post("id_status_karyawan");

            if(!empty($image1)){
                $data["photo_pegawai"] = $image1;
            }
            if(!empty($image2)){
                $data["file_ktp"] = $image2;
            }
            if(!empty($image3)){
                $data["file_kk"] = $image3;
            }
            $data["nmr_darurat1"] = $this->input->post("nmr_darurat1");
            $data["nm_nmr_darurat1"] = $this->input->post("nm_nmr_darurat1");
           /* $data["nm_nmr_darurat2"] = $this->input->post("nm_nmr_darurat2");
            $data["nmr_darurat2"] = $this->input->post("nmr_darurat2");*/
            $data ["bhs_eng"] = implode('',$this->input->post("sts_eng"));
            $data["bhs_arab"] = implode('',$this->input->post("sts_arb"));
            $data["serti_eng"] = implode('',$this->input->post("sts_brs"));
            $data["serti_arab"] = implode('',$this->input->post("sts_brs_arb")); 
            $data["tilawah"] = implode('', $this->input->post("tilawah"));
            $data["hfln_quran"] = $this->input->post("hfln_quran");
            $data["pelatihan"] = $this->input->post("pelatihan");
            $data["p_kajian"] = $this->input->post("p_kajian");
            $data["aktifitas_kajian"] = implode('',$this->input->post("aktifitas_kajian"));
            $data["komputer"] = implode('',$this->input->post("komputer"));
           /* $data["relasi"] = $this->input->post("relasi");*/
            $data["id_divisi"] = $this->input->post("id_divisi");
            $data["id_jabatan"] = $this->input->post("id_jabatan");
            $data["id_cbg"] = $this->input->post("id_cbg");
            $data["id_job_title"] = $this->input->post("id_job_title");
            $data["no_kk"] = $this->input->post("no_kk");
            $data["input"] = 'MANUAL';

            $result = $this->Main_model->updateDataEmployee($data,$data_akun, $kd_karyawan);
            echo $result;

        
    }

     public function getEmployeeById()
        {
            $this->isLogin();
            $kd_karywn=$this->input->post('id');
            $nip=$this->input->post('nip');
            $result =array();
            $getemploy=$this->Main_model->getMEmployeeid($kd_karywn);
            $getuser=$this->Main_model->getMUserid($nip);
            array_push($result, $getemploy,$getuser);
            
            echo json_encode($result);


        }

    public function getdetailEmployee()
    {
        $this->isLogin();
        $kd_karywn=$this->input->post('id');
        $nip=$this->input->post('nip');
        $result =array();
        $getemploy=$this->Main_model->getMEmployeeid($kd_karywn);
        $getuser=$this->Main_model->getMUserid($nip);
        array_push($result, $getemploy,$getuser);
        echo json_encode($result);
    }

        public function deleteEmployee()
        {
            $this->isLogin();
            $id2 = $this->input->post('id2');
            $id = $this->input->post('id');
            $result = $this->Main_model->deleteMemployee($id, $id2);
            echo $result;
        }


        public function importDataEmployee()
        {
            $this->isLogin();
            $this->load->library('upload');


            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            $config['overwrite'] = true;
            $config['file_name'] = "import_employee";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_employee')){
                $this->upload->data();

                include APPPATH.'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('assets/file_format/import_employee.xlsx');
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                $data_employee = array ();
                $data_akun     = array ();
                $kode_baru     = $this->Main_model->buat_kodeOtmts()-1;

                $numrow = 1;
                foreach($sheet as $row){
                    if($row['I']=='Laki-Laki'){
                        $gender= '1';
                    }elseif($row['I']== 'Perempuan'){
                        $gender= '2';
                    }

                  if($numrow > 1){
                    $session = $this->session->userdata("level");
                    if($session==="1"){
                    $level= $this->input->post("level");
                    }else{
                    $level = "3";
                    };
                    array_push($data_akun, array(

                        'nip'      => date('Ym').$gender.$kode_baru,
                        'username' => date('Ym').$gender.$kode_baru,
                        'password' => md5($row['B']),
                        'hak_akses' => $row['C'],
                        'level' =>$level,

                         
                        
                    ));

                    array_push($data_employee, array(                  

                    'nip'                => date('Ym').$gender.$kode_baru,
                    'nama'               => $row['D'],
                    'nm_pnggilan'        => $row['E'],
                    'no_ktp'             => $row['F'],
                    'no_kk'              => $row['G'],
                    'agama'              => $row['H'],
                    'gender'             => $row['I'],
                    'gol_darah'          => $row['J'],
                    'alamat'             => $row['K'],
                    'id_prov'            => $row['L'],
                    'id_kab'             => $row['M'],
                    'id_kec'             => $row['N'],
                    'id_kel'             => $row['O'],
                    'rt'                 => $row['P'],
                    'rw'                 => $row['Q'],
                    'kd_pos'             => $row['R'],
                    'no_tlp'             => $row['S'],
                    'email'              => $row['T'],
                    'tempat_lahir'       => $row['U'],
                    'tgl_lahir'          => date('Y-m-d',strtotime($row['V'])),
                    'id_country'          => $row['W'],
                    'status_nikah'       => $row['X'],
                    'jml_anak'           => $row['Y'],
                    'id_jnjng_pddk'      => $row['Z'],
                    'id_college_krywn'   => $row['AA'],
                    'id_fakultas_krywn'  => $row['AB'],
                    'thn_lulus'          => $row['AC'],
                    'id_jurusan_krywn'   => $row['AD'],
                    'ipk'                => $row['AE'],
                    'mulai_brgbg'        => date('Y-m-d',strtotime($row['AF'])),
                    'id_status_karyawan' => $row['AG'],
                     'nmr_darurat1'      => $row['AH'],
                    'nm_nmr_darurat1'    => $row['AI'],
                     'bhs_eng'           => $row['AJ'],
                    'bhs_arab'           => $row['AK'],
                     'serti_eng'         => $row['AL'],
                     'serti_arab'        => $row['AM'],
                     'tilawah'           => $row['AN'],
                      'hfln_quran'       => $row['AO'],
                     'pelatihan'         => $row['AP'],
                      'p_kajian'         => $row['AQ'],
                      'aktifitas_kajian' => $row['AR'],
                      'komputer'         => $row['AS'],
                      'id_divisi'        => $row['AT'],
                      'id_jabatan'       => $row['AU'],
                      'id_cbg'           => $row['AV'],
                      'id_job_title'     => $row['AW'],
                      'id_job_title'     => $row['AX'],
                      'created_date'     => date("Y-m-d H:i:s"),
                      'input'            => 'IMPORT',
                                       
                    ));

                  }
                  $numrow++;
                  $kode_baru++;


                }

                $return = $this->Main_model->importDataEmployee($data_akun,$data_employee);
                echo $return;
      /*       print_r($data_employee);*/
            }else{
                echo "failed";
            }
        }

        public function inputJabatanEmployee(){
            $this->isLogin();

            $config['upload_path']          = './assets/file_karyawan/doc/';
            $config['allowed_types']        = 'jpg|png|pdf';
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);  
            if($upload = $this->upload->do_upload('file_sk')){
               $datask = array('upload_data' => $this->upload->data());
               $filesk = $datask['upload_data']['file_name'];

            }          
            
            $data['file_sk'] =  $filesk;
            $data["nip"] = $this->input->post("nip");
            $data["id_jabatan"] = $this->input->post("id_jabatan");
            $data["id_job_title"] = $this->input->post("id_job_title");
            $data["tgl_jabatan"] = $this->input->post("tgl_jabatan");
            $data["tgl_berakhir"] = $this->input->post("tgl_berakhir");

            $result = $this->Main_model->inputMJabatanEmployee($data);
            echo $result;

        }

        public function getTmbhJbtnEmployee(){
            $this->isLogin();


            $nip = $this->input->post('nip');
            $id = $this->input->post('id');
            $result = $this->Main_model->getTmbhJbtnEmployee($nip,$id);
            echo $result;
        }


        public function updateTmbhJbtnEmployee(){
            $this->isLogin();
           $config['upload_path']          = './assets/file_karyawan/doc/';
            $config['allowed_types']        = 'jpg|png|pdf';
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);  
            if($upload = $this->upload->do_upload('file_sk')){
               $datask = array('upload_data' => $this->upload->data());
               $filesk = $datask['upload_data']['file_name'];

            }          
            $id = $this->input->post('id_jabatan_tambahan');
            $data['file_sk'] =  $filesk;
            $data["nip"] = $this->input->post("nip");
            $data["id_jabatan"] = $this->input->post("id_jabatan");
            $data["id_job_title"] = $this->input->post("id_job_title");
            $data["tgl_jabatan"] = $this->input->post("tgl_jabatan");
            $data["tgl_berakhir"] = $this->input->post("tgl_berakhir");

               $result = $this->Main_model->updateMJabatanEmployee($data,$id);
            echo $result;

        }


        public function deleteTmbhjbtnEmployee()
        {
            $this->isLogin();
            $id = $this->input->post("id");
            $result = $this->Main_model->deleteMTmbhjbtnEmployee($id);
            echo $result;
        }

         public function importDataUniv()
          {
            $this->isLogin();
            $this->load->library('upload');


            $config['upload_path'] = './assets/file_format';
            $config['allowed_types'] = 'xlsx';
            $config['overwrite'] = true;
            $config['file_name'] = "import_univ";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_univ')){
                $this->upload->data();

                include APPPATH.'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('assets/file_format/import_univ.xlsx');

                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                $datauniv = array();

                $numrow = 1;

                foreach ($sheet as $row) {

                    if($numrow > 1){
                        array_push($datauniv, array(
                            'nm_college_krywn' => $row['A'],
                    ));
                    }

                    $numrow++;               
                }
             /*   print_r($datauniv); untuk mengecek apabila array tidak terkirim pada js 10-31-2019*/ 

                $return = $this->Main_model->importDataUniv($datauniv);

                echo $return;

            }else{
                echo "failed";
            }
             
        }   


      
        
        public function GetStatusKrywan(){

            $this->isLogin();
            $data = $this->Main_model->GetsttsKrywn();
            echo $data;                    
        }
        
         public function GetCountries(){

            $this->isLogin();
            $data = $this->Main_model->GetMCountries();
            echo $data;                    
        }
   
         public function GetJbtn(){

            $this->isLogin();
            $data = $this->Main_model->GetMjbtn();
            echo $data;           
        }  

        public function GetJobtitle(){

            $this->isLogin();
            $data = $this->Main_model->GetMJobtitle();
            echo $data;           
        } 

        public function GetDivisi(){

            $this->isLogin();
            $data = $this->Main_model->GetMdivisi();
            echo $data;           
        }
        public function GetCbg(){

            $this->isLogin();
            $data = $this->Main_model->GetMcbg();
            echo $data;           
        }

        public function GetPendidikanTrkhr(){
            $this->isLogin();
            $data = $this->Main_model->GetMpendidikanTrkhr();
            echo $data;    
            
        }

        public function GetUniversitas(){
            $this->isLogin();
            $data = $this->Main_model->GetMuniversitas();
            echo $data;
        }  
        public function GetFakultas(){
            $this->isLogin();
            $data = $this->Main_model->GetMfakultas();
            echo $data;
        }  

        public function GetJurusan(){
            $this->isLogin();
            $data = $this->Main_model->GetMjurusan();
            echo $data;
        } 

        public function GetProvinsi(){
            $this->isLogin();
            $data = $this->Main_model->GetMprovinsi();
            echo $data;
        }
          public function GetKabupaten(){
            $this->isLogin();
            $id = $this->input->post('id');
            $data = $this->Main_model->GetMkabupaten($id);
            echo $data;
    }

        public function GetKecamatan(){
            $this->isLogin();
            $id = $this->input->post('id');
            $data = $this->Main_model->GetMkecamatan($id);
            echo $data;
        }

         public function GetKelurahan(){
            $this->isLogin();
            $id = $this->input->post('id');
            $data = $this->Main_model->GetMkelurahan($id);
            echo $data;
        }

       /*  belum digunakan karena pakai tabeljs

       public function GetEmployebyunit(){
            $this->isLogin();
            $id=$this->input->post('id');
            $data=$this->Main_model->GetMEmployebyunit($id);
            echo $data;
        }   */

        public function GetEmployenip(){
            $this->isLogin();
            $kd_unit=$this->input->post('kd_unit');
            $id_divisi=$this->input->post('id_divisi');
            $data=$this->Main_model->GetMEmployenip($kd_unit,$id_divisi);
            echo $data;
        } 

        public function GetUnit(){
            $this->isLogin();
            $id = $this->input->post('id');
            $data=$this->Main_model->GetMUnit($id);
            echo $data;
        }
}
?>