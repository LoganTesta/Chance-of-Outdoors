<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$image1 = get_field( "slide_1_image" );
$image2 = get_field( "slide_2_image" );
$image3 = get_field( "slide_3_image" );
$image4 = get_field( "slide_4_image" );
$image5 = get_field( "slide_5_image" );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <?php if ( is_front_page() ) { ?>
            <div class="slick-slider">
                <div class="slide">
                    <div class="slide__title"><?php the_field( "slide_1_title" ); ?></div>
                    <div class="slide__image-container">
                        <img class="slide__image" src="<?php echo esc_url( $image1["url"] ); ?>" alt="<?php get_field( "slide_1_title" ); ?>" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__description">
                            <?php echo the_field( "slide_1_description" ); ?>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__title"><?php the_field( "slide_2_title" ); ?></div>
                    <div class="slide__image-container">
                        <img class="slide__image" src="<?php echo esc_url( $image2["url"] ); ?>" alt="<?php get_field( "slide_2_title" ); ?>" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__description">
                            <?php echo the_field( "slide_2_description" ); ?>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__title"><?php the_field( "slide_3_title" ); ?></div>
                    <div class="slide__image-container">
                        <img class="slide__image" src="<?php echo esc_url( $image3["url"] ); ?>" alt="<?php get_field( "slide_3_title" ); ?>" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__description">
                            <?php echo the_field( "slide_3_description" ); ?>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__title"><?php the_field( "slide_4_title" ); ?></div>
                    <div class="slide__image-container">
                        <img class="slide__image" src="<?php echo esc_url( $image4["url"] ); ?>" alt="<?php get_field( "slide_4_title" ); ?>" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__description">
                            <?php echo the_field( "slide_4_description" ); ?>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__title"><?php the_field( "slide_5_title" ); ?></div>
                    <div class="slide__image-container">
                        <img class="slide__image" src="<?php echo esc_url( $image5["url"] ); ?>" alt="<?php get_field( "slide_5_title" ); ?>" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__description">
                            <?php echo the_field( "slide_5_description" ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
