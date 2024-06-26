<?php
session_start();

if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $newStatus = $user['status'] == 0 ? 1 : 0;

        // Atualiza o status do usuário
        $sqlUpdateStatus = "UPDATE usuarios SET status=$newStatus WHERE id=$id";
        $conexao->query($sqlUpdateStatus);

        // Log da ação
        $masterId = $_SESSION['id'];
        $action = $newStatus == 0 ? 'Desativou usuário' : 'Ativou usuário';
        $timestamp = date('Y-m-d H:i:s');
        $logSql = "INSERT INTO logs (user_id, action, second_factor, timestamp) VALUES ('$masterId', '$action', '', '$timestamp')";
        $conexao->query($logSql);
    }
}

header('Location: sistema.php');
?>
