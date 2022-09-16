<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>プライバシーポリシー | 日本最大級のBBQプラットフォーム Bavi</title>
    <link rel="stylesheet" href="resources/css/sanitize.css">
    <link rel="stylesheet" href="resources/css/base.css">
    <link rel="stylesheet" href="resources/css/base_sp.css">
    <link rel="stylesheet" href="resources/css/privacy.css?1">
    <link rel="stylesheet" href="resources/css/style.css">
    <script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="resources/js/config.js"></script>
    <script type="text/javascript" src="resources/js/smoothScroll.js"></script>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->

    <style>
    .terms * {
        font-size: 10px;
        font-weight: 100;
    }

    .terms p {
        font-size: 10px;
        margin-bottom: 1em;
    }

    .terms .table {
        background-color: #fff;
        margin-bottom: 10px;
    }

    .terms .table th {
        width: 30%;
        font-weight: 100;
        padding: 10px;
    }

    .terms h4 {
        text-align: center;
        margin-bottom: 1em;
    }

    .terms>dl {

        text-align: left;
        padding: 0;
        margin: 0 0 2em 0;
    }

    .terms>dl>dt {
        font-size: 12px;
        margin: 0;
        font-weight: 100;
        margin-bottom: 5px;
    }



    .terms>dl>dd {
        font-size: 8px;
        margin-bottom: 1em;
        color: #333;
    }

    .terms>dl>dd>dl,
    .terms>dl>dd>dl>dt,
    .terms>dl>dd>dl>dd {
        margin: 0;
        padding: 0;
        text-indent: 0;
    }

    .terms>dl>dd>dl>dt {
        color: #000;
    }

    .terms>dl>dd>dl {
        margin-bottom: 1em;
    }

    .terms ol {
        margin-top: 0.5em;
        list-style: disc;
    }

    .terms ol li {
        list-style: decimal;
        margin-left: 1em;
    }

    .terms p.right {
        text-align: right;
    }

    .terms p.center {
        text-align: center;
    }

    .terms h4 {
        font-weight: bold;
        font-size: 15px;
    }
    </style>

</head>

<body>
    <div id="loading"></div>
    <div id="wrapper">
        <?php include __DIR__ . '/tpl/header.php'; ?>


        <article class="no_fixed cont">
            <h2>利用規約</h2>

            <section>

                <div class="inr terms">
                    <?php
                    include('./tpl/terms.html')
                    ?>

                    <h4>施設詳細利用規約</h4>
                    <dl>
                        <dt>予約期限ポリシー</dt>
                        <dd>・利用者は施設ごとに定められた予約期限ポリシーに則り予約をすること。<br />
                            　道具・区画のみの予約は開催日の3日前まで<br />
                            　食材や飲料を伴う予約は開催日の3日前まで<br />
                            　※但し、施設の空き状況によって、上記を過ぎての予約が可能な場合がある。その際は電話による確認をお願い致します。確認なき予約は一切無効と致します。 </dd>
                    </dl>
                    <dl>
                        <dt>内容変更期限ポリシー</dt>
                        <dd>　・利用者は施設ごとに定めれた内容変更期限ポリシーに則り内容変更をすること<br />
                            　人数の増減変更は開催日の3日前まで<br />
                            　プランの変更は開催日の3日前まで</dd>
                    </dl>
                    <dl id="cancel_sec">
                        <dt>キャンセルポリシー</dt>
                        <dd>・ご予約をキャンセルされる場合は、以下のキャンセル料金を頂戴いたします。<br />
                            　区画・道具のレンタルの場合<br />
                            　　ご利用2日前まで・・・無償<br />
                            　　ご利用前日・・・ご利用金額の50％<br />
                            　　ご利用当日・・・ご利用金額の100％　<br />
                            <br />
                            　食材や飲料もセットでご注文の場合<br />
                            　　ご利用3日前まで・・・無償<br />
                            　　ご利用2日前・・・ご利用金額の30％<br />
                            　　ご利用前日・・・ご利用金額の50％<br />
                            　　ご利用当日・・・ご利用金額の100％
                        </dd>
                    </dl>
                    <dl>
                        <dt>雨天ポリシー</dt>
                        <dd>　・雨天のキャンセルについてもキャンセルチャージ同様にキャンセルチャージがかかります。但し、以下の場合キャンセルチャージが減額となる場合がございます。<br />
                            　台風直撃や天変地異により開催が困難だと判断した時<br />
                            　台風や天変地異に近い状態が起き、開催が困難だと判断した時<br />
                            　施設が利用休止、又は利用することが困難な時<br />
                            　海が大荒れの場合や河川の増水で施設側が危険と判断した時</dd>
                    </dl>
                    <dl>
                        <dt>器材の破損ポリシー</dt>
                        <dd>・器材の破損、使用不可の状態になった場合は、仕入れ価格相当を実費にてお支払いいただきます。</dd>
                    </dl>
                </div>
    </div>

    </section>



    </article>


    <?php include __DIR__ . '/tpl/footer.php'; ?>

</body>

</html>