<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <script src="/thebigk1d/wordpress/wp-content/themes/customtheme/js/lib/particles.js-master/particles.js"></script>

 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="masthead">
 
            <div id="access">
				<!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'hbd-theme' ) ?>"><?php _e( 'Skip to content', 'hbd-theme' ) ?></a></div>-->

<span>



                <div id="nav">
                                <a href="/index.php?cat=7" class="alert-success top-nav"><h3>art</h3></a>
                                <a href="/index.php?cat=7" class="alert-info top-nav"><h3>travel</h3></a>
                                <a href="/index.php?cat=7"class="alert-danger top-nav"><h3>code</h3></a>
                                <a href="/index.php/about" class="alert-warning top-nav"><h3>about</h3></a>

                             <!--  <div id="search-box" class="top-nav">

                               <button class="btn btn-primary" type="button">&#128270</button>

                               </div>

                               -->
                          </div>

</span>

        </div><!-- #access -->
 			
        </div><!-- #masthead -->
    </div><!-- #header -->
 
    <div id="main">