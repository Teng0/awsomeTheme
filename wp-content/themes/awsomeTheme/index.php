<?php  get_header(); ?>

<?php  if(have_posts()) : while(have_posts()) : the_post();  ?>

	<div class="posts">
		
		<?php the_post_thumbnail('thumbnail');?>
	
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="short"><?php the_content('');?></div>	
		<a href="<?php the_permalink() ?>">იხილეთ სრულად</a>
	</div>

<?php  endwhile; else :?>
	<p><?php esc_html_e("Sorry no posts")?></p>
<?php endif; ?>

<?php get_footer(); ?>