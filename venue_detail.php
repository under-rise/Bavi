<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">

	<meta property="og:title" content="日本最大級のBBQプラットフォーム Bavi">
	<meta property="og:image" content="http://bavi.tank.jp/resources/images/apple-touch-icon.png">
	<meta property="og:description" content="日本最大級のBBQプラットフォーム Bavi">
	<meta property="og:locale" content="ja_JP" />

	<link rel="apple-touch-icon" sizes="180x180" href="resources/images/apple-touch-icon.png">

	<title>しい茸ランドかさや | 日本最大級のBBQプラットフォーム Bavi</title>

	<?php include __DIR__ . '/tpl/head.php'; ?>
	<link rel="stylesheet" href="resources/css/venue_detail.css?9.2">
	<link rel="stylesheet" href="resources/css/venue_detail_sp.css?2.6">



	<link rel="stylesheet" href="resources/slick/slick.css" />
	<link rel="stylesheet" href="resources/slick/slick-theme.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<style>
		#bottom_line_btn {
			display: none;
		}
	</style>

	<link rel="stylesheet" href="resources/css/iziModal.min.css">
	<script src="resources/js/iziModal.min.js" type="text/javascript"></script>


	<script type="text/javascript">
		$(function() {
			$('.slick').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 800,
				infinite: true,
				fade: false,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				slidesToShow: 2,
				slidesToScroll: 1,
				cssEase: 'linear',
				swipe: false,
			});

			$('.main_slick').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 800,
				infinite: true,
				fade: false,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				cssEase: 'linear',
				swipe: false,
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
				swipe: false
			});

			$('.slick_coupon').slick({
				autoplay: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				focusOnSelect: true,
				swipe: true,
				adaptiveHeight: true,
			});

			$('.modal').click(function(e) {
				$('html').addClass('overlay');
				var obj = $(this).data('name');
				$(obj).fadeIn();
			});

			$('.modal_sec .close').click(function(e) {
				$('.modal_sec').fadeOut();
				$('html').removeClass('overlay');
			});

			$('.modal_sec').click(function(e) {
				if (!$(e.target).closest('.modal_sec .inr').length) {
					$(this).fadeOut();
					$('html').removeClass('overlay');
				}
			});

		});
	</script>

</head>

