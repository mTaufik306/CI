<?php
class Mycal extends CI_Controller {
	
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

		$data['calendar']=$this->mycal_model->generate($year,$month);

		$this->load->view('mycal',$data);
		
	}
	
}
