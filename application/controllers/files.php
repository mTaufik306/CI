<?php
class Files extends CI_Controller {
	
	var $file;
	var $path;

	function __construct() {
		parent::__construct();
		//loading the helper when the model is loaded
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		//this is for windows user only:
		//$file = "application\test_files\hello.txt";
		$this->path = "application".DIRECTORY_SEPARATOR.
				"test_files".DIRECTORY_SEPARATOR;
		$this->file = $this->path."hello.txt";

		//this is what make it universal:
		//directory_separator is the one who generate the separator,
		// "\" for windows, "/" for unix
	}
	
	function write_test() {
		$data = "Hello World!";
		
		//'a' in the 3rd parameter of write_file means append
		//ini membuat string yang diinsert pada file ditambahkan diakhir file
		//'r' reading mode, so nothing will be inserted
		//'x' exclusive write, menulis pada file hanya jika filenya tidak ada (belum dibuat)
		write_file($this->file,$data,'a');
		echo "finished writing";
	}

	function read_test(){
		//$string will have contain of the file from the given file path
		$string = read_file($this->file);
		echo $string;
	}

	function filenames_test(){
		//it returns an array
		//3rd param default value: false
		//3rd param: true will get full path of the file
		$files = get_filenames($this->path,TRUE);
		print_r($files);
	}
	
	

}




