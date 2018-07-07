<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
//perusahaan
$route['perusahaan']   = 'perusahaan';
$route['perusahaan/pesanan']   = 'perusahaan/pesanan';


//Driver
$route['driver']   = 'driver';
$route['driver/tugasBaru']   = 'driver/tugasBaru';
$route['driver/status']   = 'driver/status';

//konsumen
$route['user']   = 'konsumen';
$route['user/pesanBarang'] = 'konsumen/pesanBarang';
$route['user/riwayat']     = 'konsumen/riwayat';

// auth
$route['user/login'] = 'user/login';
$route['user/register'] = 'user/register';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
