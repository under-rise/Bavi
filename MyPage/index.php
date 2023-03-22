<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>My Page | 日本最大級のBBQプラットフォーム Bavi</title>
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

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="css/index.css?1.1311" />
    <link rel="stylesheet" href="css/index_sp.css?1.2" media="screen and (max-width: 780px)" />

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents">

        <section class="slider_sec">
            <div class="inr">
                <div class="swiper_main">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><a href="point.php"><img src="images/banner_point_start.jpg"
                                        alt=""></a></div>
                            <div class="swiper-slide"><img src="images/slider03.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/slider01.jpg?1" alt=""></div>
                            <div class="swiper-slide"><img src="images/slider02.jpg?1" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <!-- サムネイル -->
                <div class="slider_thumbnail_sec">
                    <div class="swiper-container slider-thumbnail">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="images/banner_point_start.jpg?1" alt=""></div>
                            <div class="swiper-slide"><img src="images/slider03.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/slider01.jpg?1" alt=""></div>
                            <div class="swiper-slide"><img src="images/slider02.jpg?1" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->

        <section>

            <h2 class="ttl">ポイント交換おすすめアイテム</h2>

            <div class="recomend_item">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="images/item001.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/item002.jpg" alt="">
                    </div>
                    <div class="swiper-slide"><img src="images/item003.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/item004.jpg" alt="">
                    </div>
                    <div class="swiper-slide"><img src="images/item005.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/item006.jpg" alt="">
                    </div>

                </div>
            </div>

            <script>
            const swiper = new Swiper(".recomend_item", {
                loop: true, // ループ有効
                slidesPerView: 4, // 一度に表示する枚数
                speed: 7000, // ループの時間
                allowTouchMove: true, // スワイプ無効
                autoplay: {
                    delay: 0, // 途切れなくループ
                },
                breakpoints: {
                    760: {
                        slidesPerView: 6,
                    },
                    1080: {
                        slidesPerView: 8,
                    }
                }
            });
            </script>
        </section>


        <section class="news_sec">

            <div class="inr">
                <div class="news_list_sec">
                    <h2 class="ttl">お知らせ</h2>
                    <ul>
                        <li>
                            <div class="day">2022年12月30日（月） <span class="icon news">お知らせ</span></div>
                            <p class="import">ご予約された施設のご利用日時が近づいております。</p>
                        </li>

                        <li>
                            <div class="day">2023年1月1日（月） <span class="icon reserve">施設ご予約</span></div>
                            <p>施設ご予約 GARDEN TOYOSU（キラナガーデン豊洲））</p>
                        </li>

                        <li>
                            <div class="day">2023年1月2日（月） <span class="icon cancel">ご予約キャンセル</span></div>
                            <p>ご予約キャンセル（KIRANAH GARDEN TOYOSU（キラナガーデン豊洲））</p>
                        </li>
                    </ul>

                    <div class="btn type01"><a href="news.php">過去のお知らせを見る</a></div>

                </div>
                <!-- news_list_sec -->

                <div class="point_history_sec">
                    <h2 class="ttl">ご利用履歴</h2>
                    <ul>
                        <li>
                            <div class="day">2023年1月3日（月）
                                <span class="icon acquisition">ポイント取得</span>
                                <span class="point acquisition">+1000point</span>
                            </div>
                            <p>施設ご利用（KIRANAH GARDEN TOYOSU（キラナガーデン豊洲））</p>
                        </li>

                        <li>
                            <div class="day">2023年1月1日（月）
                                <span class="icon purchase">ポイント利用</span>
                                <span class="point purchase">-500point</span>
                            </div>
                            <p>Amazon¥500円ギフト購入。</p>
                        </li>

                        <li>
                            <div class="day">2023年1月1日（月）
                                <span class="icon acquisition">ポイント取得</span>
                                <span class="point acquisition">+800point</span>
                            </div>
                            <p>口コミ投稿。（KIRANAH GARDEN TOYOSU（キラナガーデン豊洲））</p>
                        </li>

                    </ul>

                    <div class="btn type01"><a href="point_history.php">過去の履歴を見る</a></div>

                </div>
                <!-- point_history_sec -->
            </div>
            <!-- inr -->
        </section>
        <!-- ポイント履歴 -->


        <section class="reserve_sec bg_pink">

            <div class="inr">
                <h2 class="ttl">ご予約中施設</h2>
                <p class="center mg_b30 font_14 flash pink">現在、ご予約中の施設が3件あります。</p>

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


        <section>

            <div class="inr">
                <h2 class="ttl">施設ご利用履歴</h2>

                <div class="none">
                    <p>まだ、施設ご利用履歴はありません。</p>
                </div>

                <ul class="use_history" style="margin-bottom: 30px; display: none;">
                    <li>
                        <figure>
                            <a href="use_history.php"><img src="images/facility001.jpg" alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="use_history.php">KIRANAH GARDEN TOYOSU（キラナガーデン豊洲）</a></dt>
                            <dd>ご利用日：2023年1月1日</dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="use_history.php"><img src="images/facility002.jpg" alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="#">恋人ビーチ うふた浜BBQ場</a></dt>
                            <dd>ご利用日：2023年1月1日</dd>
                        </dl>
                    </li>
                </ul>

                <div class="btn type01" style="display: none;"><a href="use_history.php">もっと見る</a></div>
            </div>
        </section>
        <!-- 施設ご利用履歴 -->

        <section>

            <div class="inr">
                <h2 class="ttl">口コミ履歴</h2>


                <ul class="use_history" style="margin-bottom: 30px;">
                    <li>
                        <figure>
                            <a href="voice_detail.php"><img src="images/facility001.jpg" alt=""></a>
                        </figure>
                        <div class="stars">
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star_half.png" alt="星半数個" />
                            <span class="score">4.8 / 5.0</span>
                        </div>
                        <dl>
                            <dt><a href="voice_detail.php">KIRANAH GARDEN TOYOSU（キラナガーデン豊洲）</a></dt>
                            <dd>投稿日：2023年1月1日</dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="voice_detail.php"><img src="images/facility002.jpg" alt=""></a>
                        </figure>
                        <div class="stars">
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star.png" alt="星1個" />
                            <img src="/assets/img/star_half.png" alt="星半数個" />
                            <span class="score">4.8 / 5.0</span>
                        </div>
                        <dl>
                            <dt><a href="voice_detail.php">恋人ビーチ うふた浜BBQ場</a></dt>
                            <dd>投稿日：2023年1月1日</dd>
                        </dl>
                    </li>
                </ul>

                <div class="btn type01"><a href="voice_history.php">もっと見る</a></div>
            </div>
        </section>

        <section>

            <div class="inr">
                <h2 class="ttl">LIKEされた施設</h2>

                <ul class="use_history" style="margin-bottom: 30px;">
                    <li>
                        <figure>
                            <a href="https://bavi.jp/spot/detail/1290" target="_blank"><img src="images/facility001.jpg"
                                    alt=""></a>
                        </figure>
                        <dl>
                            <dt> <a href="https://bavi.jp/spot/detail/1290" target="_blank">KIRANAH GARDEN
                                    TOYOSU（キラナガーデン豊洲）</a></dt>
                            <dd>LIKE日：2023年1月1日</dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="https://bavi.jp/spot/detail/1290" target="_blank"><img src="images/facility002.jpg"
                                    alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="https://bavi.jp/spot/detail/1290" target="_blank">恋人ビーチ うふた浜BBQ場</a></dt>
                            <dd>LIKE日：2023年1月1日</dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="https://bavi.jp/spot/detail/1290" target="_blank"><img src="images/facility002.jpg"
                                    alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="https://bavi.jp/spot/detail/1290" target="_blank">恋人ビーチ うふた浜BBQ場</a></dt>
                            <dd>LIKE日：2023年1月1日</dd>
                        </dl>
                    </li>
                </ul>

                <div class="btn type01"><a href="like_history.php">もっと見る</a></div>
            </div>
        </section>
        <!-- LIKE履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script>
    //thumnail
    var sliderThumbnail = new Swiper('.slider-thumbnail', {
        slidesPerView: 6,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    const mySwiper = new Swiper('.swiper', {
        loop: true,
        thumbs: {
            swiper: sliderThumbnail
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>


</body>