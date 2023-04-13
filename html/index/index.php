<?include("../../include/header_test.php");?>

<style>


/* mainVisual */


.slick-slider,.slick-list,.slick-track,.slick-slide {height:100%;}

#mainVisual {width:100%;position: relative;overflow:hidden; height:auto;  margin-top:-20px; }
#mainVisual .video {height:100%;position:relative;}
/* #mainVisual .video .backcover {position:absolute;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,0.3);z-index:1;} */
#mainVisual .video video {position:relative;min-width:100%;min-height: 100%;/* top:50%;left:50%;transform:translate(-50%,-50%); */ width:100%;}
#mainVisual .video iframe {position:relative;min-width:100%;min-height: 100%;/* top:50%;left:50%;transform:translate(-50%,-50%); */ width:100%;}

#mainVisual .underline {position:absolute;bottom:0;left:0;width:100%;z-index:4;}
#mainVisual .underline img {vertical-align:bottom;}
#mainVisual .scroll {position:absolute;bottom:50px;left:50%;margin-left:-13px;z-index:1;}
#imgCover {position: absolute;left:0; top:0;width: 100%;height: 100%;background: url("../images/main/imgCover.jpg") 50% 50%;-webkit-background-size: cover;background-size: cover;z-index:1;}


#mainVisual .video{
	width:100%; 
     position: relative;
    padding-bottom: 56.25%; /* 16/9 ratio */
    padding-top: 30px; /* IE6 workaround*/
    height: 0;
    overflow: hidden;
    margin: 0;
  }
#mainVisual .video iframe,
#mainVisual .video object,
#mainVisual .video embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


@media (max-width: 640px){
#mainVisual {
    height: auto;
    margin-top: 50px;
}

}
</style>


<!-- <script>

function checkWindowSize() {  
    if ( $(window).width() > 640) { 
        $('#header').removeClass('scroll');  
        } else {  
        $('#header').addClass('scroll');  
    } 
}    
checkWindowSize()

