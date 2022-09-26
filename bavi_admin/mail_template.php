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
                <div class="row text-right">
                    <a href="mail_template_create.php" class="btn btn-default"> + 新規追加 </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>メール名</th>
                                <th>メールタイトル</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ご予約時</td>
                                <td>ご予約有難う御座います。</td>
                                <td>表示</td>
                                <td>
                                    <a href="mail_template_create.php">編集</a> |
                                    <a onclick="return confirm(&quot;非表示にしてもいいですか？&quot;);" href="#">非表示</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>御礼</td>
                                <td>ご注文確認を承りました。</td>
                                <td>表示</td>
                                <td>
                                    <a href="mail_template_create.php">編集</a> |
                                    <a onclick="return confirm(&quot;非表示にしてもいいですか？&quot;);" href="#">非表示</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>ご注文確認</td>
                                <td>ご注文確認お願いします。</td>
                                <td>表示</td>
                                <td>
                                    <a href="mail_template_create.php">編集</a> |
                                    <a onclick="return confirm(&quot;非表示にしてもいいですか？&quot;);" href="#">非表示</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>キャンセル</td>
                                <td>キャンセル完了致しました。</td>
                                <td>表示</td>
                                <td>
                                    <a href="mail_template_create.php">編集</a> |
                                    <a onclick="return confirm(&quot;非表示にしてもいいですか？&quot;);" href="#">非表示</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>その他</td>
                                <td>その他のタイトル</td>
                                <td>表示</td>
                                <td>
                                    <a href="mail_template_create.php">編集</a> |
                                    <a onclick="return confirm(&quot;非表示にしてもいいですか？&quot;);" href="#">非表示</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row text-right">
                    <a href="mail_template_create.php" class="btn btn-default"> + 新規追加 </a>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>
</body>

</html>