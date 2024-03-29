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
	<link rel="stylesheet" href="resources/css/base_sp.css?1.1">
	<link rel="stylesheet" href="resources/css/venue_list.css?1.1">
	<link rel="stylesheet" href="resources/css/venue_list_sp.css">
	<script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="resources/js/config.js"></script>
	<script type="text/javascript" src="resources/js/smoothScroll.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="resources/js/html5shiv.js"></script>
	<![endif]-->
	
	<script>
	$(function() {
		$('.result_list form > ul > li:nth-child(-n+2) ').click(function(e) {
			var select = '.' + $(this).attr('class');
			$('#overlay_search div > ul').css('display','none');
			$('#overlay_search div ' + select).css('display','block');
			$('#overlay_search div button[type="button"]').css('display','none');
			if(select==".detail")$('#overlay_search div button[type="button"]').css('display','inline-block');
			$('#overlay_search').fadeIn();
			$('html').addClass('overlay');
		});
		$('#overlay_search div button[type="button"]').click(function(e) {
			$('.detail input[type="checkbox"]').prop('checked',false);
			$('.detail input[type="radio"]').prop('checked',false);
			$('.detail input[type="text"]').val('');
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
				<li class="location">地域で検索する</li>
				<li class="detail">さらに絞り込む</li>
			</ul>
			
			<div id="overlay_search">
				<div>
					<span id="close">+</span>
					
					<button>検索する</button>
					<button type="button">リセット</button>

					<ul class="location">
						<li>
							<dl>
								<dt>北海道エリア</dt>
								<dd><label><input type="checkbox"><span>道央</span></label></dd>
								<dd><label><input type="checkbox"><span>道南</span></label></dd>
								<dd><label><input type="checkbox"><span>道北</span></label></dd>
								<dd><label><input type="checkbox"><span>道東</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>東北エリア</dt>
								<dd><label><input type="checkbox"><span>青森県</span></label></dd>
								<dd><label><input type="checkbox"><span>秋田県</span></label></dd>
								<dd><label><input type="checkbox"><span>岩手県</span></label></dd>
								<dd><label><input type="checkbox"><span>山形県</span></label></dd>
								<dd><label><input type="checkbox"><span>宮城県</span></label></dd>
								<dd><label><input type="checkbox"><span>福島県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>関東エリア</dt>
								<dd><label><input type="checkbox"><span>東京都</span></label></dd>
								<dd><label><input type="checkbox"><span>茨城県</span></label></dd>
								<dd><label><input type="checkbox"><span>栃木県</span></label></dd>
								<dd><label><input type="checkbox"><span>群馬県</span></label></dd>
								<dd><label><input type="checkbox"><span>埼玉県</span></label></dd>
								<dd><label><input type="checkbox"><span>千葉県</span></label></dd>
								<dd><label><input type="checkbox"><span>神奈川県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>中部エリア</dt>
								<dd><label><input type="checkbox"><span>新潟県</span></label></dd>
								<dd><label><input type="checkbox"><span>富山県</span></label></dd>
								<dd><label><input type="checkbox"><span>石川県</span></label></dd>
								<dd><label><input type="checkbox"><span>福井県</span></label></dd>
								<dd><label><input type="checkbox"><span>山梨県</span></label></dd>
								<dd><label><input type="checkbox"><span>長野県</span></label></dd>
								<dd><label><input type="checkbox"><span>岐阜県</span></label></dd>
								<dd><label><input type="checkbox"><span>静岡県</span></label></dd>
								<dd><label><input type="checkbox"><span>愛知県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>近畿エリア</dt>
								<dd><label><input type="checkbox"><span>三重県</span></label></dd>
								<dd><label><input type="checkbox"><span>滋賀県</span></label></dd>
								<dd><label><input type="checkbox"><span>京都府</span></label></dd>
								<dd><label><input type="checkbox"><span>大阪府</span></label></dd>
								<dd><label><input type="checkbox"><span>兵庫県</span></label></dd>
								<dd><label><input type="checkbox"><span>奈良県</span></label></dd>
								<dd><label><input type="checkbox"><span>和歌山県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>中国エリア</dt>
								<dd><label><input type="checkbox"><span>岡山県</span></label></dd>
								<dd><label><input type="checkbox"><span>広島県</span></label></dd>
								<dd><label><input type="checkbox"><span>鳥取県</span></label></dd>
								<dd><label><input type="checkbox"><span>島根県</span></label></dd>
								<dd><label><input type="checkbox"><span>山口県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>四国エリア</dt>
								<dd><label><input type="checkbox"><span>香川県</span></label></dd>
								<dd><label><input type="checkbox"><span>徳島県</span></label></dd>
								<dd><label><input type="checkbox"><span>高知県</span></label></dd>
								<dd><label><input type="checkbox"><span>愛媛県</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>九州エリア</dt>
								<dd><label><input type="checkbox"><span>福岡県</span></label></dd>
								<dd><label><input type="checkbox"><span>佐賀県</span></label></dd>
								<dd><label><input type="checkbox"><span>長崎県</span></label></dd>
								<dd><label><input type="checkbox"><span>熊本県</span></label></dd>
								<dd><label><input type="checkbox"><span>大分県</span></label></dd>
								<dd><label><input type="checkbox"><span>宮崎県</span></label></dd>
								<dd><label><input type="checkbox"><span>鹿児島県</span></label></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt>沖縄エリア</dt>
								<dd><label><input type="checkbox"><span>沖縄本島</span></label></dd>
								<dd><label><input type="checkbox"><span>離島</span></label></dd>
							</dl>
						</li>

					</ul>
					
					<ul class="detail">
						<li>
							<dl>
								<dt>カテゴリー</dt>
								<dd><label><input type="checkbox"><span>肉</span></label></dd>
								<dd><label><input type="checkbox"><span>魚</span></label></dd>
								<dd><label><input type="checkbox"><span>ドリンク</span></label></dd>
								<dd><label><input type="checkbox"><span>スーパー</span></label></dd>
								<dd><label><input type="checkbox"><span>備品</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>BBQセット</dt>
								<dd><label><input type="radio" name="BBQセット"><span>有り</span></label></dd>
								<dd><label><input type="radio" name="BBQセット"><span>無し</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>BBQ場からの距離</dt>
								<dd><label><input type="radio" name="BBQ場からの距離"><span>徒歩5分以内</span></label></dd>
								<dd><label><input type="radio" name="BBQ場からの距離"><span>徒歩6分〜10分</span></label></dd>
								<dd><label><input type="radio" name="BBQ場からの距離"><span>徒歩11分〜20分</span></label></dd>
								<dd><label><input type="radio" name="BBQ場からの距離"><span>それ以上</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>駐車場</dt>
								<dd><label><input type="radio" name="駐車場"><span>有り</span></label></dd>
								<dd><label><input type="radio" name="駐車場"><span>無し</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>デリバリー</dt>
								<dd><label><input type="radio" name="デリバリー"><span>有り</span></label></dd>
								<dd><label><input type="radio" name="デリバリー"><span>無し</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>注文</dt>
								<dd><label><input type="radio" name="注文"><span>当日のみ</span></label></dd>
								<dd><label><input type="radio" name="注文"><span>当日、事前注文</span></label></dd>
								<dd><label><input type="radio" name="注文"><span>事前注文のみ</span></label></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>決済方法</dt>
								<dd><label><input type="radio" name="決済方法"><span>現金</span></label></dd>
								<dd><label><input type="radio" name="決済方法"><span>クレジット</span></label></dd>
								<dd><label><input type="radio" name="決済方法"><span>電子マネー</span></label></dd>
							</dl>
						</li>
						<li class="w100">
							<dl>
								<dt>検索ワード</dt>
								<dd><input type="text" placeholder="検索ワード"></dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
		</form>
		
		
		<section class="cont">
			<table>
				<tr>
					<th>地域条件</th>
					<td>東京 / 沖縄県 / 石川県</td>
				</tr>
				<tr>
					<th>その他条件</th>
					<td>LIKE（0~100） / 24時間営業  / 検索ワード（美味しい肉）</td>
				</tr>
			</table>
			
			<p>「120件」の食材SPOTが見つかりました。</p>

			<div class="recommend_sec">
				<h2><span>Baviおすすめ食材スポット</span></h2>
				
				<ul class="list shop">
					<li class="recommend">
						
						<div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店"/></div>
						<a href="venue_detail.html">
							<figure class="kyusyu"><img src="resources/images/venue_list/result_01.jpg" alt="多摩川緑地バーベキュー広場" />
							</figure>
							
							<h3>多摩川緑地バーベキュー広場</h3>
							
							<p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>
							
							<div class="stars small">
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star_half.png" alt="星半数個" />
								<img src="resources/images/star_none.png" alt="星無し" />
								<span class="only_pc">3.5 / 5.0</span>
							</div>
							
							<dl class="like small">
								<dt>&hearts;</dt>
								<dd>123<span>LIKE</span></dd>
							</dl>
						</a>
					</li>
	
					<li class="recommend">
						
						<div class="colona_icon"><img src="resources/images/icon_colona.png" alt="コロナ対策推奨店"/></div>
						<a href="venue_detail.html">
							<figure class="kyusyu"><img src="resources/images/venue_list/result_01.jpg" alt="多摩川緑地バーベキュー広場" />
							</figure>
							
							<h3>多摩川緑地バーベキュー広場</h3>
							
							<p>遊ぶ施設が公園内・大きな芝生エリアがあり大人数のお客様に大人気。</p>
							
							<div class="stars small">
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star.png" alt="星1個" />
								<img src="resources/images/star_half.png" alt="星半数個" />
								<img src="resources/images/star_none.png" alt="星無し" />
								<span class="only_pc">3.5 / 5.0</span>
							</div>
							
							<dl class="like small">
								<dt>&hearts;</dt>
								<dd>123<span>LIKE</span></dd>
							</dl>
						</a>
					</li>
	
				</ul>
			</div>
			
			<h2>食材SPOTの検索結果</h2>
			
			<nav>
				<ul>
					<li class="current"><a href="">人気順</a></li>
					<li><a href="">評価順</a></li>
					<li><a href="">LIKE順</a></li>
					<li><a href="">新着順</a></li>
				</ul>
			</nav>
			
			<ul class="list shop">
				<li>
					<a href="shop_detail.html">
						<figure class="shikoku"><img src="resources/images/spot_list/shop1.jpg" alt="世田谷 朝日屋酒店" /></figure>
						
						<h3>世田谷 朝日屋酒店</h3>
						
						<p>小田急豪徳寺（世田谷区）にあ地酒を専門とし日本全国の地酒をお取り扱いしています。</p>
						
						<div class="stars small">
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star_half.png" alt="星半数個" />
							<img src="resources/images/star_none.png" alt="星無し" />
							<span class="only_pc">3.5 / 5.0</span>
						</div>
						
						<dl class="like small">
							<dt>&hearts;</dt>
							<dd>123<span>LIKE</span></dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="">
						<figure class="chubu"><img src="resources/images/spot_list/shop2.jpg" alt="" /></figure>
						
						<h3>ミートアンドデリ 兵庫屋本店</h3>
						
						<p>四谷三丁目駅から徒歩1分。総合は1910年（明治43年）の老舗精肉店。</p>
						
						<div class="stars small">
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star_half.png" alt="星半数個" />
							<img src="resources/images/star_none.png" alt="星無し" />
							<span class="only_pc">3.5 / 5.0</span>
						</div>
						
						<dl class="like small">
							<dt>&hearts;</dt>
							<dd>123<span>LIKE</span></dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="venue_detail.html">
						<figure class="kyusyu"><img src="resources/images/spot_list/shop1.jpg" alt="世田谷 朝日屋酒店" /></figure>
						
						<h3>世田谷 朝日屋酒店</h3>
						
						<p>小田急豪徳寺（世田谷区）にあ地酒を専門とし日本全国の地酒をお取り扱いしています。小田急豪徳寺（世田谷区）にあ地酒を専門とし日本全国の地酒をお取り扱いしています。</p>
						
						<div class="stars small">
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star_half.png" alt="星半数個" />
							<img src="resources/images/star_none.png" alt="星無し" />
							<span class="only_pc">3.5 / 5.0</span>
						</div>
						
						<dl class="like small">
							<dt>&hearts;</dt>
							<dd>123<span>LIKE</span></dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="">
						<figure class="hokkaido"><img src="resources/images/spot_list/shop2.jpg" alt="" /></figure>
						
						<h3>ミートアンドデリミートアンドデリミートアンドデリ 兵庫屋本店</h3>
						
						<p>四谷三丁目駅から徒歩1分。総合は1910年（明治43年）の老舗精肉店。</p>
						
						<div class="stars small">
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star.png" alt="星1個" />
							<img src="resources/images/star_half.png" alt="星半数個" />
							<img src="resources/images/star_none.png" alt="星無し" />
							<span class="only_pc">3.5 / 5.0</span>
						</div>
						
						<dl class="like small">
							<dt>&hearts;</dt>
							<dd>123<span>LIKE</span></dd>
						</dl>
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
