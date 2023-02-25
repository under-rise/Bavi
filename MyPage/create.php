<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>新規登録 | 日本最大級のBBQプラットフォーム Bavi</title>
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
    <link rel="stylesheet" href="css/page.css?1331">
    <link rel="stylesheet" href="css/form.css?23">

</head>

<body class="login_sec">

    <header>
        <h1>新規会員登録 | 日本最大級のBBQプラットフォーム Bavi</h1>
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
                <h2 class="ttl">新規会員登録</h2>
                <p class="mg_b30">必要事項を入力し、会員登録を行ってください。</p>

                <div class="create_sec">

                    <form class="form" action="index.php">
                        <div class="table bottom_border sp_vertical w100 mg_b30">
                            <dl>
                                <dt>ユーザー名</dt>
                                <dd><input type="text" name="name" value="" placeholder="ユーザー名を入力">
                                    <ul class="caption">
                                        <li>※ プロフィールページで表示されます。</li>
                                        <li>※ 絵文字は使用できません</li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>メールアドレス</dt>
                                <dd><input type="text" name="email" value="" placeholder="メールアドレスを入力">
                                    <ul class="caption">
                                        <li>※ お知らせや施設ご予約時の返信やログインアカウントとして使用されます。</li>
                                        <li>※ 外部に公開されることはありません。</li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>パスワード</dt>
                                <dd><input type="password" name="password" value="" placeholder="メールアドレスを入力">
                                    <ul class="caption">
                                        <li>※ 半角英字・半角数字の両方を含む8文字以上で入力してください。</li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>パスワード<br>（確認）</dt>
                                <dd><input type="password" name="password_confirmation" value=""
                                        placeholder="メールアドレス（確認）を入力">
                                    <ul class="caption">
                                        <li>※ 半角英字・半角数字の両方を含む8文字以上で入力してください。</li>
                                    </ul>
                                </dd>
                            </dl>

                        </div>

                        <p><a href="https://bavi.jp/privacy" target="_blank"
                                class="line">「プライバシーポリシー」</a>の内容に同意した上、ご登録ください。</p>

                        <div class="mg_t30">
                            <button type="submit" class="green">新規会員登録</button>
                        </div>
                    </form>

                    <p class="mg_t30"><a href="login.php" class="line">すでに登録済みの方はこちら</a></p>

                    <ul class="font_10 mg_t30">
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