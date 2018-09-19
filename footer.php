<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Social_Network
 */

$company_name   = get_field('company_name', 'options');
$company_number = get_field('company_number', 'options');
$creator        = get_field('creator', 'options');

$facebook_link  = get_field('facebook_link', 'options');
$twitter_link   = get_field('twitter_link', 'options');
$instagram_link = get_field('instagram_link', 'options');

?>

<footer>
    <div class="footer-main">
        <div class="container">
            <ul>

                <?php 
                
                    wp_nav_menu( array(
                        'menu' => 'footer-menu',
                        'items_wrap' => '%3$s',
                        'container' => false
                    ) )
                
                ?>
                <li class="footer-social">
                    <a href="<?php echo $facebook_link ?>">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                    <a href="<?php echo $twitter_link ?>">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                    <a href="<?php echo $instagram_link ?>">
                        <span>
                            <i class="fa fa-instagram"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="footer-lower">
        <ul>
            <li><?php echo $company_name ?></li>
            <li>Company Reg No <?php echo $company_number ?></li>
            <li>Designed by <?php echo $creator ?></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
