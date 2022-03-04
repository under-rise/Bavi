<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="robots" content="noindex" />
   <title>案件管理詳細|Bavi | 管理画面</title>
   <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
   <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/admin_default.css?1595739458" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

   <link type="text/css" rel="stylesheet" href="/admin/css/common.css">
   <link type="text/css" rel="stylesheet" href="/admin/css/management.css?1.1">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

   <style>
      body {
         padding-top: 0;
      }
   </style>

   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
      integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

</head>

<body>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2 sidebar">
            <nav class="col-md-2 navbar navbar-inverse navbar-fixed-top">
               <div class="container-fluid">
                  <div class="navbar-header">
                     <a class="navbar-brand" href="/customer/top">Bavi | 顧客管理画面</a>
                  </div>
               </div>
            </nav>
            
            <?php include __DIR__.'/../admin/template/nav.php'; ?>

         </div>

         <section class="contents">
            
            <div id="management_page" class="col-md-10 col-md-offset-2 main">

               <div class="ttl">
                   <h1>うふた浜 注文情報</h1>
                  <div class="back"><a href="/admin/index.php">一覧ページへ戻る</a></div>
               </div>
              

               <div id="" class="guest_sec sec">

                  <h2 class="sub_ttl">顧客情報</h2>

                  <form class="form">
                     <table class="table_style">
                        <tr>
                           <th>会員 / 非会員</th>
                           <td>
                              <div class="flex">
                                 <div><input type="radio" name="member" id="member"><label for="member">会員</label></div>
                                 <div><input type="radio" name="member" id="non_member"><label
                                       for="non_member">非会員</label></div>
                              </div>
                           </td>
                           <th>性別</th>
                           <td>
                              <div class="flex">
                                 <div><input type="radio" name="sex" id="male"><label for="male">男性</label></div>
                                 <div><input type="radio" name="sex" id="woman"><label for="woman">女性</label></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th>名前</th>
                           <td>
                              <input type="text">
                           </td>
                           <th>名前カナ</th>
                           <td>
                              <input type="text">
                           </td>
                        </tr>
                        <tr>
                           <th>TEL</th>
                           <td>
                              <input type="tel">
                           </td>
                           <th>メールアドレス</th>
                           <td>
                              <input type="email">
                           </td>
                        </tr>
                        <tr>
                           <th>住所</th>
                           <td colspan="3">
                              〒 <input type="number" name="zip11" size="10" maxlength="8"
                                 style="width: 10em; margin-bottom: 5px;"
                                 onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                              <input type="text" name="address">
                           </td>
                        </tr>
                        <tr>
                           <th>年代</th>
                           <td colspan="3">
                              <div class="flex">
                                 <div><input type="radio" name="age" id="age10"><label for="age10">10代</label></div>
                                 <div><input type="radio" name="age" id="age20"><label for="age20">20代</label></div>
                                 <div><input type="radio" name="age" id="age30"><label for="age30">30代</label></div>
                                 <div><input type="radio" name="age" id="age40"><label for="age40">40代</label></div>
                                 <div><input type="radio" name="age" id="age50"><label for="age50">50代</label></div>
                                 <div><input type="radio" name="age" id="age_over"><label for="age_over">それ以上</label>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th>備考</th>
                           <td colspan="3">
                              <textarea rows="5"></textarea>
                           </td>
                        </tr>

                     </table>
                     <input type="submit" value="保存する">
                  </form>

                  <!--form END-->

               </div>
               <!--member sec-->

               <div id="" class="guest_sec sec">

                  <h2 class="sub_ttl">案件情報（利用NO. A00001）</h2>

                     <form class="form">
                        <table class="table_style">
                           <tr>
                            
                              <th>受付日</th>
                              <td>
                                 2022-4-12-00:00
                              </td>
                              <th>CV種別</th>
                              <td>
                                 <select type="checkbox">
                                    <option>全て</option>
                                    <option>WEB</option>
                                    <option>LINE</option>
                                    <option>TEL</option>
                                 </select>
                              </td>
                           </tr>

                           <tr>
                              
                              <th>ステータス</th>
                              <td>
                                 <select class="select_stetas" style="margin-top: 4px;">
                                    <option>全て</option>
                                    <option>決定</option>
                                    <option>商談中</option>
                                    <option>キャンセル</option>
                                 </select>
                              </td>
                              <th>利用人数</th>
                              <td><input type="number"style="width: 95%"> 人</td>
                           </tr>
                          
                           <tr>
                              <th>利用日</th>
                              <td><input type="date"></td>
                              <th>利用時間</th>
                              <td>
                                 <select type="checkbox">
                                    <option>10:00〜12:00</option>
                                    <option>12:00〜14:00</option>
                                    <option>14:00〜16:00</option>
                                    <option>16:00〜18:00</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th>利用会場</th>
                              <td><input type="text"></td>
                              <th>利用会場住所</th>
                              <td><input type="text"></td>
                           </tr>
                           <tr>
                              <th>プラン</th>
                              <td>
                                 <select type="checkbox">
                                    <option>区画のみ</option>
                                    <option>区画＋食材</option>
                                    <option>区画＋食材＋ドリンク</option>
                                 </select>
                              </td>
                              <th>オプション</th>
                              <td>
                                 <select type="checkbox">
                                    <option>オプション001</option>
                                    <option>オプション002</option>
                                    <option>オプション003</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th>支払方法</th>
                              <td>
                                 <select type="checkbox">
                                    <option>おまとめ払い（法人様）</option>
                                    <option>クレジットカード払い</option>
                                    <option>現金払い</option>
                                 </select>
                              </td>
                              <th>支払金額</th>
                              <td><input type="number" style="width: 95%"> 円</td>
                           </tr>
                           <tr>
                              <th>備考</th>
                              <td colspan="3">
                                 <textarea rows="5"></textarea>
                              </td>
                           </tr>
                        </table>
                        <input type="submit" value="保存する">
                     </form>

               </div>


               <div id="" class="guest_sec sec">

                  <h2 class="sub_ttl">伝言</h2>

                     <form class="form">
                        <table class="table_style">
                           <tr>
                            
                              <th>受付伝言</th>
                              <td class="w5" style="text-align: center;"><input type="checkbox" id="check001"></td>
                              <td>
                              <textarea rows="5"></textarea>
                              </td>
                              
                           </tr>
                           <tr>
                            
                              <th>現場伝言</th>
                              <td class="w5" style="text-align: center;"><input type="checkbox" id="check002"></td>
                              <td>
                              <textarea rows="5"></textarea>
                              </td>
                              
                           </tr>
                           <tr>
                            
                              <th>本部伝言</th>
                              <td class="w5" style="text-align: center;"><input type="checkbox" id="check003"></td>
                              <td>
                              <textarea rows="5"></textarea>
                              </td>
                              
                           </tr>
                        </table>
                        <input type="submit" value="保存する">
                     </form>
               </div>
             
               <div class="table_style">
                  <button class="btn_type back" onclick="location.href='/admin/index.php'">一覧ページへ戻る</button>
               </div>

            </div>
            <!--management_page-->

         </section>

      </div>
      <!--row-->

      <footer>
         <p>© Copyright Bavi all right reserved.</p>
      </footer>

   </div>
   <script type="text/javascript" src="http://gpc-test.work/assets/js/bootstrap.js?1595739458"></script>

   <script>
      $(function () {


         $('.sort_btn').on('click', function () {
            alert("ソート");
         });

         $(".t_tip").tooltip();

         $('.detail_btn').on('click', function () {
            $(this).closest('tr').next().toggle();
         });

         $('.nav-sub').hide();

         $('.menu-toggle').click(function () {
            $(this).parent().find('.nav-sub').toggle(500);
         });

         var active_menu = $('li.active').parent();
         if (active_menu.hasClass('nav-sub')) {
            active_menu.show();
         }
      });
   </script>


</body>

</html>