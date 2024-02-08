<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
                <div class="footer-content-section">
                        <?php if ( has_nav_menu( 'footer-nav-links' ) ) : ?>
                                <nav aria-label="<?php esc_attr_e( 'Footer Nav Links', 'twentytwentyone' ); ?>" class="footer-navigation footer-section one">
                                        <ul class="footer-navigation-inner-wrapper">
                                                <?php
                                                wp_nav_menu(
                                                        array(
                                                                'theme_location' => 'footer-nav-links',
                                                                'items_wrap'     => '%3$s',
                                                                'container'      => false,
                                                                'depth'          => 1,
                                                                'link_before'    => '<span>',
                                                                'link_after'     => '</span>',
                                                                'fallback_cb'    => false,
                                                        )
                                                );
                                                ?>
                                        </ul><!-- .footer-navigation-wrapper -->
                                </nav><!-- .footer-navigation -->
                        <?php endif; ?>

                        <?php if ( has_nav_menu( 'footer' ) ) : ?>
                                <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation footer-section two">
                                        <ul class="footer-navigation-wrapper">
                                                <?php
                                                wp_nav_menu(
                                                        array(
                                                                'theme_location' => 'footer',
                                                                'items_wrap'     => '%3$s',
                                                                'container'      => false,
                                                                'depth'          => 1,
                                                                'link_before'    => '<span>',
                                                                'link_after'     => '</span>',
                                                                'fallback_cb'    => false,
                                                        )
                                                );
                                                ?>
                                        </ul><!-- .footer-navigation-wrapper -->
                                </nav><!-- .footer-navigation -->
                        <?php endif; ?>
                        
                        <?php if ( !empty( get_bloginfo( 'description' ) ) ) : ?>
                                <div class="footer-navigation footer-section three">
                                        <div class="footer-section__description">
                                                <?php echo get_bloginfo( 'description' ) ?>
                                        </div>
                                </div>
                        <?php endif; ?>
                                
                        <div class="clear-both"></div>
                </div>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->
			<div class="copyright-info">
				 <span>Copyright &copy; <?php echo date("Y"); ?>, <?php bloginfo( 'name' ); ?>.  All Rights Reserved.</span>
			</div><!-- .site-name -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
