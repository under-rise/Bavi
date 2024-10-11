<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>冷食専門店「NIKUO CIRCUS」</title>
    <link rel="stylesheet" href="resources/css/sanitize.css">
    <link rel="stylesheet" href="resources/css/base.css?1.1">
    <link rel="stylesheet" href="resources/css/base_sp.css?1.1">
    <link rel="stylesheet" href="resources/css/shop_detail.css?1.6">
    <link rel="stylesheet" href="resources/css/shop_detail_sp.css?1.1">
    <link rel="stylesheet" href="resources/slick/slick.css" />
    <link rel="stylesheet" href="resources/slick/slick-theme.css" />

    <link rel="stylesheet" href="resources/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="resources/js/config.js"></script>
    <script type="text/javascript" src="resources/js/smoothScroll.js"></script>
    <script type="text/javascript" src="resources/js/jquery.rwdImageMaps.js"></script>
    <script type="text/javascript" src="resources/slick/slick.min.js"></script>

    <script type="text/javascript" src="resources/js/shop_spot.js"></script>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->

    <script type="text/javascript">
    $(function() {
        $('.slick').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 800,
            infinite: true,
            fade: false,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            cssEase: 'linear',
            swipe: false,
        });

        $('.main_slick').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 800,
            infinite: true,
            fade: false,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'linear',
            swipe: false,
            asNavFor: '.slick_nav'
        });

        $('.slick_nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.main_slick',
            arrows: false,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            swipe: false
        });
    });
    </script>
</head>

