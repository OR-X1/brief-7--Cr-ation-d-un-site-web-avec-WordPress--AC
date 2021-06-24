<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThinkUpThemes
 */
?>

		<div id="sidebar">
		<div id="sidebar-core">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( thinkup_input_sidebars() ) and current_user_can( 'edit_theme_options' ) ) : ?>

				<aside class="widget widget_text">
					<h3 class="widget-title"><?php esc_html_e( 'Please Add Widgets', 'renden' ); ?></h3>
					<div class="textwidget"><div class="error-icon">
						<p><?php esc_html_e( 'Remove this message by adding widgets to the Sidebar from the Widgets section of the WordPress admin area.', 'renden' ); ?></p>
						<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" title="<?php esc_attr_e( 'No Widgets Selected', 'renden' ); ?>"><?php esc_html_e( 'Click here to go to Widget area.', 'renden' ); ?></a>
					</div></div>
				</aside>

			<?php endif; ?>

		</div>
		</div><!-- #sidebar -->
				