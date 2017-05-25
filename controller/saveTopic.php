<?php
    include ("../models/bd.php");

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['img'])) { $img = $_POST['img']; if ($img == '') { unset($img);} }
    
    if (empty($name) or empty($img)) { 
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
    $img = stripslashes($img);
    $img = htmlspecialchars($img);   
    $name = trim($name);
    $img = trim($img);

    $result = mysqli_query ($db, "INSERT INTO topics (name,img) VALUES('$name','$img')");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/topics.php');
    }
