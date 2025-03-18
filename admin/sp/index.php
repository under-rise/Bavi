<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スマフォ積み込みページ | 管理画面</title>
    <link type="text/css" rel="stylesheet" href="https://bavi.jp/assets/css/customer/reset.css?1648760965" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/common_sp.css?1.3">
    <link rel="stylesheet" href="./css/form.css?1.3">

</head>

<body>

    <header>
        <div class="logo_sec">
            <div id="logo"><a href="/customer"><img src="/assets/img/customer/logo.png"></a></div>
            <h1>運営側管理ページ</h1>
        </div>
        <!-- メニュー -->
        <nav class="menu">
            <div class="menu_button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="#">ホーム</a></li>
                <li>
                    <a href="#" class="submenu_button">サービス</a>
                    <div class="submenu">
                        <ul>
                            <p><span class="back">▲</span>サービス</p>
                            <li><a href="#">サービス1</a></li>
                            <li><a href="#">サービス2</a></li>
                            <li><a href="#">サービス3</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">各種設定</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>

    </header>
    <!-- header -->

    <article>

        <div class="main">
            <h2>会場:1400 秋川橋河川公園</h2>

            <ul>
                <li class="prev"></li>
                <li class="next"></li>
            </ul>
        </div>

        <section class="sec01">
            <div class="table form">
                <dl>
                    <dt>車両</dt>
                    <dd>テキストテキストテキスト</dd>
                </dl>

                <dl>
                    <dt>件数</dt>
                    <dd>16<span>件</span></dd>
                </dl>

                <dl>
                    <dt>担当者</dt>
                    <dd>鈴木</dd>
                </dl>
            </div>
        </section>
        <!-- sec01 -->

        <section class="sec02 form">

            <ul>
                <li >
                    <input type="checkbox" name="category[]" value="all" id="category001">
                    <label for="category001" class="checkbox">
                        <figure>
                            <img src="images/category003.jpg" alt="">
                        </figure>
                        <p>器材</p>
                    </label>
                </li>
                

                <li >
                    <input type="checkbox" name="category[]" value="all" id="category002">
                    <label for="category002" class="checkbox">
                        <figure>
                            <img src="images/category002.jpg" alt="">
                        </figure>
                        <p>食材</p>
                    </label>
                </li>


                <li >
                    <input type="checkbox" name="category[]" value="all" id="category003">
                    <label for="category003" class="checkbox">
                        <figure>
                            <img src="images/category004.jpg" alt="">
                        </figure>
                        <p>ドリンク</p>
                    </label>
                </li>

                <li >
                    <input type="checkbox" name="category[]" value="all" id="category004">
                    <label for="category004" class="checkbox">
                        <figure>
                            <img src="images/category006.jpg" alt="">
                        </figure>
                        <p>オプション</p>
                    </label>
                </li>

                </div>
        </section>
        <!-- sec02 -->

        <section class="sec03">

            <div class="category">
                <h3>器材</h3>

                <div class="table">
                    <dl>
                        <dt>テント</dt>
                        <dd><span>5</span>張</dd>
                    </dl>

                    <dl>
                        <dt>テーブル</dt>
                        <dd><span>10</span>台</dd>
                    </dl>

                    <dl>
                        <dt>ディレクターズチェア</dt>
                        <dd><span>30</span>脚</dd>
                    </dl>
                    <dl>
                        <dt>コンロ</dt>
                        <dd><span>4</span>台</dd>
                    </dl>
                    <dl>
                        <dt>炭</dt>
                        <dd><span>25</span>kg</dd>
                    </dl>
                    <dl>
                        <dt>クーラーボックス</dt>
                        <dd><span>6</span>台</dd>
                    </dl>
                    <dl>
                        <dt>箸・皿・コップ</dt>
                        <dd><span>10</span>式</dd>
                    </dl>
                    <dl>
                        <dt>網</dt>
                        <dd><span>5</span>本</dd>
                    </dl>
                    <dl>
                        <dt>トングセット（炭用）</dt>
                        <dd><span>2</span>式</dd>
                    </dl>
                </div>

                <div class="form">
                    <button class="complete" data-category="category001">器材積込み完了</button>
                </div>
            </div>


            <div class="category">
                <h3>食材</h3>

                <div class="table">
                    <dl>
                        <dt>A5山形牛カルビ</dt>
                        <dd><span>150</span>g</dd>
                    </dl>

                    <dl>
                        <dt>牛タン</dt>
                        <dd><span>150</span>g</dd>
                    </dl>

                    <dl>
                        <dt>牛ハラミ</dt>
                        <dd><span>150</span>g</dd>
                    </dl>

                    <dl>
                        <dt>豚カルビ</dt>
                        <dd><span>150</span>g</dd>
                    </dl>

                    <dl>
                        <dt>ハーブチキン</dt>
                        <dd><span>150</span>g</dd>
                    </dl>

                    <dl>
                        <dt>フランク</dt>
                        <dd><span>3</span>本</dd>
                    </dl>

                    <dl>
                        <dt>焼きおにぎり</dt>
                        <dd><span>3</span>個</dd>
                    </dl>

                </div>

                <div class="form">
                <button class="complete" data-category="category002">食材積込み完了</button>
                </div>
            </div>
            <!-- cate -->


            <div class="category">
                <h3>ドリンク</h3>

                <div class="table">
                    <dl>
                        <dt>缶ビール350ml</dt>
                        <dd><span>24</span>本</dd>
                    </dl>
                    <dl>
                        <dt>缶酎ハイレモン</dt>
                        <dd><span>24</span>本</dd>
                    </dl>
                    <dl>
                        <dt>缶酎ハイグレフル</dt>
                        <dd><span>24</span>本</dd>
                    </dl>
                    <dl>
                        <dt>缶ハイボール</dt>
                        <dd><span>24</span>本</dd>
                    </dl>
                    <dl>
                        <dt>氷</dt>
                        <dd><span>10</span>本</dd>
                    </dl>


                </div>

                <div class="form">
                <button class="complete" data-category="category003">ドリンク積込み完了</button>
                </div>
            </div>
            <!-- cate -->

            <div class="category">
                <h3>オプション器材</h3>

                <div class="table">
                    <dl>
                        <dt>どぶ漬け</dt>
                        <dd><span>1</span>台</dd>
                    </dl>
                    <dl>
                        <dt>ウェーバー</dt>
                        <dd><span>2</span>台</dd>
                    </dl>
                    <dl>
                        <dt>牛タンハラミ</dt>
                        <dd><span>1</span>ケ</dd>
                    </dl>
                    <dl>
                        <dt>山形牛ステーキ</dt>
                        <dd><span>1</span>ケ</dd>
                    </dl>
                    <dl>
                        <dt>海鮮セット</dt>
                        <dd><span>2</span>ケ</dd>
                    </dl>


                </div>

                <div class="form">
                <button class="complete" data-category="category004">オプション器材積込み完了</button>
                </div>
            </div>
            <!-- cate -->

            <div class="category time_table">
                <h3>タイムテーブル</h3>

                <div class="table">
                    <dl>
                        <dt>総合計人数</dt>
                        <dd><span>445</span>名</dd>
                    </dl>
                    <dl>
                        <dt>総件数</dt>
                        <dd><span>48</span>件</dd>
                    </dl>
                    <dl>
                        <dt>会場数</dt>
                        <dd><span>3</span>会場</dd>
                    </dl>

                </div>

            </div>
            <!-- cate -->

        </section>

        <div class="complete_sec complete" >
            <div><img src="./images/complete.png" alt=""></div>
        </div>


    </article>
    <!-- article -->

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

    <script>
        $(document).ready(function() {
            // ハンバーガーメニューの開閉
            $(".menu_button").click(function() {
                $(this).toggleClass("active");
                $(".menu").toggleClass("open");
            });

            $('.menu').click(function(event) {
                if (!$(event.target).closest('ul').length && !$(event.target).closest('.menu_button').length) {
                    $(this).removeClass("open");
                }
            });

            // サブメニューの開閉（右スライド）
            $(".submenu_button").click(function(e) {
                e.preventDefault(); // ページリロードを防ぐ
                $(this).siblings(".submenu").toggleClass("open");
            });

            $('.submenu').click(function(event) {
                if (!$(event.target).closest('li a').length) {
                    $(this).removeClass("open");
                }
            });
        });


        $(function(){
                
                num = $('button.complete').length;
               
                function checkComplete(){
                    active = $('button.complete.active').length;
                    if(num == active){
                        $('.complete_sec').show().addClass('complete');
                    }else{
                        $('.complete_sec').hide().removeClass('complete');
                    }
                }

                // checkComplete();
              
                $('.complete').click(function(){
                    let id = '#'+$(this).data('category');
                    $(this).toggleClass('active');
                    if($(id).prop("checked")){
                        $(id).prop("checked", false);
                    }else{
                        $(id).prop("checked", true);
                    }
                    checkComplete();
                });
        });
               
    </script>
</body>

</html>