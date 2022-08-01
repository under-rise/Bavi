<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/apple-touch-icon.png">

    <title>オーダー | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/tpl/head.php'; ?>
    <link rel="stylesheet" href="resources/css/venue_detail.css?2">
    <link rel="stylesheet" href="resources/css/venue_detail_sp.css?2.3">


    <link rel="stylesheet" href="assets/css/calendar.css?4.0">

    <link rel="stylesheet" href="resources/css/order.css?3.41">
    <link rel="stylesheet" href="resources/css/order_sp.css?4.5">




    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <style>
    #bottom_line_btn {
        display: none;
    }
    </style>

    <script>
    $(function() {
        $('#order dl dd ul.order li').on('click', function() {
            $('#order dl dd ul.order').children().removeClass('selected');
            $(this).toggleClass('selected');
            if ($(this).hasClass('selected')) {
                $(this).find($('input[type="radio"]')).prop('checked', true);
            } else {
                $(this).find($('input[type="radio"]')).prop('checked', false);
            }
        });

    });
    </script>

    <!-- sample -->

</head>

<body>
    <div id="loading"></div>
    <div id="wrapper">
        <header>
            <h1>日本最大級のBBQプラットフォーム Bavi</h1>

            <a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
        </header>


        <article class="detail">
            <nav>
                <ul>
                    <li><a href="#venue">会場詳細</a></li>
                    <li><a href="#shop">売店情報</a></li>
                    <li><a href="#campaign">キャンペーン</a></li>
                    <li><a href="#access">アクセス</a></li>
                    <li><a href="#spot">周辺SPOT</a></li>
                    <li><a href="#voice">口コミ</a></li>
                </ul>
            </nav>

            <section id="order" class="cont">

                <h2 class="tit"><span class="kanto">東 京</span>多摩川緑地バーベキュー広場</h2>


                <form method="post" action="#">

                    <h3>ご注文・ご予約</h3>

                    <dl>
                        <dt><span>◯</span>プラン</dt>
                        <dd>
                            <ul class="order_sec">

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/img01.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">Aセット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク</p>
                                            <div class="price">¥3,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">合計金額◯◯◯円以上から予約承ります</p>
                                            <div class="input_sec">
                                                <input type="number" name="option_02" placeholder="0" pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/img02.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">定番食材セット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</p>
                                            <div class="price">¥3,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">合計金額◯◯◯円以上から予約承ります</p>
                                            <div class="input_sec">
                                                <input type="number" name="option_02" placeholder="0" pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/none.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">上記区画セット＋定番食材セット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</p>
                                            <div class="price">¥13,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">合計金額◯◯◯円以上から予約承ります</p>

                                            <div class="input_sec">
                                                <input type="number" name="option_02" value="0" placeholder="0"
                                                    pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </dd>

                        <dt><span>◯</span>オプション</dt>
                        <dd>
                            <ul class="order_sec">

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/img01.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">Aセット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク</p>
                                            <div class="price">¥3,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">◯◯◯ケ以上から予約承ります</p>
                                            <div class="input_sec">
                                                <input type="number" name="option_02" value="0" placeholder="0"
                                                    pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/img02.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">定番食材セット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</p>
                                            <div class="price">¥3,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">◯◯◯ケ以上から予約承ります</p>
                                            <div class="input_sec">
                                                <input type="number" name="option_02" placeholder="0" pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div>
                                        <figure>
                                            <img src="./assets/img/order/none.jpg">
                                        </figure>

                                        <div class="info">
                                            <div class="name">上記区画セット＋定番食材セット</div>
                                            <p>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</p>
                                            <div class="price">¥13,000円<span style="font-size:12px">（税込）</span></div>
                                            <p class="order_info">◯◯◯ケ以上から予約承ります</p>
                                            <div class="input_sec">
                                                <input type="number" name="option_02" placeholder="0" pattern="\d*">
                                                <span>セット</span>
                                            </div>

                                        </div>
                                    </div>

                                </li>


                            </ul>
                        </dd>


                        <dt><span>◯</span>利用年月日</dt>
                        <dd>
                            <label class="calendar_input">
                                <input name="use_date" type="text" value="" id="inputCalendar" readonly>
                            </label>

                        </dd>

                        <dt><span>◯</span>利用時間</dt>
                        <dd>
                            <select name="stay_time">
                                <option>選択してください。</option>
                                <option>1時間未満</option>
                                <option>1時間〜2時間未満</option>
                                <option>2時間〜3時間未満</option>
                                <option>3時間〜4時間未満</option>
                                <option>4時間〜5時間未満</option>
                                <option>5時間〜6時間未満</option>
                                <option>6時間〜7時間未満</option>
                                <option>7時間〜8時間未満</option>
                                <option>8時間以上</option>
                            </select>
                        </dd>

                        <dt><span>◯</span>利用人数</dt>
                        <dd>
                            <select name="use_people">
                                <option>選択してください。</option>
                                <option>4人未満</option>
                                <option>5〜7人</option>
                                <option>8〜9人</option>
                                <option>10〜14人</option>
                                <option>15〜19人</option>
                                <option>20〜29人</option>
                                <option>30〜49人</option>
                                <option>50〜99人</option>
                                <option>100〜199人</option>
                                <option>200人以上</option>
                            </select>
                        </dd>

                        <dt><span>◯</span>支払方法</dt>
                        <dd>
                            <select>
                                <option>おまとめ払い（法人様）</option>
                                <option>クレジットカード払い</option>
                                <option>現金払い</option>
                            </select>
                        </dd>


                        <dt><span>◯</span>備考</dt>
                        <dd>
                            <textarea placeholder="その他、ご質問・ご要望がありましたらご記入ください。"></textarea>
                        </dd>

                    </dl>

                    <h3>お客様情報</h3>
                    <dl id="user_information_form">
                        <dt><span>◯</span>お名前</dt>
                        <dd>
                            <input type="text" name="name" value="" placeholder="お名前を記入してください。" require>
                        </dd>
                        <dt><span>◯</span>TEL</dt>
                        <dd>
                            <input type="tel" name="tel" value="" placeholder="御連絡先を記入してください。" require>
                        </dd>
                        <dt><span>◯</span>E-mail</dt>
                        <dd>
                            <input type="email" name="email" value="" placeholder="メールアドレスを入力してください。" require>
                        </dd>

                        <dt><span>◯</span>住所</dt>
                        <dd>
                            <div style="text-align: left;"><span style="vertical-align:top; line-height: 2.5;">〒</span>
                                <input type="text" name="zip_code" size="10" maxlength="8" value="" placeholder="郵便番号"
                                    style="margin-bottom: 10px; width: 10em;"
                                    onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                            </div>
                            <input type="text" name="address" value="" placeholder="住所を入力してください。">
                        </dd>
                        <dt><span>◯</span>年代</dt>
                        <dd>
                            <select name="age" require>
                                <option value="">年代を選択してください。</option>
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
                        <dt><span>◯</span>性別</dt>
                        <dd>
                            <select name="sex">
                                <option value="1">男性</option>
                                <option value="2">女性</option>
                            </select>
                        </dd>
                    </dl>

                    <div class="terms">

                        <?php
                        include('./tpl/terms.html')
                        ?>


                        <h4>施設詳細利用規約</h4>

                        <dl>
                            <dt>予約期限ポリシー</dt>
                            <dd>利用者は施設ごとに定められた予約期限ポリシーに則り予約をすること。<br>
                                ◯道具・区画のみの予約は開催日の◯◯日前まで<br>
                                ◯食材や飲料を伴う予約は開催日の◯◯日前まで<br>
                                ※但し、施設の空き状況によって、上記を過ぎての予約が可能な場合がある。<br>
                                その際は電話による確認をお願い致します。確認なき予約は一切無効と致します。
                            </dd>
                        </dl>

                        <dl>
                            <dt>内容変更期限ポリシー</dt>
                            <dd>利用者は施設ごとに定めれた内容変更期限ポリシーに則り内容変更をすること<br>
                                ◯人数の増減変更は開催日の◯◯日前まで<br>
                                ◯プランの変更は開催日の◯◯日前まで
                            </dd>
                        </dl>

                        <dl>
                            <dt>キャンセルポリシー</dt>
                            <dd>
                                ご予約をキャンセルされる場合は、以下のキャンセル料金を頂戴いたします。<br><br>
                                【区画・道具のレンタルの場合】<br>
                                ご利用3日前以前：無償<br>
                                ご利用2日前：ご利用金額の30％<br>
                                ご利用前日：ご利用金額の50％<br>
                                ご利用当日：<br>ご利用金額の100％
                                <br>
                                <br>
                                【食材や飲料もセットでご注文の場合】<br>
                                利用3日前以前：無償<br>
                                ご利用2日前：ご利用金額の30％<br>
                                ご利用前日：ご利用金額の50％<br>
                                ご利用当日：ご利用金額の100％
                            </dd>
                        </dl>

                        <dl>
                            <dt>雨天ポリシー</dt>
                            <dd>雨天のキャンセルについてもキャンセルチャージ同様にキャンセルチャージがかかります。<br>
                                但し、以下の場合キャンセルチャージが減額となる場合がございます。<br>
                                ◯台風直撃や天変地異により開催が困難だと判断した時<br>
                                ◯台風や天変地異に近い状態が起き、開催が困難だと判断した時<br>
                                ◯施設が利用休止、又は利用することが困難な時<br>
                                ◯海が大荒れの場合や河川の増水で施設側が危険と判断した時
                            </dd>
                        </dl>

                        <dl>
                            <dt>器材の破損ポリシー</dt>
                            <dd>器材の破損、使用不可の状態になった場合は、仕入れ価格相当を実費にてお支払いいただきます。
                        </dl>


                    </div>
                    <!--  terms -->
                    <input type="checkbox" name="terms" id="terms" require>

                    <span>
                        <label for="terms">利用規約に同意する</label>
                    </span>

                    <button type="button" class="link_btn" id="confrim_btn">確認する</button>

                </form>

            </section>



            <a href="" class="back_btn"><img src="resources/images/back_btn.png" alt="一覧に戻る" /></a>

            <a href="" class="like_btn"><img src="resources/images/like_btn.png" alt="LIKE!" /></a>
        </article>


        <?php include __DIR__ . '/tpl/footer.php'; ?>


        <!-- order confrim -->
        <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/iziModal.min.css?1650856968" />
        <script type="text/javascript" src="https://bavi.jp/assets/js/iziModal.min.js?1650856998"></script>

        <div class="plan_modal" data-izimodal-group="group1">
            <div class="modal_close" data-izimodal-close="">×</div>
            <div class="_inr">

            </div>

        </div>

        <div class="calendar_modal" data-izimodal-group="calendar_modal">
            <div class="modal_close" data-izimodal-close="">×</div>

            <div class="_inr">

                <div class="calendar">

                    <div class="calendar__sec">
                        <div class="slider__arrow is-prev">前の月</div>
                        <div class="slider__arrow is-next">次の月</div>
                    </div>
                    <!-- calendar__sec -->

                </div>
                <!-- calender -->

            </div>

        </div>

        <!-- calendar_modal -->



        <script src="./resources/js/order_confirm.js?1.3"></script>

        <script>
        function getParam(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        $(function() {
            let date = getParam('date');
            if (date !== undefined && date !== null) {
                $('input[name="use_date"]').val(date);
            }
        });
        </script>

        <!-- ここからcalendar js 追加部分 -->
        <script src="assets/js/calendar.js?1.31"></script>
        <script>
        //会場ID 
        const SHOP_ID = "1234";
        // json URL
        const url = "assets/data/calendar.json?1.1";
        //表示する月の数
        const calendarLength = 3;
        // アイコン設定
        const state_html = [
            '<div class="state"><img src="/assets/img/calendar/icon01.png"></div>',
            '<div class="state"><img src="/assets/img/calendar/icon02.png"></div>',
            '<div class="state"><img src="/assets/img/calendar/icon03.png"></div>',
            '<div class="state"><img src="/assets/img/calendar/icon04.png"></div>',
        ];
        $(function() {
            reserveCalendar.getJsonData(url, function() {

                $(".calendar_modal").iziModal({
                    closeButton: true,
                    padding: 10,
                    loop: true,
                    onOpening: () => {
                        $(".calendar_modal  ._inr").append(
                            `<div class="loader"><img src="assets/img/order/shopping-cart-shopping.gif" style="width:90px;"></div>`
                        );
                        $(".calendar").hide();
                    },
                    onOpened: () => {
                        setTimeout(() => {
                            $(".calendar").show();
                            sliderInit();
                            $(".calendar_modal  ._inr .loader").remove();
                        }, 500);

                    }
                });

            });

            $('#inputCalendar').on('click', function(e) {
                $('.calendar_modal').iziModal('open');
            });

            $(document).on('click', '.calendar_modal .calendar__sec_item a', function(e) {
                e.preventDefault();
                let get = $(this).data("date");
                if (get) {
                    $('input[name="use_date"]').val(get);
                    $('.calendar_modal').iziModal('close');
                } else {
                    alert("選択日は予約できません。")
                }

            });
        });
        </script>
</body>

</html>