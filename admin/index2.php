<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>案件管理|Bavi | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
    <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/admin_default.css?1595739458" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/admin/css/common.css?2.51">
    <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.21">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style>
    body {
        padding-top: 0;
    }
    </style>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

</head>

<body>
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
                <?php include __DIR__ . '/../admin/template/nav.php'; ?>
            </div>

            <section class="contents">

                <div id="management_page" class="col-md-10 col-md-offset-2 main">

                    <div class="ttl">
                        <h1>案件管理一覧</h1>
                        <div class="back"><a href="https://bavi.jp/admin/">管理TOPページへ戻る</a></div>
                    </div>

                    <div id="search_sec" class="sec">

                        <h2 style="text-align: center;">案件検索</h1>

                            <form class="form">
                                <table class="table_style">
                                    <tr>
                                        <th>利用NO</th>
                                        <td><input type="text"></td>
                                        <th>ステータス</th>
                                        <td>
                                            <select name="list_status select_stetas" class="" id="list_status"
                                                style="margin-top: 4px;">
                                                <option value="">指定なし</option>
                                                <option value="-1">キャンセル</option>
                                                <option value="0">案件</option>
                                                <option value="1">保留</option>
                                                <option value="10">商談中</option>
                                                <option value="90">決定</option>
                                                <option value="99">終了</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>フリー検索</th>
                                        <td><input type="text" placeholder="名前/電話番号/メールアドレス"></td>
                                        <th>会員</th>
                                        <td>
                                            <select>
                                                <option>全て</option>
                                                <option>会員</option>
                                                <option>非会員</option>
                                            </select>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>会場</th>
                                        <td>
                                            <select name="spot_id">
                                                <option value="">指定なし</option>
                                                <option value="1126">Canterano</option>
                                            </select>
                                        </td>

                                        <th>人数</th>
                                        <td>
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center; ">
                                                <input type="number" placeholder="最大人数"><span
                                                    style="padding: 0 10px;">〜</span><input type="number"
                                                    placeholder="最大人数">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>受付日</th>
                                        <td>
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center; ">
                                                <input type="date"><span style="padding: 0 10px;">〜</span><input
                                                    type="date">
                                            </div>
                                        </td>
                                        <th>利用日</th>
                                        <td>
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center; ">
                                                <input type="date"><span style="padding: 0 10px;">〜</span><input
                                                    type="date">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <input type="submit" value="検索">
                                <button type="button" class="btn btn-default" id="reset-btn"> リセット </button>
                            </form>
                            <!--form-->
                    </div>


                    <div id="member_sec" class="sec">

                        <div class="price_order_total">
                            <dl>
                                <dt>合計金額</dt>
                                <dd>160,800<span>円</span></dd>
                            </dl>
                            <dl>
                                <dt>件数</dt>
                                <dd>850<span>件</span></dd>
                            </dl>
                        </div>


                        <table class="table_style">

                            <tr class="head">

                                <th class="w10">
                                    <span id="all_check_btn">全て<br>チェック</span>
                                </th>
                                <th class="w5"><span class="sort_btn" data-sort="1">利用NO▼</span></th>
                                <th><span class="sort_btn" data-sort="1">受付日▼</span></th>
                                <th class="w10" class="form">ステータス
                                    <select class="select_stetas" style="margin-top: 4px;">
                                        <option value="">指定なし</option>
                                        <option value="-1">キャンセル</option>
                                        <option value="0">案件</option>
                                        <option value="1">保留</option>
                                        <option value="10">商談中</option>
                                        <option value="90">決定</option>
                                        <option value="99">終了</option>
                                    </select>
                                </th>
                                <th><span class="sort_btn" data-sort="1">名前▼</span></th>
                                <th><span class="sort_btn" data-sort="1">利用日▼</span></th>
                                <th><span class="sort_btn" data-sort="1">利用時間▼</span></th>
                                <th><span data-sort="1">会場</span></th>
                                <th><span class="sort_btn" data-sort="1">プラン▼</span></th>
                                <th><span class="sort_btn" data-sort="1">人数▼</span></th>
                                <th><span class="sort_btn" data-sort="1">金額▼</span></th>
                                <th class="w5">詳細</th>
                            </tr>
                        </table>

                        <!--repeat start-->
                        <table class="table_style">
                            <tr class="main_info">
                                <td class="w10">
                                    <div class="icon dengon">伝言あり</div>
                                    <input type="checkbox">
                                </td>
                                <td class="w5"><a href="/admin/detail.php">A001</a></td>
                                <td>2022-4-12-00:00</td>
                                <td class="w10"><span class="icon decision">決定</span></td>
                                <td>鈴木 太郎</td>
                                <td>2022年5月1日</td>
                                <td>10:00〜15:00</td>
                                <td>うふた浜</td>
                                <td>A.区画のみ</td>
                                <td>20人</td>
                                <td>145,000円</td>
                                <td class="w5">
                                    <button class="btn_type" onclick="location.href='/admin/detail.php'">詳細</button>
                                </td>
                            </tr>
                        </table>
                        <!--repeat END-->

                        <!--repeat start-->
                        <table class="table_style">
                            <tr class="main_info">
                                <td class="w10"><input type="checkbox"></td>
                                <td class="w5"><a href="/admin/detail.php">A002</a></td>
                                <td>2022-4-12-00:00</td>
                                <td class="w10"><span class="icon negotiation">商談中</span></td>
                                <td>鈴木 太郎</td>
                                <td>2022年5月1日</td>
                                <td>10:00〜15:00</td>
                                <td>fire farm</td>
                                <td>B.区画＋食材</td>
                                <td>50人</td>
                                <td>5,000円</td>
                                <td class="w5">
                                    <button class="btn_type" onclick="location.href='/admin/detail.php'">詳細</button>
                                </td>
                            </tr>
                        </table>
                        <!--repeat END-->

                        <!--repeat start-->
                        <table class="table_style">
                            <tr class="main_info">
                                <td class="w10">
                                    <div class="icon dengon">伝言あり</div>
                                    <input type="checkbox">
                                </td>
                                <td class="w5"><a href="/admin/detail.php">A003</a></td>
                                <td>2022-4-12-00:00</td>
                                <td class="w10"><span class="icon other">終了</span></td>
                                <td>鈴木 太郎</td>
                                <td>2022年5月1日</td>
                                <td>10:00〜15:00</td>
                                <td>しい茸ランド</td>
                                <td>C.区画＋食材＋ドリンク</td>
                                <td>5人</td>
                                <td>10,000円</td>
                                <td class="w5">
                                    <button class="btn_type" onclick="location.href='/admin/detail.php'">詳細</button>
                                </td>
                            </tr>

                        </table>
                        <!--repeat END-->

                        <!--repeat start-->
                        <table class="table_style">
                            <tr class="main_info">
                                <td class="w10">
                                    <div class="icon dengon">伝言あり</div>
                                    <input type="checkbox">
                                </td>
                                <td class="w5"><a href="/admin/detail.php">A003</a></td>
                                <td>2022-4-12-00:00</td>
                                <td class="w10"><span class="icon cancel">キャンセル</span></td>
                                <td>鈴木 太郎</td>
                                <td>2022年5月1日</td>
                                <td>10:00〜15:00</td>
                                <td>しい茸ランド</td>
                                <td>C.区画＋食材＋ドリンク</td>
                                <td>5人</td>
                                <td>10,000円</td>
                                <td class="w5">
                                    <button class="btn_type" onclick="location.href='/admin/detail.php'">詳細</button>
                                </td>
                            </tr>

                        </table>
                        <!--repeat END-->

                        <div class="mail_send_btn">

                            <button type="button" class="btn btn-mail"> 一斉メール送信 </button>
                            <button type="button" class="btn btn-chat"> 一斉チャット送信 </button>

                        </div>

                    </div>
                    <!--member sec-->

                    <div class="pager_style">
                        <ul>
                            <li><a href="#" class="current">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div>
                <!--management_page-->

            </section>

        </div>
        <!--row-->



    </div>
    <script type="text/javascript" src="http://gpc-test.work/assets/js/bootstrap.js?1595739458"></script>

    <script>
    $(function() {

        $('.select_stetas').on('change', function() {
            alert("表示変更");
        });

        let checkFlag = false;
        $('#all_check_btn').on('click', function() {
            checkFlag = !checkFlag;
            $('.table_style').find('input[type=checkbox]').prop('checked', checkFlag);
        });

        $('.sort_btn').on('click', function() {
            alert("ソート実装お願いします。");
        });

        $('.delete').on('click', function() {
            confirm("本当に削除して宜しいですか？");
        });

        $(".t_tip").tooltip();

        $('.nav-sub').hide();


        $('.menu-toggle').click(function() {
            $(this).parent().find('.nav-sub').toggle(500);
        });

        var active_menu = $('li.active').parent();
        if (active_menu.hasClass('nav-sub')) {
            active_menu.show();
        }
    });
    </script>
</body>

</html>