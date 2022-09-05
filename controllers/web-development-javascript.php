<?php

use Core\View;
use Config\Config;

$app->get('/web-development/javascript', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'web-development-javascript',
	];

	$view->loadView('web-development-javascript', $data);

});