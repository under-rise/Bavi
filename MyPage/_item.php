<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>| 日本最大級のBBQプラットフォーム Bavi</title>
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

    <link rel="stylesheet" href="css/index.css?1">
    <link rel="stylesheet" href="css/index_sp.css?1" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?1.31">
    <link rel="stylesheet" href="css/form.css?2.31">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents" x-data="app" x-cloak>

        <section class="item_detail_sec">
            <h2 class="ttl">商品</h2>
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
                                <dt>登録日時</dt>
                                <dd>2023-10-1</dd>
                            </dl>
                            <dl>
                                <dt>必要入ポイント</dt>
                                <dd class="point_sec"><b x-text="point().toLocaleString()">3,000</b><span>point</span>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div>
                        <form @submit.prevent="send($el)" action="item_complete.php" method="get" class="form">
                            <div class="input_sec">
                                <input type="hidden" name="id" :value="selectItem.id">
                                <span class="down" @click="changeNum(-1)">▼</span>
                                <input type="number" name="num" x-model="num"><span class="up"
                                    @click="changeNum(1)">▲</span>
                            </div>
                            <button>ポイント交換する</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- 商品一覧 -->

        <section>

            <h2 class="ttl">商品一覧</h2>

            <div class="inr">
                <ul id="point_sec" class="point_use_sec" style="margin-bottom: 30px;">

                    <template x-for="data in datas" :key="data.id">
                        <li>
                            <figure>
                                <a :href="'item.php?id='+data.id"><img :src="'images/'+data.image" alt=""></a>
                            </figure>
                            <div class="stars">
                                <span class="star" x-html="getStar(data.popular)">
                                </span>
                                <span class="score" x-text="data.popular + ' / 5.0'"></span>
                            </div>
                            <dl>
                                <dt><a x-text="data.name"></a></dt>
                                <dd class="point_sec"><b x-text="data.point.toLocaleString()">0</b><span>ポイント<span
                                            x-show="data.other">から</span></span>
                                </dd>
                            </dl>
                        </li>
                    </template>
                </ul>
            </div>
        </section>
        <!-- アイテム一覧 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script>
    const item = () => ({
        havePoint: 3000,
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
                    this.selectItem = this.datas.find(obj => obj.id == id);

                    document.title = this.selectItem.name + document.title;

                    if (this.selectItem == undefined) {
                        throw new Error();
                    }
                }).catch((e) => {
                    location.href = 'point.php'
                });
        },
        changeNum(e) {
            this.num = Number(this.num) + Number(e);
            if (this.num <= 1) {
                this.num = 1;
            }
        },
        send(e) {
            if (this.havePoint < this.point()) {
                alert("ポイントが足りません。");
                return;
            }

            if (confirm('ポイントを交換します。宜しいですか？')) {
                e.submit();
            }
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