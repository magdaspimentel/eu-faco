<?php

use Core\View;
use Config\Config;

$app->get('/', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'home',
	];

	$view->loadView('home', $data);

});

$app->get('/home/', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'home',
	];

	$view->loadView('home', $data);

});