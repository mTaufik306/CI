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
}