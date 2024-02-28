<?php 
include('config.php');

$id=$_GET["id"];

$sql="DELETE FROM `tenantregister` WHERE `tenantregister`.`id` = $id";

if(mysqli_query($conn,$sql)){
    header("location:tenantregistrationtable.php");
}
else{
    echo "something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>