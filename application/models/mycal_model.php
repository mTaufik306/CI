<?php
class Mycal_model extends CI_Model {
	
	function generate($year, $month){
		$config = array(
			'start_day' => 'monday',
			'show_next_prev' =>true,
			'next_prev_url' => base_url().'mycal/display'
		);
		
		$this->load->library('calendar',$config);
		return $this->calendar->generate($year, $month);
	}
}
