<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
self-made library must build in file with 1st letter in capital for the file name 
*/
class Foo
{
  /**
	this global variabel means super CI object, it's needed to be able to load system library 
  */
  protected 	$ci;

	public function __construct()
	{
        $this->ci =& get_instance();//get instance is CI function and return super object
	}

	function test($value) {
		echo "You pass me $value. <br/>";
		// $this->load->library('Config');
		$this->ci->load->library('config');

		echo "Your language is: ".$this->ci->config->item('language');
	}

	

}

/* End of file Foo.php */
/* Location: ./application/libraries/Foo.php */
