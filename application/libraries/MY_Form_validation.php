<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends  CI_Form_validation
{
	function test() {
		echo "testing the extended Form Validation library";
	}

	function strong_pass($value, $params) {

		$this->CI->form_validation->set_message('strong_pass',
			'The %s is not strong enough');
		$score = 0;
		if(preg_match('!\d!', $value))
			$score++;
		if(preg_match('![A-z]!', $value))
			$score++;
		if(preg_match('!\W!', $value))
			$score++;
		
		if(strlen($value) >= 8)
			$score++;

		if($score < $params)
			return false;
		else
			return true;

	}
	

}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
