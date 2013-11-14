<?php
class Shop extends CI_Controller {
	
	function index() {
		

		$this->load->model('Products_model');
		
		//retrieve all items in cart from the database
		$data['products'] = $this->Products_model->get_all();
		
		$this->load->view('products', $data);
	}
	
	
	
}
