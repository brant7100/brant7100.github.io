<?include("../../include/sub-header.php");?>
	<div class="conBox conBox01">
		<div class="auto">
			<!-- 게시판 삽입 -->
			<?
			$code = "event"; //게시판 Code
			if($_GET[mode]=="" || $_GET[mode]=="l"){//리스트
			 $file = "event_list";
			}else if($_GET[mode]=="w"){//글쓰기
			 $file = "bbs_write";
			}else if($_GET[mode]=="wr"){//글쓰기
			 $file = "bbs_write_ok";
			}else if($_GET[mode]=="e"){//수정
			 $file = "bbs_passwd";
			}else if($_GET[mode]=="ed"){//수정
			 $file = "bbs_edit";
			}else if($_GET[mode]=="edi"){//수정
			 $file = "bbs_edit_ok";
			}else if($_GET[mode]=="p"){//비번확인
			 $file = "bbs_passwd";
			}else if($_GET[mode]=="d"){//삭제
			 $file = "bbs_passwd";
			}else if($_GET[mode]=="de"){//삭제
			 $file = "bbs_view_del";
			}else if($_GET[mode]=="re"){//답변
			 $file = "bbs_write";
			}else if($_GET[mode]=="co"){//코멘트
			 $file = "bbs_coment_ok";
			}else if($_GET[mode]=="cd"){//코멘트 삭제
			 $file = "bbs_passwd";
			}else if($_GET[mode]=="secr"){//비밀글
			 $file = "bbs_passwd";
			}else if($_GET[mode]=="v"){//읽기
			 $file = "event_view";
			}
			require("../../board/".$file.".php");
			?>
			<!-- 게시판 삽입 -->
			<!--div class="event-slide">
				<div class="mask">
					<ul class="slider">
						<?
							$result = $db->select("id_bbs_data","where code='event' order by reg_date desc Limit 3");
							while($row=@mysqli_fetch_object($result)){
								$day1 = $tools->strDateCut($row->day1);
								$day2 = $tools->strDateCut($row->day2);
						?>
						<li>
							<div class="imgBox"><a href=""><img src="/data/bbsData/<?=$row->list_images;?>" alt=""></a></div>
							<div class="txtBox">
								<p class="title"><span><?=$row->subject;?></span></p>
								<p class="date"><?=$day1;?>~<?=$day2;?></p>
							</div>
						</li>
						<?}?>
						<li>
							<div class="imgBox"><a href=""><img src="../../images/contents/event-slide-img01.jpg" alt=""></a></div>
							<div class="txtBox">
								<p class="title"><span>2021년 새해기념 댓글 이벤트</span></p>
								<p class="date">2021.01.01~2021.01.31</p>
							</div>
						</li>
						<li>
							<div class="imgBox"><a href=""><img src="../../images/contents/event-slide-img01.jpg" alt=""></a></div>
							<div class="txtBox">
								<p class="title"><span>2021년 새해기념 댓글 이벤트</span></p>
								<p class="date">2021.01.01~2021.01.31</p>
							</div>
						</li->
					</ul>
					<div class="arrows">
						<a href="" class="arrow btn-prev"></a>
						<a href="" class="arrow btn-next"></a>
					</div>
				</div>
			</div-->
			
			<!--div class="bbs-list event">
				<div class="bbs-list-row">
					<div class="column">
						<p class="num">2</p>
					</div>
					<div class="column">
						<div class="subject">
							<a href="">
								<p class="title"><span class="status status01">진행중</span>2021년 새해기념 댓글 이벤트</p>
							</a>
							<a href="" class="date">2021.01.14</a>
						</div>
					</div>
				</div>
				<div class="bbs-list-row">
					<div class="column">
						<p class="num">1</p>
					</div>
					<div class="column">
						<div class="subject">
							<a href="">
								<p class="title"><span class="status status02">종료</span>2021년 새해기념 댓글 이벤트</p>
							</a>
							<a href="" class="date">2021.01.14</a>
						</div>
					</div>
				</div>
			</div-->
			<!--div class="paging">
				<a href="#prev" class="arrow"><span class="material-icons">keyboard_arrow_left</span></a>
				<div class="number">
					<a href="#" class="on">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</div>		
				<a href="#next" class="arrow"><span class="material-icons">keyboard_arrow_right</span></a>
			</div-->

		</div>
	</div>
<?include("../../include/sub-footer.php");?>