<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ログイン | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?1.4" />
  
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

        <h2>Login</h2>

        <section>
            <div class="inr">

            <p>メールアドレス・パスワードを入力してログインください。</p>

            <form class="form" method="get" action="/MyPage/index.php">
          
				<dl>
					<dt>メールアドレス</dt>
					<dd>
						<input type="text" name="" value="" placeholder="メールアドレスを入力してください。">
					</dd>
                </dl>

                <dl>
					<dt>パスワード</dt>
					<dd>
						<input type="text" name="" value="" placeholder="パスワードを入力してください。">
					</dd>
                </dl>
                
                <input type="checkbox" value="" name="" id="keep_login"><label for="keep_login" style="padding-left: 5px; font-size:12px; vertical-align: top;">ログインしたままにする。</label>

                <button type="submit" class="login_btn">ログイン</button>

                <p  style="font-size:13px; margin-top: 20px; text-decoration: underline;"><a href="/MyPage/remember.php" class="txt_pink">パスワードをお忘れの場合</a></p>

                <button type="button" onclick="location.href='/MyPage/register.php'" class="register_btn" style="margin-top: 20px;">新規登録</button>

            </form>

            

            </div>
        </section>

    </article>

    </div>

    <?php include __DIR__ . '/../topic/tpl/footer.php'; ?>

</body>

</html>