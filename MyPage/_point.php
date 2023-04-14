<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ポイントを使う | 日本最大級のBBQプラットフォーム Bavi</title>
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
    <link rel="stylesheet" href="css/page.css?14">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents" x-data="app" x-cloak>

        <!-- <section>

            <div class="inr">
                <h2 class="ttl pink">ポイントを使う</h2>

                <div x-data="{open:false}">

                    <div class="form" x-show="open" x-transition>
                        <div class="table">
                            <dl>
                                <dt>キーワード検索</dt>
                                <dd><input type="text"></dd>
                            </dl>
                            <dl>
                                <dt>カテゴリー</dt>
                                <dd>
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="">全て</option>
                                            <option value="">電化製品</option>
                                            <option value="">BBQ関連</option>
                                            <option value="">Amazonクーポン</option>
                                            <option value="">その他</option>
                                        </select>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="btn type01" @click="open = !open"><a href="#" x-text="open ? '閉じる': '検索する'">検索する</a>
                    </div>
                </div>
            </div>

        </section> -->

        <section>
            <div class="inr">

                <h2 class="ttl">ポイントを使う</h2>

                <div class="error_sec">
                    <div class="inr">
                        <ul>
                            <li>
                                <b><span class="flash">!</span>住所が登録されていません。</b>
                                <p><a href="setting.php" class="line bk">こちらの設定ページより、</a>お電話・郵便番号・ご住所を登録後、ポイントをご利用ください。
                                </p>
                            </li>
                            <li>
                                <b><span class="flash">!</span>エラータイトル</b>
                                <p><a href="setting.php" class="line bk">エラー文章エラー文章エラー文章エラー文章エラー文章</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- error_sec -->

                <div class="sort">
                    <ul>
                        <li @click="sort('new')">新着順</li>
                        <li @click="sort('popular')">人気順</li>
                        <li @click="sort('point_high')">ポイントが高い順</li>
                        <li @click="sort('point_low')">ポイントが低い順</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>

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

                <div class="pager">
                    <ul>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- LIKE履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script>
    const item = () => ({
        datas: {},
        init() {

            fetch('data/item.json', {
                    cache: "no-store"
                })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    this.datas = data;
                });
        },
        sort(e) {
            switch (e) {
                case 'new':
                    this.datas = this.datas.sort(function(a, b) {
                        return (a.created_at < b.created_at) ? -1 : 1; //オブジェクトの昇順ソート
                    });
                    break;
                case 'popular':
                    this.datas = this.datas.sort(function(a, b) {
                        return (a.popular > b.popular) ? -1 : 1; //オブジェクトの昇順ソート
                    });
                    break;
                case 'point_high':
                    this.datas = this.datas.sort(function(a, b) {
                        return (a.point > b.point) ? -1 : 1; //オブジェクトの昇順ソート
                    });
                    break;
                case 'point_low':
                    this.datas = this.datas.sort(function(a, b) {
                        return (a.point < b.point) ? -1 : 1; //オブジェクトの昇順ソート
                    });
                    break;
                default:
                    this.datas = this.datas.sort(function(a, b) {
                        return (a.created_at > b.created_at) ? -1 : 1; //オブジェクトの昇順ソート
                    });
            }

            console.log(this.datas);
        }
    });

    document.addEventListener('alpine:init', () => {
        Alpine.data('app', item);
    });
    </script>

    <script src="js/config.js"></script>

</body>