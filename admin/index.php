<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>Bavi 運営側管理ページ | Bavi</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/reset.css?1648760965" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/style.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/page.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/detail.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/form.css?1648760966" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/customer/main.js?1648761028"></script>
</head>

<body id="spot">
    <!--header-->
    <header>
        <div id="spMainBtn">
            <i class="fas fa-th sp"></i>
        </div>
        <div id="logo_sec">
            <div id="logo"><a href="/customer"><img src="/assets/img/customer/logo.png"></a></div>
            <h1>運営側管理ページ</h1>
        </div>
        <div class="nav">
            <div class="close sp"><i class="fas fa-times"></i></i></div>
            <div class="guestInfomation">
                <dl>
                    <dt></dt>
                    <dd><a href="/customer/info/edit" class="under-line">オーナー：ゼネラルパーソンカンパニー株式会社</a></dd>
                    <dd><a href="/customer" class="btn type04 change_shop">登録店舗一覧</a></dd>
                </dl>
            </div>
            <ul class="mainBtn detail_link_sec">
                <li class="sub_nav"><a>案件情報</a>
                    <ul style="display: none;">
                        <li><a href="/customer/order/">BBQ会場 案件一覧</a></li>
                        <li><a href="/customer/order/create">BBQ会場 案件登録</a></li>
                    </ul>
                </li>
                <li><a href="/customer/contacts/">問合せ一覧</a></li>
                <li><a href="/customer/info/edit"><i class="fas fa-id-card"></i>オーナー情報</a></li>
                <li><a href="mailto:info@bavi.jp"><i class="fas fa-envelope"></i>お問合せ</a></li>
            </ul>
            <ul class="mainBtn">
                <li><a href="/customer/admin">管理画面に戻る</a></li>
            </ul>
            <ul class="sns flex">
                <li><a href="https://www.instagram.com/bavi_bbq/" target="_blacnk"><img
                            src="/assets/img/customer/icon_instagram.png"></a></li>
                <li><a href="https://line.me/ti/p/%40637eulru" target="_blacnk"><img
                            src="/assets/img/customer/icon_line.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCMA8rsf6gPte0ZDpY62A8Pg" target="_blank"><img
                            src="/assets/img/customer/icon_youtube.png"></a></li>
            </ul>
        </div>
    </header>
    <!--header END-->
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/bootstrap.css?1616644533" />
    <script type="text/javascript" src="https://bavi.jp/assets/js/bootstrap.js?1616644536"></script>
    <style>
        /*************************/
        /* 20240313追加 */
        /*************************/
        .icon {
            border-radius: 4px;
            font-size: 11px;
        }

        tr.payment_complete td {
            background-color: #f9fcee;
        }

        .icon.payment_unpaid {
            background-color: #ccc;
        }

        .icon.payment_complete {
            background-color: #cf2c57;
        }

        /*************************/
        /* 追加 */
        /*************************/
        body#spot {
            background-image: none;
            background-color: white;
        }

        #management_page {
            font-size: 13px;
        }

        /*search_sec*/
        #search_sec {
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 15px;
        }

        .sort_btn {
            cursor: pointer;
        }

        #search_sec h2 {
            font-weight: bold;
            font-size: 14px;
            margin: 0 0 10px 0;
        }

        #search_sec th {
            width: 10%;
        }

        /*member_sec*/
        #member_sec .table_style {
            border-bottom: 1px solid #999;
        }

        #member_sec .main_info td {
            border-bottom: none;
            position: relative;
        }

        #member_sec .main_info td {
            border-top: 1px solid #266698;
        }

        #member_sec .user_contact>td {
            border-bottom: none;
            border-top: 1px dashed #999;
        }

        .btn_sec {
            padding: 10px 0;
        }

        .btn_sec button.btn_type02 {
            background: #ccc;
            width: 200px;
            padding: 5px;
            color: #fff;
            border-radius: 5px;
            margin: 10px 5px;
        }

        .btn_sec button.btn_type02.detail {
            background: #266698;
        }

        .btn_sec button.btn_type02.delete {
            background: #ad0202;
        }

        /*guest_sec*/
        .guest_sec .table_style th {
            width: 10%;
        }

        .guest_sec .table_style td {
            text-align: left;
        }

        .flex {
            display: flex;
            justify-content: center;
        }

        .flex>div {
            margin: 0 10px;
        }

        .ttl h1 {
            font-size: 18px;
            color: #fff;
            background: #266698;
            font-weight: bold;
            padding: 10px 10px;
            margin-bottom: 10px;
        }

        .ttl {
            background-color: transparent;
            position: relative;
        }

        .ttl .back {
            display: block;
            position: absolute;
            right: 20px;
            top: 8px;
            background-color: #fff;
            border-radius: 3px;
            padding: 2px 30px;
        }

        h2.sub_ttl {
            font-size: 16px;
            border-bottom: 1px solid #266698;
            color: #266698;
            font-weight: bold;
            padding: 10px 10px;
            margin-bottom: 20px;
        }

        .contents {
            padding-bottom: 100px;
        }

        button,
        input[type="submit"],
        input[type="button"] {
            background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
            padding: 0;
            appearance: none;
        }

        .sec {
            padding: 10px 0;
            margin: 20px 0;
        }

        .icon {
            display: block;
            padding: 2px;
            color: #fff;
            font-size: 13px;
        }

        .icon.decision {
            background: #e4348f;
        }

        .icon.negotiation {
            background: #58a34c;
        }

        .icon.cancel {
            background: #32658f;
        }

        .icon.dengon {
            animation: flash 1.5s linear infinite;
            background: #ee0404;
            font-size: 10px;
            white-space: nowrap;
            position: absolute;
            top: 10px;
            right: 0;
            left: 0;
            padding: 0 3px;
            border-radius: 3px;
            color: yellow;
        }

        @keyframes flash {

            20%,
            80% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .table_style {
            width: 100%;
            table-layout: fixed;
        }

        .table_style th,
        .table_style td {
            border: 1px solid #999;
            text-align: center;
            padding: 10px 10px;
        }

        .table_style th {
            background: #fafafa;
            font-weight: bold;
        }

        .table_style a {
            text-decoration: underline;
        }

        .btn_type {
            background: #266698;
            color: #fff;
            width: 100%;
            padding: 2px;
            border-radius: 3px;
            border-bottom: 2px solid #163962;
        }

        .btn_type.mail {
            background: #ec7411;
            border-bottom: 2px solid #b4560a;
        }

        .btn_type.back {
            display: block;
            background: #f1f1f1;
            border-bottom: 2px solid #555;
            width: 300px;
            margin: 0 auto;
            color: #000;
            border-radius: 5px;
            padding: 5px 4px;
        }

        .table_style .w5 {
            width: 5%;
        }

        .table_style .w10 {
            width: 10%;
        }

        .table_style .w20 {
            width: 20%;
        }

        .table_style .w30 {
            width: 30%;
        }

        .table_style .w40 {
            width: 40%;
        }

        .table_style .w50 {
            width: 50%;
        }

        .table_style .w60 {
            width: 60%;
        }

        .table_style .w70 {
            width: 70%;
        }

        .table_style .w80 {
            width: 80%;
        }

        .form input[type="text"],
        .form input[type="number"],
        .form input[type="date"],
        .form input[type="tel"],
        .form input[type="email"],
        .form textarea {
            background: #f7fafd;
            padding: 5px;
            width: 100%;
            outline: none;
            appearance: none;
            border: 1px solid #999;
            border-radius: 3px;
        }

        .form select {
            padding: 3px;
            background: #f7fafd;
            border: 1px solid #999;
            width: 100%;
        }

        .form input[type="submit"] {
            background: #266698;
            border-bottom: 2px solid #163962;
            padding: 5px 10px;
            margin: 10px auto;
            width: 300px;
            color: #fff;
            border-radius: 5px;
            display: block;
        }

        .form input[type="radio"]+label {
            font-weight: normal;
            vertical-align: middle;
            padding-left: 2px;
        }

        .pager_style ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .pager_style ul li a {
            border-radius: 3px;
            padding: 5px 10px;
            color: #000;
            display: block;
            border: 1px solid #999;
            margin: 0 5px;
        }

        .pager_style ul li a.current {
            background: #266698;
            color: #fff;
            pointer-events: none;
        }

        .pager_style ul li a:hover {
            background: #266698;
            color: #fff;
        }

        /* add 20240424 */
        .btn-group {
            min-width: 100%;
        }

        .btn.btn-default.dropdown-toggle {
            margin-top: 5px;
            width: 100%;
            font-size: 12px;
            padding: 5px;
            white-space: unset;
            line-height: 1.2;
        }

        .dropdown-menu {
            min-width: auto;
            transform: translateX(-15%);
        }
    </style>
    <section class="contents">
        <div id="management_page" class="col-md-10 col-md-offset-2 main" style="margin-bottom: 100px;">
            <div class="ttl">
                <h1>案件管理一覧</h1>
            </div>
            <div id="search_sec" class="sec">
                <h2 style="text-align: center;">案件検索</h2>
                <form class="form" method="get">
                    <table class="table_style">
                        <tr>
                            <th>利用NO</th>
                            <td><input type="text" name="id" value=""></td>
                            <th>ステータス</th>
                            <td>
                                <select name="status">
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
                        <!--
                    <tr>
                        <th>CV種別</th>
                        <td></td>
                    </tr>
                    -->
                        <tr>
                            <th>
                                フリー検索<br>
                                (名前/電話番号/メールアドレス)
                            </th>
                            <td><input type="text" placeholder="フリー検索" value=""></td>
                            <!--
                        <th>会員</th>
                        <td>
                            <select type="checkbox">
                                <option>全て</option>
                                <option>会員</option>
                                <option>非会員</option>
                            </select>
                        </td>
                        -->
                        </tr>
                        <tr>
                            <th>会場</th>
                            <td>
                                <select name="spot_id">
                                    <option value="241">彩湖・道満グリーンパーク</option>
                                    <option value="409">都立野川公園バーベキュー広場</option>
                                    <option value="1358">秋川橋河川公園バーベキューランド</option>
                                    <option value="1420">赤塚公園バーベキュー広場</option>
                                    <option value="1423">妙典河川敷・自由広場</option>
                                    <option value="1464">篠崎公園</option>
                                    <option value="1465">小金井公園バーベキュー場</option>
                                    <option value="1474">新左近川親水公園</option>
                                    <option value="1476">大泉さくら運動公園</option>
                                    <option value="1477">郷土の森公園バーベキュー場</option>
                                    <option value="1482">府中の森公園バーベキュー広場</option>
                                    <option value="1515">FIRE&times;FARM菖蒲　ファイヤーファームBBQ場</option>
                                    <option value="1517">六本木ガーデン（屋上BBQ）</option>
                                    <option value="1519">富士スピードウェイ&times;BBQ FIA WEC 富士6時間耐久レース</option>
                                </select>
                            </td>
                            <!--
                        <th>人数</th>
                        <td>
                            <div style="display: flex; justify-content: space-between; align-items: center; ">
                                <input type="number" placeholder="最大人数"><span style="padding: 0 10px;">〜</span><input type="number" placeholder="最大人数">
                            </div>
                        </td>
                        -->
                            <th>利用日</th>
                            <td>
                                <div style="display: flex; justify-content: space-between; align-items: center; ">
                                    <input type="date" name="from" value=""><span
                                        style="padding: 0 10px;">〜</span><input type="date" name="to" value="">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <!--
                        <th>受付日</th>
                        <td>
                            <div style="display: flex; justify-content: space-between; align-items: center; ">
                                <input type="date"><span style="padding: 0 10px;">〜</span><input type="date">
                            </div>
                        </td>
                        <th>利用日</th>
                        <td>
                            <div style="display: flex; justify-content: space-between; align-items: center; ">
                                <input type="date" name="from" value=""><span style="padding: 0 10px;">〜</span><input type="date" name="to" value="">
                            </div>
                        </td>
                        -->
                        </tr>
                        <tr>
                            <th>表示順</th>
                            <td>
                                <select name="order_by">
                                    <option value="">指定なし(受付日降順)</option>
                                    <option value="use_date">利用日(降順)</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="検索">
                    <button type="button" class="btn btn-default" id="reset-btn"> リセット </button>
                </form>
                <!--form-->
            </div>
            <div id="member_sec" class="sec">
                <div class="col-md-12 number-sales text-center">
                    <label>件数：716件 / 売上：7,969,802円</label>
                </div>
                <table class="table_style" id="order_list">
                    <thead>
                        <tr class="head">
                            <th class="w5">選択</th>
                            <th class="w5"><span class="sort_btn" data-sort="1">利用NO</span></th>
                            <th class="w5">既読・未読</th>
                            <th><span class="sort_btn" data-sort="1">受付日</span></th>
                            <th class="form">ステータス
                                <select name="list_status select_stetas" class="form-control" id="list_status" style="margin-top: 4px;">
                                    <option value="">指定なし</option>
                                    <option value="-1">キャンセル</option>
                                    <option value="0">案件</option>
                                    <option value="1">保留</option>
                                    <option value="10">商談中</option>
                                    <option value="90">決定</option>
                                    <option value="99">終了</option>
                                </select>
                            </th>
                            <th class="form">支払い状態
                                <select name="list_pay_status select_pay_status" class="form-control" id="list_pay_status" style="margin-top: 4px;">
                                    <option value="">指定なし</option>
                                    <optgroup label="クレジットカード">
                                        <option value="AUTH">AUTH:仮売上</option>
                                        <option value="SALES">SALES:実売上</option>
                                        <option value="CAPTURE">CAPTURE:即時売上</option>
                                        <option value="VOID">VOID:取消</option>
                                        <option value="-1">UNPROCESSED:未決済</option>
                                    </optgroup>
                                    <optgroup label="その他">
                                        <option value="0">未入金</option>
                                        <option value="1">入金済み</option>
                                    </optgroup>
                                </select>
                            </th>
                            <th><span class="sort_btn" data-sort="1">名前</span></th>
                            <th><span class="sort_btn" data-sort="1">利用日</span></th>
                            <th><span class="sort_btn" data-sort="1">利用時間</span></th>
                            <th><span class="sort_btn" data-sort="1">会場</span></th>
                            <th><span class="sort_btn" data-sort="1">プラン</span></th>
                            <th class="w5"><span class="sort_btn" data-sort="1">人数</span></th>
                            <th class="w5">金額</th>
                            <th>詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                            <td class="w5">
                                <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                                <input type="checkbox" name="order_id[]" value="1725" data-status="90" style="transform: scale(1.5);">
                            </td>
                            <td>1423-97</td>
                            <td>
                                <span class="icon facility">施設<br>未読</span>
                                <span class="icon chat">チャット<br>未読</span>
                            </td>
                            <td>2025-04-17 10:32:16</td>
                           

                            <td>
                                <span class="icon decision">決定</span>
                            </td>
                            <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                            <td>藤永由紀</td>
                            <td>2025-05-04</td>
                            <td>11:00〜15:00</td>
                            <td>妙典河川敷・自由広場</td>
                            <td>
                                5人用器材セット(設置付) </td>
                            <td>5</td>
                            <td>13,800</td>
                            <td>
                                <a href="https://bavi.jp/customer/spots/order/edit/1725">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1725">チャット</a> | <a onclick="return confirm(&quot;藤永由紀 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1725">削除</a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation" data-id="1725" data-status="-1" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/-1">キャンセル</a></li>
                                        <li role="presentation" data-id="1725" data-status="0" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/0">案件</a></li>
                                        <li role="presentation" data-id="1725" data-status="1" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/1">保留</a></li>
                                        <li role="presentation" data-id="1725" data-status="10" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/10">商談中</a></li>
                                        <li role="presentation" class="active disabled" data-id="1725" data-status="90" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/90">決定</a></li>
                                        <li role="presentation" data-id="1725" data-status="99" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1725/99">終了</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                            <td class="w5">
                                <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                                <input type="checkbox" name="order_id[]" value="1719" data-status="90" style="transform: scale(1.5);">
                            </td>
                            <td>1358-234</td>
                            <td>2025-04-16 19:17:22</td>
                            <td>
                                <span class="icon decision">決定</span>
                            </td>
                            <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                            <td>佐々木啓吾</td>
                            <td>2025-05-06</td>
                            <td>11:00〜15:00 </td>
                            <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                            <td>
                                5人用器材セット(設置付) </td>
                            <td>6</td>
                            <td>22,200</td>
                            <td>
                                <a href="https://bavi.jp/customer/spots/order/edit/1719">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1719">チャット</a> | <a onclick="return confirm(&quot;佐々木啓吾 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1719">削除</a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation" data-id="1719" data-status="-1" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/-1">キャンセル</a></li>
                                        <li role="presentation" data-id="1719" data-status="0" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/0">案件</a></li>
                                        <li role="presentation" data-id="1719" data-status="1" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/1">保留</a></li>
                                        <li role="presentation" data-id="1719" data-status="10" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/10">商談中</a></li>
                                        <li role="presentation" class="active disabled" data-id="1719" data-status="90" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/90">決定</a></li>
                                        <li role="presentation" data-id="1719" data-status="99" data-price="22200" data-use_date="2025-05-06" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1719/99">終了</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                            <td class="w5">
                                <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                                <input type="checkbox" name="order_id[]" value="1718" data-status="90" style="transform: scale(1.5);">
                            </td>
                            <td>1423-96</td>
                            <td>2025-04-16 18:24:07</td>
                            <td>
                                <span class="icon decision">決定</span>
                            </td>
                            <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                            <td>國頭　友紀</td>
                            <td>2025-04-21</td>
                            <td>11:30〜15:30</td>
                            <td>妙典河川敷・自由広場</td>
                            <td>
                                10人用器材セット(設置付) </td>
                            <td>16</td>
                            <td>49,400</td>
                            <td>
                                <a href="https://bavi.jp/customer/spots/order/edit/1718">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1718">チャット</a> | <a onclick="return confirm(&quot;國頭　友紀 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1718">削除</a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation" data-id="1718" data-status="-1" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/-1">キャンセル</a></li>
                                        <li role="presentation" data-id="1718" data-status="0" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/0">案件</a></li>
                                        <li role="presentation" data-id="1718" data-status="1" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/1">保留</a></li>
                                        <li role="presentation" data-id="1718" data-status="10" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/10">商談中</a></li>
                                        <li role="presentation" class="active disabled" data-id="1718" data-status="90" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/90">決定</a></li>
                                        <li role="presentation" data-id="1718" data-status="99" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/99">終了</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                            <td class="w5">
                                <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                                <input type="checkbox" name="order_id[]" value="1718" data-status="90" style="transform: scale(1.5);">
                            </td>
                            <td>1423-96</td>
                            <td>2025-04-16 18:24:07</td>
                            <td>
                                <span class="icon decision">決定</span>
                            </td>
                            <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                            <td>國頭　友紀</td>
                            <td>2025-04-21</td>
                            <td>11:30〜15:30</td>
                            <td>妙典河川敷・自由広場</td>
                            <td>
                                10人用器材セット(設置付) </td>
                            <td>16</td>
                            <td>49,400</td>
                            <td>
                                <a href="https://bavi.jp/customer/spots/order/edit/1718">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1718">チャット</a> | <a onclick="return confirm(&quot;國頭　友紀 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1718">削除</a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation" data-id="1718" data-status="-1" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/-1">キャンセル</a></li>
                                        <li role="presentation" data-id="1718" data-status="0" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/0">案件</a></li>
                                        <li role="presentation" data-id="1718" data-status="1" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/1">保留</a></li>
                                        <li role="presentation" data-id="1718" data-status="10" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/10">商談中</a></li>
                                        <li role="presentation" class="active disabled" data-id="1718" data-status="90" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/90">決定</a></li>
                                        <li role="presentation" data-id="1718" data-status="99" data-price="49400" data-use_date="2025-04-21" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1718/99">終了</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>

            <div>
                <p style="text-align:center; ">チェック案件にメール一括送信する</p>
                <a href="Broadcast.php" class="btn" id="broadcast_btn"
                    style="color: #fff; display: block; font-weight: bold; padding: 10px 30px; margin: 0 auto; width: 300px;">メール一斉送信</a>

            </div>
        </div>
        <!--management_page-->
    </section>
    <style>
        .is-hide {
            display: none;
        }
    </style>
    <script>
        $(function() {

            $('#broadcast_btn').on('click', function() {
                let leng = $('input:checkbox[name=checkbox]:checked').length;
                if (leng == 0) {
                    alert("案件がチェックされていません。");
                    return false;
                }
            });


            // 削除ボタンクリック
            $('.delete').on('click', function() {
                let link = $(this).attr('href');
                let obj = $(this).closest('.main_info');
                let name = obj.find('td').eq(4).text() + "様";
                if (confirm(name + "を削除します。宜しいですか？")) {
                    location.href = link;
                    obj.remove();
                }
            });

            // 絞り込みを変更した時
            $('#list_status').on('change', function() {
                // 非表示状態を解除
                $('#order_list > tbody > tr').removeClass('is-hide');
                // 値が空の場合はすべて表示
                if ($(this).val() === '') {
                    return;
                }
                // リスト内の各アイテムをチェック
                for (let i = 0; i < $('#order_list > tbody > tr').length; i++) {
                    // アイテムに設定している項目を取得
                    let tmp = $('#order_list > tbody > tr').eq(i).data('list_status');
                    // 絞り込み対象かどうかを調べる
                    if (tmp.toString() !== $(this).val().toString()) {
                        console.log(tmp + "/" + $(this).val());
                        $('#order_list > tbody > tr').eq(i).addClass('is-hide');
                    }
                }
            });
        });
    </script>
    <!--footer-->
    <footer>
        <dl>
            <dt>運営会社: ゼネラルパーソンカンパニー株式会社</dt>
            <dd>〒120-0001東京都足立区大谷田3丁目21番6号
            <dd>
            <dd>TEL: 03-5856-2030</dd>
            <dd>E-mail: info@bavi.jp</dd>
        </dl>
        <p id="copyright">© Copyright Bavi all right reserved.</p>
    </footer>

    <div id="overlay"></div>
    <!--footer END-->
    <div id="footer_btn">
        <span></span>
    </div>
</body>

</html>