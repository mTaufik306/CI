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
	}
}