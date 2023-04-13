<?include("../../include/sub-header.php");?>
	<div class="conBox conBox01">
		<div class="auto">
			<dl class="con-title">
				<dt>SNS</dt>
			</dl>
			<div class="sns-tab">
				<a href="https://www.instagram.com/sase_korea/" class="sns01 on"></a>
				<a href="https://www.facebook.com/sasekorea" class="sns02" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UC53IRkMg944sRfCMD4V4JtQ" class="sns03" target="_blank"></a>
			</div>
<style>
/* sns */
/* .sns-tab {
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
} */





</style>
 
<!-- 인스타그램 api 로 내 인스타 글 가져오기 -->
<?php
$url = "https://graph.instagram.com/17841420347389950/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJXeFhEQlRydnNuNGk2WnF3cmE4SDVWejNxS2lqbDN6ZA2JTZAVI2dFlkdUY2cVFhQTBZAUU1zOUdpMkt2dE42dDRTTTA4WE5hNTBIOUl2a0E5c1dIcnRBbF9QN2Fha1plYnh3N2hBd1AzeGE1RVBHeQZDZD";
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
		</div>
	</div>
	<script>
		$(window).on("load",function(){
			//$('.grid').masonry({
				// options
				//itemSelector: '.grid li',
			//});
		})
	</script>
<?include("../../include/sub-footer.php");?>