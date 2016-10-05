<?php
    
    add_action( 'wp_enqueue_scripts', 'britty_reg_styles' );
    
    
    function britty_reg_styles() {
        
        wp_enqueue_style( 'found_main', get_template_directory_uri().'/css/foundation.css',$deps = array(), $ver = false, $media = 'all'  );
        wp_enqueue_style( 'app_usr', get_template_directory_uri().'/css/app.css',$deps = array(), $ver = false, $media = 'all'  );
        
        // Load What-Input files in footer
        wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/vendor/what-input.js', array(), '', true );
        
        // Adding Foundation scripts file in the footer
        wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/vendor/foundation.js', array( 'jquery' ), '6.0', true );
        
    }
    




   
?>