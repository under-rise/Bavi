<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>My Page | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?2.1" />
    <script type="text/javascript" src="/MyPage/js/config.js" /></script>

 
</head>

<body id="my_page">

    <div id="loading"></div>
    <div id="wrapper">

        <?php include __DIR__ . '/../MyPage/tpl/header.php'; ?>

        <article id="top" class="cont">

            <h2>My Page</h2>

            <section>
                <div class="inr">

                    <h3>保有ポイント</h3>

                    <p class="point">3,000<span style="font-size:14px"> Pt</span></p>

                    <h3>ユーザー登録情報</h3>
                    <dl>
                        <dt>名前</dt>
                        <dd>鈴木さん</dd>
                    </dl>

                    <dl>
                        <dt>性別</dt>
                        <dd>男性</dd>
                    </dl>

                    <dl>
                        <dt>職業</dt>
                        <dd>会社役員</dd>
                    </dl>

                    <dl>
                        <dt>TEL</dt>
                        <dd>090-1111-2222</dd>
                    </dl>

                    <dl>
                        <dt>E-mail</dt>
                        <dd>info@bavi.jp</dd>
                    </dl>

                    <dl>
                        <dt>郵便番号</dt>
                        <dd>1590094</dd>
                    </dl>

                    <p class="btn" style="text-align: right; padding: 5px 3px;"><a href="/MyPage/setting.php">情報を変更する</a></p>

                    <h3>ワクチン対応状況</h3>

                    <dl>
                        <dt>ワクチン1回目</dt>
                        <dd>2021年11月1日</dd>
                    </dl>

                    <dl>
                        <dt>ワクチン2回目</dt>
                        <dd>2021年12月1日</dd>
                    </dl>

                    <dl>
                        <dt>ワクチン3回目</dt>
                        <dd>2022年2月1日</dd>
                    </dl>

                    <h3>利用履歴</h3>

                    <dl class="type01">
                        <dt>2022年1月1日</dt>
                        <dd><span class="get_point">10pt</span></dd>
                        <dd><a href="https://bavi.jp/spot/detail/1468">秋川橋河川公園バーベキューランド</a></dd>
                    </dl>

                    <dl class="type01">
                        <dt>2022年2月1日</dt>
                        <dd><span class="get_point">310pt</span></dd>
                        <dd><a href="https://bavi.jp/spot/detail/1468">REDROCKキャンプ場</a></dd>

                    </dl>

                    <p class="btn" style="text-align: right; padding: 5px 3px;"><a href="/MyPage/use_list.php">利用履歴一覧</a></p>


                    <h3>口コミ履歴</h3>

                    <dl class="type01">
                        <dt>2022年1月1日</dt>
                        <dd><span class="get_point">310pt</span></dd>
                        <dd><a href="https://bavi.jp/spot/detail/1468#voice">秋川橋河川公園バーベキューランドに口コミしました。</a></dd>

                    </dl>

                    <dl class="type01">
                        <dt>2022年2月1日</dt>
                        <dd><span class="get_point">10pt</span></dd>
                        <dd><a href="https://bavi.jp/spot/detail/1468#voice">REDROCKキャンプ場に口コミしました。</a></dd>

                    </dl>

                    <p class="btn" style="text-align: right; padding: 5px 3px;"><a href="/MyPage/voice_list.php">口コミ履歴一覧</a></p>

                </div>
            </section>

        </article>

    </div>

    <?php include __DIR__ . '/../MyPage/tpl/footer.php'; ?>

   

</body>

</html>