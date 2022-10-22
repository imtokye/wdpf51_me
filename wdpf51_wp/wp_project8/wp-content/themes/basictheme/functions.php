
<?php
		
    function basic_theme_support() {  
    add_theme_support( 'woocommerce' );
    }

    add_action('after_setuo_theme', 'basic_theme_support');