<?php
$server = "localhost";
$user   = "id19308035_admin";
$password = "yq[~)eH6yS9p}x6)";
$database = "id19308035_crud_operation";

$con = mysqli_connect($server,$user,$password,$database);

if($con){
  //  echo "Connection Succesful";
}

else{
    echo "Not connected";
}

?>
