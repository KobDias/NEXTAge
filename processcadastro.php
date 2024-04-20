<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['senha'])) {
        $fone = $_POST['fone'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $_SESSION['fone'] = $fone;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['register_error'] = 'Por favor, preencha todos os campos.';
        header("Location: index.php?p=15");
        exit();
    }
}
?>
