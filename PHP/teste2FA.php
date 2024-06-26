<?php
session_start();
include_once('config.php');

$tentativaFalhou = false;
$twoFactorStatus = 'Falhou';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cep'])) {
        if ($_POST['cep'] !== $_SESSION['cep']) {
            $tentativaFalhou = true;
            $_SESSION['cepErrado'] = true;
        } else {
            $_SESSION['cepErrado'] = false;
            $twoFactorStatus = 'Sucesso';
        }
    } elseif (isset($_POST['mae'])) {
        if ($_POST['mae'] !== $_SESSION['mae']) {
            $tentativaFalhou = true;
            $_SESSION['maeErrada'] = true;
        } else {
            $_SESSION['maeErrada'] = false;
            $twoFactorStatus = 'Sucesso';
        }
    } elseif (isset($_POST['datanasc'])) {
        if ($_POST['datanasc'] !== $_SESSION['datanasc']) {
            $tentativaFalhou = true;
            $_SESSION['datanascErrada'] = true;
        } else {
            $_SESSION['datanascErrada'] = false;
            $twoFactorStatus = 'Sucesso';
        }
    }

    // Log 2FA attempt
    $userId = $_SESSION['id'];
    $timestamp = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (user_id, action, second_factor, timestamp) VALUES ('$userId', 'Tentativa de 2FA', '$twoFactorStatus', '$timestamp')";
    $conexao->query($logSql);

    if ($tentativaFalhou) {
        $_SESSION['tentativas']++;
        if ($_SESSION['tentativas'] >= 3) {
            $_SESSION['tentativas'] = 0; // Reset tentativas
            header('Location: Login.php');
            exit;
        }
    } else {
        $_SESSION['tentativas'] = 0; // Reset tentativas em caso de sucesso
        header('Location: ../Página-Inicial.php');
        exit;
    }

    header('Location: pergunta.php');
    exit;
}
?>
