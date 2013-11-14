<?php
class Cart_test extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	function add() {
		$data = array(
			'id' => '42',
			'name' => 'Shirt',
			'qty' => 17,
			'price' => 100.00,
			'options' => array('Size' => 'medium') 
		);
		$this->cart->insert($data);
		echo "add() called";
	}

}