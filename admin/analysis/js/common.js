if(window.alalysis == undefined){
    window.alalysis = {}
}

if(window.alalysis.common == undefined){
    window.alalysis.common = {}
}

// チャートの生成
$(window).on('load', function() {

    alalysis.common.jsonData = {}
    alalysis.common.charts = {}
    
    // トップページ初期化
    alalysis.common.init = function(){

        json  = alalysis.common.getJson(data_url);
        json.done(function(jsonData) {
            alalysis.common.jsonData = jsonData;
            for (let i = 0; i < jsonData.length; i++) {
                let ctx = $("#analysis_" + i)[0].getContext("2d");
                alalysis.common.charts["analysis_" + i] = new Chart(ctx, alalysis.common.setData(jsonData[i]));

                 // 数字反映実行
                alalysis.funcs.date = alalysis.funcs.setArrayData();
                let shop_id = $('.analysis_top').eq(i).find('.time_select').data('shop_id');
                alalysis.funcs.setSelectDate(jsonData[i],shop_id);
            }
           
        });
    }

   
    // データ取得
    alalysis.common.getJson =  function(url) {
        let d = new $.Deferred();
        $.ajax({
            url: url,
            type: 'GET',
            dataType: "json",
        }).done(function(data) {
            // success
            var data_stringify = JSON.stringify(data);
            var data_json = JSON.parse(data_stringify);
            d.resolve(data_json);
            return data_json;
        }).fail(function(data) {
            // error
            console.log('error');
        });
        return d.promise();
    }

    // 閲覧データ初回設定
    alalysis.common.setData = function(jsonData){
        return {
            type: "line",
            data: {
                labels: alalysis.funcs.getDay(),
                datasets: [{
                        label: "新規ユーザー",
                        fill: false,
                        backgroundColor: RED_LINE,
                        borderColor: RED_LINE,
                        lineTension: 0,
                        data: jsonData.value.new_guest_day
                    },
                    {
                        label: "リピートユーザー",
                        fill: false,
                        backgroundColor: BLUE_LINE,
                        borderColor: BLUE_LINE,
                        lineTension: 0,
                        data: jsonData.value.repeat_guest_day
                    },
                    {
                        label: "閲覧ユーザー",
                        fill: false,
                        backgroundColor: GREEN_LINE,
                        borderColor: GREEN_LINE,
                        lineTension: 0,
                        data: jsonData.value.view_guest_day
                    }
                ],
            },
            options: {}
        }
    }

    // 閲覧データ更新
    alalysis.common.setUpdate = function(jsonData,dateType){
        
        return (
            [{
                label: "新規ユーザー",
                fill: false,
                backgroundColor: RED_LINE,
                borderColor: RED_LINE,
                lineTension: 0,
                data: jsonData["new_guest_"+dateType]
            },
            {
                label: "リピートユーザー",
                fill: false,
                backgroundColor: BLUE_LINE,
                borderColor: BLUE_LINE,
                lineTension: 0,
                data: jsonData["repeat_guest_"+dateType]
            },
            {
                label: "閲覧ユーザー",
                fill: false,
                backgroundColor: GREEN_LINE,
                borderColor: GREEN_LINE,
                lineTension: 0,
                data: jsonData["view_guest_"+dateType]
            }
            ]
        );
    }

   
    

});