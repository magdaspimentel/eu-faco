<?php

use Core\View;
use Config\Config;

$app->get('/ux-ui-design/prototipos', function() {

	$view = new View();

	$data = [
		'url' => Config::URL, 
		'page' => 'ux-ui-design-prototipos',
	];

	$view->loadView('ux-ui-design-prototipos', $data);

});