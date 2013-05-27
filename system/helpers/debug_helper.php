<?php 
if (!function_exists('pr')) {

	function pr($data) {
		
		print"<pre>";print_r(var_dump($data));print"</pre>";
		
	}

}