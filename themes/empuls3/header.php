<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empuls3
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'empuls3' ); ?></a>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <div class="flex items-center">
                    <?php $logo = get_field( 'logo', 'option' ); ?>
                    <?php if ( $logo ) : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img class="h-8 w-auto lg:mr-2" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                        </a>
                    <?php endif; ?>
                    <h1 class="-m-1.5 p-1.5 hidden md:block logo-text"><a class="font-semibold leading-7 text-gray-900 hover:text-em-pink " href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>
            <div class="flex lg:hidden">
                <button type="button" id="menu-open" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <!-- Desktop menu items -->
                <?php
                if ( has_nav_menu( 'menu-1' ) ) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class'     => 'hidden lg:flex lg:gap-x-12 list-none',
                            'container'      => false,
                            'items_wrap'     => '<div class="%2$s">%3$s</div>',
                            'depth'          => 1,
                            'link_before'    => '<span class="text-sm font-semibold leading-6 text-em-purple hover:text-em-pink">',
                            'link_after'     => '</span>',
                        )
                    );
                }
                ?>
            </div>
            <div id="mobile-menu" class="hidden lg:flex lg:flex-1 lg:justify-end">

                <?php if ( have_rows( 'header_button', 'option' ) ) : ?>
                    <?php while ( have_rows( 'header_button', 'option' ) ) : the_row(); ?>
                        <?php $button_link = get_sub_field( 'button_link' ); ?>
                        <?php if ( $button_link ) : ?>
                            <a class="button rounded-md bg-em-pink px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-em-purple focus-visible:outline hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="<?php echo esc_url( $button_link); ?>"> <?php the_sub_field( 'button_label' ); ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center gap-x-6">
                    <a href="#" class="-m-1.5 p-1.5">
                        <?php $logo = get_field( 'logo', 'option' ); ?>
                        <?php if ( $logo ) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="h-8 w-auto lg:mr-2" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            </a>
                        <?php endif; ?>
                    </a>
                    <a href="#" class="ml-auto rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</a>
                    <button type="button" id="menu-close" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <?php
                        if ( has_nav_menu( 'menu-1' ) ) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'space-y-2 py-6 list-none',
                                    'container'      => false,
                                    'items_wrap'     => '<div class="%2$s">%3$s</div>',
                                    'depth'          => 1,
                                    'link_before'    => '<span class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">',
                                    'link_after'     => '</span>',
                                )
                            );
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </header>
