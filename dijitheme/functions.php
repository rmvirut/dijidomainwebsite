<?php

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'simplediji' ),
    'secondary' => __( 'Secondary Menu', 'simplediji' )
) );

add_theme_support( 'post-thumbnails' );

	
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

