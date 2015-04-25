<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		unset($_SESSION['admin']);
		unset($_SESSION['user']);
		$this->generate('main_view.php', 'template_view.php', null);
	}
}
