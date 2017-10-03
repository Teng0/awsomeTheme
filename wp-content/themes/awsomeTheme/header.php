<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<?php wp_head(); ?>
	</head>

 <?php  
 	if (is_front_page() ): 
 		$awsome_class = array("myClass","awsomeClass");
 	else :
 		$awsome_class = array("noMyClass");
 	endif;
 ?>

	<body <?php body_class( $awsome_class );?>>
	
	<?php wp_nav_menu(array("theme_location"=>"primary"));?>