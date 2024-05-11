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

<h1>特記事項</h1>

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
EOF;



$pdf->writeHTML($html);
$pdf->Output('order.php');