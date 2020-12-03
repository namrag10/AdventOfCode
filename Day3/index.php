<?php

	require "../inclData.php";

	$data = getData();

	$map = [];

	foreach($data as $pos => $val){
		$val = trim($val);
		$map[$pos] = str_split($val);
	}
	
	
	function track($right, $down, $map){
		$trees = 0;
		$x = $right;
		for($y = $down; $y < sizeof($map); $y = $y + $down){
			
			if($map[$y][$x] == "#"){
				$trees++;
				$map[$y][$x] = "X";
			} else {
				$map[$y][$x] = "O";
			}
			$x = ($x + $right > sizeof($map[0]) -1) ? $x + $right - sizeof($map[0]) : $x + $right;
		}
		return $trees;
	}
    
	$total = track(1, 1, $map) * track(3, 1, $map) * track(5, 1, $map) * track(7, 1, $map) * track(1, 2, $map);


	echo $total;