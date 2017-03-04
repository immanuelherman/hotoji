<?php
class User extends CI_Controller {
	
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url_helper');
		
		
		//
		//include(APPPATH."third_party/digest/digest.php");
		include(BASEPATH.'third_party/digest/Digest.php');
		$digest = new Digest();
		$digest->setDigest();
		
		/*
		var_dump(BASEPATH); die;
		$this->load->library('test');
		$this->test->test123();
		*/
		
		/*
		include(BASEPATH.'third_party/jwt/Test.php');
		$test = new Test();
		echo(json_encode($test)); die;
		*/
		//$this->load->add_package_path(BASEPATH.'third_party/jwt');
		//$this->load->library('test');
		//$this->load->library('jwt/test');
		//$this->test->test123();
	}
	
	

	public function jwt(){
		/*
		if ($username == 'correctUsername' && $pass == 'ok') {
			$user = Db::loadUserByUsername($username);

			$jws  = new SimpleJWS(array(
				'alg' => 'RS256'
			));
			$jws->setPayload(array(
				'uid' => $user->getid(),
			));

			$privateKey = openssl_pkey_get_private("file:///C:/Users/Immanuel/Desktop/1415.pdf", self::SSL_KEY_PASSPHRASE);
			$jws->sign($privateKey);
			setcookie('identity', $jws->getTokenString());
		}
		*/
	}
	public function login(){
		$valid = false;
		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
			$req = array('username'=>$_REQUEST['username'], 'password' => $_REQUEST['password']);
			$valid = (bool) $this->user_model->login($req);
		}
		//var_dump($valid); die;
	}
	
	public function view(){
		$data['user'] = $this->user_model->get();
		var_dump($data); die;
	}

	public function detail($id = NULL){
		$data['user_list'] = $this->user_model->get($id);
	}
}