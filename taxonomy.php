<?php get_header(); ?>	<div class="bd">		<div class="dfxc">			<main class="main-site">				<section class="section movies">					<header class="section-header">						<div class="rw alg-cr jst-sb">							<h1 class="section-title"><?php single_cat_title(); ?></h1>						</div>					</header>					<?php 				    if ( have_posts() ) : ?>						<div class="aa-cn" id="aa-movies">							<div id="movies-a" class="aa-tb hdd on">								<ul class="post-lst rw sm rcl2 rcl3a rcl4b rcl3c rcl4d rcl6e">									<?php							        while ( have_posts() ) : the_post();										get_template_part( 'public/partials/template/movies', 'main' );							    	endwhile; ?>								</ul>							</div>						</div>						<nav class="navigation pagination">							<?php torofilm_pagination() ?>						</nav>					<?php endif; wp_reset_query();  ?>					<?php if(term_description()){ ?>						<div class="description-category">							<?php echo term_description(); ?>						</div>					<?php } ?>				</section>			</main>			<aside class="sidebar">				<div>					<?php get_sidebar(); ?>				</div>			</aside>		</div>	</div><?php get_footer(); ?>