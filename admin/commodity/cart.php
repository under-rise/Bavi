<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex">
    <title>商材購入ページ（カート） | Bavi</title>
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


    <link type="text/css" rel="stylesheet" href="css/commodity.css?3.12" />



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

        <h3 style="font-weight: bold;">商材購入ページ（カート）</h3>

        <div class="search_sec " x-data="cart">
            <h4 style="font-weight: bold;text-align: center;">追加カート内</h4>

            <form action="complete.php" method="get" class="form">

                <div x-show="items == null || items.length < 1">
                    <p style="font-weight:bold; text-align:center; font-size:14px; margin: 70px 0;">カート内に商品はありません。</p>
                </div>

                <div class="table" x-show="items.length > 0">
                    <dl>
                        <dt>選択商品</dt>
                        <dd class="cart_sec">

                            <ul>

                                <template x-for="item,index in items">
                                    <li>
                                        <figure>
                                            <a href="detail.php">
                                                <img :src="item.img" alt="">
                                            </a>
                                            <div class="remove" @click="remove(index)">×</div>

                                        </figure>

                                        <div class="table">
                                            <dl>
                                                <dt>ID</dt>
                                                <dd x-text="item.id"></dd>
                                            </dl>
                                            <dl>
                                                <dt>商品名</dt>
                                                <dd x-text="item.item"></dd>
                                            </dl>
                                            <dl>
                                                <dt>価格</dt>
                                                <dd class="price" style="font-size: 1.3em;"
                                                    x-html="'￥'+item.price.toLocaleString()+'<span>（税別）</span>'">
                                                </dd>
                                            </dl>

                                            <dl>
                                                <dt>個数</dt>
                                                <dd>
                                                    <div class="select_num_sec">
                                                        <div class="in">
                                                            <span class="upBtn" @click="changeNum(item,-1)">▼</span>
                                                            <input type="number" style=" width: 10em"
                                                                @change="change(index)" x-model="item.value"
                                                                class="input" value="1"> <span class="downBtn"
                                                                @click="changeNum(item,1)">▲</span>
                                                            個
                                                        </div>
                                                    </div>

                                                </dd>
                                            </dl>

                                        </div>

                                    </li>
                                </template>
                            </ul>

                            <div class="total_price price bold"
                                x-html="'<span>合計 </span>'+myLocaleString(totalPrice)+'<span>円（税込）</span>'">
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>ポイント使用</dt>
                        <dd>
                            <input type="number" name="" id="" class="input" x-model="point" @blur="pointLeave"> ポイント
                            <div class="hove_point">（ 保有ポイント <span>1,300ポイント</span> ）</div>
                        </dd>
                    </dl>

                    <dl>
                        <dt>配送希望日時</dt>
                        <dd>
                            <input type="date" name="" id="" class="input" x-model="deleveryDay">
                        </dd>
                    </dl>
                    <dl>
                        <dt>発送先（登録リスト）<span class="required">必須項目</span></dt>
                        <dd>
                            <select name="" id="" class="input" style="width: 50%;" x-model="address">
                                <option value="選択ください。">選択ください。</option>
                                <option value="大阪府大阪市中央区平野町3-6-1">大阪府大阪市中央区平野町3-6-1</option>
                                <option value="東京都渋谷区恵比寿南1-1-1">東京都渋谷区恵比寿南1-1-1</option>
                                <option value="東京都板橋区前野町3-43-7">東京都板橋区前野町3-43-7</option>
                            </select>
                        </dd>
                    </dl>
                </div>
                <!-- table -->

                <div x-show="items.length > 0" class="btn type04 complete" @click.prevent="order"><a
                        style="color: #fff;">注文する</a></div>

                <div class="btn type02" style="margin: 30px auto;"><a href="index.php"
                        style="color: #000; display: block; padding: 5px 20px;">商品一覧に戻る</a>
                </div>
            </form>

            <div class="modal_sec inputModal confirm" x-show="open" x-cloak x-trap.noscroll="open" x-transition>
                <div class="inr" @click.outside="open = false;">

                    <h5>注文を確定します。宜しいですか？</h5>

                    <div class="table" x-show="items.length > 0">
                        <dl>
                            <dt>選択商品</dt>
                            <dd class="cart_sec">

                                <ul>

                                    <template x-for="item,index in items">

                                        <template x-if="item.value !== 0">

                                            <li>
                                                <figure>
                                                    <a href="detail.php">
                                                        <img :src="item.img" alt="">
                                                    </a>
                                                </figure>

                                                <div class="table">
                                                    <dl>
                                                        <dt>ID</dt>
                                                        <dd x-text="item.id"></dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>商品名</dt>
                                                        <dd x-text="item.item"></dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>価格</dt>
                                                        <dd class="price"
                                                            x-html="item.price.toLocaleString()+'<span>（税別）</span>'">
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>個数</dt>
                                                        <dd>
                                                            <p class="bold" style="font-weight:bold;"
                                                                x-text="item.value+'個'"></p>

                                                        </dd>
                                                    </dl>

                                                </div>

                                            </li>
                                        </template>
                                    </template>
                                </ul>

                                <div class="total_price price bold"
                                    x-html="'<span>合計 </span>'+myLocaleString(totalPrice)+'<span>円（税込）</span>'">
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>使用ポイント</dt>
                            <dd>
                                <p style="font-weight: bold;" x-text="point+'ポイント'"></p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>配送希望日時</dt>
                            <dd>
                                <div x-show="deleveryDay">
                                    <p x-text="deleveryDay"></p>
                                </div>

                                <div x-show="!deleveryDay">
                                    <p>希望日なし</p>
                                </div>

                            </dd>
                        </dl>
                        <dl>
                            <dt>発送先（登録リスト）</dt>
                            <dd>
                                <p x-text="address"></p>
                            </dd>
                        </dl>
                    </div>
                    <!-- table -->

                    <div class="btn type04 complete" style="margin-bottom: 30px;"><a href="complete.php"
                            style="color: #fff;" @click="complete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                            </svg>

                            注文を確定する</a></div>

                    <button class="btn type02" @click="open=false">修正する</button>

                </div>

            </div>
            <!-- modal -->

        </div>


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

        Alpine.data('cart', () => ({
            maxPoint: 1300,
            point: 0,
            tax: 1.1,
            open: false,
            deleveryDay: null,
            address: null,
            items: [],
            totalPrice: 0,
            init() {
                if (localStorage.getItem('item') !== null) {
                    // this.items = JSON.parse(localStorage.getItem('item'));
                    JSON.parse(localStorage.getItem('item')).map(e => {
                        this.items.push(JSON.parse(e));
                    });
                    this.calcTotalPrice();
                }
                this.$watch('items', (e) => {
                    this.calcTotalPrice();
                });
                this.$watch('point', (e) => {
                    this.calcTotalPrice();
                })
            },
            changeNum(item, num) {
                item.value = parseInt(item.value) + parseInt(num);
                if (item.value < 0) {
                    item.value = 0;
                }
            },
            remove(id) {
                if (confirm(`【${this.items[id].item} 】をカート内から削除します。宜しいですか？`)) {
                    this.items.splice(id, 1);

                    // localsotrage削除
                    let json = JSON.parse(localStorage.getItem('item'));
                    json.splice(id, 1);
                    localStorage.setItem('item', JSON.stringify(json));
                    // 合計金額　再計算
                    this.calcTotalPrice();
                }
            },

            order() {
                if (this.address == null) {
                    alert("配送先住所を選択ください。");
                    return false;
                }
                this.open = true;
                console.log(this.address)
            },

            change(id) {

                let json = JSON.parse(localStorage.getItem('item'));
                JSON.parse(json[id]).value = this.$el.value;
                this.items[id].value = this.$el.value;

            },
            calcTotalPrice() {
                let price = 0;
                for (item of this.items) {
                    price += Math.floor(item.price * item.value * this.tax);

                }

                if (this.point.length === 0) {
                    this.totalPrice = price;
                    return;
                }
                if (this.point > this.maxPoint) {
                    this.point = this.maxPoint;
                }
                this.totalPrice = price - parseInt(this.point);
                if (this.totalPrice < 0) {
                    this.totalPrice = 0;
                    this.point = price;
                }
            },
            pointLeave() {
                if (this.point.length === 0) {
                    this.point = 0;
                }
            },
            complete() {
                localStorage.removeItem('item');
            },
            myLocaleString(num) {
                return String(num).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
            },
        }))

    })
    </script>


</body>

</html>