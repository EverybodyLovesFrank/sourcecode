<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> EverybodyLovesFrank.com: PAGE NOT FOUND </title>
	<meta name="Author" content="Frank T. Pernicano" />
	<meta name="description" content="Frank Pernicano, Frank T. Pernicano, web developer, web applications developer" />
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
 
<body>

<h1 id="BodyTitle">EveryBodyLovesFrank</h1>

<div id="TopModule">
	<p class="title">Page not found!</p>
	<?php
	echo '<p class="body">';
	if(isset($_SERVER['HTTP_REFERER'])) {
		echo 'The page that brought you here is: '.$_SERVER['HTTP_REFERER'];
	}
	else {
		echo 'How\'d ya get here?  There is no page at this address!';
	}
	echo '</p>';
	?>
	
	<p><a class="notFound" href="http://www.everybodylovesfrank.com">&lt;-- Go back to EveryBodyLovesFrank home page</a></p>
</div>

<div id="ModuleFooter">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		&copy; <?php echo date('Y'); ?> Frank T Pernicano | frank@everybodylovesfrank.com
	</div>
	<div class="moduleBottom"></div>
</div>

</body>
</html>