<body>
    <div id="loading"></div>
    <div id="wrapper">
        <header>
            <h1>日本最大級のBBQプラットフォーム Bavi</h1>

            <a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
        </header>


        <article class="detail">
            <nav>
                <ul>
                    <li><a href="#shop">店舗詳細</a></li>
                    <li><a href="#menu">メニュー</a></li>
                    <li><a href="#order">注文方法</a></li>
                    <li><a href="#access">アクセス</a></li>
                    <li><a href="#spot">周辺のBBQ場</a></li>
                    <li><a href="#voice">口コミ</a></li>
                </ul>
            </nav>

            <section id="shop" class="cont">
                <h2 class="tit"><span class="kinki">大 阪</span>冷食専門店「NIKUO CIRCUS」</h2>

                <section>
                    <div class="double_slick">
                        <!--20210729追加-->
                        <div class="cursol">▶︎</div>
                        <div class="main_slick">
                            <!--20210728 add　class="modal" data-name=".gallery_sec"追加-->
                            <div class="modal" data-name=".gallery_sec"><img
                                    src="resources/images//shop/shop_slider01.jpg" /></div>
                            <div class="modal" data-name=".gallery_sec"><img
                                    src="resources/images//shop/shop_slider02.jpg" /></div>
                            <div class="modal" data-name=".gallery_sec"><img
                                    src="resources/images//shop/shop_slider03.jpg" /></div>
                        </div>

                        <ul class="slick_nav">
                            <li><img src="resources/images//shop/shop_slider01.jpg" alt="" /></li>
                            <li><img src="resources/images//shop/shop_slider02.jpg" alt="" /></li>
                            <li><img src="resources/images//shop/shop_slider03.jpg" alt="" /></li>
                        </ul>
                    </div>

                    <ul class="tag">
                        <li>店舗引取可</li>
                        <li>デリバリー可</li>
                    </ul>

                    <div class="stars">
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star_half.png" alt="星半数個" />
                        <img src="resources/images/star_none.png" alt="星無し" />
                        <span>3.5 / 5.0</span>
                    </div>

                    <dl class="like">
                        <dt>&hearts;</dt>
                        <dd>123<span>LIKE</span></dd>
                    </dl>

                    <ul class="sns_sec">
                        <li class="twitter"><a href="http://twitter.com/share?text=<title>&url=<url>" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="facebook"><a href="http://www.facebook.com/share.php?u=<url>" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="sns_line"><a href="https://social-plugins.line.me/lineit/share?url=<url>"
                                target="_blank"><i class="fab fa-line"></i></a></li>
                    </ul>

                    <h3>小橋町に金沢初の冷食専門店「NIKUO CIRCUS」がオープン</h3>

                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                </section>

                <table>
                    <tr>
                        <th>エリア</th>
                        <td>関東 / 東京</td>
                        <th>業態</th>
                        <td>精肉店</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>東京都千代田区臨海町六丁目地先</td>
                        <th>営業時間</th>
                        <td>AM10:00〜PM6:00</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>03-0000-0000</td>
                        <th>祝日</th>
                        <td>隔週日曜日</td>
                    </tr>
                </table>

                <section class="news_sec">

                    <h3><img src="resources/images/icon_news.png" alt="NEW!" />店舗からの新着NEWS</h3>

                    <ul>
                        <li>
                            <div class="img">
                                <img src="resources/images/venue_list/no_image.jpg" alt="会場からの新着NEWS" />
                            </div>
                            <div class="txt">
                                <p class="day">2021.2.24(MON)</p>
                                <h4>タイトルタイトルタイトルタイトル</h4>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                            </div>
                        </li>

                        <li>
                            <div class="img">
                                <img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
                            </div>
                            <div class="txt">
                                <p class="day">2021.2.24(MON)</p>
                                <h4>タイトルタイトルタイトルタイトル</h4>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                            </div>
                        </li>

                        <li>
                            <div class="img">
                                <img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
                            </div>
                            <div class="txt">
                                <p class="day">2021.2.24(MON)</p>
                                <h4>タイトルタイトルタイトルタイトル</h4>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                            </div>
                        </li>

                        <li>
                            <div class="img">
                                <img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
                            </div>
                            <div class="txt">
                                <p class="day">2021.2.24(MON)</p>
                                <h4>タイトルタイトルタイトルタイトル</h4>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                            </div>
                        </li>
                    </ul>

                </section>


                <a href="#order" class="link_btn">注文する</a>
            </section>

            <!--20210729 add-->
            <div class="gallery_sec modal_sec" style="display: none;">

                <div class="inr">

                    <span class="close">+</span>

                    <h3>冷食専門店「NIKUO CIRCUS」</h3>
                    <ul>
                        <li><img src="resources/images//shop/shop_slider01.jpg" alt="" /></li>
                        <li><img src="resources/images//shop/shop_slider02.jpg" alt="" /></li>
                        <li><img src="resources/images//shop/shop_slider03.jpg" alt="" /></li>
                    </ul>

                </div>
                <!--inr end-->

            </div>
            <!--20210729 ここまで-->


            <!--▼▼▼20210818追加-->
            <section id="youtube" class="cont">
                <h2>紹介動画</h2>

                <div class="inr">
                    <div class="movie">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PCsp58BIsmA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </section>
            <!--▲▲▲20210818ここまで-->


            <section id="menu" class="cont">
                <h2>メニュー</h2>

                <h3>BBQメニュー</h3>

                <section>
                    <figure><img src="resources/images/shop/menu1.png" alt="BBQ用満腹お肉セット（5人前）" /></figure>

                    <h4>BBQ用満腹お肉セット（5人前）</h4>

                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>

                    <span>お一人様 <span>¥3,000円<span>（税別）</span></span></span>
                </section>

                <section>
                    <figure><img src="resources/images/shop/menu2.png" alt="BBQ用ドリンクセット（5人前）" /></figure>

                    <h4>BBQ用ドリンクセット（5人前）</h4>

                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>

                    <span>お一人様 <span>¥3,000円<span>（税別）</span></span></span>
                </section>


                <h3>単品メニュー</h3>

                <section class="single">
                    <img src="resources/images/shop/menu_single.png" alt="" />

                    <h4>売店情報タイトル売店情報タイトル売店情報タイトル売店情報</h4>

                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                </section>

                <table>
                    <tr>
                        <th>商品名</th>
                        <td>商品説明商品説明商品説明商品説明</td>
                        <td>￥300<span class="small">（税別）</span></td>
                    </tr>
                    <tr>
                        <th>商品名商品名商品名</th>
                        <td>商品説明商品説明商品説明商品説明</td>
                        <td>￥300<span class="small">（税別）</span></td>
                    </tr>
                    <tr>
                        <th>商品名商品名</th>
                        <td>商品説明商品説明商品説明商品説明</td>
                        <td><span class="bold">要確認</span></td>
                    </tr>
                    <tr>
                        <th>商品名商品名商品名</th>
                        <td>商品説明商品説明商品説明商品説明</td>
                        <td><span class="bold">要確認</span></td>
                    </tr>
                </table>

                <!--20210729変更-->
                <a href="javascript:void(0)" class="modal more_btn" data-name=".shopdetail_sec">商品を注文する</a>
            </section>


            <!--20210729追加-->
            <div class="shopdetail_sec modal_sec" style="display: none;">

                <div class="inr">

                    <span class="close">+</span>

                    <h3>売店情報タイトル売店情報タイトル売店情報タイトル売店情報</h3>

                    <div class="main">
                        <img src="resources/images/shop/menu1.png" alt="" />
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                    </div>

                    <div class="info clearfix">

                        <div class="item">
                            <div class="checkbox_sec">
                                <input type="checkbox" name="menu_item[]">
                            </div>
                            <dl>
                                <dt>焼肉セット（800g）</dt>
                                <dd class="price">¥10,000円<span>（税込）</span></dd>
                                <dd class="caption">
                                    500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。
                                </dd>
                            </dl>
                        </div>

                        <div class="item">
                            <div class="checkbox_sec">
                                <input type="checkbox" name="menu_item[]">
                            </div>
                            <dl>
                                <dt>焼肉セット（800g）</dt>
                                <dd class="price">¥10,000円<span>（税込）</span></dd>
                                <dd class="caption">
                                    500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。
                                </dd>
                            </dl>
                        </div>

                        <div class="item">
                            <div class="checkbox_sec">
                                <input type="checkbox" name="menu_item[]">
                            </div>
                            <dl>
                                <dt>焼肉セット（800g）</dt>
                                <dd class="price">¥10,000円<span>（税込）</span></dd>
                                <dd class="caption">
                                    500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。
                                </dd>
                            </dl>
                        </div>

                        <div class="item">
                            <div class="checkbox_sec">
                                <input type="checkbox" name="menu_item[]">
                            </div>
                            <dl>
                                <dt>焼肉セット（800g）</dt>
                                <dd class="price">¥10,000円<span>（税込）</span></dd>
                                <dd class="caption">
                                    500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。
                                </dd>
                            </dl>
                        </div>


                        <ul class="order_btn_sec">
                            　 <li class="clear_btn"><a href="javascript:void(0);">チェッククリア</a></li>
                            <li class="all_buy_btn"><a href="javascript:void(0);">すべてチェック</a></li>
                            <li class="order_btn"><a href="#">注文する</a></li>
                        </ul>



                    </div>

                </div>
            </div>
            <!--20210729追加ここまで-->


            <section id="order" class="cont">
                <h2>注文方法</h2>

                <section>
                    <h3><img src="resources/images/shop/order_1_h2.png" alt="アイコン" />店舗へ注文する</h3>

                    <ul>
                        <li>
                            <h4>電話で注文する</h4>

                            <a href="tel:0300000000">03-0000-0000<span>（営業時間：10:00〜18:00 土日祝覗く）</span></a>
                        </li>
                        <li>
                            <h4>Webで注文する</h4>

                            <a href=""><img src="resources/images/shop/web_icon.png" alt="アイコン" />Web Site</a>
                        </li>
                    </ul>

                    <table>
                        <tr>
                            <th>住所</th>
                            <td>東京都千代田区臨海町六丁目地先</td>
                        </tr>
                        <tr>
                            <th>E-Mail</th>
                            <td>info@meet-sshop.com</td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><a href="https://meet-sshop.com/order/"
                                    target="_blank">https://meet-sshop.com/order/</a></td>
                        </tr>
                    </table>
                </section>

                <section>
                    <h3><img src="resources/images/shop/order_2_h2.png" alt="アイコン" />Baviで注文する</h3>

                    <ul>
                        <li>
                            <h4>電話で注文する</h4>

                            <a href="">03-5849-3221<span>（営業時間：10:00〜18:00 土日祝覗く）</span></a>
                        </li>
                        <li>
                            <h4>ECサイトで注文</h4>

                            <a href=""><img src="resources/images/shop/cart_icon.png" alt="アイコン" />SHOPPING Site</a>
                        </li>
                    </ul>

                    <table>
                        <tr>
                            <th>住所</th>
                            <td>東京都足立区大谷田3-21-6</td>
                        </tr>
                        <tr>
                            <th>E-Mail</th>
                            <td>order@bavi.com</td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><a href="https://bavi.com/order/" target="_blank">https://bavi.com/order/</a></td>
                        </tr>
                    </table>
                </section>
            </section>


            <section id="access" class="cont">
                <h2>アクセス</h2>

                <div><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12969.388296947453!2d139.85144952957396!3d35.64381962101789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d518377e105%3A0xa10bf2d44c6c4b59!2z6JGb6KW_6Ieo5rW35YWs5ZySIOODkOODvOODmeOCreODpeODvOW6g-WgtA!5e0!3m2!1sja!2sjp!4v1613655661209!5m2!1sja!2sjp"
                        width="640" height="370" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe></div>

                <p>東京都千代田区臨海町六丁目地先<br />TEL: 03-0000-0000</p>
            </section>


            <section id="spot" class="cont">
                <h2>周辺のBBQ場</h2>

                <p>会場周辺のBBQ会場をご紹介。</p>

                <div class="slick">
                    <div class="item">
                        <a href="">
                            <img src="resources/images/shop/spot1.png" alt="九州" />

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="resources/images/shop/spot2.png" alt="四国" />

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="resources/images/shop/spot1.png" alt="九州" />

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="resources/images/shop/spot2.png" alt="四国" />

                            <h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
                        </a>
                    </div>
                </div>

                <a href="" class="link_btn">もっと見る</a>
            </section>


            <section id="voice" class="cont">
                <h2>口コミ</h2>

                <section>
                    <dl>
                        <dt>まえたかさん</dt>
                        <dd>（男性 / 40代）</dd>
                    </dl>

                    <div class="stars">
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star_half.png" alt="星半数個" />
                        <span>4.5 / 5.0</span>
                    </div>

                    <h3>タイトルタイトルタイトルタイトルタイトル</h3>

                    <p>接客が素晴らしかったです。出迎えてくださったスタッフの方がとてもにこやかで親切にしてくださり、最初からとても印象が良かったです。それからご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。
                    </p>
                </section>

                <section>
                    <dl>
                        <dt>まえたかさん</dt>
                        <dd>（男性 / 40代）</dd>
                    </dl>

                    <div class="stars">
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star.png" alt="星1個" />
                        <img src="resources/images/star_half.png" alt="星半数個" />
                        <span>4.5 / 5.0</span>
                    </div>

                    <h3>タイトルタイトルタイトルタイトルタイトル</h3>

                    <p>接客が素晴らしかったです。出迎えてくださったスタッフの方がとてもにこやかで親切にしてくださり、最初からとても印象が良かったです。それからご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。
                    </p>

                    <section>
                        <h4>多摩川緑地バーベキュー広場からの返信</h4>

                        <p>この度はホテル南風荘をご利用いただきまして、誠にありがとうございました。「接客が素晴らしい」その一言が、とても嬉しく励みになります。感染対策も出来る限りの対応となっておりますが、安心してお過ごしいただけましたようで幸いです。
                        </p>
                    </section>
                </section>

                <a href="javascript:void(0)" class="more_btn">口コミをもっと見る</a>
            </section>

            <a href="" class="back_btn"><img src="resources/images/back_btn.png" alt="一覧に戻る" /></a>

            <a href="" class="like_btn"><img src="resources/images/like_btn.png" alt="LIKE!" /></a>
        </article>


        <footer>
            <a href="#wrapper" id="topbtn"><img src="resources/images/to_top.png" alt="ページTOPへ" /></a>

            <figure>
                <img src="resources/images/foot_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" />
            </figure>

            <ul>
                <li><a href=""><img src="resources/images/sns1.png" alt="Twitter" /></a></li>
                <li><a href=""><img src="resources/images/sns2.png" alt="You tube" /></a></li>
                <li><a href=""><img src="resources/images/sns3.png" alt="facebook" /></a></li>
                <li><a href=""><img src="resources/images/sns4.png" alt="LINE" /></a></li>
            </ul>

            <nav>
                <ul>
                    <li><a href="">Baviについて</a></li>
                    <li><a href="">お問い合わせ</a></li>
                    <li><a href="">運営会社</a></li>
                </ul>
            </nav>

            <p>&copy; Copyright Bavi all right reserved.</p>
        </footer>


        <nav id="bottom_nav">
            <ul>
                <li>
                    <a href="/">
                        <img src="resources/images/bottom_nav1.png" alt="BBQ場" />
                        <span>BBQ場</span>
                    </a>
                </li>
                <li>
                    <a href="/spot.html">
                        <img src="resources/images/bottom_nav2.png" alt="食材SPOT" />
                        <span>食材SPOT</span>
                    </a>
                </li>
                <li>
                    <a href="/column.html">
                        <img src="resources/images/bottom_nav3.png" alt="COLUMN" />
                        <span>COLUMN</span>
                    </a>
                </li>
                <li>
                    <a href="/like.html">
                        <img src="resources/images/bottom_nav4.png" alt="LIKE" />
                        <span>LIKE</span>
                    </a>
                </li>
                <li>
                    <a id="menu_open">
                        <img src="resources/images/bottom_nav5.png" alt="MENU" />
                        <span>MENU</span>
                    </a>
                </li>
            </ul>
        </nav>


        <nav id="overlay_nav">
            <span id="close">+</span>

            <div>
                <a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>

                <dl>
                    <dt>探す</dt>
                    <dd><a href="/">BBQ場</a></dd>
                    <dd><a href="/spot.html">周辺店舗</a></dd>
                    <dd><a href="/column.html">コラム</a></dd>

                    <dt>MyPage</dt>
                    <dd><a href="">お気に入りページ</a></dd>

                    <dt>新着情報</dt>
                    <dd><a href="">BBQ場新着</a></dd>
                    <dd><a href="">周辺店舗新着</a></dd>

                    <dt>その他</dt>
                    <dd><a href="">Baviについて</a></dd>
                </dl>
            </div>
        </nav>
    </div>
</body>

</html>