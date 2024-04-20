<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $storedEmail = isset($_SESSION['email']) ? $_SESSION['email'] : '';
        $storedSenha = isset($_SESSION['senha']) ? $_SESSION['senha'] : '';
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if ($email === $storedEmail && $senha === $storedSenha) {
            // Login bem-sucedido
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['login_error'] = 'Email ou senha incorretos. Por favor, tente novamente.';
            header("Location: index.php?p=4");
            exit();
        }
    } else {
        $_SESSION['login_error'] = 'Por favor, preencha todos os campos.';
        header("Location: index.php?p=4");
        exit();
    }
}
?>
