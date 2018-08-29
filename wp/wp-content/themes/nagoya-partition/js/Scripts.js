$(document).ready(function() {
	var hh = 90;
	var curr = 0;
	var ln = 4;
	var prop_none = {
		'display':'none','z-index':'0'
	};
	var prop = {
		'display':'block','z-index':'100'
	};
	
 	setInterval(function() {
		curr++;
		if(curr>ln){
			curr=0;
		}
		$("figure li").removeClass("active").eq(curr).addClass("active");
		
		//4番目のli要素の場合のみ#top01,#top02を表示しない
		if(curr === 3 || curr === 4){
			$("figure #top01").css(prop_none);
			$("figure #top02").css(prop_none);
		}else{
			$("figure #top01").css(prop);
			$("figure #top02").css(prop);
		}
	},4000);
	
		
	$(".boxer").boxer({
		mobile: true,
		top: 60
	});
	
	$("#btn_menu").unbind("click").click(function(){
		$(this).toggleClass("close");
		$("nav").toggleClass("active");
	});

	$('a[href^=#]').click(function(){
		var href= $(this).attr("href");
		var target = $(href === "#" || href === "" ? 'body' : href);
		var position = target.offset().top-hh; //ヘッダの高さ分位置をずらす
		$("html, body").animate({scrollTop:position}, 550, "swing");
		if($("#btn_menu").hasClass("close")){
			$("#btn_menu").removeClass("close");
		}
		if($("nav").hasClass("active")){
			$("nav").removeClass("active");
		}
		return false;
	});
	
	//■page topボタン
	$(function(){
		var topBtn=$('.top-back');
		topBtn.hide();


		//◇ボタンの表示設定
		$(window).scroll(function(){
		  if($(this).scrollTop()>80){

			//---- 画面を80pxスクロールしたら、ボタンを表示する
			topBtn.fadeIn();

		  }else{

			//---- 画面が80pxより上なら、ボタンを表示しない
			topBtn.fadeOut();

		  }
		});


		// ◇ボタンをクリックしたら、スクロールして上に戻る
		topBtn.click(function(){
		  $('body,html').animate({
		  scrollTop: 0},500);
		  return false;

		});

	});
	
	/* お問い合わせバナー 表示設定 */
	$(function(){
		var toiawase_banner = $('.toiawase-banner');
		toiawase_banner.hide();
		
		$(window).scroll(function(){
			if($(this).scrollTop()>80){
				toiawase_banner.fadeIn();
			}else{
				toiawase_banner.fadeOut();
			}
		});	
	});
});