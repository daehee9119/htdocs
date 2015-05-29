<?php
class Test_model extends CI_Model {
	/*CI_Model 이나 CI_Controller 같은 것은 반드시 상속해야 한다!*/

	function __construct(){
		parent::__construct();
	}

	public function get_blist(){
		/*db라는 이름은 하나의 인스턴스이디ㅏ*/

		return $this->db->query("SELECT * FROM testb")->result_array();
		/*배열로 리턴할려면 result_array() 원래 result() 이거임*/
	}

	public function get_rlist(){
		/*db라는 이름은 하나의 인스턴스이디ㅏ*/

		return $this->db->query("SELECT * FROM test")->result_array();
		/*배열로 리턴할려면 result_array() 원래 result() 이거임*/
	}

	public function get_bitem($no){
		$query = $this->db->from('testb')->where(array('no'=>$no));

		return $query->get()->row_array();
	}

	public function get_ritem($no){
		$query = $this->db->from('test')->where(array('no'=>$no));

		return $query->get()->row_array();
	}

	public function writePost($id){
		if($id==1){
			$this->content = $_POST['content'];
			$this->memo = $_POST['memo'];

			$this->db->insert('testb', $this);
		} else if($id==1){
			$this->content = $_POST['content'];
			$this->memo = $_POST['memo'];

			$this->db->insert('test', $this);
		}

	}


}


?>