$(function() {
    jsonajax();
});

//这里就要进行计算滚动条当前所在的位置了。如果滚动条离最底部还有100px的时候就要进行调用ajax加载数据
$(window).scroll(function() {
    //此方法是在滚动条滚动时发生的函数
    // 当滚动到最底部以上100像素时，加载新内容
    var $doc_height, $s_top, $now_height;
    $doc_height = $(document).height();        //这里是document的整个高度
    $s_top = $(this).scrollTop();            //当前滚动条离最顶上多少高度
    $now_height = $(this).height();            //这里的this 也是就是window对象
    if (($doc_height - $s_top - $now_height) < 20)
        jsonajax();
});

//做一个ajax方法来请求data.php不断的获取数据
var $num = 0;
function jsonajax() {

    $.ajax({
        url: 'data.php?fid=' + document.getElementById('tfid').value + '&page=' + document.getElementById('page').value,
        type: 'POST',
        data: "num=" + $num++,
        dataType: 'json',
        success: function(json) {
            if (typeof json == 'object') {
                var neirou, $row, iheight, temp_h;
                for (var i = 0, l = json.length; i < l; i++) {
                    neirou = json[i];    //当前层数据
                    //找了高度最少的列做添加新内容
                    iheight = -1;
                    $("#stage li").each(function() {
                        //得到当前li的高度
                        temp_h = Number($(this).height());
                        if (iheight == -1 || iheight > temp_h) {
                            iheight = temp_h;
                            $row = $(this); //此时$row是li对象了
                        }
                    });
                    $item = $('<div class="item_t"><div class="img"><a href="http://www.0452e.com/read-htm-tid-' + neirou.tid + '.html" target="_blank"><img src="' + neirou.attachurl + '" alt="' + neirou.subject + '" border="0" ></a></div><div class="title"><span>' + neirou.subject + '</span></div></div><div class="item_b clearfix"><div class="items_likes fl"><a href="http://www.0452e.com/read-htm-tid-' + neirou.tid + '.html" target="_blank" class="like_btn"></a><em class="bold">' + neirou.hits + '</em></div><div class="items_comment fr"><em class="bold">' + neirou.postdate + '</em></div></div>').hide();
                    $row.append($item);
                    $item.fadeIn();
                }
            }
        }
    });
}