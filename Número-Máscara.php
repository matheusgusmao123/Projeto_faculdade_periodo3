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

  <title>Número Máscara</title>
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
        </nav>
    </div>
  </header>
  </header>

<!-- /----------  Barra da navegação e header ----------\ -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><span>Número Máscara</span></h2>
          <p class="animate__animated animate__fadeInUp">Garanta aos seus clientes a capacidade de fazer chamadas e enviar mensagens sem expor seus números de telefone pessoais:
        <strong>Mascare</strong> um número de telefone para interações com mais privacidade; 
        <strong>Permite</strong> que empresas façam negócios usando menos números de telefone;
        <strong>Oferece</strong> uma experiência mais segura e profissional.
          </p>
         <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
</section>
<br><br> 
<!-- /----------  N.M como funciona ----------\ -->
<main id="main">
    <section id="icon-boxes" class="icon-boxes text-center">
        <div class="container">
            <div class="container-fluid" >
                <div class="row">
                <div class="col-md-12">
                    <h2 data-aos="fade-up"> Como Funciona</h2>
                        <div class="row">

                        <div class="col-md-4">
                            <div class="icon-box" data-aos="fade-right">
                                <strong>
                                    <p>Usuário faz uma <br>
                                    chamada através <br>
                                    de um aplicativo.</p>
                                </strong>
                                <img class="NM-IMGS" src="Imagens/download__1_-removebg-preview.png"> 
                                 <br> <br>
                                 <p> Ex: usuário liga para o
                                    entregador ou motorista 
                                    de taxi ou entra em 
                                    contato com a central de 
                                    atendimento.</p>
                                    <br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="icon-box" data-aos="fade-right">
                                <strong>
                                    <p>Plataforma  <br>
                                        mascara o número <br>
                                        original.</p>
                                </strong>
                                <img class="NM-IMGS" src="Imagens/download-removebg-preview.png">
                                 <br><br>
                                <p> A plataforma recebe a  
                                    chamada e mascara o 
                                    número antes de conectar 
                                    com o destinatário.</p>
                                    <br>
                                    
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="icon-box" data-aos="fade-right">
                                <strong>
                                    <p>Ambas as partes <br>
                                        são conectadas.</p>
                                </strong>
                                <img class="NM-IMGS" src="Imagens/download__2_-removebg-preview.png">
                                <br><br><br>
                                <p> A plataforma conecta ambas <br> 
                                    as partes mantendo a <br>
                                    privacidade dos dois.</p>
                                  <br>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /----------  Quem Usa ----------\ -->
<section id="icon-boxes" class="icon-boxes text-center">
    <div class="container">
      <h2 data-aos="fade-up"> Quem usa?</h2>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-right">
          <div class="icon-box">
            <img src="Imagens/Apps_de_Transporte.png" /> 
            <br><br>
            <p class="description">
                <h4>Apps de Transporte</h4> <br>
                Permite que motorista e passageiro se comuniquem sem compartilhar seus números pessoais.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
            <div class="icon-box">
              <img src="Imagens/Apps_de_Relacionamento.png"/> 
            <p class="description">
                <h4>Apps de Relacionamento</h4> <br>
                Permite uma maneira privada e segura para usuários interagirem sem expor contatos pessoais.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
          <div class="icon-box">
            <img src="Imagens/E-Commerce.png" /> 
            <p class="description"> <br>
                <h4>E-Commerce</h4> <br>
                Permite que clientes entrem em contato através do aplicativo. Podem também integrar chamadas internacionais.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-box">
            <img src="Imagens/Entregas-E-Logística.png" />
            <p class="description"> <br>
                <h4>Entregas & Logística</h4> <br><br>
                Mantenha seu cliente informado sobre entregas e serviços, tire dúvidas, etc
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /---------- Conteudo Quem Mais Pode Usar ----------\ -->

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
          <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                   <h2>Quem mais pode usar? <p/></h2>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 text-start" >
                                <p class="NM-Blue">43% das empresas brasileiras adotou o Home Office como padrão. </p>
                                <br>
                                    
                                <p class="NM-Blue" >Mesmo após o fim da pandemia, estatísticas indicam que o modelo de trabalho Home Office deve crescer cerca de 30%.
                                </p>
                                <br><br>
                                <p>Funcionários que não possuem celular empresarial ou ramal virtual podem se beneficiar do uso de um número máscara permanente do trabalho vinculado ao seu telefone celular, assim protegendo seus número pessoais.</p>
                                </div>
                                <div class="col-md-4">
                                <img data-aos="fade-left" src="Imagens/N,M-Notbook.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- /---------- Conteudo Recursos Avançados ----------\ -->


<section class="about" id="about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
          <div class="row">
           <div class="col-md-12">
            <h2 class="text-center"> Recursos Avançados</h2>
            <ul class="Lista">
              <li data-aos="fade-right" data-aos-delay="100"> <strong>SMS</strong> – Número máscara é totalmente funcional para chamadas de voz e SMS.</li>
              <li data-aos="fade-right" data-aos-delay="200"> <strong>Geo Match</strong> – Combine o código do país do número mascarado com o da chamada de origem
                passando pro cliente a impressão de que vocês estão na mesma região. </li>
              <li data-aos="fade-right" data-aos-delay="300"> <strong>Gestão de Sessões</strong> – Habilite números máscara permanentes, bloqueie chamadas indesejadas,
                validade de sessão e etc.</li>
              <li data-aos="fade-right" data-aos-delay="400"> <strong>Relatórios</strong> – Acesso direto do cliente à relatórios detalhados.</li>
              <li data-aos="fade-right" data-aos-delay="500"> <strong>Números Simultâneos</strong> - Use o mesmo número máscara em várias ligações simultâneas.</li>
              <li data-aos="fade-right" data-aos-delay="600"> <strong>Triagem de Conteúdo</strong> – Recurso SMS onde você pode sinalizar conteúdos sensíveis para proteger
                dados do cliente.</li>
              <li data-aos="fade-right" data-aos-delay="700"> <strong>Escalabilidade Ilimitada</strong> – compre e adicione números conforme necessário.</li>
            </ul>
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
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

  <!-- /---------- Template Main JS File ----------\ -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/DarkMode.js"></script>
  <script src="assets/js/font.js"> </script>
  </body>
  </html>
