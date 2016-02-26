<?php
$printer = '/dev/usb/lp0';
$fp = null;


function initprinter($printer){
	try
    {
    	global $fp;
		$fp=fopen($printer, 'w');
		return true;
	}
	catch (Exception $e){
		return false;
	}
}

function printline($line){
	$encodedline = iconv("UTF-8", "CP437", $line);
   	global $fp;
	fwrite($fp,$encodedline."\r");
}

function closeprinter(){
	fclose($fp);
    $fp = null;
}
