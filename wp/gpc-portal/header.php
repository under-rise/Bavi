<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php
    //		wp_head();
    global $page;
    if ($page === "column_list") { ?>

    <link rel="stylesheet" href="/assets/css/column.css">
    <link rel="stylesheet" href="/assets/css/column_sp.css">

    <?php
    }
    global $title;
    $cat_id = get_the_category()[0]->cat_ID;
    $category_name = "";
    if ($cat_id == 2) :
        $category_name = "アドバイス";
    elseif ($cat_id == 5) :
        $category_name = "アイテム";
    elseif ($cat_id == 3) :
        $category_name = "グルメ";
    elseif ($cat_id == 6) :
        $category_name = "会場";
    else :
        $category_name = "その他";
    endif;
    if (is_home() || is_front_page()) $title = "コラムトップ";
    else if ($page === "column_list") $title = "コラム【{$category_name}】";
    else $title = get_the_title() . "【" . $category_name . "】";
    ?>
    <?php include(__DIR__ . "/../../../../../fuel/app/views/templates/head_include.php"); ?>
    <link rel="stylesheet" href="/assets/css/add_column.css?1.8">

    <!-- topic singleのみ適用 -->
    <?php
    if (is_singular('post')) {
    ?>
    <link rel="stylesheet" href="/assets/css/topic_ad.css">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="text/javascript" src="/assets/js/ad.js?<?= time() ?>"></script>

    <?php
    }
    ?>
    <!-- Common JS File -->
    <script>
    $(function() {
        $.ajax({
            url: '/api/analysis',
            type: 'GET',
            data: {
                url: 'https://' + '<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>',
                referer: '<?= $_SERVER['HTTP_REFERER']; ?>'
            },
            dataType: 'json'
        }).done(function(data) {
            console.log(data);
        });
    });
    </script>
</head>

<body <?php body_class(); ?>>
    <div id="loading"></div>
    <div id="wrapper">

        <?php
        //wp_body_open();
        ?>
        <?php include(__DIR__ . "/../../../../../fuel/app/views/templates/header.php"); ?>
        <!-- /header -->