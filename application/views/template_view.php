<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><link href="css/style-ie.css" rel="stylesheet" type="text/css" /><![endif]-->	
	
	<title>ООО "Феникс"</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Project Description">
	<meta name="author" content="Project Keywords">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet" type="text/css" />			
	
	<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/js/site.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<div id="wrapper">
	<header id="header">
		<section id="logo">
			<h1><a href="index/html">ООО "ФЕНИКС"</a></h1>
			<p>ВРЕМЯ - ДЕНЬГИ</p>
		</section>
		<ul id="nav">
			<?php 
				/**/
				if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])){
					echo "<li class='active'><a href='/'>ВХОД</a></li>";
				}
				if(isset($_SESSION['admin'])){
					echo "<li><a href='/login/edit'>РЕДАКТОР</a></li>";
				}
			?>	
					
					<li><a href="/news">НОВОСТИ</a></li>
					<!--<li><a href="/twig">TWIG</a></li>-->
			<?php 
				if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
					echo "<li><a href='/services'>УСЛУГИ</a></li>";
					echo "<li><a href='/about'>О НАС</a></li>";
					echo "<li><a href='/contacts'>КОНТАКТЫ</a></li>";
					echo "<li><a href='/'>ВЫХОД</a></li>";
				}
			?>
		</ul>
	</header><!-- // end #header -->
	<section id="banner">
		<h1>Как Сохранить <span>Свой Капитал</span></h1>
		<img src="/images/banner.jpg" alt="Banner">
	</section><!-- // end #banner -->
	<div id="main-body" class="clearfix">
		<div>
			
			<?php include 'application/views/'.$content_view;?>
						
				
		</div><!-- // end #content -->
		
	</div><!-- // end #main-body -->
	<footer id="footer">
		<span class="fl"><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></span>
		<span class="fr">Copyright &copy; <strong>Business Name</strong>. All right reserved.</span>
	</footer><!-- // end #footer -->
</div><!-- // end #wrapper -->
<p class="author">Free Web Design Templates by <a href="http://dkntemplates.com">Dkntemplates.com</a></p>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>	



</body>
</html>
