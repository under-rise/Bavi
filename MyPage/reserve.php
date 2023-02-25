<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ポイント利用履歴 | 日本最大級のBBQプラットフォーム Bavi</title>
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
    <link rel="stylesheet" href="css/page.css?11">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents">


        <section class="reserve_sec">

            <div class="inr">
                <h2 class="ttl">ご予約中施設</h2>
                <p class="center mg_b30 font_14 pink flash">現在、ご予約中の施設が2件あります。</p>

                <ul class="_reserve_sec" style="margin-bottom: 30px;">
                    <li>
                        <figure>
                            <div class="icon reserve">ご利用まであと<strong>3日</strong></div>
                            <a href="reserve_detail.php"><img src="images/facility001.jpg" alt=""></a>
                        </figure>

                        <div class="info">
                            <div class="table border">
                                <dl>
                                    <dt>施設</dt>
                                    <dd class="bold pink">KIRANAH GARDEN TOYOSU（キラナガーデン豊洲）</dd>
                                </dl>
                                <dl>
                                    <dt>ご利用日</dt>
                                    <dd class="bold pink">2023年1月3日（月）</dd>
                                </dl>
                                <dl>
                                    <dt>利用人数</dt>
                                    <dd>3名</dd>
                                </dl>
                                <dl>
                                    <dt>プラン</dt>
                                    <dd>BBQプラン</dd>
                                </dl>
                            </div>
                            <div class="btn type01"><a href="reserve_detail.php">詳細を見る</a></div>
                        </div>
                    </li>

                    <li>
                        <figure>
                            <div class="icon reserve">ご利用まであと<strong>13日</strong></div>
                            <a href="reserve_detail.php"><img src="images/facility002.jpg" alt=""></a>
                        </figure>
                        <div class="info">
                            <div class="table border">
                                <dl>
                                    <dt>施設</dt>
                                    <dd class="bold pink">恋人ビーチ うふた浜BBQ場</dd>
                                </dl>
                                <dl>
                                    <dt>ご利用日</dt>
                                    <dd class="bold pink">2023年1月20日（月）</dd>
                                </dl>
                                <dl>
                                    <dt>利用人数</dt>
                                    <dd>3名</dd>
                                </dl>
                                <dl>
                                    <dt>プラン</dt>
                                    <dd>BBQプラン</dd>
                                </dl>
                            </div>
                            <div class="btn type01"><a href="reserve_detail.php">詳細を見る</a></div>
                        </div>
                    </li>


                </ul>

            </div>
        </section>
        <!-- 施設ご利用履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>


</body>