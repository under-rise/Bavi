<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>BBQ会場一覧 | Bavi 運営側管理ページ</title>
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
    <style>
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
        display: block;
         !important;
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
    </style>


    <section class="contents">
        <div id="management_page" class="col-md-10 col-md-offset-2 main" style="margin-bottom: 100px;">
            <div class="ttl">
                <h1>富士スピードウェイ&times;BBQ NAPAC 富士SUPER TEC 24時間レース　注文情報</h1>
                <h2>【1519-41】富士スピードウェイ&times;BBQ NAPAC 富士SUPER TEC 24時間レース - 西山 尚志 様</h2>
                <div class="row">
                    <a href="/customer/order/" class="btn btn-default">
                        << 一覧に戻る </a>　
                            <a href="/customer/contacts/message/99" class="btn btn-default"> メッセージやり取り一覧 >> </a>
                </div>
            </div>
            <style>
            .alert {
                font-weight: bold;
                color: red;
            }
            </style>
            <form class="form" method="post">
                <div id="" class="guest_sec sec">
                    <h2 class="sub_ttl">顧客情報</h2>
                    <table class="table_style">
                        <tr>
                            <!--
                        <th>会員 / 非会員</th>
                        <td>
                            <div class="flex">
                                <div><input type="radio" name="member" id="member"><label for="member">会員</label></div>
                                <div><input type="radio" name="member" id="non_member"><label
                                            for="non_member">非会員</label></div>
                            </div>
                        </td>
                        -->
                            <th>性別</th>
                            <td>
                                <div class="flex">
                                    <div>
                                        <input type="radio" id="label_sex_1" name="sex" value="1" checked>
                                        <label for="label_sex_1">男性
                                    </div>
                                    <div>
                                        <input type="radio" id="label_sex_2" name="sex" value="2">
                                        <label for="label_sex_2">女性
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>名前</th>
                            <td>
                                <input type="text" name="name" value="西山 尚志">
                            </td>
                            <th>名前カナ</th>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td>
                                <input type="tel" name="tel" value="09056791690">
                            </td>
                            <th>メールアドレス</th>
                            <td>
                                <input type="email" name="email" value="tn.i-picnic@docomo.ne.jp">
                            </td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td colspan="3">
                                〒 <input type="number" name="zip_code" size="10" maxlength="8"
                                    style="width: 10em; margin-bottom: 5px;" value="2240021"
                                    onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                                <input type="text" name="address" value="神奈川県横浜市都筑区北山田5-17-27-826">
                            </td>
                        </tr>
                        <tr>
                            <th>年代</th>
                            <td colspan="3">
                                <div class="flex">
                                    <div>
                                        <input type="radio" name="age" id="age_1" value="1">
                                        <label for="age_1">10歳以下</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_2" value="2">
                                        <label for="age_2">11歳〜15歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_3" value="3">
                                        <label for="age_3">16歳〜20歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_4" value="4">
                                        <label for="age_4">21歳〜25歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_5" value="5">
                                        <label for="age_5">26歳〜30歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_6" value="6">
                                        <label for="age_6">31歳〜35歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_7" value="7">
                                        <label for="age_7">36歳〜40歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_8" value="8" checked>
                                        <label for="age_8">41歳〜45歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_9" value="9">
                                        <label for="age_9">46歳〜50歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_10" value="10">
                                        <label for="age_10">51歳〜55歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_11" value="11">
                                        <label for="age_11">56歳〜60歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_12" value="12">
                                        <label for="age_12">61歳〜65歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_13" value="13">
                                        <label for="age_13">66歳〜70歳</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="age" id="age_14" value="14">
                                        <label for="age_14">71歳以上</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!--
                    <tr>
                        <th>備考</th>
                        <td colspan="3">
                            <textarea rows="5"></textarea>
                        </td>
                    </tr>
                    -->
                    </table>
                    <input type="submit" value="保存する">
                </div>
                <!--member sec-->
                <div id="" class="guest_sec sec">
                    <h2 class="sub_ttl">
                        案件情報（利用NO. 1519-41）
                    </h2>
                    <table class="table_style">
                        <tr>
                            <th>受付日</th>
                            <td>
                                2022-05-28 23:09:09 </td>
                            <th>CV種別</th>
                            <td>
                                <select class="form-control" name="cv_type">
                                    <option value="">指定なし</option>
                                    <option value="1" selected>Web</option>
                                    <option value="2">LINE</option>
                                    <option value="3">TEL</option>
                                    <option value="9">その他</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>ステータス</th>
                            <td>
                                <select class="select_stetas" style="margin-top: 4px;">
                                    <option>全て</option>
                                    <option>決定</option>
                                    <option>商談中</option>
                                    <option>キャンセル</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>希望利用人数</th>
                            <td>
                                <select name="spot_order_people" style="width: 95%">
                                    <option value="2" selected>2人</option>
                                    <option value="3">3人</option>
                                    <option value="4">4人</option>
                                    <option value="5">5人</option>
                                    <option value="6">6人</option>
                                    <option value="7">7人</option>
                                    <option value="8">8人</option>
                                    <option value="9">9人</option>
                                    <option value="10">10人</option>
                                    <option value="11">11人</option>
                                    <option value="12">12人</option>
                                    <option value="13">13人</option>
                                    <option value="14">14人</option>
                                    <option value="15">15人</option>
                                    <option value="16">16人</option>
                                    <option value="17">17人</option>
                                    <option value="18">18人</option>
                                    <option value="19">19人</option>
                                    <option value="20">20人</option>
                                    <option value="21">21人</option>
                                    <option value="22">22人</option>
                                    <option value="23">23人</option>
                                    <option value="24">24人</option>
                                    <option value="25">25人</option>
                                    <option value="26">26人</option>
                                    <option value="27">27人</option>
                                    <option value="28">28人</option>
                                    <option value="29">29人</option>
                                    <option value="30">30人</option>
                                    <option value="31">31人</option>
                                    <option value="32">32人</option>
                                    <option value="33">33人</option>
                                    <option value="34">34人</option>
                                    <option value="35">35人</option>
                                    <option value="36">36人</option>
                                    <option value="37">37人</option>
                                    <option value="38">38人</option>
                                    <option value="39">39人</option>
                                    <option value="40">40人</option>
                                    <option value="41">41人</option>
                                    <option value="42">42人</option>
                                    <option value="43">43人</option>
                                    <option value="44">44人</option>
                                    <option value="45">45人</option>
                                    <option value="46">46人</option>
                                    <option value="47">47人</option>
                                    <option value="48">48人</option>
                                    <option value="49">49人</option>
                                    <option value="50">50人</option>
                                    <option value="51">51人</option>
                                    <option value="52">52人</option>
                                    <option value="53">53人</option>
                                    <option value="54">54人</option>
                                    <option value="55">55人</option>
                                    <option value="56">56人</option>
                                    <option value="57">57人</option>
                                    <option value="58">58人</option>
                                    <option value="59">59人</option>
                                    <option value="60">60人</option>
                                    <option value="61">61人</option>
                                    <option value="62">62人</option>
                                    <option value="63">63人</option>
                                    <option value="64">64人</option>
                                    <option value="65">65人</option>
                                    <option value="66">66人</option>
                                    <option value="67">67人</option>
                                    <option value="68">68人</option>
                                    <option value="69">69人</option>
                                    <option value="70">70人</option>
                                    <option value="71">71人</option>
                                    <option value="72">72人</option>
                                    <option value="73">73人</option>
                                    <option value="74">74人</option>
                                    <option value="75">75人</option>
                                    <option value="76">76人</option>
                                    <option value="77">77人</option>
                                    <option value="78">78人</option>
                                    <option value="79">79人</option>
                                    <option value="80">80人</option>
                                    <option value="81">81人</option>
                                    <option value="82">82人</option>
                                    <option value="83">83人</option>
                                    <option value="84">84人</option>
                                    <option value="85">85人</option>
                                    <option value="86">86人</option>
                                    <option value="87">87人</option>
                                    <option value="88">88人</option>
                                    <option value="89">89人</option>
                                    <option value="90">90人</option>
                                    <option value="91">91人</option>
                                    <option value="92">92人</option>
                                    <option value="93">93人</option>
                                    <option value="94">94人</option>
                                    <option value="95">95人</option>
                                    <option value="96">96人</option>
                                    <option value="97">97人</option>
                                    <option value="98">98人</option>
                                    <option value="99">99人</option>
                                    <option value="100">100人</option>
                                </select> 人
                            </td>
                            <th>確定利用料金</th>
                            <td>
                                <input type="number" name="price" value="11000" style="width: 95%"> 円
                            </td>
                        </tr>
                        <tr>
                            <th>利用日</th>
                            <td><input type="date" name="use_date" value="2022-06-04"></td>
                            <th>利用時間</th>
                            <td>
                                <select class="form-control" name="spot_order_time_id">
                                    <option>指定なし</option>
                                    <option value="104">1部11:00〜13:00（残りわずか）</option>
                                    <option value="105">2部14:00〜16:00</option>
                                    <option value="106">3部17:00〜19:00 &times;ご予約満了受付不可</option>
                                    <option value="107" selected>4部19:30〜21:30（残りわずか）</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>利用会場</th>
                            <td>
                                富士スピードウェイ&times;BBQ NAPAC 富士SUPER TEC 24時間レース </td>
                            <th>利用会場住所</th>
                            <td>
                                静岡県駿東郡小山町中日向６９４　富士スピードウェイ内16Aエリア </td>
                        </tr>
                        <tr>
                            <th>プラン</th>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">レースBBQプラン</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_plan_count[61]"
                                        value="2">
                                    <span class="input-group-addon">セット</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">【お子様用】レースBBQプラン</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_plan_count[62]" value="">
                                    <span class="input-group-addon">セット</span>
                                </div>
                            </td>
                            <th>オプション</th>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">アルコール飲み放題</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_option_count[56]"
                                        value="1">
                                    <span class="input-group-addon">セット</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">ソフトドリンク飲み放題</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_option_count[57]"
                                        value="1">
                                    <span class="input-group-addon">セット</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">アルコールチケット4枚</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_option_count[58]"
                                        value="">
                                    <span class="input-group-addon">セット</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">ソフトドリンクチケット4枚</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_option_count[59]"
                                        value="">
                                    <span class="input-group-addon">セット</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">あおぞらご飯</span>
                                    <span class="input-group-addon">×</span>
                                    <input type="number" class="form-control" name="spot_order_option_count[60]"
                                        value="">
                                    <span class="input-group-addon">セット</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>支払方法</th>
                            <td>
                                <select class="form-control" name="spot_order_payment_method_id">
                                    <option value="">指定なし</option>
                                    <option value="33" selected>当日現金</option>
                                    <option value="34">クレジット決済</option>
                                    <option value="35">PayPay決済</option>
                                </select>
                            </td>
                            <th>支払金額</th>
                            <td>11000円</td>
                        </tr>
                        <tr>
                            <th>備考</th>
                            <td colspan="3">
                                <textarea rows="5" name="note"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="保存する">
                </div>
                <!--
        <div id="" class="guest_sec sec">
            <h2 class="sub_ttl">伝言</h2>
            <form class="form">
                <table class="table_style">
                    <tr>
                        <th>受付伝言</th>
                        <td class="w5" style="text-align: center;"><input type="checkbox" id="check001"></td>
                        <td>
                            <textarea rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>現場伝言</th>
                        <td class="w5" style="text-align: center;"><input type="checkbox" id="check002"></td>
                        <td>
                            <textarea rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>本部伝言</th>
                        <td class="w5" style="text-align: center;"><input type="checkbox" id="check003"></td>
                        <td>
                            <textarea rows="5"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="保存する">
            </form>
        </div>
                -->
                <div class="table_style">
                    <a class="btn_type back" href="/customer/order" style="text-align: center;">一覧ページへ戻る</a>
                </div>
            </form>
        </div>

        <!--management_page-->
    </section>

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