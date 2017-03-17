<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//--API--------------------------------------------------------------------------------------------------
// Login
$route['login']['POST'] 						= "login/doLogin";
$route['logout'] 								= "login/doLogout";

// User
$route['user/create']['POST'] 					= "user/post";
$route['user/(:num)/edit']['POST'] 				= "user/put/$1";
$route['user/get'] 								= "user/get";
$route['user/(:num)/get'] 						= "user/get/$1";
$route['user/get/detail']						= "user/getDetail"; // Query join with table 'userdetail'
$route['user/(:num)/get/detail']				= "user/getDetail/$1"; // Query join with table 'userdetail'
$route['user/(:num)/delete']['POST']			= "user/delete/$1";

