<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Add author</title>
</head>
<body>
    <?php include('footer.php'); ?>
        <div class="container">
            <div class="starter-template" style="text-align: center"}>
                <h1>New Author</h1>
            </div>
            <div class="form-group">
                <label>Author name</label>
                <input name="name" id="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Author's image</label>
                <input name="img" id="img" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" type="text" class="form-control" rows="5"></textarea>
            </div>
            <a href="mainPage.php"><button type="button" class="btn btn-danger">Назад</button></a>
            <button class="btn btn-primary" onclick="addAuthor()">Сохранить</button>
            <?php include ("notificationButton.php") ?>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
