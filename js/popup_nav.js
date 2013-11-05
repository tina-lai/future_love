//アニメーションの秒数
var animationTime = 300;
var count = 5;
var timer;
var myTimer;

var currentNum = "";

$(document).ready(function(){
	$(".popupNavi").css({'display':'block'});
	$(".popupNavi .popupNaviChild").css({'display':'none', 'z-index':'0'});
	
	//グローバルナビ全体のホバー関連
	$("header nav").hover(
		function() {
			clearInterval(myTimer);
		},
		function() {
			myTimer = setInterval("wait()", 300);
		}
	);
	
	//グローバルナビ内の各ボタンのホバー関連
	$("header nav li img").mouseover(
		function() {
			clearInterval(myTimer);
			
			if ($(this).parents("li").hasClass("pop")) {
				if (currentNum !== $("#globalNavi li").index($(this).parents("li"))) {
					
					currentNum = $("#globalNavi li").index($(this).parents("li"));
					hideNav();
					showNav($(this).parents("li"));
				}
				else {
				}

			}
			else {
				hideNav();
			}
		}
	);
});

function wait() {
	hideNav();
	currentNum = "";			//初期化
	clearInterval(myTimer);
}

//-------------------------------------------------------------------
//　ブロックをポップアップで表示
//-------------------------------------------------------------------
function showNav(inBlock) {
	var tmpStr = "";
	
	$(".popupNavi .popupNaviChild").css({'z-index':'0'})
	
	if ($(inBlock).hasClass("nav01")) {
		tmpStr = "nav01";
	}
	else if ($(inBlock).hasClass("nav02")) {
		tmpStr = "nav02";
	}
	else if ($(inBlock).hasClass("nav03")) {
		tmpStr = "nav03";
	}
	else if ($(inBlock).hasClass("nav04")) {
		tmpStr = "nav04";
	}
	else if ($(inBlock).hasClass("nav05")) {
		tmpStr = "nav05";
	}
	else if ($(inBlock).hasClass("nav06")) {
		tmpStr = "nav06";
	}
	else if ($(inBlock).hasClass("nav07")) {
		tmpStr = "nav07";
	}
	
	if (tmpStr != "") {
		$(".popupNavi #" + tmpStr).stop().css({'display':'block', 'z-index':'1000', 'top':'-10px', opacity:'0.2'}).animate({opacity:'1', top: '0px'}, animationTime, function() { $(".popupNavi #" + tmpStr).css({'display':'block', 'z-index':'1000'});})
	}
}

//-------------------------------------------------------------------
//　ポップアップしたブロックを消去
//-------------------------------------------------------------------
function hideNav() {
	$(".popupNavi .popupNaviChild").stop().animate({opacity:'0'}, animationTime, function() { $(".popupNavi .popupNaviChild").css({'display':'none', 'z-index':'0'});});
}

