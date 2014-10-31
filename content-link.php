<?php
/**
 * @package AquaOne
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- GENERATED WITH CONTENT-LINK.PHP -->
	<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<?php if (function_exists('wpmd_is_notphone') && wpmd_is_notphone()) :?>
				<div class="entry-meta">
					<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'aqua-one' ) );
					if ( $categories_list && aqua_one_categorized_blog() ) :
					?>
					<span class="cat-links">
						<?php printf( __( '%1$s', 'aqua-one' ), $categories_list ); ?>
					</span>
					<?php endif; // End if categories ?>
				</div><!-- .entry-meta -->
			<?php endif; // End mobile detect ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'aqua-one' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'aqua-one' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			
			<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'link' ) ); ?>"><?php echo get_post_format_string( 'link' ); ?></a>
			</span>

			<?php aqua_one_posted_on(); ?>
			
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'aqua-one' ), __( '1 Comment', 'aqua-one' ), __( '% Comments', 'aqua-one' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'aqua-one' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->