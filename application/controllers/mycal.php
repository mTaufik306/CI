<?php
class Mycal extends CI_Controller {
	
	function display() {
		$year = $this->uri->segment(3);
		$month = $this->uri->segment(4);
		$config = array(
			'start_day' => 'monday',
			'show_next_prev' =>true,
			'next_prev_url' => base_url().'mycal/display'
		);

		
		$this->load->library('calendar',$config);
		echo $this->calendar->generate($year,$month);
	}
	
}
