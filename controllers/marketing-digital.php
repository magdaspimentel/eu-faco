<?php

use Core\View;
use Config\Config;

$app->get('/marketing-digital/', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'marketing-digital',
	];

	$view->loadView('marketing-digital', $data);

});