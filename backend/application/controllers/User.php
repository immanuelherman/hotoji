<?php
class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('htj_request');
		//
		$this->load->model('user_model');
	}
	
	
	
	
	public function get($id = NULL){
		$param = request_format($this->input);
		$data['list'] = $this->user_model->get($id, $param);
		if(!empty($data['list'])) rest_format(200, "user get success", $data);
		else rest_format(200, "user get return no data");
	}
	
	
	
	
	public function post(){
		$validParam = array(
			"username",
			"password"
		);
		$param = request_validate($this->input, $validParam);
		//
		if(isset($param['username'])){
			if(!isset($param['password'])) $param['password'] = $param['username'];
			$param['password'] = md5($param['password']);
			$id = $this->user_model->post($param);
			if($id){
				$validParam = array(
					"fullname",
					"address",
					"phone",
					"email",
					"zipcode",
					"birthdate",
					"gender",
					"marital_status",
					"country",
					"income_range"
				);
				$param = request_validate($this->input, $validParam);
				$param['id_user'] = $id;
				$result = $this->user_model->post_detail($param);
				//
				if($result) rest_format(200, "success", $result);
				rest_format(400, "user successfully created; error on inserting user detail");
			}
			rest_format(400, "user already exists");
		}
		rest_format(400, "user create failed", $param);
	}
	
	
	
	
	public function put($id = NULL){
		if(isset($id)){
			$obj = $this->user_model->get($id);
			if(count($obj['data']) > 0){
				$obj = $obj['data'][0];
				
				// Update password
				if(!is_null($this->input->post('password_current'))){
					if(md5($this->input->post('password_current')) == $obj['password']){
						$result = $this->user_model->put_password($id, md5($this->input->post('password')));
					}else{
						rest_format(400, "user update failed. incorrect password");
					}
				}
				
				// Update details
				$validParam = array(
					"fullname",
					"address",
					"phone",
					"email",
					"zipcode",
					"birthdate",
					"gender",
					"marital_status",
					"country",
					"income_range"
				);
				$param = request_validate($this->input, $validParam);
				if(count($param) > 0){
					$param['id_user'] = $id;
					$result = $this->user_model->post_detail($param);
				}
				rest_format(200, "user update success", $param);
			}
			rest_format(400, "user does not exist");
		}
		rest_format(400, "user update failed. user_id not specified");
	}
	
	
	
	
	public function delete($id = NULL){
		if(isset($id)){
			$obj = $this->user_model->delete($id);
			if($obj) rest_format(200, "user delete success", $obj);
		}
		rest_format(400, "user delete failed");
	}
	
	
	
	
}



