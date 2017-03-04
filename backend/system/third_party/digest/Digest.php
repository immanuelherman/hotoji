<?php



if (!defined('BASEPATH')) exit('No direct script access allowed');

class Digest{
	public function __construct(){
		
	}
	
	public function setDigest(){
		var_dump("setDigest"); die;
	}
	
	public function checkDigest(){
		$valid = false;
		return $valid;
	}
	
	public function setAuthorization(){
	
	}
	
	public function getAuthorization(){
		$auth = null;
		return $auth;
	}
}