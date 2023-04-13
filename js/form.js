function customerWrite(){
	var form=document.writeForm;
	if( form.content.value=="") {
		alert("내용을 입력해 주십시오.");
		form.content.focus();
	} else if(form.agree.checked==false) {
		alert("개인정보 취급방침에 동의해주세요.");
		form.agree.focus();
	} else if( form.name.value=="") {
		alert("이름을 입력해주세요.");
		form.name.focus();
	} else if( form.email.value=="") {
		alert("이메일을 입력해주세요.");
		form.email.focus();
	} else if( form.tel1.value=="") {
		alert("연락처를 입력해주세요.");
		form.tel1.focus();
	} else if( form.tel2.value=="") {
		alert("연락처를 입력해주세요.");
		form.tel2.focus();
	} else if( form.tel3.value=="") {
		alert("연락처를 입력해주세요.");
		form.tel3.focus();
	} else if( form.captcha.value=="") {
		alert("스팸방지숫자를 입력해 주십시오.");
		form.captcha.focus();
	} else {
		form.submit();			
	}
	
}