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
            $config['filename'] = "import_employee";

            $this->upload->initialize($config);
            if($this->upload->do_upload('excel_employee')){
                $this->upload->data();

                include APPPATH.'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('assets/file_format/import_employee.xlsx');
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                $data_karyawan = array ();
                $data_akun     = array ();

                $numrow = 1;
                foreach($sheet as $row){

                  if($numrow > 1){

                    array_push($data_akun, array(

                        'nip' => $row['A'],
                        'username' => $row['A'],
                        'password' => md5($row['B']),
                        'section' => $row['C'],
                       /* 'id_jabatan' => $row['D'],*/
                        'level' =>  $row['E'],

                    ));

                    array_push($data_karyawan, array(
                        'nip'              => $row['A'],
                        'id_jabatan'       => $row['D'],
                        'nama'             => $row['F'],
                        'nm_pnggilan'      => $row['G'],
                        'agama'            => $row['H'],
                        'gender'           => $row['I'],
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
                        'tgl_lahir'        => $row['U'],
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
                        'id_status_pegawai'=> $row['AI'],
                        'nmr_darurat1'     => $row['AJ'],
                        'nm_nmr_darurat1'  => $row['AK'],
                        'nmr_darurat2'     => $row['AL'],
                         'nm_nmr_darurat2' => $row['AM'],
                         'relasi'          => $row['AN'],
                         'id_divisi'       => $row['AO'],
                         'no_kk'          => $row['AP'],
                         'id_cbg'          => $row['AP'],
                         'id_job_title'    => $row['AQ'],
                        
                    ));

                  }
                  $numrow++;


                }

                $return = $this->Main_model->importDataEmployee($data_akun,$data_karyawan);
                echo $return;
            }else{
                echo "failed";
            }
        }
        


    }
?>