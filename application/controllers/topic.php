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
        $date = 201501;
        $topics = $this->topic_model->get_real($date);

        $this->load->view('main');
        
	}

    /*날짜에 따라 바꾸고 싶다 하면 $date를 통해 숫자를 컨트롤한다.*/
    function get_real($id){
    	header('Content-Type: application/x-json; charset=utf-8');
    	$id = urldecode($id);
        $result=$this->topic_model->get_real($id);

        $this->load->view('main');
    	$this->output->set_output(json_encode($result));
	}

    function get_traffic($id){
        header('Content-Type: application/x-json; charset=utf-8');
        $id = urldecode($id);
        $result=$this->topic_model->get_traffic($id);

        $this->load->view('main');
        $this->output->set_output(json_encode($result));
    }

    function get_chart($id){
        header('Content-Type: application/x-json; charset=utf-8');
        $id = urldecode($id);
        $result=$this->topic_model->get_chart($id);

        $this->load->view('main');
        $this->output->set_output(json_encode($result));
    }

    function get_json_gchart($y,$n){
        header('Content-Type: application/x-json; charset=utf-8');
        
        $result=$this->topic_model->get_like($y,$n);
        
        $this->output->set_output(json_encode($result));
    }
}
?>