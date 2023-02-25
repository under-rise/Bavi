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
                                        <h2>日別アクセス数（10月10日〜10月16日）</h2>

                                        <ul class="time_select">
                                            <li class="day"><a href="access.php">日</a></li>
                                            <li class="week active"><a href="access_week.php">週</a></li>
                                            <li class="month"><a href="access_month.php">月</a></li>
                                        </ul>
                                    </div>

                                    <ul class="time_select_link">
                                        <li class="week" data-time-select="week"><a href="#">前の週</a></li>
                                        <li class="month active" data-time-select="month">2022年10月10日〜10月16日</li>
                                        <li class="month" data-time-select="month"><a href="#">次の週</a></li>
                                    </ul>


                                    <table class="table_style">
                                        <tr>
                                            <th class="sort" data-num="reverse">日付 ▼</th>
                                            <th class="sort" data-num="1">新規ユーザー ▼</th>
                                            <th class="sort" data-num="2">リピートユーザー ▼</th>
                                            <th class="sort" data-num="3">閲覧ユーザー ▼</th>
                                        </tr>
                                        <tr>
                                            <td>2022年10月16日（日）</td>
                                            <td>110人</td>
                                            <td>230人</td>
                                            <td>230人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年10月15日（土）</td>
                                            <td>140人</td>
                                            <td>210人</td>
                                            <td>30人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年10月14日（金）</td>
                                            <td>150人</td>
                                            <td>206人</td>
                                            <td>390人</td>
                                        </tr>


                                        <tr>
                                            <td>2022年10月13日（木）</td>
                                            <td>210人</td>
                                            <td>20人</td>
                                            <td>30人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年10月12日（水）</td>
                                            <td>10人</td>
                                            <td>220人</td>
                                            <td>310人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年10月11日（火）</td>
                                            <td>10人</td>
                                            <td>320人</td>
                                            <td>30人</td>
                                        </tr>


                                        <tr>
                                            <td>2022年10月10日（月）</td>
                                            <td>10人</td>
                                            <td>120人</td>
                                            <td>30人</td>
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

                                <div class="month table_data">
                                    <div class="sub_ttl">
                                        <h2>月別アクセス数（2022年4月〜2022年10月）</h2>
                                    </div>

                                    <table class="table_style">
                                        <tr>
                                            <th class="sort" data-num="reverse">日付 ▼</th>
                                            <th class="sort" data-num="1">新規ユーザー ▼</th>
                                            <th class="sort" data-num="2">リピートユーザー ▼</th>
                                            <th class="sort" data-num="3">閲覧ユーザー ▼</th>
                                        </tr>
                                        <tr>
                                            <td>2022年10月</td>
                                            <td>1101人</td>
                                            <td>2301人</td>
                                            <td>2301人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年9月</td>
                                            <td>1401人</td>
                                            <td>2101人</td>
                                            <td>301人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年8月</td>
                                            <td>1501人</td>
                                            <td>2016人</td>
                                            <td>3910人</td>
                                        </tr>


                                        <tr>
                                            <td>2022年7月</td>
                                            <td>210人</td>
                                            <td>120人</td>
                                            <td>330人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年6月</td>
                                            <td>110人</td>
                                            <td>2520人</td>
                                            <td>3710人</td>
                                        </tr>

                                        <tr>
                                            <td>2022年5月</td>
                                            <td>710人</td>
                                            <td>3720人</td>
                                            <td>30人</td>
                                        </tr>


                                        <tr>
                                            <td>2022年4月</td>
                                            <td>170人</td>
                                            <td>1720人</td>
                                            <td>370人</td>
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