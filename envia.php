<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(strip_tags($_POST['nome']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telefone = htmlspecialchars(strip_tags($_POST['telefone']));
    $mensagem = htmlspecialchars(strip_tags($_POST['mensagem']));

    $para = "cinthia.cecilia48@gmail.com";
    $assunto = "Formulário do Portfólio - Recrutador";

    $corpo = "Nome: " . $nome . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Telefone: " . $telefone . "\n";
    $corpo .= "Mensagem:\n" . $mensagem;

    // Cabeçalhos adicionais
    $cabecalhos = "From: cinthia.cec67@gmail.com\r\n";
    $cabecalhos .= "Reply-To: " . $email . "\r\n";
    $cabecalhos .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Importante para caracteres especiais
    $cabecalhos .= "X-Mailer: PHP/" . phpversion();

    if ($email && mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "<p style='color:green;'>E-mail enviado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Houve um erro ao enviar o E-mail. Verifique se o e-mail está correto e tente novamente.</p>";
    }
} else {
    // Se o script for acessado diretamente sem ser por um POST
    echo "<p style='color:red;'>Este script deve ser acessado através do formulário.</p>";
}
?>

