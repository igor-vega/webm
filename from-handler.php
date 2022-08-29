<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@webm.com';

$email_subject = 'Novo Formulário Enviado'

$email_body = "Nome de Usuário: $name.\n".
                "Usuário Email: $visitor_email.\n".
                "Tema: $subject.\n".
                "Mensagem do Usuário: $message .\n";


$to = 'igor.fvega@gmail.com'

$headers = "De:  $email_from \r\n";

$headers .= "Responder-A:  $visitor_email \r\n";



mail($to,$email_subject,$email_body,$headers)

header('Location: contato.html');
?>
