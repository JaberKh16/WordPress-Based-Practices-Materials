<?php 
	add_theme_support("widgets");
	add_theme_support('custom-logo');
	 $args = array(
      'default-color' => 'ffffff',
      'default-image' => get_template_directory_uri() . '/assets/images/bg_main.gif'
    );
	add_theme_support('custom-background',$args);
	function allCss_Load(){
		wp_enqueue_style('myStyle',get_theme_file_uri().'/assets/style.css');
	}
	add_action('wp_enqueue_scripts','allCss_Load');

	function allJs_Load(){

		wp_enqueue_script('jquery');

		wp_enqueue_script('myJs',get_theme_file_uri().'/assets/script.js', array("jquery"));
		wp_enqueue_script('myJs',get_theme_file_uri().'/assets/script.js');
	}
	add_action('wp_enqueue_scripts','allJs_Load');

		function banner(){
		register_sidebar(array(
			'name'=>'Banner',
			'id'=>'banner'
		));
	}
	add_action("widgets_init","banner");

	register_nav_menus( array(
        'primary_menu' => 'Top Menu',
        'footer_menu'  => 'Footer Menu',
    ) );
 ?>