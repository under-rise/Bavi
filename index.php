<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/tpl/head.php'; ?>

    <link rel="stylesheet" href="resources/css/top.css?1.2">
    <link rel="stylesheet" href="resources/css/top_sp.css?1.5">

    <link rel="stylesheet" href="/resources/slick/slick.css" />
    <link rel="stylesheet" href="/resources/slick/slick-theme.css" />


    <meta property="og:title" content="日本最大級のBBQプラットフォーム Bavi">
    <meta property="og:image" content="http://bavi.tank.jp/resources/images/apple-touch-icon.png">
    <meta property="og:description" content="日本最大級のBBQプラットフォーム Bavi">
    <meta property="og:locale" content="ja_JP" />

    <meta name="apple-mobile-web-app-title" content="Bavi">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/apple-touch-icon.png" 　>

    <script type="text/javascript">
    $(document).ready(function(e) {
        $('img[usemap]').rwdImageMaps();
    });

    $(function() {
        $('.slick').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 200,
            infinite: true,
            fade: false,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            cssEase: 'linear',
            swipe: true,
        });

        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 200,
            infinite: true,
            fade: false,
            arrows: true,
            dots: true,
            pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'linear',
            swipe: true,
        });

    });

    //追加
    window.addEventListener('load', function() {
        var maxHeight = 0;
        $('.slick .item a').each(function(idx, elem) {
            var height = $(elem).height();
            if (maxHeight < height) {
                maxHeight = height;
            }
        });
        $('.slick .item a').height(maxHeight);
    });
    </script>
</head>

