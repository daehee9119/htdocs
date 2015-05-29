<?php
class Topic_model extends CI_Model {
	/*CI_Model 이나 CI_Controller 같은 것은 반드시 상속해야 한다!*/

	function __construct(){
		parent::__construct();
		$runners = array();//디비 리턴값 저장용 배열
	}

	public function gets(){
		/*db라는 이름은 하나의 인스턴스이디ㅏ*/
		return $this->db->query('SELECT * FROM house')->result_array();
		/*배열로 리턴할려면 result_array() 원래 result() 이거임*/
	}

	public function get(){
		/*active record식으로 코딩한것! logical하게 작업할 수 있다*/
		//return $this->db->get_where('topic', array('date'=>$topic_id))->row();
		return $this->db->query('SELECT * FROM house WHERE date = 201501')->result_array();
	}
}


?>