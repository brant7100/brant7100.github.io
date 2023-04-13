
var daram = (function() {
	var language="kor";
	var addr=location.href;
	var getNameFromPath = function(strFilepath) {
		var objRE = new RegExp(/([^\/\\]+)$/);
		var strName = objRE.exec(strFilepath);
		if (strName == null) {
		   return null;
		}
		else {
			return strName[0].split(".")[0];
		}
	}
	var getParameter = function (strParamName){
		 var arrResult = null;
		 if(strParamName){
			 arrResult = location.search.match(new RegExp("[&?]" + strParamName + "=(.*?)(&|$)"));
		 }
		 return arrResult && arrResult[1] ? arrResult[1] : null;
	}
	var mod = function (a,b){
		if(a%b < 0) {
			return b+a%b;
		} else {
			return a%b;
		}
	}
	var addZero = function (num) {
		if(num<10){
			return "0"+num;
		} else {
			return num;
		}
	}
	var gnb = function() {
		var item = $("#gnb > .gnbList > li");
		var header = $("#header");
		var btnAll = $("#header .btnAllMenu");
		var duration = 500;		
		var win = $(window);
		var w = win.width();
		
		
		if (w>1280)	{			
			
			
			item.on("mouseenter",function(e){
				var sel = $(this).find(".sub li").length;
				
				if (sel > 1){
					//item.find(".sub").stop().slideUp(300);
					//$(this).find(".sub").stop().slideDown(300);
				}				
			})
			item.on("mouseleave",function(e){
				//$(this).find(".sub").stop().slideUp(300);
			})
		} 
		var closeH=50;
		var closeH_m=29;
		var tweenDuration=0.5;
		var gnbDuration=0.5;
		var isState="close";
		var ease=Quint.easeOut
		/*
		function allClose(sel) {
			if (w > 640){
				$("#mobileGnb .gnbList > li").each(function(index){
					var num = $(this).find(".sub li").length;
					if (num > 1){
						if(sel!==index){
							TweenMax.to($(this),tweenDuration,{height:closeH,ease:ease})
							$(this).data({isState:"close"});
							$(this).removeClass("on")
						} else {
							TweenMax.to($(this),tweenDuration,{height:$(this).data("loadH"),ease:ease})
							$(this).data({isState:"open"});
							$(this).addClass("on")
						}
					}
				})
			} else {
				$("#mobileGnb .gnbList > li").each(function(index){
					var num = $(this).find(".sub li").length;
					if (num > 1){
						if(sel!==index){
							TweenMax.to($(this),tweenDuration,{height:closeH_m,ease:ease})
							$(this).data({isState:"close"});
							$(this).removeClass("on")
						} else {
							TweenMax.to($(this),tweenDuration,{height:$(this).data("loadH"),ease:ease})
							$(this).data({isState:"open"});
							$(this).addClass("on")
						}
					}
				})	
			}
		}
		
		if (w > 640){
			$("#mobileGnb .gnbList > li").each(function(index){
				var num = $(this).find(".sub li").length;
				if (num > 1){
					$(this).data({loadH:$(this).height(),isState:"close"});
					$(this).height(closeH);
					$(this).children("a").on("click",function(e){
						$(this).parent().addClass("on");
						if($(this).parent().data("isState")==="close"){
							allClose($(this).parent().index())
						} else {
							allClose();
						}
						return false;
					})
				}
			})
		} else {
			$("#mobileGnb .gnbList > li").each(function(index){
				var num = $(this).find(".sub li").length;
				if (num > 1){
					$(this).data({loadH:$(this).height(),isState:"close"});
					$(this).height(closeH_m);
					$(this).children("a").on("click",function(e){
						$(this).parent().addClass("on");
						if($(this).parent().data("isState")==="close"){
							allClose($(this).parent().index())
						} else {
							allClose();
						}
						return false;
					})
				}
			})	
		}	
		*/
		$("#header .btnAllMenu").on("click",function(e){
			$(this).addClass("open");
			$("body").addClass("overHidden");
			TweenMax.to($("#mobileGnb"),tweenDuration,{right:0,ease:Quint.easeOut});
			$("body").append("<div class='cover'></div>");
			
			
			return false;
		})
		$(".btnAllMenuClose").on("click",function(e){
			$(this).removeClass("open");
			$("body").removeClass("overHidden");
			TweenMax.to($("#mobileGnb"),tweenDuration,{right:"-100%",ease:ease})					
			TweenMax.to($(".cover"),tweenDuration,{opacity:0,ease:ease,onComplete:removeCover})
			//allClose();
			return false;
		})
		
		function removeCover() {
			$(".cover").remove();
		}
		if (w<640){
			//$("#mobileGnb").css({paddingTop:55});
		}
	}
	var mainVisual = function() {
		var h = $(window).height();
		//TweenMax.to($("#mainVisual .scroll"),0.65,{bottom:30,yoyo:true,repeat:-1});
		$(window).on("load",function(){
			//$("#mainVisual").addClass("fade");
		})
		//$("#mainVisual .mask").css({height:h})
		var mainVisual = $("#mainVisual .slider").slick({
			autoplay:true,
			autoplaySpeed:6000,
			infinite:true,
			fade:true,
			arrows:true,
			dots:true,
			prevArrow:"#mainVisual .btnPrev",
			nextArrow:"#mainVisual .btnNext",
		})
		mainVisual.on("beforeChange", function(event, slick, currentSlide){
			//$("#mainVisual .tableCell").css({opacity:0})
		});
		mainVisual.on("afterChange", function(event, slick, currentSlide){
			//console.log(currentSlide+1);
			$(".slick-slide").removeClass("fadeIn");
			$(".slick-slide.slick-active").addClass("fadeIn");
			//setTimeout(mainVisualTxt(),1000)			
			if (currentSlide !== 2){
				$("#header").addClass("color-w");
				$("#mainVisual .slick-dots").addClass("color-w");
			} else {
				$("#header").removeClass("color-w");
				$("#mainVisual .slick-dots").removeClass("color-w");
			}
		});
		$("#mainVisual .slick-slide.slick-active").addClass("fadeIn");
		$("#mainVisual .slick-dots").addClass("color-w");
		TweenMax.to($("#mainVisual .scroll .inner"),0.6,{bottom:10,yoyo:true,repeat:-1});
		function mainVisualTxt(){
			var tlm = new TimelineMax();
			//tlm.to($("#mainVisual .tableCell"),1,{autoAlpha:1})
			//tlm
			//	.from($("#mainVisual .txtBox .kr"),1,{autoAlpha:1, xPercent:'-20px',ease:Quint.easeOut},"0")
			//	.from($("#mainVisual .txtBox .en"),1,{autoAlpha:1, xPercent:'-20px',ease:Quint.easeOut},"0.3")
			//	.from($("#mainVisual .btnView"),1,{autoAlpha:1, xPercent:'-20px',ease:Quint.easeOut},"0.6");
		}
	}

	var selectBox = function (){
		$(".selectBox > a").on("click",function(e){
			$(this).siblings("ul").slideToggle(200);
			$(this).toggleClass("on");
			return false;
		})
		$(".selectBox ul li").on("click",function(e){
			var txt = $(this).find("a").text();
			$(".selectBox > a").removeClass("on");
			$(".selectBox > a .txt").text(txt);
			$(".selectBox ul").hide();
			$(".selectBox ul li a").removeClass("on");
			$(this).find("a").addClass("on");
			$(".selectBox > a").removeClass("on");
			return false;
		})
		var $select = $("[data-select]");
		var $selectLink = $("[data-select-link]");
		var $dataTab = $("[data-tab]");
		var $dataTabContents = $("[data-tab-contents]");
		$select.children("a").on("click",function(){
			$(this).parent().toggleClass("on");
			$(this).next("ul").slideToggle(100);
			return false;
		})
		$select.find("ul li").on("click",function(e){
			var txt = $(this).find("a").text();
			$(this).parent().parent().removeClass("on");
			$(this).parent().siblings("a").find(".txt").text(txt);
			$(this).parent().slideUp(100);
			return false;
		})

		$selectLink.children("a").on("click",function(){
			$(this).parent().toggleClass("on");
			$(this).next("ul").slideToggle(100);
			return false;
		})
		$dataTab.children().children("li").on("click",function(){
			var sel = $(this).index();
			$dataTab.children().children("li").removeClass("on");
			$(this).addClass("on");
			$dataTabContents.children().children("li").removeClass("on");
			$dataTabContents.children().children("li").eq(sel).addClass("on");
			return false;
		})
	}
	var makeSubTitle = function (main,sub) {
		$(".sub-title .main").text(main);
		$(".sub-title .sub").text(sub);
	}
	var makeContentsTitle = function (mainTxt) {
		$(".contentsTitle span").text(mainTxt);

	}
	var makeBreadCrumb  = function (depth01,depth02,depth03,depth04){
		$(".breadCrumb li").eq(1).remove();
		$(".breadCrumb li").eq(2).remove();
		$(".breadCrumb").append('<li><i class="fa fa-angle-right"></i>'+depth01+'</li>');
		$(".breadCrumb").append('<li><i class="fa fa-angle-right"></i>'+depth02+'</li>');
	}
	var subVisual = function (mainSel,lnbSel) {
		$("#subVisual").removeClass();
		$("#subVisual").addClass("subVisual0"+(mainSel+1) + "0" + (lnbSel+1));
		
	}
	var subVisualTitle = function (main,sub) {
		$("#subVisual .main").text(main);
		$("#subVisual .sub").text(sub);
	}
	var lnbLoad = function(mainSel,lnbSel,tabSel) {
		$("#lnb ul").append($("#gnb .gnbList > li").eq(mainSel).find(".sub > li").clone());
	}
	var mobileLnbLoad = function(mainSel,lnbSel,tabSel) {
		$("#lnb .mainLnb").append($("#gnb .gnbList > li").clone());
		$("#lnb .mainLnb li .sub").remove();
		$("#lnb .subLnb").append($("#gnb .gnbList > li").eq(mainSel).find(".sub > li").clone());
		$("#lnb .subLnb li .sub").remove();
		$("#lnb .depth03Lnb").append($("#gnb .gnbList > li").eq(mainSel).find(".sub > li").eq(tabSel).find(".depth03 li").clone());
		var mainTxt = $("#gnb .gnbList > li").eq(mainSel).children("a").text();
		var subTxt = $("#gnb .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).children("a").text();
		var depth03Txt = $("#gnb .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).find(".depth03 > li").eq(tabSel).children("a").text();
		$("#lnb .mainLnbWrap .mainBtn").text(mainTxt);
		$("#lnb .subLnbWrap .mainBtn").text(subTxt);
		$("#lnb .depth03LnbWrap .mainBtn").text(depth03Txt);
		$("#lnb .mainBtn").on("click",function(e){
			$(this).toggleClass("on");
			$(this).next().slideToggle(100,"easeOutQuint");
			return false;
		})
		$("#lnb .subLnbWrap ul li").eq(lnbSel).addClass("on");
		var depth03LnbLength = $("#lnb .depth03Lnb li").length;
		if (depth03LnbLength == 0){
			$(".depth03LnbWrap").remove();
		}
	}

	var snbLoad = function (mainSel,lnbSel) {
		$("#snb > ul").remove();
		$("#snb").append($("#header #gnb .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).find(".depth03").clone().removeClass("blind"));
		$("#snb").find(".depth04").remove();
		$("#snb li h4").contents().unwrap();
		$("#snb").trigger("mouseleave");
		if($("#snb li").length<=0){
			$("#snb").remove();
		}
		var snbNum = $("#snb li").length;
		$("#snb").addClass("snb0"+(snbNum));
	}
	var lnbFix = function(lnbSel) {
		var w = $(window).width();
		if (w >=1200){
			$("#lnb > ul > li").on("mouseenter",function(e){
				$("#lnb > ul > li").removeClass("on");
				$(this).addClass("on")
			})
		}
			

		$("#lnb > ul > li").on("mouseleave",function(e){
			$("#lnb > ul > li").removeClass("on")
			$("#lnb > ul > li").eq(lnbSel).addClass("on")
		})		
		$("#lnb > ul > li").trigger("mouseleave");
	}
	var snbFix = function (tabSel) {
		$("#snb > ul > li").on("mouseenter",function(e){
			$("#snb > ul > li").removeClass("on");
			$(this).addClass("on")
		})
		$("#snb > ul > li").on("mouseleave",function(e){
			$("#snb > ul > li").removeClass("on")
			$("#snb > ul > li").eq(tabSel).addClass("on")
		})
		$("#snb > ul > li").trigger("mouseleave");
	}
	var allFix = function (obj){
		var temp=getNameFromPath(addr);
		var defaults={};
		var option=$.extend(defaults,obj);
		var mainSel = option.mainSel;
		var lnbSel = option.lnbSel;
		var tabSel = option.tabSel;
		var depth04Sel = option.depth04Sel;
		var depth01 = $(".gnbList > li").eq(mainSel).clone();
		var depth02 = depth01.find(".sub > li").eq(lnbSel).clone();
		var depth03 = depth02.find(".depth03 > li").eq(tabSel).clone();
		var depth04 = depth03.find(".depth04 > li").eq(depth04Sel).clone();

		depth01.find("ul").remove();
		depth02.find("ul").remove();
		depth03.find("ul").remove();
		depth04.find("ul").remove();


		depth01.find("li").unwrap();
		depth02.find("li").unwrap();
		depth03.find("li").unwrap();
		depth04.find("li").unwrap();


		var bread01 = depth01.text();
		var bread02 = depth02.text();
		var bread03 = depth03.text();
		var bread04 = depth04.text();
		//console.log("bread01===",bread01);
		

		$("#subContents").addClass(temp);
		if (mainSel == 2){
			$("#subContents").addClass("product");
		}
		var subTitleMain = $("#gnb > .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).children("a").find("span").text();
		var subTitleSub = $("#gnb > .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).children("a").find("p").text();
		var contentsTitle=$("#gnb > .gnbList > li").eq(mainSel).find(".sub > li").eq(lnbSel).children("a").text();
		lnbLoad(mainSel,lnbSel,tabSel);	
		snbLoad(mainSel,lnbSel);
		lnbFix(lnbSel);
		snbFix(tabSel);
		subVisual(mainSel,lnbSel);
		makeSubTitle(subTitleMain,subTitleSub)
		makeContentsTitle(contentsTitle);
		makeBreadCrumb(bread01,bread02,bread03,bread04);		
	}

	var fix = function() {
		var addr=location.href
		var temp=getNameFromPath(addr);
		switch (temp){
			case "about":									allFix({mainSel:0,lnbSel:0}); $(".roundline").addClass("bg"); break;
			case "ci":										allFix({mainSel:0,lnbSel:1}); $(".main").addClass("under_line"); break;
			case "history":									allFix({mainSel:0,lnbSel:2}); break;
			case "ceo":										allFix({mainSel:0,lnbSel:3}); break;
			case "location_01":								allFix({mainSel:0,lnbSel:4}); break;
			case "location_02":								allFix({mainSel:0,lnbSel:4}); break;
			case "location_03":								allFix({mainSel:0,lnbSel:4}); break;
			case "location_04":								allFix({mainSel:0,lnbSel:4}); break;
	//---------------------------------------------------------------------------------------
			case "rnd":									    allFix({mainSel:1,lnbSel:0}); $(".main").addClass("under_line"); break;
			case "safety":									allFix({mainSel:1,lnbSel:1}); $(".main").addClass("under_line"); $(".roundline").addClass("bg"); break;
			case "production":								allFix({mainSel:1,lnbSel:2}); $(".main").addClass("under_line"); break;
			case "distribution":							allFix({mainSel:1,lnbSel:3}); $(".main").addClass("under_line"); break;
	//---------------------------------------------------------------------------------------
			case "brand":									allFix({mainSel:2,lnbSel:0}); $(".main").addClass("under_line"); break;
			case "brand_view":								allFix({mainSel:2,lnbSel:1}); $("#lnb").remove(); $(".main").addClass("under_line"); $(".roundline").addClass("bg"); break;
			case "brand_sase":								allFix({mainSel:2,lnbSel:1}); $("#lnb").remove(); $(".main").addClass("under_line"); break;
			case "brand_home":								allFix({mainSel:2,lnbSel:1}); $("#lnb").remove(); $(".main").addClass("under_line"); break;
			case "brand_chics":								allFix({mainSel:2,lnbSel:1}); $("#lnb").remove(); $(".main").addClass("under_line"); break;

			case "product_list":							allFix({mainSel:3,lnbSel:0,tabSel:0}); $("#lnb").remove(); break;
			case "product_view":							allFix({mainSel:3,lnbSel:0,tabSel:0}); $("#lnb").remove(); $("#subVisual").remove(); break;
			case "product_all":								allFix({mainSel:3,lnbSel:0,tabSel:0}); $("#lnb").remove(); break;

	//---------------------------------------------------------------------------------------			
			case "instagram":							    allFix({mainSel:4,lnbSel:0}); break;
			case "event":								    allFix({mainSel:4,lnbSel:1}); break;
			case "news":								    allFix({mainSel:4,lnbSel:2}); break;
			case "catalog":								    allFix({mainSel:4,lnbSel:3}); break;
	//---------------------------------------------------------------------------------------
			case "customer":								allFix({mainSel:5,lnbSel:0}); $("#subVisual").remove(); $("#lnb").remove(); break;
			case "inquiry":									allFix({mainSel:5,lnbSel:0}); break;
			case "faq":										allFix({mainSel:5,lnbSel:1}); break;
	//---------------------------------------------------------------------------------------	







			default:allFix({mainSel:-1,lnbSel:-1,tabSel:-1}); $("body").addClass("main");
		}
	}
	var headerShadow = function() {
		$(window).on("scroll",function(e){
			var st = $(window).scrollTop();
			if ($("body").hasClass("main")){
				if(st>50){
					if(!$("#header").hasClass("on")){
						$("#header").addClass("on scroll");
						//$("#header .logo a").find("img").attr({src:"../../images/layout/logo_on.png"})
						$("#header .util .btnBasket").addClass("on");
						$("#header .util .btnSearch").find("img").attr({src:"../../images/layout/icon_search.png"})
						$("#header .btnAllMenu").find("img").attr({src:"../../images/layout/btnAllMenu_on.png"})
						basket()
					}
				} else {
					if($("#header").hasClass("on")){
						$("#header").removeClass("on scroll");
						//$("#header .logo a").find("img").attr({src:"../../images/layout/logo.png"})
						$("#header .util .btnBasket").removeClass("on");
						$("#header .util .btnSearch").find("img").attr({src:"../../images/layout/icon_search02.png"})
						$("#header .btnAllMenu").find("img").attr({src:"../../images/layout/btnAllMenu.png"})
						basket()
					}
				}
			} else {
				$("#header").addClass("scroll");
			}
			if (!($("body").hasClass("main"))){
				$("#header").addClass("on");
				//$("#header .logo a").find("img").attr({src:"../../images/layout/logo_on.png"})
				$("#header .util .btnBasket").addClass("on");
				$("#header .util .btnSearch").find("img").attr({src:"../../images/layout/icon_search.png"})
				$("#header .btnAllMenu").find("img").attr({src:"../../images/layout/btnAllMenu_on.png"})
			}
		})
		$(window).trigger("scroll");
		function basket(){
			if ($("body").hasClass("main")){
				if ($("#header").hasClass("on")){
					$(this).on("mouseenter",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_basket_on.png"})						
					})
					$("#header .util .btnBasket").on("mouseleave",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_basket.png"})
					})
					$("#header .util .btnSearch").on("mouseleave",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_search.png"})
					})
				} else {
					$("#header .util .btnBasket").on("mouseenter",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_basket_on.png"})
					})
					$("#header .util .btnBasket").on("mouseleave",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_basket02.png"})
					})
					$("#header .util .btnSearch").on("mouseenter",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_search_on.png"})
					})
					$("#header .util .btnSearch").on("mouseleave",function(){
						$(this).find("img").attr({src:"../../images/layout/icon_search02.png"})
					})
				}
			} else {
				$("#header .util .btnBasket").on("mouseenter",function(){
					$(this).find("img").attr({src:"../../images/layout/icon_basket_on.png"})
				})
				$("#header .util .btnBasket").on("mouseleave",function(){
					$(this).find("img").attr({src:"../../images/layout/icon_basket.png"})
				})
				$("#header .util .btnSearch").on("mouseenter",function(){
					$(this).find("img").attr({src:"../../images/layout/icon_search_on.png"})
				})
				$("#header .util .btnSearch").on("mouseleave",function(){
					$(this).find("img").attr({src:"../../images/layout/icon_search.png"})
				})
			}
		}
		basket();
	}
	var slide = function(){
		var slideWrap = $("[data-slide-wrap]");
		slideWrap.each(function(){
			var btn_prev = $(this).find(".btn-prev");
			var btn_next = $(this).find(".btn-next");
			$(this).find(".slider").slick({
				dots:false,
				infinite:true,
				arrows:true,
				fade:true,
				prevArrow:btn_prev,
				nextArrow:btn_next,
			})	
		})
		var total = $("#mainContents .conBox02 .mask01 li").length;
		$("#mainContents .conBox02 .slide-num").text("01");
		$("#mainContents .conBox02 .slide-num-max").text("0"+total);
		var main_conBox02_01 = $("#mainContents .conBox02 .mask01 ul").slick({
			dots:false,
			infinite:true,
			arrows:true,
			fade:true,
			prevArrow:"#mainContents .conBox02 .btn-prev",
			nextArrow:"#mainContents .conBox02 .btn-next",
			asNavFor:"#mainContents .conBox02 .mask02 ul"
		})
		var main_conBox02_02 = $("#mainContents .conBox02 .mask02 ul").slick({
			dots:false,
			infinite:true,
			arrows:true,
			fade:true,
			prevArrow:"#mainContents .conBox02 .btn-prev",
			nextArrow:"#mainContents .conBox02 .btn-next",
			asNavFor:"#mainContents .conBox02 .mask01 ul"
		})
		$("#mainContents .conBox02 .mask01 ul").on("afterChange", function(event, slick, currentSlide){
			//console.log(currentSlide+1);
			var slideNum = currentSlide+1;
			$("#mainContents .conBox02 .slide-num").text("0"+slideNum);
			$("#mainContents .conBox02 .slide-num-max").text("0"+slick.slideCount);
		});
		
		var network = $(".distribution .conBox02 .mask ul").slick({
			dots:false,
			rows:2,
			slidesPerRow:4,
			slidesToShow:1,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".distribution .conBox02 .mask .btnPrev"),
			nextArrow:$(".distribution .conBox02 .mask .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesPerRow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesPerRow:1,
						slidesToShow:2,
					}
				}
			]
		})
		var capacity_prd1 = $(".capacity .conBox06 .product_list1 .mask ul").slick({
			dots:false,
			slidesToShow:4,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".capacity .conBox06 .product_list1 .btnPrev"),
			nextArrow:$(".capacity .conBox06 .product_list1 .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesToShow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesToShow:1,
					}
				}
			]
		})
		var capacity_prd2 = $(".capacity .conBox06 .product_list2 .mask ul").slick({
			dots:false,
			slidesToShow:4,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".capacity .conBox06 .product_list2 .btnPrev"),
			nextArrow:$(".capacity .conBox06 .product_list2 .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesToShow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesToShow:1,
					}
				}
			]
		})
		var capacity_prd3 = $(".capacity .conBox06 .product_list3 .mask ul").slick({
			dots:false,
			slidesToShow:4,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".capacity .conBox06 .product_list3 .btnPrev"),
			nextArrow:$(".capacity .conBox06 .product_list3 .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesToShow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesToShow:1,
					}
				}
			]
		})
		var capacity_prd4 = $(".capacity .conBox06 .product_list4 .mask ul").slick({
			dots:false,
			slidesToShow:4,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".capacity .conBox06 .product_list4 .btnPrev"),
			nextArrow:$(".capacity .conBox06 .product_list4 .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesToShow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesToShow:1,
					}
				}
			]
		})
		var capacity_prd5 = $(".capacity .conBox06 .product_list5 .mask ul").slick({
			dots:false,
			slidesToShow:4,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:true,
			prevArrow:$(".capacity .conBox06 .product_list5 .btnPrev"),
			nextArrow:$(".capacity .conBox06 .product_list5 .btnNext"),
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesToShow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesToShow:1,
					}
				}
			]
		})
		/*
		var mainPrd = $("#mainContents .conBox01 .mask .list").slick({
			dots:true,
			rows:2,
			slidesPerRow:4,
			slidesToShow:1,
			slidesToScroll:1,			
			//centerMode:true,
			arrows:false,
			responsive:[
				{
					breakpoint:1025,
					settings:{
						slidesPerRow:2,
					}
				},
				{
					breakpoint:700,
					settings:{
						slidesPerRow:1,
					}
				}
			]
		})
		*/
		var mainConBox03_li = $("#mainContents .conBox03 .mask li").length;
		if (mainConBox03_li > 2 ){
			var mainConBox03 = $("#mainContents .conBox03 .mask .slider").slick({
				dots:false,
				slidesToShow:3,
				slidesToScroll:1,
				centerMode:false,
				arrows:true,
				prevArrow:"#mainContents .conBox03 .title .arrow.btnPrev",
				nextArrow:"#mainContents .conBox03 .title .arrow.btnNext",
				responsive:[
					{
						breakpoint:801,
						settings:{
							slidesToShow:2,
						}
					}
				]
			})
		}		
		$(window).on("resize",function(){
			var w = $(window).width();
			if (w < 641){
				var prd_visual = $("#mainContents .product_tabContents > ul > li.on .prd-list .mask > ul").slick({
					autoplay:true,
					autoplaySpeed:6000,
					infinite:true,
					arrows:false,
					dots:true,
					slidesToShow:1,
					slidesToScroll:1,
				})
			} else {
				$("#mainContents .product_tabContents > ul > li.on .prd-list .mask > ul").slick('unslick');	
			}
		})
		$(window).trigger("resize");
		var prd_visual = $("#product_visual .mask .slider").slick({
			dots:false,
			//centerMode:true,
			fade:true,
			arrows:true,
			prevArrow:"#product_visual .mask .arrow.btnPrev",
			nextArrow:"#product_visual .mask .arrow.btnNext",
			responsive:[
				{
					breakpoint:641,
					settings:{
						dots:true
					}
				}
			]
		})
		
		var prd_li = $(".productView_top .imgWrap .mask li").length;
		if ( prd_li > 3 ){
			var prd_view1 = $(".productView_top .imgWrap .mask .slider-for").slick({
				dots:false,
				arrows:true,
				infinite:true,
				prevArrow:".productView_top .imgWrap .mask02 .arrow.btnPrev",
				nextArrow:".productView_top .imgWrap .mask02 .arrow.btnNext",
				asNavFor:".productView_top .imgWrap .mask02 .slider-nav",
			})

			var prd_view2 = $(".productView_top .imgWrap .mask02 .slider-nav").slick({
				dots:false,
				slidesToShow:3,
				slidesToScroll:1,
				infinite:true,			
				arrows:true,
				prevArrow:".productView_top .imgWrap .mask02 .arrow.btnPrev",
				nextArrow:".productView_top .imgWrap .mask02 .arrow.btnNext",
				focusOnSelect: true,
				asNavFor:".productView_top .imgWrap .mask .slider-for",
				responsive:[
					{
						breakpoint:801,
						settings:{
							//slidesToShow:4,
						}
					}	
				]
			})
		} else {
			var prd_view1 = $(".productView_top .imgWrap .mask .slider-for").slick({
				dots:false,
				arrows:true,
				infinite:false,
				prevArrow:".productView_top .imgWrap .mask02 .arrow.btnPrev",
				nextArrow:".productView_top .imgWrap .mask02 .arrow.btnNext",
				asNavFor:".productView_top .imgWrap .mask02 .slider-nav",
			})

			var prd_view2 = $(".productView_top .imgWrap .mask02 .slider-nav").slick({
				dots:false,
				slidesToShow:3,
				slidesToScroll:3,
				infinite:false,			
				arrows:true,
				prevArrow:".productView_top .imgWrap .mask02 .arrow.btnPrev",
				nextArrow:".productView_top .imgWrap .mask02 .arrow.btnNext",
				focusOnSelect: true,
				asNavFor:".productView_top .imgWrap .mask .slider-for",
				responsive:[
					{
						breakpoint:801,
						settings:{
							//slidesToShow:4,
						}
					}	
				]
			})
		}
		
		var w = $(window).width();
		if (w < 641){
			var notice_main = $(".notice_main > ul").slick({
				dots:false,
				slidesToShow:1,
				slidesToScroll:1,
				//centerMode:true,
				arrows:false,
			})
		}
		
		var vision01 = $(".vision .txtBox ul").slick({
			dots:false,
			arrows:false,
			fade:true,
			asNavFor:".vision .imgBox ul",
		})

		var vision02 = $(".vision .imgBox ul").slick({
			dots:false,
			arrows:true,
			prevArrow:".vision .imgBox .arrow.btnPrev",
			nextArrow:".vision .imgBox .arrow.btnNext",
			focusOnSelect: true,
			asNavFor:".vision .txtBox ul",
		})
		var capacity = $(".capacity .conBox10 .mask1 .slider-for").slick({
			dots:false,
			infinite:true,
			arrows:false,
			asNavFor:".capacity .conBox10 .mask2 .slider-nav ",
		})
		var capacity = $(".capacity .conBox10 .mask2 .slider-nav").slick({
			dots:false,
			arrows:true,
			focusOnSelect: true,
			arrows:true,
			slidesToShow:3,
			centerMode:true,
			centerPadding:0,
			prevArrow:".capacity .conBox10 .mask2 .arrow.btnPrev",
			nextArrow:".capacity .conBox10 .mask2 .arrow.btnNext",
			asNavFor:".capacity .conBox10 .mask1 .slider-for ",
		})
		var event_slide = $(".event-slide .mask .slider").slick({
			dots:false,
			arrows:true,
			spaceBetween:50,
			prevArrow:".event-slide .arrow.btn-prev",
			nextArrow:".event-slide .arrow.btn-next",
		})
	}
	var benefit = function(){
		var num = 0;
		var total = $(".benefit .mask2 ul li").length;
		var del;
		$(".benefit .mask2 ul li").on("click",function(e){
			var sel = $(this).index();
			num = sel;
			clearInterval(del);
			$(".benefit .mask2 ul li").removeClass("on");
			$(this).addClass("on");

			$(".benefit .mask1 > ul > li").removeClass("on");
			$(".benefit .mask1 > ul > li").eq(sel).addClass("on");
			//del = setInterval(auto,3500);
			return false;
		})
		
		$(".benefit .mask1 .btns .btnPrev").on("click",function(){
			//console.log(num);
			if (num==0){
				$(".benefit .mask2 ul li").eq(8).trigger("click");	
			} else {
				$(".benefit .mask2 ul li").eq(num-1).trigger("click");
			}			
			return false;
		})
		$(".benefit .mask1 .btns .btnNext").on("click",function(){
			//console.log(num);
			if (num==8){
				$(".benefit .mask2 ul li").eq(0).trigger("click");	
			} else {
				$(".benefit .mask2 ul li").eq(num+1).trigger("click");
			}			
			return false;
		})

		$(".benefit .slider").slick({
			dots: false,
			//arrows:true,
			prevArrow:".benefit .slideWrap .btnPrev",
			nextArrow:".benefit .slideWrap .btnNext",
		})
	}
	var worksList = function(){
		var w = $(window).width();
		$(window).on("load",function(){
			function grid(){
				$('.grid').masonry({
					// options
					itemSelector: '.grid-item',
				
				});
			}
			

			if (w > 1024){
				load('#js-load', '6');
				$("#js-btn-wrap .button").on("click", function () {
					load('#js-load', '3', '#js-btn-wrap');
					grid();
				})
			} else if(w > 640){
				load('#js-load', '6');
				$("#js-btn-wrap .button").on("click", function () {
					load('#js-load', '2', '#js-btn-wrap');
					grid();
				})	
			} else{
				load('#js-load', '6');
				$("#js-btn-wrap .button").on("click", function () {
					load('#js-load', '4   ', '#js-btn-wrap');
					grid();
				})	
			}

			$('.grid').masonry({
				// options
				itemSelector: '.grid-item',
			})

			function load(id, cnt, btn) {
				var item_list = id + " .js-load:not(.active)";
				var item_length = $(item_list).length;
				var item_total_cnt;
				if (cnt < item_length) {
					item_total_cnt = cnt;
				} else {
					item_total_cnt = item_length;
					$('.button').hide()
				}
				$(item_list + ":lt(" + item_total_cnt + ")").addClass("active");

				
			}
		})
	}
	var works_view = function(){
		var h = $(window).height();
		$(".works_view_visual").css({height:h});
		console.log(h);
		TweenMax.to($(".works_view_visual .bottomArrow img"),0.6,{bottom:10,yoyo:true,repeat:-1});
		if ($("#header").hasClass("view")){
			//$(".logo").find("img").attr({src:"../../images/layout/logo_sub.png"})
		}
		
		$(".works_view.btns .btnTop").on("click",function(){
			TweenMax.to($("#works_view"),1,{scrollTop:0,ease:Expo.easeOut})
			return false;
		})


	}
	var showScroll = function(){
		$(window).scroll( function(){
			//console.log("aa");
			$('.show-on-scroll').each( function(i){
				var bottom_of_object = $(this).offset().top + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				console.log(bottom_of_window,bottom_of_object);
				if( bottom_of_window > bottom_of_object-400 ){
					$(this).animate({'opacity':'1'},500);
				}
			}); 
		});
	}
	var upload = function(){
		var fileTarget1 = $('.filebox1 .upload-hidden');
		fileTarget1.on('change', function(){ // 값이 변경되면
			if(window.FileReader){ // modern browser
				var filename = $(this)[0].files[0].name;
			} else { // old IE
				var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출
			} // 추출한 파일명 삽입
			$(this).siblings('.upload-name').val(filename);
		});
		var fileTarget2 = $('.filebox2 .upload-hidden');
		fileTarget2.on('change', function(){ // 값이 변경되면
			if(window.FileReader){ // modern browser
				var filename = $(this)[0].files[0].name;
			} else { // old IE
				var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출
			} // 추출한 파일명 삽입
			$(this).siblings('.upload-name').val(filename);
		});
	}
	var contactus = function(){
		var target_txt1 = $(".mapWrap .txtBox01");
		var target_txt2 = $(".mapWrap .txtBox02");
		var tlm  = new TimelineMax();
			tlm
				.from(target_txt1,1,{autoAlpha:0, xPercent:'-30%',ease:Quint.easeOut},"0.5")
				.from(target_txt2,1,{autoAlpha:0, xPercent:'-30%',ease:Quint.easeOut},"1")
		$(window).on("load",function(){
			
		})
	}
	var productTab = function(){
		$(".product_tab ul li").on("click",function(){
			var sel = $(this).index();
			$(".product_tab ul li").removeClass("on");
			$(this).addClass("on");
			$(".product_tabContents > ul > li").removeClass("on");
			$(".product_tabContents > ul > li").eq(sel).addClass("on");
			prdSlide();
			return false;
		})

		
		function prdSlide(){
			var w = $(window).width();
			if (w < 641){
				var prd_visual = $("#mainContents .product_tabContents > ul > li.on .prd-list .mask > ul ").slick({
					autoplay:true,
					autoplaySpeed:6000,
					infinite:true,
					arrows:false,
					dots:true,
					slidesToShow:1,
					slidesToScroll:1,
				})
			} else {
				$(".product_tabContents .slick-slider").slick('unslick');
			}
		}
		prdSlide();
		
		$(".product_tab02 ul li").on("click",function(){
			var sel = $(this).index();
			$(".product_tab02 ul li").removeClass("on");
			$(this).addClass("on");			
		})
		
		$(".productView_bottom_contents .tab ul li").on("click",function(){
			var st = $(window).scrollTop();
			var sel = $(this).index();
			var c_st = $(".productView_bottom_contents > ul > li").eq(sel).offset().top-100;
			
			TweenMax.to($("html,body"),1,{scrollTop:c_st,ease:Expo.easeOut})

			console.log(c_st);
			return false;
		})
	}
	var tab = function(){
		$(".location .tab > ul > li").on("click",function(){
			var sel = $(this).index();
			$(".location .tab > ul > li").removeClass("on");
			$(this).addClass("on");
			$(".tabContents > ul > li").removeClass("on");
			$(".tabContents > ul > li").eq(sel).addClass("on");
			return false;
		})
		$(".capacity .conBox06 .tab ul li").on("click",function(){
			var sel = $(this).index();
			$(".capacity .conBox06 .tab ul li").removeClass("on");
			$(this).addClass("on");
			$(".tabContents > ul > li").removeClass("on");
			$(".tabContents > ul > li").eq(sel).addClass("on");
			return false;
		})
	}
	var fancybox = function(){
		$(".fancybox").fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	}
	var FAQ = function() {
		$(".faq_box").on("click",function(e){
			$(this).toggleClass("on");
			$(this).find(".answer").slideToggle();
			$(this).siblings().removeClass("on");
			$(this).siblings().find(".answer").slideUp();
			return false;
		})
	}
	var search = function(){
		$("#header .btnSearch").on("click",function(){
			$("#searchWrap").fadeIn();
			$("#searchWrap .searchBox input").focus();
			return false;
		})
		$("#searchWrap .btnClose").on("click",function(){
			$("#searchWrap").fadeOut();
			return false;
		})
		$(document).keyup(function(e) {
		  if (e.keyCode == 27) {
				$("#searchWrap").fadeOut();
			}
		});
	}
	var upload = function(){
		var fileTarget = $('.filebox .upload-hidden');
		fileTarget.on('change', function(){ // 값이 변경되면
			if(window.FileReader){ // modern browser
				var filename = $(this)[0].files[0].name;
			} else { // old IE
				var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출
			} // 추출한 파일명 삽입
			$(this).siblings('.upload-name').val(filename);
		});
	}
	var iframe = function(){
		$(".btnPlay").on("click",function(e){
			$(this).parent().parent(".hv").fadeOut();			
			//$(this).parent().parent("hv").siblings("video").play();
			return false;
		})
	}
	var productView_iframe = function(){
		$(window).on("resize",function(){
			var iframe = $(".productView_bottom_contents iframe");
			var w = iframe.width();
			iframe.css({height:w})
		})
		$(window).trigger("resize");
		
	}
	var language = function(){
		var link = document.location.href;
		var link2 = link.replace("/html/","/eng/html/")
	}
	var scroll_conBox = function(){
		$(window).on("scroll",function(){
			var target = $(".conBox");
			target.each(function(){
				var thisH = $(this).offset().top - $(this).height()/0.7;
				var st = $(window).scrollTop();
				var w = $(window).width();
					
				if(st > thisH){
					$(this).addClass('fade')
				}

			})
		})
		$(window).trigger("scroll");
	}



	var wave = function(){
		var waveImg = $(".wave img");
		$(window).on("scroll",function(){
			var wy = window.scrollY;
			waveImg.css({left:-wy*2})
		})
	}
	var useMap = function(){
		$('img[usemap]').rwdImageMaps();
	}
	var prd_view = function(){
		$(".prd-view-main .img-slide ul").slick({
			loop:true,
			arrows:false,
			dots:true,
		})
		$(".prd-main-show ul").slick({
			loop:true,
			arrows:true,
			prevArrow:".prd-main-show .btn-prev",
			nextArrow:".prd-main-show .btn-next",
		})
	}
	return {		
		gnb:gnb,
		mainVisual:mainVisual,
		fix:fix,
		headerShadow:headerShadow,
		selectBox:selectBox,
		slide:slide,
		productTab:productTab,
		//fancybox:fancybox,
		tab:tab,
		FAQ:FAQ,
		search:search,
		upload:upload,
		iframe:iframe,
		productView_iframe:productView_iframe,
		language:language,
		scroll_conBox:scroll_conBox,
		wave:wave,
		useMap:useMap,
		prd_view:prd_view,
	}
}());

$(function(){	
	daram.gnb();
	daram.mainVisual();
	daram.fix();
	daram.headerShadow();
	daram.selectBox();
	daram.productTab();
	//daram.fancybox();
	daram.tab();
	daram.FAQ();
	daram.search();
	daram.upload();
	daram.iframe();
	daram.productView_iframe();
	daram.slide();
	daram.language();
	daram.scroll_conBox();
	daram.wave();
	daram.useMap();
	daram.prd_view();
})







function agree(){
	if (confirm("개인정보취급방침에 동의하시면 확인을 눌러주세요") == true){    //확인
		//document.form.submit();
	}else{   //취소
		return;
	}
}




