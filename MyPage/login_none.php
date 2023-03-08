<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ログイン | 日本最大級のBBQプラットフォーム Bavi</title>
    <meta name="apple-mobile-web-app-title" content="Bavi">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <?php
    include 'tpl/head.php'
    ?>

    <link rel="stylesheet" href="css/index.css?11">
    <link rel="stylesheet" href="css/index_sp.css?111" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?133">
    <link rel="stylesheet" href="css/form.css?123">

    <style>
    .defect_report_sec {
        display: none;
    }
    </style>
</head>

<body class="login_sec">

    <header>
        <h1>マイページ | 日本最大級のBBQプラットフォーム Bavi</h1>
        <div class="inr">
            <div class="header_top">
                <div class="logo">
                    <figure><a href="/"><img src="/resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
                    </figure>
                    <p>マイページ</p>
                </div>
            </div>
        </div>
    </header>

    <article class="contents">
        <section class="">
            <div class="inr">
                <h2 class="ttl">ログイン</h2>
                <p class="mg_b30">アカウントが未登録の方は<a href="create.php" class="line pink">新規会員登録</a>してください。</p>

                <div class="signIn_sec">

                    <div class="signIn_email mg_t30">
                        <h3>メールアドレスでログイン</h3>

                        <form action="index.php" method="post" class="form">

                            <ul>
                                <li><input type="text" name="email" value="" placeholder="メールアドレス"></li>
                                <li><input type="password" name="password" value="" placeholder="パスワード"></li>
                            </ul>

                            <div class="mg_t30">
                                <button type="submit">ログイン</button>
                            </div>

                            <p class="mg_t30"><a href="password.php" class="line">パスワードをお忘れの場合</a></p>

                            <div class="mg_t30">
                                <button type="button" class="green" onclick="location.href='create.php'">新規登録する</button>
                            </div>

                        </form>
                    </div>

                    <hr>

                    <ul class="font_10">
                        <li>※ ログインに10回失敗するとアカウントがロックされますのでご注意ください。</li>
                        <li>※ アカウントがロックされた場合は「パスワード再設定」を行なってください。</li>
                    </ul>
                </div>

            </div>
            <!-- inr -->
        </section>
        <!-- 施設ご利用履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>



</body>