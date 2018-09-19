<?php 

    /**
     * 
     * Template Name: Homepage Template
     * 
     */

    get_header();

    $site_logo = get_field('site_logo', 'options');

    $site_title = get_field('site_title');

    $who_section_title   = get_field('who_section_title');
    $who_section_content = get_field('who_section_content');
    $who_section_image   = get_field('who_section_image');

    $contact_heading = get_field('contact_heading');
    $content_lead    = get_field('contact_lead');

?>

<header class="hero bg-pattern bg-fixed">
    <div class="hero-header">
        <div class="container-lg">
            <nav class="nav-menu-closed">
                <div class="navbar">
                    <a href="#" class="navbar-brand">
                        <img src="<?php echo $site_logo['url'] ?>" alt="<?php echo $site_logo['alt'] ?>">
                    </a>
                    <button class="nav-button nav-button-closed">
                        <span class="nav-button-bar"></span>
                        <span class="nav-button-bar"></span>
                        <span class="nav-button-bar"></span>
                    </button>
                </div>
                <div class="nav-menu">
                    <ul class="nav-links">
                        <?php 
                        
                            wp_nav_menu( array(
                                'menu' => 'main-menu',
                                'container' => false,
                                'items_wrap' => '%3$s'
                            ) )
                        
                        ?>
                    </ul>
                    <div class="footer-socials">
                        <ul>
                            <li>
                                <span class="social-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </span>
                                <span class="social-icon">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </span>
                                <span class="social-icon">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
    <div class="hero-body">
        <h1 class="text-center colour-accent-red underline-red"><?php echo $site_title ?></h1>
    </div>
    <a href="#who-we-are" class="chevron-down">
        <i class="fa fa-chevron-down fa-2x"></i>
    </a>
</header>


<section id="who-we-are">
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="col-inner">
                    <h1 class="colour-accent-red mb header-margin-large large"><?php echo $who_section_title ?></h1>
                    <p class="paragraph-constrain">
                        <?php echo $who_section_content ?>
                    </p>
                </div>
                
            </div>
            <div class="column centralise">
                <div class="col-inner">
                    <img class="centralise img-push-right" src="<?php echo $who_section_image['url'] ?>" alt="<?php echo $who_section_image['alt'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="no-padding" id="what-we-do">
    <div class="edgeless-grid">
        <div class="row">

            <?php 
            
                $query = new WP_Query( array(
                    'post_type' => 'services',
                    'posts_per_page' => 6
                ) );

                $i = 0;

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        $service_colour  = get_field('service_colour');
                        $service_content = get_field('service_content');
                        $service_title   = get_the_title();
                    ?>
                        <div class="item item-closed <?php echo $service_colour ?>">
                            <h2 class="size-4-override"><?php echo $service_title ?></h2>
                            <div class="open-only <?php echo $service_colour ?>">
                                <div class="container">
                                    <div class="item-header">
                                        <span class="close-btn">
                                            <span class="close-bar"></span>
                                            <span class="close-bar"></span>
                                        </span>
                                    </div>
                                    <div class="item-inner">
                                        <h2 class="size-4-override no-underline"><?php echo $service_title ?></h2>
                                        <p><?php echo $service_content ?></p>
                                    </div>
                                    <div class="item-lower">
                                        <div class="controls">
                                            <span class="control-left inactive">
                                                <i class="fa fa-chevron-left"></i>
                                            </span>
                                            <span class="control-right">
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    $i++;
                    wp_reset_postdata();
                    if ( $i == 3 ) {
                        echo '</div><div class="row">';
                    }
                }
            }

        ?>
    </div>
</section>

<section id="our-clients">
    <div class="container">
        <h1 class="colour-accent-red large">Our clients.</h1>
        <div class="css-grid">
            <?php 
            
                if ( have_rows('client_list') ) {
                    while ( have_rows('client_list') ) {
                        the_row();

                    $image = get_sub_field('client_image');
                        ?>
                        <div class="client">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                        </div>
                        <?php
                        wp_reset_postdata();
                    }
                }
            
            ?>
        </div>
    </div>
</section>

<section class="bg-accent-green" id="get-in-touch">
    <div class="container">
        <h1 class="colour-accent-purple large"><?php echo $contact_heading ?></h1>
        <div class="row row-half paragraph-colour-white no-centre">
            <div class="column">
                <form action="" class="contact-form">
                    <p><?php echo $contact_lead ?></p>
                    <div class="form-group">
                        <label class="text-white" for="contact-name">My name is </label>
                        <input type="text" id="contact-name" name="contact-email">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="contact-email">and my email address is </label>
                        <input type="text" id="contact-email" name="contact-email">
                    </div>
                    <p>Let's start something great together:</p>
                    <textarea name="contact-body" id="contact-body" cols="30" rows="10"></textarea>
                    <button class="submit-btn bg-accent-purple text-white">Send enquiry</button>
                </form>
            </div>
            <div class="column">
                <ul class="icon-list">
                    <?php 
                    
                        if ( have_rows('contact_item_list') ) {
                            while ( have_rows('contact_item_list') ) {
                                the_row();
                                ?>
                                    <li>
                                        <span class="icon">
                                            <i class="fa <?php echo get_sub_field('contact_list_icon') ?>"></i>
                                        </span>
                                        <span class="list-item">
                                            <?php echo get_sub_field('contact_list_content') ?>
                                        </span>
                                    </li>
                                <?php
                                wp_reset_postdata();
                            }
                        }

                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="decoration-bottom-right">
        <img src="<?php bloginfo('stylesheet_directory') ?>/img/decoration.png" alt="">
    </div>
</section>


<?php

get_footer();