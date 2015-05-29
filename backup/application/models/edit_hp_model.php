<?php
class Edit_hp_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_homepage($slug = FALSE){
		if ($slug === FALSE){
		$query = $this->db->get('homepage');
		return $query->row_array();
		}
		return $query->row_array();
	}

	

	public function set_hp(){
		$this->load->helper('url');
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
			'head' => $this->input->post('hp-head'),
			 'task' => $this->input->post('hp-task'),
			 'send' => $this->input->post('hp-send'),
			 'progress' => $this->input->post('hp-progress'),
			 // About
			 // Slide1
			 'abtHead1' => $this->input->post('hp-about-head-1'),
			 'abtDesc1' => $this->input->post('hp-about-desc-1'),
			 'abtHead2' => $this->input->post('hp-about-head-2'),
			 'abtDesc2' => $this->input->post('hp-about-desc-2'),
			 'abtHead3' => $this->input->post('hp-about-head-3'),
			 'abtDesc3' => $this->input->post('hp-about-desc-3'),
			 // Slide2
			 'abtHead4' => $this->input->post('hp-about-head-4'),
			 'abtDesc4' => $this->input->post('hp-about-desc-4'),
			 'abtHead5' => $this->input->post('hp-about-head-5'),
			 'abtDesc5' => $this->input->post('hp-about-desc-5'),
			 'abtHead6' => $this->input->post('hp-about-head-6'),
			 'abtDesc6' => $this->input->post('hp-about-desc-6'),
			 // contact
			 'address' => $this->input->post('hp-address'),
			 'phone' => $this->input->post('hp-phone'),
			 'email' => $this->input->post('hp-email'),
			 // little contact icon
			 'facebook' => $this->input->post('hp-facebook'),
			 'twitter' => $this->input->post('hp-twitter'),
			 'googleplus' => $this->input->post('hp-googleplus')

			
		);
		//$this->db->where('id',1);
		$this->db->update('homepage',$data,'id = 1');
		
		//return $this->db->insert('homepage', $data);
	}

	
}