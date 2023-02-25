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
                        <img :src="'images/'+selectItem.image" alt="">
                    </figure>
                </div>

                <div class="info">
                    <div class="item_info">

                        <div class="name">
                            <h3 x-text="selectItem.name">BBQコンロ</h3>

                            <div class="stars">
                                <span class="star" x-html="getStar(selectItem.popular)">
                                </span>
                                <span class="score" x-text="selectItem.popular + ' / 5.0'"></span>
                            </div>
                        </div>

                        <p x-text="selectItem.information">ウェーバー(Weber) バーベキュー コンロ 直径57cm オリジナルケトルプレミアム 炭 キャンプ 10-12人用
                            【日本正規品10年保証】</p>

                        <div class="table border">
                            <dl>
                                <dt>個数</dt>
                                <dd class="point_sec"><b x-text="num">3,000</b><span>個</span></dd>
                            </dl>
                            <dl>
                                <dt>使用ポイント</dt>
                                <dd class="point_sec"><b x-text="point().toLocaleString()">3,000</b><span>point</span>
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
            num: 1,
            datas: {},
            selectItem: {
                image: '',
                point: 0,
            },
            init() {

                fetch('data/item.json', {
                        cache: "no-store"
                    })
                    .then((response) => {
                        return response.json();
                    })
                    .then((data) => {
                        this.datas = data;
                        let id = getParam('id');
                        this.num = getParam('num');
                        this.selectItem = this.datas.find(obj => obj.id == id);

                        if (this.selectItem == undefined) {
                            throw new Error();
                        }
                    }).catch((e) => {
                        location.href = 'point.php'
                    });
            },
            point() {
                return this.selectItem.point * this.num;
            }

        });

        document.addEventListener('alpine:init', () => {
            Alpine.data('app', item);
        });
    </script>

    <script src="js/config.js"></script>


</body>