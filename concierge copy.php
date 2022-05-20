<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title>大人数お役立ちコンシェルジュ | 日本最大級のBBQプラットフォーム Bavi</title>
	<link rel="stylesheet" href="resources/css/sanitize.css">
	<link rel="stylesheet" href="resources/css/base.css">
	<link rel="stylesheet" href="resources/css/base_sp.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="resources/js/config.js"></script>
	<script type="text/javascript" src="resources/js/smoothScroll.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->

	<script type="text/javascript" src="resources/js/jFormslider.js?1.1"></script>

	<script>
		$(document).ready(function() {
			options = {
				width: 500,
				height: 170,
				next_prev: true,
				next_class: 'btn next-primary',
				prev_class: 'btn prev-primary',
				error_class: 'error alert-danger',
				texts: {
					next: '次へ',
					prev: '戻る',
					submit: '送信'
				},

				speed: 400,
			};
			$('#slider').jFormslider(options);

			window.error_func = function(el){
				$('.error').remove();
				$(el).append("<div class='error'>ss</div>");
			}

			$('input[type=radio]').change(function(){
				$('.error').remove();
			})
			
		});

		const category = {
			'1':'aaa',
			'2':'bbb',
			'3':'ccc',
		};

		const flag = 0;
	
		function checkGroup(el) {

			let fruitRadio = document.getElementsByName(el);
			let len = fruitRadio.length;
		
			checkValue = '';
			checkRadio = false;
			for (let i = 0; i < len; i++){
				if (fruitRadio.item(i).checked){
					checkValue = fruitRadio.item(i).value;
					checkRadio = true;
				}
			}

			if(checkRadio){
				return true;
			}else{
				error_func('.a1');
			}
		}

		function getCurrentCategory(id){
			console.log(id);
			return true;
		}

	</script>

</head>

<body>
	<div id="loading"></div>
	<div id="wrapper">
		<header class="no_fixed">
			<h1>日本最大級のBBQプラットフォーム Bavi</h1>

			<a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
		</header>


		<article class="no_fixed">
			<section id="concierge" class="cont">

				<div class="inr">

					<h2>大人数お役立ちコンシェルジュ</h2>

					<figure style="margin-bottom: 20px;">
						<img src="/resources/images/concierge.jpg">
					</figure>
					<p>大人数のバーベキュー幹事になってしまった・・・会場探し、大量の食べ物、飲み物、イベント・・・など
						バーベキューの幹事はとても大変なのです。何より会場探しが一番大変。
						そこで、当社と提携している会場に立候補してもらうのはいかがでしょうか。
						会社の要望に沿って希望を出し、希望に近づける会場、お食事などをお選び頂けます。
						あなたにぴったりな会場やプランを見つけることができます！
					</p>

					<from>

						<div id="slider" class="form">
							<ul>

								<li data-id="slider_start" data-callafter="checkGroup('a1')" data-callbefore="getCurrentCategory('A')" class="a1">
									<div class="form-group">
										<input type="radio" id="a1" name="a1" value="test1"><label for="a1">A1</label>
										<input type="radio" id="a2" name="a1" value="test2"><label for="a2">A2</label>
									</div>
								</li>

								<li data-callbefore="getCurrentCategory('B')">
									<div class="form-group">
										<input type="text" class="form-control" data-msg="入力してください。" placeholder="「姓」を入力してください" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" data-msg="入力してください。" placeholder="「名」を入力してください" required>
									</div>
								</li>
								<li data-callbefore="some_function()">
									<div class="form-group">
										<input type="text" class="form-control" data-emailmsg="正しいEメールアドレスを入力してください。" data-toggle="tooltip" data-placement="top" 　 placeholder="Eメールアドレスを入力してください" email>
									</div>
								</li>
								<li>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="「電話番号」を入力してください" required>
									</div>
								</li>
								
							</ul>
						</div>

					</form>

				</div>

			</section>
		</article>

		<?php include __DIR__ . '/tpl/footer.php'; ?>

	</div>
</body>

</html>