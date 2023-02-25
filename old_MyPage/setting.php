<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>ユーザー情報設定 | 日本最大級のBBQプラットフォーム Bavi</title>

    <?php include __DIR__ . '/../tpl/head.php'; ?>
    <link rel="stylesheet" href="/resources/css/mypage.css?1.3" />
    <script type="text/javascript" src="/MyPage/js/config.js" />
    </script>
    <style>

    </style>
</head>

<body id="my_page">

    <div id="loading"></div>
    <div id="wrapper">

        <?php include __DIR__ . '/../MyPage/tpl/header.php'; ?>

        <article id="top" class="cont">

            <h2>ユーザー情報設定</h2>

            <?php
            $num = $_GET['value'] == '' ? 0 : $_GET['value'];
            ?>
            <div class="inr">
            <div class="setting_status">
                <div class="status">
                        <p>設定状況</p>
                        <div class="graph"><span></span></div>
                        <div class="step"><span class="value"><?= $num ?></span> / <span class="maxvalue">16</span></div>
                </div>
            </div>
            </div>
               
            <script>
                $(function(){
                    const el = '.setting_status .graph';
                    const v = '.setting_status .step';
                    const value = $(v+' .value').text();
                    const maxValue = $(v+' .maxvalue').text();

                    let num = value / maxValue*100;
                        num = num > 100 ? 100 : num;
                        $(el + ' span').css({'width':num + '%'});

                    if(value >= maxValue){
                        $(v).html('<span class="done">100%<div>（設定完了）</div></span>');
                    }
                    
                });
            </script>

            

            <section class="setting">
                <div class="inr">

                    <form action="/MyPage/index.php">
                        <dl>
                            <dt>名前</dt>
                            <dd><input type="text" placeholder="例）山田 太郎">
                            <p style="font-size: 11px; color: #666; margin-top: 5px;">苗字と名前の間はなるべく空白を開けるように入力ください。</p>
                        </dd>
                        </dl>

                        <dl>
                            <dt>性別</dt>
                            <dd>
                                <select>
                                    <option>性別を選択してください。</option>
                                    <option>男性</option>
                                    <option>女性</option>
                                </select>
                            </dd>
                        </dl>

                        <dl>
                            <dt>職業</dt>
                            <dd>
                                <select>
                                    <option>職業を選択してください。</option>
                                    <option>会社役員</option>
                                    <option>会社員</option>
                                    <option>公務員</option>
                                    <option>自営業</option>
                                    <option>大学生</option>
                                    <option>アルバイト・パート</option>
                                    <option>無職</option>
                                    <option>その他</option>
                                </select>
                            </dd>
                        </dl>


                        <dl>
                            <dt>TEL</dt>
                            <dd>
                                <input type="text" value="" placeholder="例）09011110000">
                                <p style="font-size: 11px; color: #666; margin-top: 5px;">「-」ハイフンはつけず数字のみで入力ください。</p>
                            </dd>
                        </dl>

                        <dl>
                            <dt>E-mail</dt>
                            <dd><input type="text" value="info@bavi.jp"></dd>

                        </dl>

                        <dl>
                            <dt>郵便番号</dt>
                            <dd><input type="text" value="" placeholder="例）1200001 ">
                            <p style="font-size: 11px; color: #666; margin-top: 5px;">「-」ハイフンはつけず数字のみで入力ください。</p>
                        </dd>
                        </dl>

                        <h3>ワクチン接種状況</h3>

                        <p style="font-size: 12px; margin: 15px 0 10px;">ワクチン接種情報を登録し、安全で快適なBBQのご協力を宜しくお願いいたします。</p>

                        <dl>
                            <dt>第一回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="" type="date" value=""  >
                                </label>
                            </dd>
                        </dl>

                        <dl>
                            <dt>第二回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="" type="date" value=""　>
                                </label>
                            </dd>
                        </dl>

                        <dl>
                            <dt>第三回</dt>
                            <dd>
                                <label class="calendar">
                                    <input name="use_date" type="date" value="">
                                </label
                            </dd>
                        </dl>

                        <ul style="font-size: 12px; text-align: left; margin-top: 5px;">
                            <li>※接種していない方は登録必要ありません。</li>
                            <li>※偽りの情報を登録した場合には強制解約とさせていただきます。</li>
                        </ul>

                        <button type="submit" class="link_btn">情報を変更する</button>

                    </form>

                </div>
            </section>

        </article>

    </div>

    <?php include __DIR__ . '/../MyPage/tpl/footer.php'; ?>

</body>

</html>