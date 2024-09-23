<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>





<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header mt-5">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php 
		the_content();
		?>



	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->
