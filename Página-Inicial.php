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

  <title>MODAVO CPaas</title>
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
</head>

<body>

  <!-- /---------- Header ----------\-->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="Página-inicial.php" class="logo"><img id="modavo-icon" src="Imagens\Modavo_Logo.png"  alt="" class="img-fluid"></a>
        <button class="bot0es" onclick="mudarTamanhoFonte(2)">A+</button>
        <button class="bot0es" onclick="mudarTamanhoFonte(-2)">A-</button>

        <nav id="navbar" class="navbar">
          <i class="bi bi-list mobile-nav-toggle"></i>
          <ul>
            <input type="checkbox" id="darkmode-toggle" class="checkk">
            <label id="sol" for="darkmode-toggle"></label>
            <li><a href="Página-Inicial.php">Tela Principal</a></li>
            <li><a href="About_Us.php">Sobre Nós</a></li>
            <li><a href="modelobd.php">Modelo do BD</a></li>
            <li class="dropdown"><a href="#Nossa-Solução"><span>Soluções</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="2FA.php">2FA</a></li>
                <li><a href="Número-Máscara.php">Número Mascara</a></li>
                <li><a href="SMS.php">SMS</a></li>
                <li><a href="Google-Verified-Calls.php">Google-Verified-Calls</a></li>
              </ul>
            </li>
            <?php 
            if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['permissoes']) || !isset($_SESSION['id']))
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
           { 
            if ($perm == 1){  
            echo "<li><a class=nav-link href='PHP/edit-senha.php'>Trocar senha</a></li>";
            echo "<li><a href='PHP/sair.php'> SAIR </a></li>";
            echo "</li> ";}
            
           echo "<li hidden><a href='PHP/Login.php'>Login</a></li>" ;
           echo "<li hidden><a class=nav-link href='PHP/cadastre-se.php'>Cadastro</a></li>";
           } 

            if ($_SESSION['status'] == 0) { 
              header('Location:PHP/Error.php');
             }
          }
           ?>
        </nav>
    </div>
  </header>

  <!-- /---------- Hero Section ----------\ -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- /---------- Slide 1 ----------\ -->
        <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem Vindo(a) ao <span>MODAVO CPaaS</span></h2>
          <p class="animate__animated animate__fadeInUp">Nossa plataforma reúne empresas e desenvolvedores em uma infraestrutura de nuvem robusta, facilitando a integração de canais de comunicação de forma simples e descomplicada. </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba Mais</a>
        </div>
      </div>

      <!-- /---------- Slide 2  ----------\ -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem Vindo(a) ao <span>MODAVO CPaaS</span></h2>
          <p class="animate__animated animate__fadeInUp">
             O CPaaS, com sua <strong>escalabilidade</strong>,<strong>flexibilidade</strong>, <strong>autenticação</strong> e <strong>segurança</strong> aprimoradas, revolucionando o modo como as empresas habilitadas em nuvem implementam <strong>comunicações de voz, SMS e vídeo.</strong>
                </p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section> <br><br>

  <main id="main">
    <!-- /---------- O que é CPAAS ----------\ -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>CPaaS: O que é?</h2>
          <h6>Communications Platform as a Service </p></h6>
          <i class="SecBlack">Plataforma de Comunicação como Serviço</i>
          <p class="TxT">
            É uma solução de software de comunicação que atua
            como uma base sobre a qual desenvolvedores podem
            integrar uma variedade de aplicativos.
            Métodos de comunicação típicos, como voz, chamadas
            de vídeo ou mensagens de texto SMS, podem ser
            incorporados em outros sistemas por meio de APIs que
            se conectam à plataforma CPaaS.
            Essas APIs permitem que as empresas expandam suas
            ofertas sem a necessidade de hardware ou software
            adicional.
          </p>
        </div>
  <!-- /---------- CpaaS e a Transformação Digital ----------\ -->                  
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                 <h2>CPaaS e a Transformação Digital </p></h2>
                      <div class="container-fluid">
                          <div class="row"> 
                              <div class="col-md-8" > <br><br>
                              <p>
                                <ul class="Lista">
                                  <li data-aos="fade-right" data-aos-delay="100">
                                    Expectativa de crescimento estimado de <strong>$8,2 bilhões em 2021</strong> 
                                  </li><br>

                                  <li data-aos="fade-right" data-aos-delay="200">
                                    <strong>85%</strong> dos profissionais se conectam de maneira diferente com colegas e clientes do que faziam há apenas 5 anos.
                                  </li> <br>

                                  <li data-aos="fade-right" data-aos-delay="300">
                                    As receitas de CPaaS estão crescendo mais de <strong>40%</strong> ao ano. 
                                  </li> <br>

                                  <li data-aos="fade-right" data-aos-delay="400">
                                    <strong>CPaaS</strong> já ultrapassou o mercado de <strong>UCaaS</strong> (Unified Communication as a Service)
                                  </li> <br>

                                  <li data-aos="fade-right" data-aos-delay="500">
                                    Marcas que estão em <strong>múltiplos canais</strong> melhoram a experiência do usúario e aumentam seus resultados.
                                  </li>

                                </ul>
                              </div>
                              <div class="col-md-4">
                              <img class="PI-CPAS" data-aos="zoom-in" data-aos-delay="300" src="Imagens/3.png">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  <!-- /---------- Quem usa CPaas ----------\ -->
    <section id="icon-boxes" class="icon-boxes text-center">
      <div class="container">
        <h2> Quem usa CPaaS</h2>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box">
            <div> <img src="Imagens/PI_Caixa.png" alt=""></div> <br>
            <h4 class="title">Logística</h4>
              <p class="PI-QU">Acesso seguro com 2FA.
                <br>
                Uso de números mascarados para proteção de funcionário e cliente.
                <br>
                Mantenha o cliente informado sobre entrega e serviços.
                <br>
                Verified calling para confirmação de entregas.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"> <img src="Imagens/PI_Varejo.png" alt=""> </div>
              <h4 class="title">Varejo</h4>
              <p class="PI-QU">
                Compra segura com 2FA.
                <br>
                Avisos sobre compras e
                entregas.
                <br>
                Upsell com novas ofertas e
                vantagens via SMS ou
                Verified Calling.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div> <img src="Imagens/Call_Center.png" alt=""> </div> <br>
              <h4 class="title" >Call Center</h4>
              <p class="PI-QU">
                Melhore taxas de abertura utilizando alertas SMS para confirmações.
                <br>
                Economia de números com o uso de um único número máscara por todos os agentes.
                <br>
                Verified Calling para confirmação de agendamentos.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"> <img src="Imagens/Saúde.png" alt=""> </div>
              <h4 class="title">Saúde</h4>
              <p class="PI-QU">
                Acesso seguro com 2FA.
                <br>
                Melhore o agendamento e reduza faltas com lembretes por SMS. 
                <br>
                Tokens de autorização para procedimentos com 2FA. 
                <br>
                Verified Calling para avisos de resultados e agendamentos.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


      <!-- /---------- Exemplos ----------\ -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
          <div class="section-title" id="solução">
          <h2>Exemplos</h2>
           </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="row">
                  <div class="col-md-6">
                    <img src="Imagens/Tela-inicial_exemplo1.png" data-aos="fade-right"/>
                  </div>
                  <div class="col-md-6">
                    <img  src="Imagens/Tela-inicial_exemplo22.png" data-aos="fade-left" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <img src="Imagens/Tela-inicial_exemplo3.png" data-aos="fade-right" data-aos-delay="100" />
                  </div>
                  <div class="col-md-6">
                    <img src="Imagens/Tela-inicial_exemplo4.png" data-aos="fade-left" data-aos-delay="100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- /---------- Vantagens Telecall  ----------\ -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                     <h2>Vantagens Telecall <p/></h2>
                          <div class="container-fluid">
                              <div class="row">
                                  <div class="col-md-12" >
                                  <p data-aos="fade-right" data-aos-delay="100"><strong class="NM-Blue">Confiança:</strong> Empresa que já conhecem e confiam;</p> <br>

                                  <p data-aos="fade-right" data-aos-delay="200"> <strong class="NM-Blue">Agilidade:</strong> Aplicativos de rápida implementação </p> <br>
                                 
                                  <p data-aos="fade-right" data-aos-delay="300"><strong class="NM-Blue">Garantia de Rede:</strong> Empresa que já conhecem e confiam;</p> <br>

                                  <p data-aos="fade-right" data-aos-delay="400"><strong class="NM-Blue">Suporte ao Cliente:</strong> Empresa que já conhecem e confiam;</p><br>

                                  <p data-aos="fade-right" data-aos-delay="500"><strong class="NM-Blue">Preço:</strong> Empresa que já conhecem e confiam;</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <!-- /---------- Nossas Soluções ----------\ -->
    <section id="services" class="services">
      <div id="Nossa-Solução">
        <div class="container" data-aos="fade-up">
          <div class="section-title" id="solução">
            <h2>Nossas Soluções</h2>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <img class="PI-Soluçao" src="Imagens/cadeado.png" alt="cadeado">
                <h4>2FA</h4>
                <p>O 2FA assegura ação com senha e segunda autenticação (token, impressão digital, reconhecimento facial, SMS), reforçando a segurança.</p>
                <a class="Saiba-Mais" href="2FA.php">Saiba Mais</a>
              </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <img class="PI-Soluçao" src="Imagens/telefone.png" alt="tell">
                <h4>Número Máscara</h4>
                <p>Proteja a privacidade dos clientes: mascare números, reduza linhas de negócio e promova uma experiência mais segura e profissional. </p> <br>
                <a class="Saiba-Mais" href="Número-Máscara.php">Saiba Mais</a>
              </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <img class="PI-Soluçao" src="Imagens/correto.png" alt="correto">
                <h4>Google Verified Calls</h4>
                <p>Novo recurso exclusivo para Android: empresas exibem marca, logotipo e motivo da chamada aos clientes durante ligação.</p>
                <a class="Saiba-Mais" href="Google-Verified-Calls.php">Saiba Mais</a>
              </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <img class="PI-Soluçao" src="Imagens/conversa.png" alt="conversa">
                <h4>SMS Programável</h4>
                <p>Envie SMS com informações essenciais para seus clientes com segurança, velocidade e confiabilidade..</p>
                <a class="Saiba-Mais" href="SMS.php">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- /---------- Quem usa CPAAS  ----------\ -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <h1 class="QU">Quem usa o CPaaS</h1>
        <div class="clients-slider swiper ">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://banco.bradesco/html/classic/index.shtm"><img src="Imagens/Bradesco_Logo.png" class="img-fluid" alt=""></a></div><!--bradesco-->
           
            <div class="swiper-slide"><a href="https://www.instagram.com/"><img src="Imagens/Instagram_Logo.png" class="img-fluid" alt=""></a></div><!--Instagram-->
           
            <div class="swiper-slide"><a href="https://www.airbnb.com.br/"><img src="Imagens/Airbnb_Logo.png" class="img-fluid" alt=""></a></div><!--Airbnb-->
           
            <div class="swiper-slide"><a href="https://www.amazon.com.br/"><img src="Imagens/Amazon_Logo.png" class="img-fluid" alt=""></a></div><!--Amazon-->
           
            <div class="swiper-slide"><a href="https://www.ifood.com.br/"><img src="Imagens/Ifood_Logo.png" class="img-fluid" alt=""></a></div> <!--Ifood-->

            <div class="swiper-slide"><a href="https://www.gov.br/pt-br/apps/carteira-digital-de-transito-1"><img src="Imagens/Carteira-Digital-de-Transito_Logo.png" class="img-fluid" alt=""></a></div><!--Carteira Digital de Transito-->
           
            <div class="swiper-slide"><a href="https://picpay.com/"><img src="Imagens/PicPay_Logo.png" class="img-fluid" alt=""></a></div><!--PicPay-->
           
            <div class="swiper-slide"><a href="https://www.facebook.com/"><img src="Imagens/Facebook_Logo.png" class="img-fluid" alt=""></a></div> <!--Facebook-->
            
            <div class="swiper-slide"><a href="https://www.booking.com/index.pt-br.html"><img src="Imagens/Booking_Logo.png" class="img-fluid" alt=""></a></div> <!--Booking-->
            
            <div class="swiper-slide"><a href="https://www.apple.com/br/app-store/"><img src="Imagens/Apple-Store_Logo.png" class="img-fluid" alt=""></a></div><!--AppStore-->
            
            <div class="swiper-slide"><a href="https://www.rappi.com.br/"><img src="Imagens/Rappi_Logo.png" class="img-fluid" alt=""></a></div> <!--Rappi-->
            
            <div class="swiper-slide"><a href="#"><img src="Imagens/CPF-Digital_Logo.png" class="img-fluid" alt=""></a></div> <!--------------------------------=-----CPF DIGITAL INCOMPLETO------------------------------------------>
            
            <div class="swiper-slide"><a href="https://www.mercadopago.com.br/"><img src="Imagens/Mercado-Pago_Logo.png" class="img-fluid" alt=""></a></div> <!--Mercado Pago-->
            
            <div class="swiper-slide"><a href="https://www.whatsapp.com/?lang=pt_BR"><img src="Imagens/Whatsapp_Logo.png" class="img-fluid" alt=""></a></div> <!--WhatsApp-->
            
            <div class="swiper-slide"><a href="https://www.uber.com/br/pt-br/"><img src="Imagens/Uber_Logo.png" class="img-fluid" alt=""></a></div> <!--Uber-->
            
            <div class="swiper-slide"><a href="https://www.ebay.com/"><img src="Imagens/Ebay_Logo.png" class="img-fluid" alt=""></a></div> <!--Ebay-->
            
            <div class="swiper-slide"><a href="https://www.netflix.com/br/"><img src="Imagens/Netflix_Logo.png" class="img-fluid" alt=""></a></div> <!--Netflix-->
            
            <div class="swiper-slide"><a href="https://www.gov.br/receitafederal/pt-br"><img src="Imagens/ReceitaFederal_Logo.png" class="img-fluid" alt=""></a></div> <!--Receita Federal-->
            
            <div class="swiper-slide"><a href="https://vtex.com/br-pt/"><img src="Imagens/VTEX_Logo.png" class="img-fluid" alt=""></a></div>
            <!--Vtex-->
            
            <div class="swiper-slide"><a href="https://tinder.com/pt"><img src="Imagens/Tinder_Logo.png" class="img-fluid" alt=""></a></div> <!--Tinder-->
            
            <div class="swiper-slide"><a href="https://99app.com/"><img src="Imagens/99_Logo.png" class="img-fluid" alt=""></a></div><!--99-->
            
            <div class="swiper-slide"><a href="https://www.mercadolivre.com.br/"><img src="Imagens/Mercado-Livre_Logo.png" class="img-fluid" alt=""></a></div> <!--Mercado Livre-->
            
            <div class="swiper-slide"><a href="https://globoplay.globo.com/"><img src="Imagens/GloboPlay_Logo.png" class="img-fluid" alt=""></a></div> <!--GloboPlay-->
            
            <div class="swiper-slide"><a href="https://www.salesforce.com/br/"><img src="Imagens/Salesforce_Logo.png" class="img-fluid" alt=""></a></div> <!--SalesForce-->
            
            <div class="swiper-slide"><a href="https://institucional.amil.com.br/"><img src="Imagens/Amil_Logo.png" class="img-fluid" alt=""></a></div> <!--Amil-->
            
            <div class="swiper-slide"><a href="https://happn.com/"><img src="Imagens/Happn_Logo.png" class="img-fluid" alt=""></a></div> <!--Happin-->
            
            <div class="swiper-slide"><a href="https://www.quintoandar.com.br/"><img src="Imagens/QuintoAndar_Logo.png" class="img-fluid" alt=""></a></div> <!--Quinto Andar-->
            
            <div class="swiper-slide"><a href="https://www.shopify.com/br"><img src="Imagens/Shopify_Logo.png" class="img-fluid" alt=""></a></div> <!--Shopify-->
            
            <div class="swiper-slide"><a href="https://www.sap.com/brazil/index.html"><img src="Imagens/SAP_Logo.png" class="img-fluid" alt=""></a></div> <!--Sap-->
            
            <div class="swiper-slide"><a href="https://www.zendesk.com.br/"><img src="Imagens/Zendesk_Logo.png" class="img-fluid" alt=""></a></div><!--zendesk-->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
  </main><!-- /---------- End #main ----------\ -->

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