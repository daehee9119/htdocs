<?php
class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('task_model');
		$this->load->model('user_model');
	}


	public function index($pageNum=FALSE)
	{
		//The number(limit) of tasks to list at one time.
		$data['limit']=10;
			
		if($pageNum===FALSE){
		$pageNum=1;
		$taskNum=1;
		}else{$taskNum=($pageNum-1)*$data['limit']+1;}
		$data['pageNum']=$pageNum;
		
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			if ($this->ion_auth->in_group('dev')){
				$data['task'] = $this->task_model->get_dev_task();
				$this->load->view('other_page_header',$data);
				$this->load->view('task/dev/index',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('mentor')){
				$data['task'] = $this->task_model->get_mentor_task(0);
				$this->load->view('other_page_header',$data);
				$this->load->view('task/mentor/index',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')){
				$data['task'] = $this->task_model->get_task($taskNum,$data['limit']);
				$data['counts']=$this->task_model->get_count();
				
				$this->load->view('other_page_header',$data);
				$this->load->view('task/super/index',$data);
				$this->load->view('templates/footer');
			}
			else {
				$data['task'] = $this->task_model->get_task($id);
				$this->load->view('other_page_header',$data);
				$this->load->view('task/manager/index', $data);
				$this->load->view('templates/footer');
			}
		}

		else{
		 	redirect('', 'refresh');
		}
	}

	public function send()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
			$data['user'] = $this->user_model->get_user($id);
			if ($this->ion_auth->in_group('dev')){
				$this->load->view('other_page_header',$data);
				$data['task'] = $this->task_model->get_join_task();
				$this->load->view('task/dev/send',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('mentor')){
				$this->load->view('other_page_header',$data);
				$data['task'] = $this->task_model->get_mentor_task(1);
				$this->load->view('task/mentor/send',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')) {
				$data['task'] = $this->task_model->get_wait_task();
				$this->load->view('other_page_header',$data);
				$this->load->view('task/super/send',$data);
				$this->load->view('templates/footer');
			}
			else {
				$data['task'] = $this->task_model->get_wait_task($id);
				$this->load->view('other_page_header',$data);
				$this->load->view('task/manager/send',$data);
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
			$id=$this->ion_auth->get_user_id();
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('dev')) {
				$data['task'] = $this->task_model->get_all_dev_task();
				$this->load->view('other_page_header',$data);
				$this->load->view('task/dev/progress',$data);
				$this->load->view('templates/footer');
			}
			else if ($this->ion_auth->in_group('super')){
				$this->load->view('other_page_header',$data);
				$data['task'] = $this->task_model->get_task();
				$this->load->view('task/super/progress',$data);
				$this->load->view('templates/footer');
			}
			else {
				$this->load->view('other_page_header',$data);
				$data['task'] = $this->task_model->get_task($id);
				$this->load->view('task/manager/progress',$data);
				$this->load->view('templates/footer');
			}
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}	

	public function create(){
		$this->load->library('form_validation');
		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]');
		$this->form_validation->set_rules('desc', 'Desc', 'required|min_length[5]');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			$this->session->set_flashdata('error',validation_errors());
			redirect('task','refresh');
			//$this->load->view('templates/footer');
		}
		else{
			$this->task_model->set_task();
			redirect('task', 'refresh');
			}

	}//end funciton

	public function update(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			redirect('task', 'refresh');
			//$this->load->view('templates/footer');
		}
		else{
			$this->task_model->update_task();
			redirect('task', 'refresh');
		}
	}



	public function stop_rel(){
		$this->load->helper('form');
		$this->task_model->st_rel_task();
		redirect('task', 'refresh');
	}

	public function comment(){
		$this->load->helper('form');
		$this->task_model->comment_task();
		redirect('task', 'refresh');
	}

	public function delete($id){
		$this->task_model->delete_task($id);
		redirect('task', 'refresh');
	}

	public function join()
	{
		if ($this->ion_auth->logged_in()){
			$this->task_model->join_task();
			redirect('task', 'refresh');
		}
		else{
		 	redirect('', 'refresh');
		}
	}

	public function unjoin()
	{
		if ($this->ion_auth->logged_in()){
			$this->task_model->unjoin_task();
			redirect('task/send', 'refresh');
		}
		else{
		 	redirect('', 'refresh');
		}
	}

	public function send_work()
	{
		if ($this->ion_auth->logged_in()){
			$this->task_model->send_work_task();
			redirect('task/send', 'refresh');
		}
		else{
		 	redirect('', 'refresh');
		}
	}

	public function com_work()
	{
		if ($this->ion_auth->logged_in()){
			$this->task_model->com_work_task();
			redirect('task/send', 'refresh');
		}
		else{
		 	redirect('', 'refresh');
		}
	}

	public function reject()
	{
		if ($this->ion_auth->logged_in()){
			$this->task_model->reject_task();
			redirect('task/send', 'refresh');
		}
		else{
		 	redirect('', 'refresh');
		}
	}
}