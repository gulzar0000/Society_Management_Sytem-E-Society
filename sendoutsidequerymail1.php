<?php 
include('config.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\BN\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\BN\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\BN\PHPMailer-master\src\SMTP.php';

$outid=$_POST["id"];
$name=$_POST["name"];
$uemail=$_POST["email"];
$subject=$_POST["subject"];
$query=$_POST["query"];
$umail=$_POST["mail"];


$sql="SELECT * FROM `outsider_query` WHERE `id`=$outid";

if(mysqli_query($conn,$sql)){

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
        $mail->setFrom($email, 'Ballaleshwar Niwas');
        $mail->addAddress($uemail, 'feedback/query');
        $mail->addReplyTo($email, 'Ballaleshwar Niwas');
        
    // //Attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');
    
        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $umail;
    
        $mail->send();
        echo 'Email sent successfully';

    header("location:sendoutsidequerymail.php");


    
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

}
else{
    echo "something went wrong". mysqli_error($conn);
}
mysqli_close($conn);

?>