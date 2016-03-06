<?php
/**
 * The author archive template file.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if ( have_posts() ) : ?>
<?php the_post(); ?>
  <div class="container">
  <div id="main-content">
    <div class="content-headline">
      <h1 class="entry-headline"><?php printf( __( 'Author Archive: %s', 'winterdream' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?></h1>
<?php winterdream_get_breadcrumb(); ?>
    </div>
<?php rewind_posts(); ?>        
<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="author-info">
		<div class="author-description">
      <div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'winterdream_author_bio_avatar_size', 60 ) ); ?>
		  </div>
			<p><?php the_author_meta( 'description' ); ?></p>
		</div>
		</div>
<?php endif; ?>
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