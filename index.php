<?php

require_once "vendor/autoload.php";

spl_autoload_register(function ($className) 
{
	$path = str_replace("\\", "/",$className);

	if(file_exists($path.".php"))
	{
		require_once $path . ".php";
	}
});