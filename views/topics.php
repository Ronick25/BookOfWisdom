<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Topics</title>
</head>
<body>
	<?php 
	include('footer.php');
	include('../models/fetchQuotes.php');
	$content = file_get_contents("http://phil0s0pher.tk/MY_API/getAllTopics");
	$arrayId = array();
	$arrayName = array();
	$arrayImg = array();
	foreach (json_decode($content, true) as $eventrType => $events) {
		array_push($arrayId, $events[id]);
		array_push($arrayName, $events[name]);
		array_push($arrayImg, $events[img]);
	}
	?>
	<form action="../controller/deleteTopic.php" method="post">
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Img</th>
					<th>Option 1</th>
				</tr>		
			</thead>
			<tbody>
				<?php for ($i=0;$i<count($arrayId);$i++) { ?> 
				<tr>
					<td><?php echo ($arrayId[$i])." "; ?></td>
					<td><?php echo ($arrayName[$i])." "; ?></td>
					<td><img src="<?php echo ($arrayImg[$i])." ";?>" alt="" width="75", heigth="75"></td>
					<td><button class="btn btn-danger" type="submit" name="deleteById" value=<?= ($arrayId[$i]); ?>>DELETE</button></form></td>
				</tr><?php } ?>	
			</tbody>
		</table>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
