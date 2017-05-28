<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Book of Wisdom</title>
</head>
<body>
    <div class= "col-md-4 col-lg-4"></div>
    <div class="col-md-4" style="padding-top: 15%">
        <form action="../models/testreg.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Регистрация на сайте</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <form role="form">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input name = "login" type="text" class="form-control" placeholder="Имя пользователя" required autofocus />
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                <input name = "password" type="password" class="form-control" placeholder="Ваш пароль" required />
                                            </div>
                                            <p>У вас нет аккаунта? <a href="/views/reg.php">Регистрация</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">
                                        <button name = "submit" type="submit" class="btn btn-labeled btn-success" style="width: 49%;">
                                            <span class="btn-label"></span>Войти
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="textArea">
        <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость.";
        } else {
            header("Location: http://phil0s0pher.tk/views/mainPage.php");
        }
        ?>
    </div>
</body>
</html>