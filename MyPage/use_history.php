<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ポイント利用履歴 | 日本最大級のBBQプラットフォーム Bavi</title>
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
    <link rel="stylesheet" href="css/page.css?11">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents">


        <section class="reserve_sec">

            <div class="inr">
                <h2 class="ttl">施設ご利用履歴</h2>


                <ul class="use_history" style="margin-bottom: 30px;">
                    <li>
                        <figure>
                            <a href="reserve_detail.php"><img src="images/facility001.jpg" alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="reserve_detail.php">KIRANAH GARDEN TOYOSU（キラナガーデン豊洲）</a></dt>
                            <dd>ご利用日：2023年1月1日</dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="reserve_detail.php"><img src="images/facility002.jpg" alt=""></a>
                        </figure>
                        <dl>
                            <dt><a href="reserve_detail.php">恋人ビーチ うふた浜BBQ場</a></dt>
                            <dd>ご利用日：2023年1月1日</dd>
                        </dl>
                    </li>
                </ul>

                <div class="pager">
                    <ul>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>

            </div>
            <!-- inr -->
        </section>
        <!-- 施設ご利用履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>


</body>