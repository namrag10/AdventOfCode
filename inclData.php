<?php

function getData($String = False){
	$data = explode("\n", file_get_contents("data.txt"));

	if(!$String) return $data;
	$data = array_map(function($i){
		return intval($i);
	}, $data);

	return $data;
}