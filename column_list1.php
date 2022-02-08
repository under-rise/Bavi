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
	<link rel="stylesheet" href="resources/css/base.css">
	<link rel="stylesheet" href="resources/css/base_sp.css">
	<link rel="stylesheet" href="resources/css/column_list.css">
	<link rel="stylesheet" href="resources/css/column_list_sp.css">
	<link rel="stylesheet" href="resources/css/column.css">
	<link rel="stylesheet" href="resources/css/column_sp.css">
	<link rel="stylesheet" href="resources/slick/slick.css" />
	<link rel="stylesheet" href="resources/slick/slick-theme.css" />
	<script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="resources/js/config.js"></script>
	<script type="text/javascript" src="resources/js/smoothScroll.js"></script>
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
	
	
	<article class="result_list">
		<form>
			<ul>
				<li class="category">カテゴリー・ワード検索</li>
				<li class="tag">タグで絞り込む</li>
			</ul>
			
			<div id="overlay_search">
				<div>
					<span id="close">+</span>
					
					<ul class="category">
						<li class="w100">
							<dl>
								<dt>カテゴリー</dt>
								<dd><label><img src="resources/images/column/column1.png" alt="アドバイス" /><input type="checkbox"><span>アドバイス</span></label></dd>
								<dd><label><img src="resources/images/column/column2.png" alt="アイテム" /><input type="checkbox"><span>アイテム</span></label></dd>
								<dd><label><img src="resources/images/column/column3.png" alt="グルメ" /><input type="checkbox"><span>グルメ</span></label></dd>
								<dd><label><img src="resources/images/column/column4.png" alt="会 場" /><input type="checkbox"><span>会場</span></label></dd>
							</dl>
						</li>
						<li class="w100">
							<dl>
								<dt>検索ワード</dt>
								<dd class="w100"><input type="text" placeholder="検索ワード"></dd>
							</dl>
						</li>
					</ul>
					
					<ul class="tag">
						<li class="w100">
							<dl>
								<dt>タグ一覧</dt>
								<dd><label><input type="checkbox"><span>#お肉</span></label></dd>
								<dd><label><input type="checkbox"><span>#おすすめキャンプ場</span></label></dd>
								<dd><label><input type="checkbox"><span>#アウトドア</span></label></dd>
								<dd><label><input type="checkbox"><span>#キャンプ初心者</span></label></dd>
								<dd><label><input type="checkbox"><span>#おしゃれキャンプ飯</span></label></dd>
								<dd><label><input type="checkbox"><span>#豚肉</span></label></dd>
							</dl>
						</li>
					</ul>
					
					<button>検索する</button>
				</div>
			</div>
		</form>
		
		
		<section id="column_list" class="cont">
			<h2><img src="resources/images/column/column_h2.png" alt="COLUMN" />COLUMN</h2>
			
			<img src="resources/images/column/column1.png" alt="アドバイス" />
			
			<section>
				<h3>アドバイス</h3>
				
				<p>BAVI編集部のこれまでの経験を中心に、今すぐ役立つ情報をお届けします。準備～片付け、服装、気候対策、子ども連れの際の注意点など、BBQの困った！を解決できるアイデアが盛りだくさんです。</p>
			</section>
			
			<ul class="list">
				<li>
					<a href="column_detail.html">
						<img src="resources/images/column/news1.png" alt="九州" />
						
						<span class="advice">アドバイス</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</li>
				<li>
					<a href="column_detail.html">
						<img src="resources/images/column/news2.png" alt="九州" />
						
						<span class="item">アイテム</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</li>
				<li>
					<a href="column_detail.html">
						<img src="resources/images/column/news3.png" alt="九州" />
						
						<span class="gourmet">グルメ</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</li>
				<li>
					<a href="column_detail.html">
						<img src="resources/images/column/news1.png" alt="九州" />
						
						<span class="place">スポット</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</li>
				<li>
					<a href="column_detail.html">
						<img src="resources/images/column/news2.png" alt="九州" />
						
						<span class="advice">アドバイス</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストトテキストテキストトテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</li>
			</ul>
			
			<nav class="pager">
				<ul>
					<li class="prev"><a href=""><前のページ</a></li>
					<li><a href="">1</a></li>
					<li class="current"><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li class="dot">…</li>
					<li class="next"><a href="">次のページ></a></li>
				</ul>
			</nav>
		</section>
		
		
		<section id="news" class="cont">
			<h2>新着コラム</h2>
			
			<p>BBQで役立つ最新情報をCHECK!!</p>
			
			<div class="slick">
				<div class="item">
					<a href="">
						<img src="resources/images/column/news1.png" alt="九州" />
						
						<span class="advice">アドバイス</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news2.png" alt="四国" />
						
						<span class="item">アイテム</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news3.png" alt="九州" />
						
						<span class="gourmet">グルメ</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news2.png" alt="四国" />
						
						<span class="place">会場</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
			</div>
			
			<a href="" class="link_btn">もっと見る</a>
		</section>
		
		
		<section id="popular" class="cont">
			<h2>人気コラム</h2>
			
			<p>みんなが見ている人気のアイデア特集★</p>
			
			<div class="slick">
				<div class="item">
					<a href="">
						<img src="resources/images/column/news1.png" alt="九州" />
						
						<span class="advice">アドバイス</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news2.png" alt="四国" />
						
						<span class="item">アイテム</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news3.png" alt="九州" />
						
						<span class="gourmet">グルメ</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
				<div class="item">
					<a href="">
						<img src="resources/images/column/news2.png" alt="四国" />
						
						<span class="place">会場</span>
						
						<h3><span>2021.2.24(MON)</span>タイトルタイトルタイトルタイトル</h3>
						
						<p>テキストテキストテキストテキストテキストテキストテキストテキスト<span>続きを見る＞</span></p>
					</a>
				</div>
			</div>
			
			<a href="" class="link_btn">もっと見る</a>
		</section>	</article>
	
	
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
