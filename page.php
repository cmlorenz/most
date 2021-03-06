<?php
/**
 * Default Template
 * Description: Displays a content container with a left and right sidebar.
 *
 * @package WordPress
 * @subpackage Most
 */
get_header();
	get_sidebar('left');
	while ( have_posts() ) : the_post(); ?>
	   <article class="span6">
	      	<h2><?php the_title();?></h2><?php
            edit_post_link(__('- Edit Page', 'most'), '<span class="edit-link">', '</span>');
            the_content(); ?>
	   </article><?php
	endwhile; // end of the loop.
	get_sidebar('right');
get_footer(); ?>