<?php
class Shop extends CI_Controller {
	
	function index() {
		

		$this->load->model('Products_model');
		
		//retrieve all items in cart from the database
		$data['products'] = $this->Products_model->get_all();
		
		$this->load->view('products', $data);
	}
	
	function add() {

		/**
			this function will read the product that is added to cart, then
			retrieve product info from the database, after that
			get the product info into shopping cart library of CI
		*/
		$this->load->model('Products_model');
		
		$product = $this->Products_model->get($this->input->post('id'));
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_value[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
	
		redirect('shop');//redirect to shop controller, same as $this->index
		//$this->index();
	}

	
	
}
