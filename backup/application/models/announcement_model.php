<?php
class Announcement_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_announcement($slug = FALSE){
		if ($slug === FALSE){
		$query = $this->db->get('announcement');
		return $query->result_array();
		}

		$query = $this->db->get_where('announcement', array('owner_id' => $slug));
		return $query->row_array();
	}

	

	public function set_announcement(){
		$this->load->helper('url');
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
			'topic' => $this->input->post('topic'),
			'desc' => $this->input->post('desc'),
			'release_date' => date("Y-m-d H:i:s"),
			'owner_id' => $userid,
			'owner_name' => $this->ion_auth->user()->row()->first_name." ".$this->ion_auth->user()->row()->last_name
		);

		return $this->db->insert('announcement', $data);
	}

	public function delete_announcement($id){
		$this->db->delete('announcement', array('id' => $id));
	}

	
}