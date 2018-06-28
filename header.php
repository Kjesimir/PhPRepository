<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset')?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
<body>
    <div>
        <div id="topPan">
            <a href="<?php echo home_url();?>">
                <img class="logo" src="http://localhost:8080/wordpress/wp-content/themes/Aquatic/assets/images/logo.gif" alt="Aquatic" width="136" height="31" border="0" title="Aquatic" /></a>
            <p class="caption">Aquarium fishes and plants</p>
        </div>
		<?php   wp_nav_menu(array(
					'theme_location'  => 'top',
					'container'       => 'div', 
					'menu_class'      => 'leftmenu',
					'container_id'    => 'headerPan'
		) )?>


	
        