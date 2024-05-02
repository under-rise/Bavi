
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
    
    <style>
        .order_sec .price {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
            font-size: 1.3em;
            color: #276699;
        }
        .order_sec .price span {
            font-size: 0.7em;
        }
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
	<link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/add.css?1714029534" />
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

<section class="contents">
    <div id="management_page">
        <div class="back_btn">
                        <a href="/customer/order/copy/1134" class="btn btn-default copy">
                コピーする
            </a>
                        <a href="/customer/order/" class="btn btn-default">
                一覧に戻る
            </a>
        </div>
        <div class="ttl page_ttl">
                            <h1>妙典河川敷・自由広場　注文情報</h1>
                <h2>【1423-51】妙典河川敷・自由広場 - よこやま 様</h2>
                <!--
                <div class="message_btn">
                    <a href="/customer/contacts/message/1134" class="btn message_list_btn">メッセージ一覧 </a>
                </div>
                -->
                    </div>
        <style>
    .alert {
        font-weight: bold;
        color: red;
    }
</style>
        <form id="form" class="form" method="post">
            <div id="" class="guest_sec">
                <h2 class="sub_ttl">案件情報</h2>
                <table class="table_style">
                    <tr>
                        <th>受付日</th>
                        <td>
                            2024-05-01 08:45:36                        </td>
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
                        <th>利用日</th>
                        <td><input type="date" name="use_date" id="use_date" value="2024-06-02"></td>
                        <th>利用時間</th>
                        <td>
                            <select class="form-control" name="spot_order_time_id">
                                <option>指定なし</option>
                                                                                                                                                        <option value="31">10:00～14:00</option>
                                                                                    <option value="32">10:30〜14:30</option>
                                                                                    <option value="33">10:45〜14:45</option>
                                                                                    <option value="187">11:00〜15:00</option>
                                                                                    <option value="188">11:15〜15:15</option>
                                                                                    <option value="585" selected>11:30〜15:30</option>
                                                                                                                                        </select>
                        </td>
                    </tr>


                    <tr>
                        <th>ステータス</th>
                        <td>
                            <select class="form-control" id="select_stetas" style="margin-top: 4px;" name="status">
                                <option value="">指定なし</option>
                                                                    <option value="-1">キャンセル</option>
                                                                    <option value="0">案件</option>
                                                                    <option value="1">保留</option>
                                                                    <option value="10">商談中</option>
                                                                    <option value="90" selected >決定</option>
                                                                    <option value="99">終了</option>
                                                            </select>
                        </td>
                        <th>希望利用人数</th>
                        <td>
                            <select name="spot_order_people" style="width: 95%">
                                                                                                                                                        <option value="2" >2</option>
                                                                                    <option value="3" >3</option>
                                                                                    <option value="4" >4</option>
                                                                                    <option value="5" >5</option>
                                                                                    <option value="6" >6</option>
                                                                                    <option value="7"  selected>7</option>
                                                                                    <option value="8" >8</option>
                                                                                    <option value="9" >9</option>
                                                                                    <option value="10" >10</option>
                                                                                    <option value="11" >11</option>
                                                                                    <option value="12" >12</option>
                                                                                    <option value="13" >13</option>
                                                                                    <option value="14" >14</option>
                                                                                    <option value="15" >15</option>
                                                                                    <option value="16" >16</option>
                                                                                    <option value="17" >17</option>
                                                                                    <option value="18" >18</option>
                                                                                    <option value="19" >19</option>
                                                                                    <option value="20" >20</option>
                                                                                    <option value="21" >21</option>
                                                                                    <option value="22" >22</option>
                                                                                    <option value="23" >23</option>
                                                                                    <option value="24" >24</option>
                                                                                    <option value="25" >25</option>
                                                                                    <option value="26" >26</option>
                                                                                    <option value="27" >27</option>
                                                                                    <option value="28" >28</option>
                                                                                    <option value="29" >29</option>
                                                                                    <option value="30" >30</option>
                                                                                    <option value="31" >31</option>
                                                                                    <option value="32" >32</option>
                                                                                    <option value="33" >33</option>
                                                                                    <option value="34" >34</option>
                                                                                    <option value="35" >35</option>
                                                                                    <option value="36" >36</option>
                                                                                    <option value="37" >37</option>
                                                                                    <option value="38" >38</option>
                                                                                    <option value="39" >39</option>
                                                                                    <option value="40" >40</option>
                                                                                    <option value="41" >41</option>
                                                                                    <option value="42" >42</option>
                                                                                    <option value="43" >43</option>
                                                                                    <option value="44" >44</option>
                                                                                    <option value="45" >45</option>
                                                                                    <option value="46" >46</option>
                                                                                    <option value="47" >47</option>
                                                                                    <option value="48" >48</option>
                                                                                    <option value="49" >49</option>
                                                                                    <option value="50" >50</option>
                                                                                    <option value="51" >51</option>
                                                                                    <option value="52" >52</option>
                                                                                    <option value="53" >53</option>
                                                                                    <option value="54" >54</option>
                                                                                    <option value="55" >55</option>
                                                                                    <option value="56" >56</option>
                                                                                    <option value="57" >57</option>
                                                                                    <option value="58" >58</option>
                                                                                    <option value="59" >59</option>
                                                                                    <option value="60" >60</option>
                                                                                    <option value="61" >61</option>
                                                                                    <option value="62" >62</option>
                                                                                    <option value="63" >63</option>
                                                                                    <option value="64" >64</option>
                                                                                    <option value="65" >65</option>
                                                                                    <option value="66" >66</option>
                                                                                    <option value="67" >67</option>
                                                                                    <option value="68" >68</option>
                                                                                    <option value="69" >69</option>
                                                                                    <option value="70" >70</option>
                                                                                    <option value="71" >71</option>
                                                                                    <option value="72" >72</option>
                                                                                    <option value="73" >73</option>
                                                                                    <option value="74" >74</option>
                                                                                    <option value="75" >75</option>
                                                                                    <option value="76" >76</option>
                                                                                    <option value="77" >77</option>
                                                                                    <option value="78" >78</option>
                                                                                    <option value="79" >79</option>
                                                                                    <option value="80" >80</option>
                                                                                    <option value="81" >81</option>
                                                                                    <option value="82" >82</option>
                                                                                    <option value="83" >83</option>
                                                                                    <option value="84" >84</option>
                                                                                    <option value="85" >85</option>
                                                                                    <option value="86" >86</option>
                                                                                    <option value="87" >87</option>
                                                                                    <option value="88" >88</option>
                                                                                    <option value="89" >89</option>
                                                                                    <option value="90" >90</option>
                                                                                    <option value="91" >91</option>
                                                                                    <option value="92" >92</option>
                                                                                    <option value="93" >93</option>
                                                                                    <option value="94" >94</option>
                                                                                    <option value="95" >95</option>
                                                                                    <option value="96" >96</option>
                                                                                    <option value="97" >97</option>
                                                                                    <option value="98" >98</option>
                                                                                    <option value="99" >99</option>
                                                                                    <option value="100" >100</option>
                                                                                                                                        </select> 人
                        </td>
                    </tr>
                                        <tr>
                        <th>利用会場</th>
                        <td>
                                                            妙典河川敷・自由広場                                                    </td>
                        <th>利用会場住所</th>
                        <td>
                                                            千葉県市川市妙典2-13                                                    </td>
                    </tr>
                                        <tr>
                        <th>支払方法</th>
                        <td>
                            <select class="form-control" name="spot_order_payment_method_id" id="spot_order_payment_method_id">
                                <option value="">指定なし</option>
                                                                     
                                                                                <option value="9">当日現金</option>
                                     
                                                                                <option value="11" selected>PayPay</option>
                                     
                                                                                <option value="13">事前請求書払い（法人限定）</option>
                                     
                                                                                <option value="75">後日請求書払い（法人限定）※開催後30日以内※審査有※</option>
                                     
                                                                                <option value="260">クレジット決済（事前）</option>
                                                                                                </select>
                        </td>
                        <th>支払金額</th>
                        <td><span id="order_price">14,850</span>円<input type="hidden" name="price" id="input_price" value="14850" style="width: 95%"></td>
                    </tr>
                                        <tr>
                        <th>入金</th>
                        <td colspan="3">
                            <select class="form-control" name="is_paid">
                                                                                                        <option value="0" selected>未入金</option>
                                                                        <option value="1">入金済み</option>
                                                                                                </select>
                        </td>
                    </tr>
                                        <tr>
                        <th>備考</th>
                        <td colspan="3">
                            <textarea rows="5" name="note"></textarea>
                        </td>
                    </tr>
                </table>

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
                                    <label for="label_sex_1">男性                                </div>
                                                                <div>
                                    <input type="radio" id="label_sex_2" name="sex" value="2">
                                    <label for="label_sex_2">女性                                </div>
                                                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>名前</th>
                        <td>
                            <input type="text" name="name" value="よこやま">
                        </td>
                        <th>名前カナ</th>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>TEL</th>
                        <td>
                            <input type="tel" name="tel" value="08035270732">
                        </td>
                        <th>メールアドレス</th>
                        <td>
                            <input type="email" name="email" value="yokoyama0610@gmail.com">
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td colspan="3">
                            〒 <input type="number" name="zip_code" size="10" maxlength="8"
                                     style="width: 10em; margin-bottom: 5px;" value="1340085"
                                     onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                            <input type="text" name="address" value="東京都江戸川区南葛西3-10-3コーポオリジン302号室">
                        </td>
                    </tr>
                    <tr>
                        <th>年代</th>
                        <td colspan="3">
                            <select name="age">
                                                                    <option value="1">10歳以下</option>
                                                                    <option value="2">11〜15歳</option>
                                                                    <option value="3">16〜20歳</option>
                                                                    <option value="4">21〜25歳</option>
                                                                    <option value="5" selected>26〜30歳</option>
                                                                    <option value="6">31〜35歳</option>
                                                                    <option value="7">36〜40歳</option>
                                                                    <option value="8">41〜45歳</option>
                                                                    <option value="9">46〜50歳</option>
                                                                    <option value="10">51〜55歳</option>
                                                                    <option value="11">56〜60歳</option>
                                                                    <option value="12">61〜65歳</option>
                                                                    <option value="13">66〜70歳</option>
                                                                    <option value="14">71歳以上</option>
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
            <!--member sec-->
            <div class="guest_sec">
                <h2 class="sub_ttl">
                                        受注内容（利用NO. 1423-51）
                                    </h2>
                <div class="order_sec">
                    <h3>プラン</h3>
                    <ul>
                                                                                                                    <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/plan/656d653608df4359df07d4b1647885dd_2.jpg">
                                                                            </figure>
                                    <p>5名器材レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="15" name="spot_order_plan_count[15]" value="1">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">20,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/plan/19effdeca039d947d7eb2b9e89c82a2a_1.jpg">
                                                                            </figure>
                                    <p>10名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="17" name="spot_order_plan_count[17]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">12,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp//uploads/spots/plan/f184bcab485fb7d2919e63d3a6f4c159.jpg">
                                                                            </figure>
                                    <p>15名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1025" name="spot_order_plan_count[1025]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/plan/9843076c3ba1b63d98b3fe39c406625b.jpg">
                                                                            </figure>
                                    <p>20名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="337" name="spot_order_plan_count[337]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">12,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp//uploads/spots/plan/62b82225bab86e6914dc0846833eec4c.jpg">
                                                                            </figure>
                                    <p>50名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="397" name="spot_order_plan_count[397]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/plan/13d53da14efd60fa5bc7d0830f7a55c7.png">
                                                                            </figure>
                                    <p>定番食材セット </p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="999" name="spot_order_plan_count[999]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp//uploads/spots/plan/eabe646eaac6dff6224d112b6f8c7ccd.png">
                                                                            </figure>
                                    <p>本格食材セット</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1000" name="spot_order_plan_count[1000]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>5名器材レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1062" name="spot_order_plan_count[1062]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>10名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1063" name="spot_order_plan_count[1063]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>15名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1064" name="spot_order_plan_count[1064]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>20名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1065" name="spot_order_plan_count[1065]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>50名レンタルプラン（設置付き）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_plan_price" data-id="1066" name="spot_order_plan_count[1066]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                        </ul>
                </div>
                <div class="order_sec">
                    <h3>オプション</h3>
                    <ul>
                                                                                                                    <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/abcf071b241de25e267a474b65ad6018.png">
                                                                            </figure>
                                    <p>季節の野菜３種</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="662" name="spot_order_option_count[662]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/fad299ab2fc39280e20227cadbdece7b.jpg">
                                                                            </figure>
                                    <p>季節のカット野菜</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="663" name="spot_order_option_count[663]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/618ceed319c5a6b6dc9bf3be4b631627.png">
                                                                            </figure>
                                    <p>A4和牛リブロース</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="665" name="spot_order_option_count[665]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/117606a1aba2a1d334a954be6b9114f0.png">
                                                                            </figure>
                                    <p>A4和牛特上部位ステーキカット</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="750" name="spot_order_option_count[750]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/3ba85128d3b8e512dd1c78ae3a8e3005.png">
                                                                            </figure>
                                    <p>A4和牛上カルビ</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="751" name="spot_order_option_count[751]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/0b8f1b711ef9af4c6625a3d0e9042c08.png">
                                                                            </figure>
                                    <p>A4和牛ロース</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="799" name="spot_order_option_count[799]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/15974821e390c06e01dda043030bff8a.png">
                                                                            </figure>
                                    <p>牛タンスライス</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="753" name="spot_order_option_count[753]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/6a699a8a52d4ba936f3ee7384ddec025.png">
                                                                            </figure>
                                    <p>牛ハラミ</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="752" name="spot_order_option_count[752]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/c0a83c75017af8336dce7c9bacf43365.png">
                                                                            </figure>
                                    <p>牛肉 カルビ(外国産)</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="666" name="spot_order_option_count[666]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/fb87bed48844a9d9473b2bdbcd141009.jpg">
                                                                            </figure>
                                    <p>豚 カルビ&amp;ロース(外国産)</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="667" name="spot_order_option_count[667]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/f6a00227e4193a34bf147cf3911f641d.png">
                                                                            </figure>
                                    <p>海鮮セット</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="664" name="spot_order_option_count[664]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/b3b803cfaf0b600136448e13fbe941d8.png">
                                                                            </figure>
                                    <p>焼きそば</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="668" name="spot_order_option_count[668]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/80b68ac6c5d5215adf987cb647340813.jpg">
                                                                            </figure>
                                    <p>テント</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="15" name="spot_order_option_count[15]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/147ae6f50041a32bef2752963052c8a1.jpg">
                                                                            </figure>
                                    <p>テーブル</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="16" name="spot_order_option_count[16]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/b04a5ea5156db70063f5d2dcdf137b69.jpg">
                                                                            </figure>
                                    <p>コンロ</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="17" name="spot_order_option_count[17]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/e9dbd5dbca068517404df22552881107.png">
                                                                            </figure>
                                    <p>鉄板</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="14" name="spot_order_option_count[14]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/e5b665e3927baf6d0be3ea0ee0c391e5.jpg">
                                                                            </figure>
                                    <p>追加 網</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="506" name="spot_order_option_count[506]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/f43c5ad9abcca184b492efa0ba3c643d.png">
                                                                            </figure>
                                    <p>包丁・まな板セット</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="724" name="spot_order_option_count[724]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/7853bf0473258d1c0b97be4acacadecd.jpg">
                                                                            </figure>
                                    <p>クーラーボックス</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="18" name="spot_order_option_count[18]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/6f77548af5bcd412ad3078e4e071f5db.jpg">
                                                                            </figure>
                                    <p>ディレクターズチェア</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="90" name="spot_order_option_count[90]" value="2">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/ad744cc9c133af8c8d17942e5c1d879f.jpg">
                                                                            </figure>
                                    <p>キッズチェア</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="669" name="spot_order_option_count[669]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/uploads/spots/option/e30ded94297f157d524da8006cb2e6a1.jpg">
                                                                            </figure>
                                    <p>ウェーバーグリル（炭付）</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="337" name="spot_order_option_count[337]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                                            <li>
                                    <figure>
                                                                                    <img src="https://bavi.jp/assets/img/order/none.jpg?1650857028" alt="" />                                                                            </figure>
                                    <p>ご利用時間延長30分</p>
                                    <div class="input_sec">
                                        <input type="number" class="form-control order_option_price" data-id="814" name="spot_order_option_count[814]" value="">
                                        <span>セット</span>
                                    </div>
                                    <div class="price">11,000<span>円（税込）</span></div>
                                </li>
                                                                        </ul>
                </div>
                <input type="hidden" name="user_id" value="3084">
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


