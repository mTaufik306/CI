<?php 
class MY_Profiler extends CI_Profiler {

	public function run()
	{	
		$output = "<div id='codeigniter_profiler' style='clear:both;background-color:#fff;padding:10px;'>";
		
		$output .= $this->_compile_uri_string();
		$output .= $this->_compile_controller_info();
		$output .= $this->_compile_memory_usage();
		$output .= $this->_compile_benchmarks();
		$output .= $this->_compile_get();
		$output .= $this->_compile_post();
		$output .= $this->_compile_queries();

		$output .= '</div>';

		$output = '<?php if($_SERVER[\'REMOTE_ADDR\'] != \'::1\') exit();?>'
		    .$output;

		file_put_contents(BASEPATH.'/logs/profiler.php', $output);
		// return $output;
		return 'Profiler file has been generated in system/logs/';
	}

	function _compile_memory_usage()
	{
		$output  = "\n\n";
		$output .= '<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">';
		$output .= "\n";
		$output .= '<legend style="color:#5a0099;">&nbsp;&nbsp;'.$this->CI->lang->line('profiler_memory_usage').'&nbsp;&nbsp;</legend>';
		$output .= "\n";

		if (function_exists('memory_get_usage') && ($usage = memory_get_usage()) != '')
		{
			$output .= "<div style='color:#5a0099;font-weight:normal;padding:4px 0 4px 0'>".number_format($usage).' bytes</div>';
			$output .= "<div style='color:#5a0099;font-weight:normal;padding:4px 0 4px 0'>".number_format(memory_get_peak_usage()).' bytes (peak)</div>';
		}
		else
		{
			$output .= "<div style='color:#5a0099;font-weight:normal;padding:4px 0 4px 0'>".$this->CI->lang->line('profiler_no_memory')."</div>";
		}

		$output .= "</fieldset>";

		return $output;
	}
}