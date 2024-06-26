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

  <title>2FA</title>
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
  <!-- /---------- Header ----------\ -->
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
            <li class="dropdown"><a href="Página-Inicial.php#Nossa-Solução"><span>Soluções</span> 
            <i class="bi bi-chevron-down"></i></a>
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
        </nav>
    </div>
  </header>
  </header>

<!-- /----------  Barra da navegação e header ----------\ -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><span>2FA</span></h2>
          <p class="animate__animated animate__fadeInUp"> 2FA é um procedimento de segurança que garante que serão necessários 2 fatores únicos liberação de uma ação. O primeiro fator é a senha do usuário e o segundo é uma autenticação via token, via detecção de impressão digital, reconhecimento facial, código enviado via sms, entre outros. </p>
         <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
</section>
<br><br>
<!-- /---------- Conteudo 2FA ----------\ -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                           <h2>O 2FA permite que você: <p/></h2>
                            
                            <ul class="Lista">
                              <li data-aos="fade-right"> <b>Envie</b> uma senha via SMS, voz ou e-mail para autenticação do usuário.</li>
                              <li data-aos="fade-right" data-aos-delay="100"><b>Adicione</b> uma camada extra de segurança além da senha pessoal.</li>
                              <li data-aos="fade-right" data-aos-delay="200"><b>Ofereça</b> maior segurança para usuários.</li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <img src="Imagens/2FA-resized.jpg">
                          </div>
                        </div>
                        <p>
                        <b><h5 class="2FA-h5">Fortaleça a estratégia de segurança de seu negócio.</h5></b>
                  
                        <strong><p>Adicionando um número de telefone de recuperação a uma conta individual você pode bloquear até:</p></strong>

                        <span class="Blue">100%</span> dos bots automatizados,<span class="Blue"> 99%</span> dos ataques de phishing em massa e <span class="Blue"> 66%</span> dos ataques direcionados. 
                        </p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
       </section>
        
       <section id="icon-boxes" class="icon-boxes text-center">
        <div class="container">
          <h2 data-aos="fade-up"> Como funciona o 2FA</h2>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
              <div class="icon-box">
                <img class="IMG-" src="Imagens/2FA_img1.png" /> 
                <br><br>
                <p class="description"> <br><br>
                  Usuário <strong>acessa seu site o aplicativo</strong> e digita a senha cadastrada para entrar em seu perfil ou completar uma transação.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
              <div class="icon-box">
                <img class="IMG-" src="Imagens/2FA_img2.png" />
                <br>
                <p class="description"> <br>
                  A telecall recebe a tentativa de login e solicita que o usuário <strong>insira seu número de telefone</strong> para autorizar o acesso.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
              <div class="icon-box">
                <img class="IMG-" src="Imagens/2FA_img3.png" />
                <br><br>
                <p class="description">
                  Após inserir seu número, a Telecall <strong>envia para o usuário</strong> por SMS, chamada ou e-mail um <strong>código PIN</strong> de uso único. 
                 <br> <ion-icon name="chevron-down-outline"></ion-icon><br>
                    Esse código PIN é também conhecido como <strong>OTP (One Time Password).</strong>
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
              <div class="icon-box">
                <img class="IMG-" src="Imagens/2FA_img4.png" />
                <br><br>
                <p class="description"> <br> <br>
                  O usuário <strong>insere o código</strong> no site ou aplicativo para concluir o processo de verificação.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /---------- Conteudo Beneficios ----------\ -->
      <section class="about" id="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
              <div class="row">
               <div class="col-md-12">
                <h2> Benefícios</h2>
                <ul class="Lista">
                  <li data-aos="fade-right" data-aos-delay="100"> Ofereça <b>segurança aprimorada</b> para seus clientes.</li>
                  <li data-aos="fade-right" data-aos-delay="200"> Reduza casos de <b>fraude e invasões</b> e evite o acesso a dados por invasores.</li>
                  <li data-aos="fade-right" data-aos-delay="300"> Envio de OTP por meio de <b>vários canais</b>, incluindo SMS, voz ou e-mail. </li>
                  <li data-aos="fade-right" data-aos-delay="400"> <b>Flexibilidade</b> de canais garante que o usuário conseguirá completar a tarefa desejada
                    mesmo quando tiver problema com um deles. Exemplo: Enviar OTP por SMS, em caso de falha, enviar OTP por chamada de voz, em caso de outra falha, enviar por e-mail.</li>
                  <li data-aos="fade-right" data-aos-delay="500"> API simples e de <b>rápida implementação.</b></li>
                  <li data-aos="fade-right" data-aos-delay="600"> <b>Plataforma intuitiva</b> que permite visualizar relatórios de uso por dia, mês ou ano e
                    pesquisar usando diversos critérios de filtro. </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /---------- Conteudo Quem Usa ----------\ -->
      <section id="icon-boxes" class="icon-boxes text-start">
        <div class="container">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 data-aos="fade-up"> Quem usa</h2>
                <div class="row">

                <div class="col-md-6">
                  <div class="icon-box text-center" data-aos="fade-right">
                    <img src="Imagens/Turismo.png"/>
                    <h3>Turismo</h3>
                    <ul class="Lista">
                      <li>Acesso ao portal / app</li>
                      <li>Gestão de Reservas</li>
                      <li>Acesso ao histórico</li>
                      <li>Salvar dados de pagamentos</li>
                      <li>Recuperação de Senha</li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="icon-box text-center" data-aos="fade-left">
                    <img src="Imagens/Varejo.png" />
                    <h3>Varejo</h3>
                    <ul class="Lista">
                      <li>Acesosso ao portal / app</li>
                      <li>Salvar dados de pagamentos</li>
                      <li>Acesso ao histórico</li>
                      <li>Recuperação de Senha</li>
                      <li>Recibo Eletrônico</li>
                    </ul>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="icon-box text-center" data-aos="fade-right">
                    <img src="Imagens/Governo.png" />
                    <h3>Governo</h3>
                    <ul class="Lista">
                      <li>Acesso ao portal / app</li>
                      <li>Gestão de informações </li>
                      <LI>Agendamentos</LI>
                      <li>Recuperação de Sistema</li>
                    </ul>
                  </div>
                </div>

                  <div class="col-md-4">
                    <div class="icon-box text-center" data-aos="fade-up">
                    <img src="Imagens/Finanças.png" />
                    <h3>Finanças</h3>
                    <ul class="Lista">
                      <li>Acesso ao portal / app</li>
                      <li>Autenticação para transações bancárias</li>
                      <li>Pagamentos Online(PicPay, PayPal)</li>
                      <li>Digital Wallets (Google Pay, Apple Pay, Samsung Pay)</li>
                    </div>
                  </div>

                <div class="col-md-4">
                  <div class="icon-box text-center" data-aos="fade-left">
                    <img src="Imagens/2FASaúde.png" />
                    <h3>Saúde</h3>
                    <ul class="Lista">
                      <li>Acesso ao portal / app</li>
                      <li>Agendamentos</li>
                      <li>Tokens de autorização</li>
                      <li>Telemedicina</li>
                    </ul>
                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
    </main>

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- /---------- Footer ----------\ -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Página-Inicial.php">Home</a></li>
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
  <!-- /---------- JS Files ----------\ -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- /---------- Template Main JS File ----------\ -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/DarkMode.js"></script>
  <script src="assets/js/font.js"> </script>

  </body>
  </html>