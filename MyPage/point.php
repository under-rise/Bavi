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
    <link rel="stylesheet" href="css/index_sp.css?2" media="screen and (max-width: 780px)" />
    <link rel="stylesheet" href="css/page.css?14.1">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <?php
    include 'tpl/header.php'
    ?>

    <article class="contents" x-data="app" x-cloak>

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

                <div x-data="{open:false}" style="margin-bottom: 40px;">

                    <div class="btn type02" @click="open = !open"><a x-text="open ? '閉じる': '商品を絞込む'">商品を絞込む</a>
                    </div>

                    <div class="search_sec  form" x-show="open" x-transition>

                        <form method="get" action="#" class="form">
                            <div class="table">
                                <dl>
                                    <dt>キーワード検索</dt>
                                    <dd><input type="text" name="keyword" class="w100"></dd>
                                </dl>
                                <dl>
                                    <dt>カテゴリー</dt>
                                    <dd>
                                        <div class="select">
                                            <select name="category" id="">
                                                <option value="">全て</option>
                                                <option value="">電化製品</option>
                                                <option value="">食品</option>
                                                <option value="">ホーム・インテリア</option>
                                                <option value="">ドリンク・お酒</option>
                                                <option value="">スイーツ</option>
                                                <option value="">その他</option>
                                            </select>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <input type="submit" class="btn" value="商品検索">
                        </form>
                    </div>
                </div>

                <div class="sort">
                    <ul>
                        <li>新着順</li>
                        <li>人気順</li>
                        <li>ポイントが高い順</li>
                        <li>ポイントが低い順</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>

            <div class="inr">
                <ul id="point_sec" class="point_use_sec" style="margin-bottom: 30px;">

                    <li>
                        <figure>
                            <a href="item.php?id=1"><img
                                    src="https://bavi.jp/uploads/point_item/d18dd677f7015fa5afa6c454ca316cb4.jpg"
                                    alt=""></a>
                        </figure>
                        <div class="stars">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>
                        <dl>
                            <dt><a>BBQコンロ</a></dt>
                            <dd class="point_sec"><b>1,200</b><span>ポイント</span>
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <figure>
                            <a href="item.php?id=2"><img
                                    src="https://bavi.jp/uploads/point_item/b36c68824ae37ab82381277c29706c3f.jpg"
                                    alt=""></a>
                        </figure>
                        <div class="stars">
                            <span class="star">
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star.png" alt="星1個" />
                                <img src="/assets/img/star_half.png" alt="星1個" />
                                <img src="/assets/img/star_none.png" alt="星1個" />
                            </span>
                            <span class="score">3.5/ 5.0</span>
                        </div>
                        <dl>
                            <dt><a>鰻楽 九州産うなぎ蒲焼（3尾）</a></dt>
                            <dd class="point_sec"><b>9,720</b><span>ポイント</span>
                            </dd>
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
        </section>
        <!-- LIKE履歴 -->


    </article>
    <!-- main contents -->

    <?php
    include 'tpl/footer.php'
    ?>

    <script src="js/config.js"></script>

</body>