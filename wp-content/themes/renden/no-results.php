<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package ThinkUpThemes
 */
?>

				<article id="no-results">
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'renden' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'renden' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

						<?php elseif ( is_search() ) : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'renden' ); ?></p>
							<?php get_search_form(); ?>

						<?php else : ?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'renden' ); ?></p>
							<?php get_search_form(); ?>

						<?php endif; ?>
					</div><!-- .entry-content -->
				</article><!-- #no-results -->