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
        white-space:unset;
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
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1725">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1725">チャット</a> | <a onclick="return confirm(&quot;藤永由紀 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1725">削除</a>                                <div class="btn-group">
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
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>22,200</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1719">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1719">チャット</a> | <a onclick="return confirm(&quot;佐々木啓吾 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1719">削除</a>                                <div class="btn-group">
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
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>16</td>
                        <td>49,400</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1718">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1718">チャット</a> | <a onclick="return confirm(&quot;國頭　友紀 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1718">削除</a>                                <div class="btn-group">
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
                            <input type="checkbox" name="order_id[]" value="1717" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-95</td>
                        <td>2025-04-16 18:16:00</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>平山麻美</td>
                        <td>2025-05-04</td>
                        <td>10:00～14:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>16</td>
                        <td>19,350</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1717">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1717">チャット</a> | <a onclick="return confirm(&quot;平山麻美 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1717">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1717" data-status="-1" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1717" data-status="0" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1717" data-status="1" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1717" data-status="10" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1717" data-status="90" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1717" data-status="99" data-price="19350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1717/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1716" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-233</td>
                        <td>2025-04-16 15:54:46</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>土岐虎太郎</td>
                        <td>2025-04-29</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>9</td>
                        <td>37,900</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1716">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1716">チャット</a> | <a onclick="return confirm(&quot;土岐虎太郎 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1716">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1716" data-status="-1" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1716" data-status="0" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1716" data-status="1" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1716" data-status="10" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1716" data-status="90" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1716" data-status="99" data-price="37900" data-use_date="2025-04-29" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1716/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1715" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-232</td>
                        <td>2025-04-16 13:46:52</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>濵中琥太郎</td>
                        <td>2025-05-03</td>
                        <td>11:30～15:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>9</td>
                        <td>48,950</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1715">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1715">チャット</a> | <a onclick="return confirm(&quot;濵中琥太郎 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1715">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1715" data-status="-1" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1715" data-status="0" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1715" data-status="1" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1715" data-status="10" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1715" data-status="90" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1715" data-status="99" data-price="48950" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1715/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1714" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-231</td>
                        <td>2025-04-16 13:22:15</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>谷間 綸音</td>
                        <td>2025-05-24</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>33,900</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1714">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1714">チャット</a> | <a onclick="return confirm(&quot;谷間 綸音 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1714">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1714" data-status="-1" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1714" data-status="0" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1714" data-status="1" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1714" data-status="10" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1714" data-status="90" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1714" data-status="99" data-price="33900" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1714/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="99" data-list_pay_status="SALES" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1713" data-status="99" style="transform: scale(1.5);">
                        </td>
                        <td>1655-7</td>
                        <td>2025-04-16 11:16:04</td>
                        <td>
                            <span class="icon end">終了</span>
                        </td>
                                                <td><span class="icon pay_status_SALES">SALES:実売上</span></td>
                                                <td>孟　兆東</td>
                        <td>2025-04-16</td>
                        <td></td>
                        <td>江戸餅つき屋</td>
                        <td>
                                                    </td>
                        <td>0</td>
                        <td>25,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1713">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1713">チャット</a> | <a onclick="return confirm(&quot;孟　兆東 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1713">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1713" data-status="-1" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1713" data-status="0" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1713" data-status="1" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1713" data-status="10" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1713" data-status="90" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/90">決定</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1713" data-status="99" data-price="25000" data-use_date="2025-04-16" data-spot_order_payment_method_id="293"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1713/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1712" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-94</td>
                        <td>2025-04-16 02:20:14</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>吉野</td>
                        <td>2025-04-27</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>7</td>
                        <td>14,300</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1712">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1712">チャット</a> | <a onclick="return confirm(&quot;吉野 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1712">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1712" data-status="-1" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1712" data-status="0" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1712" data-status="1" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1712" data-status="10" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1712" data-status="90" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1712" data-status="99" data-price="14300" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1712/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1711" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-93</td>
                        <td>2025-04-15 20:52:37</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>宮崎裕貴</td>
                        <td>2025-05-05</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>15,150</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1711">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1711">チャット</a> | <a onclick="return confirm(&quot;宮崎裕貴 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1711">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1711" data-status="-1" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1711" data-status="0" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1711" data-status="1" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1711" data-status="10" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1711" data-status="90" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1711" data-status="99" data-price="15150" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1711/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1710" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-92</td>
                        <td>2025-04-15 20:47:27</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>小圷俊太郎</td>
                        <td>2025-05-06</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1710">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1710">チャット</a> | <a onclick="return confirm(&quot;小圷俊太郎 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1710">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1710" data-status="-1" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1710" data-status="0" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1710" data-status="1" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1710" data-status="10" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1710" data-status="90" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1710" data-status="99" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1710/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1709" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-230</td>
                        <td>2025-04-15 16:50:17</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>小坂涼子</td>
                        <td>2025-05-03</td>
                        <td>11:30～15:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>9</td>
                        <td>42,400</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1709">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1709">チャット</a> | <a onclick="return confirm(&quot;小坂涼子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1709">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1709" data-status="-1" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1709" data-status="0" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1709" data-status="1" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1709" data-status="10" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1709" data-status="90" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1709" data-status="99" data-price="42400" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1709/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1707" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-229</td>
                        <td>2025-04-15 12:12:17</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>石井　心平</td>
                        <td>2025-05-03</td>
                        <td>9:30〜13:30</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>23,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1707">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1707">チャット</a> | <a onclick="return confirm(&quot;石井　心平 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1707">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1707" data-status="-1" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1707" data-status="0" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1707" data-status="1" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1707" data-status="10" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1707" data-status="90" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1707" data-status="99" data-price="23000" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1707/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1705" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-228</td>
                        <td>2025-04-15 09:58:49</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>谷間 綸音</td>
                        <td>2025-05-17</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>31,700</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1705">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1705">チャット</a> | <a onclick="return confirm(&quot;谷間 綸音 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1705">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1705" data-status="-1" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1705" data-status="0" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1705" data-status="1" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1705" data-status="10" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1705" data-status="90" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1705" data-status="99" data-price="31700" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1705/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1704" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-91</td>
                        <td>2025-04-14 22:12:57</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>青木陸哉</td>
                        <td>2025-05-05</td>
                        <td>11:00〜15:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>24,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1704">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1704">チャット</a> | <a onclick="return confirm(&quot;青木陸哉 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1704">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1704" data-status="-1" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1704" data-status="0" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1704" data-status="1" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1704" data-status="10" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1704" data-status="90" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1704" data-status="99" data-price="24000" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1704/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1703" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>241-39</td>
                        <td>2025-04-14 20:25:17</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>大村悠</td>
                        <td>2025-05-04</td>
                        <td>10:30〜14:30</td>
                        <td>彩湖・道満グリーンパーク</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>16</td>
                        <td>90,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1703">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1703">チャット</a> | <a onclick="return confirm(&quot;大村悠 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1703">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1703" data-status="-1" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1703" data-status="0" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1703" data-status="1" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1703" data-status="10" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1703" data-status="90" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1703" data-status="99" data-price="90800" data-use_date="2025-05-04" data-spot_order_payment_method_id="254"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1703/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1699" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-90</td>
                        <td>2025-04-14 15:17:26</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>原田　崚克</td>
                        <td>2025-05-24</td>
                        <td>11:00〜15:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>24,900</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1699">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1699">チャット</a> | <a onclick="return confirm(&quot;原田　崚克 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1699">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1699" data-status="-1" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1699" data-status="0" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1699" data-status="1" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1699" data-status="10" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1699" data-status="90" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1699" data-status="99" data-price="24900" data-use_date="2025-05-24" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1699/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1697" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1423-89</td>
                        <td>2025-04-13 22:33:25</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>坂井　勇人</td>
                        <td>2025-05-03</td>
                        <td>11:00〜15:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1697">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1697">チャット</a> | <a onclick="return confirm(&quot;坂井　勇人 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1697">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1697" data-status="-1" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1697" data-status="0" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1697" data-status="1" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1697" data-status="10" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1697" data-status="90" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1697" data-status="99" data-price="13800" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1697/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1696" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1423-88</td>
                        <td>2025-04-13 21:00:19</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>花形由莉</td>
                        <td>2025-05-03</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>8</td>
                        <td>19,050</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1696">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1696">チャット</a> | <a onclick="return confirm(&quot;花形由莉 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1696">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1696" data-status="-1" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1696" data-status="0" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1696" data-status="1" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1696" data-status="10" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1696" data-status="90" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1696" data-status="99" data-price="19050" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1696/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1695" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-87</td>
                        <td>2025-04-13 19:15:59</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>須田萌斗</td>
                        <td>2025-05-04</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>24,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1695">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1695">チャット</a> | <a onclick="return confirm(&quot;須田萌斗 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1695">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1695" data-status="-1" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1695" data-status="0" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1695" data-status="1" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1695" data-status="10" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1695" data-status="90" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1695" data-status="99" data-price="24000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1695/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1694" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-86</td>
                        <td>2025-04-13 16:28:05</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>川崎和正</td>
                        <td>2025-05-17</td>
                        <td>10:00～14:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>7</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1694">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1694">チャット</a> | <a onclick="return confirm(&quot;川崎和正 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1694">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1694" data-status="-1" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1694" data-status="0" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1694" data-status="1" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1694" data-status="10" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1694" data-status="90" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1694" data-status="99" data-price="13800" data-use_date="2025-05-17" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1694/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1691" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-85</td>
                        <td>2025-04-12 17:20:32</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>荒巻 航平</td>
                        <td>2025-05-18</td>
                        <td>11:15〜15:15</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>24,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1691">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1691">チャット</a> | <a onclick="return confirm(&quot;荒巻 航平 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1691">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1691" data-status="-1" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1691" data-status="0" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1691" data-status="1" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1691" data-status="10" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1691" data-status="90" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1691" data-status="99" data-price="24000" data-use_date="2025-05-18" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1691/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1690" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-84</td>
                        <td>2025-04-12 13:34:37</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>熊谷晴香</td>
                        <td>2025-05-04</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>24,350</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1690">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1690">チャット</a> | <a onclick="return confirm(&quot;熊谷晴香 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1690">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1690" data-status="-1" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1690" data-status="0" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1690" data-status="1" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1690" data-status="10" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1690" data-status="90" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1690" data-status="99" data-price="24350" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1690/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1688" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-83</td>
                        <td>2025-04-11 16:41:33</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>金澤あすか</td>
                        <td>2025-04-29</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1688">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1688">チャット</a> | <a onclick="return confirm(&quot;金澤あすか 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1688">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1688" data-status="-1" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1688" data-status="0" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1688" data-status="1" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1688" data-status="10" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1688" data-status="90" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1688" data-status="99" data-price="13800" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1688/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1687" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-82</td>
                        <td>2025-04-11 13:51:57</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>阿久津 僚兵</td>
                        <td>2025-04-29</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>18</td>
                        <td>41,750</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1687">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1687">チャット</a> | <a onclick="return confirm(&quot;阿久津 僚兵 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1687">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1687" data-status="-1" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1687" data-status="0" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1687" data-status="1" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1687" data-status="10" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1687" data-status="90" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1687" data-status="99" data-price="41750" data-use_date="2025-04-29" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1687/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1684" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-227</td>
                        <td>2025-04-10 21:37:11</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>魚谷祥平</td>
                        <td>2025-05-05</td>
                        <td>10:00〜14:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>21,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1684">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1684">チャット</a> | <a onclick="return confirm(&quot;魚谷祥平 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1684">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1684" data-status="-1" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1684" data-status="0" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1684" data-status="1" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1684" data-status="10" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1684" data-status="90" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1684" data-status="99" data-price="21500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1684/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1681" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-226</td>
                        <td>2025-04-09 13:47:44</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>上原聖輝</td>
                        <td>2025-04-20</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>50</td>
                        <td>228,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1681">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1681">チャット</a> | <a onclick="return confirm(&quot;上原聖輝 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1681">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1681" data-status="-1" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1681" data-status="0" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1681" data-status="1" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1681" data-status="10" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1681" data-status="90" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1681" data-status="99" data-price="228500" data-use_date="2025-04-20" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1681/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1680" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-81</td>
                        <td>2025-04-09 13:24:27</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>清水俊翔</td>
                        <td>2025-05-06</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>5</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1680">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1680">チャット</a> | <a onclick="return confirm(&quot;清水俊翔 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1680">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1680" data-status="-1" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1680" data-status="0" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1680" data-status="1" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1680" data-status="10" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1680" data-status="90" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1680" data-status="99" data-price="13800" data-use_date="2025-05-06" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1680/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1679" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-80</td>
                        <td>2025-04-09 07:06:54</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>石亀宏賢</td>
                        <td>2025-05-05</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>40</td>
                        <td>92,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1679">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1679">チャット</a> | <a onclick="return confirm(&quot;石亀宏賢 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1679">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1679" data-status="-1" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1679" data-status="0" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1679" data-status="1" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1679" data-status="10" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1679" data-status="90" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1679" data-status="99" data-price="92800" data-use_date="2025-05-05" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1679/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1677" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-79</td>
                        <td>2025-04-08 18:46:12</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>秋澤正樹</td>
                        <td>2025-04-27</td>
                        <td>9:30～13:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>9</td>
                        <td>24,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1677">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1677">チャット</a> | <a onclick="return confirm(&quot;秋澤正樹 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1677">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1677" data-status="-1" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1677" data-status="0" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1677" data-status="1" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1677" data-status="10" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1677" data-status="90" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1677" data-status="99" data-price="24000" data-use_date="2025-04-27" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1677/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1676" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-225</td>
                        <td>2025-04-08 16:19:10</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>山下</td>
                        <td>2025-05-24</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>5</td>
                        <td>36,650</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1676">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1676">チャット</a> | <a onclick="return confirm(&quot;山下 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1676">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1676" data-status="-1" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1676" data-status="0" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1676" data-status="1" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1676" data-status="10" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1676" data-status="90" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1676" data-status="99" data-price="36650" data-use_date="2025-05-24" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1676/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1675" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-78</td>
                        <td>2025-04-07 20:48:14</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>堀川美香子</td>
                        <td>2025-05-31</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>27,150</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1675">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1675">チャット</a> | <a onclick="return confirm(&quot;堀川美香子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1675">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1675" data-status="-1" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1675" data-status="0" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1675" data-status="1" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1675" data-status="10" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1675" data-status="90" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1675" data-status="99" data-price="27150" data-use_date="2025-05-31" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1675/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="VOID" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1673" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1423-77</td>
                        <td>2025-04-06 17:34:07</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_VOID">VOID:取消</span></td>
                                                <td>金子澄人</td>
                        <td>2025-05-04</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>14,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1673">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1673">チャット</a> | <a onclick="return confirm(&quot;金子澄人 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1673">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1673" data-status="-1" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1673" data-status="0" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1673" data-status="1" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1673" data-status="10" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1673" data-status="90" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1673" data-status="99" data-price="14500" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1673/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="VOID" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1672" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1648-1</td>
                        <td>2025-04-06 12:37:07</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_VOID">VOID:取消</span></td>
                                                <td>野澤由美子</td>
                        <td>2025-05-05</td>
                        <td>11:00〜14:00</td>
                        <td>秋川渓谷　錦江閣リバーサイドBBQ＆Bavi</td>
                        <td>
                                                                                                                デラックスプラン（1名）※入場料別途                                                                                                            </td>
                        <td>6</td>
                        <td>30,300</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1672">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1672">チャット</a> | <a onclick="return confirm(&quot;野澤由美子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1672">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1672" data-status="-1" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1672" data-status="0" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1672" data-status="1" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1672" data-status="10" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1672" data-status="90" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1672" data-status="99" data-price="30300" data-use_date="2025-05-05" data-spot_order_payment_method_id="290"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1672/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1670" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-76</td>
                        <td>2025-04-05 19:29:48</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>廣野雄也</td>
                        <td>2025-05-03</td>
                        <td>11:00〜15:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>7</td>
                        <td>35,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1670">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1670">チャット</a> | <a onclick="return confirm(&quot;廣野雄也 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1670">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1670" data-status="-1" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1670" data-status="0" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1670" data-status="1" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1670" data-status="10" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1670" data-status="90" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1670" data-status="99" data-price="35000" data-use_date="2025-05-03" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1670/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1669" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-224</td>
                        <td>2025-04-05 16:38:16</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>野嵜裕汰</td>
                        <td>2025-05-03</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>6</td>
                        <td>36,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1669">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1669">チャット</a> | <a onclick="return confirm(&quot;野嵜裕汰 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1669">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1669" data-status="-1" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1669" data-status="0" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1669" data-status="1" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1669" data-status="10" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1669" data-status="90" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1669" data-status="99" data-price="36500" data-use_date="2025-05-03" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1669/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1668" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-223</td>
                        <td>2025-04-05 16:05:53</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>原　常雄</td>
                        <td>2025-05-10</td>
                        <td>10:00〜14:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>4</td>
                        <td>20,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1668">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1668">チャット</a> | <a onclick="return confirm(&quot;原　常雄 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1668">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1668" data-status="-1" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1668" data-status="0" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1668" data-status="1" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1668" data-status="10" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1668" data-status="90" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1668" data-status="99" data-price="20000" data-use_date="2025-05-10" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1668/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1667" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-222</td>
                        <td>2025-04-05 12:29:17</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>松山祥子</td>
                        <td>2025-05-17</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>4</td>
                        <td>34,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1667">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1667">チャット</a> | <a onclick="return confirm(&quot;松山祥子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1667">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1667" data-status="-1" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1667" data-status="0" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1667" data-status="1" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1667" data-status="10" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1667" data-status="90" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1667" data-status="99" data-price="34500" data-use_date="2025-05-17" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1667/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1666" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-75</td>
                        <td>2025-04-04 18:38:01</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>若林拓実</td>
                        <td>2025-04-19</td>
                        <td>11:00〜15:00</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                3人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>22,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1666">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1666">チャット</a> | <a onclick="return confirm(&quot;若林拓実 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1666">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1666" data-status="-1" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1666" data-status="0" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1666" data-status="1" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1666" data-status="10" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1666" data-status="90" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1666" data-status="99" data-price="22000" data-use_date="2025-04-19" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1666/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1665" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1423-74</td>
                        <td>2025-04-04 11:04:15</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>鈴木碧人</td>
                        <td>2025-04-13</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>7</td>
                        <td>24,350</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1665">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1665">チャット</a> | <a onclick="return confirm(&quot;鈴木碧人 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1665">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1665" data-status="-1" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1665" data-status="0" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1665" data-status="1" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1665" data-status="10" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1665" data-status="90" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1665" data-status="99" data-price="24350" data-use_date="2025-04-13" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1665/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1663" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-221</td>
                        <td>2025-04-03 20:46:04</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>オオキシマ ミノル</td>
                        <td>2025-05-05</td>
                        <td>10:30〜14:30</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>7</td>
                        <td>65,500</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1663">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1663">チャット</a> | <a onclick="return confirm(&quot;オオキシマ ミノル 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1663">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1663" data-status="-1" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1663" data-status="0" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1663" data-status="1" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1663" data-status="10" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1663" data-status="90" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1663" data-status="99" data-price="65500" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1663/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1662" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-73</td>
                        <td>2025-04-03 19:36:37</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>荻野真菜</td>
                        <td>2025-05-04</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                    他
                                                                                </td>
                        <td>13</td>
                        <td>35,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1662">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1662">チャット</a> | <a onclick="return confirm(&quot;荻野真菜 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1662">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1662" data-status="-1" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1662" data-status="0" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1662" data-status="1" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1662" data-status="10" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1662" data-status="90" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1662" data-status="99" data-price="35000" data-use_date="2025-05-04" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1662/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1660" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1358-220</td>
                        <td>2025-04-02 21:55:20</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>斎藤裕美子</td>
                        <td>2025-05-04</td>
                        <td>10:00〜14:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1660">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1660">チャット</a> | <a onclick="return confirm(&quot;斎藤裕美子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1660">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1660" data-status="-1" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1660" data-status="0" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1660" data-status="1" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1660" data-status="10" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1660" data-status="90" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1660" data-status="99" data-price="13800" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1660/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="99" data-list_pay_status="SALES" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1658" data-status="99" style="transform: scale(1.5);">
                        </td>
                        <td>1526-1</td>
                        <td>2025-04-01 09:39:54</td>
                        <td>
                            <span class="icon end">終了</span>
                        </td>
                                                <td><span class="icon pay_status_SALES">SALES:実売上</span></td>
                                                <td>渡邊　勇気</td>
                        <td>2025-04-03</td>
                        <td></td>
                        <td>Bavi </td>
                        <td>
                                                    </td>
                        <td>0</td>
                        <td>15,000</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1658">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1658">チャット</a> | <a onclick="return confirm(&quot;渡邊　勇気 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1658">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1658" data-status="-1" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1658" data-status="0" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1658" data-status="1" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1658" data-status="10" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1658" data-status="90" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/90">決定</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1658" data-status="99" data-price="15000" data-use_date="2025-04-03" data-spot_order_payment_method_id="305"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1658/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="-1" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1657" data-status="-1" style="transform: scale(1.5);">
                        </td>
                        <td>1358-219</td>
                        <td>2025-04-01 05:58:17</td>
                        <td>
                            <span class="icon cancel">キャンセル</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>斎藤裕美子</td>
                        <td>2025-05-04</td>
                        <td>10:00〜14:00</td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>15</td>
                        <td>40,150</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1657">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1657">チャット</a> | <a onclick="return confirm(&quot;斎藤裕美子 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1657">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" class="active disabled" data-id="1657" data-status="-1" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1657" data-status="0" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1657" data-status="1" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1657" data-status="10" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1657" data-status="90" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1657" data-status="99" data-price="40150" data-use_date="2025-05-04" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1657/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="-1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1656" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-218</td>
                        <td>2025-03-31 23:33:29</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_-1">UNPROCESSED:未決済</span></td>
                                                <td>森田和総</td>
                        <td>2025-05-05</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                10人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>31,700</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1656">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1656">チャット</a> | <a onclick="return confirm(&quot;森田和総 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1656">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1656" data-status="-1" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1656" data-status="0" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1656" data-status="1" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1656" data-status="10" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1656" data-status="90" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1656" data-status="99" data-price="31700" data-use_date="2025-05-05" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1656/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="10" data-list_pay_status="1" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1654" data-status="10" style="transform: scale(1.5);">
                        </td>
                        <td>1423-72</td>
                        <td>2025-03-28 13:07:34</td>
                        <td>
                            <span class="icon negotiation">商談中</span>
                        </td>
                                                <td><span class="icon pay_status_1">入金済み</span></td>
                                                <td>犬石隆斗（延期)</td>
                        <td>2025-03-29</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>6</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1654">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1654">チャット</a> | <a onclick="return confirm(&quot;犬石隆斗（延期) 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1654">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1654" data-status="-1" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1654" data-status="0" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1654" data-status="1" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/1">保留</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1654" data-status="10" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1654" data-status="90" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1654" data-status="99" data-price="13800" data-use_date="2025-03-29" data-spot_order_payment_method_id="0"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1654/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1653" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1358-217</td>
                        <td>2025-03-27 22:44:58</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>杉崎浩二</td>
                        <td>2025-05-11</td>
                        <td>11:00〜15:00 </td>
                        <td>秋川橋河川公園バーベキューランド【業界最安！】</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>7</td>
                        <td>21,850</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1653">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1653">チャット</a> | <a onclick="return confirm(&quot;杉崎浩二 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1653">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1653" data-status="-1" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1653" data-status="0" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1653" data-status="1" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1653" data-status="10" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1653" data-status="90" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1653" data-status="99" data-price="21850" data-use_date="2025-05-11" data-spot_order_payment_method_id="259"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1653/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="90" data-list_pay_status="AUTH" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1650" data-status="90" style="transform: scale(1.5);">
                        </td>
                        <td>1423-71</td>
                        <td>2025-03-25 20:25:50</td>
                        <td>
                            <span class="icon decision">決定</span>
                        </td>
                                                <td><span class="icon pay_status_AUTH">AUTH:仮売上</span></td>
                                                <td>木村圭吾</td>
                        <td>2025-04-26</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>8</td>
                        <td>13,800</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1650">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1650">チャット</a> | <a onclick="return confirm(&quot;木村圭吾 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1650">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1650" data-status="-1" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1650" data-status="0" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1650" data-status="1" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1650" data-status="10" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/10">商談中</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1650" data-status="90" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/90">決定</a></li>
                                                                                    <li role="presentation" data-id="1650" data-status="99" data-price="13800" data-use_date="2025-04-26" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1650/99">終了</a></li>
                                                                            </ul>
                                </div>
                                                    </td>
                    </tr>
                                                                    <tr data-list_status="99" data-list_pay_status="SALES" class="main_info">
                        <td class="w5">
                            <!--<div class="icon dengon">伝言あり</div>
                            <input type="checkbox">-->
                            <input type="checkbox" name="order_id[]" value="1647" data-status="99" style="transform: scale(1.5);">
                        </td>
                        <td>1423-70</td>
                        <td>2025-03-22 16:35:11</td>
                        <td>
                            <span class="icon end">終了</span>
                        </td>
                                                <td><span class="icon pay_status_SALES">SALES:実売上</span></td>
                                                <td>大平 　純也</td>
                        <td>2025-03-30</td>
                        <td>11:30〜15:30</td>
                        <td>妙典河川敷・自由広場</td>
                        <td>
                                                                                                                5人用器材セット(設置付)                                                                                                            </td>
                        <td>10</td>
                        <td>19,050</td>
                        <td>
                                                            <a href="https://bavi.jp/customer/spots/order/edit/1647">詳細</a> | <a href="https://bavi.jp/customer/spots/contacts/message/1647">チャット</a> | <a onclick="return confirm(&quot;大平 　純也 様の案件を削除してもよろしいですか？&quot;);" href="https://bavi.jp/customer/spots/order/delete/1647">削除</a>                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" changeable="true">
                                        ステータス<br>変更
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li role="presentation" data-id="1647" data-status="-1" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/-1">キャンセル</a></li>
                                                                                    <li role="presentation" data-id="1647" data-status="0" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/0">案件</a></li>
                                                                                    <li role="presentation" data-id="1647" data-status="1" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/1">保留</a></li>
                                                                                    <li role="presentation" data-id="1647" data-status="10" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/10">商談中</a></li>
                                                                                    <li role="presentation" data-id="1647" data-status="90" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/90">決定</a></li>
                                                                                    <li role="presentation" class="active disabled" data-id="1647" data-status="99" data-price="19050" data-use_date="2025-03-30" data-spot_order_payment_method_id="260"><a role="menuitem" tabindex="-1" href="/customer/spots/order/status/1647/99">終了</a></li>
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