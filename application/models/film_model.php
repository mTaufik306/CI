<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Film_model extends CI_Model {

	function search($limit,$offset) {
		//result query
		$q = $this->db->select('FID, title, category, length, rating, price')
			->from('film_list')
			->limit($limit,$offset);
		$ret['rows'] = $q->get()->result();

		//count query
		//should set 2nd parameter into false to prevent auto backtick `
		//because with select(), every params is auto backticked by default
		//will not work if `count(*)`
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('film_list');
		$temp = $q->get()->result();
		$ret['num_rows'] = $temp[0]->count;

		return $ret;
	}	

}

/* End of file file_model.php */
/* Location: ./application/models/file_model.php */