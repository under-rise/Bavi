<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ユーザー退会 | 日本最大級のBBQプラットフォーム Bavi</title>
    <meta name="apple-mobile-web-app-title" content="Bavi">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <?php
    include 'tpl/head.php'
    ?>

    <link rel="stylesheet" href="css/index.css?11">
    <link rel="stylesheet" href="css/index_sp.css?111" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?1.1">
    <link rel="stylesheet" href="css/form.css?1.2">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents">


        <section class="setting_sec">

            <div class="inr">

                <form class="form h-adr" onsubmit="confirm('退会します。宜しいですか？')">

                    <h2 class="ttl">ユーザー退会</h2>

                    <p>Bavi会員から退会します。<br>
                        一度、退会されますと設定頂いた会員情報や施設履歴・保有ポイントが失効致しますが宜しいですか？</p>

                    <p class="mg_t30"><b class="pink">上記、内容を承諾の上、退会する。</b></p>

                    <div class="mg_t30">
                        <button>退会する</button>
                    </div>
                </form>

            </div>
            <!-- inr -->
        </section>
        <!-- 施設ご利用履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>


    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

</body>