<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Main page</title>
</head>
<body>
	<?php 
	include('footer.php');
	include('../models/fetchQuotes.php');
	$content = file_get_contents("http://phil0s0pher.tk/MY_API/getAllQuotes");
	$arrayId = array();
	$arrayAuthor = array();
	$arrayTopic = array();
	$arrayQuote = array();
	foreach (json_decode($content, true) as $eventrType => $events) {
		array_push($arrayId, $events[id]);
		array_push($arrayAuthor, $events[author]);
		array_push($arrayTopic, $events[topic]);
		array_push($arrayQuote, $events[quote]);
	}
	?>
	<div class='wrapper'>
		<p class="head">The Book of Wisdom</p>
		<div class="content">
			Этот сайт сделан для управления базой данных мобильного приложения  <a href="https://play.google.com/store/apps/details?id=com.palantir.zver.bookofwisdom">Book of Wisdom</a>. Он предоставляет удобный интерфейс для удаления, добавления и изменения новых цитат, тем и авторов. А так же предоставляет RESTful api для удобной работы мобильного приложения с базой данных. Сайт защищен от XSS-атак и SQL-инъекций.
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>	
</html>
