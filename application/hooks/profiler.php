<?php
function profiler_hook(){
	/*this will do profiling*/
	$CI =& get_instance();
	$CI->output->enable_profiler(TRUE);
}