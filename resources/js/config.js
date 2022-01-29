/* LIKE削除 */
$(function() {
	$('.like_delete').click(function(e) {
		if(window.confirm('LIKE 一覧から削除しますが宜しいですか？')){
			/* 削除処理 */
		}
	});
});



/* 詳細検索オーバーレイ */
$(function() {
	$('.result_list form > ul > li:nth-child(-n+2) ').click(function(e) {
		
		var select = '.' + $(this).attr('class');
		$('#overlay_search div > ul').css('display','none');
		$('#overlay_search div ' + select).css('display','block');
		$('#overlay_search').fadeIn();
		$('html').addClass('overlay');
	});
	$('#overlay_search #close').click(function(e) {
		$('#overlay_search').fadeOut();
		$('html').removeClass('overlay');
	});
	$('#overlay_search').click(function(e) {
		if(!$(e.target).closest('#overlay_search div').length) {
			$('#overlay_search').fadeOut();
			$('html').removeClass('overlay');
		}
	});
});



/* 日本地図検索オーバーレイ */
$(function() {
	$('#search area').click(function(e) {
		var select = '.' + $(this).attr('class');
		$('#search #overlay dl').css('display','none');
		$('#search #overlay ' + select).css('display','block');
		$('#search #overlay').fadeIn();
		$('html').addClass('overlay');
	});
	$('#search #overlay #close').click(function(e) {
		$('#search #overlay').fadeOut();
		$('html').removeClass('overlay');
	});
	$('#overlay').click(function(e) {
		if(!$(e.target).closest('#overlay div').length) {
			$('#overlay').fadeOut();
			$('html').removeClass('overlay');
		}
	});
});

/* 詳細ページmodal */
/*Add 20210528*/
$(function(){
  $('.modal').click(function(e) {
        $('html').addClass('overlay');
        var obj = $(this).data('name');
        $(obj).fadeIn();
	});
    
    $('.modal_sec .close').click(function(e) {
		$('.modal_sec').fadeOut();
		$('html').removeClass('overlay');
	});
    
    $('.modal_sec').click(function(e) {
        if(!$(e.target).closest('.modal_sec .inr').length) {
           $(this).fadeOut();
           $('html').removeClass('overlay');
        }
   });
});


/* オーバーレイメニュー */
$(function() {
	$('#menu_open').click(function(e) {
		$('#overlay_nav').fadeIn();
		$('#overlay_nav div').addClass('open');
		$('html').addClass('overlay');
	});
    
	$('#overlay_nav #close').click(function(e) {
		$('#overlay_nav').fadeOut();
		$('#overlay_nav div').removeClass('open');
		$('html').removeClass('overlay');
	});
	$('#overlay_nav').click(function(e) {
		if(!$(e.target).closest('#overlay_nav div').length) {
			$('#overlay_nav').fadeOut();
			$('#overlay_nav div').removeClass('open');
			$('html').removeClass('overlay');
		}
	});
	$('#overlay_nav a').click(function(e) {
		$('#overlay_nav').fadeOut();
		$('#overlay_nav div').removeClass('open');
		$('html').removeClass('overlay');
	});
});


/* ヘッダ固定表示 */
$(function() {
	$(window).scroll(function(){
		var head_pos = $('header h1 + a').offset().top;
		var scr_count = $(document).scrollTop();
		
		if(scr_count > head_pos + $('header h1 + a').height()){
			$('header div').addClass('fixed');
			$('article').addClass('fixed');
			$('.detail > nav').addClass('fixed');
			$('.detail2 > nav').addClass('fixed');
			$('.result_list > form').addClass('fixed');
		}else{
			$('header div').removeClass('fixed');
			$('article').removeClass('fixed');
			$('.detail > nav').removeClass('fixed');
			$('.detail2 > nav').removeClass('fixed');
			$('.result_list > form').removeClass('fixed');
		}
	});
});


/* ローディング */
$(function(){
	$('#wrapper').fadeIn();
	$('#loading').fadeOut();
});


/* 要素をnum個つずつ高さを合わせて並べる */
$(window).on('load resize',function(){
// 設定項目1：親要素名
// 設定項目2：高さを合わせたい子要素名の配列。子要素同士で親子関係がある場合は、親を配列の後ろに置くこと。
// 設定項目3：1行に並べる子要素数。全ての子要素を同じ高さにする場合は「0」を指定。
	AjustHeight(".list", ["h3","h4","p"], 2);
    /*2021*/
//    AjustHeight(".slick", ["h3","p",".item > a"], 0);

});

///*SNSのURL変更*/
//$(function(){
//   
//   var getPageTitle = encodeURI(document.title);
//   var pageURL = location.href;
//   
//   $('.sns_sec li a').each(function(){
//     var url = $(this).attr('href'); 
//     var result = url.replace('<url>',pageURL).replace('<title>',getPageTitle);
//    　$(this).attr('href',result); 
//   });
//    
//    
//    function slickAjust(){
//        let h = 0;
//        let obj = $('.slick .item');
//        obj.each(function(){
//            h = $(this).height() > h ? $(this).height() : h;
//        });
//        console.log(h);
//        $('.slick .item a').css('height',h+"px");
//    }
//    slickAjust();
//});
//

function AjustHeight(element,childelem,num){
	$(element).each(function(){
		
		var clen = childelem.length;
		
		for(var r=0;r<clen;r++){
			var len;
			if(num==0){
				len = 1;
				num = $(this).find(childelem[r]).length;
			}else{
				len = Math.floor($(this).find(childelem[r]).length/num)+1;
			}
			
			
			for(var i=0;i<len;i++){
				var rep = 0;
				for(var j=0;j<num;j++){
					$(this).find(childelem[r]).eq(num*i+j).css("height","");
					var itemHeight = parseInt($(this).find(childelem[r]).eq(num*i+j).css('height'));
					if(itemHeight > rep){
						rep = itemHeight;
					};
				}
				for(var k=0;k<num;k++){
					$(this).find(childelem[r]).eq(num*i+k).css("height",rep);
				}
			}
		}
	});
}
