<?php
function profiler_hook(){
	/*this will do profiling*/
	/*version 1 using php function*/
	// if($_SERVER['REMOTE_ADDR'] == '::1')
	// {
	// 	$CI =& get_instance();
	// 	$CI->output->enable_profiler(TRUE);
	// }


	/*version 2 using CI function*/
	$CI =& get_instance();

	if($CI->input->ip_address() == '::1')//::1 is IPV6 form of 127.0.0.1 a.k.a localhost
	{
		$CI =& get_instance();
		$CI->output->enable_profiler(TRUE);
	}
}