<?php
class Announcement extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('announcement_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			if ($this->ion_auth->in_group('super')){
				$data['announcement'] = $this->announcement_model->get_announcement();
				$this->load->view('other_page_header',$data);
				$this->load->view('announcement/create_announcement',$data);
				$this->load->view('templates/footer');
			}
			
			else {
				$data['announcement'] = $this->announcement_model->get_announcement();
				$this->load->view('other_page_header',$data);
				$this->load->view('announcement/all_announcement', $data);
				$this->load->view('templates/footer');
			}
		}
		else {
				$data['announcement'] = $this->announcement_model->get_announcement();
				$this->load->view('no_login_header',$data);
				$this->load->view('announcement/all_announcement', $data);
				$this->load->view('templates/footer');
			}

		
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('topic', 'Topic', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			redirect('announcement', 'refresh');
			//$this->load->view('templates/footer');
		}
		else{
			$this->announcement_model->set_announcement();
			redirect('announcement', 'refresh');
		}
	}

	public function delete($id){
		$this->announcement_model->delete_announcement($id);
		redirect('announcement', 'refresh');
	}
	



}