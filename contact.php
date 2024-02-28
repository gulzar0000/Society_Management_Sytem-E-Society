<?php 
include('config.php');
$name=$_POST['name'];
$roomno=$_POST['roomno'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=$_POST['query'];
$image=$_FILES['image']['name'];



$target_dir = "queryimage/";
$target_name = $target_dir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_name);

$sql="INSERT INTO `contact` (`id`, `name`, `roomno`, `mobileno`, `email`, `subject`, `query`, `image`) VALUES (NULL, '$name', '$roomno', '$mobileno', '$email', '$subject', '$query', '$image');";

if(mysqli_query($conn,$sql)){
    echo "your query submit successfully<a href='home.html'>thank you</a> ";
    //header("Location:")
}
else{
    echo "somethimg went wrong" . mysqli_error($conn);
}
mysqli_close($conn);


?>