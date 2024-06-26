<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['permissoes']);
        header('Location: Login.php');
    } else {
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['permissoes'] = $user_data['permissoes'];
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['datanasc'] = $user_data['datanasc'];
        $_SESSION['cep'] = $user_data['cep'];
        $_SESSION['mae'] = $user_data['mae'];
        $_SESSION['status'] = $user_data['status'];
        header('Location: pergunta.php');
    }
    $perm = $_SESSION['permissoes'];
    if ($_SESSION['status'] == 0) { 
        header('Location: Error.php');
}}
?>