<?php 

$data = explode("\n", file_get_contents("data.txt"));
$data = array_map(function($i){
	return intval($i);
}, $data);
$out = -1;
$done = false;
foreach($data as $val){
	foreach($data as $Sval){
		foreach($data as $Tval){
			if($val + $Sval + $Tval == 2020 && !$done){
				$out = $val * $Sval * $Tval;
				$done = true;
			}
		}
	}
}

echo $out;