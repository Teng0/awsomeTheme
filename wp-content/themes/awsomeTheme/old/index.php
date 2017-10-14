<?php  get_header(); ?>

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