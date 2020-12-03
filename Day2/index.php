<?php
	require "../inclData.php";

	$data = getData();

	$count = 0;

	foreach($data as $val){
		$min = substr($val, 0, strpos($val, "-")) - 1;
		$max = substr($val, strpos($val, "-") + 1, strpos($val, " ") - strpos($val, "-") - 1) - 1;
		$letter = substr($val, strpos($val, " ") + 1, 1);

		$code = substr($val, strpos($val, ":") + 2, strlen($val));


		$amount[0] = substr($code, $min, 1);
		$amount[1] = substr($code, $max, 1);


		if($amount[0] == $letter Xor $amount[1] == $letter) $count++;
}

	echo $count;