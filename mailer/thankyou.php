<?php
session_start();
require 'config.php';
require 'functions.php';
require 'PHPMailerAutoload.php';
require 'base.php';
if (verifyCaptcha(secret_captcha(), $_POST['token'], $_SERVER['REMOTE_ADDR'])) {
  $mail = new PHPMailer;



  if (!isset($_POST['rodo1']) || $_POST['rodo1'] != 'on') {
    $_POST['rodo1'] = 'Niezaakceptowane';
  } else {
    $_POST['rodo1'] = 'Zaakceptowane';
  }




  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = $cfg['smtp_host'];
  $mail->SMTPAuth = true;
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );                         // Enable SMTP authentication
  $mail->Username = $cfg['smtp_user'];
  $mail->Password = $cfg['smtp_pass'];

  $mail->Port = $cfg['smtp_port'];

  $mail->setFrom($cfg['smtp_user'], 'Toyota Aves  - formularz kontaktowy');
  //$mail->AddBCC($_POST['mymail']);
  $mail->AddBCC('p.rybarczyk@adawards.pl');
  /*if (!empty($_POST['liame'])) {
    $mail->addReplyTo($_POST['liame']);
  }*/

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $mail->Subject = 'Toyota Aves - formularz kontaktowy';
  $mail->Body    = build_mail_body($_POST, 'contact.php');
  $respone_text = 'Wiadomość Została Wysłana!';
  $respone_color = '#00cc00';
  if (!$mail->send()) {
    echo 'Message could not be sent.';
    $respone_text = 'Wiadomość Nie Została Wysłana!';
    $respone_color = '#cc0000';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    //exit;
  }
} else {
  $respone_text = 'Błąd Weryfikacji Captcha!';
  $respone_color = '#cc0000';
}
$_SESSION['response_text'] = $respone_text;
$_SESSION['response_color'] = $respone_color;
header('Location: ' . base_url());
