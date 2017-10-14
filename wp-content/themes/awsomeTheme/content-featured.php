	<article  id="post-<?php the_ID()?>" <?php post_class();?> >
		<?php  if(have_posts()):?>
			<div class="thumbnail"> <?php the_post_thumbnail("thumbnail");?></div>
		<?php  else :?>
		<?php  the_title(printf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink( )), '</a></h1>'));?>
	<?php endif;?>
	</article>