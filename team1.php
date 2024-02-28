<?php 

include('config.php');

$id=$_POST['id'];
$name=$_POST['name'];
$image=$_FILES['image']['name'];

$target_dir = "assets/img/team/";
$target_name = $target_dir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_name);

$sql="UPDATE `team` SET `id`='$id',`name`='$name',`image`='$image' WHERE `id`=$id";

if (mysqli_query($conn,$sql)) {
    echo "your update successfully ";
}
else{
    echo"something went wrong" . mysqli_error($conn);
}
mysqli_close($conn);


?>