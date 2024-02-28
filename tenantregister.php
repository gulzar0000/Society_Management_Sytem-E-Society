
<?php

include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenantname = $_POST['tenantname']; // Replace 'name' with the actual name attribute in your HTML form
    $roomNo = $_POST['roomno']; // Replace 'roomNo' with the actual name attribute in your HTML form
    $mobileNo = $_POST['mobileno']; // Replace 'mobileNo' with the actual name attribute in your HTML form
    $email = $_POST['email']; // Replace 'email' with the actual name attribute in your HTML form
    $numberofmember = $_POST['numberofmember'];
    $policenoc = $_POST['policenoc']; 
    $from = $_POST['from']; 
    $to = $_POST['to']; 
   // $image = $_POST['image']; 
    $image=$_FILES['image']['name'];


    $target_dir = "tenantagreement/";
$target_name = $target_dir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_name);

    
    // Prepare an SQL statement to insert data into a table (change 'users' to your table name)
      
$sql = "INSERT INTO `tenantregister`(`id`, `tenantname`, `roomno`, `mobileno`, `email`, `numberofmember`, `policenoc`, `from`, `to`, `image`) VALUES ('','$tenantname','$roomNo','$mobileNo','$email','$numberofmember','$policenoc','$from','$to','$image')";
    // Adjust the SQL statement to include other form fields and corresponding database columns
    
    // Perform the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo"register done<a name=''  id='' class='btn btn-primary' href='home.html' role='button'>click here</a>";
        //header("Location: userlogin.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
