if (window.reserveCalendar == undefined) {
  window.reserveCalendar = {};
}

const cal_item = ".calendar__sec_item";
const cal_sec = ".calendar__sec";

$(function () {

  let currentNum = 1; //現在のカレンダー

  //ーーーーーーーーーーーーーーーーーーーーーーーーーー
  // データ取得

  let jsonData;

  reserveCalendar.getJsonData = async function (url,callback) {


    const responce = await fetch(url);
    try {
      if (responce.status !== 200) {
        throw `response.status = ${response.status}, response.statusText = ${response.statusText}`;
      }
      jsonData = await responce.json();
      setCalendar()
      .then(()=>{
          sliderInit()
        .then(()=>{
          if(callback !== undefined){
            callback();
          }
        });
      });
    
      setCalendarBtn();
    } catch (err) {
      console.log(err);
      alert(err + "情報取得に失敗しました。");
    }
  };

  //ーーーーーーーーーーーーーーーーーーーーーーーーーー
  // カレンダー表示

  const today = new Date();

   function setCalendar() {
    return new Promise((resolve) => {
      let calendar = "";
      for (let i = 1; i <= calendarLength; i++) {
        let date = new Date(today.getFullYear(), today.getMonth() + i - 1, 1);
        let year = date.getFullYear();
        let month = date.getMonth();

        calendar += makeCalendar(year, month, i == 1 ? "current" : "next");
      }
      $(cal_sec).prepend(calendar);
      setTimeout(() => {
        resolve();
      }, 2000);
    });
  }

  //ーーーーーーーーーーーーーーーーーーーーーーーーーー
  // カレンダー作成

  const week = ["日", "月", "火", "水", "木", "金", "土"];

  function makeCalendar(year, month, activeClass) {

    let count = 0;
    let startDayOfWeek = new Date(year, month, 1).getDay();
    let endDate = new Date(year, month + 1, 0).getDate();
    let lastMonthEndDate = new Date(year, month, 0).getDate();
    let row = Math.ceil((startDayOfWeek + endDate) / week.length);

    // クエリー分岐
    if (getParam("date") != null && timeCheck(getParam("date"))) {

      let selectMonth = getParam("date").split("-")[1].padStart(1, "0");
      // ボタン用の変数セット
      currentNum =  parseInt(selectMonth) - today.getMonth();

      if (month +1 == selectMonth) {
        activeClass = "current";
      } else if (month+1 < selectMonth) {
        activeClass = "prev";
      } else {
        activeClass = "next";
      }
    }

    let calendar = `<div class="calendar__sec_item ${activeClass}">`;
    calendar += `<div class="year_month">${year}年${month + 1}月の予約状況</div>`;
    calendar += state_icon_html;
    calendar += '<table class="table"><tr>';
    for (var i = 0; i < week.length; i++) {
      calendar += "<th>" + week[i] + "</th>";
    }
    calendar += "</tr>";

    // 1行ずつ設定
    for (var i = 0; i < row; i++) {
      calendar += "<tr>";
      // 1colum単位で設定
      for (var j = 0; j < week.length; j++) {
        if (i == 0 && j < startDayOfWeek) {
          // 1行目で1日まで先月の日付を設定
          calendar += "<td class='disabled'><a>&nbsp;</a><p>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</p></td>";
        } else if (count >= endDate) {
          // 最終行で最終日以降、翌月の日付を設定
          count++;
          calendar += "<td class='disabled'><a>&nbsp;</a><p>" + (count - endDate) + "</p></td>";
        } else {
          // 当月の日付を曜日に照らし合わせて設定
          count++;
          if (year == today.getFullYear() && month == today.getMonth() && count == today.getDate()) {
            calendar += "<td class='today'>" + setState(year, month, count) + "<p>" + count + "</p></td>";
          } else {
            calendar += "<td>" + setState(year, month, count) + "<p>" + count + "</p></td>";
          }
        }
      }
      calendar += "</tr>";
    }

    calendar += "</table></div>";

    return calendar;
  }

  
  // state表示
  function setState(year, month, count) {
    // 日付取得
    let d = `${year}-${month + 1}-${count}`;
    // 月日付変換
    let dd = new Date(year,month,count);
    
    // 昨日の日付
    let yesterDay = new Date();
    yesterDay.setDate(yesterDay.getDate() - 1);
    if(Date.parse(yesterDay) > Date.parse(dd)){
     return `<a>${state_html[0]}</a>`;
    }

    let q_month = ("0" + (month + 1)).slice(-2);
    let q_day = ("0" + count).slice(-2);
    let query = `${year}-${q_month}-${q_day}`;

    if (count == 0 || jsonData[d] == undefined) {
      return `<a>${state_html[0]}</a>`;
    }
    switch (jsonData[d].state) {
      case 0:
        return `<a>${state_html[0]}</a>`;
      case 1:
        return `<a href="/venue_order.php?shop_id=${SHOP_ID}&date=${query}" data-date=${query}>${state_html[1]}</a>`;
      case 2:
        return `<a href="/venue_order.php?shop_id=${SHOP_ID}&date=${query}" data-date=${query}>${state_html[2]}</a>`;
      case 3:
        return `<a>${state_html[3]}</a>`;
      default:
        return `<a>${state_html[0]}</a>`;
    }
  }

  // 日付入力チェック（前日~3ヶ月以降の入力）
  function timeCheck(query){ 
   
    let yesterDay = new Date();
    let toDay = new Date();
    let maxDay = new Date(toDay.getFullYear(),toDay.getMonth() + (calendarLength),1);
    yesterDay.setDate(toDay.getDate() - 1);
    if(yesterDay < Date.parse(query) &&  Date.parse(query) < maxDay){
      return true;
    }
    console.log("不正な入力がありました。");
    return false;
  }

  // ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
  // カレンダー
  let itemNum = calendarLength;

  $(window).on("resize", function () {
        sliderInit();
  });

  // slick
  function sliderAction() {
    $(cal_item).removeClass("current prev next");
    //   $(`.calendar__sec_item:nth-child(${currentNum})`).addClass("current");

    $(cal_item).each(function (e) {
      if ($(this).index() + 1 == currentNum) {
        $(this).addClass("current");
      } else if ($(this).index() + 1 > currentNum) {
        $(this).addClass("next");
      } else {
        $(this).addClass("prev");
      }
    });
    sliderInit();
    setCalendarBtn();
  }

  function setCalendarBtn() {
    if (currentNum >= itemNum) {
      $(".slider__arrow.is-next").addClass("disable");
    } else {
      $(".slider__arrow.is-next").removeClass("disable");
    }

    if (currentNum <= 1) {
      $(".slider__arrow.is-prev").addClass("disable");
    } else {
      $(".slider__arrow.is-prev").removeClass("disable");
    }
    
  }

  // 前の月
  $(document).on("click",".slider__arrow.is-prev", function () {
    if (currentNum <= 1) {
      currentNum = currentNum;
    } else {
      currentNum = currentNum - 1;
    }
    sliderAction();
  });

  $(document).on("click",".slider__arrow.is-next", function () {
    if (currentNum >= itemNum) {
      currentNum = itemNum;
    } else {
      currentNum = currentNum + 1;
    }
    sliderAction();
  });

  // query取得
  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  const state_icon_html = `<div class="cal_info">
  <dl>
      <dt><img src="/assets/img/calendar/icon01.png"></dt>
      <dd>受付対象外</dd>
  </dl>
  <dl>
      <dt><img src="/assets/img/calendar/icon02.png"></dt>
      <dd>空きあり</dd>
  </dl>
  <dl>
      <dt><img src="/assets/img/calendar/icon03.png"></dt>
      <dd>残りわずか</dd>
  </dl>
  <dl>
      <dt><img src="/assets/img/calendar/icon04.png"></dt>
      <dd>満員</dd>
  </dl>
</div>`;
});

 // カレンダーの大きさ
 function sliderInit() {
  return new Promise((resolve=>{
    let btn_h = $(".slider__arrow").innerHeight();
    let h = $(cal_item + ".current").innerHeight();
    $(cal_sec).css({ height: h + btn_h + 15 + "px" });
    resolve();
  }));

}

$(window).load(function() { sliderInit(); }) 

