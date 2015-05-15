<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
	/*controller는 url을 맵핑할 뿐!*/
	/*index는 특별히 뭐 안적어도 호출된다!*/
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){
        $topics = $this->topic_model->gets();
        $this->load->view('head');
        $this->load->view('main');
        //$this->load->view('footer', array('topics'=>$topics));
        $this->load->view('footer', array('topics' => $topics));
        //$this->output
        //->set_content_type('application/json')
        //->set_output(json_encode(array('topics' => $topics)));
    }

    /*숫자에 따라 바꾸고 싶다 하면 $id를 통해 숫자를 컨트롤한다.*/
    
    function get($id){
        $topic = $this->topic_model->get($id);
        $this->load->view('head');
        $this->load->view('main');
        $this->load->view('footer', array('topic'=>$topic));
    }
}
?>