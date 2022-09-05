<?php

use Core\View;
use Config\Config;

$app->get('/marketing-digital/analytics', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'marketing-digital-analytics',
	];

	$view->loadView('marketing-digital-analytics', $data);

});