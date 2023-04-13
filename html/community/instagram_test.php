<?include("../../include/sub-header.php");?>
	<div class="conBox conBox01">
		<div class="auto">
			<dl class="con-title">
				<dt>SNS</dt>
			</dl>
			<div class="sns-tab">
				<a href="" class="sns01 on"></a>
				<a href="" class="sns02"></a>
				<a href="" class="sns03"></a>
			</div>




<style>


/* sns */
.sns-tab {
  text-align: center;
  margin-bottom: 30px;
}
.sns-tab a {
  display: inline-block;
  width: 56px;
  height: 56px;
  margin: 0 5px;
  background-repeat: no-repeat;
  background-size: cover;
}
.sns-tab a.sns01 {
  background-image: url("../images/contents/sns01.png");
}
.sns-tab a.sns02 {
  background-image: url("../images/contents/sns02.png");
}
.sns-tab a.sns03 {
  background-image: url("../images/contents/sns03.png");
}
.sns-tab a.sns01.on {
  background-image: url("../images/contents/sns01-on.png");
}
.sns-tab a.sns02.on {
  background-image: url("../images/contents/sns02-on.png");
}
.sns-tab a.sns03.on {
  background-image: url("../images/contents/sns03-on.png");
}
.sns-list ul {
  margin: -10px;
}
.sns-list ul li {
  display:none;
  float: left;
  width: 25%;
  padding: 10px;

}
.sns-list ul li:first-child {
  width: 50%;
}
.sns-list li:nth-child(1){display:block;}
.sns-list li:nth-child(2){display:block;}
.sns-list li:nth-child(3){display:block;}
.sns-list li:nth-child(4){display:block;}
.sns-list li:nth-child(5){display:block;}

.sns-list ul li a {
  display: block;
  position: relative;
}
.sns-list ul li a .hv {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
  opacity: 0;
  transition: 0.3s;
}
.sns-list ul li a:hover .hv {
  opacity: 1;
}
.sns-list ul li a .hv span {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  right: 0;
  text-align: center;
  font-size: 60px;
  color: #fff;
}

</style>
 
<!-- 인스타그램 api 로 내 인스타 글 가져오기 -->
<?php
$url = "https://graph.instagram.com/17841420347389950/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJYX09Tak9RVEdDeTFXd1I5RWNmZAUMxZAUxyYmIwV21NckRJM01rQmlLQkJDcS1jcGY2OFBTN3piekZA6WWRYekRNbzczMWhQLW9yVERaMWZAGR0JLLWZAyUGc3WDZAKNWZA4eThZATERPdDRWa1ZATb1FZAZAQZDZD";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result, true);
$result = $result['data'];
?>
<div class="sns-list">
	<ul class="my_instagram">
		<?php for($i=0; $i<count($result); $i++){ ?>
		<li>
			<a href="<?php echo $result[$i]['permalink']; ?>" target="_blank">
			
				<img src="

				<? if($result[$i]['thumbnail_url']) { ?>
					<?php echo $result[$i]['thumbnail_url']; ?>
				<? } else  { ?>
					<?php echo $result[$i]['media_url']; ?>
				<? } ?>

				">
			
		
				<div class="hv">
					<span>+</span>
				</div>
			</a>
		</li> 
		<?php } ?>
	<ul>
</div>












<?include("../../include/sub-footer.php");?>