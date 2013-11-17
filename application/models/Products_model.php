<?php
class Products_model extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('products')->result();//select * products
		
		foreach ($results as &$result) {//passing by reference/address
			
			if ($result->option_value) {
			    //split string into array of the substring without ','
				$result->option_value = explode(',',$result->option_value);//strtok
			}	
		}
		
		return $results;
		
	}

	function get($id) {
		
		$results = $this->db->get_where('products', array('id' => $id))->result();
		$result = $results[0];
		
		if ($result->option_value) {
			$result->option_value = explode(',',$result->option_value);
		}
		
		return $result;
	}
	
}
