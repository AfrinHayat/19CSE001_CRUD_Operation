<?php
	include "connection.php";
	
	$id=$_GET["del"];
	$sql="DELETE from product WHERE id='$id'";
	$result=$con->query($sql);
	if($result)
		header('location:index.php');
?>