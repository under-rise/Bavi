<?php

header('Content-Type: application/json');

$shop_id = $_GET['shop_id'];

// ファイルの読み込みと出力
echo file_get_contents(__DIR__ . '/coupons.json');


?>