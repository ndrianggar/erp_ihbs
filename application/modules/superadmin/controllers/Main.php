 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main extends CI_Controller{

		public function __construct(){
        	parent::__construct();
         	$this->load->library('encryption');
         	$this->load->model("Model");
		}
		
	    function index()
		{
			$login = $this->isLogin();
			if ($login) {
				$this->load->view("main_v");
			}else{
				redirect();
			}
		}


		function listApp(){
			$nip = $this->session->userdata("nip");
			$section = $this->session->userdata("section");
			$appAccess = $this->Model->checkAppAccess("111")->row()->hak_akses;
			// $data = Array ("Circel","Hris");
			$data = explode(",", $appAccess);
			$a = array();
		    foreach ($data as $aksesApp) {
		    	if ($section == "superadmin") {
		    		array_push($a,'<div class="col-md-3 wow bounce mb-5" id="card_menu" data-wow-duration="3s" style="cursor: pointer;">
		    						<a href = "'.base_url().'circle_student/main">
							          <div class="card shadow border-0" style="background-color:#fff; ">
							            <img src="'.base_url().'assets/home/img/bg-mapel1.png" class="card-img-top">
							            <h2 class="text-center mt-2 font-weight-bold text-dark">Circel Student</h2>
							          </div>
							        </a>
							       </div>');
					array_push($a,'<div class="col-md-3 wow bounce mb-5" id="card_menu" data-wow-duration="3s" style="cursor: pointer;">
		    						<a href = "'.base_url().'hris/main">
							          <div class="card shadow border-0" style="background-color:#fff; ">
							            <img src="'.base_url().'assets/home/img/bg-mapel1.png" class="card-img-top">
							            <h2 class="text-center mt-2 font-weight-bold text-dark">HRD</h2>
							          </div>
							        </a>
							       </div>');
		    	}else{

		    		if ($aksesApp == "Circle") {
		    		array_push($a,'<div class="col-md-3 wow bounce mb-5" id="card_menu" data-wow-duration="3s" style="cursor: pointer;">
		    						<a href = "'.base_url().'circle_student/main">
							          <div class="card shadow border-0" style="background-color:#fff; ">
							            <img src="'.base_url().'assets/home/img/bg-mapel1.png" class="card-img-top">
							            <h2 class="text-center mt-2 font-weight-bold text-dark">Circel Student</h2>
							          </div>
							        </a>
							       </div>');
		    		}else if ($aksesApp == "Hris") {
		    		array_push($a,'<div class="col-md-3 wow bounce mb-5" id="card_menu" data-wow-duration="3s" style="cursor: pointer;">
		    						<a href = "'.base_url().'hris/main">
							          <div class="card shadow border-0" style="background-color:#fff; ">
							            <img src="'.base_url().'assets/home/img/bg-mapel1.png" class="card-img-top">
							            <h2 class="text-center mt-2 font-weight-bold text-dark">HRD</h2>
							          </div>
							        </a>
							       </div>');
		    		}
		    	}
		    }

		    $json = json_encode($a);
    		echo $json;
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
		       return TRUE;
     		}else{
		       return FALSE;
	     	}
	  	}
	}
?>