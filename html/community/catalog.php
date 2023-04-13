<?include("../../include/sub-header.php");?>
	<div class="conBox conBox01">
		<div class="auto">
			<!-- 게시판 삽입 -->
				<?
				$code = "catalog"; //게시판 Code
				if($_GET[mode]=="" || $_GET[mode]=="l"){//리스트
				 $file = "catalog_list";
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
				 $file = "bbs_view";
				}
				require("../../board/".$file.".php");
				?>
				<!-- 게시판 삽입 -->
			<!--div class="catalog-list fadeIn fadeIn-01">
				<ul>
					<li>
						<a href="">
							<p class="title">2021 사세 제품리스트</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
					<li>
						<a href="">
							<p class="title">[제품사용설명서] 버팔로 윙</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
					<li>
						<a href="">
							<p class="title">[제품사용설명서] 바베큐 치킨 스테이크</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
					<li>
						<a href="">
							<p class="title">2020년도 애뉴얼 리포트</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
					<li>
						<a href="">
							<p class="title">2020년도 4분기 실적</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
					<li>
						<a href="">
							<p class="title">재무제표</p>
							<p class="date">2020.01.01</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="paging fadeIn fadeIn-02">
				<a href="#prev" class="arrow_l"><span class="material-icons">keyboard_arrow_left</span></a>
				<div class="number">
					<a href="#" class="on">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</div>		
				<a href="#next" class="arrow_r"><span class="material-icons">keyboard_arrow_right</span></a>
			</div-->

		</div>
	</div>
<?include("../../include/sub-footer.php");?>