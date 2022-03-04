<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">

	<meta property="og:title" content="日本最大級のBBQプラットフォーム Bavi">
	<meta property="og:image" content="http://bavi.tank.jp/resources/images/apple-touch-icon.png">
	<meta property="og:description" content="日本最大級のBBQプラットフォーム Bavi">
	<meta property="og:locale" content="ja_JP" />

	<link rel="apple-touch-icon" sizes="180x180" href="resources/images/apple-touch-icon.png">

	<title>チャット | 日本最大級のBBQプラットフォーム Bavi</title>

	<?php include __DIR__ . '/tpl/head.php'; ?>
	<link rel="stylesheet" href="resources/css/venue_detail.css?1.9">
	<link rel="stylesheet" href="resources/css/venue_detail_sp.css?1.3">

	<link rel="stylesheet" href="resources/css/chat.css?1.5">
	<link rel="stylesheet" href="resources/css/chat_sp.css?1.3">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

	<style>
		#bottom_line_btn {
			display: none;
		}
	</style>

	<script>
		$(function() {

		});
	</script>
</head>

<body>
	<div id="loading"></div>
	<div id="wrapper">
		<header>
			<h1>日本最大級のBBQプラットフォーム Bavi</h1>

			<a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
		</header>


		<article class="detail">
			<nav>
				<ul>
					<li><a href="#venue">会場詳細</a></li>
					<li><a href="#shop">売店情報</a></li>
					<li><a href="#campaign">キャンペーン</a></li>
					<li><a href="#access">アクセス</a></li>
					<li><a href="#spot">周辺SPOT</a></li>
					<li><a href="#voice">口コミ</a></li>
				</ul>
			</nav>

			<section id="chat_page" class="cont">

				<h2 class="tit"><span class="kanto">東 京</span>多摩川緑地バーベキュー広場</h2>

				<div id="chat_sec" class="sec">

					<h3>メッセージ</h3>

					<div class="message_sec">

						<div class="guest send_area">
							<div class="message">
								<div class="name">多摩川緑地バーベキュー広場</div>
								<div class="time">2022年4月1日10時50分</div>
								<div class="comment">コメントコメントコメントコメントコメントコメントコメント</div>
							</div>
						</div>

						<div class="admin send_area">
							<div class="message">
								<div class="time">2022年4月1日10時50分</div>
								<div class="comment">コメントコメントコメントコメントコメントコメントコメント</div>
							</div>
						</div>
					</div>
					<!--message_sec-->

				</div>
				<!--chat_sec-->

			</section>
			<!--chat_page-->


			
		</article>

		<form id="message_send_area" >
			
							<textarea placeholder="メッセージを入力"></textarea>
							<button id="message_send_btn" type="button" style="cursor: pointer;">送信</button>
				
		</form>

		<script>
    $(function() {

      $('#message_send_btn').on('click', function() {
        let mes = $(this).prev('textarea').val();
        if(mes== '') { alert("文字を入力してください。"); return;}

        let add_message = `
        <div class="admin send_area">
                <div class="message">
                  <div class="time">2022年4月1日</div>
                  <div class="comment">${mes}</div>
                </div>
        </div>
        `;

        $('.message_sec').append(add_message);
        $(this).prev('textarea').val('');

								
        message_h = $('.message_sec').innerHeight();
        window.scroll({
          top: message_h,
          behavior: "smooth"
        });

        window.scroll({
          top: message_h,
          behavior: "smooth"
        });

      });
				});
			</script>

</body>

</html>