<body>
	<div id="loading"></div>
	<div id="wrapper">

		<?php include __DIR__ . '/tpl/header.php'; ?>


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
				<h2 class="tit"><span class="kinki">近畿</span>しい茸ランドかさや</h2>
				<section>
					<div class="double_slick">
						<div class="colona_icon"><img src="/assets/img/icon_colona.png" alt="コロナ対策推奨店" /></div>
						<div class="main_slick">
							<div class="modal" data-name=".gallery_sec"><img src="/uploads/spots/c4cbfd93dc8a4e1ba1716b08cb536123.jpg" alt="" /></div>
							<div class="modal" data-name=".gallery_sec"><img src="/uploads/spots/2bca92b3fb70f1db419990dd9426e200.jpg" alt="" /></div>
							<div class="modal" data-name=".gallery_sec"><img src="/uploads/spots/7da762121c1ec3f34d92cefcc520a7c4.jpg" alt="" /></div>
						</div>

						<ul class="slick_nav">
							<li><img src="/uploads/spots/c4cbfd93dc8a4e1ba1716b08cb536123.jpg" alt="" /></li>
							<li><img src="/uploads/spots/2bca92b3fb70f1db419990dd9426e200.jpg" alt="" /></li>
							<li><img src="/uploads/spots/7da762121c1ec3f34d92cefcc520a7c4.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="stars">
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star_half.png" alt="星半数個" />
						<img src="/assets/img/star_none.png" alt="星無し" />
						<span>3.8 / 5.0</span>
					</div>
					<dl class="like">
						<dt>&hearts;</dt>
						<dd>3<span>LIKE</span></dd>
					</dl>
					<ul class="sns_sec">
						<li class="twitter">
							<a href="https://twitter.com/share?text=しい茸ランドかさや - バーベキュー場・食材探しならBavi&url=https://bavi.jp/spot/detail/963" target="_blank"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="facebook">
							<a href="https://www.facebook.com/share.php?u=https://bavi.jp/spot/detail/963" target="_blank"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="sns_line">
							<a href="https://social-plugins.line.me/lineit/share?url=https://bavi.jp/spot/detail/963" target="_blank"><i class="fab fa-line"></i></a>
						</li>
					</ul>
					<h3>1年中OK！かさやの定番！無農薬で自然栽培されたしい茸狩り&amp;バーベキュー！</h3>
					<p>兵庫県三田市の山あいにある、自然たっぷりのレジャー施設です。もぎたてのしい茸をその場でバーベキュー。しい茸がこんなに美味しか ったなんて！と実感していただけるハズ！年中楽しめます。しい茸狩りやその他にも関西屈指のあじさい園や、昆虫好きにはたまらない珍しい昆虫の標本館など色々楽しめます。ぜひ楽しい一日を満喫してください。</p>

					<a href="/venue_order.php" class="link_btn reserve"><span>予約する</span></a>


				</section>
				<div class="colona_sec">
					<h3>コロナ禍における営業について</h3>
					<div>
						<dl>
							<dt>営業状況</dt>
							<dd><span class="open">営業中</span></dd>
						</dl>
						<dl>
							<dt>営業時間</dt>
							<dd>
								09:00〜17:00 </dd>
						</dl>
						<!--
                    <dl>
                        <dt>コロナ禍<br>1組人数制限</dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt>コロナ禍<br>利用人数制限</dt>
                        <dd></dd>
                    </dl>
                    -->
						<dl>
							<dt>お約束事項</dt>
							<dd>酒類終日停止。受付・売店はアクリルボードで仕切り、お客様の検温も実施致します。
								ご来演時の際はマスク着用をお願いしております。</dd>
						</dl>
						<dl>
							<dt>会場からのコメント</dt>
							<dd>個人のお客様と同じくお昼の営業と、かさやいちご園はコロナ対策を
								十分に気を付けながら、引き続き営業を継続させていただきます。
								何卒、宜しくお願い致します。</dd>
						</dl>
					</div>
				</div>
				<section class="news_sec">
					<h3><img src="/assets/img/icon_news.png" alt="NEW!" />会場からの新着NEWS</h3>
					<ul>
						<li>
							<div class="img">
								<img src="/uploads/spots/news/0b67070df0b371db689ba98584632065.jpg" alt="会場からの新着NEWS" />
							</div>
							<div class="txt">
								<p class="day">2022.02.13(Sun)</p>
								<h4>
									Bavi掲載のお知らせ </h4>
								<p>この度、バーベキュー情報メディア「Bavi」にて5%クーポンを発行いたしました。<br />
									お得なクーポンでございますので、ご利用くださいませ。</p>
							</div>
						</li>
						<li>
							<div class="img">
								<img src="/uploads/spots/news/covid-19_countermove963.jpg" alt="会場からの新着NEWS" />
							</div>
							<div class="txt">
								<p class="day">2021.06.10(Thu)</p>
								<h4>
									NEWS機能、コロナ禍営業枠追加リリース！ </h4>
								<p>ニュース配信、コロナ禍の営業など、新しく拡張いたしました。<br />
									今後はこちらのニュースより最新情報を入手してください。</p>
							</div>
						</li>
					</ul>
				</section>
				

				<section class="news_sec column_sec">
					<h3><img src="/assets/img/icon_column.png" alt="COLUMN" />関連コラム</h3>
					<ul>
						<li>
							<div class="txt">
							
								<dl>
									<dt class="type01">アドバイス</dt>
									<dd><a href="#">【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</a></dd>
								</dl>
								
							</div>
						</li>

						<li>
							<div class="txt">
							
								<dl>
									<dt class="type02">アイテム</dt>
									<dd><a href="#">【後編】宿泊キャンプBBQに使えるテントの種類・選び方とは?!アウトドア用品店STAFFが解説！</a></dd>
								</dl>
								
							</div>
						</li>

						<li>
							<div class="txt">
							
								<dl>
									<dt class="type03">グルメ</dt>
									<dd><a href="#">【東京都内】プロが選ぶお花見できるBBQ場（公園）4選！<2022年版>桜の花が咲いたら…お花見に出かけよう</a></dd>
								</dl>
								
							</div>
						</li>

						<li>
							<div class="txt">
								<dl>
									<dt class="type04">会場</dt>
									<dd><a href="#">誰と年に何回BBQしてる？？Twitterアンケートで聞いてみました！</a></dd>
								</dl>
								
							</div>
						</li>
						
					</ul>

				 <a href="#" class="btn">もっとコラムを見る</a>

				</section>

				
				<!--<a href="javascript:void(0);" class="modal link_btn">予約する</a>-->
			</section>
			<div class="gallery_sec modal_sec" style="display: none;">
				<div class="inr">
					<span class="close">+</span>
					<h3>しい茸ランドかさや</h3>
					<ul>
						<li><img src="/uploads/spots/c4cbfd93dc8a4e1ba1716b08cb536123.jpg" alt="" /></li>
						<li><img src="/uploads/spots/2bca92b3fb70f1db419990dd9426e200.jpg" alt="" /></li>
						<li><img src="/uploads/spots/7da762121c1ec3f34d92cefcc520a7c4.jpg" alt="" /></li>
						<li><img src="resources/images/venue/venue1.png" alt=""></li>
						<li><img src="resources/images/venue/spot2.png" alt=""></li>
						<li><img src="resources/images/venue/venue3.png" alt=""></li>
					</ul>
				</div>
				<!--inr end-->
			</div>


			<section id="detail" class="cont">
				<h2>会場詳細</h2>
				<ul>
					<li>
						<figure>
							<img src="/assets/img//venue/detail3.png" alt="トイレあり" />
							<figcaption>トイレあり</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="/assets/img//venue/detail4.png" alt="屋根あり" />
							<figcaption>屋根あり</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="/assets/img//venue/detail7.png" alt="管理人あり" />
							<figcaption>管理人あり</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="/assets/img//venue/detail8.png" alt="自動機・売店あり" />
							<figcaption>自動機・売店あり</figcaption>
						</figure>
					</li>
				</ul>

				<table>
					<tr>
						<th>エリア</th>
						<td>近畿 / 兵庫県</td>
					</tr>
					<tr>
						<th>住所</th>
						<td>兵庫県三田市上相野373</td>
					</tr>
					<tr>
						<th>主な施設</th>
						<td>トイレ、売店 </td>
					</tr>
					<tr>
						<th>禁止事項</th>
						<td>食材持込禁止、迷惑行為</td>
					</tr>
					<tr>
						<!-- その他からペットに変更されている  -->
						<th>ペット</th>
						<td>ペット同伴要相談</td>
					</tr>
				</table>
				<table>
					<tr>
						<th>平均料金</th>
						<td>しい茸狩りなし2805円～、しい茸狩り付3685円〜</td>
						<td class="btn_td">
							<a href="javascript:void(0);" class="modal modal_btn" data-name=".price_sec">確認する</a>
						</td>
					</tr>
					<tr>
						<th>ご利用時間</th>
						<td>09:00〜17:00</td>
						<td class="btn_td">
							<a href="javascript:void(0);" class="modal modal_btn" data-name=".time_sec">確認する</a>
						</td>
					</tr>
					<tr>
						<th>予約</th>
						<td>要予約</td>
						<td class="btn_td">
							<a href="javascript:void(0);" class="modal modal_btn" data-name=".reservation_sec">確認する</a>
						</td>
					</tr>
					<tr>
						<th>駐車場</th>
						<td colspan="2">駐車場あり：120台（内バス20台） 料金：無料</td>
					</tr>
				</table>
				<a href="/venue_order.php" class="link_btn reserve"><span>予約する</span></a>

			</section>
			<div class="price_sec modal_sec" style="display: none;">
				<div class="inr">
					<span class="close">+</span>
					<h3>料金について</h3>
					<div>▼手ぶら・飲食店の場合<br />
						2,000円～3,000円<br />
						※一人あたりの予算。あくまで目安であり予算を保証するものではありません。</div>
				</div>
			</div>
			<div class="time_sec modal_sec" style="display: none;">
				<div class="inr">
					<span class="close">+</span>
					<h3>利用時間について</h3>
					<div>営業期間：通年営業<br />
						営業時間：9時～17時（最終受付15時30分）<br />
						定休日：年末年始</div>
				</div>
			</div>
			<div class="reservation_sec modal_sec" style="display: none;">
				<div class="inr">
					<span class="close">+</span>
					<h3>ご予約について</h3>
					<div>
						<table class="table_style">
							<tr>
								<th>電話番号</th>
								<td><a href="tel:079-568-1301">079-568-1301</a></td>
							</tr>
							<tr>
								<th>Web</th>
								<td><a href="http://www.kasaya.net" target="_blank">http://www.kasaya.net</a></td>
							</tr>
							<tr>
								<th>問い合わせ</th>
								<td><a href="https://bavi.jp/contact" target="_blank">https://bavi.jp/contact</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<section id="shop" class="cont">

				<div class="inr">
				<h2>プラン・売店情報</h2>

				<!-- <section>
					<img src="/uploads/spots/stands/a2ff71f481799cfd4b1b29b9db6a2634.jpg" alt="" />
					<p>※当店では、三田産黒毛和牛肉、三田牛を使用しております。<br />
						※飲み物や食べ物の持ち込みはお断りさせていただいております。<br />
						※お料理の写真は4人前です。<br />
						※キッズバーベキューは小学生までです。写真は2人前です。<br />
						※当日のキャンセルは食材の関係上50％頂きます。</p>
				</section> -->

				<h3>プラン・メニュー</h3>

				<div class="menu-plan_sec">
					<ul>
						<li data-iziModal-open=".modal01">
							<figure>
								<img src="assets/img/order/img01.jpg">
								<p class="name">Aセット</p>
								<dl>
									<dt>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜、和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</dt>
									<dd>¥3,500円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">合計金額◯◯◯円以上から予約承ります</p>
							</figure>
						</li>

						<li data-iziModal-open=".modal02">
							<figure>
								<img src="assets/img/order/img02.jpg">
								<p class="name">定番食材セット</p>
								<dl>
									<dt>豚カルビ、焼き鳥、フランク</dt>
									<dd>¥6,000円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">合計金額◯◯◯円以上から予約承ります</p>
							</figure>
						</li>

						<li data-iziModal-open=".modal03">
							<figure>
								<img src="assets/img/order/none.jpg">
								<p class="name">上記区画セット＋定番食材セット</p>
								<dl>
									<dt>和牛牛カルビ、上記区画セット＋定番食材セット</dt>
									<dd>¥5,000円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">合計金額◯◯◯円以上から予約承ります</p>
							</figure>
						</li>

						<li data-iziModal-open=".modal04">
							<figure>
								<img src="assets/img/order/img01.jpg">
								<p class="name">オプションA</p>
								<dl>
									<dt>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</dt>
									<dd>¥1,000円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">◯◯◯ケ以上から予約承ります</p>
							</figure>
						</li>

						<li data-iziModal-open=".modal05">
							<figure>
								<img src="assets/img/order/img02.jpg">
								<p class="name">オプションB</p>
								<dl>
									<dt>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜、和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</dt>
									<dd>¥4,000円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">◯◯◯ケ以上から予約承ります</p>
							</figure>
						</li>

						<li data-iziModal-open=".modal06">
							<figure>
								<img src="assets/img/order/none.jpg">
								<p class="name">オプションC</p>
								<dl>
									<dt>和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜、和牛牛カルビ、豚カルビ、焼き鳥、フランク、焼きおにぎり、カット野菜</dt>
									<dd>¥13,000円<span>（税込）</span></dd>
								</dl>
								<p class="order_info">◯◯◯ケ以上から予約承ります</p>
							</figure>
						</li>
					</ul>
				</div>

				<script>
					$(function(){
						let plan_obj = []
						$('.menu-plan_sec li').each(function(index,val){
							plan_obj.push({
								img:$(val).find('img').attr('src'),
								name:$(val).find('p.name').text(),
								info:$(val).find('dt').text(),
								price:$(val).find('dd').html(),
								number:$(val).attr('data-iziModal-open').slice(1),
								order_info:$(val).find('p.order_info').html()
							});
						});
					
						if(plan_obj.length){
							$.each(plan_obj,function(index,element){

								let html = `
								<div class="plan_modal ${element.number}" data-izimodal-group="group1">
								
									<img src="${element.img}" >
									<p>${element.name}</p>
									<dl>
									<dt>${element.info}</dt>
									<dd>${element.price}</dd>
									</dl>
									<p class="order_info">${element.order_info}</p>

									<div class="modal_close" data-izimodal-close="">×</div>

									<ul>
									<li><span data-izimodal-prev=""><</span></li>
									<li><span data-izimodal-next="">></span></li>
									</ul>
									
									<a href="/venue_order.php" class="link_btn reserve"><span>予約する</span></a>
									
								</div>
								`;
								$('.menu-plan_sec').after(html)
							});	
						}
					});
				</script>

				<h3>その他・売店情報</h3>

				<table>
					<tr>
						<th>若鶏コース（しい茸狩り付き）</th>
						<td>しい茸狩り、丹波若鳥バーベキュー、焼き野菜、しい茸ご飯</td>
						<td>3,685円（税込）</td>
					</tr>
					<tr>
						<th>若鶏コース（しい茸狩りなし）</th>
						<td>しい茸、丹波若鳥バーベキュー、
							焼き野菜、しい茸ご飯</td>
						<td>2,805円（税込）</td>
					</tr>
					<tr>
						<th>豚肉コース（しい茸狩り付き）</th>
						<td>しい茸狩り、豚肉バーベキュー、
							焼き野菜、しい茸ご飯</td>
						<td>3,905円（税込）</td>
					</tr>
					<tr>
						<th>豚肉コース（しい茸狩りなし）</th>
						<td>しい茸、豚肉バーベキュー、
							焼き野菜、しい茸ご飯</td>
						<td>3,025円（税込）</td>
					</tr>
					<tr>
						<th>黒毛和牛・若鳥コース（しい茸狩り付き）</th>
						<td>しい茸狩り、 黒毛和牛バーベキュー、焼き野菜、しい茸ご飯</td>
						<td>4,235円（税込）</td>
					</tr>
					<tr>
						<th>黒毛和牛・若鳥コース（しい茸狩り無し）</th>
						<td>しい茸、 黒毛和牛バーベキュー、焼き野菜、しい茸ご飯</td>
						<td>3,355円（税込）</td>
					</tr>
					<tr>
						<th>黒毛和牛コース（しい茸狩り付き）</th>
						<td>しい茸狩り、 黒毛和牛バーベキュー、焼き野菜、しい茸ご飯</td>
						<td>4,785円（税込）</td>
					</tr>
					<tr>
						<th>黒毛和牛コース（しい茸狩りなし）</th>
						<td>しい茸、 黒毛和牛バーベキュー、焼き野菜、しい茸ご飯</td>
						<td>3,905円（税込）</td>
					</tr>
					<tr>
						<th>いちご狩り　大人</th>
						<td>中学生以上　1月上旬〜6月上旬限定</td>
						<td>2,200円（税込）</td>
					</tr>
					<tr>
						<th>いちご狩り　小人</th>
						<td>小学生　1月上旬〜6月上旬限定</td>
						<td>1,900円（税込）</td>
					</tr>
					<tr>
						<th>いちご狩り　幼児</th>
						<td>2〜６歳　1月上旬〜6月上旬限定</td>
						<td>1,200円（税込）</td>
					</tr>
					<tr>
						<th>食育体験</th>
						<td>しい茸の植菌体験やしい茸ができるまでの流れなど体験し学んでいただきます。</td>
						<td>1,100円（税込）</td>
					</tr>
				</table>

				<a href="/venue_order.php" class="link_btn reserve"><span>予約する</span></a>

				</div>

				<!--
            商品購入
            <a href="javascript:void(0)" class="modal more_btn" data-name=".shopdetail_sec">商品を詳しく見る</a>
            -->
			</section>
			<!--
        <div class="shopdetail_sec modal_sec" style="display: none;">
            <div class="inr">
                <span class="close">+</span>
                <h3>売店情報タイトル売店情報タイトル売店情報タイトル売店情報</h3>
                <div class="main">
                    <img src="resources/images/venue/shop1.png" alt="">
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                </div>

                <div class="info clearfix">

                    <div class="item">
                        <div class="checkbox_sec">
                            <input type="checkbox" name="menu_item[]">
                        </div>
                        <dl>
                            <dt>焼肉セット（800g）</dt>
                            <dd class="price">¥10,000円<span>（税込）</span></dd>
                            <dd class="caption">500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</dd>
                        </dl>
                    </div>

                    <div class="item">
                        <div class="checkbox_sec">
                            <input type="checkbox" name="menu_item[]">
                        </div>
                        <dl>
                            <dt>焼肉セット（800g）</dt>
                            <dd class="price">¥10,000円<span>（税込）</span></dd>
                            <dd class="caption">500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</dd>
                        </dl>
                    </div>

                    <div class="item">
                        <div class="checkbox_sec">
                            <input type="checkbox" name="menu_item[]">
                        </div>
                        <dl>
                            <dt>焼肉セット（800g）</dt>
                            <dd class="price">¥10,000円<span>（税込）</span></dd>
                            <dd class="caption">500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</dd>
                        </dl>
                    </div>

                    <div class="item">
                        <div class="checkbox_sec">
                            <input type="checkbox" name="menu_item[]">
                        </div>
                        <dl>
                            <dt>焼肉セット（800g）</dt>
                            <dd class="price">¥10,000円<span>（税込）</span></dd>
                            <dd class="caption">500文字以内のテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</dd>
                        </dl>
                    </div>


                     <ul class="order_btn_sec">
                   　 <li class="clear_btn"><a href="javascript:void(0);" >チェッククリア</a></li>
                     <li class="all_buy_btn"><a href="javascript:void(0);">すべてチェック</a></li>
                     <li class="order_btn"><a href="#">注文する</a></li>
                     </ul>
                </div>
            </div>
        </div>
        -->
			<section id="coupon" class="cont coupon_sec">
				<h2>クーポン</h2>
				<div class="inr">
					<ul class="slick_coupon">
						<li>
							<div class="present ticket">
								<h4>しい茸ランドかさや</h4>
								<p>
									<!--                                <span class="num">5</span><span class="discount">%OFF</span>-->
									ソフトドリンク1杯無料クーポン
								</p>
								<div class="expiration">
									有効期限：2022年02月14日〜2023年02月13日 </div>
							</div>
							<p class="info">クーポン条件：こちらの画面を受付時ご提示ください。</p>
							<a class="modal link_btn modal-show" data-id="3">クーポンを表示する</a>
						</li>
						<li>
							<div class="discount ticket">
								<h4>しい茸ランドかさや</h4>
								<p>
									<!--                                <span class="num">5</span><span class="discount">%OFF</span>-->
									Bavi【5％OFF】クーポン
								</p>
								<div class="expiration">
									有効期限：2022年02月13日〜2023年02月12日 </div>
							</div>
							<p class="info">クーポン条件：クーポン画面を受付時ご提示ください。</p>
							<a class="modal link_btn modal-show" data-id="2">クーポンを表示する</a>
						</li>
					</ul>
				</div>
			</section>
			<div class="coupon_sec modal_sec" style="display: none;">
				<div class="inr">
					<span class="close">+</span>
					<div class="modal-contents" id="modal-3" style="text-align: center;">
						<div class="present ticket">
							<h4>しい茸ランドかさや</h4>
							<p>
								<!--                                <span class="num">5</span><span class="discount">%OFF</span>-->
								ソフトドリンク1杯無料クーポン
							</p>
							<div class="expiration">
								有効期限：2022年02月14日〜2023年02月13日 </div>
						</div>
						<p class="info">クーポン条件：こちらの画面を受付時ご提示ください。</p>
					</div>
					<div class="modal-contents" id="modal-2" style="text-align: center;">
						<div class="discount ticket">
							<h4>しい茸ランドかさや</h4>
							<p>
								<!--                                <span class="num">5</span><span class="discount">%OFF</span>-->
								Bavi【5％OFF】クーポン
							</p>
							<div class="expiration">
								有効期限：2022年02月13日〜2023年02月12日 </div>
						</div>
						<p class="info">クーポン条件：クーポン画面を受付時ご提示ください。</p>
					</div>
				</div>
			</div>

			<section id="access" class="cont">
				<h2>アクセス</h2>
				<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.397191736555!2d135.14609575059794!3d34.946652280275714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600071d4f1569889%3A0x6272b5de43480911!2z44GX44GE6Iy444Op44Oz44OJ44GL44GV44KE!5e0!3m2!1sja!2sjp!4v1622258532163!5m2!1sja!2sjp" width="640" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
				<p>兵庫県三田市上相野373<br />TEL: <a href="tel:079-568-1301">079-568-1301</a></p>
				<table>
					<tr>
						<th colspan="2">アクセス方法</th>
					</tr>
					<tr>
						<th>電車</th>
						<td>JR宝塚線 相野駅から徒歩約10分（送迎バスあり）<br />
						</td>
					</tr>
					<tr>
						<th>車</th>
						<td>舞鶴若狭自動車道 三田西ICから約4km<br />
						</td>
					</tr>
				</table>
			</section>
			<section id="spot" class="cont">
				<h2>周辺スポット</h2>
				<p class="no_data">現在、周辺スポット情報はありません。</p>
			</section>
			<section id="voice" class="cont">
				<h2>口コミ</h2>
				<section>
					<dl>
						<dt>Bavi管理人</dt>
						<dd>（男性 / 30代）</dd>
					</dl>

					<div class="stars">
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star.png" alt="星1個" />
						<img src="/assets/img/star_half.png" alt="星半数個" />
						<img src="/assets/img/star_none.png" alt="星無し" />
						<span>3.8 / 5.0</span>
					</div>

					<h3>[利用日]2022-02-10 [利用人数]4人未満</h3>
					<p>今回は初取材でお邪魔させていただきました。<br />
						社長さまとお話し、サービスの拡充や、品質向上を目指しており、今後もいろいろなサービスが生まれてくるのではないかなと思います。<br />
						特にしい茸狩りを体験できる貴重な会場です。もぎ取り、新鮮なしい茸は格別でした！子供たちにも食べさせたいと強く感じました。そうやってリピーターさんもどんどん獲得できていると思います。<br />
						食材のお肉についても和牛や地鶏を使っていて大満足な体験と食事でした。<br />
						大大大おすすめです！</p>
				</section>
				<!--
            <a href="javascript:void(0)" class="more_btn">口コミをもっと見る</a>
            -->

				<a href="/venue_order.php" class="link_btn reserve"><span>予約する</span></a>


				<div class="kuchikomi_btn">
					<a href="/review/create?type=spot&id=963"><span>口コミを書きませんか？</span></a>
				</div>
			</section>
			<a href="/spot/index" class="back_btn"><img src="/assets/img/back_btn.png" alt="一覧に戻る" /></a>
			<a href="javascript:void(0);" class="like_btn" id="like_btn"><img src="/assets/img/like_btn.png" alt="LIKE!" /></a>


		</article>


		<?php include __DIR__ . '/tpl/footer.php'; ?>

		<script>
			$(function() {
				$('#like_btn').click(function() {
					window.location.href = "/user/create";
				});

				$('.modal-show').click(function() {

					$('html').addClass('overlay');
					var id = $(this).data('id');

					$(".coupon_sec").fadeIn();
					$('.modal-contents').hide();
					$('#modal-' + id).show();
				});
			});

			$(function() {
				$(".plan_modal").iziModal({
					closeButton: true,
					padding: 20,
					loop:true
				});
				$('.modal_close').iziModal('close');
			});
		</script>

</body>

</html>