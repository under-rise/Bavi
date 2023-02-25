<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>商材購入ページ | Bavi</title>
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
    <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://bavi.jp/assets/js/customer/main.js?1648761028"></script>

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link type="text/css" rel="stylesheet" href="css/commodity.css?2.2" />

    <style>
    [x-cloak] {
        display: none !important;
    }
    </style>

    <script>
    $(function() {
        $('.slider').slick({
            arrows: true, // 前・次のボタンを表示する
            dots: true, // ドットナビゲーションを表示する
            speed: 1000, // スライドさせるスピード（ミリ秒）
            slidesToShow: 1, // 表示させるスライド数
            centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
            variableWidth: true, // スライド幅の自動計算を無効化
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

        <h3 style="font-weight: bold;">商材購入ページ</h3>

        <div class="search_sec">
            <h4 style="font-weight: bold;text-align: center;">アイテム検索</h4>

            <form action="" method="get" class="form">
                <div class="table">
                    <dl>
                        <dt>カテゴリー</dt>
                        <dd>
                            <div class="flex">
                                <label for="category001">
                                    <input type="checkbox" name="category[]" value="all" id="category001" checked> 全て
                                </label>

                                <label for="category002">
                                    <input type="checkbox" name="category[]" value="food" id="category002"> 食材
                                </label>

                                <label for="category003">
                                    <input type="checkbox" name="category[]" value="bbqitem" id="category003"> BBQ機材
                                </label>

                                <label for="category004">
                                    <input type="checkbox" name="category[]" value="drink" id="category004"> ドリンク
                                </label>

                                <label for="category005">
                                    <input type="checkbox" name="category[]" value="outdoor" id="category005"> アウトドア用品
                                </label>

                                <label for="category006">
                                    <input type="checkbox" name="category[]" value="other" id="category006"> その他
                                </label>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>価格</dt>
                        <dd>
                            <div class="flex">
                                <label for="price001">
                                    <input type="checkbox" name="price[]" value="all" id="price001" checked> 全て
                                </label>

                                <label for="price002">
                                    <input type="checkbox" name="price[]" value="1000" id="price002"> ¥1,000円以内
                                </label>

                                <label for="price003">
                                    <input type="checkbox" name="price[]" value="3000" id="price003"> ¥3,000円以内
                                </label>

                                <label for="price004">
                                    <input type="checkbox" name="price[]" value="5000" id="price004"> ¥5,000円以内
                                </label>

                                <label for="price005">
                                    <input type="checkbox" name="price[]" value="10000" id="price005"> ¥10,000円以内
                                </label>

                                <label for="price006">
                                    <input type="checkbox" name="price[]" value="10001" id="price006"> ¥10,001円以上
                                </label>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>フリーワード</dt>
                        <dd>
                            <input type="text" name="" id="" placeholder="検索ワードを入力ください。">
                        </dd>
                    </dl>
                </div>
                <!-- table -->

                <input type="submit" class="btn" value="検索する">
            </form>

        </div>

        <div>
            <ul class="slider" id="slider">
                <li><img src="images/img001.jpg" alt=""></li>
                <li><img src="images/img002.jpg" alt=""></li>
                <li><img src="images/img003.jpg" alt=""></li>
            </ul>
        </div>

        <div class="product" x-data="modal">

            <ul>
                <li>
                    <figure @click="toggle({id:'001',price:1000,item:'BBQ用炭（5キロ）',img:'images/img001.jpg'})">

                        <img src="images/img001.jpg" alt="">

                    </figure>

                    <div class="info">
                        <h5>BBQ用炭（5キロ）</h5>
                        <p x-ref="caption001">サイトナビゲーションを強化し、サイトの使用状況を分析</p>
                        <div class="table">
                            <dl>
                                <dt>カテゴリー</dt>
                                <dd>食材</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd class="price">¥1,000円<span>（税別）</span></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="btn_sec" style="text-align: center;">
                        <button @click="toggle({id:'001',price:1000,img:'images/img001.jpg'})"
                            class="btn">カートへ追加</button>
                    </div>

                </li>

                <li>
                    <figure @click="toggle({id:'002',price:2000,item:'プロ用コンロ',img:'images/img002.jpg'})">

                        <img src="images/img002.jpg" alt="">

                    </figure>

                    <div class="info">
                        <h5>プロ用コンロ</h5>
                        <p x-ref="caption002">防錆効果があり、長年の使用にも耐えられるようになっています。</p>
                        <div class="table">
                            <dl>
                                <dt>カテゴリー</dt>
                                <dd>食材</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd class="price">¥2,000円<span>（税別）</span></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="btn_sec" style="text-align: center;">
                        <button @click="toggle({id:'001',price:1000,item:'BBQ用炭（5キロ）',img:'images/img001.jpg'})"
                            class="btn">カートへ追加</button>
                    </div>

                </li>

                <li>
                    <figure @click="toggle({id:'003',price:3000,item:'テスト',img:'images/img003.jpg'})">

                        <img src="images/img003.jpg" alt="">

                    </figure>

                    <div class="info">
                        <h5>テスト</h5>
                        <p x-ref="caption003">蓋と本体には、ホーローコーティングが施されています。</p>
                        <div class="table">
                            <dl>
                                <dt>カテゴリー</dt>
                                <dd>食材</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd class="price">¥3,000円<span>（税別）</span></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="btn_sec" style="text-align: center;">
                        <button @click="toggle({id:'001',price:1000,item:'テスト',img:'images/img001.jpg'})"
                            class="btn">カートへ追加</button>
                    </div>

                </li>
            </ul>

            <div class="btn type04 watch_cart"><a href="cart.php" style="color: #fff;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>カートを見る</a></div>

            <div>
                <ul class="pager">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>

            <div x-ref="modal" class="modal_sec inputModal" x-show="open" x-cloak x-trap.noscroll="open" x-transition>
                <div class="inr" @click.outside="open = false;">

                    <h5>セット数を入力してカートへ商品追加してください。</h5>


                    <div class="info">
                        <figure>
                            <img :src="selectItem.img" alt="">
                        </figure>

                        <div class="txt">
                            <h2><span x-text="selectItem.item"></span></h2>
                            <p><span x-text="selectItem.caption"></span></p>

                            <div class="table">
                                <dl>
                                    <dt>ID</dt>
                                    <dd><span x-text="selectItem.id"></span></dd>
                                </dl>
                                <dl>
                                    <dt>価格</dt>
                                    <dd><span x-text="myLocaleString(selectItem.price)"></span>円（税別）
                                    </dd>
                                </dl>

                            </div>
                        </div>
                    </div>

                    <div class="btn_sec">
                        <p><input x-ref="value" value="1" type="text" name="" id="" class="input"> 個</p>
                        <div class="cart_icon add_cart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <input type="button" @click="save(selectItem)" value="カートへ追加する" class="btn">
                        </div>
                    </div>

                    <button class="btn type02" @click="open=false">閉じる</button>

                </div>

            </div>
            <!-- modal -->

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

                    <button class="btn type02" @click="cartOpen=false">

                        商品を追加する</button>
                </div>
            </div>

        </div>
        <!-- product x-data end -->

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

        Alpine.data('modal', () => ({
            open: false,
            cartOpen: false,
            selectItem: {
                id: null,
                item: null,
                img: null,
                price: null,
                caption: null,
            },
            toggle(event) {
                this.open = !this.open
                this.selectItem.id = event.id;
                this.selectItem.item = event.item;
                this.selectItem.img = event.img;
                this.selectItem.price = event.price;
                this.selectItem.caption = this.$refs['caption' + event.id].innerText;
            },
            myLocaleString(num) {
                return String(num).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
            },

            save(buyItem) {

                let value = this.$refs.value.value;
                if (value == 0 || value == '') {
                    alert('個数を入力してください。');
                    return false;
                }
                buyItem.value = value;

                this.open = false;
                this.cartOpen = true;

                let arr = [];
                arr.push(JSON.stringify(buyItem));
                if (localStorage.getItem('item') !== null) {
                    var datas = JSON.parse(localStorage.getItem('item'));
                    for (data of datas) {
                        arr.push(data);
                    }
                }

                localStorage.setItem('item', JSON.stringify(arr));
            }
        }))

    })
    </script>


</body>

</html>