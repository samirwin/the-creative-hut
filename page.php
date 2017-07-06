<?php get_header(); ?>

	<section id="main" class="container">

		<div class="row">
			<div class="tweleve columns">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="eight columns">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

			</div>

			<div class="four columns">
				
				<?php get_sidebar(); ?>

			</div>
		</div>
		
	</section>

<?php get_footer(); ?>