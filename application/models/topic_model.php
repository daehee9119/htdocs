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

	public function get_real($id){
		/*active record식으로 코딩한것! logical하게 작업할 수 있다*/
		if ($id!=null){		
			$d = (int)$id;
			$query= $this->db->get_where('house',array('date'=>$d));
			$result=array();
			if($query->result_array()){
				$result=$query->result_array();
				return $result;
			
			}else{
				return false;
			}
		}else {
			$id = 201501;
			$query= $this->db->get_where('house',array('date'=>$id));
			$result=array();
			if($query->result_array()){
				$result=$query->result_array();
				return $result;
			
			}else{
				return false;
			}
		}
	}

	public function get_traffic($id){
		/*active record식으로 코딩한것! logical하게 작업할 수 있다*/
		if ($id!=null){		
			$d = (int)$id;
			$query= $this->db->get_where('house_t',array('date'=>$d));
			$result=array();
			if($query->result_array()){
				$result=$query->result_array();
				return $result;
			
			}else{
				return false;
			}
		}else {
			$id = 201501;
			$query= $this->db->get_where('house_t',array('date'=>$id));
			$result=array();
			if($query->result_array()){
				$result=$query->result_array();
				return $result;
			
			}else{
				return false;
			}
		}
	}

	public function get_like($year,$name){
				 
		$namep=$name."p";//예측값 열 이름.	 
		$sql = "SELECT date,".$name.",".$namep." FROM chart WHERE date like '%".$year."%'";
		$query=$this->db->query($sql);
		
		$result=array();

		if($query->result_array()){
			$result=$query->result_array();	
			
			return $result;
		}else{
			echo "alert('ERROR IN MODEL!!')"; 
			return false;
		}
	}



}


?>