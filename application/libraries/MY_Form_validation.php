<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends  CI_Form_validation
{
  protected 	$ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	function test() {
		echo "testing the extended Form Validation library";
	}
	

}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
