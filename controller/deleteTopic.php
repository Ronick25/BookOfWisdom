<?php
	include ("../models/bd.php");
	$deleteById = $_POST["deleteById"];
	$query = mysqli_query($db, "DELETE FROM `topics` WHERE `id` = {$deleteById};");
