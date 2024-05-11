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

$width = 55;
$plan_num = 6;
$th_width = $width / $plan_num;

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

<br pagebreak="true"/>

<h1>特記事項</h1>

<div></div>

<table class="order" >

    <tr>
    <th width="10%">NO</th>
    <th width="20%">法人・団体名</th>
    <th width="10%">人数</th>
    <th width="60%" >備考</th>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td class="notices">特記事項のテキスト特記事項のテキスト特記事項のテキスト特記事項のテキスト。</td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td class="notices">特記事項のテキスト。</td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td class="notices">特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。特記事項のテキスト。</td>
    </tr>
    <tr>
        <th colspan="1">合計</th>
        <td colspan="1" class="total">3件</td>
        <td colspan="1" class="total">450人</td>
        <td colspan=""></td>
     </tr>

</table>

<br pagebreak="true"/>

<h1>注文プラン</h1>

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
    <th width="10%">NO</th>
    <th width="20%">法人・団体名</th>
    <th width="7.5%">人数</th>
    <th width="{$th_width}%" >プランA</th>
    <th width="{$th_width}%" >プランB</th>
    <th width="{$th_width}%" >プランC</th>
    <th width="{$th_width}%" >プランD</th>
    <th width="{$th_width}%" >プランE</th>
    <th width="{$th_width}%" >プランF</th>
    <th width="7.5%">オプション</th>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td>14</td>
        <td>22</td>
        <td>32</td>
        <td>40</td>
        <td>50</td>
        <td>63</td>
        <td><a href="option.php">あり</a></td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>92</td>
        <td>28</td>
        <td>14</td>
        <td></td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td>124</td>
        <td>22</td>
        <td>32</td>
        <td>40</td>
        <td>50</td>
        <td>63</td>
        <td></td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td>14</td>
        <td>31</td>
        <td>55</td>
        <td>12</td>
        <td>28</td>
        <td>14</td>
        <td><a href="option.php">あり</a></td>
    </tr>

    <tr>
        <td>1000-1111</td>
        <td>ゼネラルパーソンカンパニー株式会社</td>
        <td>150名</td>
        <td>114</td>
        <td>31</td>
        <td>515</td>
        <td>12</td>
        <td>228</td>
        <td>34</td>
        <td><a href="option.php">あり</a></td>
    </tr>

   
    <tr>
        <th colspan="1">合計</th>
        <td colspan="1" class="total">5件</td>
        <td colspan="1" class="total">900人</td>
        <td colspan="1" class="total">84</td>
        <td colspan="1" class="total">44</td>
        <td colspan="1" class="total">98</td>
        <td colspan="1" class="total">31</td>
        <td colspan="1" class="total">120</td>
        <td colspan="1" class="total">91</td>
        <td colspan="1" class="total">3</td>
     </tr>

</table>

<br pagebreak="true"/>

<h1>オプション</h1>

<table class="head">
<tr>
    <td class="day">利用日: 2024年10月25日（月）</td>
    <td class="print_day">印刷日: 2024年10月24日（日）</td>
</tr>
<tr>
    <td colspan="2"><h2>ID:1000 秋川橋河川公園</h2></td>
</tr>
</table>

<!--repeat start -->
<div></div>

<table>
    <tr>
    <td class="option_name">NO. 1000-1111 ゼネラルパーソンカンパニー株式会社（150名）</td>
    </tr>
</table>
<table class="order option">
    <tr>
        <th width="10%">鉄板セット</th>
        <th width="10%">リブロース</th>
        <th width="10%">和牛ロース</th>
        <th width="10%">牛カルビ(1kg)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
    </tr>
    <tr>
        <td>22</td>
        <td>32</td>
        <td>40</td>
        <td>50</td>
        <td>30</td>
        <td>40</td>
        <td>50</td>
        <td>30</td>
        <td>40</td>
        <td>50</td>
    </tr>
    <tr>
        <th width="10%">鉄板セット</th>
        <th width="10%">リブロース</th>
        <th width="10%">和牛ロース</th>
        <th width="10%">牛カルビ(1kg)</th>
        <th width="10%">ビール(1ケース)</th>
    </tr>
    <tr>
        <td>22</td>
        <td>32</td>
        <td>40</td>
        <td>50</td>
        <td>50</td>
    </tr>
