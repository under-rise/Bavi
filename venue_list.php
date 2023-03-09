<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="resources/css/sanitize.css">
    <link rel="stylesheet" href="resources/css/base.css?1.4">
    <link rel="stylesheet" href="resources/css/base_sp.css?1.3">
    <link rel="stylesheet" href="resources/css/venue_list.css?2.1">
    <link rel="stylesheet" href="resources/css/venue_list_sp.css?1.5">
    <script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="resources/js/config.js?1"></script>
    <script type="text/javascript" src="resources/js/smoothScroll.js"></script>
    <link rel="stylesheet" href="assets/css/add_style.css?3.29">
    <!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->


    <script>
    $(function() {
        $('.result_list form > ul > li:nth-child(-n+2) ').click(function(e) {
            var select = '.' + $(this).attr('class');
            $('#overlay_search div > ul').css('display', 'none');
            $('#overlay_search div ' + select).css('display', 'block');
            $('#overlay_search div button[type="button"]').css('display', 'none');
            if (select == ".detail") $('#overlay_search div button[type="button"]').css('display',
                'inline-block');
            $('#overlay_search').fadeIn();
            $('html').addClass('overlay');
        });
        $('#overlay_search div button[type="button"]').click(function(e) {
            $('.detail input[type="checkbox"]').prop('checked', false);
            $('.detail input[type="radio"]').prop('checked', false);
            $('.detail input[type="text"]').val('');
        });

    });
    </script>

</head>

