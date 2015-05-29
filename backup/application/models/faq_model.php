<?php
class Faq_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_faq($slug = FALSE){
		if ($slug === FALSE){
			$query = $this->db->get('faq');
			return $query->result_array();
		}

		$query = $this->db->get_where('faq', array('id' => $slug));
		return $query->row_array();
	}

	public function edit_10faq(){
		for($i=1;$i<11;$i++){
			$data = array(
               'question' => $this->input->post('qes'.$i),
               'answer' => $this->input->post('ans'.$i)
            );
			$this->db->update('faq', $data, "ID = ".$i);
		}
	}
}