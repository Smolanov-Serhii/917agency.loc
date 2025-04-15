<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agency
 */

?>
<?php
$post_id = get_the_ID();
if ($post_id != 17){


?>
	<footer class="footer">
		<div class="footer__container main-container">
			<div class="footer__left section-title" data-aos="fade-up" data-aos-delay="100">
                <strong>Let`s talk</strong><br>with us
            </div>
            <div class="footer__main">
                <a href="tel:+19176248075" data-aos="fade-up" data-aos-delay="300">+1 917 624 8075</a>
                <a href="mailto:INFO@917AGENCY.COM" data-aos="fade-up" data-aos-delay="500">INFO@917AGENCY.COM</a>
                <div class="footer__btn button button-black js-popup" data-aos="fade-up" data-aos-delay="700">
                    <span>Сontact</span>
                </div>
            </div>
		</div>
	</footer>
</div>
<?php
}
wp_footer(); ?>
</body>
</html>


