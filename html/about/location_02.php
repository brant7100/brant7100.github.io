<?include("../../include/sub-header.php");?>
<div class="conBox conBox01">
	<div class="auto">
		<div class="inquiry-tab tab04">
			<ul>
				<li><a href="location_01.php">본사</a></li>
				<li class="on"><a href="location_02.php">공장</a></li>
				<li><a href="location_03.php">물류센터</a></li>
				<li><a href="location_04.php">해외본부</a></li>
			</ul>
		</div>
		<div class="map-box">
			<div id="daumRoughmapContainer1611023027602" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1611023027602",
					"key" : "23yx8",
				}).render();
			</script>
		</div>
		<div class="location-info">
			<p class="title">주소</p>
			<dl>
				<dt>도로명</dt>
				<dd>충청북도 진천군 덕산면 산수산단3로 11</dd>
			</dl>
			<dl>
				<dt>지번</dt>
				<dd>충북 진천군 덕산면 산수리 1072-1</dd>
			</dl>
		</div>
	</div>
</div>
<?include("../../include/sub-footer.php");?>