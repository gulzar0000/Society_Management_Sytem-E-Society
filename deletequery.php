<?php 
include('config.php');
$id=$_GET['id'];

$sql="DELETE FROM `contact` WHERE `contact`.`id` = $id";
if(mysqli_query($conn,$sql)){
    header("location:querytable.php");
}
else{
    echo "something went wrong" . mysqli_error($conn);
}
mysqli_close($conn);

?>