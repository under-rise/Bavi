<?php
$page = "column_list";

get_header();

global $cat, $post;
$category_info = get_category($cat);

global $paged;
if(empty($paged)) $paged = 1;

$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 10,
    'offset' => ($paged - 1) * 10,
    'category' => $category_info->cat_ID,
    'order_by' => 'date',
    'order' => 'desc'
]);

$new_posts = get_posts([
    'post_type' => 'post',
    'post_per_page' => 5,
    'order_by' => 'date',
    'order' => 'desc'
]);

?>
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
            adaptiveHeight:true,
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


<article class="result_list">
    <form>
        <!--
        <ul>
            <li class="category">カテゴリー・ワード検索</li>
            <li class="tag">タグで絞り込む</li>
        </ul>
        -->
        <div id="overlay_search">
            <div>
                <span id="close">+</span>
                <ul class="category">
                    <li class="w100">
                        <dl>
                            <dt>カテゴリー</dt>
                            <dd><label><img src="/assets/img/column/column1.png" alt="アドバイス" /><input type="radio"><span>アドバイス</span></label></dd>
                            <dd><label><img src="/assets/img/column/column2.png" alt="アイテム" /><input type="radio"><span>アイテム</span></label></dd>
                            <dd><label><img src="/assets/img/column/column3.png" alt="グルメ" /><input type="radio"><span>グルメ</span></label></dd>
                            <dd><label><img src="/assets/img/column/column4.png" alt="会 場" /><input type="radio"><span>会場</span></label></dd>
                        </dl>
                    </li>
                    <!--
                    <li class="w100">
                        <dl>
                            <dt>検索ワード</dt>
                            <dd class="w100"><input type="text" placeholder="検索ワード"></dd>
                        </dl>
                    </li>
                    -->
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
        <h2><img src="/assets/img/column/column_h2.png" alt="COLUMN" />COLUMN</h2>

        <?php
        if ($category_info->cat_ID == 2) {
            $idx = 1;
            $text = "BAVI編集部のこれまでの経験を中心に、今すぐ役立つ情報をお届けします。準備～片付け、服装、気候対策、子ども連れの際の注意点など、BBQの困った！を解決できるアイデアが盛りだくさんです。";
        } elseif ($category_info->cat_ID == 5) {
            $idx = 2;
            $text = "BBQ初心者の方も、ちょっと違うBBQを楽しみたい方も、きっと新しい発見がありますよ。必要な基本の道具、その扱い方、道具の量に至るまで、知れば得するアイテム情報をまとめました。";
        } elseif ($category_info->cat_ID == 3) {
            $idx = 3;
            $text = "BBQは食べて飲んで楽しむもの。まさに真髄の情報が詰め込まれています！定番の食材リストや準備物の他、鉄板料理、ごはんもの、デザートなどレシピが豊富です。BBQに合う、おすすめドリンクも。ぜひ参考にしてみてくださいね。";
        } elseif ($category_info->cat_ID == 6) {
            $idx = 4;
            $text = "編集部メンバーは、10年以上出張BBQ屋として、ライターメンバーは、お客さんとして利用した経験があります。それぞれのリアルな情報をコラムにまとめました。会場ページと合わせて、チェックしてみてくださいね！";
        } else {
            $idx = 0;
            $text = "";
        }
        ?>
        <img src="/assets/img/column/column<?=$idx?>.png" alt="アドバイス" />
        <section>
            <h3><?= $category_info->name; ?></h3>
            <p><?= $text; ?></p>
        </section>

      <ul class="list">
            <?php foreach ($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <?php $id = get_the_category()[0]->cat_ID; ?>
            <li>
                <a href="<? the_permalink() ?>">
                    <div class="image-wrap"><img src="<?php if( get_the_post_thumbnail_url() != ''){ echo get_the_post_thumbnail_url(); }else{ echo bloginfo('template_directory').'/assets/images/no_image.jpg';} ?>"></div>
                    <?php if ($id == 2): ?>
                        <span class="advice">アドバイス</span>
                    <?php elseif ($id == 5): ?>
                        <span class="item">アイテム</span>
                    <?php elseif ($id == 3): ?>
                        <span class="gourmet">グルメ</span>
                    <?php elseif ($id == 6): ?>
                        <span class="place">会場</span>
                    <?php else : ?>
                        <span class="place">その他</span>
                    <?php endif; ?>
                    <h3><span><?= get_the_date('Y.m.d (D)') ?></span><? the_title(); ?></h3>
                    <p>
                        <? //the_content("続きを見る＞"); ?>
                        <?php
                        $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                        $content = wp_trim_words(strip_shortcodes(get_the_content()), 30, '…' );
                        $content = str_replace($remove_array, '', $content);
                        echo $content;
                        ?>
                    </p>
                </a>
            </li>
            <? endforeach; ?>
        </ul>

        <?php
        $pagination = get_the_posts_pagination(array("mid_size" => 2, "prev_text" => "<前のページ", "next_text" => "次のページ>"));

        $pagination = str_replace('<nav class="navigation pagination" role="navigation" aria-label="投稿">', '', $pagination);
        $pagination = str_replace('</nav>', '', $pagination);

        $pagination = str_replace('<div class="nav-links">', '<nav class="pager"><ul>', $pagination);
        $pagination = str_replace('</div>', '</ul></nav>', $pagination);

        $pagination = str_replace('<span aria-current="page" class="page-numbers current">', '<li class="current"><a>', $pagination);
        $pagination = str_replace('<span class="page-numbers dots">', '<li class="dot">', $pagination);
        $pagination = str_replace('...</span>', '...</li>', $pagination);
        $pagination = str_replace('</span>', '</a></li>', $pagination);
        $pagination = str_replace('<a class="page-numbers" ', '<li><a ', $pagination);
        $pagination = str_replace('<a class="next page-numbers" ', '<li class="next"><a ', $pagination);
        $pagination = str_replace('<a class="prev page-numbers" ', '<li class="prev"><a ', $pagination);

        $pagination = str_replace('</a>', '</a></li>', $pagination);



        $pagination = str_replace('<h2 class="screen-reader-text">投稿ナビゲーション</h2>', '', $pagination);

        ?>
        <?=$pagination;?>
        <!--
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
        --->
    </section>

    <?php include "template-parts/new_column.php"; ?>
    <?php include "template-parts/popular_column.php"; ?>
</article>

<?php get_footer(); ?>
