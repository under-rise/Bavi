$(function(){
           
            var obj = '.shopdetail_sec .item input[type="checkbox"]';
            var item = '.shopdetail_sec .item';
            
            $(item).on('click',function(){
              var input = $(this).find('input[type="checkbox"]');
                if($(input).prop('checked')){
                   $(input).prop('checked',false);
                }else{
                  $(input).prop('checked',true);
                }
            });
            
            $('.clear_btn').on('click',function(){
                $(obj).each(function(){
                  $(this).prop('checked',false)
                });
            });
            
            $('.all_buy_btn').on('click',function(){
                $(obj).each(function(){
                  $(this).prop('checked',true)
                });
            });
            
            $('.order_btn').on('click',function(){
                var cnt_checked  = $(obj+':checked').length;
                if(cnt_checked == 0){
                    alert("商品を選択してください。")
                    return;
                }
                alert(cnt_checked+"個 / 注文フォームへ");
            });
            
});