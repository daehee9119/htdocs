		</div><!--wrap div end-->
		<div>
				
		<?php
		var_dump($topics);

		$gU = array("date",
			"Kangdong_Gu", "Songpa_Gu", "Kangnam_Gu", "Seocho_Gu", "Gwanak_Gu", "Dongjak_Gu", 
			"Youngdeungpo_Gu","Geumcheon_Gu", "Gooro_Gu", "Gangseo_Gu", "Yangcheon_Gu", "Mapo_Gu", 
			"Seodaemun_Gu", "Eunpyeong_Gu","Nowon_Gu", "Dobong_Gu", "Gangbuk_Gu", "Seongbuk_Gu", 
			"Joongrang_Gu", "Dongdaemun_Gu", "Gwangjin_Gu","Seongdong_Gu", "Yongsan_Gu", "Joong_Gu", 
			"Jongno_Gu"
			);
		for($i=0; $i<25; $i++){
			foreach($topics as $key){		
				$gU[$i] = $key[$gU[$i]];
			
				echo $gU[$i];
			}

		}
		?>
		<script>
			var temp = <?=$gU?>
			var count = 0;
			chartData[date] = temp->'date';
			for(var i=0;i<temp.length;i++){
				
				for(var j=0; j<temp[i].length-1; j++){
					count++;
					chartData[i][j] = temp[count+1];
				}
			}
		</script>

		</div>
		<!--<script type="text/javascript" src="../js/slider.js"></script>-->
		<script type="text/javascript" src="../js/seoul.js"></script>
		<script type="text/javascript" src="../js/chart.js"></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.min.js"></script>
		<script type="text/javascript" src="../js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="../leaflet/leaflet.js"></script>
		<script type="text/javascript" src="../js/spin.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>

	</body>
</html>