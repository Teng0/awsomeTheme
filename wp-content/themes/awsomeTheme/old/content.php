			<?php the_post_thumbnail('thumbnail'); echo get_post_format()?>
	
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="short"><?php the_content('');?></div>	
		<a href="<?php the_permalink() ?>">იხილეთ სრულად</a>
		<br>
		<small>Posted on : <?php  the_time("Y,F j")?>at <?php the_time("g:i,a")?> in  ,<?php the_category() ?></small>	