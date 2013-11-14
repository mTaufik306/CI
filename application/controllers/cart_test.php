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

	function show() {
		$cart = $this->cart->contents();
		echo "<pre>";
			print_r($cart);
		
	}

	function add2() {
		$data = array(
			'id' => '32',
			'name' => 'Trouser',
			'qty' => 10,
			'price' => 150.00,
			'options' => array('Size' => 'medium') 
		);
		$this->cart->insert($data);
		echo "add2() called";		
	}

	function update() {

		$data = array(
			'rowid' => '6340d5159197cc92881e9570b81540fd',
			'qty' => 12
		);
		$this->cart->update($data);
	}

	function total() {
		echo $this->cart->total();
	}

	function remove() {
		$data = array(
			'rowid' => '6340d5159197cc92881e9570b81540fd',
			'qty' => 0
		);
		$this->cart->update($data);
		echo "deleted";

	}

	function destroy() {
		$this->cart->destroy();
		echo "destroyed";
	}

}