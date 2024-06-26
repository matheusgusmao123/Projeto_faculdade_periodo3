<?php
session_start();
include_once('PHP/config.php');
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMS Programável</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- /---------- Favicons ----------\ -->
  <link rel="icon" href="Imagens/telecall-icon.png" rel="stylesheet">

  <!-- /---------- Google Fonts ----------\ -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- /---------- ICONE ----------\ -->
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

  <!-- /---------- Vendor CSS Files ----------\ -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- /---------- Template Main CSS File ----------\ -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- /---------- Header ----------\-->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="Página-inicial.php" class="logo"><img id="modavo-icon" src="Imagens\Modavo_Logo.png"  alt="" class="img-fluid"></a>
        <button class="bot0es" onclick="mudarTamanhoFonte(2)">A+</button>
        <button class="bot0es" onclick="mudarTamanhoFonte(-2)">A-</ion-icon></button>

        <nav id="navbar" class="navbar">
          <i class="bi bi-list mobile-nav-toggle"></i>
          <ul>
            <input type="checkbox" id="darkmode-toggle" class="checkk">
            <label id="sol" for="darkmode-toggle"></label>
            <li><a href="Página-Inicial.php">Tela Principal</a></li>
            <li><a href="About_Us.php">Sobre Nós</a></li>
            <li><a href="modelobd.php">Modelo do BD</a></li>
            <li class="dropdown"><a href="Página-Inicial.php#Nossa-Solução"><span>Soluções</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="2FA.php">2FA</a></li>
                <li><a href="Número-Máscara.php">Número Mascara</a></li>
                <li><a href="SMS.php">SMS</a></li>
                <li><a href="Google-Verified-Calls.php">Google-Verified-Calls</a></li>
              </ul>
            </li>
            <?php 
            if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['permissoes']))
            {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
               echo "<li><a href='PHP/Login.php'>Login</a></li>";
               echo "<li><a class=nav-link href='PHP/cadastre-se.php'>Cadastro</a></li>";
            }
            else{ 
            $logado = $_SESSION['login'];
            $perm = $_SESSION['permissoes'];
 
           echo"<li class='dropdown'><a href='#'><span>$logado</span></a>";
           echo "<ul>"; 
           if ($perm == 2){ 
            echo "<li><a class=nav-link href=PHP\sistema.php>sistema</a></li> ";
           echo "<li><a href='PHP/sair.php'> SAIR </a></li>";
 
            echo "</ul>";
          }
           $user_data = mysqli_fetch_assoc($result);
           { 
            if ($perm == 1){  
            echo "<li><a class=nav-link href='PHP/edit-senha.php?id=$user_data[id]'>Trocar senha</a></li>";
            echo "<li><a href='PHP/sair.php'> SAIR </a></li>";
            echo "</li> ";}
            
           echo "<li hidden><a href='PHP/Login.php'>Login</a></li>" ;
           echo "<li hidden><a class=nav-link href='PHP/cadastre-se.php'>Cadastro</a></li>";
           
           } if ($_SESSION['status'] == 0) { 
            header('Location:PHP/Error.php');
           }
          }
           ?>
          </ul>
        </nav>
    </div>
  </header>
  </header>

  <!-- /---------- Hero Section ----------\ -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- /---------- Slide 1 ----------\ -->
        <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">SMS PROGRAMÁVEL</h2>
          <p class="animate__animated animate__fadeInUp"> Com essa ferramenta você envia mensagens de SMS com as informações que o seu cliente precisa e com a segurança, a velocidade e a confiabilidade que você espera. </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section>
