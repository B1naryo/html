<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Configurações de email
    $para = "sandro520099@hotmail.com";
    $assunto = "Site Pessoal";

    // Dados do formulário
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $mensagem = test_input($_POST["mensagem"]);

    // Validação dos dados
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de email inválido!";
        exit;
    }

    // Monta o corpo do email
    $mensagem_email = "Nome: $nome\n\n";
    $mensagem_email .= "Email: $email\n\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";

    // Envia o email
    if (mail($para, $assunto, $mensagem_email)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem!";
    }

}

// Função para validar os dados do formulário
function test_input($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}

?>
