<?php  get_header(); 

/* 
	Template Name: Page No Tite
*/
?>

<?php  if(have_posts()) : 
		while(have_posts()) : 
			the_post();  ?>

				<div class="posts">
					<h1>THis is my Static Title</h1>
					<?php the_post_thumbnail('thumbnail');?>
		<div class="short"><?php the_content('');?></div>	
		
		<br>
		<small>Posted on : <?php  the_time("Y,F j")?>at <?php the_time("g:i,a")?> in  ,<?php the_category() ?></small>	
	</div>

<?php  endwhile; else :?>
	<p><?php esc_html_e("Sorry no posts")?></p>
<?php endif; ?>

<?php get_footer(); ?>