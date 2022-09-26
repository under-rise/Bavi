<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" />
    <title>News一覧|Bavi | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/bootstrap.css?1616644533" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/admin_default.css?1648760631" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/bootstrap.js?1616644536"></script>

    <style>
    #form ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #form ul li {
        margin-top: 20px;
    }

    #form input,
    #form textarea {
        border: 1px solid #999;
        width: 100%;
        padding: 10px;
    }

    .btn-success {
        margin: 0 auto;
        width: 300px;
    }

    .variable_list button {
        border: 1px solid #999;
        font-size: 13px;
        border-radius: 3px;
    }

    .variable_list table {
        width: 100%;
    }

    .variable_list table td,
    .variable_list table th {
        padding: 4px 0;
        border-bottom: 1px solid #999;
    }
    </style>

    <link rel="stylesheet" href="css/modal.css?1.2">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/top">Bavi | 管理画面</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin/logout">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="/admin">TOP</a></li>
                    <li>
                        <a class="menu-toggle" href="#" data-toggle="dropdown">BBQ場</a>
                        <ul class="nav nav-sub">
                            <li>
                                <a href="/admin/spots/">BBQ場情報一覧</a>
                            </li>
                            <li>
                                <a href="/admin/spots/review/">BBQ場口コミ</a>
                            </li>
                            <li>
                                <a href="/admin/spots/lp/">BBQ場 LP作成</a>
                            </li>
                            <li>
                                <a href="/admin/spots/pickup/">店舗ページトップ PICKUP</a>
                            </li>
                            <li>
                                <a href="/admin/spots/advertisement/">広告枠設定</a>
                            </li>
                            <li>
                                <a href="/admin/spots/order">BBQ場 案件一覧</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle" href="#" data-toggle="dropdown">食材SPOT</a>
                        <ul class="nav nav-sub">
                            <li>
                                <a href="/admin/foods/">食材SPOT情報一覧</a>
                            </li>
                            <!--
                        <li>
                            <a href="/admin/foods/review/">食材SPOT口コミ</a>
                        </li>
                        -->
                            <li>
                                <a href="/admin/foods/advertisement/">広告枠設定</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/customers">顧客一覧</a>
                    </li>
                    <li>
                        <a href="/admin/users">ユーザー一覧</a>
                    </li>
                    <li>
                        <a href="/admin/news">News一覧</a>
                    </li>
                    <li class="active">
                        <a href="#">メールテンプレート設定</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-10 col-md-offset-2 main">
                <h2>メールテンプレート設定</h2>
                <br>
                <style>
                .alert {
                    font-weight: bold;
                    color: red;
                }
                </style>
                <div class="table-responsive">

                    <form id="form">
                        <ul>
                            <li>
                                <p>メール項目</p>
                                <input type="text">
                            </li>
                            <li>
                                <p>メールタイトル</p>
                                <input type="text">
                            </li>
                            <li>
                                <p>メール本文
                                    <!-- モーダルを開くボタン -->
                                <div class="modal-open">変数設定</div>
                                <p style="font-size: 12px;">※エスケープキーでもモーダルが開きます。<br>挿入したい箇所にカーソルを移動し「入力」ボタンで直接変数を挿入できます。
                                </p>
                                </p>
                                <textarea id="inputArea" rows="20">変数１　様

この度はご予約誠にありがとうとざいました。

ご予約内容は以下にて受けたまっております。
＜ご予約内容＞
ご利用人数：変数1
利用日：変数２
時間：変数3
施設：変数4
プラン：変数5
オプション：変数6
備考：変数7
金額：変数8

となっております。日程が近くなりましたら、最終のご確認連絡をさせていただきます。

〜〜〜〜〜〜〜〜〜
署名
〜〜〜〜〜〜〜〜〜
                        </textarea>
                            </li>
                        </ul>

                        <div style="text-align:center; margin-top: 20px;">
                            <button type="submit" class="btn btn-success" style="font-weight: bold;"> 更新する </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- モーダル本体 -->
    <div class="modal-container">
        <div class="modal-body">
            <!-- 閉じるボタン -->
            <div class="modal-close">×</div>
            <!-- モーダル内のコンテンツ -->
            <div class="modal-content variable_list">

                <table>
                    <tr>
                        <th>お名前</th>
                        <td class="variable">[%__name__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>予約人数</th>
                        <td class="variable">[%__people__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>利用日</th>
                        <td class="variable">[%__date_use__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>利時間用日</th>
                        <td class="variable">[%__date_start__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>施設</th>
                        <td class="variable">[%__institution__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>プラン</th>
                        <td class="variable">[%__plan__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>オプション</th>
                        <td class="variable">[%__option__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>備考</th>
                        <td class="variable">[%__note__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>合計金額</th>
                        <td class="variable">[%__price__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>お客様情報</th>
                        <td class="variable">[%__guest__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>
                    <tr>
                        <th>施設情報</th>
                        <td class="variable">[%__institution__%]</td>
                        <td><button class="copy_btn">コピーする</button></td>
                        <td><button class="input_btn">入力する</button></td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

    <script>
    const inputArea = '#inputArea';
    $(function() {
        $('.nav-sub').hide();

        $('.menu-toggle').click(function() {
            $(this).parent().find('.nav-sub').toggle(500);
        });

        var active_menu = $('li.active').parent();
        if (active_menu.hasClass('nav-sub')) {
            active_menu.show();
        }
    });

    // 変数に要素を入れる
    var open = $('.modal-open'),
        close = $('.modal-close'),
        container = $('.modal-container');

    $(function() {

        //開くボタンをクリックしたらモーダルを表示する
        open.on('click', function() {
            container.addClass('active');
            return false;
        });

        //閉じるボタンをクリックしたらモーダルを閉じる
        close.on('click', function() {
            container.removeClass('active');
        });

        //モーダルの外側をクリックしたらモーダルを閉じる
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.modal-body').length) {
                container.removeClass('active');
            }
        });

        // copy_btn
        $('.copy_btn').on('click', function() {
            text = $(this).parent().siblings('.variable').text();
            navigator.clipboard.writeText(text)
                .then(
                    success => alert('テキストのコピーに成功😆'),
                    error => alert('テキストのコピーに失敗😫')
                )
                .then(() => {
                    container.removeClass('active');
                });

        });

        // copy_btn
        $('.input_btn').on('click', function() {

            text = $(this).parent().siblings('.variable').text();
            var pos = $(inputArea).get(0).selectionStart;
            var before = $(inputArea).val().substr(0, pos);
            var after = $(inputArea).val().substr(pos);
            $(inputArea).val(before + text + after);
            container.removeClass('active');
        });

    });

    // キー操作
    $(window).keyup(function(e) {
        if (e.keyCode == 27) {
            if (container.hasClass('active')) {
                container.removeClass('active');
            } else {
                container.addClass('active');
            }
        }
    });
    </script>
</body>

</html>