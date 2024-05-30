<?php
	$con = mysqli_connect('localhost:3306','root','',);
	if (!$con) {
		echo "Server Not Connected <br>";
	}
	$db = mysqli_select_db($con,'project_database');
	if (!$db) {
		echo "Databse Not Connected";
	}
?>