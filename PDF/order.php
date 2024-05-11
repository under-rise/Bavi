<?php

require 'TCPDF/tcpdf.php';

$orientation = 'L';
$unit = 'mm';
$format = 'A4';

$pdf = new TCPDF('L', 'mm', 'A4',true, 'UTF-8',false,false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false); 
$pdf ->addPage();
$pdf->setFont('kozgopromedium', '',10);


$html = "<style>".file_get_contents('css/style.css')."</style>";


$html .= <<< EOF

<h1>案件集計</h1>

<table class="head">
<tr>
    <td class="day">利用日: 2024年10月25日（月）</td>
    <td class="print_day">印刷日: 2024年10月24日（日）</td>
</tr>
<tr>
    <td colspan="2"><h2>ID:1000 秋川橋河川公園</h2></td>
</tr>
</table>

<div></div>

<table class="order">

    <tr>
    <th width="8%">NO</th>
    <th width="8%">利用時間</th>
    <th width="20%">法人・団体名</th>
    <th width="8%">担当者</th>
    <th width="8%">人数</th>
    <th width="8%">区画</th>
    <th width="8%">プラン</th>
    <th width="8%">TEL</th>
    <th width="8%">支払い方法</th>
    <th width="8%">金額</th>
    <th width="8%">支払い状況</th>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>榊原 良太</td>
        <td>150名</td>
        <td>デラックス</td>
        <td>
        プランA<br>
        プランB<br>
        オプション
        </td>
        <td>090-8307-0445</td>
        <td>現金</td>
        <td>¥100,000円</td>
        <td class="unpaid">未払い</td>
    </tr>
    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>株式会社アンダーライズ</td>
        <td>鈴木 博之</td>
        <td>150名</td>
        <td>デラックス</td>
        <td>
        プランA<br>
        プランB
        </td>
        <td>090-8307-0445</td>
        <td>PayPay</td>
        <td>¥100,000円</td>
        <td class="deposited">決済済み</td>
    </tr>
    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>榊原 良太</td>
        <td>150名</td>
        <td>キャビン</td>
        <td>
        プランB
        </td>
        <td>090-8307-0445</td>
        <td>事前クレジット</td>
        <td>¥100,000円</td>
        <td class="unpaid">未払い</td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>株式会社アンダーライズ</td>
        <td>鈴木 博之</td>
        <td>150名</td>
        <td>デラックス</td>
        <td>
        プランA<br>
        プランB<br>
        オプション
        </td>
        <td>090-8307-0445</td>
        <td>現金</td>
        <td>¥100,000円</td>
        <td class="unpaid">未払い</td>
    </tr>
    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>榊原 良太</td>
        <td>6名</td>
        <td>デラックス</td>
        <td>
        プランA<br>
        プランB
        </td>
        <td>090-8307-0445</td>
        <td>PayPay</td>
        <td>¥100,000円</td>
        <td class="deposited">決済済み</td>
    </tr>
    <tr>
        <td>1000-1111</td>
        <td>11:00〜16:00</td>
        <td>株式会社アンダーライズ</td>
        <td>鈴木 博之</td>
        <td>50名</td>
        <td>キャビン</td>
        <td>
        プランB
        </td>
        <td>090-8307-0445</td>
        <td>事前クレジット</td>
        <td>¥100,000円</td>
        <td class="unpaid">未払い</td>
    </tr>
    <tr>
        <td colspan="6"></td>
        <th colspan="2">合計件数</th>
        <td colspan="3" class="total">6件</td>
     </tr>
     <tr>
        <td colspan="6"></td>
        <th colspan="2">合計人数</th>
        <td colspan="3" class="total">1,200名</td>
     </tr>
     <tr>
        <td colspan="6"></td>
        <th colspan="2">合計金額</th>
        <td colspan="3" class="total">¥100,000円</td>
     </tr>

</table>
EOF;



$pdf->writeHTML($html);
$pdf->Output('order.php');