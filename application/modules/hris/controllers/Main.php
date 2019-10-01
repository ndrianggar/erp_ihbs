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
    	/*	$data['kd'] = $this->Main_model->getPositionById();*/
    		$this->template->load("mainAdmin_v","dashboard/master_data/v_position",$data);
    	}

    	public function getDataPosition()
    	{
    		$this->isLogin();
    		$result = $this->Main_model->getPosition();
    		echo $result;
    	}
    	


	}
?>