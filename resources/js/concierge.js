
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
	let stepLength = 0; //STEPの数

	// test
	init();

	/* 「次へ」をクリックした時の処理 */
	$(document).on('click', 'button.next.active', function(){
		$(window).scrollTop($('#step').offset().top);
		slideLeft();
	});
	
	/* 「戻る」をクリックした時の処理 */
	$(document).on('click', 'button.prev', function(){
		$(window).scrollTop($('#step').offset().top);
		slideRight();
	});

	
	/* 確認画面の「編集」をクリックした時の処理 */
	$(document).on('click', '#confirm button.edit', function(){
		edit_num = $('button.edit').index(this);
		num = $('button.edit').index(this);
		$('#step form ol > li').removeClass('right left');
		$('#step form ol > li:nth-child(-n + '+(num)+')').addClass('left');
		$('#step form ol > li:nth-child(n + '+(num+2)+')').addClass('right');

		$('#step_indicater').show();
		changeStep();
		$(window).scrollTop($('#step').offset().top);
		$('button.next.active').html('内容を確認する');
		$('button.next.active').addClass('yellow');
		stepHeightAjust();
	});
	
	/* テキスト入力でキーが押されたときの処理 */
	$("input[type='text']").keyup(function(){
		if($(this).val()!=''){
			if(num==2 || edit_num==2){
				var er=0;
				$('#step form ol > li').eq(2).find('input[type="text"]').each(function(){
					var value = $(this).val();
					if (value == "" || !value.match(/[^\s\t]/)){
						er++;
					}else{
					
					}
				});
				if(er==0){
					$('#step form ol > li').eq(2).find('dd').addClass('active');
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
		// 予算
		if(validate() && num!=4){
			$('#step form ol > li').eq(num).find('.next').addClass('active')
		}else if(num==4){
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

	/* 詳細ボタン */
	$('.toggle_btn').on('click',function(){
		$(this).hide();
		$(this).next().slideToggle('first',function(){
			stepHeightAjust();
		});
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

	/* プラン選択の処理 */
	$('#plan_checkbox input').change(function(){

		const obj = $(this).closest('#plan_checkbox').parent();
		$(obj).find('.plan').hide();
		
		let plan_array = [];
		$('#plan_checkbox :checkbox:checked').each(function() {
			var plan = $(this).data('plan');
			plan_array.push(plan);
			// $(obj).find('.'+plan).show();
		});

		// 道具のみ
		if(plan_array.includes('plan01')){
			$(obj).find('.plan_item').show();
		}
		// 場所＋食事
		if(plan_array.includes('plan02')){
			$(obj).find('.plan_item,.plan_food').show();
		}
		// 場所＋食事+ドリンク
		if(plan_array.includes('plan03')){
			$(obj).find('.plan_item,.plan_food,.plan_drink').show();
		}
		// オリジナルプラン
		if(plan_array.includes('plan04')){
			$(obj).find('.plan_original').show();
		}
	
		stepHeightAjust();
		
	});

	/* 次のステップへ進む */
	function slideLeft(){
		if(num<stepLength){
			$('#step form ol > li').eq(num).addClass('left');
			$('#step form ol > li').eq(num+1).removeClass('right');
			num++;
			stepHeightAjust();
			changeStep();
			
		}
	
		//確認ページ
		if(num==stepLength){
			// $('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');
			stepHeightAjust
			$('#step_indicater').hide()
		}

		//確認・修正後
		if(edit_num != undefined){
			num = stepLength;
			changeStep();
			$('#step_indicater').hide()
			$('#step form ol > li').addClass('left');
			$('#step form ol > li').eq(stepLength).removeClass('left right');
			stepHeightAjust();
			// $('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');
		}

	
	}

	/* 前のステップへ戻る */
	function slideRight(){
		$('#step form ol > li').eq(num).addClass('right');
		$('#step form ol > li').eq(num-1).removeClass('left');
		num--;
		stepHeightAjust();
		changeStep();
	}
	
	/* 確認画面高さ制御 */
	$(window).resize(function(){
		
		if(num==stepLength && !$('#step form ol > li').eq(stepLength).hasClass('right')){
			$('#step form ol > li').css('height',$('#step form ol > li:last-child #confirm').height() + 140 +'px');
		}
	});


	/* スタート関数 */
	function init(){
		stepHeightAjust();
		stepLength = $('#step form ol > li').length -1;
		changeStep();
		$('#step form ol > li').removeClass('right left');
		$('#step form ol > li:nth-child(-n + '+(num)+')').addClass('left');
		$('#step form ol > li:nth-child(n + '+(num+2)+')').addClass('right');
	}

	/* 高さ調整*/
	function stepHeightAjust(){
		const padd = 50;
		let h = $('#step form ol > li').eq(num).innerHeight();
		$('#step form ol').css({'height':h+padd+"px"});
	}

	/* STEP処理 */
	function changeStep(){
		$('#step_indicater div span').text(num+1);
		let w = $('#step_indicater div').innerWidth() / 2;
		// let pos = num / stepLength*100;
		let pos = (num+1) == stepLength ? `calc(100% * 0.9)` : num / stepLength*100 + '%';
		// $('#step_indicater div').css({'left':`calc(${pos}% + ${w}px)`});
		$('#step_indicater div').css({'left': pos});
		$('span.step_num').text(num+1+'/'+stepLength);
	}
	
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

