<?php
	class Upload extends CI_Controller {
				function __construct()
				{
				parent::__construct();
				$this->load->helper(array('form', 'url'));
				}
				function index()
				{
				$this->load->view('upload_form', array('error' => ' ' ));
				}

function do_upload()
{
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '100';
$config['max_width'] = '1024';
$config['max_height'] = '768';
$this->load->library('upload');
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
	if ( ! $this->upload->do_upload())
	{
	$error = array('error' => $this->upload->display_errors());
	$this->load->view('upload_form', $error);
	}	
}
}//end for
	
	$data = array('upload_data' => $this->upload->data());
	$this->load->view('upload_success', $data);
	

}//END FUNCTION DO_UPLOAD
}//END CLASS
?>