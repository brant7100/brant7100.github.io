<?include("../../include/sub-header.php");?>
<?
if($_GET[idx]){
	$row = $db->object("id_brand","where idx='$_GET[idx]'");
} else {
	$tools->alertJavaGo("비정상적으로 접근했습니다.","brand.php");
}
?>

<style>

</style>

<div class="brand_viwe_wrap">


	<div style="background-image:url('/data/brandImages/<?=$row->images1;?>')" class="top">
		<div>
			<img src="/data/brandImages/<?=$row->images3;?>" alt="">
		</div>
	</div>


	<div class="brand_con01">
		<dl class="con-title mt03">
			<dt class="two"><?=nl2br($row->title);?></dt>
		</dl>
	

	<div class="conBox conBox01 fade">
		<div class="auto">
			<div class="imgBox fadeInLeft fadeIn-01"><img src="/data/brandImages/<?=$row->images2;?>" alt=""></div>
			<div class="txtBox">
				<dl class="fadeIn fadeIn-02">
					<span class="slogan blind">SASE SLOGAN</span>
					<dt><?=$db->stripSlash($row->slogan);?></dt>
					<dd>
						<?=$row->content;?>
					</dd>
				</dl>
			</div>
		</div>
	</div>

</div>

  <?
  if($row->relation){
  $relation_arr = explode(",",$row->relation);
  $relation_cnt = count($relation_arr);
  ?>
	<div class="gray_box">
		<dl class="con-title">
			<dt>관련제품</dt>
		</dl>
		<ul class="auto">
			<?
			for($i=0;$i<count($relation_arr);$i++){
				$goods_row = $db->object("id_goods","where idx='$relation_arr[$i]'");

				$name = $goods_row->name;
				$name_en = $goods_row->name_en;
			?>
			<li>
				<a href="../product/product_view.php?idx=<?=$goods_row->idx;?>">
				<div class="img prd-thumb">
					<img src="/data/goodsImages/<?=$goods_row->images2;?>" alt="" class="front">
					<img src="/data/goodsImages/<?=$goods_row->images1;?>" alt="" class="back">
				</div>
				<!-- <div class="img">
					<img src="../../images/contents/brand_sase_blank_img.png" style="background:url('/data/goodsImages/</?=$goods_row->images1;?/>')no-repeat center; background-size:cover" alt="">
				</div> -->
				<div class="prd-name">
					<p class="kr"><?=nl2br($name);?></p>
					<p class="en"><?=nl2br($name_en);?></p>
				</div>
				</a>
			</li>
			<?}?>
			<?if($relation_cnt<5){?>
			<li class="more" style="background-image:url('/data/brandImages/BRAND2_1616743917.jpg'); background-size:cover; padding-bottom:0">
				<div>
					<a href="/html/product/product_list.php?part_idx=1#page1&part_idx=1" style="height:100%;">
						<div class="more_txt">더 알아보기</div>
						<div class="img prd-thumb">
							<img src="/data/goodsImages/<?=$goods_row->images2;?>" alt="" class="front" style="opacity:0">
						</div>
						<!-- <div class="img">
							<img src="../../images/contents/brand_sase_blank_img.png" style="background:url('/data/goodsImages/</?=$goods_row->images1;?/>')no-repeat center; background-size:cover" alt="">
						</div> -->
						<div class="tit">
							&nbsp
						</div>
					</a>
				</div>
			</li>
			<?}?>

			<!--li>
				<div class="img">
					<img src="../../images/contents/brand_sase_blank_img.png" style="background:url('../../images/contents/brand_sample_img.png')no-repeat center; background-size:cover" alt="">
				</div>
				<div class="tit">
					크리스피 치킨봉
				</div>
			</li>
			<li>
				<div class="img">
					<img src="../../images/contents/brand_sase_blank_img.png" style="background:url('../../images/contents/brand_sample_img.png')no-repeat center; background-size:cover" alt="">
				</div>
				<div class="tit">
					크리스피 치킨봉
				</div>
			</li>
			<li>
				<div class="img">
					<img src="../../images/contents/brand_sase_blank_img.png" style="background:url('../../images/contents/brand_sample_img.png')no-repeat center; background-size:cover" alt="">
				</div>
				<div class="tit">
					크리스피 치킨봉
				</div>
			</li-->
		</ul>
	
	</div>
  <?}?>
</div><!-- brand_viwe_wrap -->


<?include("../../include/sub-footer.php");?>
