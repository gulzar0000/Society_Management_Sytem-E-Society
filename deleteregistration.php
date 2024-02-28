<?php 
include('config.php');

$id=$_GET["id"];

$sql="DELETE FROM `register` WHERE `register`.`id` = $id";

if(mysqli_query($conn,$sql)){
    header("location: registrationtable.php");
}
else{
    echo "something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>