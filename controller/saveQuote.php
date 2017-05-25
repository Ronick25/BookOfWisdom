<?php
    include ("../models/bd.php");

    if (isset($_POST['author'])) { $author = $_POST['author']; if ($author == '') { unset($author);} } 
    if (isset($_POST['quote'])) { $quote=$_POST['quote']; if ($quote =='') { unset($quote);} }
    if (isset($_POST['topic'])) { $topic=$_POST['topic']; if ($topic =='') { unset($topic);} }
    
    if (empty($author) or empty($quote) or empty($topic)) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 0;
        include ("../views/notification.php");
        exit();
    }
    $author = stripslashes($author);
    $author = htmlspecialchars($author);
    $quote = stripslashes($quote);
    $quote = htmlspecialchars($quote);
    $topic = stripslashes($topic);
    $topic = htmlspecialchars($topic);
    $author = trim($author);
    $quote = trim($quote);
    $topic = trim($topic);
 
    $result = mysqli_query ($db, "INSERT INTO quotes (author,quote, topic) VALUES('$author','$quote','$topic')");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/quotes.php');
    }
