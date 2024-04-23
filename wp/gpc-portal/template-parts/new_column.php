
<section id="news" class="cont">
    <h2>新着コラム</h2>
    <p>BBQで役立つ最新情報をCHECK!!</p>
    <div class="slick">
        <?php foreach ($new_posts as $post): ?>
            <? setup_postdata($post); ?>
            <div class="item">
                <a href="<? the_permalink() ?>">
                    <img src="<?php if( get_the_post_thumbnail_url() != ''){ echo get_the_post_thumbnail_url(); }else{ echo bloginfo('template_directory').'/assets/images/no_image.jpg';} ?>">
                    <?php $id = get_the_category()[0]->cat_ID; ?>
                    <?php if ($id == 2): ?>
                        <span class="advice">アドバイス</span>
                    <?php elseif ($id == 5): ?>
                        <span class="item">アイテム</span>
                    <?php elseif ($id == 3): ?>
                        <span class="gourmet">グルメ</span>
                    <?php elseif ($id == 6): ?>
                        <span class="place">会場</span>
                    <?php endif; ?>
                    <h3><span><? the_time('Y.m.d (D)') ?></span><?= the_title(); ?></h3>
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
            </div>
        <? endforeach; ?>
    </div>
    <a href="<?= get_category_link(2) ?>" class="link_btn">もっと見る</a>
</section>
