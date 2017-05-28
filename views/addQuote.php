<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Add quote</title>
</head>
<body>
	<?php 
	include("../models/fetchAuthor.php");
	include("../models/fetchTopic.php");
	include('footer.php');
	?>
	<div class="container">
		<div class="starter-template">
			<h1>New quote</h1>
		</div>
		<div class="form-group">
			<label for="sel1">Select Author</label>
			<select name=author id="author" class="form-control" size=1>
			<option value=0 selected>Выбери</option>
			<?php for ($i=0; $i < count($array); $i++) { ?>
			<option name="<?= $array[$i]?>"><?= $array[$i]?></option>
			<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="sel1">Select Topic</label>
			<select name="topic" id="topic" class="form-control" >
				<option value=0 selected>Выбери</option>
				<?php for ($i=0; $i < count($arrayOfTopics); $i++) { ?>
					<option name="<?= $arrayOfTopics[$i]?>"><?= $arrayOfTopics[$i]?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="comment">Write a quote</label>
			<textarea name="quote"  id="quote" type="text" class="form-control" rows="5"></textarea>
		</div>
		<div> 
			<a href="mainPage.php"><button type="button" class="btn btn-danger">Назад</button></a>
			<button class="btn btn-primary" onclick="addQuote()">Сохранить</button>
            <?php include ("notificationButton.php") ?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>
