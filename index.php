<?php
/*include 'connection.php';
$result = $con->query($sql);
?>

<html>
<head>
    <title>
        CRUD
    </title>
</head>
<body>
<div>
    
    <form action="" method="POST">
        <h2>Product Table</h2>
   <label>Prod_Name</label> <input type="text" name="name" placeholder="product name"><br><br>

   <label>Description</label> <input type="text" name="description"><br><br>

   <label>Prod_Quantity</label> <input type="text" name="quantity" placeholder=" ? kg"><br><br>

   <label>Prod_Price</label> <input type="number" name="price" placeholder="price"><br><br>

   <label>Expairy Date</label> <input type="date" name="expairy_date" placeholder="expairy date"><br><br>
    <input type="submit" name="save_btn" value = "Save">
</form>
</div>
<?php
if(isset($_POST['save_btn'])){
    $name = $_POST['name'];
    $descrip =  $_POST['description'];
    $qunty = $_POST['quantity'];
    $price = $_POST['price'];
    $exdate=$_POST['expairy_date'];    

   $sql = "INSERT INTO product(id, name, description,quantity,price,expairy_date) 
    VALUES(NULL,'$name','$descrip','$qunty','$price','$exdate')";
    $data =mysqli_query($con,$sql);
}

?>
</body>
</html>
*/

include 'connection.php';
	$sql="SELECT * FROM product";
	
	$result=$con->query($sql);
?>

<html>
	<body>

	<center>
		<h1> Product Information Table</h1>
		<table border='2' cellpadding='10' cellspacing='5'>
			<tr>
				<th>Product Name</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Expair_Date</th>
			</tr>
			<?php 
			while($row = $result->fetch_assoc()){
				$id= $row["id"];
				$name=$row["name"];
                $descrip=$row["description"];
                $qunty = $row['quantity'];
                $price = $row['price'];
                $exdate=$row['expairy_date']; 

				
				echo "<tr>";
					echo "<td>". $name. "</td>";
					echo "<td>". $descrip. "</td>";
					echo "<td>". $qunty. "</td>";
					echo "<td>". $price. "</td>";
					echo "<td>". $exdate."</td>";
                    echo "<td><a href='edit.php?edit_id=$id'> Edit </a></td>";
					echo "<td> <a href='delete.php?del=$id'> Delete </a> </td>";
				echo "</tr>";
				}
			?>
		
		</table>
		<a href="insert_data.php">Insert Product Data</a>
		
		<br><br>

	</center>
	</body>
</html>
