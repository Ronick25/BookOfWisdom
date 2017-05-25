<?php

	include('bd.php');

	if (isset($_POST['updateById'])) { $updateById = $_POST['updateById']; if ($updateById == '') { unset($updateById);} }
	if (isset($_POST['newQuote'])) { $newQuote = $_POST['newQuote']; if ($newQuote == '') { unset($newQuote);} }
	if (isset($_POST['author'])) { $author = $_POST['author']; if ($author == '') { unset($author);} } 
    if (isset($_POST['topic'])) { $topic=$_POST['topic']; if ($topic =='') { unset($topic);} }

	if (empty($updateById) or empty($newQuote) or empty($author) or empty($topic)) { 
		?>
		<form action="../views/notification.php" method="post">
		<?php 
		$temp = 8;
		include ("../views/notification.php");
		exit();
	}

	$setQuote = mysqli_query($db, "UPDATE  `quotes` SET  `quote` =  '{$newQuote}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));
	$setAuthor = mysqli_query($db, "UPDATE  `quotes` SET  `author` =  '{$author}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));
	$setTopic = mysqli_query($db, "UPDATE  `quotes` SET  `topic` =  '{$topic}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));

	if ($setQuote=='TRUE' && $setAuthor=='TRUE' && $setTopic='TRUE') {		
        header('Location: http://phil0s0pher.tk/views/quotes.php');	
	}  

