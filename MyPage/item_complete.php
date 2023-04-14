<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ポイント交換完了 | 日本最大級のBBQプラットフォーム Bavi</title>
    <meta name="apple-mobile-web-app-title" content="Bavi">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <?php
    include 'tpl/head.php'
    ?>

    <link rel="stylesheet" href="css/index.css?1">
    <link rel="stylesheet" href="css/index_sp.css?1" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?1121">
    <link rel="stylesheet" href="css/form.css?1.2">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents" x-data="app" x-cloak>

        <section class="item_detail_sec">
            <h2 class="ttl">ポイント交換完了</h2>

            <p class="bold center mg_b30 pink">ポイント交換完了しました。有難う御座います。</p>

            <div class="inr">
                <div class="image">
                    <figure>
                        <img src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg" alt="">
                    </figure>
                </div>

                <div class="info">
                    <div class="item_info">

                        <div class="name">
                            <h3>手づくりハンバーグ８００ｇ（２0０ｇ×４個）【完全無添加！国産Ａ4～Ａ5黒毛和牛100％】</h3>
                        </div>

                        <div class="stars" style="margin-bottom: 20px">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>

                        <div class="table border">
                            <dl>
                                <dt>個数</dt>
                                <dd class="point_sec"><b x-text="num">3,000</b><span>個</span></dd>
                            </dl>
                            <dl>
                                <dt>使用ポイント</dt>
                                <dd class="point_sec"><b x-text="point.toLocaleString()">0000</b><span>point</span>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="btn type01" style="text-align: center;"><a href="item.php">アイテム一覧に戻る</a></div>


                </div>
            </div>
        </section>


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script>
        const item = () => ({
            id: null,
            num: 1,
            point: 0,
            init() {

                this.id = getParam('id');
                this.num = getParam('num');
                this.point = Number(getParam('point'));

            },
        });

        document.addEventListener('alpine:init', () => {
            Alpine.data('app', item);
        });
    </script>

    <script src="js/config.js"></script>


</body>