<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_user($slug = FALSE){
		if ($slug === FALSE){
		//$query = $this->db->get('users');
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('users.id != 1');
			$this->db->join('users_groups', 'users.id = users_groups.user_id','inner');
			$query = $this->db->get();

		return $query->result_array();
		}

		$query = $this->db->get_where('users', array('id' => $slug));
		return $query->row_array();
	}

	public function update_user(){
		if ($this->ion_auth->logged_in()){
			$userid=$this->ion_auth->user()->row()->id;
			$data = array(
               'first_name' => $this->input->post('first_name'),
               'last_name' => $this->input->post('last_name'),
               'phone' => $this->input->post('phone')
            );

			$this->db->update('users', $data, "id = ".$userid);
		}
	}
	public function set_role_user(){
		$data = array(
               'group_id' => $this->input->post('role')
            );
		$this->db->update('users_groups', $data, "user_id = ".$this->input->post('id'));
	}
}