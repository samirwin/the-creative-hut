<?php
/*
	Template Name: Homepage 
*/
get_header(); ?>

	<section id="main" class="container">

		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
		
	</section>

<?php get_footer(); ?>