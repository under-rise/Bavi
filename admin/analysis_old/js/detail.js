if(window.alalysis == undefined){
    window.alalysis = {}
}

if(window.alalysis.detail == undefined){
    window.alalysis.detail = {}
}

$(window).on('load', function() {



    // 詳細ページ初期化
    alalysis.detail.pageInit = function(shop_id){

        json  = alalysis.common.getJson(data_url);
        json.done(function(data) {
            alalysis.common.jsonData = data;
            let jsonData = alalysis.funcs.jsonSearch(shop_id);
             
            alalysis.common.charts["access_charts"] = new Chart($("#access_charts")[0].getContext("2d"), alalysis.common.setData(jsonData));
            alalysis.common.charts["stay_time_charts"] = new Chart($("#stay_time_charts")[0].getContext("2d"), alalysis.detail.setStayTime(jsonData));
            alalysis.common.charts["conversion_charts"] = new Chart($("#conversion_charts")[0].getContext("2d"), alalysis.detail.setConversionData(jsonData));
            alalysis.common.charts["pageview_charts"] = new Chart($("#pageview_charts")[0].getContext("2d"), alalysis.detail.setPageviewData(jsonData));
         

            alalysis.detail.setReference();

            // 数字反映実行
            alalysis.funcs.date = alalysis.funcs.setArrayData();
            alalysis.funcs.setSelectDate(jsonData,shop_id);

            $('.stay_time_average .num').text(jsonData.value.staytimeAverage);
           
        });
    }

    // 滞在時間（平均値を計算）
    alalysis.detail.setStayTime = function(jsonData){

        let sum = alalysis.funcs.sum(jsonData.value.staytime);
        
        return {
            type: "pie",
            data: {
                labels: alalysis.funcs.getStaytime(),
                datasets: [{
                        label: "滞在時間",
                        fill: false,
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                          ],
                        lineTension: 0,
                        data: jsonData.value.staytime
                    }
                ],
            },
            plugins: [ChartDataLabels],
            options: {
                plugins: {
                    datalabels: {
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 13,
                        },
                        formatter: (value, ctx) => {
                            return Math.round(value/sum*1000)/10 + '%';
                        },
                    }
                }
            }
        }
    }

    // ページビュー数（setPageviewData）
    alalysis.detail.setPageviewData = function(jsonData){
        return {
            type: "bar",
            data: {
                labels: alalysis.funcs.getDay(),
                datasets: [{
                        label: "ページビュー（1ユーザーあたり）",
                        fill: false,
                        backgroundColor: RED_LINE,
                        borderColor: RED_LINE,
                        lineTension: 0,
                        data: jsonData.value.pageview_day
                    },
                ],
            },
            options: {}
        }
    }

    alalysis.detail.setPageviewUpdata = function(jsonData,dateType){
    
         return (
                 [{
                         label: "1ユーザーあたり",
                         fill: false,
                         backgroundColor: RED_LINE,
                         borderColor: RED_LINE,
                         lineTension: 0,
                         data: jsonData["pageview_"+dateType]
                     }
                 ]
         );
      }

    // コンバージョン数
    alalysis.detail.setConversionData = function(jsonData){
        return {
            type: "bar",
            data: {
                labels: alalysis.funcs.getDay(),
                datasets: [{
                        label: "予約完了数",
                        fill: false,
                        backgroundColor: RED_LINE,
                        borderColor: RED_LINE,
                        lineTension: 0,
                        data: jsonData.value.conversion_day
                    },
                    {
                        label: "準予約完了",
                        fill: false,
                        backgroundColor: BLUE_LINE,
                        borderColor: BLUE_LINE,
                        lineTension: 0,
                        data: jsonData.value.semi_conversion_day
                    },
                    {
                        label: "電話タップ",
                        fill: false,
                        backgroundColor: GREEN_LINE,
                        borderColor: GREEN_LINE,
                        lineTension: 0,
                        data: jsonData.value.tel_conversion_day
                    },
                    {
                        label: "オフィシャルサイトタップ",
                        fill: false,
                        backgroundColor: ORANGE_LINE,
                        borderColor: ORANGE_LINE,
                        lineTension: 0,
                        data: jsonData.value.site_conversion_day
                    }   
                ],
            },
            options: {}
        }
    }
    

    // コンバージョン数 アップデート
    alalysis.detail.setConversionUpdata = function(jsonData,dateType){
       console.log(dateType);
        return (
                [{
                        label: "予約完了数",
                        fill: false,
                        backgroundColor: RED_LINE,
                        borderColor: RED_LINE,
                        lineTension: 0,
                        data: jsonData["conversion_"+dateType]
                    },
                    {
                        label: "準予約完了",
                        fill: false,
                        backgroundColor: BLUE_LINE,
                        borderColor: BLUE_LINE,
                        lineTension: 0,
                        data: jsonData["semi_conversion_"+dateType]
                    },
                    {
                        label: "電話タップ",
                        fill: false,
                        backgroundColor: GREEN_LINE,
                        borderColor: GREEN_LINE,
                        lineTension: 0,
                        data: jsonData["tel_conversion_"+dateType]
                    },
                    {
                        label: "オフィシャルサイトタップ",
                        fill: false,
                        backgroundColor: ORANGE_LINE,
                        borderColor: ORANGE_LINE,
                        lineTension: 0,
                        data: jsonData["site_conversion_"+dateType]
                    }   
                ]
        );
     }

     alalysis.detail.setReference_number = 0;
     alalysis.detail.setReference_json = {};

    // 参照サイト
    alalysis.detail.setReference = function(){
        let json = alalysis.common.getJson(reference_url);
        
        json.done(function(data){
            alalysis.detail.setReference_json = data;
           
          
            let html = "";
            for (let i = alalysis.detail.setReference_number; i < REFERENCE_MAX+alalysis.detail.setReference_number; i++) {
               
                if(data.value[i] != undefined){
                
                html += `
                <ul>
                    <li>${data.value[i].media}</li>
                    <li>${data.value[i].url}</li>
                    <li>${data.value[i].access}件</li>
                </ul>
                `
                }
            }
            
            $('#reference_site').html(html);
            alalysis.detail.pagerInit();
        });

     
    }


    // ページボタンの表示
    alalysis.detail.pagerInit = function(){
        let len = alalysis.detail.setReference_json.value.length;
        let num = alalysis.detail.setReference_number;

        if(num+REFERENCE_MAX >= len) {
            $('.pager_btn li.next').hide();
        }else{
            $('.pager_btn li.next').show();
        }
        if(num < REFERENCE_MAX ) {
            $('.pager_btn li.prev').hide();
        }else{
            $('.pager_btn li.prev').show();
        }

    }

    // pager click
    $('.pager_btn li').on('click',function(e){
        if($(e.target).hasClass('next')){
            alalysis.detail.setReference_number += REFERENCE_MAX;
        }else{
            alalysis.detail.setReference_number -= REFERENCE_MAX;
            // 0より小さくなったら
            alalysis.detail.setReference_number = alalysis.detail.setReference_number < 0 ? 0 : alalysis.detail.setReference_number;
        }
        alalysis.detail.setReference();
        alalysis.detail.pagerInit();
    });

});