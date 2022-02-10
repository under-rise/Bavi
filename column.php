<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title></title>

    <?php include __DIR__ . '/tpl/head.php'; ?>

    <link rel="stylesheet" href="resources/css/column.css?1.1">
	<link rel="stylesheet" href="resources/css/column_sp.css">
    
	
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
        
       window.addEventListener('load', function() {
          var maxHeight = 0;
          $('.slick .item a').each(function(idx, elem) {
            var height = $(elem).height();
            if(maxHeight < height) {
              maxHeight = height;
            }
          });
        $('.slick .item a').height(maxHeight);
        });
	</script>
</head>
<body>
<div id="loading"></div>
<div id="wrapper">
<?php include __DIR__ . '/tpl/header_serach.php'; ?>
	
	
	<article>
		<section id="column" class="cont">
			<h2><img src="resources/images/column/column_h2.png" alt="COLUMN" />COLUMN</h2>
			
			<dl>
				<dt>カテゴリー一覧</dt>
				<dd>
					<a href="/column_list1.html">
						<figure>
							<img src="resources/images/column/column1.png" alt="アドバイス" />
							
							<figcaption>アドバイス</figcaption>
                             <p>（100記事）</p>
						</figure>
					</a>
				</dd>
				<dd>
					<a href="/column_list2.html">
						<figure>
							<img src="resources/images/column/column2.png" alt="アイテム" />
							
							<figcaption>アイテム</figcaption>
                            <p>（35記事）</p>
						</figure>
					</a>
				</dd>
				<dd>
					<a href="/column_list3.html">
						<figure>
							<img src="resources/images/column/column3.png" alt="グルメ" />
							
							<figcaption>グルメ</figcaption>
                            <p>（50記事）</p>
						</figure>
					</a>
				</dd>
				<dd>
					<a href="/column_list4.html">
						<figure>
							<img src="resources/images/column/column4.png" alt="会 場" />
							
							<figcaption>会 場</figcaption>
                            <p>（65記事）</p>
						</figure>
					</a>
				</dd>
			</dl>
			
		</section>
        
        <section id="column_list" class="cont">
            
                
            <div class="ttl type01"><span>アドバイスの新着記事</span></div>
            
            <ul class="list">
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/10/girl-g554a83e12_640-e1633923058390.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/10/girl-g554a83e12_640-e1633923058390.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/10/girl-g554a83e12_640-e1633923058390.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/10/girl-g554a83e12_640-e1633923058390.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
            </ul>
            
            <a href="https://bavi.jp/contents/category/knowledge/" class="link_btn">もっと見る</a>
            
            
            
            <div class="ttl type02"><span>アドバイスの新着記事</span></div>
            
            <ul class="list">
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/09/8C0AD199-58BE-4B9B-A9A6-2A18FC7E40E4-e1631669244286.jpeg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/09/8C0AD199-58BE-4B9B-A9A6-2A18FC7E40E4-e1631669244286.jpeg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/09/8C0AD199-58BE-4B9B-A9A6-2A18FC7E40E4-e1631669244286.jpeg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/09/8C0AD199-58BE-4B9B-A9A6-2A18FC7E40E4-e1631669244286.jpeg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
            </ul>
            
            <a href="https://bavi.jp/contents/category/items/" class="link_btn">もっと見る</a>
            
            <div class="ttl type03"><span>グルメの新着記事</span></div>
            
            <ul class="list">
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2020/10/e45798359b96d336b294f9f1002ebc8f.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2020/10/e45798359b96d336b294f9f1002ebc8f.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2020/10/e45798359b96d336b294f9f1002ebc8f.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2020/10/e45798359b96d336b294f9f1002ebc8f.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
            </ul>
            
            <a href="https://bavi.jp/contents/category/foods/" class="link_btn">もっと見る</a>
            
            
            
            <div class="ttl type04"><span>会場の新着記事</span></div>
            
            <ul class="list">
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/08/c91867f0179a23f2ec2d0410f9497781-300x200.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/08/c91867f0179a23f2ec2d0410f9497781-300x200.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/08/c91867f0179a23f2ec2d0410f9497781-300x200.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
                
                <li>
                <a href="https://bavi.jp/contents/skin-care/">
                    <div class="image-wrap"><img src="https://bavi.jp/contents/wp-content/uploads/2021/08/c91867f0179a23f2ec2d0410f9497781-300x200.jpg"></div>
                    <span class="item">アイテム</span>
                    <h3><span>2021.10.11 (月)</span>【マイナス10歳肌ライターおすすめ】バーベキューやキャンプでうっかり日焼け後にするべきスキンケアとは？</h3>
                    <p>こんにちは！私は、バーベキュー歴20年のアウトドア大好き主…</p>
                </a>
                </li>
            </ul>
            
            <a href="https://bavi.jp/contents/category/places/" class="link_btn">もっと見る</a>
            
        </section>
		
	
		
	</article>
	
	<?php include __DIR__ . '/tpl/footer.php'; ?>
	
</body>
</html>
