<?php
	include ("../models/bd.php");
	$deleteById = $_POST["deleteById"];
	$query =mysqli_query($db, "DELETE FROM `quotes` WHERE `id` = {$deleteById};");
	if ($query=='TRUE') { 
		?>
		<form action="../views/notification.php" method="post">
		<?php 
		$temp = 2;
		include ("../views/notification.php");
		exit();
	} else { 
		?>
		<form action="../views/notification.php" method="post">
		<?php 
		$temp = 3;
		include ("../views/notification.php");
		exit();
	}
