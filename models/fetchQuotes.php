<?php
	include ("bd.php");

 	$array = array ();
	$strSQL = "SELECT * FROM quotes";
	$rs = mysqli_query($db, $strSQL);
	while($row = mysqli_fetch_array($rs)) {
		array_push($array, $row[author]);
	}
	mysqli_close($db);
