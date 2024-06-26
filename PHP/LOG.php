<?php
session_start();

// Verifica se o usuário está logado e possui permissões adequadas
if (!isset($_SESSION['login']) || $_SESSION['permissoes'] != '2') {
    header('Location: ../Página-Inicial.php');
    exit;
}
 
if ($_SESSION['status'] == 0) { 
    header('Location:PHP/Error.php');
   }

include_once('config.php');

// Configurar o fuso horário para o horário de Brasília
date_default_timezone_set('America/Sao_Paulo');

// Parâmetros de paginação
$logsPerPage = 20;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $logsPerPage;

// Filtros
$searchName = isset($_GET['name']) ? $_GET['name'] : '';
$searchCPF = isset($_GET['cpf']) ? $_GET['cpf'] : '';

// Consulta os logs com filtros
$sql = "SELECT logs.*, usuarios.login, usuarios.cpf, usuarios.status 
        FROM logs 
        JOIN usuarios ON logs.user_id = usuarios.id 
        WHERE 1=1";
if ($searchName) {
    $sql .= " AND usuarios.login LIKE '%$searchName%'";
}
if ($searchCPF) {
    $sql .= " AND usuarios.cpf LIKE '%$searchCPF%'";
}
$sql .= " ORDER BY logs.timestamp DESC LIMIT $logsPerPage OFFSET $offset";

$result = $conexao->query($sql);
$totalLogs = $conexao->query("SELECT COUNT(*) as count 
                              FROM logs 
                              JOIN usuarios ON logs.user_id = usuarios.id 
                              WHERE 1=1" . ($searchName ? " AND usuarios.login LIKE '%$searchName%'" : "") . ($searchCPF ? " AND usuarios.cpf LIKE '%$searchCPF%'" : ""))->fetch_assoc()['count'];
$totalPages = ceil($totalLogs / $logsPerPage);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs de Atividades</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Logs de Atividades</h2>
    <form method="GET" action="">
        <label for="name">Nome do Usuário:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($searchName); ?>">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo htmlspecialchars($searchCPF); ?>">
        <input type="submit" value="Buscar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>CPF</th>
                <th>Ação</th>
                <th>2FA</th>
                <th>Status</th>
                <th>Data/Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($log = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $log['id']; ?></td>
                    <td><?php echo $log['login']; ?></td>
                    <td><?php echo $log['cpf']; ?></td>
                    <td><?php echo $log['action']; ?></td>
                    <td><?php echo $log['second_factor']; ?></td>
                    <td><?php echo $log['status'] == 0 ? 'Inativo' : 'Ativo'; ?></td>
                    <td><?php echo date('d/m/Y H:i:s', strtotime($log['timestamp'])); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($totalPages > 1): ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?><?php echo $searchName ? '&name=' . urlencode($searchName) : ''; ?><?php echo $searchCPF ? '&cpf=' . urlencode($searchCPF) : ''; ?>" class="<?php echo $i == $currentPage ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</body>
</html>