<br><br>
  <!-- /---------- SMS O que é  ----------\ -->
  <main id="main">
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
          <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Conecte-se com seus clientes.</h2>
                        <div class="container-fluid">
                            <div class="row"> 
                                <div class="col-md-8" > <br>
                                  <p class="description">
                                    É muito provável que você já tenha recebido uma
                                    mensagem de texto de uma empresa ou organização.</p>
                                    <p>
                                      Com uma API, qualquer empresa pode enviar mensagens
                                      de texto e impactar clientes, prospects ou fornecedores
                                      como parte de seu processo comercial.
                                    </p> <br><br>
                                  </ul>
                                </div>
                                <div class="col-md-4">
                                <img data-aos="zoom-in" data-aos-delay="200" src="Imagens/SMS-Mao.png">
                                </div>
                                <p><strong>SMS é a forma mais rápida, eficiente e de baixo custo para se comunicar com seus clientes.</strong></p>
                                  <ul class="Lista ">
                                  <li data-aos="fade-right"><span class="Blue">98%</span> de taxa de abertura</li>

                                    <li data-aos="fade-right"><span class="Blue">80%</span> das pessoas interagemcom SMS comerciais.</li>

                                  <li data-aos="fade-right"><span class="Blue">90%</span> dos SMS são lidos em até 3 minutos.</li>

                                    <li data-aos="fade-right"><span class="Blue">35x</span> maior a probabilidade de um cliente abrir um SMS do que um e-mail.
                                    </li>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!-- /---------- Quem Usa SMS  ----------\ -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title" id="solução">
       <h2>Quem usa?</h2>
       <p>São muitos os caso de uso, mas veja alguns exemplos:</p>
        </div>
          <div class="container-fluid text-center">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 sms-cell">
                    <img src="Imagens/SMS-cell1.png" width="240px"/>
                    <strong><p>Divulgação</p></strong> <br><br>
                  </div>

                  <div class="col-md-6 sms-cell">
                    <img src="Imagens/SMS-cell2.png" width="240px"/>
                    <strong><p>Transações</p></strong> <br>
                  </div>
                </div>

                <div class="row"> 
                  <div class="col-md-4 sms-cell">
                    <img src="Imagens/SMS-cell3.png" width="240px"/>
                    <strong><p>Segurança</p></strong> <br><br>
                  </div>

                  <div class="col-md-4 sms-cell">
                    <img src="Imagens/SMS-cell4.png" width="240px"/>
                    <strong><p>Suporte ao Cliente</p></strong> <br><br>
                  </div>

                  <div class="col-md-4 sms-cell">
                    <img src="Imagens/SMS-cell5.png" width="240px"/>
                    <strong><p>Notificações</p></strong>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /---------- Jornada do Cliente ----------\ -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
          <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h2>Jornada do Cliente<p/></h2>
                    <p>Ofereça uma melhor experiência ao cliente acompanhando a sua jornada de compra.</p> <br>
                    <div class="col-md-12">
                      <img data-aos="fade-left" src="Imagens/SMS-Motoboy.png">
                    </div>
                  </div>
                </div>
            </div>
         </div>
     </div>
  </section>
  <!-- /---------- Benefícios ----------\ -->
<section class="about" id="about">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
        <div class="row">
         <div class="col-md-12">
          <h2> Benefícios</h2>
          <ul class="Lista">
            <li data-aos="fade-right" data-aos-delay="100"> Comunicação rápida, efetiva e escalável.</li>
            <li data-aos="fade-right" data-aos-delay="200"> Baixo custo.</li>
            <li data-aos="fade-right" data-aos-delay="300"> Alta taxa de entrega e leitura. </li>
            <li data-aos="fade-right" data-aos-delay="400"> Personalização de data, hora e conteúdo.</li>
            <li data-aos="fade-right" data-aos-delay="500"> Agendamento de campanhas.</b></li>
            <li data-aos="fade-right" data-aos-delay="600"> Interação bidirecional: recebimento de respostas. </li>
            <li data-aos="fade-right" data-aos-delay="700"> Plataforma user-friendly. </li>
            <li data-aos="fade-right" data-aos-delay="800"> Acompanhamento de métricas e relatórios. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
    <!-- /---------- Footer ----------\ -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i id="" class="bx bx-chevron-right"></i> <a href="Página-Inicial.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="About_Us.php">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#solução">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4 class="text-center">Nosso contato</h4>
            <p class="text-center">
              <strong>Escritório</strong> <br>
              <ul>
                <li> Centro empresarial Mario Henrique Simonsen<br> Av. das Américas, 3434 | Bloco 1, Sala 505<br> Barra da Tijuca | Rio de Janeiro, RJ </li> <br>
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
            <h3 >Redes Sociais</h3>
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

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- /---------- Vendor JS Files ----------\ -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- /---------- Template Main JS File ----------\ -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/DarkMode.js"></script>
  <script src="assets/js/font.js"> </script>


</body>

</html>
