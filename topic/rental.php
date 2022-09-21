<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>レンタル（デリバリー）プラン | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include '/home/tegarubbq/fuel/app/views/templates/head_include.php'; ?>

    <link rel="stylesheet" href="/topic/css/topic.css">

    <style>
    section {
        margin-bottom: 40px;
    }

    section:nth-child(odd) {
        background-color: #f1f1f1;
        padding: 30px 0;
    }

    #rental h3 {
        font-weight: bold;
        font-size: 1.8em;
        color: #049a35;
        margin-bottom: 1em;
    }

    #rental h4 {
        font-size: 1.2em;
        padding: 5px;
        border-radius: 5px;
        background-color: #f1f1f1;
        margin-bottom: 20px;
    }

    #rental ol.ol_list li {
        align-items: center;
        display: flex;
    }

    #rental ol.ol_list li p {
        width: 90%;
        text-align: left;
    }

    #rental ol.ol_list li span {
        display: block;
        width: 26px;
        height: 26px;
        line-height: 26px;
        background-color: #049a35;
        border-radius: 100px;
        text-align: center;
        color: #fff;
        margin-right: 10px;
        font-weight: bold;
    }


    /* sec */

    #rental .sec01 li {
        background-color: #fff;
        border-radius: 3px;
        margin-bottom: 10px;
        padding: 10px 20px;
        text-align: left;
        font-size: 1.1em;
        font-weight: bold;
    }

    #rental .sec02 ul.sec02_01 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #rental .sec02 ul.sec02_01 li {
        width: 49.5%;
        font-size: 14px;
        margin-bottom: 20px;
    }

    #rental .sec02 ul.sec02_01 li img {
        display: block;
        margin-bottom: 4px;
    }

    #rental .sec02 .sec02_02 {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #rental .sec02 .sec02_02 figure {
        width: 68%;
    }

    #rental .sec02 .sec02_02 .cont {
        width: 30%;
    }

    #rental .sec02 .sec02_02 .cont li {
        background-color: #f1f1f1;
        border-radius: 10px;
        width: 100%;
        margin-bottom: 10px;
        padding: 5px;
        font-weight: bold;
    }

    #rental .sec02 .sec02_03 {
        margin-top: 30px;
    }

    #rental .sec02 .sec02_03 .info {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px
    }

    #rental .sec02 .sec02_03 figure {
        width: 38%;
    }

    #rental .sec02 .sec02_03 .cont {
        padding: 0;
        text-align: left;
    }

    #rental .sec02 .sec02_03 .cont a {
        color: #eb5a02;
    }


    #rental .sec03 ol.list li {
        height: auto;
    }

    #rental .sec03 ol li {
        font-weight: bold;
        margin-bottom: 5px;
        padding: 15px 5px;
        border-radius: 5px;
        background-color: #fff;
        position: relative;
        margin-bottom: 20px;
    }

    #rental .sec03 ol li:not(:last-child):after {
        position: absolute;
        left: 0;
        right: 0;
        content: "";
        width: 20px;
        margin: 0 auto;
        bottom: -15px;
        border-top: 10px solid #ccc;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
    }

    #rental .sec04 dl {
        text-align: left;
        margin-bottom: 10px;
        border-bottom: 2px solid #f1f1f1;
        padding: 5px 0 10px 0;
    }

    #rental .sec04 dt {
        font-weight: bold;
        position: relative;
        margin-bottom: 10px;
        padding-left: 35px;
        color: #178ac0;
    }

    #rental .sec04 dd {
        padding-left: 35px;
        position: relative;
    }

    #rental .sec04 dt:before {
        content: "Q";
        background-color: #178ac0;
    }

    #rental .sec04 dd:before {
        content: "A";
        background-color: #cf2e57;
    }

    #rental .sec04 dt:before,
    #rental .sec04 dd:before {
        position: absolute;
        display: block;
        left: 0px;
        top: -3px;
        width: 26px;
        height: 26px;
        line-height: 26px;
        border-radius: 100px;
        text-align: center;
        color: #fff;
        margin-right: 10px;
        font-weight: bold;
    }

    #rental .sec04 dd {
        position: relative;
    }

    #rental .caption {
        font-size: 11px;
        font-weight: normal !important;
        font-style: normal;
        line-height: 1.5;
        display: block;
        margin-top: 5px;
    }

    #rental .sec04 a {
        color: #000;
        text-decoration: underline;
        color: #cf2e57;
    }

    #rental a.link_btn {
        font-weight: bold;
        font-size: 1em;
        padding: 2px 0;
    }

    @media screen and (max-width:680px) {

        #rental h4,
        #rental p {
            font-size: 95%
        }

        #rental h3 {
            font-size: 1.3em;
        }

        #rental .sec02 ul.sec02_01 li {
            font-size: 0.9em;
        }

        #rental .sec02 .sec02_03 .info {
            flex-flow: column;
        }

        #rental .sec02 .sec02_03 figure {
            width: 65%;
        }

        #rental .sec02 .sec02_03 .cont {
            text-align: center;
        }


        #rental .sec02 .sec02_02 {
            flex-flow: column;
        }

        #rental .sec02 ul.sec02_01 li {
            width: 49.5%;
            font-size: 14px;
            margin-bottom: 20px;
        }

        #rental .sec02 ul.sec02_01 li img {
            display: block;
        }

        #rental .sec02 .sec02_02 figure {
            width: 80%;
            margin: 0;
            order: 2;
        }

        #rental .sec02 .sec02_02 .cont {
            width: 80%;
            padding: 0;
            order: 1;
        }

        #rental .sec02 .sec02_02 .cont ul {
            display: flex;
            gap: 10px;
            justify-content: space-around;
        }



    }
    </style>
