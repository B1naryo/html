<?php
// Verifica se os campos foram preenchidos corretamente
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    // Configurações do email
    $para = 'sandro520099@hotmail.com'; // Endereço de email para onde a mensagem será enviada
    $assunto = 'Nova mensagem do formulário de contato'; // Assunto da mensagem
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $mensagem_formatada = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = 'From: ' . $nome . '<' . $email . '>' . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    // Envia o email
    mail($para, $assunto, $mensagem_formatada, $headers);
    // Redireciona para a página de sucesso
    header('Location: sucesso.html');
} else {
    // Se algum campo não foi preenchido corretamente, redireciona para a página de erro
    header('Location: erro.html');
}
?>
