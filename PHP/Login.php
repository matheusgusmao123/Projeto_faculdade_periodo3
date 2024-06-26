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
        <form action="testeLogin.php" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
            <section id="secao">
            <div><a href="../Página-Inicial.php"><img src="../Imagens/Modavo_Logo.png"></a></div>
            <div class="caixa">
                <div class="form-box">
                    <h3> Login </h3>
                    <div id="MSGErro"></div>
                    <div id="MSGSuc"></div>
                    <input type="checkbox" id="darkmode-toggle" class="checkk">
                <label id="sol" for="darkmode-toggle"></label>
                        <div class="input-box">
                            <span class="icone"><ion-icon name="mail"></ion-icon>
                            </span>
                            <label id="userLabel" for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="usuario" maxlength="6"/>
                        </div>
                        <div class="input-box">
                            <span class="icone"><ion-icon name="lock-closed"></ion-icon>
                            </span>
                            <label id="senhaLabel" for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" maxlength="8"/>
                        </div>
                        <input type="submit" class="imputSub" name="submit" value="Enviar">
                        <input type="reset" class="imputSub" value="Limpar">
                        <!--<div>
                           <button class="bota0" onclick="entrar(); return false">Login</button>
                        </div> -->
                        <div class="registrar">
                            <p>Não possui uma conta? <a target= "_self" href="cadastre-se.php" class="link"> Registrar</a>  </p>
                        </div>
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

</body>
</html>