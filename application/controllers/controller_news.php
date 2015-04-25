<?php

class Controller_News extends Controller
{

	function action_index()
	{
		$model = $this->load_model('News');
		$data = $model -> get_news();
		 var_dump($_SESSION);
		$this->generate('news_view.php', 'template_view.php', $data);
	}

	function action_one_new(){
		
		$model = $this->load_model('News');
		$data = $model -> get_one_new();
		$this->generate('oneNew_view.php', 'template_view.php', $data);
	}

	function action_add(){
		$this->generate('addNews_view.php', 'template_view.php',null);
	}

	function action_addNews(){
		if(!empty($_POST['title']) && !empty($_POST['content']))
		{
			
			$title = $_POST['title'];
			$content =$_POST['content'];
			$model = $this->load_model('News');
			$add = $model->addNews($title, $content);
			//var_dump($add);
			if($add){
				$this->generate('addNewsSuccess_view.php', 'template_view.php', null);
			}
		}
		else{
			$this->generate('addNewsEmpty_view.php', 'template_view.php', null);
		}

	}

	function action_deleteNews(){
		$model = $this->load_model('News');
		$data = $model -> get_news();
		$this->generate('deleteNews_view.php', 'template_view.php', $data);

	}

	function action_deleteCheckNews(){
		if(!empty($_POST['check']))
		{
			$check = $_POST['check'];
			$model = $this->load_model('News');
			$delete = $model->deleteNews($check);
			if($delete){
				$this->generate('deleteNewsSuccess_view.php', 'template_view.php', null);
			}
		
		}
		else{
			$model = $this->load_model('News');
			$data = $model -> get_news();
			$this->generate('deleteNewsEmpty_view.php', 'template_view.php', $data);
			}

	}
}