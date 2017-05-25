<?php
    include ("bd.php");

    session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['logout'])) { $logout=$_POST['logout']; if ($logout =='') { unset($logout);} }
   
    if (empty($login) && empty($password)) {
        unset($_SESSION['login']);
        unset($_SESSION['id']);
        header('Location: http://phil0s0pher.tk/index.php');
    } else if (empty($login) or empty($password)) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 0;
        include ("../views/notification.php");
        exit();
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);

    $result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password'])) { 
        ?>
        <form action="../views/notification.php" method="post">
        <?php 
        $temp = 4;
        include ("../views/notification.php");
        exit();
    } else {
        if ($myrow['password']==$password) {
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['id']=$myrow['id'];
            header("Location: http://phil0s0pher.tk/views/mainPage.php");
        } else { 
            ?>
            <form action="../views/notification.php" method="post">
            <?php 
            $temp = 4;
            include ("../views/notification.php");
            exit();
        }
    }
