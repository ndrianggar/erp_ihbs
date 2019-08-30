 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Main extends CI_Controller{
		
	    function index()
		{
			$login = $this->isLogin();
			if ($login) {
				$this->load->view("main_v");
			}
		}

		private function isLogin(){
		    // if(!empty($this->session->userdata("kd_user"))&&
		    //    !empty($this->session->userdata("username"))&&
		    //    !empty($this->session->userdata("section"))&&
		    //    !empty($this->session->userdata("jabatan"))&&
		    //    !empty($this->session->userdata("level")))
		    // {
		    //    return TRUE;
     	// 	}else{
		    //    return FALSE;
	     // 	}
			phpinfo();
	  	}
	}
?>