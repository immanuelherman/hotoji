<?php 

namespace system\third_party\jwt\Namshi\JOSE;

if (!defined('BASEPATH')) exit('No direct script access allowed');
//echo getcwd(); die;
//include (BASEPATH."third_party/jwt/Namshi/JOSE/JWS.php");
//include (BASEPATH."third_party/jwt/Namshi/JOSE/JWT.php");


class Test extends JWS{
	public function __construct(){
		var_dump("_construct"); die;
	}
	public function test123(){
		var_dump("test123a"); die;
	}
}
