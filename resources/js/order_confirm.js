$(function() {

    const confirm_btn = $('button#confrim_btn');
    let obj = {}
   
    confirm_btn.on('click', function() {
      
        let html = "";

        $('.plan_modal ._inr').empty();
  
        const init = ()=>{
            html = "";
            $('.plan_modal').iziModal('open');
            html += `<img src="assets/img/order/shopping-cart-shopping.gif" style="width:90px;">`;
            $('.plan_modal ._inr').html(html);
        }
      
       
        const getData = ()=>{

            let d = new $.Deferred();
            obj = {};
            $('.order_sec li').each(function(i, e) {
            
                let _v = $(e).find('.input_sec input').val();
                if (_v == '' || _v < 1) {
                    return;
                }
                obj[i] = {
                    img: $(e).find('figure').html().trim(),
                    name: $(e).find('.name').text().trim(),
                    caption: $(e).find('.name ~ p').html().trim(),
                    price: $(e).find('.price').text().trim(),
                    val: $(e).find('.input_sec input').val()
                };
                
            });

            d.resolve();
            return d.promise();
        }

        const setData = ()=>{
            html = "";
            let d = new $.Deferred();
            if (Object.keys(obj).length == 0) {
                html += `
                <div class="none">商品の数量を記入されていません。<br>再度、ご入力お願いします。</div>
                <button type="button" class="close_btn" data-izimodal-close="">閉じる</button>`;
            } else {

                for (let i of Object.keys(obj)) {
                    html += `
                    <div class="order_list">
                        <figure>
                            ${obj[i]["img"]}
                        </figure>

                        <div class="_info">
                            <div class="name">${obj[i]["name"]}</div>
                            <div class="caption">${obj[i]["caption"]}</div>
                            <div class="price">${obj[i]["price"]}</div>
                            <div class="val">${obj[i]["val"]}セット</div>
                        </div>
                    </div>`
                };

                html += `
                <div class="mes">上記内容で予約承ります。宜しいですか？</div>
                <button type="button" class="link_btn active" id="send_btn">注文する</button>
                <button type="button" class="close_btn" data-izimodal-close="">閉じる</button>
                `;
            }
            setTimeout(() => {
                d.resolve();
            }, 1500);
       
            return d.promise();
        }

        init();
        getData().then(()=>setData()).then(()=>{$('.plan_modal ._inr').html(html)});

    });

    $(".plan_modal").iziModal({
        closeButton: true,
        padding: 40,
        loop: true
    });
    $('.plan_modal').iziModal('close');

    //規約同意
    $('input#terms').on('change', function(e) {
        if ($(this).prop("checked")) {
            $('#confrim_btn').addClass('active');
        } else {
            $('#confrim_btn').removeClass('active');
        }
    });

    //送信する
    $(document).on('click', '#send_btn', function() {
        $('form').submit();
    });

    // let obj = $(
    //     '#user_information_form input,#user_information_form select,input[type="checkbox"]'
    // );
    // const confirm_btn = $('button.link_btn');
    // // const send_btn = $('button.#send_btn');

    // let isCheck = false;

    // obj.on('change', function(e) {
    //     $.each(obj, checkValue);
    //     if (isCheck) {
    //         confirm_btn.addClass('active');
    //     } else {
    //         confirm_btn.removeClass('active');
    //     }
    // });

    // function checkValue(i, e) {
    //     if ($(this).attr('require') == undefined) {
    //         return;
    //     }
    //     let name = $(e).attr('name');
    //     if (name == "terms") {
    //         if (!$(e).prop("checked")) {
    //             isCheck = false;
    //         }
    //     }
    //     if ($(e).val() == '') {
    //         isCheck = false;
    //         return false;
    //     }
    //     isCheck = true;
    // }

});