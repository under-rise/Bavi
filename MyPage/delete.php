<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>退会 | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?1.1" />

    <style>
        
    </style>
</head>

<body id="my_page">

    <div id="loading"></div>
    <div id="wrapper">

        <?php include __DIR__ . '/../MyPage/tpl/header.php'; ?>

        <article id="top" class="cont">

            <h2>ユーザー退会</h2>

            <section class="delete">
                <div class="inr">

                <?php
                    if(!isset($_GET['delete']) && !$_GET['delete'] == "on"){
                ?>
                <form method="get" action="/MyPage/delete.php">

                <p>Bavi会員から退会します。</p>
                <p>一度、退会されますと設定頂いた<strong class="txt_pink">会員情報や保有ポイントが失効</strong>致しますが宜しいですか？</p>
                <input type="hidden" name="delete" value="on">
                <p style="margin-top: 30px;">上記、内容を承諾の上、退会する。</p>
                <button type="submit" class="link_btn">退会する</button>

                </form>

                <?php
                   }else{
                ?>
                    <p>退会完了致しました。<br>Baviサイトご利用頂き有難う御座いました。</p>
                    <p style="margin-top:10px;">引き続き、一般ユーザーにてサイトをご利用くださいませ。</p>

                    <p style="margin-top:20px;"><a href="/" class="txt_pink">トップページへ戻る</a></p>
                    
                <?php
                    }
                ?>
                
                </div>
            </section>

        </article>

    </div>

    <?php include __DIR__ . '/../topic/tpl/footer.php'; ?>

</body>

</html>