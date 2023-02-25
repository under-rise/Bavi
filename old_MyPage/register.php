<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>新規登録 | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?1.3" />

</head>

<body id="my_page">

    <div id="loading"></div>
    <div id="wrapper">

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

            <h2>新規登録</h2>

            <section>
                <div class="inr">

                    <?php
                    if (!isset($_GET['register']) && !$_GET['register'] == "on") {
                    ?>

                         <p>お名前・メールアドレスを入力して登録してください。</p>

                        <form class="form" method="get" action="/MyPage/register.php">

                            　<dl>
                                <dt>お名前</dt>
                                <dd>
                                    <input type="text" name="" value="" placeholder="お名前を入力してください。">
                                </dd>
                            </dl>

                            <dl>
                                <dt>メールアドレス</dt>
                                <dd>
                                    <input type="text" name="" value="" placeholder="メールアドレスを入力してください。">
                                </dd>
                            </dl>

                            <input type="hidden" name="register" value="on">

                            <button type="submit" onclick="location.href='/MyPage/register.php'" class="register_btn" style="margin-top: 20px;">新規登録</button>

                            <p style="font-size:13px; margin-top: 20px; text-decoration: underline;"><a href="/MyPage/login.php" class="txt_pink">すでに登録済みの方はこちら</a></p>

                        </form>

                    <?php
                    } else {
                    ?>
                        <p>登録メールアドレスに仮登録メールを送信致しました。<br>Baviサイトご利用頂き有難う御座いました。</p>
                        <p style="margin-top:10px;">メールに記載のURLをクリックして本登録を完了してください。</p>

                        <p style="margin-top:20px;"><a href="/" class="txt_pink">トップページへ戻る</a></p>

                    <?php
                    }
                    ?>



                </div>
            </section>

        </article>

    </div>

    <?php include __DIR__ . '/../topic/tpl/footer.php'; ?>

</body>

</html>