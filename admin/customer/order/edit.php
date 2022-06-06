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

    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/bootstrap.css?1616644533" />

    <link type="text/css" rel="stylesheet" href="/assets/css/add.css?1.21" />

    </style>


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
    <section class="contents">
        <div id="management_page">

            <div class="back_btn">
                <a href="/customer/order/" class="btn btn-default">
                    一覧に戻る </a>
            </div>

            <div class="ttl page_ttl">
                <h1>富士スピードウェイ&times;BBQ NAPAC 富士SUPER TEC 24時間レース　注文情報</h1>
                <h2>【1519-42】富士スピードウェイ&times;BBQ NAPAC 富士SUPER TEC 24時間レース - 矢谷悟志 様</h2>

                <div class="message_btn">
                    <a href="/customer/contacts/message/100" class="btn message_list_btn">メッセージ一覧 </a>
                </div>
            </div>
            <!-- ttl -->

            <form class="form" method="post">

                <div id="" class="guest_sec">
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
                            <td colspan="3">
                                <div class="flex" style="justify-content:flex-start;">
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
                                <input type="text" name="name" value="矢谷悟志">
                            </td>
                            <th>名前カナ</th>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td>
                                <input type="tel" name="tel" value="09076739806">
                            </td>
                            <th>メールアドレス</th>
                            <td>
                                <input type="email" name="email" value="yatani3@hotmail.com">
                            </td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td colspan="3">
                                〒 <input type="number" name="zip_code" size="10" maxlength="8"
                                    style="width: 10em; margin-bottom: 5px;" value="5220007"
                                    onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                                <input type="text" name="address" value="滋賀県彦根市古沢町513ー15ー1008">
                            </td>
                        </tr>
                        <tr>
                            <th>年代</th>
                            <td colspan="3">
                                <select name="age">
                                    <option value="1">10歳以下</option>
                                    <option value="2">11歳〜15歳</option>
                                    <option value="3">16歳〜20歳</option>
                                    <option value="4">20歳以下</option>
                                    <option value="5">21歳〜25歳</option>
                                    <option value="6">26歳〜30歳</option>
                                    <option value="7">31歳〜35歳</option>
                                    <option value="8">36歳〜40歳</option>
                                    <option value="9">41歳〜45歳</option>
                                    <option value="10">46歳〜50歳</option>
                                    <option value="11">51歳〜55歳</option>
                                    <option value="12">56歳〜60歳</option>
                                    <option value="13">61歳〜65歳</option>
                                    <option value="14">66歳〜70歳</option>
                                    <option value="15">71歳以上</option>
                                </select>

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

                <div class="guest_sec">

                    <h2 class="sub_ttl">受注内容（利用NO. 1519-42）</h2>

                    <div class="order_sec">
                        <h3>プラン</h2>
                            <ul>
                                <li>
                                    <figure><img src="img/img01.jpg"></figure>
                                    <p>BBQプラン1</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[61]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                                <li>
                                    <figure><img src="img/img02.jpg"></figure>
                                    <p>BBQプラン2</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[62]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                                <li>
                                    <figure><img src="img/none.jpg"></figure>
                                    <p>BBQプラン3</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[62]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                            </ul>
                    </div>

                    <div class="order_sec">
                        <h3>オプション</h2>
                            <ul>
                                <li>
                                    <figure><img src="img/img03.jpg"></figure>
                                    <p>オプション1</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[61]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                                <li>
                                    <figure><img src="img/img04.jpg"></figure>
                                    <p>オプション2</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[62]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                                <li>
                                    <figure><img src="img/img05.jpg"></figure>
                                    <p>オプション3</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[62]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                                <li>
                                    <figure><img src="img/img07.jpg"></figure>
                                    <p>オプション4</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control" name="spot_order_plan_count[62]"
                                            value="4"><span>セット</span>
                                    </div>
                                </li>

                            </ul>
                    </div>



                    <h2 class="sub_ttl">案件情報</h2>

                    <table class="table_style">
                        <th>受付日</th>
                        <td>
                            2022-05-30 15:13:46 </td>
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
                            <td colspan="3">
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
                                    <option value="2">2人</option>
                                    <option value="3">3人</option>
                                    <option value="4" selected>4人</option>
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
                                <input type="number" name="price" value="17000" style="width: 95%"> 円
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
                                    <option value="105" selected>2部14:00〜16:00</option>
                                    <option value="106">3部17:00〜19:00 &times;ご予約満了受付不可</option>
                                    <option value="107">4部19:30〜21:30（残りわずか）</option>
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
                            <td>17000円</td>
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


                <!-- guest_sec -->
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
                    <a class="btn_type back" href="/customer/order"
                        style="text-align: center; text-decoration: none;">一覧ページへ戻る</a>
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