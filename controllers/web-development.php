<?php

use Core\View;
use Config\Config;

$app->get('/web-development', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'web-development',
	];

	$view->loadView('web-development', $data);

});