<?php get_header(); ?>

        <div id="container">
            <div id="content">
 
<?php the_post(); ?>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content">


                    <h1> &nbsp </h1>
                    <h1  class="page-title circle alert-<?php ob_start(); single_cat_title(); $cat = ob_get_contents(); ob_end_clean(); category_color($cat); ?>"><?php _e( '', 'hbd-theme' ) ?> <span><?php the_title(); ?></span></span></h1>
                 <h1> &nbsp </h1>



<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           

 <hr></hr>

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>            
 
            </div><!-- #content -->

        </div><!-- #container -->
 
<?php get_footer(); ?>