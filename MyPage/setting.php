<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ユーザー情報設定 | 日本最大級のBBQプラットフォーム Bavi</title>
    <meta name="apple-mobile-web-app-title" content="Bavi">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <?php
    include 'tpl/head.php'
    ?>

    <link rel="stylesheet" href="css/index.css?11">
    <link rel="stylesheet" href="css/index_sp.css?111" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?1.1">
    <link rel="stylesheet" href="css/form.css?1.2">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents">


        <section class="setting_sec">

            <div class="inr">

                <form class="form h-adr">

                    <h2 class="ttl">ユーザー情報設定</h2>

                    <div class="table bottom_border w100 mg_b30">
                        <dl>
                            <dt>名前</dt>
                            <dd><input type="text" name="name" value="鈴木"></dd>
                        </dl>
                        <dl>
                            <dt>性別</dt>
                            <dd>
                                <select name="sex" class="w30">
                                    <option value="">性別を選択してください。</option>
                                    <option value="1">男性</option>
                                    <option value="2">女性</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>年齢</dt>
                            <dd>
                                <select name="age" class="w30">
                                    <option value="">年齢を選択してください。</option>
                                    <option value="1">10歳以下</option>
                                    <option value="2">11歳〜15歳</option>
                                    <option value="3">16歳〜20歳</option>
                                    <option value="4">21歳〜25歳</option>
                                    <option value="5">26歳〜30歳</option>
                                    <option value="6">31歳〜35歳</option>
                                    <option value="7">36歳〜40歳</option>
                                    <option value="8">41歳〜45歳</option>
                                    <option value="9">46歳〜50歳</option>
                                    <option value="10">51歳〜55歳</option>
                                    <option value="11">56歳〜60歳</option>
                                    <option value="12">61歳〜65歳</option>
                                    <option value="13">66歳〜70歳</option>
                                    <option value="14">71歳以上</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>職業</dt>
                            <dd>
                                <select name="job" class="w30">
                                    <option value="">職業を選択してください。</option>
                                    <option value="1">会社役員</option>
                                    <option value="2">会社員</option>
                                    <option value="3">公務員</option>
                                    <option value="4">自営業</option>
                                    <option value="5">大学生</option>
                                    <option value="6">アルバイト・パート</option>
                                    <option value="7">無職</option>
                                    <option value="8">その他</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>TEL</dt>
                            <dd><input type="text" name="tel" value="09078317421"></dd>
                        </dl>
                        <dl>
                            <dt>E-mail</dt>
                            <dd><input type="text" name="email" value="suzuki@under-rise.com"></dd>
                        </dl>
                        <dl>
                            <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8">
                            </script>
                            <dt>郵便番号</dt>
                            <dd>
                                <span class="p-country-name" style="display:none;">Japan</span>
                                <input type="text" name="zip_code" maxlength="7" class="zip p-postal-code" value="">
                                <p class="font_10 mg_t5">※ハイフンなしで入力ください。</p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>都道府県</dt>
                            <dd><select class="p-region-id w30">
                                    <option value="">都道府県を選択してください。</option>
                                    <option value="1">北海道</option>
                                    <option value="2">青森県</option>
                                    <option value="3">岩手県</option>
                                    <option value="4">宮城県</option>
                                    <option value="5">秋田県</option>
                                    <option value="6">山形県</option>
                                    <option value="7">福島県</option>
                                    <option value="8">茨城県</option>
                                    <option value="9">栃木県</option>
                                    <option value="10">群馬県</option>
                                    <option value="11">埼玉県</option>
                                    <option value="12">千葉県</option>
                                    <option value="13">東京都</option>
                                    <option value="14">神奈川県</option>
                                    <option value="15">新潟県</option>
                                    <option value="16">富山県</option>
                                    <option value="17">石川県</option>
                                    <option value="18">福井県</option>
                                    <option value="19">山梨県</option>
                                    <option value="20">長野県</option>
                                    <option value="21">岐阜県</option>
                                    <option value="22">静岡県</option>
                                    <option value="23">愛知県</option>
                                    <option value="24">三重県</option>
                                    <option value="25">滋賀県</option>
                                    <option value="26">京都府</option>
                                    <option value="27">大阪府</option>
                                    <option value="28">兵庫県</option>
                                    <option value="29">奈良県</option>
                                    <option value="30">和歌山県</option>
                                    <option value="31">鳥取県</option>
                                    <option value="32">島根県</option>
                                    <option value="33">岡山県</option>
                                    <option value="34">広島県</option>
                                    <option value="35">山口県</option>
                                    <option value="36">徳島県</option>
                                    <option value="37">香川県</option>
                                    <option value="38">愛媛県</option>
                                    <option value="39">高知県</option>
                                    <option value="40">福岡県</option>
                                    <option value="41">佐賀県</option>
                                    <option value="42">長崎県</option>
                                    <option value="43">熊本県</option>
                                    <option value="44">大分県</option>
                                    <option value="45">宮崎県</option>
                                    <option value="46">鹿児島県</option>
                                    <option value="47">沖縄県</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>市町村番地</dt>
                            <dd><input type="text" rows="3" name="address" value=""
                                    class="p-locality p-street-address p-extended-address">
                            </dd>
                        </dl>
                    </div>

                    <h2 class="ttl">ワクチン接種状況</h2>
                    <p>ワクチン接種情報を登録し、安全で快適なBBQのご協力を宜しくお願いいたします。</p>
                    <div class="table bottom_border w100">
                        <dl>
                            <dt>第一回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="covid19_1st_date" type="date" value="0000-00-00">
                                </label>
                            </dd>
                        </dl>
                        <dl>
                            <dt>第二回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="covid19_2nd_date" type="date" value="0000-00-00">
                                </label>
                            </dd>
                        </dl>
                        <dl>
                            <dt>第三回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="covid19_3rd_date" type="date" value="0000-00-00">
                                </label>
                            </dd>
                        </dl>
                    </div>

                    <ul class="font_11 mg_t10">
                        <li>※接種していない方は登録必要ありません。</li>
                        <li>※偽りの情報を登録した場合には強制解約とさせていただきます。</li>
                    </ul>

                    <div class="mg_t30">
                        <button>更新する</button>
                    </div>
                </form>

            </div>
            <!-- inr -->
        </section>
        <!-- 施設ご利用履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>


    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

</body>