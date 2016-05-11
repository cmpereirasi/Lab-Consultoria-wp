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
                <a href="#home" class="navbar-brand"><img id="logomarca" src="<?php echo get_template_directory_uri() . '/img/Logo2.png' ?>" height="80px" width="100px"></a>
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
                <img src="<?php echo get_template_directory_uri() . '/img/slide/slide2.png' ?>" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item  slide">
                <img src="<?php echo get_template_directory_uri() . '/img/slide/slide1.png' ?>" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item slide">
                <img src="<?php echo get_template_directory_uri() . '/img/slide/slide3.png' ?>" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item slide">
                <img src="<?php echo get_template_directory_uri() . '/img/slide/slide4.png' ?>" alt="...">
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



    <div class="container" id="consultorias">
        <section>
            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <h2><center><div class="texto-descricao">Consultorias</div></center></h2>
                </div>
            </div>
            <div class="row col-padding">
                <center>

                    <div class="col-sm-8 col-md-4">
                        <div class="thumbnail">
                            <img class="img-servicos" src="<?php echo get_template_directory_uri() . '/img/icons/pessoas%20icon.png' ?>" alt="...">
                        </div>
                        <h2>Pessoas</h2>
                        <div class="texto-servicos">Capacitação da sua equipe frente aos novos desafios, para um melhor desempenho. Realizamos processos de recrutamento e seleção, treinamentos comportamentais, planos de cargos, salários e funções.</div>


                    </div>
                    <div class="col-sm-8 col-md-4">
                        <div class="thumbnail">
                            <img class="img-servicos" src="<?php echo get_template_directory_uri() . '/img/icons/acreditacao%20icon.png' ?>" alt="...">
                        </div>
                        <h2>Acreditação</h2>
                        <div class="texto-servicos">Preparamos o seu Laboratório para a conquista da Acreditação Laboratorial nas normas DICQS BAC, PALC-SBPC, ONA-MS e atendimento aos requisitos da RDC 302-ANVISA;</div>
                    </div>
                    <div class="col-sm-8 col-md-4">
                        <div class="thumbnail">
                            <img class="img-servicos" src="<?php echo get_template_directory_uri() . '/img/icons/marketing%20icon.png' ?>" alt="...">
                        </div>
                        <h2>Marketing</h2>
                        <div class="texto-servicos">Projetos de Marketing de resultados customizados, cuja a metodologia está relacionada à responsabilidade social e ao aumento do desempenho financeiro do Laboratório</div>
                    </div>
                </center>
            </div>
            <div class="row ">
                <center>
                    <div class="col-sm-12 col-md-6">
                        <div class="thumbnail">
                            <img class="img-servicos" src="<?php echo get_template_directory_uri() . '/img/icons/finan%C3%A7as.png' ?>" alt="...">
                        </div>
                        <h2>Finanças e Custos</h2>
                        <div class="texto-servicos">Capacitação e implementação de práticas de Gestão financeira e de custos personalizadas e pertinentes ao setor, apurando custo de exame, ponto de equilíbrio e margem de contribuição, propiciando melhoria na tomada de decisão frente às negociações com o mercado</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="thumbnail">
                            <img class="img-servicos" src="<?php echo get_template_directory_uri() . '/img/icons/diagnostico%20organizacional%20icon.png' ?>" alt="...">
                        </div>
                        <h2>Diagnóstico Organizacional</h2>
                        <div class="texto-servicos">Para a proposta de um trabalho customizado à sua organização, realizamos o Diagnóstico Organizacional, que consiste na coleta de dados relativos aos processos operacionais e de Gestão, que incluem as áreas da qualidade, pessoas, processos e finanças.
                        </div>
                    </div>
            </div>
            </center>
        </section>
    </div>
    <div class="container">
        <section>
            <div class="row" id="clientes">
                <div class="col-xs-24 col-md-12">
                    <h2><center><div class="texto-descricao">Clientes</div></center></h2>
                </div>
            </div>
            <center>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.hermespardini.com.br/" target="_blank"><img class="img2" src="<?php echo get_template_directory_uri() . '/img/clientes/hermespardini.PNG' ?>" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.labstestevao.com/" target="_blank"> <img class="img7" src="<?php echo get_template_directory_uri() . '/img/clientes/labstestevao.PNG' ?>" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.laboratoriomontesinai.com.br/" target="_blank"><img class="img3" src="<?php echo get_template_directory_uri() . '/img/clientes/laboratoriomontesinai.png' ?>" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.laboratoriosaojose.com.br/" target="_blank"> <img class="img4" src="<?php echo get_template_directory_uri() . '/img/clientes/laboratoriosaojose.png' ?>" alt="..."></a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.laboratoriosantaterezinha.com.br/" target="_blank"><img class="img5" width="800" height="80" src="<?php echo get_template_directory_uri() . '/img/clientes/labsantaterezinha.png' ?>" alt="..."></a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.laborsaolucas.com.br/" target="_blank"><img class="img6" src="<?php echo get_template_directory_uri() . '/img/clientes/labsaolucas.png' ?>" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.lawall.com.br/" target="_blank"><img class="img8" src="<?php echo get_template_directory_uri() . '/img/clientes/lawall.png' ?>" alt="..."></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="http://www.diagnosticosdobrasil.com.br/" target="_blank"><img class="img1" src="<?php echo get_template_directory_uri() . '/img/clientes/diagnosticobrasil.png' ?>" alt="..."></a>
                        </div>

                    </div>
                </div>
            </center>
        </section>
    </div> <!-- end section cliente -->

    <section class="cliente-cursos">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

		        </div>
 	</div>
</div>
          </div>
        </div>
      </div>

    </section>
    <section class="background-contato">
        <div class="row" id="contato">
            <div class="col-xs-24 col-md-12">
                <h2><center><div class="texto-descricao-contato">Contato</div></center></h2>
            </div>
            <div class="container">
                <div class="form-contato">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <input class="formulario" type="name" class="form-control" id="nome" placeholder="Nome" required>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <input class="formulario" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>

                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <input class="formulario" type="teelefone" class="form-control" id="telefone" placeholder="Telefone" required>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <input class="formulario" type="assunto" class="form-control" id="assunto" placeholder="Assunto" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-14 col-md-7">
                                <center>
                                    <textarea name="" id="textarea" cols="30" rows="2" placeholder="Mensagem" maxlength="170" required></textarea>
                                </center>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sub">Enviar</button>
                    </form>
                </div>

                <div class="dados-contato" id="dados-contato">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <img src="<?php echo get_template_directory_uri() . '/img/icons/phone.png' ?>" alt=""><font>(32) 9 8765-4321 </font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-6 email">
                            <img src="<?php echo get_template_directory_uri() . '/img/icons/mail.png' ?>" alt=""><font>labconsultoria.org</font>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a href="#" class="link-facebook"><img src="<?php echo get_template_directory_uri() . '/img/icons/facebook.png' ?>" alt=""><font>/labconsultoria</font></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a href="#" class="link-facebook"><img src="<?php echo get_template_directory_uri() . '/img/icons/linkedin.png' ?>" alt=""><font>/labconsultoria</font></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </section>

    <footer>
        <center><font>Desenvolvido por: </font> </center>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    Include all compiled plugins (below), or include individual files as needed
    <script src="js/bootstrap.min.js"></script>-->
    <!--JS-->

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rolagem.js"></script>
