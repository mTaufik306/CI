<?php
class Mycal extends CI_Controller {
	
	function display() {
		
		$this->load->library('calendar');
		echo $this->calendar->generate();
		
	}
	
}
