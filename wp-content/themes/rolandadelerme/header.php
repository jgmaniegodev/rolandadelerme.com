<?php $theme_dir = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>

    <body <?php body_class(); ?>>
        <div id="page">
            <div id="home">
                <!-- HEADER -->
                <div class="navbar">
                    <div class="wrapper">
                        <div class="navbar-container">
                            <div class="navbar-left-style navbar-side"></div>
                            <div class="navbar-menu-container">
                                <?php the_custom_logo(); ?>
                                <nav role="navigation">
                                    <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
                                    <?php wp_nav_menu( array('theme_location' => 'mobile')); ?>
                                </nav>
                                <button class="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                                <div class="socialbar">
                                    <?php wp_nav_menu( array('theme_location' => 'social') ); ?>
                                </div>
                            </div>
                            <div class="navbar-right-style navbar-side"></div>
                        </div>
                    </div>
                </div>
                <!-- BANNER -->
                <div class="banner">
                    <div class="overlay-bg">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
                            alt="" />
                    </div>
                    <div class="wrapper">
                        <div class="flowers-bg">
                            <div class="flower1 flower"></div>
                            <div class="flower2 flower"></div>
                        </div>
                        <div class="birds-bg">
                            <div class="birds"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/birds.png" alt="birds" /></div>
                        </div>
                        <div class="saints-icons">
                            <span class="saint-icon" id="saint-one"></span>
                            <span class="saint-icon" id="saint-two"></span>
                            <span class="saint-icon" id="saint-three"></span>
                            <span class="saint-icon" id="saint-four"></span>
                            <span class="saint-icon" id="saint-five"></span>
                            <span class="saint-icon" id="saint-six"></span>
                            <span class="saint-icon" id="saint-seven"></span>
                            <span class="saint-icon" id="saint-eight"></span>
                            <span class="saint-icon" id="saint-nine"></span>
                            <span class="saint-icon" id="saint-ten"></span>
                            <span class="saint-icon" id="saint-eleven"></span>
                            <span class="saint-icon" id="saint-twelve"></span>
                            <span class="saint-icon" id="saint-thirteen"></span>
                            <span class="saint-icon" id="saint-fourteen"></span>
                        </div>
                        <div class="dp-images">
                            <div class="dp-picture"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/dp.png" alt="Rolanda Delerme"
                                /></div>
                            <div class="dp-name"><img src="<?php echo get_template_directory_uri(); ?>/img/banner/big_name.png" alt="Rolanda name"
                                /></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT ME -->
            <section id="about-me">
                <div class="wrapper">
                    <?php get_wppage('about-me'); ?>
                </div>
            </section>
            <section id="articles">
                <div class="wrapper">
                    <?php get_wppage('articles'); ?>
                </div>
            </section>
            <section id="services">
                <div class="wrapper">
                    <?php get_wppage('services'); ?>
                </div>
            </section>
            
            <section id="readings">
                <div class="wrapper">
                    <?php get_wppage('readings'); ?>
                    </div>
            </section>
            <section id="services-gallery">
                <div class="wrapper">
                    <?php get_wppage('services-gallery'); ?>
                </div>
            </section>
            <section id="contact">
                <div class="wrapper">
                    <?php get_wppage('contact'); ?>
                </div>
            </section>
            <!-- FOOTER -->
            <footer role="site-info">
                <div class="wrapper">
                    <p style="text-align: center">&copy; Copyright
                        <?php bloginfo("name"); ?>
                        <?php the_time("Y"); ?><br />All Rights Reserved.</p>
                </div>
            </footer>
        </div>
        <!-- #page -->
    </body>

</html>