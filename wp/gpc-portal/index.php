<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$page = "column";

get_header();

/**
 * コンテンツ各ブロック取得データのまとめ
 */
$posts = [];
//for ($i = 2; $i <= 7; $i++) {
    $posts = get_posts([
        'post_type' => 'post',
        /*'category' => $i,*/
        'post_per_page' => 5,
        'order_by' => 'date',
        'order' => 'desc'
    ]);
//}

$new_posts = get_posts([
    'post_type' => 'post',
    /*'category' => $i,*/
    'post_per_page' => 5,
    'order_by' => 'date',
    'order' => 'desc'
]);

global $post;

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

    <article>
        <section id="column" class="cont">
            <h2><img src="/assets/img/column/column_h2.png" alt="COLUMN" />COLUMN</h2>
            <dl>
                <dt>カテゴリー一覧</dt>
                <dd>
                    <a href="<?= get_category_link(2) ?>">
                        <figure>
                            <img src="/assets/img/column/column1.png" alt="アドバイス" />
                            <figcaption>アドバイス</figcaption>
                            <p>（<?= get_category(2)->count; ?>）</p>
                        </figure>
                    </a>
                </dd>
                <dd>
                    <a href="<?= get_category_link(5); ?>">
                        <figure>
                            <img src="/assets/img/column/column2.png" alt="アイテム" />
                            <figcaption>アイテム</figcaption>
                            <p>（<?= get_category(5)->count; ?>）</p>
                        </figure>
                    </a>
                </dd>
                <dd>
                    <a href="<?= get_category_link(3); ?>">
                        <figure>
                            <img src="/assets/img/column/column3.png" alt="グルメ" />
                            <figcaption>グルメ</figcaption>
                            <p>（<?= get_category(3)->count; ?>）</p>
                        </figure>
                    </a>
                </dd>
                <dd>
                    <a href="<?= get_category_link(6); ?>">
                        <figure>
                            <img src="/assets/img/column/column4.png" alt="会 場" />
                            <figcaption>会 場</figcaption>
                            <p>（<?= get_category(6)->count; ?>）</p>
                        </figure>
                    </a>
                </dd>
            </dl>
        </section>

        <?php include "template-parts/new_column.php"; ?>

        <?php include "template-parts/popular_column.php"; ?>

    </article>

<?php
get_footer();