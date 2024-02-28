<?php 
include('config.php');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=$_POST['query'];

$sql="INSERT INTO `outsider_query` (`name`, `email`, `subject`, `query`) VALUES ('$name', '$email', '$subject', '$query');";


if(mysqli_query($conn,$sql)){
    echo "your query submit successfully<a href='home.html'>   thank you</a> ";
    //header("Location:")
}
else{
    echo "somethimg went wrong" . mysqli_error($conn);
}
mysqli_close($conn);


?>