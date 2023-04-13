<?include("../../include/sub-header.php");?>

<?
if($_REQUEST[category]){
	$category = $_REQUEST[category];
} else {
	$category = "3";
}
?>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<script>

	$(document).ready(function(){

		$('#btn1').click(function(){

			var offset = $('#history1').offset(); //선택한 태그의 위치를 반환


           //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함 


	        $('html').animate({scrollTop : offset.top}, 400);


		});

	});



	$(document).ready(function(){

		$('#btn2').click(function(){

			var offset = $('#history2').offset(); //선택한 태그의 위치를 반환


           //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함 


	        $('html').animate({scrollTop : offset.top}, 700);


		});

	});


	$(document).ready(function(){

		$('#btn3').click(function(){

			var offset = $('#history3').offset(); //선택한 태그의 위치를 반환


           //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함 


	        $('html').animate({scrollTop : offset.top}, 1000);


		});

	});


</script>

<!-- <button id="btn1">div1로 이동</button>

<div id="div1">div1</div>
 -->

<div class="conBox conBox01">
	<div class="auto">
		<div class="tab tab03">
			<ul>
				<li class="on" ><a id="btn1" href="#">도약기 2016~현재</a></li>
				<li><a href="#" id="btn2">성장기 2005~2015</a></li>
				<li><a href="#" id="btn3">설립기 1997~2004</a></li>
			</ul>
		</div>
		<?
		for($n=1;$n<4;$n++){
		if($n=="1"){
			$cate_name = "2016-현재";
		} else if($n=="2"){
			$cate_name = "2005~2015";
		} else if($n=="3"){
			$cate_name = "1997~2004";
		}
		?>
		<div class="history-cate fadeIn fadeIn-01" id="history<?=$n;?>">
			<span><?=$cate_name;?></span>
		</div>
		<div class="history_list fadeIn fadeIn-02">
			<?
				if($n=="1"){
					$search = " and part_name > 2015";
				} else if($n=="2"){
					$search = " and part_name >= 2005 and part_name <=2015";
				} else if($n=="3"){
					$search = " and part_name >= 1997 and part_name <= 2004";
				}
				//echo $search;
				$part_result = $db->select("id_category","where part_index=1 $search order by part_ranking desc");
				while($part_row=@mysqli_fetch_object($part_result)){
					$row = $db->object("id_history","where part_idx='$part_row->idx'");
					$content = str_replace("<br />","</li><li>",nl2br($row->content));
			?>
			<div class="historyBox">			
				<div class="inner">
					<p class="year"><?=$part_row->part_name;?></p>
					<div class="history_content">
						<ul>
							<li><?=$content;?></li>
						</ul>
						<div class="imgBox"><?if($part_row->history_images){?><img src="/data/historyImages/<?=$part_row->history_images;?>" alt="" /><?}?></div>
					</div>
				</div>
			</div>
			<?}?>
		</div>
		<?}?>
	</div>
</div>
<?include("../../include/sub-footer.php");?>