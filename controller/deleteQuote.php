<?php
	include ("../models/bd.php");
	$deleteById = $_POST["deleteById"];
	$query = mysqli_query($db, "DELETE FROM `quotes` WHERE `id` = {$deleteById};");

