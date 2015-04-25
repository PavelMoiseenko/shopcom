<?php

class Controller_Twig extends Controller
{

	function action_index()
	{
			// подгружаем шаблон
	  $template = $twig->loadTemplate('twig_view.php');

	  // передаём в шаблон переменные и значения
	  // выводим сформированное содержание
	  echo $template->render(array('login' => 'Моисееенко'));



		//$this->generate('twig_view.php', 'template_view.php', null);
	}
}
