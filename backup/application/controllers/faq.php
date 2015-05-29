<?php
class Faq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('faq_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['faq'] = $this->faq_model->get_faq();
		if ($this->ion_auth->logged_in())
		{
		
		$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
		$this->load->view('other_page_header',$data);
		$this->load->view('faq/index', $data);
		}
		else {
			$this->load->view('no_login_header');
		$this->load->view('faq/index', $data);

		}
	}

	public function edit(){
		$data['faq'] = $this->faq_model->get_faq();
		$this->load->view('faq/edit', $data);
	}

	public function edit10(){
		$this->faq_model->edit_10faq();
		redirect('faq/edit', 'refresh');
	}	
}