<?php 
include('config.php');
$id=$_GET['id'];

$sql="DELETE FROM `outsider_query` WHERE `outsider_query`.`id` = $id";
if(mysqli_query($conn,$sql)){
    header("location:outsider_querytable.php");
}
else{
    echo "something went wrong" . mysqli_error($conn);
}
mysqli_close($conn);

?>