</head>

<body>

    <div id="loading"></div>
    <div id="wrapper">

        <?php include '/home/tegarubbq/fuel/app/views/templates/header.php'; ?>

        <article id="rental" class="no_fixed cont">

            <h2 class="ttl">レンタル（デリバリー）プラン</h2>

            <div>
                <div class="inr">
                    <img src="../images/delivery_banner.jpg?" style="margin-bottom: 30px;">
                </div>
            </div>

            <section class="sec01">
                <div class="inr">

                    <div style="width: 240px; margin: 0 auto">
                        <img src="../images/icon_delivery_l.png" style="margin-bottom: 30px;">
                    </div>
                    <h3>Baviのレンタル（デリバリー）<br>プランとは？</h3>

                    <ol class="ol_list">
                        <li><span>1</span>
                            <p>指定の会場、公園にバーベキュー道具を運びます。</p>
                        </li>
                        <li><span>2</span>
                            <p>指定の時間にバーベキューが始められるように準備します。</p>
                        </li>
                        <li><span>3</span>
                            <p>当日はお客様と合流し引き渡しを行います。</p>
                        </li>
                        <li><span>4</span>
                            <p>終了したら、連絡をいただき片付けまで当方で対応いたします。</p>
                        </li>
                    </ol>

                    <a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=1&option_id%5B11%5D%5B%5D=31"
                        class="link_btn">レンタルプラン対応会場を検索</a>

                </div>
            </section>

            <section class="sec02">
                <div class="inr">
                    <h3>プラン詳細</h3>

                    <h4>1セット（5人用）に含まれるもの</h4>
                    <ul class="sec02_01">
                        <li><img src="../images/rental_01.jpg">テント（1張）</li>
                        <li><img src="../images/rental_02.jpg">テーブル（1台）</li>
                        <li><img src="../images/rental_03.jpg">チェア（5脚）</li>
                        <li><img src="../images/rental_04.jpg">グリル（1台）※炭3kg付き</li>
                        <li><img src="../images/rental_05.jpg">クーラーBOX</li>
                        <li><img src="../images/rental_06.jpg">消耗品（1式）<div class="caption">
                                ※紙皿10枚、お箸10膳、おしぼり10枚、プラコップ10ケ</div>
                        </li>
                    </ul>

                    <h4>ご利用に含まれるサービス</h4>

                    <div class="sec02_02">
                        <figure>
                            <img src="../images/rental_07.jpg?1">
                        </figure>
                        <div class="cont">
                            <ul>
                                <li>準備</li>
                                <li>片付け</li>
                                <li>ゴミ処理</li>
                            </ul>
                        </div>
                    </div>


                    <div class="sec02_03">

                        <h4>サービス会社の紹介</h4>

                        <div class="info">
                            <figure>
                                <a href="https://www.gpc-bbq.com/" target="_blank"><img src="../images/logo.svg"></a>
                            </figure>
                            <div class="cont">
                                <dl>
                                    <dt>手ぶらで団体バーベキューなら「手軽にBBQ.com」</dt>
                                    <dd><a href="https://www.gpc-bbq.com/" target="_blank">https://www.gpc-bbq.com/</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=1&option_id%5B11%5D%5B%5D=31"
                        class="link_btn">レンタルプラン対応会場を検索</a>

                </div>

            </section>

            <section class="sec03">
                <div class="inr">
                    <h3>ご利用の流れ</h3>
                    <ol class="ol_list">
                        <li><span>1</span>
                            <p>利用したい会場を選択</p>
                        </li>
                        <li>
                            <span>2</span>
                            <p>利用したい会場がレンタル（デリバリー）可否を確認する。</p>
                        </li>

                        <li>
                            <span>3</span>
                            <p>利用時間、注意事項を確認し、フォームより予約する。</p>
                        </li>

                        <li>
                            <span>4</span>
                            <p>当方より“予約確定”の連絡をもって予約成立。<br>
                                <em class="caption">※予約確定の連絡がない場合には予約確定になりません。土日を除き1日経っても連絡がない場合にはご連絡ください。</em>
                            </p>
                        </li>

                        <li>
                            <span>5</span>
                            <p>最終確認連絡”を確認する。相違があれば必ず連絡する。<br>
                                <em class="caption">※決済がない場合は予約拒絶としてデリバリー対応不可となります。</em>
                            </p>
                        </li>

                        <li>
                            <span>6</span>
                            <p>当日指定の会場にて合流する。</p>
                        </li>

                        <li>
                            <span>7</span>
                            <p>終了したら担当者へ連絡し、解散となります。</p>
                        </li>


                    </ol>
                </div>
            </section>

            <section class="sec04">
                <div class="inr">
                    <h3>よくある質問</h3>
                    <dl>
                        <dt>何人から利用できますか？</dt>
                        <dd>人数は何名でも構いません。最低セット数をご注文ください。</dd>
                    </dl>

                    <dl>
                        <dt>準備・片付けは含まれますか？</dt>
                        <dd>含まれます。炭の火起こしまで対応いたします。</dd>
                    </dl>

                    <dl>
                        <dt>バーベキュー中に連絡を取りたい場合は？</dt>
                        <dd>最終確認メールに連絡先の記載があります。そちらにおかけください。</dd>
                    </dl>

                    <dl>
                        <dt>当日道具の追加は可能ですか？</dt>
                        <dd>基本的にはできません。但し、在庫を持ち合わせいる可能性があります。当日担当者にご相談ください。</dd>
                    </dl>

                    <dl>
                        <dt>支払いのタイミングは？</dt>
                        <dd>事前決済のみとなります。最終確認連絡の後から当日までに対応お願いいたします。当日0時を超えた段階で締め切りとなります。
                        </dd>
                    </dl>

                    <dl>
                        <dt>当日雨の場合はキャンセル可能ですか？</dt>
                        <dd>キャンセルは可能です。但し、キャンセルチャージが発生いたします。（台風・転載を除く）<br>
                            <a href="https://bavi.jp/lp/page/terms.php#cancel_sec"
                                target="_blank">キャンセルチャージの扱いはこちら</a><br>
                            当日台風や天災が起こった場合には特例としてキャンセルチャージが無料となります。また、台風の接近、進路状況によってはキャンセルチャージが緩和される場合があります。

                        </dd>
                    </dl>

                    <dl>
                        <dt>当日渋滞や、電車の遅延で遅れる場合は？</dt>
                        <dd>特別問題ありません。できる限りでっこうですのでご連絡をお願い致します。いかなる場合でも遅延によりご利用時間の無償延長はできません。お時間にはくれぐれもご注意ください。
                        </dd>
                    </dl>

                    <dl>
                        <dt>キャンセルチャージの払い戻し方法を教えてください。</dt>
                        <dd>キャンセル連絡をいただいた時点で、キャンセルチャージを適用致します。キャンセルチャージ代金と決済手数料、振込手数料を差し引き2週間以内に口座へ払い戻し致します。口座のご連絡をお願い致します。
                        </dd>
                    </dl>
                </div>

            </section>

            <a href="https://bavi.jp/spot?option_id%5B1%5D%5B%5D=1&option_id%5B11%5D%5B%5D=31"
                class="link_btn">レンタルプラン対応会場を検索</a>



            </section>

        </article>

        <?php include '/home/tegarubbq/fuel/app/views/templates/footer.php'; ?>

</body>

</html>