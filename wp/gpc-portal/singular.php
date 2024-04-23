<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$page = "column_detail";

$new_posts = get_posts([
    'post_type' => 'post',
    'post_per_page' => 5,
    'order_by' => 'date',
    'order' => 'desc'
]);

get_header();
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

<article class="detail2">
    <nav>
        <ul>
            <li><a href="/contents/">カテゴリ一覧</a></li>
            <li><a href="<?= get_category_link(get_the_category()[0]->cat_ID); ?>">目次に戻る</a></li>
            <li><a href="/">トップページ</a></li>
        </ul>
    </nav>


    <?
    if ( have_posts() ) {

        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );
        }
    }
    ?>
    
</div>

    <?php include "template-parts/new_column.php"; ?>
    <?php include "template-parts/popular_column.php"; ?>
    
    <?php get_footer(); ?>