<body>
    <div id="loading"></div>
    <div id="wrapper">

        <?php include __DIR__ . '/tpl/header_serach.php'; ?>

        <article>

            <section id="mainVisual" class="cont">

                <div class="inr clearfix">
                    <ul class="slider">

                        <li><a href="venue_list.php"><img src="resources/images/top/delivery_banner.jpg?1.1"></a></li>

                        <li><a href="https://bavi.jp/lp/uhutahama/" target="_blank"><img src="assets/img/top/recommended_spot_001.jpg"></a>
                        </li>

                        <li><a href="https://bavi.jp/spot/detail/1519"><img
                                    src="resources/images/top/FUJI_SUPER_TEC_2022520.jpg"></a></li>

                        <li><a href="/concierge.html"><img src="resources/images/top/slider_concierge.jpg"></a>

                        <li><a href="https://bavi.jp/spot/detail/1290"><img
                                    src="resources/images/top/slider_uhutahama.jpg"></a>
                        </li>
                        <li><a href="https://bavi.jp/spot/detail/963"><img
                                    src="resources/images/top/slider_kasaya.jpg"></a>
                        </li>
                        <li><a href="https://bavi.jp/spot/detail/1449"><img
                                    src="resources/images/top/slider_bbqoasis.jpg"></a>
                        </li>
                        <li><a href="https://bavi.jp/spot?pref_id=47"><img
                                    src="resources/images/top/slider_001.jpg"></a></li>

                        <li><a href="https://bavi.jp/about"><img src="resources/images/top/slider_003.jpg"></a></li>
                    </ul>
                </div>

            </section>

            <section id="search" class="cont">
                <h2><img src="resources/images/top/search_h2.png" alt="BBQ場" />地図から検索</h2>


                <div>
                    <h3><img src="resources/images/top/search_tit.png" alt="さあ、みんなでBaviしよう！"></h3>

                    <p>1,230<span>件</span></p>

                    <img src="resources/images/map.png?1.1" usemap="#image-map">

                    <map name="image-map">
                        <area target="" alt="北海道" title="北海道" class="hokkaido"
                            coords="1030,11,1157,123,1217,128,1221,181,1251,208,1071,322,1004,256,917,260,940,327,870,350,845,263,893,185,956,189"
                            shape="poly">
                        <area target="" alt="東北" title="東北" class="tohoku"
                            coords="851,381,943,363,958,416,1160,422,1160,502,970,505,982,553,918,731,902,733,901,768,774,761,821,656,785,635,838,543"
                            shape="poly">
                        <area target="" alt="関東" title="関東" class="kanto"
                            coords="739,770,911,784,911,744,1125,740,1126,825,909,822,888,817,835,945,787,929,746,948,751,866,733,863,728,850"
                            shape="poly">
                        <area target="" alt="中部" title="中部" class="chubu"
                            coords="486,630,698,632,700,715,744,690,778,642,803,658,757,756,721,761,714,847,735,881,732,953,597,955,561,863,513,872,506,859,573,784,582,720,483,719"
                            shape="poly">
                        <area target="" alt="近畿" title="近畿" class="kinki"
                            coords="426,865,492,868,509,895,554,875,593,984,741,987,739,1064,524,1067,458,1055,463,955,421,946"
                            shape="poly">
                        <area target="" alt="中国" title="中国" class="chugoku"
                            coords="173,795,387,790,390,863,410,863,408,950,246,994,170,989,159,957,276,877,168,879"
                            shape="poly">
                        <area target="" alt="四国" title="四国" class="shikoku"
                            coords="253,1019,413,973,429,1032,323,1092,497,1094,501,1178,284,1176,276,1105"
                            shape="poly">
                        <area target="" alt="九州" title="九州" class="kyusyu"
                            coords="44,1066,124,986,230,1064,193,1151,221,1153,221,1233,6,1236,8,1154,99,1151,118,1094,97,1083,63,1105"
                            shape="poly">
                        <area target="" alt="沖縄" title="沖縄" class="okinawa"
                            coords="182,490,336,456,321,704,29,848,0,803,6,613" shape="poly">
                    </map>

                    <!--
                <div class="top_kuchikomi_btn"><a href="question.html"><img src="resources/images/kuchikomi_btn.png" alt=""/></a></div>
                -->

                </div>


                <div id="overlay">
                    <div>
                        <span id="close">+</span>
                        <dl class="hokkaido">
                            <dt>北海道エリア</dt>
                            <dd><a href="">道央</a></dd>
                            <dd><a href="">道南</a></dd>
                            <dd><a href="">道北</a></dd>
                            <dd><a href="">道東</a></dd>
                        </dl>
                        <dl class="tohoku">
                            <dt>東北エリア</dt>
                            <dd><a href="">青森県</a></dd>
                            <dd><a href="">秋田県</a></dd>
                            <dd><a href="">山形県</a></dd>
                            <dd><a href="">宮城県</a></dd>
                            <dd><a href="">福島県</a></dd>
                        </dl>
                        <dl class="kanto">
                            <dt>関東エリア</dt>
                            <dd><a href="venue_list.html">東京都</a></dd>
                            <dd><a href="">茨城県</a></dd>
                            <dd><a href="">栃木県</a></dd>
                            <dd><a href="">群馬県</a></dd>
                            <dd><a href="">埼玉県</a></dd>
                            <dd><a href="">千葉県</a></dd>
                            <dd><a href="">神奈川県</a></dd>
                        </dl>
                        <dl class="chubu">
                            <dt>中部エリア</dt>
                            <dd><a href="">新潟県</a></dd>
                            <dd><a href="">富山県</a></dd>
                            <dd><a href="">石川県</a></dd>
                            <dd><a href="">福井県</a></dd>
                            <dd><a href="">山梨県</a></dd>
                            <dd><a href="">長野県</a></dd>
                            <dd><a href="">岐阜県</a></dd>
                            <dd><a href="">静岡県</a></dd>
                            <dd><a href="">愛知県</a></dd>
                        </dl>
                        <dl class="kinki">
                            <dt>近畿エリア</dt>
                            <dd><a href="">三重県</a></dd>
                            <dd><a href="">滋賀県</a></dd>
                            <dd><a href="">京都府</a></dd>
                            <dd><a href="">大阪府</a></dd>
                            <dd><a href="">兵庫県</a></dd>
                            <dd><a href="">奈良県</a></dd>
                            <dd><a href="">和歌山県</a></dd>
                        </dl>
                        <dl class="chugoku">
                            <dt>中国エリア</dt>
                            <dd><a href="">岡山県</a></dd>
                            <dd><a href="">広島県</a></dd>
                            <dd><a href="">鳥取県</a></dd>
                            <dd><a href="">島根県</a></dd>
                            <dd><a href="">山口県</a></dd>
                        </dl>
                        <dl class="shikoku">
                            <dt>四国エリア</dt>
                            <dd><a href="">香川県</a></dd>
                            <dd><a href="">徳島県</a></dd>
                            <dd><a href="">高知県</a></dd>
                            <dd><a href="">愛媛県</a></dd>
                        </dl>
                        <dl class="kyusyu">
                            <dt>九州エリア</dt>
                            <dd><a href="">福岡県</a></dd>
                            <dd><a href="">佐賀県</a></dd>
                            <dd><a href="">長崎県</a></dd>
                            <dd><a href="">熊本県</a></dd>
                            <dd><a href="">大分県</a></dd>
                            <dd><a href="">宮崎県</a></dd>
                            <dd><a href="">鹿児島県</a></dd>
                        </dl>

                        <dl class="okinawa">
                            <dt>沖縄エリア</dt>
                            <dd><a href="/venue_list.html">沖縄本島</a></dd>
                            <dd><a href="/venue_list.html">離島</a></dd>
                        </dl>
                    </div>
                </div>
            </section>


            <section id="location" class="cont">
                <h2>ロケーションから検索</h2>

                <p>あなたにあったロケーションからBBQ場を検索！</p>

                <div class="inr">
                    <ul>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=1&word=&order="><img
                                    src="resources/images/top/location_001.jpg" alt="川×BBQ"></a>
                            <p>川遊びや自然を満喫</p>
                        </li>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=2&word=&order="><img
                                    src="resources/images/top/location_002.jpg" alt="海×BBQ"></a>
                            <p>海と波音で過ごす贅沢BBQ</p>
                        </li>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=3&word=&order="><img
                                    src="resources/images/top/location_003.jpg" alt="都心×BBQ"></a>
                            <p>夜景やアクセスも魅力</p>
                        </li>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=4&word=&order="><img
                                    src="resources/images/top/location_004.jpg" alt="静か×BBQ"></a>
                            <p>自分だけの贅沢時間に</p>
                        </li>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=5&word=&order="><img
                                    src="resources/images/top/location_005.jpg" alt="公園×BBQ"></a>
                            <p>整った設備や施設でお子様も安心</p>
                        </li>
                        <li><a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=32&word=&order="><img
                                    src="resources/images/top/location_006.jpg" alt="山×BBQ"></a>
                            <p>大自然と景観を楽しむ！</p>
                        </li>
                    </ul>

                </div>

            </section>


            <!--▼▼▼20210818追加-->
            <section id="youtube" class="cont">
                <h2>動画から検索</h2>

                <p>BBQ会場の新着紹介ムービー</p>

                <div class="inr">

                    <div class="movie">
                        <div class="movie_item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rjPxgHh-gZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p><a href="venue_detail.html">RENO_CAMP TORIYAMA</a></p>
                        <div class="btn"><a href="venue_detail.html">会場ページを見る</a></div>
                    </div>

                    <div class="movie">
                        <div class="movie_item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PCsp58BIsmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p><a href="venue_detail.html">RENO_CAMP TORIYAMA</a></p>
                        <div class="btn"><a href="venue_detail.html">会場ページを見る</a></div>
                    </div>

                    <div class="movie">
                        <div class="movie_item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rjPxgHh-gZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p><a href="venue_detail.html">会場名</a></p>
                        <div class="btn"><a href="venue_detail.html">会場ページを見る</a></div>
                    </div>

                    <div class="movie">
                        <div class="movie_item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PCsp58BIsmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p><a href="venue_detail.html">会場名</a></p>
                        <div class="btn"><a href="venue_detail.html">会場ページを見る</a></div>
                    </div>

                </div>

            </section>
            <!--▲▲▲20210818ここまで-->

            <section id="news" class="cont">
                <h2>Pick UP!</h2>

                <p>おすすめのBBQ場・店舗をご紹介！</p>

                <div class="slick">
                    <div class="item">
                        <a href="">
                            <figure class="kyusyu">
                                <img src="resources/images/top/news1.png" alt="九州" />
                            </figure>

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <figure class="shikoku">
                                <img src="resources/images/top/news2.png" alt="四国" />
                            </figure>

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <figure class="chubu">
                                <img src="resources/images/top/news1.png" alt="九州" />
                            </figure>

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <figure class="chugoku">
                                <img src="resources/images/top/news2.png" alt="四国" />
                            </figure>

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                </div>

                <div class="inr">

                    <div class="ad_banner clearfix">

                        <div class="sec_l">
                            <img src="resources/images/top/ad_banner_img.png" alt="" />
                        </div>

                        <div class="sec_r">
                            <img src="resources/images/top/ad_banner_title.png?1.1" alt="" />
                            <p>バーベキュー場近隣の肉屋、魚屋、酒屋、スーパーを3月まで無料にて掲載致します。どしどしご連絡ください！<br>
                                <a href="/contact">掲載のご相談・お問合せはこちら</a>
                            </p>
                        </div>

                    </div>

                    <!--			<a href="" class="link_btn">もっと見る</a>-->

                </div>
            </section>


            <section id="topic" class="cont">

                <div class="inr">

                    <h2>NEWS</h2>
                    <p>運営からのニュース</p>

                    <div class="table">
                        <dl>
                            <dt>2021年8月1日（日）</dt>
                            <dd><a href="topic_detail.html">Bavi運営からのトピック情報のタイトルです。</a></dd>
                        </dl>
                        <dl>
                            <dt>2021年8月2日（月）</dt>
                            <dd><a href="topic_detail.html">夏季休業について</a></dd>
                        </dl>
                    </div>

                    <a href="topic_list.html" class="link_btn2">ニュース一覧</a>

                </div>

            </section>


        </article>

        <?php include __DIR__ . '/tpl/footer.php'; ?>

</body>

</html>