<?php
    include ("../models/bd.php");

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['img'])) { $img = $_POST['img']; if ($img == '') { unset($img);} }
    
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);
    $img = stripslashes($img);
    $img = htmlspecialchars($img);
    $img = trim($img);   

    $name = preg_replace("/[^a-z0-9\s]/i", "", $_POST['name']);  
    $img = preg_replace("/[^a-z0-9\s,.!:;?/]/i", "", $_POST['img']);
    $result = mysqli_query ($db, "INSERT INTO topics (name,img) VALUES('$name','$img')");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/topics.php');
    }
