<?php

use Core\View;
use Config\Config;

$app->get('/ux-ui-design/', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'ux-ui-design',
	];

	$view->loadView('ux-ui-design', $data);

});