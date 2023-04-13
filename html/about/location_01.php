<?include("../../include/sub-header.php");?>
<div class="conBox conBox01">
	<div class="auto">
		<div class="inquiry-tab tab04">
			<ul>
				<li class="on"><a href="location_01.php">본사</a></li>
				<li><a href="location_02.php">공장</a></li>
				<li><a href="location_03.php">물류센터</a></li>
				<li><a href="location_04.php">해외본부</a></li>
			</ul>
		</div>
		<div class="map-box">
			<div id="daumRoughmapContainer1611022839283" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1611022839283",
					"key" : "23yx5",
				}).render();
			</script>
		</div>
		<div class="location-info">
			<p class="title">주소</p>
			<dl>
				<dt>도로명</dt>
				<dd>경기도 안양시 동안구 부림로 188번길 8, 2~4F</dd>
			</dl>
			<dl>
				<dt>지번</dt>
				<dd>경기도 안양시 동안구 관양동 1366-8 청용아카데미</dd>
			</dl>
		</div>
	</div>
</div>
<?include("../../include/sub-footer.php");?>