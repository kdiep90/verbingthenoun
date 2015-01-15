<?php
function readTXT($file){
	$file_handle = fopen($file, 'r');
	while (!feof($file_handle) ) {
		$line_of_text[] = file($file_handle,FILE_IGNORE_NEW_LINES);
	}
	fclose($file_handle);
	return $line_of_text;
}
?>
