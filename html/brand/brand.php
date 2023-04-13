<?include("../../include/sub-header.php");?>


<div class="brand_wrap">
	<div class="brand_box auto">
		<ul class="brand-02">
			<?
				$result = $db->select("id_brand","where display='1' order by ranking asc");
				while($row=@mysqli_fetch_object($result)){
			?>
			<li class="<?=$row->brand;?>">
				<a href="brand_view.php?idx=<?=$row->idx;?>">
					<img src="../../images/contents/brand_blank_img.png" alt="">
				</a>
			</li>
			<?}?>
			<!-- <li class="buffalo">
				<a href="javascript:alert('준비중인 페이지입니다.');">
					<img src="../../images/contents/brand_blank_img.png" alt="">
				</a>
			</li> -->
		</ul>		
	</div>
</div>


<script>
            let bb_lenght = $(".brand_box ul li").length;
            let bb = $(".brand_box");

            bb.addClass("box0" + bb_lenght);
            //console.log(m_icon_box_01_lenght);
</script>


<?include("../../include/sub-footer.php");?>
