<?php
class Mycal extends CI_Controller {
	
	function display() {

		$year = $this->uri->segment(3);
		$month = $this->uri->segment(4);

		$this->load->model('mycal_model');
		$data['calendar']=$this->mycal_model->generate($year,$month);

		$this->load->view('mycal',$data);
		
	}
	
}
