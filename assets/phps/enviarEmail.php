<?php

echo "chamou";
// Recupera os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Configurações do e-mail
$destinatario = 'destinatario@example.com';
$headers = "From: $nome <$email>" . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

// Envia o e-mail
mail($destinatario, $assunto, $mensagem, $headers);

// Exibe uma mensagem de confirmação
echo "E-mail enviado com sucesso!";
?>
