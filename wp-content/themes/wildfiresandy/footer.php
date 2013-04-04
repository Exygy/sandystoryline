<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package progression
 * @since progression 1.0
 */
?>
<div class="clearfix"></div>
</div><!-- close .width-container -->
<?php
	if ( is_page_template('homepage.php')  ) {
		include("share-callouts.php");
	}
?>
</div><!-- close #main -->

<footer>
	
	<?php if(of_get_option('footer_widgets', '1')): ?>
	<div id="footer-widgets">
		<div class="width-container footer-<?php echo of_get_option('footer_widgets_column', '3'); ?>-column">
			<?php if ( ! dynamic_sidebar( 'Footer Widgets' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
			<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #footer-widgets -->
	<?php endif; ?>
	
	<div class="width-container">
		
		<div id="copyright"><?php echo of_get_option('copyright_textarea', '&copy; 2012 All Rights Reserved. Developed by <a href="http://themeforest.net/user/ProgressionStudios/?ref=ProgressionStudios" target="_blank">Progression Studios</a>.'); ?></div>
		
		<div class="social-icons">
				<?php if(of_get_option('rss_link')): ?>
				<a class="rss" href="<?php echo of_get_option('rss_link'); ?>" target="_blank">r</a>
				<?php endif; ?>
				<?php if(of_get_option('facebook_link')): ?>
				<a class="facebook" href="<?php echo of_get_option('facebook_link'); ?>" target="_blank">F</a>
				<?php endif; ?>
				<?php if(of_get_option('twitter_link')): ?>
				<a class="twitter" href="<?php echo of_get_option('twitter_link'); ?>" target="_blank">t</a>
				<?php endif; ?>
				<?php if(of_get_option('skype_link')): ?>
				<a class="skype" href="<?php echo of_get_option('skype_link'); ?>" target="_blank">s</a>
				<?php endif; ?>
				<?php if(of_get_option('vimeo_link')): ?>
				<a class="vimeo" href="<?php echo of_get_option('vimeo_link'); ?>" target="_blank">v</a>
				<?php endif; ?>
				<?php if(of_get_option('linkedin_link')): ?>
				<a class="linkedin" href="<?php echo of_get_option('linkedin_link'); ?>" target="_blank">l</a>
				<?php endif; ?>
				<?php if(of_get_option('dribbble_link')): ?>
				<a class="dribbble" href="<?php echo of_get_option('dribbble_link'); ?>" target="_blank">d</a>
				<?php endif; ?>
				<?php if(of_get_option('forrst_link')): ?>
				<a class="forrst" href="<?php echo of_get_option('forrst_link'); ?>" target="_blank">f</a>
				<?php endif; ?>
				<?php if(of_get_option('flickr_link')): ?>
				<a class="flickr" href="<?php echo of_get_option('flickr_link'); ?>" target="_blank">n</a>
				<?php endif; ?>
				<?php if(of_get_option('google_link')): ?>
				<a class="google" href="<?php echo of_get_option('google_link'); ?>" target="_blank">g</a>
				<?php endif; ?>
				<?php if(of_get_option('youtube_link')): ?>
				<a class="youtube" href="<?php echo of_get_option('youtube_link'); ?>" target="_blank">y</a>
				<?php endif; ?>
		</div><!-- close .social-icons -->
		
	<div class="clearfix"></div>
	</div><!-- close .width-container -->
</footer>
<?php wp_footer(); ?>

<?php if(of_get_option('custom_js')): ?>
	<?php echo '<script type="text/javascript">'; ?>
	<?php echo of_get_option('custom_js'); ?>
	<?php echo '</script>'; ?>
<?php endif; ?>
<?php if(of_get_option('tracking_code')): ?>
	<?php echo '<script type="text/javascript">'; ?>
	<?php echo of_get_option('tracking_code'); ?>
	<?php echo '</script>'; ?>
<?php endif; ?>

</body>
</html>