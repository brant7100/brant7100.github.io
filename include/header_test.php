<? 
if($_SERVER['HTTPS'] != "on"){
    header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if(!$_COOKIE["today_oid"]){
	setcookie("today_oid", date("YmdHis"), time()+86400); // 오늘본상품 쿠키 생성
}
?>
<!DOCTYPE HTML>
<html lang="en-KR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" /> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no">

	<title>사세</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Source+Serif+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/notosanskr.css" />
	<link rel="stylesheet" type="text/css" href="../../css/common.css" />
	<link rel="stylesheet" type="text/css" href="../../css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="../../css/layout_test.css" />
	<link rel="stylesheet" type="text/css" href="../../css/main.css?ver=210128.1" />
	<link rel="stylesheet" type="text/css" href="../../css/contents.css?ver=201124.1" />
	<link rel="stylesheet" type="text/css" href="../../css/board.css" />
	<link rel="stylesheet" type="text/css" href="../../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../../css/keyframes.css" />
	<link rel="stylesheet" type="text/css" href="../../css/swiper.css" />
	<!--link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"-->
	<!--link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i,900&display=swap" rel="stylesheet"-->
	<!--link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Satisfy" rel="stylesheet"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600,700" rel="stylesheet"-->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

	<script type='text/javascript' src='../../js/jquery-3.3.1.min.js'></script>
	<script type='text/javascript' src='../../js/jquery-ui.min.js'></script>
	  <!--[if lt IE 9]>
		<script type="text/javascript" src="../../js/respond.js"></script>
		<script type="text/javascript" src="../../js/html5shiv.js"></script>
	  <![endif]-->
	<script type="text/javascript" src="../../js/TimelineMax.min.js"></script>
	<script type="text/javascript" src="../../js/TweenMax.min.js"></script> 
	<script type='text/javascript' src='../../js/common.js'></script>
	<script type='text/javascript' src='../../js/slick.min.js'></script>
	<script type='text/javascript' src='../../js/swiper.min.js'></script>
	<script type='text/javascript' src='../../js/waypoint.js'></script>
	<script type='text/javascript' src='../../js/top.js'></script>
	<script type='text/javascript' src='../../js/jquery.rwdImageMaps.min.js'></script>
	<script type='text/javascript' src='../../js/masonry.js'></script>
	<script type='text/javascript' src='../../js/form.js'></script>
	<script src="https://kit.fontawesome.com/31e62affc3.js"></script>
	
	<script type="text/javascript">
	function goGoods(page,part_idx){
		document.location.href="/html/product/product_list.php?part_idx="+part_idx;
	}
	</script>
</head>




<script>
document.onmousedown=disableclick; 
//status="Right click is not available."; 

function disableclick(event){ 
	if (event.button==2) { 
		//alert(status); 
		return false; 
		} 
}
</script>


</head>
<? if ($_SERVER['REMOTE_ADDR'] == "58.230.204.58" ) { ?>

<body>

<?} else {?>

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>

<?}?>

	<ul id="skipNav">
		<li><a href="#mainContents" class="">메인 본문 바로가기</a></li>
		<li><a href="#contents" class="">본문 바로가기</a></li>
		<li><a href="#gnb">메뉴 바로가기</a></li>
		<li><a href="#footer">페이지 하단 바로가기</a></li>
	</ul>
	<header id="header" class="header">
		<div class="headerTop clearFix">
			<div class="auto_w">
				<div class="conL">
					<div class="util">
						<a href="https://smartstore.naver.com/sasemall" target="_blank">공식 온라인몰 </a>
						<a href="http://b2b.sase.co.kr/b2b/b2bLogin.do" target="_blank">기업고객 웹수발주</a>
						
					</div>
				</div>
				

			<h1 class="logo">
				<a href="../index/"><img src="../../images/layout/logo.png" alt="사세"></a>
				<span class="hidden">사세</span>
			</h1>

				<div class="conR">

				</div>

				<div class="sns">
					<a class="insta" target="_blank" href="https://www.instagram.com/sase_korea"></a>
					<a class="youtube" target="_blank" href="https://www.youtube.com/channel/UC53IRkMg944sRfCMD4V4JtQ"></a>
				</div>
				<div class="language">
					<a href="/" class="on">KR</a>
					<a href="/eng/">EN</a>
				</div>
				<div class="search_top">
					<a href="" class="btnSearch"><i class="material-icons">search</i></a>
				</div>

			</div>
			<a href="" class="btnAllMenu">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		<div class="auto_w">
			<nav id="gnb" class="gnb">
				<? include("../../include/gnb.php"); ?>
			</nav>
		</div>
	</header>
	<nav id="mobileGnb">
		<div class="auto auto_w">
			<div class="mobileGnbWrap">
				<div class="mobileGnbTop">
					<div class="allMenuTop">
						<a href="" class="btnAllMenuClose"><i style="font-size:30px;" class="xi-close"></i></a>
						<h1 class="logo">
							<a href="../index/"><img src="../../images/layout/logo.png" alt="사세"></a>
							<span class="hidden">사세</span>
						</h1>
						<!-- <a href="" class="btnBasket"><img src="../../images/layout/icon_basket_on.png" alt="" /></a> -->
					</div>
					<div class="btns">
						<ul>
							<li><a href="/data/SASE_catalogue.pdf">카달로그 다운로드</a></li>
							<li><a href="mailto:sasecs@sasetrd.com">문의하기</a></li>
						</ul>
					</div>
					<div class="language">
						<div class="selectbox" data-select-link="">
							<a href="/">KOR</a>
							<ul>
								<li><a href="/eng/">ENG</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="mobileGnbBottom"><? include("../../include/gnb.php"); ?></div>
			</div>
		</div>
	</nav>