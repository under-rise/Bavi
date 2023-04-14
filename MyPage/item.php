<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>| 日本最大級のBBQプラットフォーム Bavi</title>
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


    <link rel="stylesheet" href="css/index.css?1">
    <link rel="stylesheet" href="css/index_sp.css?1" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?1.41">
    <link rel="stylesheet" href="css/form.css?2.4">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents" x-data="app" x-cloak>

        <section class="item_detail_sec">
            <h2 class="ttl">商品</h2>
            <div class="inr">

                <div class="image">
                    <section class="slider_item_sec">

                        <div class="swiper_main">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/d18dd677f7015fa5afa6c454ca316cb4.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/0a1552c9197d413d3f6b9abe1377096b.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/0783f76aee83499f6b9e0a9434a09986.jpg"
                                            alt=""></div>

                                </div>
                            </div>
                        </div>

                        <!-- サムネイル -->
                        <div class="slider_item_thumbnail_sec">
                            <div class="swiper-container slider-thumbnail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/d18dd677f7015fa5afa6c454ca316cb4.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="https://bavi.jp/uploads/point_item/0783f76aee83499f6b9e0a9434a09986.jpg"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- slider -->
                </div>
                <!-- image -->


                <div class="info">
                    <div class="item_info">

                        <div class="name">
                            <h3>手づくりハンバーグ８００ｇ（２0０ｇ×４個）【完全無添加！国産Ａ4～Ａ5黒毛和牛100％】</h3>
                        </div>

                        <div class="stars" style="margin-bottom: 20px">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>

                        <p>
                            べごっこのカルビ肉職人の千葉誠が厳選し買い付けた国産Ａ4～Ａランク黒毛和牛を贅沢に100％使い、完全無添加、つなぎ無しで作り上げたこだわりのハンバーグを合計800ｇ（200ｇ×４個）のセットでお届けします！
                            ※仕入れ状況により黒毛和牛の産地、銘柄は変わることがあります。</p>

                        <div class="table border">
                            <dl>
                                <dt>登録日時</dt>
                                <dd>2023-10-1</dd>
                            </dl>
                            <dl>
                                <dt>ジャンル</dt>
                                <dd>食品</dd>
                            </dl>
                            <dl>
                                <dt>必要ポイント</dt>
                                <dd class="point_sec"><b x-text="point().toLocaleString()">0000</b><span>point</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>備考</dt>
                                <dd>
                                    ブランド：兵衛<br>梱包サイズ：20 x 20 x 10 cm; 445
                                    g<br>商品：タイプスライス<br>料理：焼肉<br>メーカー：黒毛和牛専門店 焼肉牛兵衛\n商品の重量：445 g
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div>
                        <form @submit.prevent="send($el)" action="item_complete.php" method="get" class="form">
                            <div class="input_sec">
                                <input type="hidden" name="id" :value="selectItem.id">
                                <input type="hidden" name="point" :value="selectItem.point">
                                <span class="down" @click="changeNum(-1)">▼</span>
                                <input type="number" name="num" x-model="num"><span class="up"
                                    @click="changeNum(1)">▲</span>
                            </div>
                            <button>ポイント交換する</button>
                        </form>

                    </div>
                </div>
        </section>
        <!-- 商品一覧 -->

        <section style="padding: 30px 0;">
            <div class="btn type02"><a href="point.php" style="text-align: center;">商品一覧に戻る</a></div>
        </section>

        <section>

            <h2 class="ttl">商品一覧</h2>

            <div class="inr">
                <ul id="point_sec" class="point_use_sec" style="margin-bottom: 30px;">

                    <li>
                        <figure>
                            <a href="item.php?id=1"><img
                                    src="https://bavi.jp/uploads/point_item/d18dd677f7015fa5afa6c454ca316cb4.jpg"
                                    alt=""></a>
                        </figure>
                        <div class="stars">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>
                        <dl>
                            <dt><a>BBQコンロ</a></dt>
                            <dd class="point_sec"><b>1,200</b><span>ポイント</span>
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="item.php?id=2"><img
                                    src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg"
                                    alt=""></a>
                        </figure>
                        <div class="stars">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>
                        <dl>
                            <dt><a>鰻楽 九州産うなぎ蒲焼（3尾）</a></dt>
                            <dd class="point_sec"><b>9,720</b><span>ポイント</span>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </section>
        <!-- アイテム一覧 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script>
    const item = () => ({
        havePoint: 6000,
        num: 1,
        selectItem: {
            id: 1,
            point: 3000,
        },
        changeNum(e) {
            this.num = Number(this.num) + Number(e);
            if (this.num <= 1) {
                this.num = 1;
            }
        },
        send(e) {
            if (this.havePoint < this.point()) {
                alert("ポイントが足りません。");
                return;
            }

            if (confirm('ポイントを交換します。宜しいですか？')) {
                e.submit();
            }
        },
        point() {
            return this.selectItem.point * this.num;
        }

    });

    document.addEventListener('alpine:init', () => {
        Alpine.data('app', item);
    });
    </script>

    <script src="js/config.js"></script>

    <script>
    //thumnail
    var sliderThumbnail = new Swiper('.slider-thumbnail', {
        slidesPerView: 8,
        freeMode: true,
    });

    const mySwiper = new Swiper('.swiper', {
        loop: true,
        thumbs: {
            swiper: sliderThumbnail
        },

    });
    </script>
</body>