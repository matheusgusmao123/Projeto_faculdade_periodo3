<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: Login.php');
    exit;
}

// Inicialize as variáveis de erro se não estiverem definidas
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}
if (!isset($_SESSION['cepErrado'])) {
    $_SESSION['cepErrado'] = false;
}
if (!isset($_SESSION['maeErrada'])) {
    $_SESSION['maeErrada'] = false;
}
if (!isset($_SESSION['datanascErrada'])) {
    $_SESSION['datanascErrada'] = false;
}

$rand = rand(1, 3);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA - MODAVO CPaaS</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../Imagens/telecall-icon.png">
    <style>
        .input-erro, .label-erro {
            color: red;
        }
        .input-erro {
            border: 2px solid red;
        }
        .imputSub {
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
        .imputSub:hover {
            background-color: rgb(87, 80, 80);
            color: var(--PretoBarra);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <form action="teste2FA.php" method="POST">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <section id="secao">
                        <div><a href="../Página-Inicial.php"><img src="../Imagens/Modavo_Logo.png"></a></div>
                        <div class="caixa">
                            <div class="form-box">

                                <?php if ($rand == 1): ?>
                                    <h3>Qual é o nome da sua mãe?</h3>
                                    <?php if ($_SESSION['maeErrada']): ?>
                                        <div class="label-erro">Tentativa: <?= $_SESSION['tentativas'] ?>/3</div>
                                    <?php endif; ?>
                                    <div class="input-box">
                                        <span class="icone"><ion-icon name="mail"></ion-icon></span>
                                        <label for="Resposta" class="<?= $_SESSION['maeErrada'] ? 'label-erro' : '' ?>">Resposta</label>
                                        <input type="text" name="mae" class="form-control <?= $_SESSION['maeErrada'] ? 'input-erro' : '' ?>" id="Resposta" required>
                                    </div>

                                <?php elseif ($rand == 2): ?>
                                    <h3>Qual é a sua data de nascimento?</h3>
                                    <?php if ($_SESSION['datanascErrada']): ?>
                                        <div class="label-erro">Tentativa: <?= $_SESSION['tentativas'] ?>/3</div>
                                    <?php endif; ?>
                                    <div class="input-box">
                                        <span class="icone"><ion-icon name="mail"></ion-icon></span>
                                        <label for="Resposta" class="<?= $_SESSION['datanascErrada'] ? 'label-erro' : '' ?>">Resposta</label>
                                        <input type="date" name="datanasc" class="form-control <?= $_SESSION['datanascErrada'] ? 'input-erro' : '' ?>" id="Resposta" required>
                                    </div>

                                <?php else: ?>
                                    <h3>Qual é o seu CEP?</h3>
                                    <?php if ($_SESSION['cepErrado']): ?>
                                        <div class="label-erro">Tentativa: <?= $_SESSION['tentativas'] ?>/3</div>
                                    <?php endif; ?>
                                    <div class="input-box">
                                        <span class="icone"><ion-icon name="mail"></ion-icon></span>
                                        <label for="Resposta" class="<?= $_SESSION['cepErrado'] ? 'label-erro' : '' ?>">Resposta</label>
                                        <input type="text" name="cep" class="form-control <?= $_SESSION['cepErrado'] ? 'input-erro' : '' ?>" id="Resposta" required>
                                    </div>
                                <?php endif; ?>
                                
                                <input type="submit" class="imputSub" name="submit" value="Enviar">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../assets/js/LoginLC.js"></script>
    <script src="../assets/js/DarkMode.js"></script>
</body>
</html>
