<?php
    include ("../models/bd.php");

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['img'])) { $img=$_POST['img']; if ($img =='') { unset($img);} }
    if (isset($_POST['description'])) { $description=$_POST['description']; if ($description =='') { unset($description);} }
    
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);
    $description = stripslashes($description);
    $description = htmlspecialchars($description);
    $description = trim($description);
    $img = stripslashes($img);
    $img = htmlspecialchars($img);
    $img  = trim($img);

    $name = preg_replace("/[^a-z0-9\s]/i", "", $_POST['name']);
    $description = preg_replace("/[^a-z0-9\s]/i", "", $_POST['description']);

    $result = mysqli_query ($db, "INSERT INTO authors (name,img, description) VALUES('$name','$img','$description') ");
    if ($result=='TRUE') {
        header('Location: http://phil0s0pher.tk/views/authors.php');
    }
