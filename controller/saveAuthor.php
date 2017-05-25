<?php
    include ("../models/bd.php");

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['img'])) { $img=$_POST['img']; if ($img =='') { unset($img);} }
    if (isset($_POST['description'])) { $description=$_POST['description']; if ($description =='') { unset($description);} }
    
    if (empty($name) or empty($description) or empty($img)) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 0;
        include ("../views/notification.php");
        exit();
    }
    if (strpos($img, 'http') !== false) {

    } else { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 1;
        include ("../views/notification.php");
        exit();
    }
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $description = stripslashes($description);
    $description = htmlspecialchars($description);
    $img = stripslashes($img);
    $img = htmlspecialchars($img);
    $name = trim($name);
    $description = trim($description);
    $img  = trim($img);

    $result = mysqli_query ($db, "INSERT INTO authors (name,img, description) VALUES('$name','$img','$description') ");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/authors.php');
    }
