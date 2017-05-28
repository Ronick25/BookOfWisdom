<?php
    include ("../models/bd.php");
    session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (empty($login) or empty($password)) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 0;
        include ("../views/notification.php");
        exit();
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $login = trim($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $password = trim($password);

    $name = preg_replace("/[^a-z0-9\s]/i", "", $_POST['name']); 

    $result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
    $row = mysqli_fetch_array($result);
    if (!empty($row['id'])) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 1;
        include ("../views/notification.php");
        exit();
    }
    $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
    if ($result2=='TRUE') {
        $_SESSION['login'] = $login; 
        $_SESSION['id']= $password; 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 2;
        include ("../views/notification.php");
        exit();
    } else { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 3;
        include ("../views/notification.php");
        exit();
    }
