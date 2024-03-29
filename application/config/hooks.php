<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
//load phpdotenv
$hook['pre_system'][] = array(
	'function' => 'init_env',
	'filename' => 'env.php',
	'filepath' => 'hooks'
);

//set baseurl with phpdotenv
$hook['post_controller_constructor'][] = array(
	'function' => 'set_baseurl',
	'filename' => 'env_baseurl.php',
	'filepath' => 'hooks'
);