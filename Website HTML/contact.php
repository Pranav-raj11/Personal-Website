<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHOMailer.php';
// require 'phpmailer/src/SMTP.php';

if (isset($_POST['sendMailBtn'])){
    // $to = 'pranraj2005@gmail.com'
    // $fromEmail = $_POST['fromEmail'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    // @mail($toEmail, $subject, $message, $headers);
    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php';
    </script>
    ";
} 
?>
