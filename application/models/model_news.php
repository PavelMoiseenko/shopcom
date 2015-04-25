<?php

class Model_News extends Model
{
	
	public function get_news()
	{
		$conn = $this->connectDb();
		$res = $conn->query("SELECT * FROM news");
		return $res;
	}

	public function get_one_new()
	{	
		$conn = $this->connectDb();
		$id = $_GET['article_id'];
		$res = $conn->query("SELECT * FROM news WHERE id='$id'");
		return $res;
	}

	public function addNews($title, $content){
		$conn = $this->connectDb();
		$res = $conn->query("INSERT INTO news (title, content) VALUES ('$title','$content')");
		
		return $add=true;

	}

	public function deleteNews($check){
		$conn = $this->connectDb();
		foreach($check as $key=>$value){
                  $res = $conn->query("DELETE FROM news WHERE id = $value");
		}
		return $delete = true;
	}
}
