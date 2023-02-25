<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>パスワード再発行 | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?1.3" />
  
</head>

<body id="my_page">

    <div id="loading"></div>
    <div id="wrapper" >

    <header>
		<h1>日本最大級のBBQプラットフォーム Bavi</h1>
		
		<a href="/"><img src="/resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
		
		<span class="login_sec">
			<a href="#">
			<span class="img"><img src="/MyPage/images/login_btn.svg"></span>
			<p>ログイン </p>
			</a>
		</span>
		
	</header>

    <article id="login" class="cont">

        <h2>パスワード再発行</h2>

        <section>
            <div class="inr">

            <p>パスワードをお忘れの場合、下記フォームにメールアドレスを入力してください。</p>

            <form class="form" method="get" action="/MyPage/index.php">
          
				<dl>
					<dt>メールアドレス</dt>
					<dd>
						<input type="text" name="" value="" placeholder="メールアドレスを入力してください。">
					</dd>
                </dl>

                </dl>
                

                <button type="submit" class="login_btn">送信する</button>

                <p  style="font-size:13px; margin-top: 20px; text-decoration: underline;"><a href="/MyPage/login.php" class="txt_pink">ログインフォームはこちら</a></p>

               

            </form>

            

            </div>
        </section>

    </article>

    </div>

    <?php include __DIR__ . '/../topic/tpl/footer.php'; ?>

</body>

</html>