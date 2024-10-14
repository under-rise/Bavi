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

    <link rel="stylesheet" href="resources/css/top.css?11.3">
    <link rel="stylesheet" href="resources/css/top_sp.css?1.51">

    <link rel="stylesheet" href="/resources/slick/slick.css" />
    <link rel="stylesheet" href="/resources/slick/slick-theme.css?1.1" />


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
                autoplaySpeed: 3000,
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

        <header>
            <h1>日本最大級のBBQプラットフォーム Bavi</h1>

            <a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>


            <span class="login_sec">
                <a href="/MyPage/login.php">
                    <span class="img"><img src="/MyPage/images/login_btn.svg"></span>
                    <p>ログイン</p>
                </a>
            </span>

        </header>

        <article>

            <section class="switch_sec">

                    <ul>
                        <li>
                            <div class="info">
                                <h2>全国のBBQ場を掲載</h2>
                                <p>手ぶらで楽しめるスポットから、絶景を楽しめるアウトドア体験まで、あなたにぴったりのBBQ場が見つかります。友達や家族と一緒に、自然の中で楽しいひとときを過ごしてみませんか？都心からアクセス抜群な場所や、予約が必要な人気スポットもご紹介しています。</p>
                                <div class="btn2">
                                    <a href="bbq.php">BBQ場を検索</a>
                                </div>
                            </div>  
                        </li>
                        <li>
                            <div class="info">
                                <h2>焼肉・BBQに関する全国の飲食店を掲載</h2>
                                <p>全国の焼肉・BBQ好きに贈る、厳選飲食店リスト！こだわりのお肉が自慢の焼肉店から、開放感あふれるBBQが楽しめるお店まで、各地の人気スポットを幅広くご紹介。豪華なお肉が楽しめるレストランなど、シーンに合わせたお店選びも簡単。</p>
                                <div class="btn2">
                                    <a href="shop_list.php">飲食店を検索</a>
                                </div>
                            </div>  
                        </li>
                        <li>
                            <div class="info">
                                <h2>BBQや店舗情報を配信中</h2>
                                <p>BBQや飲食店の最新情報を随時配信中！手ぶらで楽しめるBBQスポットや、おすすめの焼肉店など、全国各地の店舗情報をいち早くお届けします。新しい店舗の紹介やイベント情報も満載。あなたの次のお出かけ先がきっと見つかるはず！ BBQの達人になるためのコツや、美味しく楽しむためのヒントも配信中。</p>
                                <div class="btn2">
                                    <a href="https://bavi.jp/contents/">コラムを見る</a>
                                </div>
                            </div>  
                        </li>
                    </ul>

            </section>
            <!-- switch_sec -->

            <section class="pickup_sec cont" x-data="{open:'area02'}">
                <div class="inr">

                    <h2>ピックアップBBQ場</h2>

                    <nav>
                        <ul>
                            <li @click="open='area01'" :class="open=='area01' ? 'active' : ''">北海道・東北</li>
                            <li @click="open='area02'" :class="open=='area02' ? 'active' : ''">関東</li>
                            <li @click="open='area03'" :class="open=='area03' ? 'active' : ''">中部</li>
                            <li @click="open='area04'" :class="open=='area04' ? 'active' : ''">近畿</li>
                            <li @click="open='area05'" :class="open=='area05' ? 'active' : ''">中国・四国</li>
                            <li @click="open='area06'" :class="open=='area06' ? 'active' : ''">九州・沖縄</li>
                        </ul>
                    </nav>

                    <div class="pickup_list_sec">

                        <div class="area_sec" x-show="open=='area01'">

                            <h3>北海道・東北エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="venue_list.php">北海道・東北エリアのBBQ場を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area02'">

                            <h3>関東エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>

                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="venue_list.php">関東エリアのBBQ場を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area03'">

                            <h3>中部エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="venue_list.php">中部エリアのBBQ場を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area04'">

                            <h3>近畿エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="venue_list.php">近畿エリアのBBQ場を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area05'">

                            <h3>中国・四国エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="venue_list.php">中国・四国エリアのBBQ場を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area06'">

                            <h3>九州・沖縄エリア</h3>

                            <ul class="none">
                                <li>まだ、こちらのエリアの掲載はありません。</li>
                            </ul>

                            <div class="btn2">
                                <a href="venue_list.php">九州・沖縄エリアのBBQ場を探す</a>
                            </div>
                        </div>

                    </div>


                </div>
            </section>
            <!-- switch_sec -->

            <section class="pickup_sec cont" x-data="{open:'area02'}">
                <div class="inr">

                    <h2>ピックアップ飲食店</h2>

                    <nav>
                        <ul>
                            <li @click="open='area01'" :class="open=='area01' ? 'active' : ''">北海道・東北</li>
                            <li @click="open='area02'" :class="open=='area02' ? 'active' : ''">関東</li>
                            <li @click="open='area03'" :class="open=='area03' ? 'active' : ''">中部</li>
                            <li @click="open='area04'" :class="open=='area04' ? 'active' : ''">近畿</li>
                            <li @click="open='area05'" :class="open=='area05' ? 'active' : ''">中国・四国</li>
                            <li @click="open='area06'" :class="open=='area06' ? 'active' : ''">九州・沖縄</li>
                        </ul>
                    </nav>

                    <div class="pickup_list_sec">

                        <div class="area_sec" x-show="open=='area01'">

                            <h3>北海道・東北エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/shop1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="shop_list.php">北海道・東北エリアの飲食店を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area02'">

                            <h3>関東エリア</h3>
                            <ul>
                                <li>
                                        <figure>
                                            <a href="shop_detail.php">
                                                <img src="resources/images/top/test/shop1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="info">
                                            <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                    <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                        8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                    <dl>
                                                        <dt>関東 / 群馬県</dt>
                                                        <dd>群馬県高崎市大八木町605-4</dd>
                                                    </dl>
                                        </div>
                                    </li>

                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/shop2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>

                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/shop3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="shop_list.php">関東エリアの飲食店を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area03'">

                            <h3>中部エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq3.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="shop_list.php">中部エリアの飲食店を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area04'">

                            <h3>近畿エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq2.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="shop_list.php">近畿エリアの飲食店を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area05'">

                            <h3>中国・四国エリア</h3>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="shop_detail.php">
                                            <img src="resources/images/top/test/bbq1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="info">
                                        <h4>秋川橋河川公園バーベキューランド【業界最安！】<h4>
                                                <p>認知度抜群！都心から約1時間。夏には川で遊びならBBQが可能です。<br>
                                                    8月1日より繁忙期特別料金として1名200円が別途かかります。</p>
                                                <dl>
                                                    <dt>関東 / 群馬県</dt>
                                                    <dd>群馬県高崎市大八木町605-4</dd>
                                                </dl>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn2">
                                <a href="shop_list.php">中国・四国エリアの飲食店を探す</a>
                            </div>
                        </div>

                        <div class="area_sec" x-show="open=='area06'">

                            <h3>九州・沖縄エリア</h3>

                            <ul  class="none">
                                <li>まだ、こちらのエリアの掲載はありません。</li>
                            </ul>

                            <div class="btn2">
                                <a href="shop_list.php">九州・沖縄エリアの飲食店を探す</a>
                            </div>
                        </div>

                    </div>

                 

                </div>
            </section>
            <!-- switch_sec -->

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