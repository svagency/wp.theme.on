<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

 <?php $theme_folder_path = get_stylesheet_directory_uri(); ?>

<!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_folder_path; ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_folder_path; ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_folder_path; ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $theme_folder_path; ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo $theme_folder_path; ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>

    <link id="bootstrap" href="<?php echo $theme_folder_path; ?>/css/lib/bootstrap.min.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="<?php echo $theme_folder_path; ?>/css/lib/font-awesome.min.css" type="text/css">
   	<link rel="stylesheet" href="<?php echo $theme_folder_path; ?>/css/style.min.css" type="text/css" >
	<link rel="stylesheet" href="<?php echo $theme_folder_path; ?>/style.css" type="text/css">

</head>

<body <?php body_class(); ?>>

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo get_home_url();  ?>">
                                <img class="logo" src="<?php echo $theme_folder_path; ?>/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->

                        <?php

                        // en
                        $menu_to_use = 'main-menu';
                        
                        ?>

						 <nav class="sticky-top <?php echo $menu_to_use; ?>">

							
							<?php

								wp_nav_menu(array(
								  'theme_location' => $menu_to_use,
								  'container' => false,
								  'menu_class' => $menu_to_use,
								  'fallback_cb' => '__return_false',
								  'items_wrap' => '<ul id="mainmenu">%3$s</ul>',
								  'depth' => 2
							  	));

								?>

							</nav>

							<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->