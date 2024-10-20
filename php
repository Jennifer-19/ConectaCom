<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode processar a mensagem, enviar um email ou salvar em banco de dados.
    mail("seuemail@dominio.com", "Novo Contato: $assunto", $mensagem, "De: $nome <$email>");

    echo "Mensagem enviada com sucesso!";
}
?>
