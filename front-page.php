<?php
/**
 * The main template for a static front page
 *
 * @package Inti
 * @subpackage Templates
 * @since 1.0.0
 * @version 1.0.1
 */

get_header(); ?>


	<div id="primary" class="site-content">
	
		<?php inti_hook_content_before(); ?>
	
		<div id="content" role="main" class="<?php apply_filters('inti_filter_content_classes', ''); ?>">
				
			<?php inti_hook_grid_open(); ?>
				
				<?php inti_hook_inner_content_before(); ?>

				<header class="archive-header">
					<?php // get the page loop
					get_template_part('loops/loop', 'page'); ?>
				</header><!-- .archive-header -->

				<?php // get the main loop
				get_template_part('loops/loop', 'frontpage'); ?>
				
				<?php inti_hook_inner_content_after(); ?>
				
			<?php inti_hook_grid_close(); ?>

		</div><!-- #content -->
		
		<?php inti_hook_content_after(); ?>
		
	</div><!-- #primary -->


<?php get_footer(); ?>