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

$width = 55;
$plan_num = 6;
$th_width = $width / $plan_num;

$html .= <<< EOF

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
EOF;



$pdf->writeHTML($html);
$pdf->Output('order.php');