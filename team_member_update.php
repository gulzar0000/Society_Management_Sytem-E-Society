<?php 
include('config.php');

$id=$_POST["id"];
$name=$_POST["name"];
$image=$_FILES["image"]["name"];

$target_dir= "assets/img/team/";
$target_name=$target_dir.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$target_name);

$sql="SELECT * FROM `team`";


?>