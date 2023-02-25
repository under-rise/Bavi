if(window.alalysis == undefined){
    window.alalysis = {}
}

if(window.alalysis.funcs == undefined){
    window.alalysis.funcs = {}
}

$(function(){

    alalysis.funcs.date = {}
    
    

    // 日付変換
    $('.time_select li').on('click',function(e){

      if($(e.target).hasClass('active')) return;

      // チャート取得
      let chars_id = $(this).closest('.analysis_top').find('canvas').attr('id');
      // 日付取得取得
      let day = $(this).attr('class');
      // ショップID取得
      let shop_id = $(this).parent().data('shop_id');
      // 取得タイプ
      let type = $(this).parent().data('type');
      // 取得タイプ
      let replace = $(this).parent().data('replace');
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      
      let click_type;
      switch(day){
        case 'day':
            click_type = alalysis.funcs.getDay();
            break;
        case 'week':
            click_type = alalysis.funcs.getWeek();
            break;
        case 'month':
            click_type = alalysis.funcs.getMonth();
            break;
      }
      //日付ラベルの変更  
      alalysis.common.charts[chars_id].data.labels = click_type;
      //ショップデータの取得   
      let jsonData = alalysis.funcs.jsonSearch(shop_id);
   
      //グラフデータ反映 
      switch(type){
        case 'guest':
            alalysis.common.charts[chars_id].data.datasets = alalysis.common.setUpdate(jsonData.value,day);
        break;
        case 'conversion':
            alalysis.common.charts["conversion_charts"].data.datasets = alalysis.detail.setConversionUpdata(jsonData.value,day);
        break;
        case 'pageview':
            alalysis.common.charts["pageview_charts"].data.datasets = alalysis.detail.setPageviewUpdata(jsonData.value,day);
        break;
      }
 
      // テキスト反映     
      alalysis.funcs.replace(jsonData,replace,shop_id,type,day);
      alalysis.common.charts[chars_id].update();
    });

    // json検索（ショップID検索）
    alalysis.funcs.jsonSearch = function(keyword){
        let j;
        for(let e of alalysis.common.jsonData){
            if(e.shop_id == keyword){
                j = e;
                break;
            }
        }
        return j;
    }

    // 数字反映
    alalysis.funcs.replace = function(jsonData,replace,shop_id,type,day){
        
        if(type=="guest"){
            for(let i of replace){
                let replacePos =  '#'+shop_id+ " ."+i+"_"+type;
                let jsonKey = i+"_"+type+"_"+day;
                let num = alalysis.funcs.sum(jsonData.value[jsonKey]);
            
                $(replacePos).find('.num').text(num);
            
            }
        }

        if(type=="conversion"){
          
            for(let i of replace){ 
                let replacePos =  '#'+shop_id+ " ."+i+"_guest";
                let jsonKey = i+"_"+day;
                let num = alalysis.funcs.sum(jsonData.value[jsonKey]);
                $(replacePos).find('.num').text(num);
            }
        }

        if(type=="pageview"){
      
            for(let i of replace){ 
                let replacePos =  '#'+shop_id+ " ."+i; 
                let jsonKey = i+"_"+day;
                let num = alalysis.funcs.sum(jsonData.value[jsonKey]);
                $(replacePos).find('.num').text(num);
            }
        }

        
    }

    // 合計
    alalysis.funcs.sum = function(data){
        let total = data.reduce(function(sum, element){
            return sum + element;
          }, 0);
        return total;
    }

    // 日時取得
    alalysis.funcs.getDay = function(){
        let day = ['3時','6時','9時','12時','15時','18時','21時','24時'];
        return day;
    }

    // 滞在時間取得
    alalysis.funcs.getStaytime = function(){
        let day = ['0〜10秒','10〜30秒','30〜60秒','60〜120秒','120〜360秒','360秒〜'];
        return day;
    }
 
    // 週間日付取得
    alalysis.funcs.getWeek = function(){
        let week = [];
        let d = new Date();
        d.setDate(d.getDate()-7);
        for(let i=0; i<7;i++){
            d.setDate(d.getDate()+1);
            week.push(d.getMonth()+1 +"月"+d.getDate() +"日");
        }
        return week;
    }

    // 月付取得
    alalysis.funcs.getMonth = function(){
        let month = [];
        let d = new Date();
        d.setMonth(d.getMonth()-6);
        for(let i=0; i<7;i++){
            d.setMonth(d.getMonth()+1);
            month.push(d.getFullYear()+"年"+d.getMonth()+"月");
        }
        return month;
    }

    //当日・週間・月間取得
    alalysis.funcs.setArrayData = function(){
        let date = {}
        let d = new Date();
        
        // 当日
        date.day = d.getFullYear()+"年"+(d.getMonth()+1)+"月"+d.getDate()+"日"+"("+DAY_OF_WEEK[d.getDay()]+")";
        // 週間
        d.setDate(d.getDate()-6);
        date.week = d.getFullYear()+"年"+(d.getMonth()+1)+"月"+d.getDate()+"日"+"("+DAY_OF_WEEK[d.getDay()]+")"+"〜"+date.day;
        // 月間
        let d1 = new Date();
        d1.setMonth(d1.getMonth()-6);
        let d2 = new Date();
        date.month = d1.getFullYear()+"年"+(d1.getMonth()+1)+"月〜"+d2.getFullYear()+"年"+(d2.getMonth()+1)+"月";
       
        return date;
    }

    // 選択日時の初回設定
    alalysis.funcs.setSelectDate = function(jsonData,shop_id){
        $('.time_select').each(function(i,e){

            // 数字初期化（最初はday * 1日のデータ取得）
            let replace = $(this).data('replace');
            let type = $(this).data('type');
           
            $(e).find('li').each(function(j,el){
                if($(el).hasClass('active')){
                    let replacePos = $(this).closest('.analysis_top').find('.selected_date span');
                    let activeDay = $(this).attr('class').replace("active","").trim();
                    let result = alalysis.funcs.date[activeDay];
                    // 選択日付の更新
                    replacePos.text(result);
                    //データの設定
                    alalysis.funcs.replace(jsonData,replace,shop_id,type,activeDay);
                   
                }

            });
        });
        
    }

    // 選択日時の選択設定
    $('.time_select li').on('click',function(i,e){
        let replacePos = $(this).closest('.analysis_top').find('.selected_date span');
        let activeDay = $(this).attr('class').replace("active","").trim();
        let result = alalysis.funcs.date[activeDay];
        replacePos.text(result);   
    });
    

    alalysis.funcs.init = function(){

       

    }
  
    // 初期化
    alalysis.funcs.init();
    
   
});