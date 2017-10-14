usefull.php

<?php  

	$args = array(
		'type'=>'post',
		'post_per_page' => 1,
		'cat'=>4
	);
	$noLastPost = new WP_Query($args);


if($noLastPost->have_posts()) : 
		while($noLastPost->have_posts()) : 
			$noLastPost->the_post();  ?>

				<div class="posts">
		
					
					<?php get_template_part("content", get_post_format());?>
					
				</div>

<?php  endwhile; else :?>
	<p><?php esc_html_e("Sorry no posts")?></p>
<?php endif ?>;