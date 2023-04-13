<ul class="gnbList">	
	<li><a href="../about/about.php"><span>회사소개</span></a>
		<ul class="sub">
			<li><a href="../about/about.php"><span>비전과 미션</span></a></li>
			<li><a href="../about/ci.php"><span>C.I 소개</span></a></li>
			<li><a href="../about/history.php"><span>연혁</span></a></li>
			<li><a href="../about/ceo.php"><span>CEO 메시지</span></a></li>
			<li><a href="../about/location_01.php"><span>찾아오시는길</span></a></li>
		</ul>
	</li>
	<li><a href="../capacity/rnd.php"><span>핵심역량 및 인프라</span></a>
		<ul class="sub">
			<li><a href="../capacity/rnd.php"><span>R&D</span></a></li>
			<li><a href="../capacity/safety.php"><span>식품안전</span></a></li>
			<li><a href="../capacity/production.php"><span>생산</span></a></li>
			<li><a href="../capacity/distribution.php"><span>유통</span></a></li>
		</ul>
	</li>
	<li>
		<a href="../brand/brand.php"><span>브랜드안내</span></a>
			<ul class="sub">
				<li class="blind"><a href="../brand/brand_view.php?idx=1"><span>브랜드안내</span></a></li>
				<li><a href="../brand/brand_view.php?idx=1"><span>SASE</span></a></li>
				<li><a href="../brand/brand_view.php?idx=6"><span>사세버팔로</span></a></li>
				<!-- <li><a href="../brand/brand_view.php?idx=2"><span>홈술메이트</span></a></li>
				<li><a href="../brand/brand_view.php?idx=3"><span>CHIC'S</span></a></li> -->
			</ul>
		</a>
	</li>
	<li><a href="../../html/product/product_all.php"  data-title-eng="" data-sub=""><span>제품안내</span></a>
		<ul class="sub">
			<?
				$part_result = $db->select("id_part","where part_display_check='1' order by part_ranking asc, idx asc");
				while($part_row=@mysqli_fetch_object($part_result)){
			?>
			<li><a href="javascript:goGoods('1','<?=$part_row->idx;?>');"><span><?=$part_row->part_name;?></span></a></li>
			<?}?>
		</ul>
	</li>
	<li>
		<a href="../community/instagram.php"><span>홍보센터</span></a>
		<ul class="sub">
			<li><a href="../community/instagram.php"><span>SNS</span></a></li>
			<li><a href="../community/event.php"><span>이벤트</span></a></li>
			<li><a href="../community/news.php"><span>보도자료</span></a></li>
			<li><a href="../community/catalog.php"><span>카달로그</span></a></li>
		</ul>
	</li>
	<li>
		<a href="../customer/customer.php"><span>고객센터</span></a>
	</li>
</ul>