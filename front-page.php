<?php get_header(); ?>
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
                        <img class="img-servicos" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pessoas%20icon.png" alt="...">
                    </div>
                    <h2>Pessoas</h2>
                    <div class="texto-servicos">Capacitação da sua equipe frente aos novos desafios, para um melhor desempenho. Realizamos processos de recrutamento e seleção, treinamentos comportamentais, planos de cargos, salários e funções.</div>


                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="thumbnail">
                        <img class="img-servicos" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/acreditacao%20icon.png" alt="...">
                    </div>
                    <h2>Acreditação</h2>
                    <div class="texto-servicos">Preparamos o seu Laboratório para a conquista da Acreditação Laboratorial nas normas DICQS BAC, PALC-SBPC, ONA-MS e atendimento aos requisitos da RDC 302-ANVISA;</div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="thumbnail">
                        <img class="img-servicos" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/marketing%20icon.png" alt="...">
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
                        <img class="img-servicos" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/finan%C3%A7as.png" alt="...">
                    </div>
                    <h2>Finanças e Custos</h2>
                    <div class="texto-servicos">Capacitação e implementação de práticas de Gestão financeira e de custos personalizadas e pertinentes ao setor, apurando custo de exame, ponto de equilíbrio e margem de contribuição, propiciando melhoria na tomada de decisão frente às negociações com o mercado</div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <img class="img-servicos" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/diagnostico%20organizacional%20icon.png" alt="...">
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
                        <a href="http://www.hermespardini.com.br/" target="_blank"><img class="img2" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/hermespardini.PNG" alt="..."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.labstestevao.com/" target="_blank"> <img class="img7" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/labstestevao.PNG" alt="..."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.laboratoriomontesinai.com.br/" target="_blank"><img class="img3" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/laboratoriomontesinai.png" alt="..."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.laboratoriosaojose.com.br/" target="_blank"> <img class="img4" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/laboratoriosaojose.png" alt="..."></a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.laboratoriosantaterezinha.com.br/" target="_blank"><img class="img5" width="800" height="80" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/labsantaterezinha.png" alt="..."></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.laborsaolucas.com.br/" target="_blank"><img class="img6" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/labsaolucas.png" alt="..."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.lawall.com.br/" target="_blank"><img class="img8" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/lawall.png" alt="..."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="http://www.diagnosticosdobrasil.com.br/" target="_blank"><img class="img1" src="<?php bloginfo('template_directory'); ?>/assets/img/clientes/diagnosticobrasil.png" alt="..."></a>
                    </div>

                </div>
            </div>
        </center>
    </section>
</div> <!-- end section cliente -->

<section class="curso-post">
    <div class="container">
      <div class="row">
        <?php
            $args = array('post_type'=>'post', 'showposts'=> 3 );
            $my_posts = get_posts($args);
         ?>
         <?php if( $my_posts ) : foreach ( $my_posts as $post ) : setup_postdata( $post ); ?>
        <div class="col-sm-4 col-md-4 postagem_curso">
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
                <div class="caption">
                  <h3> <?php the_title(); ?></h3>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
      <?php endforeach; endif; ?>

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


<?php get_footer(); ?>