<body>
    <div id="loading"></div>
    <div id="wrapper">
        <?php include __DIR__ . '/tpl/header.php'; ?>


        <article class="result_list">
            <form>
                <ul>
                    <li class="location">地域で検索する</li>
                    <li class="detail">さらに絞り込む</li>
                </ul>

                <div id="overlay_search">
                    <div>
                        <span id="close">+</span>

                        <button>検索する</button>
                        <button type="button">リセット</button>

                        <ul class="location">
                            <li>
                                <dl>
                                    <dt>北海道エリア</dt>
                                    <dd><label><input type="checkbox"><span>道央</span></label></dd>
                                    <dd><label><input type="checkbox"><span>道南</span></label></dd>
                                    <dd><label><input type="checkbox"><span>道北</span></label></dd>
                                    <dd><label><input type="checkbox"><span>道東</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>東北エリア</dt>
                                    <dd><label><input type="checkbox"><span>青森県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>秋田県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>岩手県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>山形県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>宮城県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>福島県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>関東エリア</dt>
                                    <dd><label><input type="checkbox"><span>東京都</span></label></dd>
                                    <dd><label><input type="checkbox"><span>茨城県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>栃木県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>群馬県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>埼玉県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>千葉県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>神奈川県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>中部エリア</dt>
                                    <dd><label><input type="checkbox"><span>新潟県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>富山県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>石川県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>福井県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>山梨県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>長野県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>岐阜県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>静岡県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>愛知県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>近畿エリア</dt>
                                    <dd><label><input type="checkbox"><span>三重県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>滋賀県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>京都府</span></label></dd>
                                    <dd><label><input type="checkbox"><span>大阪府</span></label></dd>
                                    <dd><label><input type="checkbox"><span>兵庫県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>奈良県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>和歌山県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>中国エリア</dt>
                                    <dd><label><input type="checkbox"><span>岡山県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>広島県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>鳥取県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>島根県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>山口県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>四国エリア</dt>
                                    <dd><label><input type="checkbox"><span>香川県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>徳島県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>高知県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>愛媛県</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>九州エリア</dt>
                                    <dd><label><input type="checkbox"><span>福岡県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>佐賀県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>長崎県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>熊本県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>大分県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>宮崎県</span></label></dd>
                                    <dd><label><input type="checkbox"><span>鹿児島県</span></label></dd>
                                </dl>
                            </li>

                            <li>
                                <dl>
                                    <dt>沖縄エリア</dt>
                                    <dd><label><input type="checkbox"><span>沖縄本島</span></label></dd>
                                    <dd><label><input type="checkbox"><span>離島</span></label></dd>
                                </dl>
                            </li>
                        </ul>

                        <ul class="detail">
                            <li>
                                <dl>
                                    <dt>ロケーション</dt>
                                    <dd><label><input type="checkbox"><span>川</span></label></dd>
                                    <dd><label><input type="checkbox"><span>海</span></label></dd>
                                    <dd><label><input type="checkbox"><span>都心</span></label></dd>
                                    <dd><label><input type="checkbox"><span>静か</span></label></dd>
                                    <dd><label><input type="checkbox"><span>予公園</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>予約制度</dt>
                                    <dd><label><input type="radio" name="予約制度"><span>予約制</span></label></dd>
                                    <dd><label><input type="radio" name="予約制度"><span>予約不要</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>会場料金</dt>
                                    <dd><label><input type="radio" name="会場料金"><span>無料</span></label></dd>
                                    <dd><label><input type="radio" name="会場料金"><span>有料</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="w100">
                                    <dt>駅からの距離</dt>
                                    <dd><label><input type="radio" name="駅からの距離"><span>徒歩5分以内</span></label></dd>
                                    <dd><label><input type="radio" name="駅からの距離"><span>徒歩6分〜10分以内</span></label></dd>
                                    <dd><label><input type="radio" name="駅からの距離"><span>徒歩11分〜20分以内</span></label></dd>
                                    <dd><label><input type="radio" name="駅からの距離"><span>それ以上</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>駐車場有無</dt>
                                    <dd><label><input type="radio" name="駐車場有無"><span>10台未満</span></label></dd>
                                    <dd><label><input type="radio" name="駐車場有無"><span>10台〜30台</span></label></dd>
                                    <dd><label><input type="radio" name="駐車場有無"><span>31台〜50台</span></label></dd>
                                    <dd><label><input type="radio" name="駐車場有無"><span>51〜100台</span></label></dd>
                                    <dd><label><input type="radio" name="駐車場有無"><span>それ以上</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>炊事場</dt>
                                    <dd><label><input type="radio" name="炊事場"><span>有り</span></label></dd>
                                    <dd><label><input type="radio" name="炊事場"><span>無し</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>会場内機材レンタル</dt>
                                    <dd><label><input type="radio" name="会場内機材レンタル"><span>有り</span></label></dd>
                                    <dd><label><input type="radio" name="会場内機材レンタル"><span>無し</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>会場内食材販売</dt>
                                    <dd><label><input type="radio" name="会場内食材販売"><span>有り</span></label></dd>
                                    <dd><label><input type="radio" name="会場内食材販売"><span>無し</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>お手洗い</dt>
                                    <dd><label><input type="radio" name="お手洗い"><span>古い</span></label></dd>
                                    <dd><label><input type="radio" name="お手洗い"><span>普通</span></label></dd>
                                    <dd><label><input type="radio" name="お手洗い"><span>新しい</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>ペット</dt>
                                    <dd><label><input type="radio" name="ペット"><span>可</span></label></dd>
                                    <dd><label><input type="radio" name="ペット"><span>不可</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>夜営業（16時以降）</dt>
                                    <dd><label><input type="radio" name="夜営業"><span>有り</span></label></dd>
                                    <dd><label><input type="radio" name="夜営業"><span>無し</span></label></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>デリバリー対応</dt>
                                    <dd><label><input type="radio" name="option_id[12][]"
                                                value="32"><span>有り</span></label></dd>
                                    <dd><label><input type="radio" name="option_id[12][]"
                                                value="33"><span>無し</span></label></dd>
                                </dl>
                            </li>
                            <li class="w100">
                                <dl>
                                    <dt>検索ワード</dt>
                                    <dd><input type="text" placeholder="検索ワード"></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>


            <section class="cont">
                <table>
                    <tr>
                        <th>地域条件</th>
                        <td>東京 / 沖縄県 / 石川県</td>
                    </tr>
                    <tr>
                        <th>その他条件</th>
                        <td>LIKE（0~100） / 24時間営業 / 検索ワード（美味しい肉）</td>
                    </tr>
                </table>


                <p>「80件」のBBQ場所が見つかりました。</p>

                <div class="recommend_sec">
                    <h2><span>Baviおすすめ会場</span></h2>

                    <ul class="list shop">
                        <li class="recommend">

                            <div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店" /></div>
                            <a href="venue_detail.php">
                                <figure class="kyusyu"><img src="resources/images/venue_list/result_01.jpg"
                                        alt="多摩川緑地バーベキュー広場" />
                                </figure>

                                <h3>多摩川緑地バーベキュー広場</h3>

                                <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>

                                <div class="point_sec">
                                    <dl>
                                        <dt>Baviポイント<br class="sp_only">還元率</dt>
                                        <dd>
                                            <b>1</b> %
                                        </dd>
                                    </dl>
                                </div>

                                <ul class="icon">
                                    <li><img src="resources/images/icon_delivery.png?1.1" alt=""></li>
                                </ul>

                                <div class="score_sec">
                                    <div class="stars small">
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star_half.png" alt="星半数個" />
                                        <img src="resources/images/star_none.png" alt="星無し" />
                                        <span class="only_pc">3.5 / 5.0</span>
                                    </div>

                                    <dl class="like small">
                                        <dt>&hearts;</dt>
                                        <dd>123<span>LIKE</span></dd>
                                    </dl>
                                </div>
                            </a>
                        </li>

                        <li class="recommend">

                            <div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店" /></div>
                            <a href="venue_detail.php">
                                <figure class="kyusyu"><img src="resources/images/venue_list/result_01.jpg"
                                        alt="多摩川緑地バーベキュー広場" />
                                </figure>

                                <h3>多摩川緑地バーベキュー広場</h3>

                                <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>

                                <div class="point_sec">
                                    <dl>
                                        <dt>Baviポイント<br class="sp_only">還元率</dt>
                                        <dd>
                                            <b>10</b> %
                                        </dd>
                                    </dl>
                                </div>

                                <div class="score_sec">
                                    <div class="stars small">
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star.png" alt="星1個" />
                                        <img src="resources/images/star_half.png" alt="星半数個" />
                                        <img src="resources/images/star_none.png" alt="星無し" />
                                        <span class="only_pc">3.5 / 5.0</span>
                                    </div>

                                    <dl class="like small">
                                        <dt>&hearts;</dt>
                                        <dd>123<span>LIKE</span></dd>
                                    </dl>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>

                <h2>「飲み放題」検索ワードのBBQ場</h2>

                <nav>
                    <ul>
                        <li class="current"><a href="">人気順</a></li>
                        <li><a href="">評価順</a></li>
                        <li><a href="">LIKE順</a></li>
                        <li><a href="">新着順</a></li>
                    </ul>
                </nav>

                <ul class="list shop">
                    <li>
                        <div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店" /></div>
                        <a href="venue_detail.php">
                            <figure class="kyusyu"><img src="resources/images/venue_list/result_01.jpg"
                                    alt="多摩川緑地バーベキュー広場" />
                            </figure>

                            <h3>多摩川緑地バーベキュー広場</h3>

                            <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>


                            <ul class="icon">
                                <li><img src="resources/images/icon_delivery.png?1.1" alt=""></li>
                            </ul>

                            <div class="score_sec">
                                <div class="stars small">
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star_half.png" alt="星半数個" />
                                    <img src="resources/images/star_none.png" alt="星無し" />
                                    <span class="only_pc">3.5 / 5.0</span>
                                </div>

                                <dl class="like small">
                                    <dt>&hearts;</dt>
                                    <dd>123<span>LIKE</span></dd>
                                </dl>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="venue_detail.php">
                            <figure class="okinawa"><img src="resources/images/venue_list/result_02.jpg"
                                    alt="多摩川緑地バーベキュー広場" />

                            </figure>

                            <h3>多摩川緑地バーベキュー広場</h3>

                            <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>

                            <div class="point_sec">
                                <dl>
                                    <dt>Baviポイント<br class="sp_only">還元率</dt>
                                    <dd>
                                        <b>1</b>%
                                    </dd>
                                </dl>
                            </div>

                            <div class="score_sec">
                                <div class="stars small">
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star_half.png" alt="星半数個" />
                                    <img src="resources/images/star_none.png" alt="星無し" />
                                    <span class="only_pc">3.5 / 5.0</span>
                                </div>

                                <dl class="like small">
                                    <dt>&hearts;</dt>
                                    <dd>123<span>LIKE</span></dd>
                                </dl>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <figure class="tohoku"><img src="resources/images/venue_list/no_image.jpg"
                                    alt="多摩川緑地バーベキュー広場" /></figure>

                            <h3>多摩川緑地バーベキュー広場</h3>

                            <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>


                            <div class="score_sec">
                                <div class="stars small">
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star_half.png" alt="星半数個" />
                                    <img src="resources/images/star_none.png" alt="星無し" />
                                    <span class="only_pc">3.5 / 5.0</span>
                                </div>

                                <dl class="like small">
                                    <dt>&hearts;</dt>
                                    <dd>123<span>LIKE</span></dd>
                                </dl>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="venue_detail.php">

                            <figure class="kanto">
                                <img src="resources/images/venue_list/result_03.jpg" alt="多摩川緑地バーベキュー広場" />
                            </figure>

                            <h3>多摩川緑地バーベキュー広場摩川緑地バーベキュー広場</h3>

                            <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。大人数のお客様に大人気。大人数のお客様に大人気。</p>

                            <ul class="icon">
                                <li><img src="resources/images/icon_delivery.png?1.1" alt=""></li>
                            </ul>

                            <div class="score_sec">
                                <div class="stars small">
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star_half.png" alt="星半数個" />
                                    <img src="resources/images/star_none.png" alt="星無し" />
                                    <span class="only_pc">3.5 / 5.0</span>
                                </div>

                                <dl class="like small">
                                    <dt>&hearts;</dt>
                                    <dd>123<span>LIKE</span></dd>
                                </dl>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="venue_detail.php">
                            <figure class="kanto"><img src="resources/images/venue_list/result_03.jpg"
                                    alt="多摩川緑地バーベキュー広場" /></figure>

                            <h3>多摩川緑地バーベキュー広場摩川緑地バーベキュー広場</h3>

                            <p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。大人数のお客様に大人気。大人数のお客様に大人気。</p>

                            <ul class="icon">
                                <li><img src="resources/images/icon_delivery.png?1.1" alt=""></li>
                            </ul>


                            <div class="score_sec">
                                <div class="stars small">
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star.png" alt="星1個" />
                                    <img src="resources/images/star_half.png" alt="星半数個" />
                                    <img src="resources/images/star_none.png" alt="星無し" />
                                    <span class="only_pc">3.5 / 5.0</span>
                                </div>

                                <dl class="like small">
                                    <dt>&hearts;</dt>
                                    <dd>123<span>LIKE</span></dd>
                                </dl>

                            </div>
                        </a>
                    </li>
                </ul>

                <nav class="pager">
                    <ul>
                        <li class="prev"><a href="">前のページ</a>
                        </li>
                        <li><a href="">1</a></li>
                        <li class="current"><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li class="dot">…</li>
                        <li class="next"><a href="">次のページ></a></li>
                    </ul>
                </nav>
            </section>
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

        <div id="bottom_line_btn">
            <a href="https://line.me/ti/p/%40637eulru" target="_blank"><img src="resources/images/line_btn.gif"
                    alt="LINEでお気軽相談" /></a>
        </div>
    </div>
</body>

<script>
$(document).ready(function() {

    let ul = $('.list');

    $(ul).each(function(i, e) {

        $(e).find('> li').each(function(index, el) {

            if (index % 2 == 1) {
                return;
            }

            let h = $(el).height();
            let nh = $(el).next('li').height();
            let maxH = Math.max(h, nh);
            console.log(maxH);
            // set
            $(el).find('a').css({
                'height': maxH
            });
            $(el).next('li').find('a').css({
                'height': maxH
            });

        });
    });
});
</script>

</html>