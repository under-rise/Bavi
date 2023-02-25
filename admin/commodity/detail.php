<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title> プロ用コンロ | Bavi</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/reset.css?1648760965" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/style.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/page.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/detail.css?1648760966" />
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/form.css?1648760966" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/customer/main.js?1648761028"></script>


    <link type="text/css" rel="stylesheet" href="css/commodity.css?3.3" />

    <style>
    [x-cloak] {
        display: none !important;
    }
    </style>

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    $(function() {
        $('.slider').slick({
            arrows: true, // 前・次のボタンを表示する
            dots: true, // ドットナビゲーションを表示する
            speed: 1000, // スライドさせるスピード（ミリ秒）
            slidesToShow: 1, // 表示させるスライド数
            centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
            variableWidth: true, // スライド幅の自動計算を無効化
            asNavFor: ".thumbnail_sec",
        });
        $(".thumbnail_sec").slick({
            slidesToShow: 4, // サムネイルの表示数
            asNavFor: ".slider", // メイン画像と同期
            focusOnSelect: true, // サムネイルクリックを有効化
            arrows: false,
            centerMode: true,
        });
    });
    </script>

</head>

<body id="spot">

    <?php
    include __DIR__ . '/tpl/header.php';
    ?>

    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/bootstrap.css?1616644533" />

    <div id="container">

        <div class="row">
            <a href="index.php" class="btn btn-default">
                << 商材一覧へ戻る </a>　
        </div>

        <div class="detail_sec" x-data="item">

            <div class="top">
                <figure>
                    <ul class="slider slider_detail_sec" id="slider">
                        <li><a href="detail.php"><img src="images/slider001.jpg" alt=""></a></li>
                        <li><a href="detail.php"><img src="images/slider002.jpg" alt=""></a></li>
                        <li><a href="detail.php"><img src="images/slider003.jpg" alt=""></a></li>
                        <li><a href="detail.php"><img src="images/slider004.jpg" alt=""></a></li>
                        <li><a href="detail.php"><img src="images/slider005.jpg" alt=""></a></li>
                        <li><a href="detail.php"><img src="images/slider006.jpg" alt=""></a></li>
                    </ul>

                    <ul class="thumbnail_sec">
                        <li><img src="images/slider001.jpg" alt=""></li>
                        <li><img src="images/slider002.jpg" alt=""></li>
                        <li><img src="images/slider003.jpg" alt=""></li>
                        <li><img src="images/slider004.jpg" alt=""></li>
                        <li><img src="images/slider005.jpg" alt=""></li>
                        <li><img src="images/slider006.jpg" alt=""></li>
                    </ul>
                </figure>

                <div class="info">
                    <h3 style="font-weight: bold;line-height: 1.5;">人気のシロコロ入り国産ミックスホルモン600g（2～3人前）<br>自家製味噌だれセット！</h3>

                    <p>お肉だけでは物足りない。」そんな本格志向の方に向けた3種15品海鮮BBQセットです。独自の流通ルートで市場から直接仕入れているため、他店に負けない価格と品揃えになっております。</p>

                    <div class="table">

                        <dl>
                            <dt>ID</dt>
                            <dd>002</dd>
                        </dl>

                        <dl>
                            <dt>商品名</dt>
                            <dd>プロ用コンロ</dd>
                        </dl>

                        <dl>
                            <dt>価格</dt>
                            <dd>
                                <div class="price">¥2,000<span>（税別）</span></div>
                            </dd>
                        </dl>
                    </div>
                    <!-- table -->

                    <div class="select_num_sec">
                        <div class="in">
                            <span class="upBtn" @click="num--">▼</span>
                            <input type="number" x-model="num" style=" width: 10em" class="input" value="1"> <span
                                class="downBtn" @click="num++">▲</span>
                            個
                        </div>

                        <div class="flex _btn"
                            style="align-items: center; justify-content: center; gap: 10px; width: 100%;">
                            <div class="btn_sec">
                                <button style="padding: 15px 0;"
                                    @click="inCart({id:'001',item:'プロ用コンロ',price:1000,img:'images/img001.jpg'})"
                                    class=" btn">カートへ追加する</button>
                            </div>

                            <div class="btn_sec" style="width: 60%;">
                                <button class="btn" @click="favorite = true"
                                    style="background-color: #3787d2;">お気入りに追加</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- top -->

            <h3 style="font-weight: bold;">商品詳細</h3>

            <div class="table">

                <dl>
                    <dt>メーカー</dt>
                    <dd>紀和味</dd>
                </dl>

                <dl>
                    <dt>販売単位</dt>
                    <dd>10セット</dd>
                </dl>

                <dl>
                    <dt>ケース入数</dt>
                    <dd>20個</dd>
                </dl>

                <dl>
                    <dt>規格</dt>
                    <dd>19 x 3.5 x 22cm x 500g</dd>
                </dl>

                <dl>
                    <dt>最終加工地</dt>
                    <dd>北海道地方</dd>
                </dl>

                <dl>
                    <dt>1個の大きさ</dt>
                    <dd>19 x 3.5 x 22cm x 500g</dd>
                </dl>

                <dl>
                    <dt>調理方法</dt>
                    <dd>そのままおつまみやおやつとしてお召し上がり頂くか、スープのだしや炊き込みご飯など、料理に使用することによって一層旨味を引き出せます。</dd>
                </dl>



            </div>
            <!-- table -->

            <div class="btn type02" style="margin: 30px auto;"><a href="index.php"
                    style="color: #000; display: block; padding: 5px 20px;">商品一覧に戻る</a>
            </div>


            <div class="cart_btn"><a href="cart.php" style="color: #fff;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>カートを見る</a>
            </div>

            <div class="modal_sec inputModal complete" x-show="cartOpen" x-cloak x-trap.noscroll="cartOpen"
                x-transition>
                <div class="inr" @click.outside="cartOpen = false;">

                    <h5>カートへ追加完了しました。</h5>

                    <div class="btn type04 watch_cart" style="margin-bottom: 30px;"><a href="cart.php"
                            style="color: #fff; text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            カートを見る</a>
                    </div>

                    <button class="btn type02" @click="location.href='index.php'">

                        さらに商品を追加する</button>
                </div>
            </div>

            <div class=" modal_sec inputModal complete" x-show="favorite" x-cloak x-trap.noscroll="favorite"
                x-transition>
                <div class="inr" @click.outside="favorite = false;">

                    <h5>お気に入り追加完了しました。</h5>

                    <button class="btn type02" @click="favorite=false">
                        閉じる</button>
                </div>
            </div>


        </div>
        <!-- alpine -->

    </div>





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
    document.addEventListener('alpine:init', () => {

        Alpine.data('item', () => ({
            num: 1,
            favorite: false,
            cartOpen: false,
            init() {

                this.$watch('num', (e) => {
                    if (e < 1) {
                        this.num = 1;
                    }

                })
            },

            inCart(buyItem) {

                if (this.num == 0 || this.num == '') {
                    alert('個数を入力してください。');
                    return false;
                }
                buyItem.value = this.num;

                let arr = [];
                arr.push(JSON.stringify(buyItem));
                if (localStorage.getItem('item') !== null) {
                    var datas = JSON.parse(localStorage.getItem('item'));
                    for (data of datas) {
                        arr.push(data);
                    }
                }

                localStorage.setItem('item', JSON.stringify(arr));
                this.cartOpen = true;
            }
        }))

    })
    </script>


</body>

</html>