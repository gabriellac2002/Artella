<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
class ContatoController
{


  function __construct()
  {
  }

  public function index()
  {
    //Artella Trainee
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'artella.contato@gmail.com';
    $mail->Password = 'muchozxcmzfwmnzr';//Senha real @Artella123, mais está em dois fatores
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->CharSet='UTF-8';

    $mail->setFrom('contato@gmail.com', "contato@gmail.com");
    $mail->addAddress('kleitonewertonoliveira@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Assunto do email';
    $mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
    $mail->AltBody = 'Para visualizar essa mensagem acesse';
    
    if(!$mail->send()) {
      echo 'Não foi possível enviar a mensagem.<br>';
      echo 'Erro: ' . $mail->ErrorInfo;
    } else {
      
      return view('site/contato');
  }

  }
}
