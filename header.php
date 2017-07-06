<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
		<!-- Google Analytics -->
	<?php endif; ?>
</head>

	<body <?php body_class(); ?>>

		<header id=site-header>

			<div class="row">
				
				<div class="col-6">
					<?php the_custom_logo(); ?>
				</div>

				<div class="col-6">				
					<nav>
						<?php wp_nav_menu( array( 'menu' => 'main', 'container' => '' ) ); ?>	
					</nav>
				</div>

			</div>
			
		</header>

		<div id="wrapper">