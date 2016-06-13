<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
                <?php the_post(); ?>

                <?php ob_start(); single_cat_title(); $cat = ob_get_contents(); ob_end_clean();?>



<div style="height: 400px">
    <img class="category-image" src="<?php $cat; ?>-image">


    <div class="overlay">

       <h1> &nbsp </h1>
				<h1  class="page-title circle alert-<?php category_color($cat); ?>"><?php _e( '', 'hbd-theme' ) ?> <span><?php single_cat_title(); ?></span></span></h1>



    </div>
    </div>
    </div>



         	     <!--   <?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta"><h3>' . $categorydesc . '</h3></div>' ); ?> -->





				<?php rewind_posts(); ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>            

				<?php while ( have_posts() ) : the_post(); ?>
                 <div class="post-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <blockquote class="<?php echo $cat; ?>">



                                             <h3 class="entry-title panel-title left"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>


				                    <div class="entry-meta">

				                        <span class="meta-prep meta-prep-entry-date"><?php _e('', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				                    </div><!-- .entry-meta -->

				                    <div class="entry-summary">
				                                    <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				                    </div><!-- .entry-summary -->

				                    <div class="entry-utility">
				                        <?php if ( $cats_meow = cats_meow(', ') ) : // Returns categories other than the one queried ?>
										                        <span class="cat-links"><?php printf( __( 'Also posted in %s', 'hbd-theme' ), $cats_meow ) ?></span>
										                        <span class="meta-sep"> | </span>
										<?php endif ?>
				                        <span class="meta-sep"> | </span>
				                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
				                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hbd-theme' ), __( '1 Comment', 'hbd-theme' ), __( '% Comments', 'hbd-theme' ) ) ?></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>

				                    </div><!-- #entry-utility -->
				                </div><!-- #post-<?php the_ID(); ?> -->


                </blockquote>
				<?php endwhile; ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-below" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-below -->
				<?php } ?>                 
 
            </div><!-- #content -->
        </div><!-- #container -->

 <script src="/thebigk1d/wordpress/wp-content/themes/customtheme/js/<?php echo $cat; ?>.js"></script>

<?php get_footer(); ?>