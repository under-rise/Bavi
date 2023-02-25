// sort

let default_data;

$(function(){
    default_data = $('.analysis_sec .table_style').find('tr:first').nextAll();
});


$('.sort').on('click', function() {

    let sort_bool;
    sort_num = $(this).hasClass('active') ? 1 : -1;

    $(this).toggleClass('active');

    // click num取得
    let num = $(this).data('num');

    if(num == 'reverse'){
        let html;
        if(sort_num == -1){
            html = $.makeArray(default_data);
            html.reverse();
        }else{
            html = default_data;
            console.log(sort_num);
        }
        setTable.call(this,html);
        return;
    }

    let tr = $(this).closest('.table_style').find('tr:first').nextAll();

    let arr = [];
    tr.each(function(i, j) {
        arr[i] = [];
        $(j).find('td').each(function(e, o) {
            arr[i][e] = $(o).html();
        });
    });

    arr.sort((a, b) => {
        console.log(sort_bool);
        if (Number(a[num].slice(0, -1)) > Number(b[num].slice(0, -1))) return 1 * sort_num;
        if (Number(a[num].slice(0, -1)) < Number(b[num].slice(0, -1))) return -1 * sort_num;
        return 0;
    });

    // 変換
    let html = '';
    for (let i of arr) {
        html += "<tr>";
        for (let j in i) {
            if (j === 0) {
                html += `<td>${i[j]}</td>`;
            } else {
                html += `<td>${i[j]}</td>`;
            }
        }
        html += "</tr>";
    }
    setTable.call(this,html);
});

window.setTable = function(data){
    $(this).closest('.table_style').find('tr:not(:first)').remove();
    $(this).closest('.table_style').find('tr:first').after(data);
}