<?php
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('htj_request');
		$this->load->helper('htj_digest');
		//
		$this->load->model('user_model');
	}
	
	
	
	
	public function doLogin(){
		if(!is_null($this->input->post('username')) && !is_null($this->input->post('password'))){
			$param = array(
				"filter"=>array(
					"username"=>$this->input->post('username'),
					"password"=>md5($this->input->post('password'))
				)
			);
			$obj = $this->user_model->get(NULL, $param);
			if(count($obj['data'])>0){
				$obj = $obj['data'][0];
				$digest = digest_write($obj);
				rest_format(200, "login get success", $digest);
			}else{
				rest_format(400, "login failed. user not exists");
			}
			
		}
		else rest_format(400, "login failed. no username or password");
	}
	
	
	
	
	public function doLogout(){
		
	}
}



