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
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php if( is_front_page() ): ?>
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
                      <li id="cor-menu"><a href="#js-cursos">Cursos</a></li>
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
      </ol>

      <!-- Wrapper for Slides -->
      <div class="carousel-inner" role="listbox">
          <div class="item active slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide7.png" alt="...">
              <div class="carousel-caption">
                <h3>Preparamos o seu Laboratório para a conquista da Acreditação</h3>
              </div>
          </div>
          <div class="item  slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide03.png' ?>" alt="...">
              <div class="carousel-caption">
                <h3>Projetos de Marketing de resultados customizados</h3>
              </div>
          </div>
          <div class="item slide">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide/slide04.png' ?>" alt="...">
              <div class="carousel-caption">
                <h3>Capacitação da sua equipe frente aos novos desafios</h3>
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
<?php else: ?>

  <div class="header-page">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?php echo home_url(); ?>" class="navbar-brand"><img id="logomarca" src="<?php bloginfo('template_directory'); ?>/assets/img/Logo-page.png' ?>" height="80px" width="100px"></a>
        </div>
      </div>
  </nav>
  <div class="header-page__cover">
      <div class="jumbotron">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <header>
            <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

          </header> <!-- end article header -->
        </div>
    </div>
  </div>
</div>
<?php endif; ?>

<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rolagem.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/rolagem.js"></script>
