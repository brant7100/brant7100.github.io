	<div class="roundline">
		<img src="../../images/layout/footer-wave.png" alt="">
	</div>
	<footer id="footer" class="footer">
		<div class="auto">
			<div class="clearFix">
				<div class="addrWrap">
					<span class="fLogo"><img src="../../images/layout/f-logo.png" alt="" /></span>
					<div class="f-menu">
						<ul>
							<li><a href="../about/about.php">회사소개</a></li>
							<li><a href="../capacity/rnd.php">역량/인프라</a></li>
							<li><a href="../product/product_list.php?part_idx=1#page1&part_idx=1">제품소개</a></li>
							<li><a href="../community/instagram.php">홍보센터</a></li>
							<li><a href="../customer/inquiry.php">고객센터</a></li>
						</ul>
					</div>
					<address>
						<p>
							(주) 사세    대표이사 : 김광선    사업자등록번호 : 119-85-14431<br/>
							주소 : 14055, 경기도 안양시 동안구 부림로 188번길 8, 2~4F
						</p>
						<p class="copyright">Copyright(C) 2020 SASE. All Right Reserved.</p>
					</address>					
				</div>
				<div class="cs-wrap">
					<div class="csBox">
						<p class="title">Customer Service</p>
						<p class="tel">1522-4891</p>
						<div class="time">
							<p>평일 오전 09:00 ~ 오후 06:00</p>
							<p>점심 오후 12:00 ~ 오후 01:00</p>
							<p>토 / 일 / 공휴일 OFF</p>
						</div>
					</div>
					<div class="sns">
						<p class="title">SNS Information</p>
						<a href=""><img src="../../images/layout/icon-facebook.png" alt="" /></a>
						<a href=""><img src="../../images/layout/icon-instagram.png" alt="" /></a>
						<a href=""><img src="../../images/layout/icon-youtube.png" alt="" /></a>
						<!-- <a href=""><img src="../../images/layout/sns04.png" alt="" /></a> -->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="searchWrap">
		<div class="auto_w">
			<div class="table">
				<div class="tableCell">
					<form name="searchForm" method="get" action="/html/search/search.php" onsubmit="inputSendit();event.returnValue = false;">
					<div class="searchBox">
						<input type="text" name="search_order" class="w100" placeholder="찾으시는 제품 또는 검색어를 입력해주세요." onKeyDown="inputSendit();" />
						<a href="javascript:searchSendit();"><img src="/images/layout/icon_search_w.png" alt="" /></a>
					</div>
					</form>
				</div>
			</div>
			<a href="" class="btnClose"><img src="/images/layout/btn_search_close.png" alt="" /></a>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
function contactWrite(){
	var form=document.writeForm;
	if( form.name.value=="") {
		alert("이름을 입력해주세요.");
		form.name.focus();
	} else if( form.hp.value=="") {
		alert("휴대전화번호를 입력해주세요.");
		form.hp.focus();
	} else if( form.email.value=="") {
		alert("이메일을 입력해주세요.");
		form.email.focus();
	} else if( form.content.value=="") {
		alert("내용을 입력해 주십시오.");
		form.content.focus();
	} else {
		form.submit();			
	}
	
}

function searchSendit(){
	var form = document.searchForm;
	if(form.search_order.value==""){
		alert("검색어를 입력해주세요.");
		form.search_order.focus();
		return false;
	} else {
		form.submit();
	}
}

function inputSendit() {
   if(event.keyCode==13) { 
		searchSendit();
	}
}
</script>