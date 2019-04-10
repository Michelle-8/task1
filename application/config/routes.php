<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/login'] = 'admin/login';
$route['admin/(:any)'] = 'admin/login/$1';
// $route['(:any)'] = 'admin/login/$1';

$route['users/login'] = 'users/login';


$route['default_controller'] = 'users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

