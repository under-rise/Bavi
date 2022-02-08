<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title></title>
	<link rel="stylesheet" href="resources/css/sanitize.css">
	<link rel="stylesheet" href="resources/css/base.css?1.1">
	<link rel="stylesheet" href="resources/css/base_sp.css">
	<link rel="stylesheet" href="resources/css/venue_detail.css?1.2">
	<link rel="stylesheet" href="resources/css/venue_detail_sp.css?1.2">
	<link rel="stylesheet" href="resources/slick/slick.css" />
	<link rel="stylesheet" href="resources/slick/slick-theme.css" />
	<script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="resources/js/config.js"></script>
	<script type="text/javascript" src="resources/js/smoothScroll.js"></script>
	<script type="text/javascript" src="resources/js/jquery.rwdImageMaps.js"></script>
	<script type="text/javascript" src="resources/slick/slick.min.js"></script>
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
				<li><a href="#venue">会場詳細</a></li>
				<li><a href="#shop">売店情報</a></li>
				<li><a href="#campaign">キャンペーン</a></li>
				<li><a href="#access">アクセス</a></li>
				<li><a href="#spot">周辺SPOT</a></li>
				<li><a href="#voice">口コミ</a></li>
			</ul>
		</nav>
		
		<section id="venue" class="cont">
			<h2 class="tit"><span class="kanto">東 京</span>多摩川緑地バーベキュー広場</h2>
			
			<section>
				<div class="double_slick">
                    <div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店"/></div>
					<div class="main_slick">
						<div><img src="resources/images/venue/venue1.png" alt="" /></div>
						<div><img src="resources/images/venue/spot2.png" alt="" /></div>
						<div><img src="resources/images/venue/venue3.png" alt="" /></div>
					</div>
					
					<ul class="slick_nav">
						<li><img src="resources/images/venue/venue1.png" alt="" /></li>
						<li><img src="resources/images/venue/spot2.png" alt="" /></li>
						<li><img src="resources/images/venue/venue3.png" alt="" /></li>
					</ul>
				</div>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star_half.png" alt="星半数個" />
					<img src="resources/images/star_none.png" alt="星無し" />
					<span>3.5 / 5.0</span>
				</div>
				
				<dl class="like">
					<dt>&hearts;</dt>
					<dd>123<span>LIKE</span></dd>
				</dl>
				
				<h3>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</h3>
				
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			</section>
			
            <div class="colona_sec">
				<h3>コロナ禍における営業について</h3>
				
                <div>
                <dl>
                <dt>営業状況</dt>
                <dd><span class="open">営業中 or 休業中</span></dd>
                </dl>
                
                 <dl>
                <dt>コロナ禍<br>1組人数制限</dt>
                <dd>◯◯◯人まで</dd>
                </dl>
                
                <dl>
                <dt>コロナ禍<br>利用人数制限</dt>
                <dd>◯◯％上限</dd>
                </dl>
                
                
                <dl>
                <dt>お約束事項</dt>
                <dd>コメントコメントコメントコメントコメントコメントコメント</dd>
                </dl>
                
                <dl>
                <dt>会場からのコメント</dt>
                <dd>コメントコメントコメントコメントコメントコメントコメント</dd>
                </dl>
				</div>
			
			</div>
            
			<section>
				<h3><img src="resources/images/icon_news.png" alt="NEW!" />会場からの新着NEWS</h3>
				
				<img src="resources/images/venue/news.png" alt="会場からの新着NEWS" />
				
				<h4><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h4>
				
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			</section>
			
			<a href="" class="link_btn">予約する</a>
		</section>
		
		
		<section id="detail" class="cont">
			<h2>会場詳細</h2>
			
			<ul>
				<li>
					<figure>
						<img src="resources/images/venue/detail1.png" alt="料金無料" />
						
						<figcaption>料金無料</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail2.png" alt="予約必要なし" />
						
						<figcaption>予約必要<br />なし</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail3.png" alt="トイレあり" />
						
						<figcaption>トイレあり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail4.png" alt="屋根あり" />
						
						<figcaption>屋根あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail5.png" alt="ゴミ捨て場あり" />
						
						<figcaption>ゴミ捨て場<br />あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail6.png" alt="ペット同伴可能" />
						
						<figcaption>ペット同伴<br />可能</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail7.png" alt="管理人あり" />
						
						<figcaption>管理人あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail8.png" alt="自販機・売店あり" />
						
						<figcaption>自販機・売店<br />あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail9.png" alt="宿泊施設あり" />
						
						<figcaption>宿泊施設<br />あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail10.png" alt="シャワーあり" />
						
						<figcaption>シャワー<br />あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail11.png" alt="かまどあり" />
						
						<figcaption>かまど<br />あり</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="resources/images/venue/detail12.png" alt="食材持込可能" />
						
						<figcaption>食材持込<br />可能</figcaption>
					</figure>
				</li>
			</ul>
			
			<table>
				<tr>
					<th>エリア</th>
					<td>関東 / 東京</td>
					<th>予約</th>
					<td>関東 / 東京</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>東京都千代田区臨海町六丁目地先</td>
					<th>主な施設</th>
					<td>男性トイレ3 女性トイレ3 </td>
				</tr>
				<tr>
					<th>ご利用時間</th>
					<td>09:00:00〜16:00:00</td>
					<th>禁止事項</th>
					<td>花火、騒音等迷惑行為、宿泊</td>
				</tr>
				<tr>
					<th>料金</th>
					<td>無料</td>
					<th>その他</th>
					<td>ペット可（要リード）、直火禁止</td>
				</tr>
			</table>
		</section>
		
		
		<section id="shop" class="cont">
			<h2>売店情報</h2>
			
			<!--<p class="no_data">現在、売店情報はありません。</p>-->
			
			<section>
				<img src="resources/images/venue/shop1.png" alt="" />
				
				<h3>売店情報タイトル売店情報タイトル売店情報タイトル売店情報</h3>
				
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			</section>
			
			<table>
				<tr>
					<th>商品名</th>
					<td>商品説明商品説明商品説明商品説明</td>
					<td>￥300<span class="small">（税別）</span></td>
				</tr>
				<tr>
					<th>商品名商品名商品名</th>
					<td>商品説明商品説明商品説明商品説明</td>
					<td>￥300<span class="small">（税別）</span></td>
				</tr>
				<tr>
					<th>商品名商品名</th>
					<td>商品説明商品説明商品説明商品説明</td>
					<td><span class="bold">要確認</span></td>
				</tr>
				<tr>
					<th>商品名商品名商品名</th>
					<td>商品説明商品説明商品説明商品説明</td>
					<td><span class="bold">要確認</span></td>
				</tr>
			</table>
			
			<a href="javascript:void(0)" class="more_btn">商品をもっと見る</a>
		</section>
		
		
		<section id="campaign" class="cont">
			<h2>キャンペーン</h2>
			
			<!--<p class="no_data">現在、キャンペーン情報はありません。</p>-->
			
			<figure><img src="resources/images/venue/campaign.png" alt="キャンペーン" /></figure>
			
			<section>
				<h3><span>2021.01.31(MON)</span>タイトルタイトルタイトルタイトルタイトルタイトル</h3>
				
				<p>テキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキスト</p>
			</section>
		</section>
		
		
		<section id="access" class="cont">
			<h2>アクセス</h2>
			
			<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12969.388296947453!2d139.85144952957396!3d35.64381962101789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d518377e105%3A0xa10bf2d44c6c4b59!2z6JGb6KW_6Ieo5rW35YWs5ZySIOODkOODvOODmeOCreODpeODvOW6g-WgtA!5e0!3m2!1sja!2sjp!4v1613655661209!5m2!1sja!2sjp" width="640" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
			
			<p>東京都千代田区臨海町六丁目地先<br />TEL: 03-0000-0000</p>
		</section>
		
		
		<section id="spot" class="cont">
			<h2>周辺スポット</h2>
			
			<p>全会場周辺の会場・食材SPOTをご紹介。</p>
			
			<div class="slick">
				<div class="item">
					<a href="">
						<img src="resources/images/venue/spot1.png" alt="九州" />
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/venue/spot2.png" alt="四国" />
					
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/venue/spot1.png" alt="九州" />
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/venue/spot2.png" alt="四国" />
					
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
					<dt>まえたかさん</dt>
					<dd>（男性 / 40代）</dd>
				</dl>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star_half.png" alt="星半数個" />
					<span>4.5 / 5.0</span>
				</div>
				
				<h3>タイトルタイトルタイトルタイトルタイトル</h3>
				
				<p>接客が素晴らしかったです。出迎えてくださったスタッフの方がとてもにこやかで親切にしてくださり、最初からとても印象が良かったです。それからご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。</p>
			</section>
			
			<section>
				<dl>
					<dt>まえたかさん</dt>
					<dd>（男性 / 40代）</dd>
				</dl>
				
				<div class="stars">
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star.png" alt="星1個" />
					<img src="resources/images/star_half.png" alt="星半数個" />
					<span>4.5 / 5.0</span>
				</div>
				
				<h3>タイトルタイトルタイトルタイトルタイトル</h3>
				
				<p>接客が素晴らしかったです。出迎えてくださったスタッフの方がとてもにこやかで親切にしてくださり、最初からとても印象が良かったです。それからご飯がとても美味しかったです。感染症対策をしっかりと行い準備してくれたので安心でした。全体的に居心地の良い素敵な宿でした。また行きたいです。</p>
				
				<section>
					<h4>多摩川緑地バーベキュー広場からの返信</h4>
					
					<p>この度はホテル南風荘をご利用いただきまして、誠にありがとうございました。「接客が素晴らしい」その一言が、とても嬉しく励みになります。感染対策も出来る限りの対応となっておりますが、安心してお過ごしいただけましたようで幸いです。</p>
				</section>
			</section>
			
			<a href="javascript:void(0)" class="more_btn">口コミをもっと見る</a>
            
            <div class="kuchikomi_btn">
            <a href="question.html"><span>口コミを書きませんか？</span></a>
            </div>
            
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
