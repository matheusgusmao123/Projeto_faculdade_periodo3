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

  <title>Google Verified Calls</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- /---------- Favicons ----------\ -->
  <link rel="icon" href="Imagens/telecall-icon.png" rel="stylesheet">

  <!-- /---------- Google Fonts ----------\ -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
        </nav>
    </div>
  </header>
  </header>

  <!-- /---------- Hero Section ----------\ -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <!-- /---------- Only Slide  ----------\ -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><span>Google Verified Calls</span></h2>
          <p class="animate__animated animate__fadeInUp">O Google Verified Calls é uma ferramenta valiosa para empresas
            que desejam melhorar a comunicação com seus clientes. O serviço está disponível em mais de 60 países,
            incluindo o Brasil. </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section> <br> <br>

  <main id="main">
    <!-- /---------- O que é GVC ----------\ -->
    <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Chamadas Verificadas Google: O que é?</h2>
          <h6>Google Verified Calls <p>
          </h6>
          <p class="TxT">
            O Google Verified Calls é um serviço gratuito oferecido pelo Google, exclusivo para telefones <strong>Android</strong>, que permite às empresas verificar suas
            chamadas telefônicas para que os clientes possam ver o nome da empresa, o logotipo e a razão da chamada na tela de seu telefone.
          </p> <br>

          <p class="TxT">
            A Telecall é a <strong>Primeira operadora de telecom no Brasil</strong> a oferecer esse recurso do Google.
          </p>
        </div>
        <!-- /---------- Chamadas Verificadas ----------\-->
        <section class="about" id="about">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <div class="container-fluid">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <h2>
                        Chamadas verificadas.
                      </h2>
                      <p class="TxT">
                        Com esse novo recurso, as empresas podem melhorar a experiência do cliente e aumentar as chances de que as chamadas sejam atendidas. Quando o cliente recebe uma chamada de uma empresa que utiliza o recurso, ele pode ver a marca e o logotipo da empresa na tela do telefone. Além disso, a empresa pode inserir uma breve descrição do motivo da chamada, o que pode ajudar o cliente a decidir se deve atender ou não. 
                      </p> <br>
                        <p class="TxT">
                          A Telecall acredita que esse novo recurso é uma importante ferramenta para melhorar o relacionamento com seus clientes. A empresa está comprometida em oferecer aos seus clientes a melhor experiência possível, e esse recurso é mais uma forma de demonstrar esse compromisso.
                        </p>
                    </div>
                    <div class="col-md-6">
                      <img alt="VFC-Tell" data-aos="zoom-in" data-aos-delay="300" src="Imagens/GVC/GVC-Cell-GrowingTreeBank.png" >
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
                <!-- /---------- O Problema ----------\-->
                <section class="about" id="about">
                  <div class="container" data-aos="fade-up">
                    <div class="section-title">
                      <div class="container-fluid">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-6">
                              <h2>
                                O problema
                              </h2>
                              <h5><strong>Ligações de spam</strong></h5> <br><br>
                              <ul class="Lista">
                                <li data-aos="fade-right" data-aos-delay="100">
                                 O Brasil é o pais que mais sofre ligações de spam <strong>no mundo.</strong>
                                </li> <br>

                                <li data-aos="fade-right" data-aos-delay="200">
                                  Desde 2017, as chamadas telefônicas de spam no Brasil <strong>aumentaram 141%</strong>
                                </li> <br>

                                <li data-aos="fade-right" data-aos-delay="300">
                                  O brasileiro recebe em média <strong>49,9 ligações</strong> de spam por mês.
                                </li>
                              </ul>
                             
                            </div>
                            <div class="col-md-6">
                              <img data-aos="zoom-in" data-aos-delay="300"  alt="VFC-Tell" src="Imagens/GVC/Ligacoes-Indesejadas-GVC.png" >
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>
       

                                              
                
                <!-- /---------- Compatibilidade ----------\-->
          <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Compatibilidade </p></h2> <br> <br>
                                  <div class="container-fluid">
                                    <div class="row"> 
                                        <div class="col-md-8">
                                        <ul class="Lista">
                                        <li data-aos="fade-right" data-aos-delay="100">
                                          Exclusivo para sistema operacional <strong>Android</strong> através do aplicativo <strong>Telefone.</strong>
                                        </li> <br>
                                            
                                        <li data-aos="fade-right" data-aos-delay="200">
                                          Pré-instalado em telefones mais recentes ou pode ser baixado do <strong>Google Play Store</strong> para a maioria dos dispositivos com Android 9.0.
                                        </li><br>

                                        <li data-aos="fade-right" data-aos-delay="300">
                                          Hoje no brasil existem quase <strong>239 milhões de celulares smartphone ativo</strong>, sendo que o sistema <strong>Android</strong> detém uma participação de mais de <strong>86%</strong> do mercado de sistema operacional móvel no país
                                        </li>
                                        </ul>
                                      </div>
                                      <div class="col-md-4">
                                        <img data-aos="zoom-in" data-aos-delay="300" src="Imagens/GVC/GVC-Telefone">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
                <!-- /---------- Como Funciona? ----------\-->
          <section id="icon-boxes" class="icon-boxes text-center">
            <div class="container" data-aos="fade-up">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h3>
                      <strong>Como funciona?</strong>
                    </h3>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="icon-box" data-aos="fade-right">
                          <img alt="Atendente-Tel" src="Imagens/GVC/GVC_Atendente1.png">
                          <p class="text-center"><br>
                            Uma chamada telefônica
                            de uma empresa assinante
                            é feita para um cliente
                            potencial ou existente.
                          </p>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="icon-box" data-aos="fade-up">
                          <img alt="Engrenagem-ComoFunc" src="Imagens/GVC/GVC_Engrenagem.png" />
                          <p class="TxT"><br>
                            Em nanossegundos, a
                            solicitação é encaminhada
                            para a plataformada Telecall
                            que processa a chamada e
                            adiciona as informações
                            verificadas antes de
                            encaminhá-la ao destinatário.
                          </p>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="icon-box" data-aos="fade-left">
                          <img alt="Tel-Growing" src="Imagens/GVC/GVC_Celular.png" />
                          <p class="TxT"><br>
                            As informações aparecem
                            na tela do celular do
                            recipiente que atenderá a
                            ligação com uma chamada 
                            de voz normal.
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                  <!-- /---------- Benefícios ----------\-->
          <section class="about" id="about">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                  <div class="row">
                  <div class="col-md-12">
                    <h2> Benefícios</h2>
                    <ul class="Lista">

                      <li data-aos="fade-right" data-aos-delay="100"> 
                        <strong>Estabeleça confiança:</strong> 
                      </li>
                      <p>
                        Clientes são mas propensos a atender chamadas de organizações com os quais estão familiarizados e com as quais já tem relação.
                      </p><br>
                      
                      <li data-aos="fade-right" data-aos-delay="200"> 
                        <strong>Agilize a conexão: </strong>
                      </li>
                      <p>
                        Quando o motivo da chamada é claro, a chance do cliente atender é muito maior e a conexção com ele é muito mais rápida e eficiente.
                      </p> <br>
                      

                      <li data-aos="fade-right" data-aos-delay="300"> 
                        <strong>Melhore a Experiência do Cliente: </strong>
                      </li>
                       <p>
                        O nomeda marca, logotipo e a visualização do motivo da chamada oferecem uma experiência melhor e muito mais amigável para o cliente.
                       </p>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>              
                    
                  <!-- /----------  ----------\-->
          <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                 <h2>Usos </p></h2> <br> <br>
                                <div class="container-fluid">
                                    <div class="row"> 
                                        <div class="col-md-8">
                                        <ul class="Lista">
                                        <li data-aos="fade-right" data-aos-delay="100">
                                           Aviso de problemas de <strong>fraude</strong> de cartão de crédito.
                                        </li>
                                            
                                        <li data-aos="fade-right" data-aos-delay="200">
                                          Aviso de tratos e cancelamentos de <strong>voos</strong>
                                        </li>

                                        <li data-aos="fade-right" data-aos-delay="300">
                                          <strong>Agendamentos</strong> de serviços, entregas, reparos e intalações
                                        </li>

                                        <li data-aos="fade-right" data-aos-delay="400">
                                          <strong>Avisos</strong> sobre agendamentos, exames e
                                          resultados.
                                         </li>

                                        <li data-aos="fade-right" data-aos-delay="500">
                                          Oferecer uma melhor experiência de <strong>vendas</strong> e <strong>promoções</strong>.
                                        </li>
                                        </ul>
                                        </div>
                                      <div class="col-md-4">
                                        <img data-aos="zoom-in" data-aos-delay="300"- src="Imagens/GVC/GVC_usos-icons-couple.png">
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
                  