<?php
/**
 * The tag archive template file.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if ( have_posts() ) : ?>
  <div class="container">
  <div id="main-content">
    <div class="content-headline">
      <h1 class="entry-headline"><?php printf( __( 'Tag Archive: %s', 'winterdream' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
<?php winterdream_get_breadcrumb(); ?>
    </div>
<?php if ( tag_description() ) : ?><div class="archive-meta"><?php echo tag_description(); ?></div><?php endif; ?>
    <div id="content"<?php if ($winterdream_options_db['winterdream_post_entry_format'] == 'Grid - Masonry') { ?> class="js-masonry"<?php } ?>> 
<?php while (have_posts()) : the_post(); ?>      
<?php if ($winterdream_options_db['winterdream_post_entry_format'] == 'Grid - Masonry') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; endif; ?>
    </div> <!-- end of content -->
<?php winterdream_content_nav( 'nav-below' ); ?>
  </div>
<?php if ($winterdream_options_db['winterdream_display_sidebar_archives'] != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>