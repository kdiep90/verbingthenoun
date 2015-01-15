<?php
	$txt = readTXT('verb.txt');
	$verb_arr = array();
	while ($txt) {
		
		$line = array_shift($txt);
		if (strtolower($line[0]) == 'endfile') {
			break;
		}				
		else if (strtolower($line[0]) != 'endfile') {
			$verb_arr[] = $line[1];
		}
		
	}
	$verb = array_rand($verb_arr, 1);
	echo $verb
?>
