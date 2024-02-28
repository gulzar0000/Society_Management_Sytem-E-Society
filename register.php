
<?php
include('config.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\BN\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\BN\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\BN\PHPMailer-master\src\SMTP.php';


$name = $_POST['name']; // Replace 'name' with the actual name attribute in your HTML form
    $roomNo = $_POST['roomno']; // Replace 'roomNo' with the actual name attribute in your HTML form
    $mobileNo = $_POST['mobileno']; // Replace 'mobileNo' with the actual name attribute in your HTML form
    $uemail = $_POST['email']; // Replace 'email' with the actual name attribute in your HTML form
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword']; 
    $roomtype = isset($_POST['roomtype']) ? $_POST['roomtype'] : 're';

      
    $sql = "INSERT INTO `register` (`id`, `name`, `roomno`, `mobileno`, `email`, `password`, `cpassword`, `roomtype`) VALUES ('', ' $name', '$roomNo', '$mobileNo', '$email', '$password', '$cpassword', '$roomtype');";

if (mysqli_query($conn,$sql)) {


$mail = new PHPMailer(true);

$email = 'gulzarshaikh025@gmail.com';
$password = 'wjqr pymi ilty czto';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom($email,'Lab demo');
    $mail->addAddress($uemail, $name);
    $mail->addReplyTo($email, 'Lab demo');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to our Ballaleshwar Niwas.';
    $mail->Body    = 'your Your Account has been registed into Ballaleshwar Niwas Society website';

    $mail->send();
    header("Location:userlogin.html");

} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}


} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>