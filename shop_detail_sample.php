<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title>冷食専門店「NIKUO CIRCUS」</title>
	<link rel="stylesheet" href="resources/css/sanitize.css">
	<link rel="stylesheet" href="resources/css/base.css?1.1">
	<link rel="stylesheet" href="resources/css/base_sp.css?1.1">
	<link rel="stylesheet" href="resources/css/shop_detail.css?1.4">
	<link rel="stylesheet" href="resources/css/shop_detail_sp.css?1.1">
	<link rel="stylesheet" href="resources/slick/slick.css" />
	<link rel="stylesheet" href="resources/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="resources/js/config.js?1.1"></script>
	<script type="text/javascript" src="resources/js/smoothScroll.js"></script>
	<script type="text/javascript" src="resources/js/jquery.rwdImageMaps.js"></script>
	<script type="text/javascript" src="resources/slick/slick.min.js"></script>
    <script type="text/javascript" src="resources/js/shop_spot.js"></script>  <!--20210729追加-->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
		$(function() {
			$('.slick').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 800,
				infinite: true,
				fade:false,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				slidesToShow: 2,
				slidesToScroll: 1,
				cssEase: 'linear',
				swipe:false,
			});
			
			$('.main_slick').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 800,
				infinite: true,
				fade:false,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				cssEase: 'linear',
				swipe:false,
				asNavFor: '.slick_nav'
			});
			
			$('.slick_nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.main_slick',
				arrows: false, 
				dots: false,
				centerMode: false, 
				focusOnSelect: true, 
				swipe:false
			});
		});
	</script>
