<?php
// Template Name: Sandy Info
// added by clt - for Sandy info pages
/**
*
* @package progression
* @since progression 1.0
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

</div><!-- close .width-container -->
<div id="marquee-container">
	<div class="width-container clearfix">
		<div class="frame-feature-photo"><img src="<?php echo(get_stylesheet_directory_uri() . "/images/sandy/". get_post_meta($post->ID, 'Marquee Image', true)); ?>"></div>
	</div>
</div><!-- close #highlight-container -->
<div class="width-container">
	
	<div class="content-container">
		<div class="container-spacing clearfix">
			<?php get_template_part( 'child-page', 'navigation' ); ?>
			<?php
			$header_html = "<h1 class='page-title margin-b'>" . get_the_title($post->ID) ."</h1>"; 
			echo($header_html);
	?>
			<div class="grid3columnbig" id="container-sidebar">
				<?php the_content(); ?>	

			</div>
			
			<div class="grid3column lastcolumn" id="sidebar">
			<?php if(get_post_meta($post->ID, 'Pull Quote', true)) { ?>
				<blockquote class="quote-block"><?php echo(get_post_meta($post->ID, 'Pull Quote', true)); ?></blockquote>
<address class="quote-author"><span class="author"><?php echo(get_post_meta($post->ID, 'Quote Author', true)); ?></span><span class="author-deets"><?php echo(get_post_meta($post->ID, 'Author Info', true)); ?></span></address>
			<?php } ?>
			</div>		
			
		</div><!-- close .content-container-spacing -->
	</div><!-- close .content-container -->

<?php endwhile; // end of the loop. ?>
<?php if(of_get_option('page_comments_default', '0')): ?><?php comments_template( '', true ); ?><?php endif; ?>

	<div class="clearfix"></div>

	<?php get_footer(); ?>