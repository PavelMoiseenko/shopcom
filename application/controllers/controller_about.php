<?php

class Controller_About extends Controller
{

	function action_index()
	{
		$this->generate('about_view.php', 'template_view.php', null);
	}
}