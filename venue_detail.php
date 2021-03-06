<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
    
    <meta property="og:title" content="日本最大級のBBQプラットフォーム Bavi" >
    <meta property="og:image" content="http://bavi.tank.jp/resources/images/apple-touch-icon.png" >
    <meta property="og:description" content="日本最大級のBBQプラットフォーム Bavi" >
    <meta property="og:locale" content="ja_JP" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/apple-touch-icon.png">
    
	<title>多摩川緑地バーベキュー広場 | 日本最大級のBBQプラットフォーム Bavi</title>

	<?php include __DIR__ . '/tpl/head.php'; ?>
	<link rel="stylesheet" href="resources/css/venue_detail.css?2.9">
	<link rel="stylesheet" href="resources/css/venue_detail_sp.css?2.3">
    
	<link rel="stylesheet" href="resources/slick/slick.css" />
	<link rel="stylesheet" href="resources/slick/slick-theme.css" />
    
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	
    
	
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
            
            //20210616追加//
            $('.slick_campaign').slick({
                autoplay: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false, 
				dots: true,
				focusOnSelect: true, 
				swipe:true,
                adaptiveHeight: true,
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
				
                <ul class="sns_sec">
                <li class="twitter"><a href="http://twitter.com/share?text=<title>&url=<url>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="facebook"><a href="http://www.facebook.com/share.php?u=<url>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="sns_line"><a href="https://social-plugins.line.me/lineit/share?url=<url>" target="_blank"><i class="fab fa-line"></i></a></li>
                </ul>
                
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
            
			<section class="news_sec">
                
				<h3><img src="resources/images/icon_news.png" alt="NEW!" />会場からの新着NEWS</h3>
				
                <ul>
                <li>
                    <div class="img">
                    <img src="resources/images/venue_list/no_image.jpg" alt="会場からの新着NEWS" />
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
            
             <a href="javascript:void(0);" class="modal link_btn" data-name=".preserve_sec">予約する</a>
		
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
				</tr>
				<tr>
					<th>住所</th>
					<td>東京都千代田区臨海町六丁目地先</td>
				</tr>
                <tr>
					<th>主な施設</th>
					<td></td>
				</tr>
                
				<tr>
					<th>禁止事項</th>
					<td>花火、騒音等迷惑行為、宿泊</td>
				</tr>
				<tr>
					<th>その他</th>
					<td>ペット可（要リード）、直火禁止</td>
				</tr>
			</table>
            
           
            
            <table>
				<tr>
					<th>料金</th>
					<td>必要確認</td>
					<td class="btn_td"><a href="javascript:void(0);" class="modal modal_btn" data-name=".price_sec">確認する</a></td>
				</tr>
                <tr>
					<th>利用時間</th>
					<td>00:00:00〜00:00:00</td>
					<td class="btn_td"><a href="javascript:void(0);" class="modal modal_btn" data-name=".time_sec">確認する</a></td>
				</tr>
                <tr>
					<th>ご予約</th>
					<td>直接店舗へご連絡ください。</td>
                    <td class="btn_td"><a href="javascript:void(0);" class="modal modal_btn" data-name=".preserve_sec">確認する</a></td>
				</tr>
                <tr>
					<th>駐車場</th>
					<td colspan="2">駐車場あり：10台<br>料金：無料</td>
                   
				</tr>
                
			</table>
            
            
		</section>
		
      
        <div class="price_sec modal_sec" style="display: none;">

                 <div class="inr">
                     
                            <span class="close">+</span>

                     <h3>料金について</h3>     
                     
                     <div>
                     料金プラン ※4名～予約可<br><br>
全席炭火コンロ<br>
オプション：オーシャンビュー席指定（1・2月を除く）<br><br>
食材持込プラン<br>
大人/1名 1,800円（税込1,980円）<br>
小学生/1名　900円（税込990円）<br><br>
手ぶらBBQプラン<br>
大人/1名 3,300円（税込3,630円）～　<br>
小学生/1名 1,880円（税込2,068円）～
                         
                        全席炭火コンロ<br>
オプション：オーシャンビュー席指定（1・2月を除く）<br><br>
食材持込プラン<br>
大人/1名 1,800円（税込1,980円）<br>
小学生/1名　900円（税込990円）<br><br>
手ぶらBBQプラン<br>
大人/1名 3,300円（税込3,630円）～　<br>
小学生/1名 1,880円（税込2,068円）～
                         
                         全席炭火コンロ<br>
オプション：オーシャンビュー席指定（1・2月を除く）<br><br>
食材持込プラン<br>
大人/1名 1,800円（税込1,980円）<br>
小学生/1名　900円（税込990円）<br><br>
手ぶらBBQプラン<br>
大人/1名 3,300円（税込3,630円）～　<br>
小学生/1名 1,880円（税込2,068円）～
                         
                         全席炭火コンロ<br>
オプション：オーシャンビュー席指定（1・2月を除く）<br><br>
食材持込プラン<br>
大人/1名 1,800円（税込1,980円）<br>
小学生/1名　900円（税込990円）<br><br>
手ぶらBBQプラン<br>
大人/1名 3,300円（税込3,630円）～　<br>
小学生/1名 1,880円（税込2,068円）～
                         
                         全席炭火コンロ<br>
オプション：オーシャンビュー席指定（1・2月を除く）<br><br>
食材持込プラン<br>
大人/1名 1,800円（税込1,980円）<br>
小学生/1名　900円（税込990円）<br><br>
手ぶらBBQプラン<br>
大人/1名 3,300円（税込3,630円）～　<br>
小学生/1名 1,880円（税込2,068円）～
                      </div>
                     
                </div>
         </div>
        <!--price_sec modal-->
        
        <div class="time_sec modal_sec" style="display: none;">

                 <div class="inr">
                     
                            <span class="close">+</span>

                     <h3>利用時間について</h3>     
                     
                     <div>
                     休場日<br>
年末年始(12/26～1/4)<br><br>
12月～2月の水曜日<br>
※水曜日が祝日の場合は、その翌日。<br><br>
営業時間<br>
デイタイム【10:00～16:00】<br>
サンセットタイム【17:00～21:00】<br>
※デイタイムからサンセットタイムまで通してのご利用はできません。<br><br>
予約プラン<br>
食材パッケージプラン<br>
ツールレンタルプラン<br>
サイトのみ(無料)
                      </div>
                     
                </div>
         </div>
        <!--time_sec modal-->
        
        <div class="preserve_sec modal_sec" style="display: none;">

                 <div class="inr">
                     
                            <span class="close">+</span>

                     <h3>ご予約について</h3>     
                     
                     <div>
                      <table class="table_style">
                          
                            <tr>
                                <th>電話番号</th>
                                <td><a href="tel:0300000000">03-0000-0000</a></td>
                            </tr>
                            <tr>
                                <th>WEB</th>
                                <td><a href="http://bavi.jp/" target="_blank">http://bavi.jp/</a></td>
                            </tr>
                            
                            <tr>
                                <th>お問合わせ</th>
                                <td><a href="http://bavi.jp/contact/" target="_blank">http://bavi.jp/contact/</a></td>
                            </tr>

                        </table>
                      </div>
                     
                </div>
         </div>
        <!--preserve_sec modal-->
        
        <div class="parking_sec modal_sec" style="display: none;">

                 <div class="inr">
                     
                            <span class="close">+</span>

                     <h3>駐車場について</h3>     
                     
                     <div>
                      【車】<br>
秋田自動車道 能代東ICから約37km<br>
秋田自動車道 能代南ICから約40km<br><br>
                          【電車】<br>
                         駅から◯◯◯方面へ徒歩5分<br>
                          駅から◯◯◯方面へ徒歩5分<br>
                          駅から◯◯◯方面へ徒歩5分<br><br>
                         【バス】<br>
                         駅から◯◯◯方面へ徒歩5分<br>
                          駅から◯◯◯方面へ徒歩5分<br>
                          駅から◯◯◯方面へ徒歩5分
                      </div>
                     
                </div>
         </div>
        <!--preserve_sec modal-->
		
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
			
			
			<!--20210616 html変更-->
            <div class="inr">
                
                <ul class="slick_campaign">
                    
                    <li>
                    <div class="img"><img src="assets/img/800px_600px.jpg" alt="キャンペーン" /></div>
                    <p class="day">2021.01.31(MON)</p>
                    <h3>タイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    <p>テキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキスト</p>
                    <a class="modal link_btn" data-name=".campaign_modal_id_000">キャンペーンを見る</a>
                    </li>
                    
                     <li>
                    <div class="img"><img src="assets/img/800px_550px.jpg" alt="キャンペーン" /></div>
                    <p class="day">2021.01.31(MON)</p>
                    <h3>タイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    <p>テキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキスト</p>
                    <a class="modal link_btn" data-name=".campaign_modal_id_001">キャンペーンを見る</a>
                    </li>
                    
                    <li>
                    <div class="img"><img src="assets/img/800px_500px.jpg" alt="キャンペーン" /></div>
                    <p class="day">2021.01.31(MON)</p>
                    <h3>タイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    <p>テキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキスト</p>
                    <a class="modal link_btn" data-name=".campaign_modal_id_002">キャンペーンを見る</a>
                    </li>
                    

                    <li>
                    <div class="img"><img src="assets/img/800px_450px.jpg" alt="キャンペーン" /></div>
                    <p class="day">2021.01.31(MON)</p>
                    <h3>タイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    <p>テキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキスト</p>
                    <a class="modal link_btn" data-name=".campaign_modal_id_003">キャンペーンを見る</a>
                    </li>

                    
                   

                </ul>
                
            </div>
            <!--20210616追加-->
            
            
		</section>
		
         <!--20210616追加-->
        <div class="campaign_modal_id_000 campaign_modal modal_sec" style="display: none;">

                 <div class="inr">
                     
                    <span class="close">+</span>
                     <div class="img">
                         <img src="assets/img/800px_600px.jpg" alt="キャンペーン" />
                     </div>
                     
                     <p>2021.01.31(MON)</p>
                     <h3>キャンペーンタイトル</h3>     
                     
                     <div>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                     
                </div>
         </div>
        
        <!--20210616追加-->
        <div class="campaign_modal_id_001 campaign_modal modal_sec" style="display: none;">

                 <div class="inr">
                     
                    <span class="close">+</span>
                     <div class="img">
                         <img src="assets/img/800px_550px.jpg" alt="キャンペーン" />
                     </div>
                     
                     <p>2021.01.31(MON)</p>
                     <h3>キャンペーンタイトル</h3>     
                     
                     <div>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                     
                </div>
         </div>
        
        <div class="campaign_modal_id_002 campaign_modal modal_sec" style="display: none;">

                 <div class="inr">
                     
                    <span class="close">+</span>
                     <div class="img">
                        <img src="assets/img/800px_500px.jpg" alt="キャンペーン" />
                     </div>
                     
                     <p>2021.01.31(MON)</p>
                     <h3>キャンペーンタイトル</h3>     
                     
                     <div>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                     
                </div>
         </div>
        
        <div class="campaign_modal_id_003 campaign_modal modal_sec" style="display: none;">

                 <div class="inr">
                     
                    <span class="close">+</span>
                     <div class="img">
                        <img src="assets/img/800px_450px.jpg" alt="キャンペーン" />
                     </div>
                     
                     <p>2021.01.31(MON)</p>
                     <h3>キャンペーンタイトル</h3>     
                     
                     <div>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                     
                </div>
         </div>
        
        
        
        
		<section id="access" class="cont">
			<h2>アクセス</h2>
			
			<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12969.388296947453!2d139.85144952957396!3d35.64381962101789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d518377e105%3A0xa10bf2d44c6c4b59!2z6JGb6KW_6Ieo5rW35YWs5ZySIOODkOODvOODmeOCreODpeODvOW6g-WgtA!5e0!3m2!1sja!2sjp!4v1613655661209!5m2!1sja!2sjp" width="640" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
			
			<p>東京都千代田区臨海町六丁目地先<br />TEL: 03-0000-0000</p>
                
                            <table>
                          
                                <tr>
                                <th colspan="2">アクセス方法</th>
                            </tr>
                            <tr>
                                <th>車</th>
                                <td>秋田自動車道 能代東ICから約37km<br>秋田自動車道 能代南ICから約40km</td>
                            </tr>
                            <tr>
                                <th>電車</th>
                                <td>〇〇駅より徒歩5分<br>〇〇駅より徒歩5分</td>
                            </tr>
                            
                            

                        </table>
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
	
	
	<?php include __DIR__ . '/tpl/footer.php'; ?>

</body>
</html>
