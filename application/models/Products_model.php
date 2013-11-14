<?php
class Products_model extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('products')->result();//select * products
		
		foreach ($results as &$result) {//passing by reference/address
			
			if ($result->option_values) {
				$result->option_values = explode(',',$result->option_values);//strtok
				//split string into array of the substring without ','
			}	
		}
		
		return $results;
		
	}
	
}
