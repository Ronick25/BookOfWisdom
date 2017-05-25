<?php
	include ("bd.php");

 	$arrayOfTopics = array ();
	$strSQL = "SELECT * FROM topics";
	$rs = mysqli_query($db, $strSQL);
	while($row = mysqli_fetch_array($rs)) {
		array_push($arrayOfTopics, $row[name]);
	}
	mysqli_close($db);
	