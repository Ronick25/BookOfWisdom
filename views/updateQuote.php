<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Update quote</title>
</head>
<body>
	<?php 
	include('footer.php');
	include('../models/bd.php');
	$updateById = $_POST["updateQuote"];
	$query = mysqli_query($db, "SELECT `quote` FROM `quotes` WHERE `id`={$updateById}");
	$id = mysqli_query($db, "SELECT `id` FROM `quotes` WHERE `id`={$updateById}");
	$resultQuery = mysqli_fetch_assoc($query);
	$resultId = mysqli_fetch_assoc($id);
	?>
	<div class="container">
		<div class="starter-template">
			<h1>Update quote</h1>
		</div>
		<div class="form-group">
			<textarea name="newQuote" id="newQuote" class="form-control" cols="40" rows="5" value=<?= $resultQuery['quote']; ?>><?= $resultQuery['quote']; ?></textarea>
		</div>
		<?php 
		include("../models/fetchAuthor.php");
		include("../models/fetchTopic.php");
		?>
		<div class="form-group">
			<label for="sel1">Select Author</label>
			<select name=author id="author" class="form-control" size=1>
				<option value=0 selected>Выбери</option>
				<?php for ($i=0; $i < count($array); $i++) { ?>
				<option name="<?= $array[$i]?>"><?= $array[$i] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="sel1">Select Topic</label>
			<select name=topic id="topic" class="form-control" size=1>
				<option value=0 selected>Выбери</option>
				<?php for ($i=0; $i < count($arrayOfTopics); $i++) { ?>
				<option name="<?= $arrayOfTopics[$i]?>" ><?= $arrayOfTopics[$i] ?></option>
				<?php } ?>
			</select>
		</div>
		<div> 
		<a href="quotes.php"><button type="button" class="btn btn-danger">Назад</button></a>
		<button class="btn btn-primary" id="updateById" value=<?= ($resultId['id']); ?> onclick="updateQuote()">Сохранить</button>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    	<div class="modal-dialog">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                	<h4 class="modal-title" id="myModalLabel">Ошибка</h4>
		            	</div>
		            	<div class="modal-body" id ="modal-body">
		            	</div>
		            	<div class="modal-footer">
		                	<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
		            	</div>
		        	</div>
		    	</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>