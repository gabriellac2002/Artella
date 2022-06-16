<?php

namespace App\Controllers;

session_start();

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
class ContatoController
{
  private $mail;

  function __construct()
  {
    $this->mail = new PHPMailer();
    $this->mail->isSMTP();
    $this->mail->Host = 'smtp.gmail.com';
    $this->mail->SMTPAuth = true;
    $this->mail->SMTPSecure = 'tls';
    $this->mail->Username = 'artella.contato@gmail.com';
    $this->mail->Password = 'muchozxcmzfwmnzr'; //Senha real @Artella123, mais está em dois fatores
    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $this->mail->Port = 465;
    $this->mail->CharSet = 'UTF-8';
  }

  public function index()
  {
    return view('site/contato');
  }


  public function send()
  {
    if (isset($_POST['full-name']) && isset($_POST['mail']) && isset($_POST['about'])  && isset($_POST['message'])) {

      $this->mail->setFrom($_POST['mail'], $_POST['full-name']);
      $this->mail->addAddress("artella.contato@gmail.com");

      $this->mail->isHTML(true);
      $this->mail->Subject = $_POST['about'];
      $this->mail->Body    = "<br><br>NOME: ". $_POST['full-name']. "<br><br>E-MAIL: "
      .$_POST['mail']."<br><br>MENSAGEM: ".$_POST['message'];

    }
    if (!$this->mail->send())
      $_SESSION["INFO"] = ["msg1" => "Sinto muito!",  "msg2" => "Mensagem não enviada. Se necessário, entre em contato com o suporte <strong>artella.contato@gmail.com</strong>", "tag" => "danger"];

    else
      $_SESSION["INFO"] = ["msg1" => "Sucesso!",  "msg2" => "Mensagem enviada com êxito.", "tag" => "success"];

    header("Location: /contato");
  }
}