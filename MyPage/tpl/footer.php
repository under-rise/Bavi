    <!-- footer -->

    <section class="defect_report_sec" x-data="defectReport" x-cloak x-trap.noscroll="open">
        <div class="inr">
            <div>
                <h2 class="ttl mg_b20">ご意見箱</h2>
                <p class="mg_b10">ポイント施設増設希望<br>改善希望・新規機能・不具合・バグなど<br>
                    Baviサービス改善・向上の為ご意見・ご報告ください。<br>
                <p class="mg_b30" style="font-size: 90%;">（ポイント施設増設希望の方は施設名をご記載ください。）</p>
                </p>
                <div class="btn type01" @click="f_open()">
                    <a>フォームを開く</a>
                </div>

                <!-- menu nav -->
                <nav class="overlay_nav" x-show="open" x-transition.opacity.duration.200ms>

                    <div class="modal" @click.outside="open = false">
                        <span class="close" @click="open = false">+</span>
                        <h2 class="ttl">ご意見箱フォーム</h2>

                        <div x-show="state==1">
                            <p class="mg_b10">ポイント施設増設希望<br>改善希望・新規機能・不具合・バグなど<br>
                                Baviサービス改善・向上の為ご意見・ご報告ください。<br>
                            <p class="mg_b30" style="font-size: 90%;">（ポイント施設増設希望の方は施設名をご記載ください。）</p>
                            <form class="form" @submit.prevent="submit">

                                <div class="table bottom_border w100 mg_b30">
                                    <dl>
                                        <dt>カテゴリー</dt>
                                        <dd>
                                            <select name="age" x-model="form.category" class="w30">
                                                <option value="">カテゴリーを選択してください。</option>
                                                <option value="改善希望">改善希望</option>
                                                <option value="新規機能">新規機能</option>
                                                <option value="ポイント施設増設希望">ポイント施設増設希望</option>
                                                <option value="不具合・バグ報告">不具合・バグ報告</option>
                                                <option value="その他">その他</option>
                                            </select>
                                        </dd>
                                    </dl>

                                    <dl>
                                        <dt>ご意見内容</dt>
                                        <dd>
                                            <textarea name="opinion" x-model="form.opinion" cols="30" rows="10"
                                                class="w100"></textarea>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="mg_t30">
                                    <button :disabled="!check">送信する</button>
                                </div>

                            </form>
                        </div>

                        <div x-show="state==2">
                            <p>ご意見有難う御座いました。<br>入力頂きました内容をスタッフで共有し、Bavi運営の改善に役立てて参ります。<br>ご協力有難う御座いました。</p>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </section>
    <!-- defect_report_sec end -->

    <footer>

        <div class="inr">

            <figure class="logo">
                <img src="https://bavi.jp/assets/img/foot_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" />
            </figure>
            <ul class="sns_sec">
                <li><a href="https://twitter.com/tegarunibbq000"><img src="images/sns1.png" alt="Twitter" /></a>
                </li>
                <li><a href="https://www.youtube.com/@bavi_bbqbbq6219"><img src="images/sns2.png" alt="You tube" /></a>
                </li>
                <li><a href="https://www.instagram.com/bavi_bbq/"><img src="images/sns5.png" alt="instagram" /></a></li>
            </ul>
            <nav>
                <ul>
                    <li><a href="https://bavi.jp/about">Baviについて</a></li>
                    <li><a href="https://bavi.jp/assets/pdf/business.pdf" target="_blank">施設者向け資料</a></li>
                    <li><a href="https://bavi.jp/contact">お問い合わせ</a></li>
                    <li><a href="https://bavi.jp/company">運営会社</a></li>
                    <li><a href="https://bavi.jp/privacy">プライバシーポリシー</a></li>
                </ul>
            </nav>
        </div>
        <p id="copyright">&copy; Copyright Bavi all right reserved.</p>

    </footer>


    </body>


    <!-- bottom nav -->
    <nav id="bottom_nav">
        <ul>
            <li>
                <a href="/">
                    <img src="/resources/images/bottom_nav1.png" alt="BBQ場" />
                    <span>BBQ場</span>
                </a>
            </li>
            <li>
                <a href="/spot.php">
                    <img src="/resources/images/bottom_nav2.png" alt="食材SPOT" />
                    <span>食材SPOT</span>
                </a>
            </li>
            <li>
                <a href="/column.php">
                    <img src="/resources/images/bottom_nav3.png" alt="COLUMN" />
                    <span>COLUMN</span>
                </a>
            </li>
            <li>
                <a href="/like.php">
                    <img src="/resources/images/bottom_nav4.png" alt="LIKE" />
                    <span>LIKE</span>
                </a>
            </li>
            <li>
                <div x-data={open:false} x-trap.noscroll="open">
                    <a id="menu_open" @click="open = !open">
                        <img src="/resources/images/bottom_nav5.png" alt="MENU" />
                        <span>MENU</span>
                    </a>

                    <!-- menu nav -->
                    <nav id="overlay_nav" x-show="open" x-transition.opacity.duration.200ms>
                        <span id="close">+</span>

                        <div class="sec" :class="open ? 'open' : ''" @click.outside="open = false">
                            <a href=" /"><img src="/resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>

                            <dl class="nav">
                                <dt>探す</dt>
                                <dd><a href="/">BBQ場</a></dd>
                                <dd><a href="/spot.html">周辺店舗</a></dd>
                                <dd><a href="/column.html">コラム</a></dd>

                                <dt>MyPage</dt>
                                <dd><a href="">お気に入りページ</a></dd>

                                <dt>新着情報</dt>
                                <dd><a href="">BBQ場新着</a></dd>
                                <dd><a href="">周辺店舗新着</a></dd>

                                <dt>その他</dt>
                                <dd><a href="#">Baviについて</a></dd>
                                <dd><a href="/topic/tieup.php">Bavi特別タイアップについて</a></dd>
                                <dd><a href="/topic/recruitment_cameramen.php">撮影カメラマン募集について</a></dd>
                                <dd><a href="#">Baviモデルのご紹介</a></dd>
                            </dl>
                        </div>
                    </nav>
                </div>
            </li>
        </ul>
    </nav>

    <!-- サーバー側の受信先ですが仮で「debug.php」にしております。 -->
    <script type="text/javascript" src="js/defectReport.js?1.1"></script>