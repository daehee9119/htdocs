<?php
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
				$data['user'] = $this->user_model->get_user($id);
				$this->load->view('other_page_header',$data);
				$this->load->view('user/edit',$data);
		}

		else{
		 	redirect('', 'refresh');
		}
	}

	public function role()
	{
		if ($this->ion_auth->logged_in())
		{
			if ($this->ion_auth->is_admin()){
				$data['user'] = $this->user_model->get_user();
			
				$this->load->view('user/role',$data);
			}
		}

		else{
		 	redirect('', 'refresh');
		}
	}

	
	public function update(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'first_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');

		if ($this->form_validation->run() === FALSE){
			redirect('user', 'refresh');
		}
		else{
			$this->user_model->update_user();
			redirect('user', 'refresh');
		}
	}

	public function set_role()
	{
		if ($this->ion_auth->logged_in())
		{
			if ($this->ion_auth->is_admin()){
				$this->user_model->set_role_user();
				$data['user'] = $this->user_model->get_user();
				$this->load->view('user/role',$data);
			}
		}

		else{
		 	redirect('', 'refresh');
		}
	}
}