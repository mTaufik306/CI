<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index() 
	{	
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		
		$this->email->from('ci.series.test@gmail.com', '306');
		$this->email->to('ci.series.test@gmail.com');		
		$this->email->subject('This is an email test');		
		$this->email->message('It is working. Great!');
		
		$path = $this->config->item('server_root');
		$file = $path . '/CI/attachment/yourInfo.txt';
		
		$this->email->attach($file);
		
		if($this->email->send())
		{
			echo 'Your email was sent, thanks.';
		}
		
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}


      