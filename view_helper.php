<?php 
	function link_class( $match_string ) {
		$uri = $_SERVER["REQUEST_URI"];
		if( $match_string == $uri ) {
			echo "active";
		} else {
			echo "inactive";
		}
	}
?>
