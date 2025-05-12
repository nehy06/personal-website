<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header">
    <div class="container">
        <nav class="navbar">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bar-graph.png" alt="logo">
                </a>
            </div>
            
            <!-- Navigation Links -->
            <?php if (is_front_page()) : ?>
                <!-- Single page navigation for homepage -->
                <ul class="nav-links">
                    <li><a href="#about">O mně</a></li>
                    <li><a href="#services">Služby</a></li>
                    <li><a href="#cv">CV</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <?php if (get_page_by_path('blog')) : ?>
                        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>">Blog</a></li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <!-- WordPress menu for other pages -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-links',
                    'fallback_cb'    => function() {
                        // Fallback if no menu is set
                        echo '<ul class="nav-links">';
                        echo '<li><a href="' . esc_url(home_url('/')) . '">Domů</a></li>';
                        echo '</ul>';
                    },
                    'depth'          => 1,
                ));
                ?>
            <?php endif; ?>
            
            <!-- Mobile Menu Button -->
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>

<main id="content">