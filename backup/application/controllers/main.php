<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()  // load the model
	{
		parent::__construct();
		// $this->load->model('form_model');
		$this->load->model('edit_hp_model');
		$this->load->model('announcement_model');
		$this->load->model('user_model');
		
	}
	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			redirect('homepage', 'refresh');

		}else{
			$data['hp'] = $this->edit_hp_model->get_homepage();
			$data['announcement'] = $this->announcement_model->get_announcement();
		 	$this->load->view('home',$data);
			$this->load->view('templates/footer');
			 }
	}
	public function register()
	{
		$this->load->view('register');
		$this->load->view('templates/footer');
	}
	public function homepage()
	{

		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			$data['announcement'] = $this->announcement_model->get_announcement();
			if ($this->ion_auth->in_group('dev')){
				$this->load->view('main_header',$data);
				$this->load->view('developer_hp',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('mentor')){ 
				$this->load->view('main_header',$data);
				$this->load->view('mentor_hp',$data); 
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')){
				$this->load->view('main_header',$data);
				$this->load->view('super_manager_hp',$data);
				$this->load->view('templates/footer');
			} 
			else if ($this->ion_auth->in_group('admin')) 
				{
					$this->load->view('admin_hp');
					$this->load->view('templates/footer');
				}
			else {
				$this->load->view('main_header',$data);				
				$this->load->view('general_manager_hp',$data);
				$this->load->view('templates/footer');
			}
		} else{

			$data['hp'] = $this->edit_hp_model->get_homepage();
			$data['announcement'] = $this->announcement_model->get_announcement();
		 	$this->load->view('home',$data);
			$this->load->view('templates/footer');
		 	
		}
		// $this->load->view('profile');
	}
	public function task()
	{
			
		if ($this->ion_auth->logged_in())
		{	
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			if ($this->ion_auth->in_group('dev')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('developer_task');
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('mentor')){
			 $this->load->view('other_page_header',$data);
			 $this->load->view('mentor_task');
			 $this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('super_manager_task');
				$this->load->view('templates/footer');
			}
			else {
				$this->load->view('other_page_header',$data);
				$this->load->view('manager_task',$data);
				$this->load->view('templates/footer');
			}
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	
	public function send()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);

			if ($this->ion_auth->in_group('dev')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('developer_send');
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('mentor')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('mentor_send');
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('super_manager_send');
				$this->load->view('templates/footer');
			}
			else {
				$this->load->view('other_page_header',$data);
				$this->load->view('manager_send',$data);
				$this->load->view('templates/footer');
			}
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	public function progress()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('dev')) {
				$this->load->view('other_page_header',$data);
				$this->load->view('developer_progress');
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')){
				$this->load->view('other_page_header',$data);
				$this->load->view('super_manager_progress');
				$this->load->view('templates/footer');
			}
			else {
				$this->load->view('other_page_header',$data);
				$this->load->view('manager_progress',$data);
				$this->load->view('templates/footer');
			}
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}



	public function faq()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('other_page_header',$data);
			$this->load->view('FAQ',$data);
			$this->load->view('templates/footer');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_profile()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('other_page_header',$data);
			$this->load->view('edit_profile',$data);
			$this->load->view('templates/footer');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function admin()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('admin')) {
				$this->load->view('admin_hp',$data);
				$this->load->view('templates/footer');
			}else redirect('', 'refresh');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_hp()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('admin')) {
				$this->load->view('edit_hp',$data);
				$this->load->view('templates/footer');
			}
			else redirect('', 'refresh');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_faq()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('admin')){

			 $this->load->view('faq/edit',$data);
			 $this->load->view('templates/footer');
			}else redirect('', 'refresh');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	public function announcement()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			if ($this->ion_auth->in_group('super')){
				$this->load->view('other_page_header',$data);
			 $this->load->view('create_announcement');
			 $this->load->view('templates/footer');
			}
			else {
				$this->load->view('other_page_header',$data);
				$this->load->view('all_announcement');
				$this->load->view('templates/footer');
			}
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	public function edit_role()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('admin')){

				$this->load->view('edit_role',$data);
				$this->load->view('templates/footer');
			}else redirect('', 'refresh');
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */