<?php
/**
 * Template Name: Page without Title
 * The template file for pages without the page title.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
  <div id="main-content">
    <div id="content">
<?php winterdream_get_breadcrumb(); ?>
<?php winterdream_get_display_image_page(); ?> 
      <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'winterdream' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php edit_post_link( __( '(Edit)', 'winterdream' ), '<p class="edit-link">', '</p>' ); ?>
      </div>
<?php endwhile; endif; ?>
<?php comments_template( '', true ); ?>
    </div> <!-- end of content -->
  </div>
<?php if ($winterdream_options_db['winterdream_display_sidebar'] != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>