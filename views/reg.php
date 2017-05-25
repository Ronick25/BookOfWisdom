<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registration</title>
</head>
<body>
    <form action="../controller/saveUser.php" method="post">
        <div class="col-xs-6 col-sm-6 col-md-6 box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Регистрация на сайте</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 login-box">
                                        <form role="form">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input name = "login" type="text" class="form-control" placeholder="Имя пользователя" required autofocus />
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                <input name = "password" type="password" class="form-control" placeholder="Ваш пароль" required />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                         <a href="../index.php"><button type="button" class="btn btn-danger" style="width: 49%;"> <span class="btn-label"></span>Назад</button></a>
                                        <button name = "submit" type="submit" class="btn btn-labeled btn-success" style="width: 49%;">
                                            <span class="btn-label"></span>Зарегистрироваться
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>