<?php
	include "connection.php";
	$name=$roll=$phone=$address="";
	$nameMsg=$rollMsg=$phoneMsg=$addressMsg="";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
    $descrip =  $_POST['description'];
    $qunty = $_POST['quantity'];
    $price = $_POST['price'];
    $exdate=$_POST['expairy_date']; 
	
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

    $sql = "INSERT INTO product(id, name, description,quantity,price,expairy_date) 
    VALUES(NULL,'$name','$descrip','$qunty','$price','$exdate')";
   
	
	if($con->query($sql))
	{
		header('location:index.php');
	}

	$con->close();	

?>
