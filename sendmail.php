<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

//От кого письмо
$mail->setFrom('dimdan97@mail.ru', 'Дима');
//Кому отправить
$mail->addAddress('dimdan97@mail.ru');
//Тема письма
$mail->Subject = 'Привет, это Дима!';
//Тело письма

$body = '<h1>Встречайте письмо!</h1>';

if(trim(!empty($_POST['name']))){
  $body.='<p><strong>Имя: </strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))){
  $body.='<p><strong>E-mail: </strong> '.$_POST['email'].'</p>';
}


$mail->Body = $body;

//Отправка

header('Content-type: application/json');
echo json_encode($response);
?>