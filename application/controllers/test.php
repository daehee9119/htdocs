<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
	/*controller는 url을 맵핑할 뿐!*/
	/*index는 특별히 뭐 안적어도 호출된다!*/
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('test_model');
    }

    function index(){
        $this->load->helper('url');
        $listr = $this->test_model->get_rlist();
        $listb = $this->test_model->get_blist();
        $this->load->view('main_mis', array('listr'=>$listr, 'listb'=>$listb));
        
	}

    function write(){
        $this->load->view('writeView');
    }

    function writepost($id){
        $data['result'] = $this->test_model->writePost($id);
    }

    function view($no, $num1){
        $num = (int)$num1;
        if($num==1){
            $data['item'] = $this->test_model->get_bitem($no);
            $this->load->view('get_mis', $data);
        } else if($num==2){
            $data['item'] = $this->test_model->get_ritem($no);
            $this->load->view('get_mis', $data);
        }
    }

}
?>