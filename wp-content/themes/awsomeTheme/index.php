<?php  get_header(); ?>

<div class="row">
	<div class="col-xs-12">
		<?php 

		$lastBlog = new WP_Query ('tyoe=post&post_per_page=1');

		if(have_posts()) : 
		while(have_posts()) : 
			the_post();  
		get_template_part("content", get_post_format());
					
		endwhile;endif;
		?>
<?php  if(have_posts()) : 
		while(have_posts()) : 
			the_post();  ?>

				<div class="posts">
		
					
					<?php get_template_part("content", get_post_format());?>
					
				</div>

<?php  endwhile; else :?>
	<p><?php esc_html_e("Sorry no posts")?></p>
<?php endif; ?>
<?php get_footer(); ?>

