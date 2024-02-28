<?php 
include('config.php');

$id=$_POST["id"];
$roomno=$_POST["roomno"];
$name=$_POST["name"];
$mobileno=$_POST["mobileno"];
$roomtype=$_POST["roomtype"];

$sql="UPDATE `flatmember` SET `id`='$id',`roomno`='$roomno',`name`='$name',`mobileno`='$mobileno',`roomtype`='$roomtype' WHERE `flatmember`.`id` = '$id' ";

if(mysqli_query($conn,$sql)){
    header("location:flatowner.php");
}
else{
    echo "something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>