<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>アクセス数（アクセス解析） | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
    <link type="text/css" rel="stylesheet" href="/admin/css/default.css?1.1" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/admin/css/common.css">
    <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.1">
    <link type="text/css" rel="stylesheet" href="/admin/css/analysis.css?22">

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
                        <h1>アクセス解析 | アクセス数</h1>
                        <div class="back"><a href="./index.php">一覧ページへ戻る</a></div>
                    </div>


                    <!-- 追加 -->
                    <div id="admin" class="analysis_sec top flex justify-between">

                        <div class="analysis_detail itemBOX shadow">

                            <div class="inr">


                                <div class="week table_data active">
                                    <div class="sub_ttl">
                                        <h2>日別アクセス数（2022年10月10日）</h2>

                                        <ul class="time_select">
                                            <li class="day active"><a href="access.php">日</a></li>
                                            <li class="week "><a href="access_week.php">週</a></li>
                                            <li class="month"><a href="access_month.php">月</a></li>
                                        </ul>
                                    </div>

                                    <ul class="time_select_link">
                                        <li class="week" data-time-select="week"><a href="#">前の日</a></li>
                                        <li class="month active" data-time-select="month">2022年10月10日</li>
                                        <li class="month" data-time-select="month"><a href="#">次の日</a></li>
                                    </ul>


                                    <table class="table_style">
                                        <tr>
                                            <th class="sort" data-num="reverse">日付 ▼</th>
                                            <th class="sort" data-num="1">新規ユーザー ▼</th>
                                            <th class="sort" data-num="2">リピートユーザー ▼</th>
                                            <th class="sort" data-num="3">閲覧ユーザー ▼</th>
                                        </tr>
                                        <tr>
                                            <td>3時〜6時</td>
                                            <td>110秒</td>
                                            <td>230秒</td>
                                            <td>230秒</td>
                                        </tr>

                                        <tr>
                                            <td>3時〜9時</td>
                                            <td>140秒</td>
                                            <td>210秒</td>
                                            <td>30秒</td>
                                        </tr>

                                        <tr>
                                            <td>9時〜12時</td>
                                            <td>150秒</td>
                                            <td>206秒</td>
                                            <td>390秒</td>
                                        </tr>


                                        <tr>
                                            <td>9時〜15時</td>
                                            <td>210秒</td>
                                            <td>20秒</td>
                                            <td>30秒</td>
                                        </tr>

                                        <tr>
                                            <td>15時〜18時</td>
                                            <td>10秒</td>
                                            <td>220秒</td>
                                            <td>310秒</td>
                                        </tr>

                                        <tr>
                                            <td>18時〜21時</td>
                                            <td>10秒</td>
                                            <td>320秒</td>
                                            <td>30秒</td>
                                        </tr>


                                        <tr>
                                            <td>21時〜24時</td>
                                            <td>10秒</td>
                                            <td>120秒</td>
                                            <td>30秒</td>
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
                                </div>
                                <!-- week -->


                            </div>
                            <!-- month -->

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
    <script src="/admin/analysis/js/sort.js?1.31"></script>

    <script>
    $('.time_select li').on('click', function() {
        $(this).parent().children('li').removeClass('active');
        $(this).addClass('active');
        let s = $(this).data('time-select');
        $('.table_data').removeClass('active');
        $('.analysis_detail').find('.' + s).addClass('active');
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