<?include("../../include/sub-header.php");?>

<!-- 인스타그램 관리자연동 -->
	
	<div class="conBox conBox01">
		<div class="auto">
			<dl class="con-title fadeIn fadeIn-01">
				<dt>SNS</dt>
			</dl>
			<div class="sns-tab fadeIn fadeIn-02">
				<a href="https://www.instagram.com/sase_korea/" class="sns01 on"></a>
				<a href="https://www.facebook.com/sasekorea" class="sns02" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UC53IRkMg944sRfCMD4V4JtQ" class="sns03" target="_blank"></a>
			</div>
			<div class="sns-list fadeIn fadeIn-03">
				<ul>
					<?
						$result = $db->select("id_bbs_data","where code='sns' order by idx desc limit 0,5");
						while($row=@mysqli_fetch_object($result)){
					?>
					<li>
						<a href="<?if($row->link_url){?><?=$row->link_url;?><?} else {?>javascript:;<?}?>" target="_blank">
							<img src="/data/bbsData/<?=$row->list_images;?>" alt="">
							<div class="hv"><span>+</span></div>
						</a>
					</li>
					<?}?>
				</ul>
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