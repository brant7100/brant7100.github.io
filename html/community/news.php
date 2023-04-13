<?include("../../include/sub-header.php");?>
	<div class="conBox conBox01">
		<div class="auto">
			<div class="con-title fadeIn fadeIn-01">
				<dl>
					<dt>보도자료</dt>
				</dl>
			</div>
				<!-- 게시판 삽입 -->
				<?
				$code = "news"; //게시판 Code
				if($_GET[mode]=="" || $_GET[mode]=="l"){//리스트
				 $file = "bbs_list_news";
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
		</div>
	</div>
<?include("../../include/sub-footer.php");?>