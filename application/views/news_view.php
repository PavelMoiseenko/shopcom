<h1>Новости</h1>
<p>
Все совпадения новостей с реальными событиями случайны.
<br />
<?php

while ($news = $data->fetch_assoc()) {
		echo '<a href="/news/one_new?article_id='.$news['id'].'">'.'<br />'.'<h1>'.$news['title'].'</h1>'.'</a>.<br />'; 
	}

?>
</p>
