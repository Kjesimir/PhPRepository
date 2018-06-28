<?php

	add_action('wp_enqueue_scripts', 'test_media');
	add_filter('show_admin_bar','__return_false');
	add_action('after_setup_theme','NavigateMenu');
	add_action('widgets_init','test_left_sidebar');
	add_filter( 'post_thumbnail_html', 'filter_function_name_7073', 10, 5 );
	
	function test_media()
	{
		wp_enqueue_style('test-main', get_stylesheet_uri());
	}
	
	function NavigateMenu()
	{
		register_nav_menu('top','Область Для Верхнего меню');
		register_nav_menu('bottom','Область Для Нижнего меню');
		register_nav_menu('right','Область Для Нижнего меню');
		add_theme_support( 'post-thumbnails' );
	}
	function test_left_sidebar()
	{
		register_sidebar(array(
			'name'=>'Sidebar_Left',
			'id'=>'sidebar_left',
			'description'=>'Левая Колонка',
			'class'         => '',
			'before_widget' => '',
			'after_widget'  => "",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n"		
		));
	}	
	function filter_function_name_7073( $html, $post_id, $post_thumbnail_id, $size, $attr )
	{
			$html='<'.trim($html,'<>').'align="left" style="margin-right: 15px;"'.'>';
		return $html;
	}


