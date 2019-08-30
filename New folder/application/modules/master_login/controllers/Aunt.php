 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Aunt extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("Main_model");
		}

		public function index()
		{
			$this->check_session();
		}

		public function check_session()
		{
			$kd_user  = $this->session->userdata("kd_user");
			$username = $this->session->userdata("username");
			$section  = $this->session->userdata("section");
			$jabatan  = $this->session->userdata("jabatan");
			$level    = $this->session->userdata("level");

			if (!empty($kd_user) && !empty($username) && !empty($section) && !empty($jabatan) && !empty($level)) {
				switch ($section) {
					case 'superadmin':redirect("superadmin/main"); break;
					case 'akademik':redirect("circle_student/admin"); break;
					case 'hrd' : redirect("hrd/main"); break;
					case 'keuangan' : redirect("keuangan/main"); break;
					
					default:echo "<script>alert('Maaf Anda Tidak Memiliki Hak Akses!')</script>";break;
				}
			}else{
				$this->load->view("login_v");
			}
		}

		public function check_login()
		{
			$user = $this->input->post("user");
			$pass = md5($this->input->post("pass"));
			if (!empty($user)||!empty($pass)) {
	            $data = $this->Main_model->check_login($user,$pass);
	            $result = $data->num_rows();
	            if ($result>0) {
                  	foreach ($data->result_array() as $key) {
	                        $this->session->set_userdata('kd_user',$key["kd_user"]);
	                        $this->session->set_userdata('nip', $key["nip"]);
	                        $this->session->set_userdata('username', $key["username"]);
	                        $this->session->set_userdata('section', $key["section"]);
	                        $this->session->set_userdata('jabatan', $key["jabatan"]);
	                        $this->session->set_userdata('level', $key["level"]);
              		}
					echo json_encode("success");
	            }else{
	                  echo json_encode("failed");
	            }
			}else{
				echo json_encode("empty1");
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect();
		}
	}
?>