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
	<form action="../controller/saveQuote.php" method="post">
		<div class="container">
			<div class="starter-template">
				<h1>New quote</h1>
			</div>
			<div class="form-group">
				<label for="sel1">Select Author</label>
				<select class="form-control" name=author>
					<option value=0 selected>Выбери</option>
					<?php for ($i=0; $i < count($array); $i++) { ?>
						<option name="<?= $array[$i]?>"><?= $array[$i]?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="sel1">Select Topic</label>
				<select class="form-control" name="topic">
					<option value=0 selected>Выбери</option>
					<?php for ($i=0; $i < count($arrayOfTopics); $i++) { ?>
						<option name="<?= $arrayOfTopics[$i]?>"><?= $arrayOfTopics[$i]?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="comment">Write a quote</label>
				<textarea class="form-control" rows="5" name="quote"></textarea>
			</div>
			<div> 
				<a href="mainPage.php"><button type="button" class="btn btn-danger">Назад</button></a>
				<button type="submit" class="btn btn-success" name="submit">Add</button>
			</div>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
