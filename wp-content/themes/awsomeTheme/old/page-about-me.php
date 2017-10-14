<?php  get_header(); ?>

<?php  if(have_posts()) : 
		while(have_posts()) : 
			the_post();  ?>

		
		<div class="short"><?php the_content('');?></div>	
	
	
	</div>

<?php  endwhile; else :?>
	<p><?php esc_html_e("Sorry no posts")?></p>
<?php endif; ?>

<?php get_footer(); ?>