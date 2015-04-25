<?php

class Model_Login extends Model
{
	
	public function get_login()
	{
		$conn = $this->connectDb();
		$res = $conn->query("SELECT * FROM users");
		return $res;
	}

	public function proverka($login, $password, $data){
		while ($row = $data->fetch_assoc()) {
				 if($login == $row['surname'] && $password == $row['tel'] && $login == 'admin' && $password == 'admin'){
				 	
				 	$_SESSION['admin'] = "1";
				 	var_dump($_SESSION['admin']);
				 	return $avtor = "access_granted"; 

				 }
				 elseif($login == $row['surname'] && $password == $row['tel']){
				 	
				 	$_SESSION['user'] = "2";
				 	var_dump($_SESSION['user']);
				 	return $avtor = "access_granted";
				 }

			}

	}

	public function registr($surname, $name, $tel, $data){
		while($row = $data->fetch_assoc()){
			if($tel==$row['tel']){
				return false;
			}
		}
		$conn = $this->connectDb();
		$res = $conn->query("INSERT INTO users (surname,name,tel) VALUES ('$surname','$name','$tel')");
		
		return $registr="Пользователь добавлен в БД";

	}

	
	
}
