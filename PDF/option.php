<?php

require 'TCPDF/tcpdf.php';

$orientation = 'L';
$unit = 'mm';
$format = 'A4';

$pdf = new TCPDF('L', 'mm', 'A4',true, 'UTF-8',false,false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false); 
$pdf->SetAutoPageBreak(true,0);
$pdf->addPage();
$pdf->setFont('kozgopromedium', '',10);


$html = "<style>".file_get_contents('css/style.css')."</style>";

$html .= <<< EOF

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


<br pagebreak="true"/>

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