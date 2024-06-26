<?php
if(isset($_POST['submit'])){
    include_once('config.php');

    $nome = $_POST['nome']; 
    $mae = $_POST['mae'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $datanasc = $_POST['datanasc'];
    $celular = $_POST['celular'];
    $telfixo = $_POST['telfixo'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $senhaconfirm = $_POST['senhaconfirm'];
    $genero = $_POST['genero'];
    $permissoes = $_POST['permissoes'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, mae, email, cep, cpf, bairro, cidade, estado, rua, datanasc, celular, telfixo, login, senha, senhaconfirm, genero, permissoes) VALUES ('$nome', '$mae', '$email', '$cep', '$cpf', '$bairro', '$cidade', '$estado', '$rua', '$datanasc', '$celular', '$telfixo', '$login', '$senha', '$senhaconfirm', '$genero', '$permissoes')");

    // Log the registration
    $userId = $conexao->insert_id;
    logAction($conexao, $userId, "User registered", "N/A");

    header('Location: login.php');
}

function logAction($conexao, $userId, $action, $secondFactor) {
    $stmt = $conexao->prepare("INSERT INTO logs (user_id, action, second_factor) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userId, $action, $secondFactor);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CADASTRO/assets/css/Cadastro.css" rel="stylesheet">

    <title>Cadastre-se</title>

    <!-- /---------- Favicons ----------\ -->
    <link href="../Imagens/telecall-icon.png" rel="icon">

    <!-- /---------- Google Fonts ----------\ -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

 <style>
    #sub{
    width: 100%;
    margin-top: 1.6rem;
    border: none;
    background-color: #5cb1ea;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
 </style>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../Imagens/cadastrar-image13.png"alt="">
        </div>
            <div class="form">
                <form action="cadastre-se.php" method="post" >
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>

                        </div>
                    </div>
                <div class="input-group">
                        <div class="input-box">
                            <label id="labelNome" for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required minlength="15" maxlength="40">
                        </div>

                        <div class="input-box">
                            <label id="labelMaterno" for="mae">Nome Materno</label>
                            <input id="materno" type="text" name="mae" placeholder="Digite o nome materno" required>
                        </div>
                        <div class="input-box">
                            <label id="labelEmail" for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="input-box">
                            <label id="labelCEP" for="cep">CEP</label>
                            <input id="cep" type="text" name="cep" placeholder="Digite seu CEP" required minlength="8" maxlength="9">
                        </div>

                        <div class="input-box">
                            <label id="labelCPF" for="cpf">CPF</label>
                            <input id="cpf" type="text" name="cpf" placeholder="xxxxxxxxxxx" onblur="formataCPF(this)" required
                                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" minlength="11" maxlength="14">
                        </div>  
                    
                        <div class="input-box">
                            <label id="labelBairro" for="bairro">Bairro</label>
                            <input id="bairro" type="text" name="bairro" >
                        </div>

                        <div class="input-box">
                            <label id="labelCidade" for="cidade">Cidade</label>
                            <input id="cidade" type="text" name="cidade" >
                        </div>

                        <div class="input-box">
                            <label id="labelEstado" for="estado">Estado</label>
                            <input id="estado" type="text" name="estado" >
                        </div>

                        <div class="input-box">
                            <label id="labelRua" for="rua">Rua</label>
                            <input id="rua" type="text" name="rua" >
                        </div>

                        <div class="input-box">
                            <label  for="datanasc">data de nascimento</label>
                            <input id="datanasc" type="date" name="datanasc" required>
                        </div>

                        <div class="input-box">
                            <label id="labelCelular" for="celular">Celular</label>
                            <input id="celular" type="tel" name="celular" placeholder="00 00000-0000"
                                onblur="formataCelular(this)" required minlength="13" maxlength="18" maxlength="8">
                        </div>

                        <div class="input-box">
                            <label id="labelTelefone" for="telfixo">Telefone Fixo</label>
                            <input id="telefoneFixo" type="text" name="telfixo" placeholder="(xx) xx - xxxxxxxx"
                                oninput="formataTelefoneFixo(this)" required
                                pattern="\(\d{2}\) \d{2} - \d{8}" maxlength="12">
                        </div>
                    
                        <div class="input-box">
                            <label id="labelLogin" for="login">Login</label>
                            <input id="login" type="text" name="login" placeholder="Digite seu Login" required
                                pattern="^[a-zA-Z]{6}$" maxlength="6">
                        </div>
                        <div class="input-box">
                            <label id="labelSenha1" for="senha">Senha</label>
                            <input id="senha1" type="password" name="senha" placeholder="Digite sua senha" required
                                pattern="^[A-Za-z]{8,}$" maxlength="8">
                        </div>
                        <div class="input-box">
                            <label id="labelSenha2" for="senhaconfirm">Confirme sua Senha</label>
                            <input id="senha2" type="password" name="senhaconfirm"
                                placeholder="Digite sua senha novamente" required pattern="^[A-Za-z]{8,}$" maxlength="8">
                        </div>

                    </div>
                        <div id="MSGSuc"></div>
                        <div id="MSGErro"></div>


                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>

                        <div class="gender-group">
                            <div class="gender-input">
                                <input id="female" type="radio" name="genero" value="feminino" checked>
                                <label for="female">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input id="male" type="radio" name="genero" value="masculino">
                                <label for="male">Masculino</label>
                            </div>

                            
                                <input id="permissoes" type="hidden" name="permissoes" value="1">
                        </div>
                    <!-- 
                        </div>
                        <button id="btn" type="submit" onclick="validar(); return false">Continuar</a> </button>
                    </div>
                    -->
                    </div>
                        <input type="submit" value="Enviar" id="sub" name="submit">
                        <input type="reset" value="limpar campo" id="sub">
                </div>
                </form>
            </div>
    </div>

    <script src="../assets/js/form.Cadastro.js"></script>
    <script src="../assets/js/CadastroValid.js"></script>
    <script src="../assets/js/DarkMode.js"></script>
    <script>
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelector('#bairro').disabled = false;
        document.querySelector('#cidade').disabled = false;
        document.querySelector('#estado').disabled = false;
        document.querySelector('#rua').disabled = false;
    });
</script>
    
</body>

</html>