<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
//backend
$route['user'] = 'user/dashboard';
$route['user/pengiriman'] = 'user/pengiriman';
$route['user/profile'] = 'user/profile';
$route['user/driver'] = 'user/driver';
// auth
$route['user/login'] = 'user/login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