</script>
 -->

	
	<div id="mainVisual" class="">
		<div class="video video1">
			<iframe  src="https://player.vimeo.com/video/816393383?autopause=false&autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=816393383&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;enablejsapi=1&amp;&amp;widgetid=1&background=1"></iframe>
		</div>
	</div>



	<!-- <div id="mainVisual" class="">
					<img src="../../images/main/sase_main_mobile2.jpg" alt="">
		
	
	</div> -->






	<a name="#products"></a>
	<div id="mainContents">
		<div class="conBox conBox01 fade">
			<div class="bg"></div>
			<div class="auto">
				<div class="title-wrap fadeIn fadeIn-01">
					<span class="en">ABOUT</span>
					<span class="kr">고객의 건강과 행복에 기여하는 <strong>글로벌 냉동식품 기업</strong></span>
				</div>
				<ul class="fadeIn fadeIn-02">
					<li>
						<a href="../about/history.php">
							<img src="../../images/main/conBox01-img01_4.jpg" alt="">
							<div class="txtBox">
								<dl>
									<dt>SINCE <strong>1997</strong></dt>
									<dd>
										30년 연혁을 이어오고 있는<br/>
										국내의 독보적인 선두주자
									</dd>
								</dl>
							</div>
						</a>
					</li>
					<li>
						<a href="../about/history.php">
							<img src="../../images/main/conBox01-img02_1.jpg" alt="">
							<div class="txtBox">
								<dl>
									<dt><strong>NO.1</strong></dt>
									<dd>
										14년 연속<br/>
										국내 수입 치킨 가공 1위 기업
									</dd>
								</dl>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="conBox conBox02 animated">
			<div class="auto">
				<div class="title-wrap fadeIn fadeIn-01">
					<span class="en">INFRA</span>
					<span class="kr">
						<strong>R&D, 식품안전, 생산, 유통</strong>에 이르는<br/>
						인프라를 구축해 <strong>우수한 제품</strong>을 제공합니다
					</span>
					<div class="mask-wrap fadeIn fadeIn-02">
						<div class="mask01">
							<ul>
								<li>
									<img src="../../images/main/conBox02-img04.png" alt="">
								</li>
								<li>
									<img src="../../images/main/conBox02-img03.png" alt="">
								</li>
								<li>
									<img src="../../images/main/conBox02-img04_222.png" alt="">
								</li>
								<li>
									<img src="../../images/main/conBox02-img01.png" alt="">
								</li>
							</ul>
							<span class="circle circle01"></span>
							<span class="circle circle02"></span>
							<span class="circle circle03"></span>
							<span class="circle circle04"></span>
						</div>
						<div class="mask02">
							<ul>
								<li>
									<dl>
										<dt>국내 및 해외 현지<br/>R&D 센터 운영</dt>
										<dd>
											국내뿐아니라 태국, 베트남 현지에서도 R&D 센터를 운영하여<br/>
											보다 더 나은 제품 개발을 위해 노력하고 있습니다.
										</dd>
									</dl>
									<a href="../capacity/rnd.php">더 알아보기</a>
								</li>
								<li>
									<dl>
										<dt>식품 안전 경영 시스템</dt>
										<dd>
											SASE는 ‘식품 경영 시스템’을 바탕으로 지속적인 품질 관리와<br/>
											혁신으로 믿을 수 있고 안전한 제품을 공급합니다.
										</dd>
									</dl>
									<a href="../capacity/safety.php">더 알아보기</a>
								</li>
								<li>
									<dl>
										<dt>전문 생산라인</dt>
										<dd>
											국내 및 태국, 베트남 현지에 위생적이고 전문화 된<br/>
											생산라인을 보유하고 있어 고품질의 제품을 안정적으로 공급합니다.
										</dd>
									</dl>
									<a href="../capacity/production.php">더 알아보기</a>
								</li>
								<li>
									<dl>
										<dt>유통 네트워크</dt>
										<dd>
											글로벌 소싱 네트워크 보유로 세계 각국에서 수입 및 유통하고 있으며<br/>
											국내 약 1,000여개 거래처와 유통 관계를 형성하고 있습니다.
										</dd>
									</dl>
									<a href="../capacity/distribution.php">더 알아보기</a>
								</li>
							</ul>
						</div>
						<a href="" class="arrow btn-prev"><!-- <img src="../../images/main/btn-prev.png" alt=""> --></a>
						<a href="" class="arrow btn-next"><!-- <img src="../../images/main/btn-next.png" alt=""> --></a>
						<div class="numbering">
							<span class="slide-num"></span> / <span class="slide-num-max"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="conBox conBox03 animated">
			<div class="auto">
				<div class="title-wrap fadeIn fadeIn-01">
					<span class="en">BEST PRODUCT</span>
				</div>
				<div class="prd-list prd-best fadeIn fadeIn-02">
					<?
						$best_result = $db->select("id_goods","where display='1' and sub_position='1' order by ranking2 asc, idx desc Limit 0,4");
						$n=0;
						while($best_row=@mysqli_fetch_object($best_result)){
							$n++;
					?>
					<div class="con con0<?=$n;?>">
						<a href="../product/product_view.php?idx=<?=$best_row->idx;?>" class="inner">
							<div class="prd-thumb">
								<img src="/data/goodsImages/<?=$best_row->images2;?>" class="front" alt="">
								<img src="/data/goodsImages/<?=$best_row->images1;?>" class="back" alt="">
							</div>
							<div class="prd-name">
								<p><?=$best_row->name;?></p>
							</div>
						</a>
					</div>
					<?}?>
					<div class="con con05">
						<a href="https://smartstore.naver.com/sasemall" target="_blank" class="inner">
							<div class="txtBox">
								<p class="txt01">사세제품 구매하려면?</p>
								<p class="txt02">공식 온라인몰<br/>바로가기</p>
								<span class="arrow"><img src="../../images/main/arrow-right.png" alt=""></span>
							</div>
						</a>
					</div>
					<?
						$best_result = $db->select("id_goods","where display='1' and sub_position='1' order by ranking2 asc, idx desc Limit 4,3");
						$n=5;
						while($best_row=@mysqli_fetch_object($best_result)){
							$n++;
					?>
					<div class="con con0<?=$n;?>">
						<a href="../product/product_view.php?idx=<?=$best_row->idx;?>" class="inner">
							<div class="prd-thumb">
								<img src="/data/goodsImages/<?=$best_row->images2;?>" class="front" alt="">
								<img src="/data/goodsImages/<?=$best_row->images1;?>" class="back" alt="">
							</div>
							<div class="prd-name">
								<p><?=$best_row->name;?></p>
							</div>
						</a>
					</div>
					<?}?>
					<!--div class="con con06">
						<a href="../product/product_view.php" class="inner">
							<div class="prd-thumb">
								<img src="/data/goodsImages/GOODS2_1561428765.jpg" class="front" alt="">
								<img src="/data/goodsImages/GOODS1_1561428765.jpg" class="back" alt="">
							</div>
							<div class="prd-name">
								<p>버팔로 윙</p>
							</div>
						</a>
					</div>
					<div class="con con07">
						<a href="../product/product_view.php" class="inner">
							<div class="prd-thumb">
								<img src="/data/goodsImages/GOODS2_1561427150.jpg" class="front" alt="">
								<img src="/data/goodsImages/GOODS1_1561427150.jpg" class="back" alt="">
							</div>
							<div class="prd-name">
								<p>순살치킨 가라게</p>
							</div>
						</a>
					</div-->
					<div class="con con08">
						<a href="../product/product_list.php" class="inner">
							<!-- <img src="../../images/main/conBox03-img01.jpg" alt=""> -->
							 <img src="../../images/main/conBox03-img01_222.jpg" alt="">
							<div class="hover">
								<div>
									<img src="../../images/main/icon-plus.png" alt=""><br/>
									더 알아보기
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="btnWrap fadeIn fadeIn-03 blind">
					<a href="../product/product_list.php" class="red">제품더보기</a>
					<a href="https://smartstore.naver.com/sasemall" target="_blank" class="red">자사몰바로가기</a>
				</div>
			</div>
		</div>
		<div class="conBox conBox04 animated">
			<div class="auto">
				<div class="title-wrap fadeIn fadeIn-01">
					<span class="en">SASE NOW</span>
					<span class="kr">지금 <strong>사세의 이야기</strong>를 만나보세요.</span>
				</div>
				<?php
					$url = "https://graph.instagram.com/17841420347389950/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJXeFhEQlRydnNuNGk2WnF3cmE4SDVWejNxS2lqbDN6ZA2JTZAVI2dFlkdUY2cVFhQTBZAUU1zOUdpMkt2dE42dDRTTTA4WE5hNTBIOUl2a0E5c1dIcnRBbF9QN2Fha1plYnh3N2hBd1AzeGE1RVBHeQZDZD";
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, 5);  
					curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
					$result = curl_exec($curl);
					curl_close($curl);
					$result = json_decode($result, true);
					$result = $result['data'];
					?>
				<div class="mask fadeIn fadeIn-02">
					<ul class="swiper-wrapper">
						<?php for($i=0; $i<5; $i++){ ?>
						<!-- <li class="swiper-slide">
							<a href="<?php echo $result[$i]['permalink']; ?>" target="_blank">
								<div class="thumb">
									<img src="<? if($result[$i]['thumbnail_url']) { ?>
									<?php echo $result[$i]['thumbnail_url']; ?>
								<? } else  { ?>
									<?php echo $result[$i]['media_url']; ?>
								<? } ?>" alt="">
									<span class="sns-icon">
										<img src="../../images/main/icon-instagram.png" alt="">
									</span>
								</div>
								<div class="txtBox">
									<dl>
										<dt>
											<?php echo $result[$i]['caption']; ?>
										</dt>
									</dl>
								</div>
							</a>
						</li>  -->
						<?}?>
						<?

							$result = $db->select("id_bbs_data","where (code='news') order by idx desc limit 0,5");
							while($row=@mysqli_fetch_object($result)){
								$subject = $tools->strCut($row->subject,70);

								switch($row->code){
									case "news": $link_url = "../community/news.php?mode=v&idx=".$row->idx; break;
									case "sns": $link_url = $row->link_url; break;
									default : $link_url = ""; break;
								}
						?>
						<li class="swiper-slide">
							<a href="<?if($link_url){?><?=$link_url;?><?} else {?>javascript:;<?}?>" <?if($row->code=="sns"){?>target="_blank"<?}?>>
								<div class="thumb">
									<img src="/data/bbsData/<?=$row->list_images;?>" alt="">
									<span class="sns-icon">
										<?if($row->code=="sns"){?>
										<img src="../../images/main/icon-instagram.png" alt="">
										<?}?>
										
										<!-- 보도자료 아이콘입니다..! -->
										<?if($row->code=="news"){?>
										<img src="../../images/main/icon-news.png" alt="">
										<?}?>									
									</span>
								</div>
								<div class="txtBox">
									<dl>
										<dt>
											<?=$subject;?>
										</dt>
										<!-- <dd>
											국내 치킨 가공 선두 기업 (주)사세(SASE, 대표
											김광선)의 축산 가공품 전문 생산 공장인
										</dd> -->
									</dl>
								</div>
							</a>
						</li>
						<?}?>

					</ul>
				</div>
				<div class="swiper-scrollbar fadeIn fadeIn-03"></div>
				<div class="sliderWrap">
					<div id="slider">
						<div class="relative">
							<a href="javascript:;" id="custom-handle" class="ui-slider-handle"></a>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function(){
						var sel = $(".conBox04 .mask li").length / 2;
						
						var swiper = new Swiper('.conBox04 .mask', {
							loop:false,
							centeredSlides: true,
							slidesPerView:3,
							autoplay: {
								delay: 2500,
								disableOnInteraction: false,
							  },
							scrollbar : {
								el : '.swiper-scrollbar',
								draggable: true,
							},
							breakpoints: {
								// when window width is >= 640px
								641: {
									slidesPerView:1,
									centeredSlides:false,
								}
							}
						});
						swiper.slideTo(sel);
					})
				</script>
			</div>
		</div>
	</div>
<?include("../../include/footer.php");?>
<?include("../../popup/footer_popup.php");?>

<script type="text/javascript">
	function playYoutube1() {					
		// 플레이어 자동실행 (주의: 모바일에서는 자동실행되지 않음)
		//player.playVideo();
		$(".movie1 .iframe .thumb1").hide();
		$("#mainContents .conBox02 .movie1 .btn").hide();
		console.log("aa");
	}

	function playYoutube2() {					
		// 플레이어 자동실행 (주의: 모바일에서는 자동실행되지 않음)
		//player.playVideo();
		$(".movie2 .iframe .thumb2").hide();
		$("#mainContents .conBox02 .movie2 .btn").hide();
	}
</script>