<?php
	include "connection.php";
   /* $id = ''; 
if( isset( $_GET['edit'])) {
    $id = $_GET['edit']; 
}*/ 
	$id=$_GET["edit_id"];
	$sql="SELECT * FROM product where id='$id'";
	$result=$con->query($sql);
	$row= $result->fetch_assoc();
	
	$name=$row["name"];
    $descrip =$row["description"];
	$qunty =$row["quantity"];
    $price =$row["price"];
    $exdate =$row["expairy_date"];
		
?>

<html>
<body>

<center>
<h1> Insert Data</h1>
<form action="edit_action.php?edit_id= <?php echo $id;?>" method="post">

Product Name: <input type="text" name="name" value="<?php echo $name;?>"> <br><br>
Description: <input type="text" name="description" value="<?php echo $descrip;?>"><br><br>
Quantity: <input type="text" name="quantity" value="<?php echo $qunty;?>"><br><br>
Price: <input type="number" name="price" value="<?php echo $price;?>"><br><br>
Expair_Date<input type="date" name="expairy_date" value="<?php echo $exdate;?>"><br><br>

<input type="submit" value="Update">

</form>
</center>
</body>
</html>
