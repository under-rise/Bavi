<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ご予約詳細 | 日本最大級のBBQプラットフォーム Bavi</title>
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

    <link rel="stylesheet" href="css/index.css?3.3">
    <link rel="stylesheet" href="css/index_sp.css?4.2" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?3.3">
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

                <div class="reserve_detail_sec _reserve_sec" style="margin-bottom: 30px;">

                    <div class="top">
                        <div class="image">
                            <figure>
                                <div class="icon reserve">ご利用まであと<strong>3日</strong></div>
                                <a href="#"><img src="images/facility001.jpg" alt=""></a>
                            </figure>


                            <div class="btn type01 mg_t30" x-data
                                @click="document.querySelector('.facility_information').scrollIntoView({behavior:'smooth'})">
                                <a>施設情報を見る</a>
                            </div>

                        </div>

                        <div class="info">

                            <div class="facility_info">
                                <h3>KIRANAH GARDEN TOYOSU（キラナガーデン豊洲）</h3>
                                <p>【8月26日オープン！11月1日リニューアルオープン！】全天候対応で冷暖房完備。東京都内最大級のBBQ施設。都心から30分のTOKYO
                                    VACANCE目前に広がるレインボーブリッジを見ながら一線を画す優雅な非日常な大人×ラグジュアリー体験を。
                                </p>
                            </div>

                            <div class="table border">
                                <dl>
                                    <dt>ご利用日</dt>
                                    <dd class="bold use_day pink">2023年1月3日（月）</dd>
                                </dl>
                                <dl>
                                    <dt>利用時間</dt>
                                    <dd class="bold">11:00〜15:00（4時間）</dd>
                                </dl>
                                <dl>
                                    <dt>利用人数</dt>
                                    <dd>3名</dd>
                                </dl>
                                <dl>
                                    <dt>支払方法</dt>
                                    <dd>当日現金</dd>
                                </dl>
                                <dl>
                                    <dt>備考</dt>
                                    <dd style="text-align: left;">豊洲直送魚介のブイヤベース/ チキンコンフィ（鶏のガーリックオイル煮）/
                                        カペリンのアヒージョ（カラフトシシャモ）/ 殻付き焼き牡蠣/
                                        きのこのバター醤油ソテー/ 〆リゾット（焼きおにぎり）/ 焼きスイートポテトのマロンクリーム添え/ ソフトドリンク飲み放題</dd>
                                </dl>
                                <dl>
                                    <dt>合計金額</dt>
                                    <dd>
                                        <p class="price_sec">¥4,000円<span>（税込）</span> </p>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                    </div>
                    <!-- top -->

                    <section style="padding-top:20px;">
                        <h2 class="ttl">ご予約プラン</h2>

                        <ul class="reserve_plan_sec">

                            <li>
                                <figure>
                                    <div class="icon acquisition border"><strong>2</strong>セット</div>
                                    <img src="images/reserve_plan.jpg" alt="">
                                </figure>

                                <dl>
                                    <dt>CABIN OCEAN SUITE(シーズン)</dt>
                                    <dd class="price_sec">7,000円<span>（税込）</span></dd>
                                </dl>
                            </li>

                            <li>
                                <figure>
                                    <div class="icon acquisition border"><strong>1</strong>セット</div>
                                    <img src="images/reserve_plan.jpg" alt="">
                                </figure>

                                <dl>
                                    <dt>CABIN OCEAN SUITE(シーズン)</dt>
                                    <dd class="price_sec">5,500円<span>（税込）</span></dd>
                                </dl>
                            </li>

                            <li>
                                <figure>
                                    <div class="icon acquisition border"><strong>3</strong>セット</div>
                                    <img src="images/none.jpg" alt="">
                                </figure>

                                <dl>
                                    <dt>CABIN OCEAN SUITE(シーズン)</dt>
                                    <dd class="price_sec">3,000円<span>（税込）</span></dd>
                                </dl>
                            </li>

                        </ul>

                    </section>

                    <section>

                        <h2 class="ttl">ご予約オプション</h2>

                        <ul class="reserve_plan_sec">

                            <li>
                                <figure>
                                    <div class="icon acquisition border"><strong>2</strong>セット</div>
                                    <img src="images/reserve_option.jpg" alt="">
                                </figure>

                                <dl>
                                    <dt>CABIN OCEAN SUITE(シーズン)</dt>
                                    <dd class="price_sec">7,000円<span>（税込）</span></dd>
                                </dl>
                            </li>
                            <li>
                                <figure>
                                    <div class="icon acquisition border"><strong>3</strong>セット</div>
                                    <img src="images/none.jpg" alt="">
                                </figure>

                                <dl>
                                    <dt>CABIN OCEAN SUITE(シーズン)</dt>
                                    <dd class="price_sec">3,000円<span>（税込）</span></dd>
                                </dl>
                            </li>

                        </ul>

                    </section>


                    <section class="facility_information">

                        <h2 class="ttl">施設情報</h2>

                        <div class="table border">
                            <dl>
                                <dt>住所</dt>
                                <dd>東京都江東区豊洲6-5</dd>
                            </dl>
                            <dl>
                                <dt>TEL</dt>
                                <dd>0066973700019</dd>
                            </dl>
                            <dl>
                                <dt>主な施設</dt>
                                <dd>バーベキュー施設、ステージ、キャビン、レストレン</dd>
                            </dl>
                            <dl>
                                <dt>禁止事項</dt>
                                <dd>音楽、ボール遊び、花火、他のお客様への迷惑行為</dd>
                            </dl>
                            <dl>
                                <dt>ご利用時間</dt>
                                <dd>11:00〜21:00</dd>
                            </dl>
                            <dl>
                                <dt>駐車場</dt>
                                <dd>無し：コインパークあり<br>
                                    （平日 8:00~22:00 30 分 /200 円 22:00~8:00 60 分 /200 円
                                    <br>土日祝 8:00~22:00 30 分
                                    /500 円 22:00~8:00 60 分 /200 円
                                </dd>
                            </dl>
                        </div>

                        <div class="gMap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.3693255958124!2d139.77825935049702!3d35.64327128010597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188941a61aa8e9%3A0xa0121ec76ecd4205!2z44Kt44Op44OK44Oq44K-44O844OIVE9ZT1NV!5e0!3m2!1sja!2sjp!4v1660111892539!5m2!1sja!2sjp"
                                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>

                    </section>

                </div>
                <!-- reserve_detail_sec -->

                <div class="btn type01"><a href="reserve.php">ご予約中一覧に戻る</a></div>


            </div>
        </section>
        <!-- 施設ご利用履歴 -->

    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>


</body>