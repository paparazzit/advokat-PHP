<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];


  


  try{
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'paparazzit@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '*****'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('paparazzit@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('paparazzit@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>MESSSAGE : $message <br> broj telefona: $phone</h3>";

    $mail->send();
    $alert = '<h4 >
                 <span>Vasa poruka je poslata. Ukoliko ste ostavili broj telefona uskoro cemo vas kontaktirati.</span>
                </h4>';
  } catch (Exception $e){
    $alert = '<h4 >
                <span>'.$e->getMessage().'</span>
              </h4>';
              
  }
}
?>
                           