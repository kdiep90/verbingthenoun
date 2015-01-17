<?php
	$csv = readCSV('verb.csv');
	$i = 0;
	$verb_arr = array();
	while ($csv) {
		$line = array_shift($csv);
		if (strtolower($line[0]) == 'endfile') {
			break;
		}				
		else if (strtolower($line[0]) != 'endfile') {
			$verb_arr[$i] = $line[0];
			
		}
		$i = $i + 1;
	}
	shuffle($verb_arr);
	echo $verb_arr[0];
	echo "ing the "

?>