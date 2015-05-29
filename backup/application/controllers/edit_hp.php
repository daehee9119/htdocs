<?php
class Edit_hp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('edit_hp_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			
			if ($this->ion_auth->in_group('admin')){
				$data['hp'] = $this->edit_hp_model->get_homepage();
				$this->load->view('edit_hp/index',$data);
			}
			
			else {
				redirect('', 'refresh');
			}
		}
		else {
				redirect('', 'refresh');
			}

		
	}

	public function edit(){
		$this->load->helper('form');
		$data['title'] = 'Edit Homepage';
			$this->edit_hp_model->set_hp();
			redirect('edit_hp', 'refresh');
	}
	



}