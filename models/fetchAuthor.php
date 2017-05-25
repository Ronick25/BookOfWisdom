<?php
 	include ("bd.php");

 	$array = array ();
	$strSQL = "SELECT * FROM authors";
	$rs = mysqli_query($db, $strSQL);
	while($row = mysqli_fetch_array($rs)) {
		array_push($array, $row[name]);
	}
	mysqli_close($db);
