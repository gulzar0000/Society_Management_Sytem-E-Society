<?php 
include('config.php');

$id=$_POST["id"];
$name=$_POST["name"];
$roomno=$_POST["roomno"];
$mobileno=$_POST["mobileno"];
$email=$_POST["email"];
$roomtype=$_POST["roomtype"];

$sql="UPDATE `register` SET `name` = ' $name', `roomno` = '$roomno', `mobileno` = ' $mobileno', `email` = '$email', `roomtype` = '$roomtype' WHERE `register`.`id` = $id";

if(mysqli_query($conn,$sql)){
    header("location:registrationtable.php");
}
else{
    echo "something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>