<?php
class Test extends CI_Controller{
	
	function area_of_circle($radius = NULL) {

		$this->load->helper('math');

		if($radius == NULL)
			$radius=10;

		echo "A circle with radius $radius has area : ". circle_area($radius);
	}

	function show_mysql_date() {
		$this->load->helper('date');
		echo "Current data in mysql is: ". date_mysql();
	}

	function new_library() {
		$this->load->library('Foo');
		$this->foo->test('bar');
	}

	function form() {
		$this->load->library('Form_validation');
		$this->form_validation->test();
		$this->load->view('test_form');
	}

	function form_submit() {

		$this->load->library("Form_validation");
		$this->form_validation->set_rules('username', 'Username',
			'required|alpha_numeric|min_length[6]'
		);

		$this->form_validation->set_rules('password', 'Password',
			'required|min_length[6]|strong_pass[3]'
		);
		if(!$this->form_validation->run())
		{
			$this->load->view('test_form');		
		}
		else
			echo "success";
	}
}