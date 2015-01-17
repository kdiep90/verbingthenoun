<?php
	$csv = readCSV('noun.csv');
	$i = 0;
	$noun_arr = array();
	while ($csv) {
		$line = array_shift($csv);
		if (strtolower($line[0]) == 'endfile') {
			break;
		}				
		else if (strtolower($line[0]) != 'endfile') {
			$noun_arr[$i] = $line[0];
			
		}
		$i = $i + 1;
	}
	shuffle($noun_arr);
	echo $noun_arr[0];
?>
