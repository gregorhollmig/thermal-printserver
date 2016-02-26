<?php

class Printer
{
    function get()
    {
        echo 'Use POST /print to print something<br>';
		echo 'curl --data \'{"lines":[{"line":"Das ist ein Test"},{"line":"Zweite Zeile"}]}\' http://192.168.1.109/print';

    }
    public function post()
    {
    	$jsondata = file_get_contents('php://input');
		$data = json_decode($jsondata, true);
		if($data === null){
			error_log("Could not decode data");
		}
		$i = 0;	 	
		foreach($data["lines"] as $line){
			printline($line["line"]);
	 		echo $line["line"]."\n";
			$i++;
	 	}
        echo 'Printed '.$i." lines\n";
    }
}
