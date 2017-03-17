<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('rest_format')){
	function rest_format($status_code, $status_message, $data = NULL){
		$rest = array(
			'status' => array(
				'code' => $status_code,
				'message' => $status_message
			)
		);
		if(isset($data)) $rest['data'] = $data;
		//
		echo(json_encode($rest));
		die;
	}
}

if (!function_exists('request_format')){
	function request_format($request = NULL){
		$param = array();
		if(!is_null($request->post('select'))) $param['select'] = $request->post('select');
		if(!is_null($request->post('filter'))) $param['filter'] = (array)json_decode($request->post('filter'));
		if(!is_null($request->post('order'))) $param['order'] = (array)json_decode($request->post('order'));
		if(!is_null($request->post('offset'))) $param['offset'] = $request->post('offset');
		if(!is_null($request->post('search'))) $param['search'] = $request->post('search');
		//
		if(!is_null($request->post('limit'))) $param['limit'] = $request->post('limit');
		if(!is_null($request->post('perPage'))) $param['limit'] = $request->post('perPage');
		//
		return $param;
	}
}

if (!function_exists('request_parse')){
	function request_parse($db = NULL, $param = NULL){
		if(isset($param['select'])) $db->select($param['select']);
		if(isset($param['filter'])){
			foreach($param['filter'] as $key => $value){
				if(isset($param['filter'][$key])) $db->where($key, $value);
			}
		}
		if(isset($param['order'])){
			foreach($param['order'] as $key => $value){
				if(isset($param['order'][$key])) $db->order_by($key, (strtolower($value)=="desc") ? "DESC" : "ASC");
			}
		}
		if(isset($param['search'])){
			foreach($param['search'] as $key => $value){
				if(isset($param['search'][$key])) $db->like($key, $value, 'both');
			}
		}
		if(isset($param['limit'])) $db->limit($param['limit'], (isset($param['offset'])?$param['offset']:0));
		//
		return $db;
	}
}


if (!function_exists('request_validate')){
	function request_validate($input = NULL, $validParams = NULL){
		$np = array();
		foreach($validParams as $param){
			if(!is_null($input->post($param))) $np[strtolower($param)] = $input->post($param);
		}
		return $np;
	}
}




