<?php 
session_start();
include('config.php');

$email=$_POST["email"];
$password=$_POST["password"];

$sql="SELECT * FROM `register` WHERE `email`= '$email' AND `password` = '$password'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    header("Location:home.html");
}
else{
    echo "Invalid Credetional <a href='userlogin.html'>Try again</a>";
}
mysqli_close($conn);

?>