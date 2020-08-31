<?php?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'edina-theme' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
			<nav id="site-navigation" class="main-navigation">
            			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'edina-theme' ); ?></button>
            			<?php
            			wp_nav_menu(
            				array(
            					'theme_location' => 'menu-1',
            					'menu_id'        => 'primary-menu',
            				)
            			);
            			?>
            </nav>
	</header>
