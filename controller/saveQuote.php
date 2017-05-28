<?php
    include ("../models/bd.php");

    if (isset($_POST['author'])) { $author = $_POST['author']; if ($author == '') { unset($author);} } 
    if (isset($_POST['quote'])) { $quote=$_POST['quote']; if ($quote =='') { unset($quote);} }
    if (isset($_POST['topic'])) { $topic=$_POST['topic']; if ($topic =='') { unset($topic);} }
    
    $author = stripslashes($author);
    $author = htmlspecialchars($author);
    $author = trim($author);
    $quote = stripslashes($quote);
    $quote = htmlspecialchars($quote);
    $quote = trim($quote);
    $topic = stripslashes($topic);
    $topic = htmlspecialchars($topic);
    $topic = trim($topic);

    $quote = preg_replace("/[^a-z0-9\s,.!:;?]/i", "", $_POST['quote']);;

    $result = mysqli_query ($db, "INSERT INTO quotes (author,quote, topic) VALUES('$author','$quote','$topic')");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/quotes.php');
    }
