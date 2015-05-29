<?php
class Pages extends CI_Controller{
	public function view($page='home')
	{		#페이지가 있냐 없냐.
		if (!file_exists('application/views/pages/'.$page.'.php')) {
			show_404();
		} 
		$data['title'] = ucfirst($page);//Capitalize first letter

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer',$data);



	}
}