</head>
<body>
<div id="loading"></div>
<div id="wrapper">
	<header>
		<h1>日本最大級のBBQプラットフォーム Bavi</h1>
		
		<a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
	</header>
	
	
	<article class="detail">
		<nav>
			<ul>
				<li><a href="#shop">店舗詳細</a></li>
				<li><a href="#menu">メニュー</a></li>
				<li><a href="#order">注文方法</a></li>
				<li><a href="#access">アクセス</a></li>
				<li><a href="#spot">周辺のBBQ場</a></li>
				<li><a href="#voice">口コミ</a></li>
			</ul>
		</nav>
		
		<section id="shop" class="cont">
			<h2 class="tit"><span class="kinki">東 京</span>Bavi Shop</h2>
			
			<section>
				<div class="double_slick">
                    <!--20210729追加-->
                    <div class="cursol">▶︎</div>
                    
					<div class="main_slick">
                         <!--20210728 add　class="modal" data-name=".gallery_sec"追加-->
						<div class="modal" data-name=".gallery_sec"><img src="sample/shop/shop_slider02.jpg" /></div>
						<div class="modal" data-name=".gallery_sec"><img src="sample/shop/shop_slider01.jpg" /></div>
                        <div class="modal" data-name=".gallery_sec"><img src="sample/shop/shop_slider03.jpg" /></div>
					</div>
					
					<ul class="slick_nav">
						<div><img src="sample/shop/shop_slider02.jpg" /></div>
						<div><img src="sample/shop/shop_slider01.jpg" /></div>
                        <div><img src="sample/shop/shop_slider03.jpg" /></div>
					</ul>
				</div>
				
				<ul class="tag">
					<li>店舗引取可</li>
					<li>デリバリー可</li>
				</ul>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星半数個" />
					<img src="resources/images/star_half.png" alt="星無し" />
					<span>4.5 / 5.0</span>
				</div>
				
				<dl class="like">
					<dt>&hearts;</dt>
					<dd>82<span>LIKE</span></dd>
				</dl>
                
                <ul class="sns_sec">
                <li class="twitter"><a href="http://twitter.com/share?text=<title>&url=<url>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="facebook"><a href="http://www.facebook.com/share.php?u=<url>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="sns_line"><a href="https://social-plugins.line.me/lineit/share?url=<url>" target="_blank"><i class="fab fa-line"></i></a></li>
                </ul>
				
				<h3>日本最大級のBBQプラットフォーム運営による「Bavi Shop」オープン</h3>
				
				<p>「Bavi」では自分好みな会場や、食材などを瞬時に探せます。また、GOOGLEアプリなどの強化連携よって、最適なルートを弾き出します。利用者、施設オーナー、店舗オーナーに全ての方が使いやすいサイトを目指してまいります。</p>
			</section>
			
			<table>
				<tr>
					<th>エリア</th>
					<td>関東 / 東京</td>
					<th>業態</th>
					<td>精肉店</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>東京都千代田区臨海町六丁目地先</td>
					<th>営業時間</th>
					<td>AM10:00〜PM6:00</td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td>03-0000-0000</td>
					<th>祝日</th>
					<td>隔週日曜日</td>
				</tr>
			</table>
			
			<section class="news_sec">
                
				<h3><img src="resources/images/icon_news.png" alt="NEW!" />店舗からの新着NEWS</h3>
				
                <ul>
                <li>
                    <div class="img">
                   <img src="sample/shop/shop_slider01.jpg" />
                    </div>
                    <div class="txt">
                    <p class="day">2021.2.24(MON)</p>
				   <h4>キングオブキングのセットです</h4>
				   <p>和牛、魚介、野菜、文句なしのセットです。これを買っておけば、食材に関して不満はないでしょう。キングオブキングのセットです！</p>
                    </div>
                </li>
                    
                <li>
                    <div class="img">
                   <img src="sample/shop/shop_slider03.jpg" />
                    </div>
                    <div class="txt">
                    <p class="day">2021.2.24(MON)</p>
				   <h4>アウトドアキャリーカート（レンタル）</h4>
				   <p>駐車場から離れているバーベキュー上に行く場合には最適なアイテムです！荷物運びの際に重宝します。</p>
                    </div>
                </li>
                    
                <li>
                    <div class="img">
                    <img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
                    </div>
                    <div class="txt">
                    <p class="day">2021.2.24(MON)</p>
				   <h4>タイトルタイトルタイトルタイトル</h4>
				   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                    </div>
                </li>
                    
                <li>
                    <div class="img">
                    <img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
                    </div>
                    <div class="txt">
                   <p class="day">2021.2.24(MON)</p>
				   <h4>タイトルタイトルタイトルタイトル</h4>
				   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                    </div>
                </li>
                </ul>
                
		    </section>
            
			
			<a href="#order" class="link_btn">注文する</a>
		</section>
		
        <!--20210729 add-->
        <div class="gallery_sec modal_sec" style="display: none;">

            <div class="inr">

             <span class="close">+</span>

             <h3>多摩川緑地バーベキュー広場</h3>
             <ul>
                <li><img src="sample/shop/shop_slider02.jpg" alt="" /></li>
                <li><img src="sample/shop/shop_slider01.jpg" alt="" /></li>
                <li><img src="sample/shop/shop_slider03.jpg" alt="" /></li>
            </ul>

            </div>
            <!--inr end-->

        </div>
        <!--20210729 ここまで-->
		
		<section id="menu" class="cont">
			<h2>メニュー</h2>
			
			<h3>BBQメニュー</h3>
			
			<section>
				<img src="sample/shop/menu01.jpeg" alt=""/>
				
				<h4>BBQ用満腹お肉セット（5人前）</h4>
				
				<p>和牛、魚介、野菜、文句なしのセットです。これを買っておけば、食材に関して不満はないでしょう。キングオブキングのセットです！</p>
				
				<span>お一人様 <span>¥3,000円<span>（税別）</span></span></span>
			</section>
			
			<section>
				<img src="sample/shop/menu02.jpeg" alt=""/>
				
				<h4>BBQ用ドリンクセット（5人前）</h4>
				
				<p>ビール5本、ハイボール5、酎ハイ5本、コーラ1本、オレンジ1本、お茶1本、お水1本、重いドリンクはお届け！キンキンに冷やしてお待ちしております！</p>
				
				<span>お一人様 <span>¥1,200円<span>（税別）</span></span></span>
			</section>
			
			
			<h3>単品メニュー</h3>
			
			<section class="single">
				<img src="sample/shop/tanpin.jpeg" alt=""/>
				
				<h4>和牛和牛A4~A5ランク上部位（300g）</h4>
				
				<p>お肉のみのアイテムです！BBQでもご家庭でもお楽しみいただけます！和牛と牛タン、ホルモンま、キムチまでで入る優れもの。