<script>
    
    $(function() {

        const section_url = '/api/section/seat/';
        const section_seat = $('#section_seat_select');

        $('#section_select').on('change', function() {
            let value = $(this).val();
            $('#section_seat_select > option').not('.default').remove();

            if (value === '') {
                section_seat.val("");
                return;
            }

            fetch(section_url + value, {
                    cache: "no-store"
            })
            .then(response => {
                return response.json();
            })
            .then(json => {
                for (let section of json) {
                    $(section_seat).append($('<option>').html(section.name).val(section.id));
                }
            });
        });

                const form = document.getElementById('form');

        form.addEventListener('submit', event => {
            let status = $('#select_stetas').val();
            let price = $('#input_price').val();
            let use_date = $('#use_date').val();
            let spot_order_payment_method_id = $('#spot_order_payment_method_id').val();

            if (status == 90 || status == -1 || status == 99) {
                event.preventDefault();

                let id = 1134;
                $.post('/api/spot/order/gmomulpay/data/' + id, {
                    status:status,
                    price:price,
                    use_date:use_date,
                    spot_order_payment_method_id:spot_order_payment_method_id,
                },function(text) {
                    let result = text ? confirm(text) : true;
                    if (result === true) form.submit();
                });
            }
        });
                $('input.order_plan_price, input.order_option_price').on('change', function() {
            let data = {};
            data.plan = {};
            data.option = {};
            $('input.order_plan_price').each(function(index, element) {
                var id = $(this).data("id");
                data.plan[id] = $(this).val();
            });
            $('input.order_option_price').each(function(index, element) {
                var id = $(this).data("id");
                data.option[id] = $(this).val();
            });
            $.post('/api/spot/order/price/', {
                data:JSON.stringify(data)
            },function(price) {
                $('#input_price').val((typeof price !== 'undefined') ? Number(price) : Number(0));
                $('#order_price').text((typeof price !== 'undefined') ? Number(price).toLocaleString() : Number(0));
            });
        });
    });
</script>
    <!--footer-->
<footer>
    <dl>
        <dt>運営会社: ゼネラルパーソンカンパニー株式会社</dt>
        <dd>〒120-0001東京都足立区大谷田3丁目21番6号<dd>
        <dd>TEL: 03-5856-2030</dd>
        <dd>E-mail: info@bavi.jp</dd>
    </dl>
    <p id="copyright">© Copyright Bavi all right reserved.</p>
</footer>

<div id="overlay"></div>  <!--footer END-->
<div id="footer_btn">
    <span></span>
</div></body>
</html>