<?php

class Site_model extends CI_Model {
	
	function get_records()
	{
		$query = $this->db->get('post');
		return $query->result();
	}
	
	function add_record($data) 
	{
		$this->db->insert('post', $data);
		return;
	}
	
	function update_record($data) 
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->update('post', $data);
	}
	
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('post');
	}
	
}