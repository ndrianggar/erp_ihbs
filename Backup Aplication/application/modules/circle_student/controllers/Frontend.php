 <?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	Class Frontend extends CI_Controller{
		public function __construct(){
                  parent::__construct();
                  $this->load->model("Main_model");
		}

		public function index()
		{
			$data['slider'] = $this->Main_model->showslider();
			$this->template->load("frontend/main_v","frontend/home_v",$data);
		}

	
	}
?>