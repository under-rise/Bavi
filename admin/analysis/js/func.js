if(window.alalysis == undefined){
    window.alalysis = {}
}

if(window.alalysis.funcs == undefined){
    window.alalysis.funcs = {}
}

$(function(){

    alalysis.funcs.date = {}
    

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

    

    alalysis.funcs.init = function(){

       

    }
  
    // 初期化
    alalysis.funcs.init();
    
   
});