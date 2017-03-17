<?php
class User_model extends CI_Model {
	public function __construct(){
		$this->load->database();
		$this->load->helper('htj_request');
	}
	
	public function rowCount(){
		return $this->db->count_all('user');
	}
	
	public function get($id = NULL, $param = NULL){
		if (isset($id)) $this->db->where('id', $id);
		$this->db->from('user');
		if(isset($param)) $this->db = request_parse($this->db, $param);
		$query = $this->db->get();
		//
		$data = array(
			"count" => (isset($param['search']) && $param['search']!="") ? $query->num_rows() : $this->rowCount(),
			"data" => $query->result_array()
		);
		return $data;
	}
	
	public function getDetail($id = NULL, $param = NULL){
		if (isset($id)) $this->db->where('id', $id);
		//
		$this->db->from('user');
		$this->db = request_parse($this->db, $param);
		$this->db->join('userdetail', 'userdetail.id_user = user.id'); 
		$query = $this->db->get();
		//
		$data = array(
			"count" => (isset($param['search']) && $param['search']!="") ? $query->num_rows() : $this->rowCount(),
			"data" => $query->result_array()
		);
		return $data;
	}
	
	public function post($param = NULL){
		$query = $this->db->get_where('user', array("username"=>$param["username"]),1);
		if($query->num_rows() == 0){
			$result = $this->db->insert('user', $param);
			if($result) return $this->db->insert_id();
		}
		return false;
	}
	
	public function put_password($id = NULL, $password = NULL){
		if(isset($id) && isset($password)){
			$this->db->where('id', $id);
			return $this->db->update('user', array("password"=>$password));
		}
	}
	
	public function post_detail($param = NULL){
		return $this->db->replace('userdetail', $param);
	}
	
	public function delete($id = NULL){
		if (isset($id)){
			$this->db->where('id', $id);
			$obj = $this->db->get('user');
			//
			$this->db->where('id', $id);
			$result = $this->db->delete('user');
			if($result){
				return $obj->result_array();
			}
		}
		return NULL;
	}
	
	
	
}