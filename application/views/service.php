<?php
class Service{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('footer');
	}
/*
	$runners = array();//json으로 고칠 파일임
	
	while($row=mysql_fetch_array($result, MYSQL_ASSOC)){	
			array_push($runners, array(	 'date'=>$row['date'],
										 'Jongno_Gu'=>$row['Jongno_Gu'],
										 'Joong_Gu'=>$row['Joong_Gu'],
										 'Yongsan_Gu'=>$row['Yongsan_Gu'],
										 'Seongdong_Gu'=>$row['Seongdong_Gu'],
										 'Gwangjin_Gu'=>$row['Gwangjin_Gu'],
										 'Dongdaemun_Gu'=>$row['Dongdaemun_Gu'],
										 'Joongrang_Gu'=>$row['Joongrang_Gu'],
										 'Seongbuk_Gu'=>$row['Seongbuk_Gu'],
										 'Gangbuk_Gu'=>$row['Gangbuk_Gu'],
										 'Dobong_Gu'=>$row['Dobong_Gu'],
										 'Nowon_Gu'=>$row['Nowon_Gu'],
										 'Eunpyeong_Gu'=>$row['Eunpyeong_Gu'],
										 'Seodaemun_Gu'=>$row['Seodaemun_Gu'],
										 'Mapo_Gu'=>$row['Mapo_Gu'],
										 'Yangcheon_Gu'=>$row['Yangcheon_Gu'],
										 'Gangseo_Gu'=>$row['Gangseo_Gu'],
										 'Gooro_Gu'=>$row['Gooro_Gu'],
										 'Geumcheon_Gu'=>$row['Geumcheon_Gu'],
										 'Youngdeungpo_Gu'=>$row['Youngdeungpo_Gu'],
										 'Dongjak_Gu'=>$row['Dongjak_Gu'],
										 'Gwanak_Gu'=>$row['Gwanak_Gu'],
										 'Seocho_Gu'=>$row['Seocho_Gu'],
										 'Kangnam_Gu'=>$row['Kangnam_Gu'],
										 'Songpa_Gu'=>$row['Songpa_Gu'],
										 'Kangdong_Gu'=>$row['Kangdong_Gu'])
			);
	}*/
	/*
	for($i=0;$i<count($topics);$i++){
			array_push($runners, array(	 'date'=>$topics['date'],
										 'Jongno_Gu'=>$topics['Jongno_Gu'],
										 'Joong_Gu'=>$topics['Joong_Gu'],
										 'Yongsan_Gu'=>$topics['Yongsan_Gu'],
										 'Seongdong_Gu'=>$topics['Seongdong_Gu'],
										 'Gwangjin_Gu'=>$topics['Gwangjin_Gu'],
										 'Dongdaemun_Gu'=>$topics['Dongdaemun_Gu'],
										 'Joongrang_Gu'=>$topics['Joongrang_Gu'],
										 'Seongbuk_Gu'=>$topics['Seongbuk_Gu'],
										 'Gangbuk_Gu'=>$topics['Gangbuk_Gu'],
										 'Dobong_Gu'=>$topics['Dobong_Gu'],
										 'Nowon_Gu'=>$topics['Nowon_Gu'],
										 'Eunpyeong_Gu'=>$topics['Eunpyeong_Gu'],
										 'Seodaemun_Gu'=>$topics['Seodaemun_Gu'],
										 'Mapo_Gu'=>$topics['Mapo_Gu'],
										 'Yangcheon_Gu'=>$topics['Yangcheon_Gu'],
										 'Gangseo_Gu'=>$topics['Gangseo_Gu'],
										 'Gooro_Gu'=>$topics['Gooro_Gu'],
										 'Geumcheon_Gu'=>$topics['Geumcheon_Gu'],
										 'Youngdeungpo_Gu'=>$topics['Youngdeungpo_Gu'],
										 'Dongjak_Gu'=>$topics['Dongjak_Gu'],
										 'Gwanak_Gu'=>$topics['Gwanak_Gu'],
										 'Seocho_Gu'=>$topics['Seocho_Gu'],
										 'Kangnam_Gu'=>$topics['Kangnam_Gu'],
										 'Songpa_Gu'=>$topics['Songpa_Gu'],
										 'Kangdong_Gu'=>$topics['Kangdong_Gu'])
			);
	}
	*/
	//echo json_encode(array("topics"=>$topics));
	//echo json_encode(array("runners"=>$runners));*/
}
?>