</table>  

<div style="border-bottom:1px dashed #000"></div>
<!--repeat end -->

<!--repeat start -->
<div></div>

<table>
    <tr>
    <td class="option_name">NO. 1000-1111 ゼネラルパーソンカンパニー株式会社（150名）</td>
    </tr>
</table>
<table class="order option">
    <tr>
        <th width="10%">鉄板セット</th>
        <th width="10%">リブロース</th>
        <th width="10%">和牛ロース</th>
        <th width="10%">牛カルビ(1kg)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
        <th width="10%">ビール(1ケース)</th>
    </tr>
    <tr>
        <td>22</td>
        <td>32</td>
        <td>40</td>
        <td>50</td>
        <td>30</td>
        <td>40</td>
        <td>50</td>
        <td>30</td>
    </tr>
</table>  

<div style="border-bottom:1px dashed #000"></div>
<!--repeat end -->

<!--repeat start -->
<div></div>

<table>
    <tr>
    <td class="option_name">NO. 1000-1111 株式会社AAAAA（120名）</td>
    </tr>
</table>
<table class="order option">
    <tr>
        <th width="10%">鉄板セット</th>
    </tr>
    <tr>
        <td>22</td>
    </tr>
</table>  

<div style="border-bottom:1px dashed #000"></div>
<!--repeat end -->

<!--repeat start -->
<div></div>

<table>
    <tr>
    <td class="option_name">NO. 1000-1111 株式会社AAAAA（120名）</td>
    </tr>
</table>
<table class="order option">
    <tr>
        <th width="10%">鉄板セット</th>
        <th width="10%">リブロース</th>
        <th width="10%">ビール(1ケース)</th>
    </tr>
    <tr>
        <td>22</td>
        <td>22</td>
        <td>22</td>
    </tr>
</table>  

<div style="border-bottom:1px dashed #000"></div>
<!--repeat end -->

<div></div>

<h1>オプション集計</h1>

<table class="order" >
    <tr>
    <th width="20%">鉄板セット</th>
    <td width="30%">0</td>
    <th width="20%">リブロース</th>
    <td width="30%">111</td>
    </tr>

    <tr>
    <th width="20%">和牛ロース</th>
    <td width="30%">0</td>
    <th width="20%">牛カルビ(1kg)</th>
    <td width="30%">120</td>
    </tr>

    <tr>
    <th width="20%">ビール(1ケース)</th>
    <td width="30%">50</td>
    <th width="20%">角</th>
    <td width="30%">0</td>
    </tr>

    <tr>
    <th width="20%">鉄板セット</th>
    <td width="30%">330</td>
    <th width="20%">リブロース</th>
    <td width="30%">20</td>
    </tr>

    <tr>
    <th width="20%">和牛ロース</th>
    <td width="30%">1</td>
    <th width="20%">牛カルビ(1kg)</th>
    <td width="30%">0</td>
    </tr>

    <tr>
    <th width="20%">ビール(1ケース)</th>
    <td width="30%">0</td>
    <th width="20%">角</th>
    <td width="30%">0</td>
    </tr>

    <tr>
    <th width="20%">鉄板セット</th>
    <td width="30%">0</td>
    <th width="20%">リブロース</th>
    <td width="30%">0</td>
    </tr>

    <tr>
    <th width="20%">和牛ロース</th>
    <td width="30%">2</td>
    <th width="20%">牛カルビ(1kg)</th>
    <td width="30%">55</td>
    </tr>

    <tr>
    <th width="20%">ビール(1ケース)</th>
    <td width="30%">1</td>
    <th width="20%">角</th>
    <td width="30%">2</td>
    </tr>

    <tr>
    <th width="20%">鉄板セット</th>
    <td width="30%">0</td>
    <th width="20%">リブロース</th>
    <td width="30%">1</td>
    </tr>

    <tr>
    <th width="20%">和牛ロース</th>
    <td width="30%">0</td>
    <th width="20%">牛カルビ(1kg)</th>
    <td width="30%">0</td>
    </tr>

    <tr>
    <th width="20%">ビール(1ケース)</th>
    <td width="30%">50</td>
    <th width="20%">角</th>
    <td width="30%">160</td>
    </tr>

</table>



EOF;



$pdf->writeHTML($html);
$pdf->Output('order.php');