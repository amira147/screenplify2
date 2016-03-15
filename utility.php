<?php

function truncate($string, $limit){
		// return 100;
	if(strlen($string) > $limit){
		return substr($string,0,$limit)."...";
	} 
	else{
		return $string;
	}
}

?>