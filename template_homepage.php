<?php 

    /**
     * 
     * Template Name: Homepage Template
     * 
     */

    get_header();

    $site_logo = get_field('site_logo', 'options');

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
                    <ul>
                        <li>
                            <a href="#">Who we are</a>
                        </li>
                        <li>
                            <a href="#">What we do</a>
                        </li>
                        <li>
                            <a href="#">Our clients</a>
                        </li>
                        <li>
                            <a href="#">Get in touch</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="hero-body">
        <h1 class="text-center colour-accent-red underline-red">We are more<br> than strategists</h1>
    </div>
    <div class="chevron-down">
        <i class="fa fa-chevron-down fa-2x"></i>
    </div>
</header>


<section>
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="col-inner">
                    <h1 class="colour-accent-red mb header-margin-large large">Who we are.</h1>
                    <p class="paragraph-constrain">
                        We are one of the UK’s leading Facebook Management Agencies with various in-house departments that specialise in social media campaigns, design and outreach marketing with over 10 years experience in the industry.
                    </p>
                </div>
                
            </div>
            <div class="column centralise">
                <div class="col-inner">
                    <img class="centralise img-push-right" src="<?php bloginfo('stylesheet_directory') ?>/img/who-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();