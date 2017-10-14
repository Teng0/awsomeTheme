<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<?php wp_head(); ?>
		<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

 <?php  
 	if (is_front_page() ): 
 		$awsome_class = array("myClass","awsomeClass");
 	else :
 		$awsome_class = array("noMyClass");
 	endif;
 ?>

	<body <?php body_class( $awsome_class );?>>
	
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Awesome Theme</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
