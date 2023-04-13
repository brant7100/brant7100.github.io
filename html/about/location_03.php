<?include("../../include/sub-header.php");?>
<div class="conBox conBox01">
	<div class="auto">
		<div class="inquiry-tab tab04">
			<ul>
				<li><a href="location_01.php">본사</a></li>
				<li><a href="location_02.php">공장</a></li>
				<li class="on"><a href="location_03.php">물류센터</a></li>
				<li><a href="location_04.php">해외본부</a></li>
			</ul>
		</div>
		<div class="map-box">
			<div id="daumRoughmapContainer1623657114192" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1623657114192",
					"key" : "267xu",
					//"mapWidth" : "640",
					//"mapHeight" : "360"
				}).render();
			</script>
		</div>
		<div class="location-info">
			<p class="title">주소</p>
			<dl>
				<dt>도로명</dt>
				<!-- <dd>경기도 용인시 처인구 양지면 죽양대로 2136, 지상1층</dd> -->
				<dd>경기 평택시 유천로 49, 원진물류 평택</dd>
			</dl>
			<!-- <dl>
				<dt>지번</dt>
				<dd>경기 용인시 처인구 백암면 백암리 252-13</dd>
			</dl> -->
		</div>
	</div>
</div>
<?include("../../include/sub-footer.php");?>