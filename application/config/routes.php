<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/notfound';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = "welcome/about";
$route['contact'] = "welcome/contact";
$route['privacy'] = "welcome/privacy";
$route['terms'] = "welcome/terms";
$route['services'] = "welcome/services";