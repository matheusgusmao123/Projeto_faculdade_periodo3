<?php 

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $senha = $_POST['senha'];
        $senhaconfirm = $_POST['senhaconfirm'];

        $sqlUpdate = "UPDATE usuarios SET senha='$senha', senhaconfirm='$senhaconfirm' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    } 
    header('Location:../Página-Inicial.php');

?>