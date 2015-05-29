<?php
class Task_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	//@@ min : first number of task to list.
	//@@ max : last number of task to kist.
	public function get_task($min,$max){
		
		$query = $this->db->order_by('create_date','DESC')->limit($max,$min-1)->get('task');
		return $query->result_array();
		}

	

	//TODO JEONGMAN
	public function get_count($slug=FALSE)
		{
		if($slug===FALSE){
			$query=$this->db->get('task');
			return $query->num_rows();
		}
		}

	public function get_mentor_task($slug = FALSE){
		if ($slug === FALSE){
		$query = $this->db->get('task');
		return $query->result_array();
		}

		if($slug==0){
			$query = $this->db->get_where('task','type != 1 and comment_stat=0');
		}
		else $query = $this->db->get_where('task','comment_stat !=0 and mentor_ID = '.$this->ion_auth->user()->row()->id);
		return $query->result_array();
	}

	public function get_dev_task($slug = FALSE){
		$userid=$this->ion_auth->user()->row()->id;
		$query = $this->db->get_where('task','type = 0 and dev_ID = 0');
		return $query->result_array();
	}

	public function get_all_dev_task($slug = FALSE){
		$userid=$this->ion_auth->user()->row()->id;
		$query = $this->db->get_where('task','(type = 0 and dev_ID = 0 ) or dev_ID ='.$userid);
		return $query->result_array();
	}

	public function get_join_task($slug = FALSE){
		$userid=$this->ion_auth->user()->row()->id;
		$query = $this->db->get_where('task','type != 2 and dev_ID = '.$userid);
		return $query->result_array();
	}

	public function get_wait_task($slug = FALSE){
		if ($slug === FALSE){
			$query = $this->db->get_where('task','type = 4');
			return $query->result_array();
		}

		$query = $this->db->get_where('task','type = 4 and owner_ID = '.$slug);
		return $query->result_array();
	}
	
	public function set_task(){
		$this->load->helper('url');
		
	
		$userid=$this->ion_auth->user()->row()->id;
		date_default_timezone_set('asia/seoul'); 
		$data = array(
			'name' => $this->input->post('name'),
			'desc' => $this->input->post('desc'),
			'create_date' => date("Y-m-d H:i:s"),
			'last_update_date' => date("Y-m-d H:i:s"),
			'release_date' => date("Y-m-d H:i:s"),
			'owner_ID' => $userid,
			'owner_name' => $this->ion_auth->user()->row()->first_name." ".$this->ion_auth->user()->row()->last_name,
			'type' => $this->input->post('type')
		);
			
		$this->db->trans_begin();
		$this->db->insert('task', $data);
		
		if(($this->db->trans_status())===FALSE||!$this->do_upload()){
			$this->db->trans_rollback();		
			$this->session->set_flashdata('titles',$this->input->post('name'));
			$this->session->set_flashdata('desc',$this->input->post('desc'));
			
			$this->session->set_flashdata('error',$this->upload->display_errors());
			
			}else{//when successful!!
		$this->db->trans_commit();
				}
	}

//upload(multi upload enabled if there are multi files as an array type )
private function do_upload(){
$this->load->library('upload');
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '100';
$config['max_width'] = '1024';
$config['max_height'] = '768';
$files =$_FILES;
//count of upload files
$cpt= count($_FILES['userfile']['name'],true);
for($i=0;$i<$cpt;$i++)
{
	  $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];

$this->upload->initialize($config);
	
	if($_FILES['userfile']['name']!='')
{	
	//this work only if there are files to upload
	if ( ! $this->upload->do_upload())
	{
	return false;
	}
		
}
}//end for
return true;
}//END FUNCTION DO_UPLOAD



	public function update_task(){
		$data = array(
               'name' => $this->input->post('name'),
               'desc' => $this->input->post('desc'),
               'last_update_date' => date("Y-m-d H:i:s"),
               'release_date' => date("Y-m-d H:i:s"),
               'type' => $this->input->post('type')
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('id'));
	}

	public function delete_task($id){
		$this->db->delete('task', array('id' => $id));
	}

	public function st_rel_task(){
		$data = array(
               'type' => $this->input->post('type')
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('test'));
	}

	public function comment_task(){
		$data = array(
               'comment' => $this->input->post('comment'.$this->input->post('id')),
               'comment_stat' => $this->input->post('comment_stat')
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('id'));
	}
	public function join_task(){
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
               'dev_ID' => $userid
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('join'));
	}
	public function unjoin_task(){
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
               'dev_ID' => 0,
               'type' => 0
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('join'));
	}

	public function send_work_task(){
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
               'type' => 4
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('id'));
	}

	public function com_work_task(){
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
               'type' => 2
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('id'));
	}

	public function reject_task(){
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
               'type' => 3,
               'reject' => $this->input->post('reason')
            );

		$this->db->update('task', $data, "ID = ".$this->input->post('id'));
	}
}