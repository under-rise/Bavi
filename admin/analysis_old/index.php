<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>アクセス解析 | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
    <link type="text/css" rel="stylesheet" href="/admin/css/default.css?1.1" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/admin/css/common.css">
    <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.1">
    <link type="text/css" rel="stylesheet" href="/admin/css/analysis.css?1.21">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <style>
    .grid ul {
        display: grid;
        grid-template-columns: 1fr 0.2fr;
        align-items: center;
        border-bottom: 1px solid #999;
        padding: 8px 0;
    }

    .grid ul li {
        font-size: 12px;
    }

    .grid ul li:nth-child(1) {
        grid-row: 1 / 2;
        grid-column: 1 / 2;
        font-weight: bold;
    }

    .grid ul li:nth-child(2) {
        grid-row: 2 / 3;
        grid-column: 1 / 2;
    }

    .grid ul li:nth-child(3) {
        border-left: 1px solid #999;
        grid-row: 1 / 3;
        grid-column: 2 / 3;
        text-align: center;
        font-weight: bold;
    }

    ul {
        list-style: none;
    }

    body {
        padding-top: 0;
    }


    footer {
        position: fixed;
        bottom: 0;
    }
    </style>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

</head>

<body id="analysis">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <nav class="col-md-2 navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/customer/top">Bavi | 顧客管理画面</a>
                        </div>
                    </div>
                </nav>

                <?php include __DIR__ . '/../template/nav.php'; ?>

            </div>

            <section class="contents">

                <div id="management_page" class="col-md-10 col-md-offset-2 main">

                    <div class="ttl">
                        <h1>アクセス解析</h1>
                        <div class="back"><a href="#">一覧ページへ戻る</a></div>
                    </div>


                    <!-- 追加 -->
                    <div id="admin" class="analysis_sec top flex justify-between">

                        <div class="analysis_top itemBOX shadow">

                            <div class="ttl">
                                <h2>アクセス数</h2>
                            </div>

                            <div class="inr">

                                <ul class="flex view_sec">
                                    <li>新規ユーザー
                                        <p class="new_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                    <li>リピートユーザー
                                        <p class="repeat_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                    <li>閲覧ユーザー
                                        <p class="view_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                </ul>

                                <canvas id="access_charts" class="analysis"></canvas>

                                <div class="flex between">
                                    <p class="selected_date">選択期間：<span>2022年8月19日</span></p>
                                    <ul class="time_select" data-shop_id="admin" data-type="guest"
                                        data-replace='["new","repeat","view"]'>
                                        <li class="day active">日</li>
                                        <li class="week">週</li>
                                        <li class="month">月</li>
                                    </ul>
                                </div>

                                <div class="btn"><a href="access.php">詳しく見る</a></div>

                            </div>

                        </div>
                        <!-- itemBOX END -->

                        <div class="analysis_top itemBOX shadow">
                            <div class="ttl">
                                <h2>ページビュー</h2>
                            </div>

                            <div class="inr">

                                <ul class="flex view_sec">
                                    <li>1ユーザーあたり
                                        <p class="pageview"><span class="num">0</span><span>ページ</span></p>
                                    </li>
                                </ul>

                                <canvas id="pageview_charts" class="analysis"></canvas>

                                <div class="flex between">
                                    <p class="selected_date">選択期間：<span></span></p>
                                    <ul class="time_select" data-shop_id="admin" data-type="pageview"
                                        data-replace='["pageview"]'>
                                        <li class="day active">日</li>
                                        <li class="week">週</li>
                                        <li class="month">月</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="btn"><a href="./pageview.php">詳しく見る</a></div>

                        </div>
                        <!-- itemBOX END -->

                        <div class="analysis_top itemBOX shadow">
                            <div class="ttl">
                                <h2>コンバージョン</h2>
                            </div>

                            <div class="inr">

                                <ul class="flex view_sec">
                                    <li>予約完了数
                                        <p class="conversion_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                    <li>準予約完了
                                        <p class="semi_conversion_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                    <li>電話タップ
                                        <p class="tel_conversion_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                    <li>オフィシャルサイトタップ
                                        <p class="site_conversion_guest"><span class="num">0</span><span>人</span></p>
                                    </li>
                                </ul>

                                <canvas id="conversion_charts" class="analysis"></canvas>

                                <div class="flex between">
                                    <p class="selected_date">選択期間：<span></span></p>
                                    <ul class="time_select" data-shop_id="admin" data-type="conversion"
                                        data-replace='["conversion","semi_conversion","tel_conversion","site_conversion"]'>
                                        <li class="day active">日</li>
                                        <li class="week">週</li>
                                        <li class="month">月</li>
                                    </ul>
                                </div>

                                <div class="btn"><a href="./conversion.php">詳しく見る</a></div>

                            </div>

                        </div>
                        <!-- itemBOX END -->



                        <div class="analysis_top itemBOX shadow">
                            <div class="ttl">
                                <h2>滞在時間</h2>
                            </div>

                            <div class="inr">

                                <ul class="flex view_sec" id="admin">
                                    <li>平均滞在時間
                                        <p class="stay_time_average"><span class="num">0</span><span>秒</span></p>
                                    </li>
                                </ul>


                                <div class="stay_time_charts_sec">
                                    <canvas id="stay_time_charts" class="analysis"></canvas>
                                </div>

                            </div>

                        </div>
                        <!-- itemBOX END -->

                        <div class="analysis_top itemBOX shadow">
                            <div class="ttl">
                                <h2>参照サイト</h2>
                            </div>

                            <div class="inr">

                                <div id="reference_site" class="grid">

                                    <ul>
                                        <li>Goggle</li>
                                        <li>https://www.google.co.jp/</li>
                                        <li>2110</li>
                                    </ul>
                                    <ul>
                                        <li>コラム【アドバイス】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=13</li>
                                        <li>1102</li>
                                    </ul>
                                    <ul>
                                        <li>BBQ場【青森県】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=2</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>Yahoo</li>
                                        <li>https://www.yahoo.co.jp/</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>その他</li>
                                        <li>https://xxxxxxx.com</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>その他</li>
                                        <li>https://xxxxxxx.com</li>
                                        <li>10</li>
                                    </ul>

                                </div>

                                <div class="btn"><a href="./reference.php">詳しく見る</a></div>

                            </div>

                        </div>
                        <!-- itemBOX END -->


                        <div class="analysis_top itemBOX shadow">
                            <div class="ttl">
                                <h2>離脱ページ</h2>
                            </div>

                            <div class="inr">

                                <div id="reference_site" class="grid">

                                    <ul>
                                        <li>コラム【アドバイス】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=13</li>
                                        <li>2110</li>
                                    </ul>
                                    <ul>
                                        <li>コラム【アドバイス】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=13</li>
                                        <li>1102</li>
                                    </ul>
                                    <ul>
                                        <li>BBQ場【青森県】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=2</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>BBQ場【東京】 | 日本最大級のBBQプラットフォーム Bavi</li>
                                        <li>https://bavi.jp/spot?pref_id=2</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>その他</li>
                                        <li>https://xxxxxxx.com</li>
                                        <li>10</li>
                                    </ul>
                                    <ul>
                                        <li>その他</li>
                                        <li>https://xxxxxxx.com</li>
                                        <li>10</li>
                                    </ul>

                                </div>

                                <div class="btn"><a href="./exit.php">詳しく見る</a></div>

                            </div>

                        </div>
                        <!-- itemBOX END -->


                    </div>
                    <!-- ここまで -->



                    <div class="table_style">
                        <button class="btn_type back" onclick="location.href='/admin/index.php'">一覧ページへ戻る</button>
                    </div>

                </div>
                <!--management_page-->

            </section>

        </div>
        <!--row-->

    </div>

    <footer>
        <p>© Copyright Bavi all right reserved.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="/admin/analysis/js/func.js?1.121"></script>
    <script src="/admin/analysis/js/config.js?2.411"></script>
    <script src="/admin/analysis/js/common.js?1.931"></script>
    <script src="/admin/analysis/js/detail.js?1.31"></script>


    <script>
    const data_url = '/admin/analysis/data/access.json?4.12';
    const reference_url = '/admin/analysis/data/reference.json?1.21';
    $(window).on('load', function() {
        alalysis.detail.pageInit('admin');
    });

    $('.nav-sub').hide();

    $('.menu-toggle').click(function() {
        $(this).parent().find('.nav-sub').toggle(500);
    });

    var active_menu = $('li.active').parent();
    if (active_menu.hasClass('nav-sub')) {
        active_menu.show();
    }
    </script>

</body>

</html>