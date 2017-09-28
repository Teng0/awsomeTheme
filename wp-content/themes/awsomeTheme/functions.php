<?php 

	function awsome_script_eqnuenue(){

			wp_enqcueue_style("customstyle",get_tamplete_directory_uri()."/css/swsome.css",array(),"1.0.0","all");
	}
add_action("wp_enqcueue_scripts","awsome_script_eqnuenue");