<header>
    <h1>マイページ | 日本最大級のBBQプラットフォーム Bavi</h1>
    <div class="inr">

        <div class="header_top">
            <div class="logo">
                <figure><a href="/"><img src="/resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
                </figure>
                <p>マイページ</p>
            </div>

            <div class="user_sec">
                <div class="user_info">
                    <p class="user_name">こんにちわ。鈴木さん</p>
                    <dl>
                        <dt>所有ポイント</dt>
                        <dd class="point_sec"><b>3,000</b><span>point</span></dd>
                    </dl>
                    <p><a href="point_history.php" class="line">ポイント利用・取得履歴を見る</a></p>
                </div>
                <div class="btn"><a href="point.php">ポイントを使う</a></div>
            </div>
            <!-- user_sec -->

            <div class="btn_sec pc_only">
                <ul>
                    <li class="logout btn"><a href="javascript:confirm('ログアウトします。宜しいですか？')">ログアウト</a></li>
                    <li class="mypage btn"><a href="index.php">マイページ</a></li>
                    <li class="contact btn"><a href="setting.php">登録情報</a></li>
                </ul>
            </div>
            <!-- btn_sec -->
        </div>

        <nav class="main_nav pc_only">
            <ul>
                <li><a href="/MyPage">トップページ</a></li>
                <li><a href="reserve.php">ご予約中施設</a></li>
                <li><a href="point.php">ポイントを使う</a></li>
                <li class="sub_menu" x-data="{open:false}" @mouseover="open = true" @mouseover.outside="open = false">
                    <a>お知らせ・利用履歴</a>
                    <ul x-show="open" x-cloak x-transition>
                        <li><a href="news.php">お知らせ</a></li>
                        <li><a href="point_history.php">ポイント利用履歴</a></li>
                    </ul>
                </li>
                <li class="sub_menu" x-data="{open:false}" @mouseover="open = true" @mouseover.outside="open = false">
                    <a>その他履歴・設定</a>
                    <ul x-show="open" x-cloak x-transition>
                        <li><a href="setting.php">ユーザー登録情報</a></li>
                        <li><a href="use_history.php">施設ご利用履歴</a></li>
                        <li><a href="voice_history.php">口コミ履歴</a></li>
                        <li><a href="like_history.php">LIKEされた施設</a></li>
                        <li><a href="/MyPage/delete.php">退会する</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div x-data={open:false} x-cloak x-trap.noscroll="open">
            <span @click="open = !open" id="navi_btn" class="sp_only"><img src="/MyPage/images/navi.svg"></span>

            <!-- menu myPage nav -->
            <nav id="overlay_nav" x-show="open" x-transition.opacity.duration.200ms>
                <span id="close">+</span>

                <div class="sec" :class="open ? 'open' : ''" @click.outside="open = false">
                    <h2 class="logo">
                        <a href="/"><img src="/resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /><span class="ttl">マイページ</span></a>
                    </h2>

                    <div class="nav_user_sec">
                        <div class="user_info">
                            <p class="user_name">こんにちわ。鈴木さん</p>
                            <dl>
                                <dt>所有ポイント</dt>
                                <dd class="point_sec">3,000<span>point</span></dd>
                            </dl>
                        </div>
                        <div class="btn"><a href="point.php">ポイントを使う</a></div>

                        <p class=" mg_t20"><a href="point_history.php" class="line">ポイント利用・取得履歴を見る</a></p>

                    </div>
                    <!-- user_sec -->

                    <dl class="nav">
                        <dt>CONTENTS</dt>
                        <dd><a href="/MyPage">トップページ</a></dd>

                        <dd><a href="reserve.php">ご予約中施設</a></dd>
                        <dd><a href="point.php">ポイントを使う</a></dd>
                        <dd><a href="news.php">お知らせ</a></dd>
                        <dd><a href="point_history.php">ポイント利用履歴</a></dd>

                        <dt>その他・履歴</dt>
                        <dd><a href="use_history.php">施設ご利用履歴</a></dd>
                        <dd><a href="voice_history.php">口コミ履歴</a></dd>
                        <dd><a href="like_history.php">LIKEされた施設</a></dd>

                        <dt>ユーザー設定</dt>
                        <dd><a href="/MyPage/setting.php"">登録情報設定</a></dd>
				
                        <dt>その他</dt>
                        <dd><a onclick=" javascript:confirm('ログアウトします。宜しいですか？')">ログアウト</a></dd>
                        <dd><a href="/MyPage/delete.php">退会する</a></dd>
                    </dl>
                </div>
            </nav>
        </div>
    </div>
</header>