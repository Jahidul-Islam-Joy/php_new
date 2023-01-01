<?php



wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
// =========================
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' );

// ======================================

register_sidebar( array(
    'name'          =>'logoright',
    'id'            => 'rightlogo',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// =========================

register_nav_menus(array(
    'TM'=>'primary'
));



// ==========================




register_sidebar( array(
    'name'          =>'logoright',
    'id'            => 'herotext',
    'before_widget' => '',
    'after_widget'  => '',
    
) );


// =========================


register_sidebar( array(
    'name'          =>'CD IMG_1',
    'id'            => 'hbimg1',
    'before_widget' => '',
    'after_widget'  => '',
    
) );


register_sidebar( array(
    'name'          =>'CD BODY_1',
    'id'            => 'hbbody1',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// =================

register_sidebar( array(
    'name'          =>'CD IMG_2',
    'id'            => 'hbimg2',
    'before_widget' => '',
    'after_widget'  => '',
    
) );


register_sidebar( array(
    'name'          =>'CD BODY_2',
    'id'            => 'hbbody2',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// ===================

register_sidebar( array(
    'name'          =>'CD IMG_3',
    'id'            => 'hbimg3',
    'before_widget' => '',
    'after_widget'  => '',
    
) );


register_sidebar( array(
    'name'          =>'CD BODY_3',
    'id'            => 'hbbody3',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// ==============================

register_sidebar( array(
    'name'          =>'HB LINE_L',
    'id'            => 'lline',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

register_sidebar( array(
    'name'          =>'HB LINE_TEXT',
    'id'            => 'hblinetext',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

register_sidebar( array(
    'name'          =>'HB LINE_R',
    'id'            => 'rline',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// ===================

register_sidebar( array(
    'name'          =>'HB BDY_1',
    'id'            => 'bodyhero',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

// ==============
register_sidebar( array(
    'name'          =>'HB PHTO_1',
    'id'            => 'cdphoto1',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

register_sidebar( array(
    'name'          =>'HB PHTO_2',
    'id'            => 'cdphoto2',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

register_sidebar( array(
    'name'          =>'HB PHTO_3',
    'id'            => 'cdphoto3',
    'before_widget' => '',
    'after_widget'  => '',
    
) );

register_sidebar( array(
    'name'          =>'HB PHTO_4',
    'id'            => 'cdphoto4',
    'before_widget' => '',
    'after_widget'  => '',
    
) );












register_sidebar( array(
    'name'          =>'FOOTER',
    'id'            => 'futim',
    'before_widget' => '',
    'after_widget'  => '',
    
) );















?>