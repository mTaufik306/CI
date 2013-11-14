<?php
class Files extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('file');
	}
	
	function write_test() {
		$data = "Hello World!";
		//this is for windows user only:
		//$file = "application\test_files\hello.txt";

		//this is what make it universal:
		$file = "application".DIRECTORY_SEPARATOR.
				"test_files".DIRECTORY_SEPARATOR.
				"hello.txt";
		//directory_separator is the one who generate the separator,
		// "\" for windows, "/" for unix
		write_file($file,$data);
		echo "finished writing";
	}
	
	

}




