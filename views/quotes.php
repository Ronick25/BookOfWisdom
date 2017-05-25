<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Quotes</title>
</head>
<body>
	<?php 
	include('footer.php');
	include('../models/fetchQuotes.php');
	$content = file_get_contents("http://phil0s0pher.tk/MY_API/getAllQuotes");
	$arrayId = array();
	$arrayAuthor = array();
	$arrayTopic = array();
	$arrayQuote = array();
	foreach (json_decode($content, true) as $eventrType => $events) {
		array_push($arrayId, $events[id]);
		array_push($arrayAuthor, $events[author]);
		array_push($arrayTopic, $events[topic]);
		array_push($arrayQuote, $events[quote]);
	}
	?>
	<form action="../controller/deleteQuote.php" method="post">
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Author</th>
					<th>Topic</th>
					<th>Quote</th>
					<th>Option 1</th>
					<th>Option 2</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=0;$i<count($arrayId);$i++) { ?> 
				<tr>
					<td><?php echo ($arrayId[$i])." "; ?></td>
					<td><?php echo ($arrayAuthor[$i])." "; ?></td>
					<td><?php echo ($arrayTopic[$i])." "; ?></td>
					<td><?php echo ($arrayQuote[$i])." "; ?></td>
					<td><button class="btn btn-danger" type="submit" name="deleteById" value=<?= ($arrayId[$i]); ?>>DELETE</button></form></td>
					<td><form action="updateQuote.php" method="post">
						<button class="btn btn-primary" type="submit" name="updateQuote" value=<?= ($arrayId[$i]); ?>>UPDATE</button></form></td>
				</tr><?php } ?>	
			</tbody>
		</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
