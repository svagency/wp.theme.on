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

<?php $theme_folder_path = get_stylesheet_directory_uri(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   
  <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-56W28VL');
    </script>

    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel=stylesheet href="<?php echo $theme_folder_path; ?>/css/styles.css">
    <title>Raptive — Powering creator independence</title>
    <meta name=description content="CafeMedia and AdThrive are now Raptive, a new kind of company transforming creators into global brands and lasting businesses.">
    <link rel=canonical href="https://raptive.com/">
    <meta property=og:locale content=en_US>
    <meta property=og:type content=website>
    <meta property=og:title content="Raptive — Powering creator independence">
    <meta property=og:description content="CafeMedia and AdThrive are now Raptive, a new kind of company transforming creators into global brands and lasting businesses.">
    <meta property=og:url content="https://raptive.com/">
    <meta property=og:site_name content=Raptive>
    <meta property=og:image content=https://raptive.com/raptive-social.png>
    <meta property=og:image:width content=1200>
    <meta property=og:image:height content=630>
    <meta property=og:image:type content=image/png>
    <meta name=twitter:card content=summary_large_image>
    <meta name=twitter:site content=@weareraptive>
    <link rel=icon href="<?php echo $theme_folder_path; ?>/favicons/favicon-32x32.png" sizes=32x32>
    <link rel=icon href="<?php echo $theme_folder_path; ?>/favicons/favicon-192x192.png" sizes=192x192>
    <link rel=apple-touch-icon href="<?php echo $theme_folder_path; ?>/favicons/favicon-180x180.png">
    <meta name=msapplication-TileImage content="<?php echo $theme_folder_path; ?>/favicons/favicon-270x270.png">
    <meta name=msapplication-TileColor content=#6B65FF>
    <meta name=theme-color content=#6B65FF>

</head>

<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_field('gtm'); ?>" height=0 width=0 style=display:none;visibility:hidden></iframe></noscript>
    <div id=wrap>
        <header id=header>
            <nav class="navbar navbar-expand-md">
                <div class=container><a href="/" rel=home class=navbar-brand title=Raptive><svg viewbox="0 0 88 23" xmlns=http://www.w3.org/2000/svg><path d="M7.95185 12.5268C10.0605 13.1455 10.5944 13.8556 10.5944 16.0076V18.5266H14.7148V14.633C14.7148 12.5497 13.721 11.3581 11.564 10.8779L8.87304 10.2593C13.1401 10.0992 15.273 8.49603 15.273 5.44973V5.31254C15.273 2.10619 12.8725 0 8.07287 0H0V18.5266H4.12186V11.4052L7.95185 12.5268ZM7.97605 2.84053C10.0847 2.84053 11.1027 3.82503 11.1027 5.54253V5.67971C11.1027 7.39721 10.0847 8.38171 7.97605 8.38171H4.12186V2.83918H7.97605V2.84053ZM61.2613 2.31331V2.22185C61.2613 1.10017 60.4127 0.229986 59.0316 0.229986C57.6506 0.229986 56.8006 1.10017 56.8006 2.22185V2.31331C56.8006 3.43499 57.6491 4.30518 59.0316 4.30518C60.4141 4.30518 61.2613 3.43499 61.2613 2.31331ZM45.8189 7.71731H47.8065V14.1986C47.8065 17.405 48.8487 18.5266 52.3398 18.5266H55.6373V16.0076H53.1158C52.0494 16.0076 51.6849 15.6646 51.6849 14.7487V7.71865H55.5149V5.19957H51.6849V1.07596H47.8065V5.19822H45.8189V7.71731ZM15.589 11.931C15.589 15.7789 18.038 18.7096 21.5533 18.7096C23.7103 18.7096 25.3107 17.6793 26.135 15.9618V18.5266H30.0134V5.19822H26.135V7.76303C25.3107 6.04554 23.7103 5.01531 21.5533 5.01531C18.038 5.01531 15.589 7.94595 15.589 11.7938V11.931ZM46.1834 11.931V11.7938C46.1834 7.94729 43.7345 5.01531 40.2191 5.01531C38.0621 5.01531 36.4618 6.04554 35.6374 7.76303V5.19822H31.759V22.8776H35.6374V15.9618C36.4618 17.6793 38.0621 18.7096 40.2191 18.7096C43.7345 18.7096 46.1834 15.7789 46.1834 11.931ZM88 14.3358H84.5089C84.0234 15.4575 83.0068 16.1447 81.8435 16.1447C80.0012 16.1447 78.8137 14.9773 78.5959 12.6183H88V12.0682C88 7.69444 85.3831 5.01531 81.2854 5.01531C77.4312 5.01531 74.6434 7.92308 74.6434 11.7938V11.931C74.6434 15.9847 77.5038 18.7096 81.6485 18.7096C84.8235 18.7096 87.224 17.1521 87.9986 14.3358M75.3938 5.19822H71.9995L68.897 14.8617L65.7946 5.19822H61.65L66.498 18.5266H70.5458L75.3938 5.19822ZM60.9694 5.19822H57.091V18.5266H60.9694V5.19822ZM81.5517 7.58012C83.0552 7.58012 84.1202 8.58749 84.3878 10.4193H78.7653C79.1042 8.54176 80.1222 7.58012 81.5531 7.58012M19.5159 11.931V11.7938C19.5159 9.32048 20.8741 7.80876 22.886 7.80876C24.8978 7.80876 26.2561 9.32048 26.2561 11.7938V11.931C26.2561 14.4044 24.8978 15.9161 22.886 15.9161C20.8741 15.9161 19.5159 14.4044 19.5159 11.931ZM42.2551 11.931C42.2551 14.4044 40.8969 15.9161 38.885 15.9161C36.8732 15.9161 35.5149 14.4044 35.5149 11.931V11.7938C35.5149 9.32048 36.8732 7.80876 38.885 7.80876C40.8969 7.80876 42.2551 9.32048 42.2551 11.7938V11.931Z"></path></svg></a>                    <button class="hamburger navbar-toggler collapsed" type=button data-bs-toggle=collapse data-bs-target=#navbarNav aria-controls=navbarNav aria-expanded=false aria-label="Toggle navigation"><span class=hamburger__box><span class="hamburger__line hamburger__line--top"></span> <span class="hamburger__line hamburger__line--middle"></span> <span class="hamburger__line hamburger__line--bottom"></span></span></button>
                    <div
                        class="collapse navbar-collapse justify-content-md-end" id=navbarNav>
                         <ul class=navbar-nav>
                            <li class=nav-item><a href=/creators class=nav-link>Creators</a></li>
                            <li class=nav-item><a href=/enterprise class=nav-link>Enterprise</a></li>
                            <li class=nav-item><a href="https://publisher.adthrive.com/login/" class=nav-link target=_blank rel="noopener noreferrer">Login</a></li>
                            <li class="nav-item nav-item--cta"><a href="https://publisher.adthrive.com/apply/site-info/" class="btn btn-primary btn-sm" target=_blank rel="noopener noreferrer">Apply now</a></li>
                        </ul>
						<?php

						/*
								$menu_to_use = 'main-menu';
						
								wp_nav_menu(array(
								  'theme_location' => $menu_to_use,
								  'container' => false,
								  'menu_class' => $menu_to_use,
								  'fallback_cb' => '__return_false',
								  'items_wrap' => '<ul id="mainmenu" >%3$s</ul>',
								  'depth' => 2
							  	));
								
								*/

								?>
                </div>
    </div>
    </nav>
    </header>
	<!-- header close -->
	