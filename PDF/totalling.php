<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>Bavi 運営側管理ページ | Bavi</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/reset.css?1648760965" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/style.css?1706126740" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/page.css?1648760966" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/detail.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/form.css?1648760966" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/customer/main.js?1706126740"></script>
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
                <!--<li><a href="/customer/contacts/">問合せ一覧</a></li>-->
                <li><a href="/customer/info/edit"><i class="fas fa-id-card"></i>オーナー情報</a></li>
                <li><a href="mailto:info@bavi.jp"><i class="fas fa-envelope"></i>お問合せ</a></li>
            </ul>
            <ul class="mainBtn">
                <li><a href="/customer/admin">管理画面に戻る</a></li>
            </ul>
            <ul class="sns flex">
                <li><a href="https://www.instagram.com/bavi_bbq/" target="_blacnk"><img src="/assets/img/customer/icon_instagram.png"></a></li>
                <li><a href="https://line.me/ti/p/%40637eulru" target="_blacnk"><img src="/assets/img/customer/icon_line.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCMA8rsf6gPte0ZDpY62A8Pg" target="_blank"><img src="/assets/img/customer/icon_youtube.png"></a></li>
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

        .icon.project {
            background: #347e7f;
        }

        .icon.decision {
            background: #e4348f;
        }

        .icon.negotiation {
            background: #a34c4c;
        }

        .icon.hold {
            background: #6370d3;
        }

        .icon.cancel {
            background: #c3b75c;
        }

        .icon.end {
            background: #dddddd;
        }

        .icon.pay_status_0 {
            background: #c3b75c;
        }

        .icon.pay_status_1 {
            background: #ccc;
        }

        .icon.pay_status_AUTH {
            background: #e4348f;
        }

        .icon.pay_status_SALES {
            background: #dddddd;
        }

        .icon.pay_status_CAPTURE {
            background: #dddddd;
        }

        .icon.pay_status_VOID {
            background: #c3b75c;
        }

        .icon.pay_status_-1 {
            background: #347e7f;
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

        .number-sales {
            background-color: #fafafa;
            border: 1px solid #266698;
            padding: 10px;
            border-bottom: none;
        }


        /**-----------------------------
            20240514 css 追加
        --------------------------------*/

        #totalling_sec {
            padding-bottom: 150px;
        }


        #totalling_sec table td,
        #totalling_sec table th {
            font-size: 11px;
            padding: 8px;
        }

        #totalling_sec dl.information {
            display: flex;
            gap: 30px;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1em;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 8px;
        }

        #totalling_sec h2 {
            font-weight: bold;
            font-size: 1.6em;
            margin-top: 40px;
            border-top: 1px dashed #999;
            padding-top: 20px;
        }

        #totalling_sec h3 {
            font-size: 1.1em;
            font-weight: bold;
        }

        #totalling_sec .unpaid {
            color: #b4560a;
        }

        #totalling_sec .deposited {
            color: #266698;
        }

        #totalling_sec .btn.type05 {
            padding: 8px;
            color: #000;
            font-size: 12px;
            margin-top: 15px;
        }

        #totalling_sec .btn.type05.all_btn {
            font-weight: bold;
        }

        #totalling_sec .btn.type05 a {
            color: #000;
        }

        #totalling_sec .btn.type05:hover {
            background-color: #d8ecfb;
        }

        #totalling_sec .total {
            font-weight: bold;
        }

        #totalling_sec .option_table {
            width: auto;
        }

        #totalling_sec .option_table th,
        #totalling_sec .option_table td {
            width: 100px;
        }

        body {
            font-family: "メイリオ";
        }

        @media only screen and (min-width: 1081px) {
            .contents {
                margin-left: 100px;
            }
        }

        @media only screen and (max-width: 1080px) {
            .contents {
                width: 95%;
                max-width: 940px;
                margin-left: auto;
            }
        }

        @media only screen and (max-width: 990px) {
            .contents {
                width: 78%;
                max-width: 940px;
                margin-left: auto;
            }
        }

        @media only screen and (max-width: 640px) {
            .contents {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
    <section class="contents">
        <div id="management_page" class="col-md-10 col-md-offset-2 main" style="margin-bottom: 100px;">
            <div class="ttl">
                <h1>案件表</h1>
            </div>

            <div id="search_sec" class="sec">
                <h2 style="text-align: center;">案件検索</h2>
                <form class="form" method="get">
                    <table class="table_style">

                        <tr>
                            <th>会場</th>
                            <td>
                                <select name="spot_id">
                                    <option value="">指定なし</option>
                                    <option value="241">彩湖・道満グリーンパーク</option>
                                    <option value="409">都立野川公園バーベキュー広場</option>
                                    <option value="1348">光が丘公園</option>
                                    <option value="1358">秋川橋河川公園バーベキューランド【業界最安！】</option>
                                    <option value="1388">都立汐入公園バーベキュー広場</option>
                                    <option value="1420">赤塚公園バーベキュー広場</option>
                                    <option value="1422">都立水元公園バーベキュー場</option>
                                    <option value="1423">妙典河川敷・自由広場</option>
                                    <option value="1429">京浜島つばさ公園</option>
                                    <option value="1431">木場公園</option>
                                    <option value="1438">舎人公園BBQ場</option>
                                    <option value="1465">小金井公園バーベキュー場</option>
                                    <option value="1466">小松川千本桜バーベキュー場</option>
                                    <option value="1467">十里木ランド</option>
                                    <option value="1474">新左近川親水公園</option>
                                    <option value="1475">城南島海浜公園</option>
                                    <option value="1476">大泉さくら運動公園</option>
                                    <option value="1477">郷土の森公園バーベキュー場</option>
                                    <option value="1482">府中の森公園バーベキュー広場</option>
                                    <option value="1490">東海ふ頭公園</option>
                                    <option value="1515">FIRE×FARM菖蒲　ファイヤーファームBBQ場</option>
                                    <option value="1519">富士スピードウェイ×BBQ 2023年FIA世界耐久選手権6時間耐久レース</option>
                                    <option value="1526">Bavi デモ会場！</option>
                                    <option value="1565">リバーサイドパーク一の谷</option>
                                    <option value="1566">秋川ふれあいランド</option>
                                    <option value="1608">【全国対応】団体専用BBQイベント</option>
                                    <option value="1619">上米公園 </option>
                                    <option value="1620">母智丘公園</option>
                                    <option value="1621">新春！お餅つきイベント in KIRANAH GARDEN(キラナガーデン)</option>
                                    <option value="1622">みなとが丘ふ頭公園</option>
                                    <option value="1631">6月2日【ラグビー】Bavi Sportsファン交流会第一弾（流大選手・中村亮土選手）</option>
                                </select>
                            </td>

                            <th>利用日</th>
                            <td>
                                <div style="display: flex; justify-content: space-between; align-items: center; ">
                                    <input type="date" name="from" value=""><span style="padding: 0 10px;">
                                </div>
                            </td>
                        </tr>

                    </table>
                    <input type="submit" value="検索">
                </form>
                <!--form-->
            </div>

            <div id="totalling_sec" class="sec">

                <dl class="information">
                    <dt>利用日: 2024年10月25日（月）</dt>
                    <dd>ID:1000 秋川橋河川公園</dd>
                </dl>

                <button type="button" class="btn type05 all_btn"><a href="all.php" target="_blank">PDF一括出力</a></button>


                <h2>案件集計</h2>

                <table class="table_style">
                    <thead>
                        <tr class="head">
                            <th>NO</th>
                            <th>利用時間</th>
                            <th width="20%">法人・団体名</th>
                            <th>担当者</th>
                            <th>人数</th>
                            <th>区画</th>
                            <th>プラン</th>
                            <th>TEL</th>
                            <th>支払い方法</th>
                            <th>金額</th>
                            <th>支払い状況</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1000-1111</td>
                            <td>11:00〜16:00</td>
                            <td>ゼネラルパーソンカンパニー株式会社</td>
                            <td>榊原 良太</td>
                            <td>150名</td>
                            <td>デラックス</td>
                            <td>
                                プランA<br>
                                プランB<br>
                                オプション
                            </td>
                            <td>090-8307-0445</td>
                            <td>現金</td>
                            <td>¥100,000円</td>
                            <td class="unpaid">未払い</td>
                        </tr>
                        <tr>
                            <td>1000-1111</td>
                            <td>11:00〜16:00</td>
                            <td>株式会社アンダーライズ</td>
                            <td>鈴木 博之</td>
                            <td>150名</td>
                            <td>デラックス</td>
                            <td>
                                プランA<br>
                                プランB
                            </td>
                            <td>090-8307-0445</td>
                            <td>PayPay</td>
                            <td>¥100,000円</td>
                            <td class="deposited">決済済み</td>
                        </tr>
                        <tr>
                            <td>1000-1111</td>
                            <td>11:00〜16:00</td>
                            <td>ゼネラルパーソンカンパニー株式会社</td>
                            <td>榊原 良太</td>
                            <td>150名</td>
                            <td>キャビン</td>
                            <td>
                                プランB
                            </td>
                            <td>090-8307-0445</td>
                            <td>事前クレジット</td>
                            <td>¥100,000円</td>
                            <td class="unpaid">未払い</td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <th colspan="2">合計件数</th>
                            <td colspan="3" class="total">6件</td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <th colspan="2">合計人数</th>
                            <td colspan="3" class="total">1,200名</td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <th colspan="2">合計金額</th>
                            <td colspan="3" class="total">¥100,000円</td>
                        </tr>
                    </tbody>

                </table>
                <!-- table -->
                <button type="button" class="btn type05"><a href="order.php" target="_blank">案件集計をPDF出力</a></button>

                <h2>特記事項</h2>

                <table class="table_style">
                    <tr>
                        <th width="10%">NO</th>
                        <th width="20%">法人・団体名</th>
                        <th width="10%">人数</th>
                        <th width="60%">備考</th>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td style="text-align: left;">特記事項のテキスト特記事項のテキスト特記事項のテキスト特記事項のテキスト。</td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td style="text-align: left;">特記事項のテキスト。</td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td style="text-align: left;">特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。</td>
                    </tr>
                    <tr>
                        <th colspan="1">合計</th>
                        <td colspan="1" class="total">3件</td>
                        <td colspan="1" class="total">450人</td>
                        <td colspan=""></td>
                    </tr>

                </table>

                <button type="button" class="btn type05"><a href="notices.php" target="_blank">特記事項をPDF出力</a></button>

                <h2>注文プラン</h2>

                <table class="table_style">
                    <tr>
                        <th width="10%">NO</th>
                        <th width="20%">法人・団体名</th>
                        <th>人数</th>
                        <th>プランA</th>
                        <th>プランB</th>
                        <th>プランC</th>
                        <th>プランD</th>
                        <th>プランE</th>
                        <th>プランF</th>
                        <th>オプション</th>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td>14</td>
                        <td>22</td>
                        <td>32</td>
                        <td>40</td>
                        <td>50</td>
                        <td>63</td>
                        <td><a href="option.php">あり</a></td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>92</td>
                        <td>28</td>
                        <td>14</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td>124</td>
                        <td>22</td>
                        <td>32</td>
                        <td>40</td>
                        <td>50</td>
                        <td>63</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td>14</td>
                        <td>31</td>
                        <td>55</td>
                        <td>12</td>
                        <td>28</td>
                        <td>14</td>
                        <td><a href="option.php">あり</a></td>
                    </tr>

                    <tr>
                        <td>1000-1111</td>
                        <td>ゼネラルパーソンカンパニー株式会社</td>
                        <td>150名</td>
                        <td>114</td>
                        <td>31</td>
                        <td>515</td>
                        <td>12</td>
                        <td>228</td>
                        <td>34</td>
                        <td><a href="option.php">あり</a></td>
                    </tr>


                    <tr>
                        <th colspan="1">合計</th>
                        <td colspan="1" class="total">5件</td>
                        <td colspan="1" class="total">900人</td>
                        <td colspan="1" class="total">84</td>
                        <td colspan="1" class="total">44</td>
                        <td colspan="1" class="total">98</td>
                        <td colspan="1" class="total">31</td>
                        <td colspan="1" class="total">120</td>
                        <td colspan="1" class="total">91</td>
                        <td colspan="1" class="total">3</td>
                    </tr>

                </table>

                <button type="button" class="btn type05"><a href="plan.php" target="_blank">注文プランをPDF出力</a></button>

                <h2>オプション（個別）</h2>

                <h3>NO. 1000-1111 ゼネラルパーソンカンパニー株式会社（150名）</h3>
                <table class="table_style option_table">
                    <tr>
                        <th width="10%">鉄板セット</th>
                        <th width="10%">リブロース</th>
                        <th width="10%">和牛ロース</th>
                        <th width="10%">牛カルビ(1kg)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>32</td>
                        <td>40</td>
                        <td>50</td>
                        <td>30</td>
                        <td>40</td>
                        <td>50</td>
                        <td>30</td>
                        <td>40</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th width="10%">鉄板セット</th>
                        <th width="10%">リブロース</th>
                        <th width="10%">和牛ロース</th>
                        <th width="10%">牛カルビ(1kg)</th>
                        <th width="10%">ビール(1ケース)</th>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>32</td>
                        <td>40</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                </table>


                <h3>NO. 1000-1111 ゼネラルパーソンカンパニー株式会社（150名）</h3>
                <table class="table_style option_table">
                    <tr>
                        <th width="10%">鉄板セット</th>
                        <th width="10%">リブロース</th>
                        <th width="10%">和牛ロース</th>
                        <th width="10%">牛カルビ(1kg)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                        <th width="10%">ビール(1ケース)</th>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>32</td>
                        <td>40</td>
                        <td>50</td>
                        <td>30</td>
                        <td>40</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                </table>

                <h3>NO. 1000-1111 株式会社AAAAA（120名）</h3>
                <table class="table_style option_table">
                    <tr>
                        <th width="10%">鉄板セット</th>
                    </tr>
                    <tr>
                        <td>22</td>
                    </tr>
                </table>

                <h2>オプション（集計）</h2>

                <table class="table_style">
                    <tr>
                        <th width="20%">鉄板セット</th>
                        <td width="30%">0</td>
                        <th width="20%">リブロース</th>
                        <td width="30%">111</td>
                    </tr>

                    <tr>
                        <th width="20%">和牛ロース</th>
                        <td width="30%">0</td>
                        <th width="20%">牛カルビ(1kg)</th>
                        <td width="30%">120</td>
                    </tr>

                    <tr>
                        <th width="20%">ビール(1ケース)</th>
                        <td width="30%">50</td>
                        <th width="20%">角</th>
                        <td width="30%">0</td>
                    </tr>

                    <tr>
                        <th width="20%">鉄板セット</th>
                        <td width="30%">330</td>
                        <th width="20%">リブロース</th>
                        <td width="30%">20</td>
                    </tr>

                    <tr>
                        <th width="20%">和牛ロース</th>
                        <td width="30%">1</td>
                        <th width="20%">牛カルビ(1kg)</th>
                        <td width="30%">0</td>
                    </tr>

                    <tr>
                        <th width="20%">ビール(1ケース)</th>
                        <td width="30%">0</td>
                        <th width="20%">角</th>
                        <td width="30%">0</td>
                    </tr>

                    <tr>
                        <th width="20%">鉄板セット</th>
                        <td width="30%">0</td>
                        <th width="20%">リブロース</th>
                        <td width="30%">0</td>
                    </tr>

                    <tr>
                        <th width="20%">和牛ロース</th>
                        <td width="30%">2</td>
                        <th width="20%">牛カルビ(1kg)</th>
                        <td width="30%">55</td>
                    </tr>

                    <tr>
                        <th width="20%">ビール(1ケース)</th>
                        <td width="30%">1</td>
                        <th width="20%">角</th>
                        <td width="30%">2</td>
                    </tr>

                    <tr>
                        <th width="20%">鉄板セット</th>
                        <td width="30%">0</td>
                        <th width="20%">リブロース</th>
                        <td width="30%">1</td>
                    </tr>

                    <tr>
                        <th width="20%">和牛ロース</th>
                        <td width="30%">0</td>
                        <th width="20%">牛カルビ(1kg)</th>
                        <td width="30%">0</td>
                    </tr>

                    <tr>
                        <th width="20%">ビール(1ケース)</th>
                        <td width="30%">50</td>
                        <th width="20%">角</th>
                        <td width="30%">160</td>
                    </tr>

                </table>

                <button type="button" class="btn type05"><a href="option.php" target="_blank">オプションをPDF出力</a></button>

            </div>
    </section>

    <style>
        .is-hide {
            display: none;
        }
    </style>
    <script>

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

    <div id="overlay"></div> <!--footer END-->
    <div id="footer_btn">
        <span></span>
    </div>
</body>

</html>