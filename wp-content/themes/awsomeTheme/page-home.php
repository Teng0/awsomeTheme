<?php  get_header(); ?>
<div class="row">
	<div class="col-sm-12">
	
	<?php 

		$args_cat = array(

			"include" =>"4,5,6"
		);
		$categorys = get_categories( $args_cat );

		
			foreach ($categorys as $category) {

				$args = array(
					"type" => "post",
					"posts_per_page"=>1,
					"category__in"=> $category->term_id,
					"category__not_in" => array(10)

			);
			
			$lastBlog = new WP_Query ($args);

			if( $lastBlog -> have_posts()) : 
			while($lastBlog -> have_posts()) : 
				$lastBlog->the_post();  
			get_template_part("content", "featured");
						
			endwhile;endif;

			wp_reset_postdata();



			}

			
			?>
	</div>
</div>
<?php get_footer(); ?>

