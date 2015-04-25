<h1><a href='/news'>Новости</a></h1>

<?php

while ($news = $data->fetch_assoc()) {
		echo "<h1 style = 'color:red'>".$news['title']."</h1><p style = 'color:#0000FF'>".$news['content']."</p>"; 
	}

?>

