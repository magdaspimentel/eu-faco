<?php

namespace Core;

class View 

{

	public function loadView($view, $data = []) 

	{
		if(file_exists("views/".$view.".php")) 

		{

			require_once "views/".$view.".php";	

		}

		else 

		{

			echo "A view com o nome <b>".$view."</b> não existe!";

		}

	}

	public function loadTemplate($templateParts = [], $data = []) 

	{

		foreach ($templateParts as $templatePart) 

		{
			
			if(file_exists("views/".$templatePart.".php")) 

			{

				require_once "views/".$templatePart.".php";	

			}

			else 

			{

				echo "A Template Part com o nome <b>".$templatePart."</b> não existe!";

			}

		}

	}


}