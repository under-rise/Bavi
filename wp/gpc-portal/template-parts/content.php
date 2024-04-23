<div x-data="ad">

    <section id="lead" class="cont">

        <!-- top ad -->
        <?php
        if (is_singular('post')) {
        ?>
        <div class="ad_top_banner">
            <p>広告</p>
            <div>
                <a :href="randomAd.link" target="_blank">
                    <img :src="'/assets/ad/'+randomAd.img.top" alt="">
                </a>
            </div>
        </div>
        <?php
        }
        ?>

        <ul>
            <li><img src="/assets/img/column_detail/icon_date.png" alt="最終更新日" />最終更新日：
                <? the_modified_date('Y.m.d'); ?>
            </li>
            <li>
                <img src="/assets/img/column_detail/icon_cat.png" alt="コラムカテゴリー" />
                <? $id = get_the_category()[0]->cat_ID; ?>
                <?php if ($id == 2) : ?>
                <span class="advice">アドバイス</span>
                <?php elseif ($id == 5) : ?>
                <span class="item">アイテム</span>
                <?php elseif ($id == 3) : ?>
                <span class="gourmet">グルメ</span>
                <?php elseif ($id == 6) : ?>
                <span class="place">会場</span>
                <?php endif; ?>
            </li>
        </ul>
        <h2>
            <? the_title() ?>
        </h2>
        <!--
    <dl class="like">
        <dt>&hearts;</dt>
        <dd>123<span>LIKE</span></dd>
    </dl>
    -->
        <ul class="sns_sec">
            <li class="twitter"><a
                    href="http://twitter.com/share?text=<?= get_the_title() ?>&url=<?= get_the_permalink() ?>"
                    target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="facebook"><a href="http://www.facebook.com/share.php?u=<?= get_the_permalink() ?>"
                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="sns_line"><a href="https://social-plugins.line.me/lineit/share?url=<?= get_the_permalink() ?>"
                    target="_blank"><i class="fab fa-line"></i></a></li>
        </ul>
        <? $tags = get_the_tags(); ?>
        <? $tags = null; ?>
        <? if ($tags) : ?>
        <ul>
            <? foreach ($tags as $tag) : ?>
            <li><a href="<?= get_term_link($tag, 'post_tag') ?>">#<?= $tag->name; ?></a></li>
            <? endforeach; ?>
        </ul>
        <? endif; ?>
    </section>
    <div class="single_contents ">
        <?php
        if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
            the_excerpt();
        } else {
            the_content(__('Continue reading', 'twentytwenty'));
        }
        ?>

        <div id="writer">

            <a href="#"><?php echo get_avatar(get_the_author_id(), 300); ?></a>

            <div>
                <a href="#"><?php the_author_nickname(); ?></a>

                <p><?php the_author_meta('user_description'); ?></p>
            </div>

        </div>

    </div>

    <!-- bottom ad -->
    <?php
    if (is_singular('post')) {
    ?>
    <div class="ad_bottom_banner">
        <div>
            <p>広告</p>
            <a :href="randomAd.link" target="_blank">
                <img :src="'/assets/ad/'+randomAd.img.bottom" alt="">
            </a>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<!-- topic singleのみ適用 -->
<?php
if (is_singular('post')) {
?>
<div id="single_topic_btn">
    <a id="menu_open">
        <img src="/assets/img/bottom_nav5.png" alt="MENU" />
        <span>MENU</span>
    </a>
</div>
<?php
}
?>