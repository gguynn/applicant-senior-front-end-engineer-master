<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SFEE
 */

?>
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
	<a class="skip-link screen-reader-text sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'sfee' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- logo -->
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text sr-only"><?php bloginfo( 'name' ); ?></span></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text sr-only"><?php bloginfo( 'name' ); ?></span></a></p>
				<?php
			endif;
			?>
		</div><!-- .site-branding -->

		<!-- buttons -->
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<!-- menu is closed -->
			<svg class="icon icon--open" width="19px" height="13px">
				<?php echo sprintf( '<use xlink:href="%s/menu-icons.svg#icon-menu"></use>', get_stylesheet_directory_uri() . '/assets/images' ); ?>
			</svg>

			<!-- menu is open -->
			<svg class="icon icon--close" width="19px" height="19px">
				<?php echo sprintf( '<use xlink:href="%s/menu-icons.svg#icon-close"></use>', get_stylesheet_directory_uri() . '/assets/images' ); ?>
			</svg>

			<span class="screen-reader-text sr-only"><?php esc_html_e( 'Primary Menu', 'sfee' ); ?></span>
		</button>

		<button class="search-toggle" aria-controls="search-form" aria-expanded="false">
			<!-- search is closed -->
			<svg class="icon" width="19px" height="19px">
				<?php echo sprintf( '<use xlink:href="%s/menu-icons.svg#icon-search"></use>', get_stylesheet_directory_uri() . '/assets/images' ); ?>
			</svg>

			<!-- search is open -->
			<svg class="icon icon--close" width="19px" height="19px">
				<?php echo sprintf( '<use xlink:href="%s/menu-icons.svg#icon-close"></use>', get_stylesheet_directory_uri() . '/assets/images' ); ?>
			</svg>
			<span class="screen-reader-text sr-only"><?php esc_html_e( 'Search', 'sfee' ); ?></span>
		</button>

		<!-- navigation -->
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- search form -->
		<?php get_search_form(); ?>
	</header><!-- #masthead -->
