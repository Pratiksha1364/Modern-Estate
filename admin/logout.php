<?php
include 'connection.php';
session_start();
	$g=$_SESSION['gmail'];
	$sq="UPDATE login_table SET ONLINE=0 WHERE EMAIL='".$g."' ";
	$run=mysqli_query($con,$sq);
	unset($_SESSION['sess_user']);
	session_destroy();
	
	header("Location:../index.php")
?>