品質重視で値段も抑えたい方には必須です！</p>
			</section>
			
			<table>
				<tr>
					<th>厚切り牛タン 300g</th>
					<td>タン元で非常に柔らかさも安定しております。</td>
					<td>￥5,184<span class="small">（税別）</span></td>
				</tr>
				<tr>
					<th>和牛A4~A5ランク特上部位（300g）</th>
					<td>ミスジ、または上ロースとなります。</td>
					<td>￥6,912<span class="small">（税別）</span></td>
				</tr>
				
				<tr>
					<th>プリプリホルモン丸腸 300g</th>
					<td>ぷりぷりの食感で女性に非常に人気な一品です</td>
					<td>要確認</td>
				</tr>
			</table>
			
			<a href="javascript:void(0)" class="more_btn">商品をもっと見る</a>
		</section>
		
		
		<section id="order" class="cont">
			<h2>注文方法</h2>
			
			<section>
				<h3><img src="resources/images/shop/order_1_h2.png" alt="アイコン" />店舗へ注文する</h3>
				
				<ul>
					<li>
						<h4>電話で注文する</h4>
						
						<a href="tel:0300000000">03-0000-0000<span>（営業時間：10:00〜18:00 土日祝覗く）</span></a>
					</li>
					<li>
						<h4>Webで注文する</h4>
						
						<a href=""><img src="resources/images/shop/web_icon.png" alt="アイコン" />Web Site</a>
					</li>
				</ul>
				
				<table>
					<tr>
						<th>住所</th>
						<td>東京都千代田区臨海町六丁目地先</td>
					</tr>
					<tr>
						<th>E-Mail</th>
						<td>info@meet-shop.com</td>
					</tr>
					<tr>
						<th>URL</th>
						<td><a href="https://meet-shop.com/order/" target="_blank">https://meet-shop.com/order/</a></td>
					</tr>
				</table>
			</section>
			
			<section>
				<h3><img src="resources/images/shop/order_2_h2.png" alt="アイコン" />Baviで注文する</h3>
				
				<ul>
					<li>
						<h4>電話で注文する</h4>
						
						<a href="">03-5849-3221<span>（営業時間：10:00〜18:00 土日祝覗く）</span></a>
					</li>
					<li>
						<h4>ECサイトで注文</h4>
						
						<a href=""><img src="resources/images/shop/cart_icon.png" alt="アイコン" />SHOPPING Site</a>
					</li>
				</ul>
				
				<table>
					<tr>
						<th>住所</th>
						<td>東京都足立区大谷田3-21-6</td>
					</tr>
					<tr>
						<th>E-Mail</th>
						<td>order@bavi.com</td>
					</tr>
					<tr>
						<th>URL</th>
						<td><a href="https://bavi.com/order/" target="_blank">https://bavi.com/order/</a></td>
					</tr>
				</table>
			</section>
		</section>
		
		
		<section id="access" class="cont">
			<h2>アクセス</h2>
			
			<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12969.388296947453!2d139.85144952957396!3d35.64381962101789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d518377e105%3A0xa10bf2d44c6c4b59!2z6JGb6KW_6Ieo5rW35YWs5ZySIOODkOODvOODmeOCreODpeODvOW6g-WgtA!5e0!3m2!1sja!2sjp!4v1613655661209!5m2!1sja!2sjp" width="640" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
			
			<p>東京都千代田区臨海町六丁目地先<br />TEL: 03-0000-0000</p>
		</section>
		
		
		<section id="spot" class="cont">
			<h2>周辺のBBQ場</h2>
			
			<p>会場周辺のBBQ会場をご紹介。</p>
			
			<div class="slick">
				<div class="item">
					<a href="">
						<img src="sample/shop/syuhen_slider01.jpg"  alt=""/>
                        
