<?php
class Mycal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//profiling - Measuring system performance
		// $this->output->enable_profiler(TRUE);
	}

	function display() {

		$year = $this->uri->segment(3);
		$month = $this->uri->segment(4);

		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {
			$month = date('m');
		}

		$this->load->model('mycal_model');

		if ($day = $this->input->post('date')) {
			$this->mycal_model->add_calendar_data(
				"$year-$month-$day",//required format for the data to be passed as a date
				$this->input->post('memo')//required for the data to be passed as a memo
			);
		}

		$this->benchmark->mark('generate_start');
		$data['calendar']=$this->mycal_model->generate($year,$month);
		$this->benchmark->mark('generate_end');
		
		$this->load->view('mycal',$data);
		
	}
	
}
