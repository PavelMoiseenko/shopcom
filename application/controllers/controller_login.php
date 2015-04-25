<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{

		if(!empty($_POST['login']) && !empty($_POST['password']))
		{
			
			$login = $_POST['login'];
			$password =$_POST['password'];
			$model = $this->load_model('Login');
			$data = $model -> get_login();
			$avtor = $model -> proverka($login, $password, $data);
			if(isset($avtor) && $login == 'admin' && $password == 'admin'){
				$this->generate('editNews_view.php', 'template_view.php', $avtor);
			}
			elseif(isset($avtor)){
				$this->generate('welcome_view.php', 'template_view.php', $login);

			}
			else{
				$this->generate('loginDenied_view.php', 'template_view.php', $avtor);
			}


		}
		else{
			$this->generate('loginEmpty_view.php', 'template_view.php');
		}

	}

	function action_edit(){
		$this->generate('editNews_view.php', 'template_view.php', null);
	}


	function action_registrForm(){
			$this->generate('registrForm_view.php', 'template_view.php', null);
	}


	function action_registr(){
		
		if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['tel'])){
			$surname = $_POST['surname'];
			$name = $_POST['name'];
			$tel = $_POST['tel'];
			$model = $this->load_model('Login');
			$data = $model->get_login();
			$registr = $model->registr($surname, $name, $tel, $data);
			//var_dump($registr);
			if($registr){
				$this->generate('registrSuccess_view.php', 'template_view.php');
			}
			else{
				$this->generate('registrDenied_view.php', 'template_view.php');
			}
		}
		else{
			$this->generate('registrEmpty_view.php', 'template_view.php');
		}
	}
}
