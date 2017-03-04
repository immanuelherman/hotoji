<?php
class User_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function login($req = NULL){
		if (isset($req['username']) && isset($req['password'])){
			$query = $this->db->get_where('user', array('username' => $req['username'], 'password' => md5($req['password'])),1,0);
			return $query->row_array();
		}
	}
	
	public function get($id = FALSE){
		if ($id === FALSE){
			$query = $this->db->get('userdetail');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('userdetail', array('id' => $id));
			return $query->row_array();
		}
	}
}