<?php
	include('bd.php');

	if (isset($_POST['updateById'])) { $updateById = $_POST['updateById']; if ($updateById == '') { unset($updateById);} }
	if (isset($_POST['newQuote'])) { $newQuote = $_POST['newQuote']; if ($newQuote == '') { unset($newQuote);} }
	if (isset($_POST['author'])) { $author = $_POST['author']; if ($author == '') { unset($author);} } 
    if (isset($_POST['topic'])) { $topic=$_POST['topic']; if ($topic =='') { unset($topic);} }

	$updateById = stripslashes($updateById);
    $updateById = htmlspecialchars($updateById);
    $updateById = trim($updateById);
    $newQuote = stripslashes($newQuote);
    $newQuote = htmlspecialchars($newQuote);
    $newQuote = trim($newQuote);
    $author = stripslashes($author);
    $author = htmlspecialchars($author);
    $author = trim($author);
    $topic = stripslashes($topic);
    $topic = htmlspecialchars($topic);
    $topic = trim($topic);
   
    $newQuote = preg_replace("/[^a-z0-9\s,.!:;?]/i", "", $_POST['newQuote']);;

	$setQuote = mysqli_query($db,"UPDATE  `quotes` SET  `quote` =  '{$newQuote}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));
	$setAuthor = mysqli_query($db,"UPDATE  `quotes` SET  `author` =  '{$author}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));
	$setTopic = mysqli_query($db,"UPDATE  `quotes` SET  `topic` =  '{$topic}' WHERE `id` = '{$updateById}'") or die(mysqli_error($db));

	if ($setQuote=='TRUE' && $setAuthor=='TRUE' && $setTopic='TRUE') {		
        header('Location: http://phil0s0pher.tk/views/quotes.php');	
	}  

