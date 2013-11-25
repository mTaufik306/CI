<?php
class Films extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	function display($offset = 0) {
		$limit = 20;
		$this->load->model('film_model');
		$results = $this->film_model->search($limit, $offset);
		$data['films'] = $results['rows'];
		$data['num_result'] = $results['num_rows'];

		$this->load->view('films',$data);
	}

}