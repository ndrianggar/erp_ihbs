 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main extends CI_Controller{
		
	    function index()
		{
			$login = $this->isLogin();
			if ($login) {
				$this->load->view("main_v");
			}else{
				redirect();
			}
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