/* datepicker入力欄をfocus時にreadonlyにする */
$(function(){
	$('.datepicker').click(function(){
		$('input').blur();
	});
});


/* コンシェルジュページのステップフォーム */
$(function() {
	var num=0;     //現在のステップ数を格納する変数
	var edit_num;  //修正するステップ数を格納する変数
	
	/* 現在のステップ数を取得 */
	$('#step form ol > li').on('click', function(){
		num = $('#step form ol > li').index(this);
	});
	
	/* 「次へ」をクリックした時の処理 */
	$(document).on('click', 'button.next.active', function(){
		$(window).scrollTop($('#step').offset().top);
		slideLeft();
		if(edit_num<14){
			$('#step_indicater img').hide();
		}else if(num<15){
			$('#step_indicater img').attr('src','resources/images/concierge/step' + (num+1) + '.svg');
		}else{
			$('#step_indicater img').hide();
		}
	});
	
	/* 「戻る」をクリックした時の処理 */
	$(document).on('click', 'button.prev', function(){
		$(window).scrollTop($('#step').offset().top);
		slideRight();
		$('#step_indicater img').attr('src','resources/images/concierge/step'+ (num+1) +'.svg');
	});
	
	/* 確認画面の「編集」をクリックした時の処理 */
	$(document).on('click', '#confirm button.edit', function(){
		edit_num = $('button.edit').index(this);
		$('#step form ol > li').eq(15).addClass('right')
		$('#step form ol > li').eq(edit_num).removeClass('left')
		$('#step form ol > li').css('height','auto');
		$('#step form ol > li').eq(edit_num).find('.prev').hide();
		$('#step_indicater img').show();
		$('#step_indicater img').attr('src','resources/images/concierge/step' + (edit_num+1) + '.svg');
		$(window).scrollTop($('#step').offset().top);
		$('button.next.active').html('内容を確認する');
	});
	
	/* テキスト入力でキーが押されたときの処理 */
	$("input[type='text']").keyup(function(){
		if($(this).val()!=''){
			if(num==4 || edit_num==4){
				var er=0;
				$('#step form ol > li').eq(4).find('input[type="text"]').each(function(){
					var value = $(this).val();
					if (value == "" || !value.match(/[^\s\t]/))er++;
				});
				if(er==0){
					$('#step form ol > li').eq(4).find('dd').addClass('active');
				}
			}else{
				$(this).parent().addClass('active');
			}
		}else{
			if(num==4 || edit_num==4){
				$('#step form ol > li').eq(4).find('dd').removeClass('active');
			}else{
				$(this).parent().removeClass('active');
			}
		}
		if(validate() && num!=9){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else if(num==9){
			var error_nine = 0;
			$('#step form ol > li').eq(num).find('input[type="text"]').each(function(){
				if ($(this).val() == "" || !$(this).val().match(/[^\s\t]/))error_nine++;
			});
			if(error_nine!=2){
				$('#step form ol > li').eq(num).find('.next').addClass('active');
			}else{
				$('#step form ol > li').eq(num).find('.next').removeClass('active')
			}
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active');
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* datepicker入力時の処理 */
	$(".datepicker").change(function(){
		if($(this).val()!=''){
			$(this).parent().addClass('active');
		}else{
			$(this).parent().removeClass('active');
		}
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active');
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* メール入力入力でキーが押されたときの処理 */
	$("input[type='email']").keyup(function(){
		if($(this).val()!=''){
			$(this).parent().addClass('active');
		}else{
			$(this).parent().removeClass('active');
		}
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* メール入力入力欄からカーソルが外れたときの処理 */
	$("input[type='email']").blur(function(){
		if($(this).attr('required')!='required')return true;
		var value = $(this).val();
		if(value != "" && value.match(/[^\s\t]/) && !value.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
			$(this).after('<div class="error">メールアドレスの形式で入力してください。</div>');
		}else{
			$(this).next('div').remove();
		}
	});
	
	/* 電話番号入力入力でキーが押されたときの処理 */
	$("input[type='tel']").keyup(function(){
		if($(this).val()!=''){
			$(this).parent().addClass('active');
		}else{
			$(this).parent().removeClass('active');
		}
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* ラジオボタンが押された時の処理 */
	$("input:radio").change(function() {
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=\"' + attr_name + '\"]').html($('input:radio[name=' + attr_name + ']:checked').val());
	});
	
	/* チェックボックスが押された時の処理 */
	$("input:checkbox").change(function() {
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		var option = '';
		$('input:checkbox[name=\"' + attr_name + '\"]:checked').each(function (i) {
			if(i==0){
				option = $(this).val();
			}else{
				option += ', ' + $(this).val();
			}
		});
		$('#confirm span[data=\"' + attr_name + '\"]').html(option);
	});
	
	/* セレクトメニュー選択時の処理 */
	$('select').change(function() {
		if($(this).val()!=''){
			$(this).parent().addClass('active');
		}else{
			$(this).parent().removeClass('active');
		}
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* テキストエリアの処理 */
	$('textarea').keyup(function(){
		if(validate()){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else{
			$('#step form ol > li').eq(num).find('.next').removeClass('active')
		}
		
		var attr_name = $(this).attr("name");
		$('#confirm span[data=' + attr_name + ']').html($(this).val());
	});
	
	/* 次のステップへ進む */
	function slideLeft(){
		if(num<15){
			$('#step form ol > li').eq(num).addClass('left');
			$('#step form ol > li').eq(num+1).removeClass('right');
			num++;
		}
		
		if(num==15){
			$('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');
		}
		if(edit_num<15){
			$('#step form ol > li').eq(edit_num).addClass('left');
			$('#step form ol > li').eq(15).removeClass('right');
			$('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');

		}
	}
	
	/* 前のステップへ戻る */
	function slideRight(){
		$('#step form ol > li').eq(num).addClass('right');
		$('#step form ol > li').eq(num-1).removeClass('left');
		num--;
	}
	
	/* 確認画面高さ制御 */
	$(window).resize(function(){
		if(num==15 && !$('#step form ol > li').eq(15).hasClass('right')){
			$('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');
		}
	});
	
	/* バリデーション */
	function validate(){
		var error=0;
		$('#step form ol > li').eq(num).find('input[type="text"]').each(function(){
			var value = $(this).val();
			if($(this).attr('required')!='required')return true;
			if (value == "" || !value.match(/[^\s\t]/))error++;
		});
		$('#step form ol > li').eq(num).find('input[type="tel"]').each(function(){
			if($(this).attr('required')!='required')return true;
			var value = $(this).val();
			if (value == "" || !value.match(/[^\s\t]/))error++;
		});
		$('#step form ol > li').eq(num).find('input[type="email"]').each(function(){
			if($(this).attr('required')!='required')return true;
			var value = $(this).val();
			if (value == "" || !value.match(/[^\s\t]/)) {
				error++;
			}else if(!value.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
				error++;
			}
		});
		$('#step form ol > li').eq(num).find('input[type="radio"]').each(function(){
			if($(this).attr('required')!='required')return true;
			if($('input[name="'+ $(this).attr("name") +'"]:checked').length == 0)error++;
		});
		$('#step form ol > li').eq(num).find('input[type="checkbox"]').each(function(){
			if($(this).attr('required')!='required')return true;
			if($('input[name="'+ $(this).attr("name") +'"]:checked').length == 0)error++;
		});
		$('#step form ol > li').eq(num).find('select').each(function(){
			if($(this).attr('required')!='required')return true;
			var value = $(this).val();
			if (value == "" || !value.match(/[^\s\t]/))error++;
		});
		
		if(error!=0){
			return false;
		}
		return true;
	}
});

