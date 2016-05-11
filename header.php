<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="icon" href="img/Logo.png" type="image/gif">

    <!-- Bootstrap -->
    <!--CSS-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" media="only screen and (max-width: 400px)">
    <?php wp_head(); ?>

</head>
<body>
  <nav role="navigation" class="navbar navbar-default">
      <div class="container">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button style="margin-top: 70px; margin-bottom: -33px;" type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <a href="#home" class="navbar-brand"><img id="logomarca" src="<?php bloginfo('template_directory'); ?>/assets/img/Logo2.png' ?>" height="80px" width="100px"></a>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div id="navbarCollapse" class="collapse navbar-collapse ">
                  <ul class="nav navbar-nav navbar-right">
                      <li id="cor-menu"><a href="#consultorias">Consultorias</a></li>
                      <li id="cor-menu"><a href="#clientes">Clientes</a></li>
                      <li id="cor-menu"><a href="#noticias">Cursos</a></li>
                      <li id="cor-menu"><a href="#contato">Contato</a></li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- /.container -->
  </nav>
  <!-- FIM DO NAVBAR-->


  <!--    slider header-->
  <header id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <div id="home"></div>
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for Slides -->
      <div class="carousel-inner" role="listbox">
          <div class="item active slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide2.png" alt="...">
              <div class="carousel-caption">
              </div>
          </div>
          <div class="item  slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide1.png' ?>" alt="...">
              <div class="carousel-caption">
              </div>
          </div>
          <div class="item slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide3.png' ?>" alt="...">
              <div class="carousel-caption">
              </div>
          </div>
          <div class="item slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide4.png' ?>" alt="...">
              <div class="carousel-caption">
              </div>
          </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
      </a>

  </header>
