<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="robots" content="noindex" />
  <title>チャット|Bavi | 管理画面</title>
  <link type="text/css" rel="stylesheet" href="http://gpc-test.work/assets/css/bootstrap.css?1595739458" />
  <link type="text/css" rel="stylesheet" href="/admin/css/default.css?1.1" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="/admin/css/common.css?1.1">
  <link type="text/css" rel="stylesheet" href="/admin/css/chat.css?1.2">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <style>
    body {
      padding-top: 0;
    }
  </style>

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
        <?php include __DIR__ . '/../admin/template/nav.php'; ?>
      </div>

      <section class="contents">

        <div id="chat_page" class="col-md-10 col-md-offset-2 main">

          <div class="ttl">
            <h1>チャット</h1>
            <div class="back"><a href="/admin/index.php">一覧ページへ戻る</a></div>
          </div>

          <div id="chat_sec" class="sec">

            <div class="message_sec">
              
              <div class="guest send_area">
                <div class="message">
                  <div class="name">鈴木様</div>
                  <div class="time">2022年4月1日10時50分</div>
                  <div class="comment">コメントコメントコメントコメントコメントコメントコメント</div>
                </div>
              </div>

              <div class="admin send_area">
                <div class="message">
                  <div class="name">うふた浜</div>
                  <div class="time">2022年4月1日10時50分</div>
                  <div class="comment">コメントコメントコメントコメントコメントコメントコメント</div>
                </div>
              </div>
            </div>

            <form id="message_send_area" class="form">
              <div class="table_style">
                <textarea placeholder="メッセージを入力"></textarea>
                <button id="message_send_btn" type="button" class="btn_type">送信</button>
              </div>
            </form>
          </div>


        </div>
        <!--chat_page-->

      </section>

    </div>
    <!--row-->



  </div>
  <script type="text/javascript" src="http://gpc-test.work/assets/js/bootstrap.js?1595739458"></script>

  <script>
    $(function() {

      $('#message_send_btn').on('click', function() {
        let mes = $(this).prev('textarea').val();
        if(mes== '') { return;}

        let add_message = `
        <div class="admin send_area">
                <div class="message">
                  <div class="name">うふた浜</div>
                  <div class="time">2022年4月1日</div>
                  <div class="comment">${mes}</div>
                </div>
        </div>
        `;

        $('.message_sec').append(add_message);
        $(this).prev('textarea').val('');

        message_h = $('.message_sec').innerHeight();
        window.scroll({
          top: message_h,
          behavior: "smooth"
        });

      });

      $('.select_stetas').on('change', function() {
        alert("表示変更");
      });

      $('.sort_btn').on('click', function() {
        alert("ソート");
      });

      $('.delete').on('click', function() {
        confirm("本当に削除して宜しいですか？");
      });

      $(".t_tip").tooltip();

      $('.detail_btn').on('click', function() {
        let txt = $(this).data('txt');
        $(this).closest('tr').next().toggle();

        $(this).data('txt', $(this).html());
        $(this).html(txt);

      });

      $('.nav-sub').hide();

      $('.menu-toggle').click(function() {
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