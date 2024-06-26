<?php
session_start();
include_once('config.php');

if (!isset($_SESSION['id']) && !isset($_SESSION['login'])) { 
    header("Location:../Página-Inicial.php");
}
else{
$id = $_SESSION['id'];
}

if ($_SESSION['status'] == 0) { 
    header('Location:Error.php');
   }

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login-MODAVO CPaaS</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../Imagens/telecall-icon.png" rel="stylesheet">
</head>
<style>
    .imputSub{
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    color: var(--Branco);
    font-weight: 500;
    background-color: var(--Preto);
    transition: 0.5s;
    margin-top: 6px;
}

.imputSub:hover{
    background-color: rgb(87, 80, 80);
    color: var(--PretoBarra);
    transform: scale(1.05);
}
</style>
<body> 
        <form action="SVedit.php" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
            <section id="secao">
            <div><a href="../Página-Inicial.php"><img src="../Imagens/Modavo_Logo.png"></a></div>
            <div class="caixa">
                <div class="form-box">
                    <h3> Trocar Senha </h3>
                    <div id="MSGErro"></div>
                    <div id="MSGSuc"></div>
                    <input type="checkbox" id="darkmode-toggle" class="checkk">
                <label id="sol" for="darkmode-toggle"></label>
                        <div class="input-box">
                                <label id="labelSenha1" for="senha">Nova senha</label>
                                <input id="senha1" type="password" name="senha" placeholder="Digite sua nova senha" maxlength="8" required>
                            </div>
                            <div class="input-box">
                                <label id="labelSenha2" for="senhaconfirm">Confirme sua Senha</label>
                                <input id="senha2" type="password" name="senhaconfirm"
                                placeholder="Confirme sua nova senha" maxlength="8" required>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="submit" class="imputSub" name="submit" value="Enviar">
                        <input type="reset" class="imputSub" value="Limpar">
                    </div>
                </div>
             </div>
            </section>
            </div>
        </form>
    
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="../assets/js/LoginLC.js"></script>
        <script src="../assets/js/DarkMode.js"></script>
        <script src="../assets/js/edit.js"></script>
        

</body>
</html>