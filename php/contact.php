<?php
$name = $_POST['name'];
$email = $_POST['email'];
// $subject = $_POST['subject'];
$message = $_POST['message'];

$myEmail = "falecom@lucashenriques.com"; //é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Contato feito pelo site\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
// $corpo .= "Assunto: " . $subject . "\n";
$corpo .= "Mensagem: " . $message . "\n";

$email_to = 'falecom@lucashenriques.com'; //não esqueça de substituir este email pelo seu.
$status = mail($email_to, $subject, $corpo, $headers); //enviando o email.

if ($status) {
  echo "<script> alert('Formulário enviado com sucesso!'); window.location.href = 'https://lucashenriques.com' </script>";
} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); window.location.href = 'https://lucashenriques.com' </script>";
}

?>