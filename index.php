<?php
  $f3 = require 'fatfree-master/lib/base.php';
  require 'setup.php';
  require 'printer.php';

  class Greeting{
	function get(){
		echo '<h2>Printer Server Version 0.1.0</h2><br>';
	}
  }
  
  if(!initprinter($printer)){
	echo "Could not init Printer";
  }

  $f3->map('/', 'Greeting');
  $f3->map('/print', 'Printer');

  $f3->run();

