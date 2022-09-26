<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>一斉送信 | Bavi</title>
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

    <style>
    .btn-success {
        width: 300px;
        margin: 10px auto;
    }

    #template_select {
        font-size: 16px;
        padding: 5px 20px;
        background-color: #fff;
        border: 1px solid #999;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .send_list {
        background-color: #fff;
        padding: 10px 20px;
        border-radius: 10px;
        box-shadow: 0 0 3px #999;
    }

    .send_list li {
        margin-bottom: 5px;
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

    <div id="container">
        <div class="row">
            <a href="/customer/order/edit/200" class="btn btn-default">
                << 受注に戻る </a>　
        </div>
        <h3>一括メッセージ送信</h3>


        <div class="send_list">
            <h4 style="font-weight: bold;">送信先案件</h4>
            <ul>
                <li>城倉主計様 / 彩湖・道満グリーンパーク / 2022-04-17 19:39:16</li>
                <li>◯◯◯◯◯様 / 彩湖・道満グリーンパーク / 2022-04-17 19:39:16</li>
                <li>◯◯◯◯◯様 / 彩湖・道満グリーンパーク / 2022-04-17 19:39:16</li>
            </ul>
        </div>

        <style>
        .alert {
            font-weight: bold;
            color: red;
        }
        </style>

        <hr>

        <div class="template_select">
            <select name="template_select" id="template_select">
                <option value="">テンプレートを選択する</option>
                <option value="1">ご予約時</option>
                <option value="2">御礼</option>
                <option value="3">ご注文確認</option>
                <option value="4">キャンセル</option>
                <option value="5">その他</option>
            </select>
        </div>
        <form method="post" action="?">
            <input type="hidden" name="spot_contact_id" value="200">
            <input type="title" class="form-control" style="margin-bottom: 10px;" name="mail_title">
            <textarea name="message" class="form-control" rows="10"></textarea>
            <p class="red" style="margin-top: 5px;">【ご注意】変数を削除、変換してしまうと正しく送れない可能性が御座います。</p>
            <button type="submit" class="btn btn-success" style="font-weight: bold;"> 送信 </button>

        </form>
    </div>
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

    <script>
    $(function() {

        const url = './data/mail_template.json';
        const mailTitle = $('input[name=mail_title]');
        const textarea = $('textarea[name=message]');

        $('#template_select').on('change', function() {
            let value = $(this).val();

            if (value === '') {
                // textarea.attr('readonly', false);
                // mailTitle.attr('readonly', false);
                textarea.val("");
                mailTitle.val("");
                return;
            } else {
                // textarea.attr('readonly', true);
                // mailTitle.attr('readonly', true);
            }

            fetch(url, {
                    cache: "no-store"
                })
                .then(response => {
                    return response.json();
                })
                .then(json => {
                    let data = json.filter(i => {
                        return i.id == value
                    });
                    mailTitle.val(data[0].title);
                    textarea.val(data[0].message);
                });

        });

    });
    </script>
</body>

</html>