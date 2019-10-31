 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
    Class Main extends CI_Controller{
        public function __construct(){
            parent::__construct();
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

        public function employee_data()
        {
              $data["parent_title"] = "Dashboard";
              $data["child_title"] = "";
              $this->template->load("mainAdmin_v","dashboard/master_data/v_employee",$data);    
        }

        public function getEmployee()
        {
            $this->isLogin();
            $result = $this->Main_model->getEmployeeById();
            echo $result;
        }
        

        public function position_data()
        {   
            $data["parent_title"] = "Dashboard";
            $data["child_title"] = "";
        /*  $data['kd'] = $this->Main_model->getPositionById();*/
            $this->template->load("mainAdmin_v","dashboard/master_data/v_position",$data);
        }

        public function getDataPosition()
        {
            $this->isLogin();
            $result = $this->Main_model->getPosition();
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

                $data_karyawan = array ();
                $data_akun     = array ();
                $kode_baru     = $this->Main_model->buat_kodeOtmts()-1;

                $numrow = 1;
                foreach($sheet as $row){
                    if($row['I']=='1'){
                        $gender= 'Laki-laki';
                    }elseif($row['I']== '2'){
                        $gender= 'Perempuan';
                    }

                  if($numrow > 1){

                    array_push($data_akun, array(

                        'nip'      => date('Ym').$row['I'].$kode_baru,
                        'username' => $row['A'],
                        'password' => md5($row['B']),
                        'section' => $row['C'],
                        'level' =>  $row['E'],

                    ));

                    array_push($data_karyawan, array(
                  
                        'nip'              => date('Ym').$row['I'].$kode_baru,
                        'id_jabatan'       => $row['D'],
                        'nama'             => $row['F'],
                        'nm_pnggilan'      => $row['G'],
                        'agama'            => $row['H'],
                        'gender'           => $gender,
                        'gol_darah'        => $row['J'],
                        'unit'             => $row['K'],
                        'alamat'           => $row['L'],
                        'rt'               => $row['M'],
                        'rw'               => $row['N'],
                        'desa'             => $row['O'],
                        'kecamatan'        => $row['P'],
                        'kd_pos'           => $row['Q'],
                        'no_tlp'           => $row['R'],
                        'email'            => $row['S'],
                        'tempat_lahir'     => $row['T'],
                        'tgl_lahir'        => date('Y-m-d',strtotime($row['U'])),
                        'no_ktp'           => $row['V'],
                        'npwp'             => $row['W'],
                        'id_negara'        => $row['X'],
                        'status_nikah'     => $row['Y'],
                        'jml_anak'         => $row['Z'],
                        'nm_ibu'           => $row['AA'],
                        'mulai_tugas'      => $row['AB'],
                        'id_jnjng_pddk'    => $row['AC'],
                        'id_college_krywn'  => $row['AD'],
                        'thn_lulus'        => $row['AE'],
                        'id_jurusan_krywn' => $row['AF'],
                        'ipk'              => $row['AG'],
                        'mulai_brgbg'       => $row['AH'],
                        'id_status_karyawan'=> $row['AI'],
                        'nmr_darurat1'     => $row['AJ'],
                        'nm_nmr_darurat1'  => $row['AK'],
                        'nmr_darurat2'     => $row['AL'],
                         'nm_nmr_darurat2' => $row['AM'],
                         'relasi'          => $row['AN'],
                         'id_divisi'       => $row['AO'],
                         'no_kk'          => $row['AP'],
                         'id_cbg'          => $row['AQ'],
                         'id_job_title'    => $row['AR'],
                         'created_date'      => date("Y-m-d H:i:s"),
                         'last_update'     =>'',
                         'input'           => 'IMPORT',

                        
                    ));

                  }
                  $numrow++;
                  $kode_baru++;


                }

                $return = $this->Main_model->importDataEmployee($data_akun,$data_karyawan);
                echo $return;
      /*       print_r($data_karyawan);*/
            }else{
                echo "failed";
            }
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
    
         public function GetJbtn(){

            $this->isLogin();
            $data = $this->Main_model->GetMjbtn();
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
    }
?>