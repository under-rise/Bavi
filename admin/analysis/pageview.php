<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>ページビュー（アクセス解析） | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
    <link type="text/css" rel="stylesheet" href="/admin/css/default.css?1.1" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/admin/css/common.css">
    <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.1">
    <link type="text/css" rel="stylesheet" href="/admin/css/analysis.css?1.51">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


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
                        <h1>アクセス解析 | ページビュー</h1>
                        <div class="back"><a href="./index.php">一覧ページへ戻る</a></div>
                    </div>


                    <!-- 追加 -->
                    <div id="admin" class="analysis_sec top flex justify-between pageview">

                        <div class="analysis_detail itemBOX shadow">

                            <div class="sub_ttl">
                                <h2>ページビュー（2022年8月）</h2>
                            </div>

                            <div class="inr">

                                <ul class="time_select_link">
                                    <li class="week" data-time-select="week"><a href="#">前の月</a></li>
                                    <li class="month active" data-time-select="month">2022年8月</li>
                                    <li class="month" data-time-select="month"><a href="#">次の月</a></li>
                                </ul>

                                <table class="table_style">
                                    <tr>
                                        <th>ページタイトル</th>
                                        <th>URL</th>
                                        <th class="sort" data-num="reverse">閲覧回数 ▼</th>
                                    </tr>
                                    <tr>
                                        <td>BBQ場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/</a></td>
                                        <td>420人</td>
                                    </tr>
                                    <tr>
                                        <td>恋人ビーチ うふた浜BBQ場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1290</a></td>
                                        <td>320人</td>
                                    </tr>
                                    <tr>
                                        <td>KIRANAH RESORT TOYOSU（キラナリゾート豊洲） | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1522</a></td>
                                        <td>120人</td>
                                    </tr>
                                    <tr>
                                        <td>妙典河川敷・自由広場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1423</a></td>
                                        <td>90人</td>
                                    </tr>
                                    <tr>
                                        <td>BBQ場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/</a></td>
                                        <td>20人</td>
                                    </tr>
                                    <tr>
                                        <td>恋人ビーチ うふた浜BBQ場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1290</a></td>
                                        <td>10人</td>
                                    </tr>
                                    <tr>
                                        <td>KIRANAH RESORT TOYOSU（キラナリゾート豊洲） | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1522</a></td>
                                        <td>4人</td>
                                    </tr>
                                    <tr>
                                        <td>妙典河川敷・自由広場 | 日本最大級のBBQプラットフォーム Bavi</td>
                                        <td><a href="#">https://bavi.jp/spot/detail/1423</a></td>
                                        <td>0人</td>
                                    </tr>


                                </table>

                                <div class="pager">
                                    <ul>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                </div>

                                <div class="btn"><a href="./index.php">一覧ページへ戻る</a></div>
                            </div>

                        </div>

                    </div>
                    <!-- ここまで -->


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
    <script src="/admin/analysis/js/sort.js?1.31"></script>

    <script>
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