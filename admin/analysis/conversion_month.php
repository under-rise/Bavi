<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>コンバージョン（アクセス解析） | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
    <link type="text/css" rel="stylesheet" href="/admin/css/default.css?1.1" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/admin/css/common.css">
    <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.1">
    <link type="text/css" rel="stylesheet" href="/admin/css/analysis.css?1.4">

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
                        <h1>アクセス解析 | コンバージョン</h1>
                        <div class="back"><a href="./index.php">一覧ページへ戻る</a></div>
                    </div>


                    <!-- 追加 -->
                    <div id="admin" class="analysis_sec top flex justify-between pageview">

                        <div class="analysis_detail itemBOX shadow">

                            <div class="sub_ttl">
                                <h2>コンバージョン（2022年10月）</h2>

                                <ul class="time_select">
                                    <li class="day "><a href="conversion.php">日</a></li>
                                    <li class="week "><a href="conversion_week.php">週</a></li>
                                    <li class="month active"><a href="conversion_month.php">月</a></li>
                                </ul>
                            </div>

                            <div class="inr">

                                <ul class="time_select_link">
                                    <li class="week" data-time-select="week"><a href="#">前の月</a></li>
                                    <li class="month active" data-time-select="month">2022年10月</li>
                                    <li class="month" data-time-select="month"><a href="#">次の月</a></li>
                                </ul>


                                <table class="table_style">
                                    <tr>
                                        <th>会場名</th>
                                        <th class="sort" data-num="1">予約完了数 ▼</th>
                                        <th class="sort" data-num="2">準予約完了 ▼</th>
                                        <th class="sort" data-num="3">電話タップ ▼</th>
                                        <th class="sort" data-num="4">サイトタップ ▼</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">恋人ビーチ うふた浜BBQ場</a></td>
                                        <td>100人</td>
                                        <td>420人</td>
                                        <td>920回</td>
                                        <td>320回</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">KIRANAH RESORT TOYOSU（キラナリゾート豊洲）</a></td>
                                        <td>300人</td>
                                        <td>120人</td>
                                        <td>1920回</td>
                                        <td>9920回</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">妙典河川敷・自由広場</a></td>
                                        <td>100人</td>
                                        <td>420人</td>
                                        <td>420回</td>
                                        <td>320回</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">BBQ会場</a></td>
                                        <td>200人</td>
                                        <td>0人</td>
                                        <td>550回</td>
                                        <td>50回</td>
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
    const data_url = '/admin/analysis/data/access.json?4.12';
    const reference_url = '/admin/analysis/data/reference.json?1.21';

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