<h3><span>2021.6.11(MON)</span>彩湖道満グリーンパーク</h3>
						
						<p>葛西臨海公園の知名度抜群の会場内にある浜辺でできる会場が「葛西海浜公園」。遊ぶ施設が公園内にたくさんあるのでお勧めです。<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="sample/shop/syuhen_slider02.jpg"  alt=""/>
					
						<h3><span>2021.3.03(MON)</span>大井埠頭中央海浜公園</h3>
						
						<p>景色が最高だとお肉がより一層美味しくなるね！トイレや水場も常設されてるから不便なくBBQが楽しめるよ！<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/shop/spot1.png" alt="九州" />
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/shop/spot2.png" alt="四国" />
					
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
			</div>
			
			<a href="" class="link_btn">もっと見る</a>
		</section>
		
		
		<section id="voice" class="cont">
			<h2>口コミ</h2>
			
			<section>
				<dl>
					<dt>田中さん</dt>
					<dd>（男性 / 20代）</dd>
				</dl>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星半数個" />
					<span>5.0 / 5.0</span>
				</div>
				
				<h3>感染症対策をしっかりと行い準備してくれたので安心でした。</h3>
				
				<p>出迎えてくださったスタッフの方がとてもにこやかで親切にしてくださり、最初からとても印象が良かったです。それからご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。</p>
			</section>
			
			<section>
				<dl>
					<dt>たけださん</dt>
					<dd>（男性 / 50代）</dd>
				</dl>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star_half.png" alt="星半数個" />
					<span>4.5 / 5.0</span>
				</div>
				
				<h3>ご飯がとても美味しかったです。</h3>
				
				<p>ご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。</p>
				
				<section>
					<h4>Bavi Shopからの返信</h4>
					
					<p>この度はBavi Shopをご利用いただきまして、誠にありがとうございました。「接客が素晴らしい」その一言が、とても嬉しく励みになります。感染対策も出来る限りの対応となっておりますが、安心してお過ごしいただけましたようで幸いです。</p>
				</section>
			</section>
			
			<a href="javascript:void(0)" class="more_btn">口コミをもっと見る</a>
		</section>
		
		<a href="" class="back_btn"><img src="resources/images/back_btn.png" alt="一覧に戻る" /></a>
		
		<a href="" class="like_btn"><img src="resources/images/like_btn.png" alt="LIKE!" /></a>
	</article>
	
	
	<footer>
		<a href="#wrapper" id="topbtn"><img src="resources/images/to_top.png" alt="ページTOPへ" /></a>
		
		<figure>
			<img src="resources/images/foot_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" />
		</figure>
		
		<ul>
			<li><a href=""><img src="resources/images/sns1.png" alt="Twitter" /></a></li>
			<li><a href=""><img src="resources/images/sns2.png" alt="You tube" /></a></li>
			<li><a href=""><img src="resources/images/sns3.png" alt="facebook" /></a></li>
			<li><a href=""><img src="resources/images/sns4.png" alt="LINE" /></a></li>
		</ul>
		
		<nav>
			<ul>
				<li><a href="">Baviについて</a></li>
				<li><a href="">お問い合わせ</a></li>
				<li><a href="">運営会社</a></li>
			</ul>
		</nav>
		
		<p>&copy; Copyright Bavi all right reserved.</p>
	</footer>
	
	
	<nav id="bottom_nav" >
		<ul>
			<li>
				<a href="/">
					<img src="resources/images/bottom_nav1.png" alt="BBQ場" />
					<span>BBQ場</span>
				</a>
			</li>
			<li>
				<a href="/spot.html">
					<img src="resources/images/bottom_nav2.png" alt="食材SPOT" />
					<span>食材SPOT</span>
				</a>
			</li>
			<li>
				<a href="/column.html">
					<img src="resources/images/bottom_nav3.png" alt="COLUMN" />
					<span>COLUMN</span>
				</a>
			</li>
			<li>
				<a href="/like.html">
					<img src="resources/images/bottom_nav4.png" alt="LIKE" />
					<span>LIKE</span>
				</a>
			</li>
			<li>
				<a id="menu_open">
					<img src="resources/images/bottom_nav5.png" alt="MENU" />
					<span>MENU</span>
				</a>
			</li>
		</ul>
	</nav>
	
	
	<nav id="overlay_nav" >
		<span id="close">+</span>
		
		<div>
			<a href="/"><img src="resources/images/head_logo.png" alt="日本最大級のBBQプラットフォーム Bavi" /></a>
			
			<dl>
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
				<dd><a href="">Baviについて</a></dd>
			</dl>
		</div>
	</nav>
</div>
</body>
</html>
