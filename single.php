<?php get_header(); ?>
			<div class="container">
				<div class="col-sm-8 col-md-12" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>

              <div class="curso-formulario">
                <center><a href="#" class="btn btn-success">Faça sua inscrição</a></center>
              </div>
						</section> <!-- end article section -->
					</article> <!-- end article -->
					<?php endwhile; ?>

					<?php else : ?>
					<article id="post-not-found">
					  <header>
					    <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					  </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>
				</div> <!-- end #main -->
			</div> <!-- end #content -->

<?php get_footer(); ?>
