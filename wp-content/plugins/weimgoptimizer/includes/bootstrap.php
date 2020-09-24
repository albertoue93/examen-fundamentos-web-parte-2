<?php

add_action('admin_enqueue_scripts', 'weoptimizer_head');

function weoptimizer_head() {
       wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css' );
       wp_enqueue_style('bootstrap_we', plugins_url('css/bootstrap.min.css', __FILE__), false, '4.1.0', false);
}

?>