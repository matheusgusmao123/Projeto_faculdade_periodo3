<?php
session_start();
include_once ('config.php');


if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['permissoes'])) {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  unset($_SESSION['permissoes']);
  header("Location: Login.php");
}

$logado = $_SESSION['login'];
$perm = $_SESSION['permissoes'];

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);


/* Fará com que somente o usuario com a permissão 2(ADM) consiga entrar no site */
if ($perm == 1) {
  header("Location:../Página-Inicial.php");
}

if ($_SESSION['status'] == 0) {
  header('Location:PHP/Error.php');
}

$search = '';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}

// Modifique a consulta SQL para usar LIKE com a entrada de pesquisa
$sql = "SELECT * FROM usuarios WHERE nome LIKE '%$search%' ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MODAVO CPaas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- /---------- Favicons ----------\ -->
  <link rel="icon" href="../Imagens/telecall-icon.png" rel="stylesheet">

  <!-- /---------- Google Fonts ----------\ -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- /---------- ICONE ----------\ -->
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

  <!-- /---------- Vendor CSS Files ----------\ -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <head>
    <link rel="stylesheet" href="style.css">
  </head>

  <!-- /---------- Template Main CSS File ----------\ -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <style>
    .table-sm td,
    .table-sm th {
      padding: .3rem;
      font-size: 0.8rem;
    }

    .table-responsive-md {
      overflow-x: auto;
    }

    .table {
      margin-bottom: 1rem;
    }

    .table th,
    .table td {
      text-align: center;
    }

    .table th {
      white-space: nowrap;
    }
  </style>
  <!-- /---------- Header ----------\-->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../Página-inicial.php" class="logo"><img id="modavo-icon" src="../Imagens\Modavo_Logo.png" alt=""
          class="img-fluid"></a>
      <button class="bot0es" onclick="mudarTamanhoFonte(2)">A+</button>
      <button class="bot0es" onclick="mudarTamanhoFonte(-2)">A-</button>

      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>
          <input type="checkbox" id="darkmode-toggle" class="checkk">
          <label id="sol" for="darkmode-toggle"></label>
          <li><a href="../Página-Inicial.php">Tela Principal</a></li>
          <li><a href="../About_Us.php">Sobre Nós</a></li>
          <li><a href="../modelobd.php">Modelo do BD</a></li>
          <li class="dropdown"><a href="../Página-Inicial.php#Nossa-Solução"><span>Soluções</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../2FA.php">2FA</a></li>
              <li><a href="../Número-Máscara.php">Número Mascara</a></li>
              <li><a href="../SMS.php">SMS</a></li>
              <li><a href="../Google-Verified-Calls.php">Google-Verified-Calls</a></li>
            </ul>
          </li>
          <?php
          if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['permissoes'])) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            echo "<li><a href='Login.php'>Login</a></li>";
            echo "<li><a class=nav-link href='cadastre-se.php'>Cadastro</a></li>";
          } else {
            $logado = $_SESSION['login'];
            $perm = $_SESSION['permissoes'];

            echo "<li class='dropdown'><a href='#'><span>$logado</span></a>";
            echo "<ul>";
            echo "<li><a href='sair.php'> SAIR </a></li>";

            if ($perm == 1) {
              echo "<li><a class=nav-link href='edit-senha.php'>Trocar senha</a></li>";
              echo "</ul>";
              echo "</li> ";

              echo "<li hidden><a href='Login.php'>Login</a></li>";
              echo "<li hidden><a class=nav-link href='cadastre-se.php'>Cadastro</a></li>";

            }
          }
          echo "</ul>";
          if ($perm == 2) {
            echo "<li><a class=nav-link href=LOG.php>LOGS</a></li> ";
          }
          ?>
      </nav>
    </div>

  </header>

  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- /---------- Only Slide  ----------\ -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><span>Área do Sistema</span></h2>
          <p class="animate__animated animate__fadeInUp">Aqui você vai poder consultar a Listagem de usuarios cadastrado
            no site. Podendo excluir ou baixar o PDF da listagem atual.

          </p>
          <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section> <br> <br>
  <main id="main"> <br> <br>
    <form method="GET" action="">
      <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Digite um nome"
          value="<?php echo htmlspecialchars($search); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
    <form action="PDFGenerator.php" method="get" target="_blank">
      <button type="submit">Gerar PDF</button>
    </form>
    <?php
    echo '<br>';
    ?>

    <div class="table-responsive-md ">
      <table class="table table-hover table-dark tb text-center table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Mãe</th>
            <th scope="col">Email</th>
            <th scope="col">cep</th>
            <th scope="col">CPF</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Rua</th>
            <th scope="col">Nascimento</th>
            <th scope="col">TelCelular</th>
            <th scope="col">TelFixo</th>
            <th scope="col">Login</th>
            <th scope="col">Senha</th>
            <th scope="col">Genero</th>
            <th scope="col">Perm.</th>
            <th scope="col">Status</th>
            <th scope="col">Config</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nome'] . "</td>";
            echo "<td>" . $user_data['mae'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['cep'] . "</td>";
            echo "<td>" . $user_data['cpf'] . "</td>";
            echo "<td>" . $user_data['bairro'] . "</td>";
            echo "<td>" . $user_data['estado'] . "</td>";
            echo "<td>" . $user_data['cidade'] . "</td>";
            echo "<td>" . $user_data['rua'] . "</td>";
            echo "<td>" . $user_data['datanasc'] . "</td>";
            echo "<td>" . $user_data['celular'] . "</td>";
            echo "<td>" . $user_data['telfixo'] . "</td>";
            echo "<td>" . $user_data['login'] . "</td>";
            echo "<td>" . $user_data['senha'] . "</td>";
            echo "<td>" . $user_data['genero'] . "</td>";
            echo "<td>" . $user_data['permissoes'] . "</td>";
            echo "<td>" . $user_data['status'] . "</td>";
            echo "<td>
                                    <a href='delete.php?id=$user_data[id]'>
                                      <ion-icon name='trash'></ion-icon>
                                    </a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main><!-- /---------- End #main ----------\ -->

  <!-- /---------- Footer ----------\ -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../Página-Inicial.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../About_Us.php">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../solução">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4 class="text-center">Nosso contato</h4>
            <p class="text-center">
              <strong>Escritório</strong> <br>
            <ul>
              <li> Centro empresarial Mario Henrique Simonsen<br> Av. das Américas, 3434 | Bloco 1, Sala 505<br> Barra
                da Tijuca | Rio de Janeiro, RJ </li> <br>
              <li> 848 Brickell Av - Suite 1235 - Miami FL - 33131 Portugal</li><br>
              <li> Avenida da Liberdade nº 245, 4º piso, sala 402 Lisboa, Portugal, 1250-143</li>
            </ul>
            <div class="text-center">
              <strong>Telefone:</strong> +55 21 3030-1010 <br>
              <strong>Email:</strong> suporte@telecall.com <br>
            </div>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-info ">
            <h3>Redes Sociais</h3>
            <div class="social-links mt-3 text-end">
              <a href="https://www.facebook.com/TelecallBr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/telecallbr/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/telecall/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TeleCall</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- /---------- JS Files ----------\ -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <!-- /---------- Template Main JS File ----------\ -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/DarkMode.js"></script>
  <script src="../assets/js/font.js"> </script>

</body>

</html>