<?php
	include "connection.php";

	$id = ''; 
	if( isset( $_GET['edit_id'])) {
		$id = $_GET['edit_id']; 
	}


	$name=$_POST["name"];
	$descrip=$_POST["description"];
	$quanty=$_POST["quantity"];
	$price=$_POST["price"];
    $exdate=$_POST["expairy_date"];

	
	$sql="UPDATE product SET name='$name', description='$descrip', quantity='$quanty', price='$price' , expairy_date='$exdate' where id='$id' ";
	$result=$con->query($sql);
	

	if($result)
	header('location:index.php');
	
	
?>