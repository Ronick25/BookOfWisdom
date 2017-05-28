<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Notification</title>
</head>
<body>
    <div class="notif">
        <?php 
        switch ($temp) {
            case 0:
                echo "Извините, введённый вами login или пароль неверный";
                break;
            case 1:
                echo ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
                break;
            case 2:
                header("Location: http://phil0s0pher.tk/views/mainPage.php");
                break;
            case 3:
                echo "Ошибка! Вы не зарегистрированы.";
                break;
            }
        ?>
        <button class="btn btn-danger" type="button" onclick="history.back()">Назад</button>
    </div>
</body>
</html>