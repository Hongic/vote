
<div id="main">
    <div id="content">
        <!--  PPT、人物、投票须知   -->

        <div class="xw">
            <div class="xw_left">
                <SCRIPT>
                    var widths = 320;
                    var heights = 258;
                    var counts = 4;
                    img1 = new Image();
                    img1.src = 'images/library.jpg';
                    img2 = new Image();
                    img2.src = 'images/xiaodao.jpg';
                    img3 = new Image();
                    img3.src = 'images/qiuchang.jpg';
                    img4 = new Image();
                    img4.src = 'images/taolin.jpg';
                    url1 = new Image();
                    url1.src = '';
                    url2 = new Image();
                    url2.src = '';
                    url3 = new Image();
                    url3.src = '';
                    url4 = new Image();
                    url4.src = '';

                    var nn = 1;
                    var key = 0;
                    function change_img()
                    {
                        if (key == 0) {
                            key = 1;
                        }
                        else if (document.all)
                        {
                            document.getElementById("pic").filters[0].Apply();
                            document.getElementById("pic").filters[0].Play(duration = 2);
                        }
                        eval('document.getElementById("pic").src=img' + nn + '.src');
                        eval('document.getElementById("url").href=url' + nn + '.src');
                        for (var i = 1; i <= counts; i++) {
                            document.getElementById("xxjdjj" + i).className = 'axx';
                        }
                        document.getElementById("xxjdjj" + nn).className = 'bxx';
                        nn++;
                        if (nn > counts) {
                            nn = 1;
                        }
                        tt = setTimeout('change_img()', 4000);
                    }
                    function changeimg(n) {
                        nn = n;
                        window.clearInterval(tt);
                        change_img();
                    }
                    document.write('<style>');
                    document.write('.axx{padding:1px 7px;border-left:#cccccc 1px solid;}');
                    document.write('a.axx:link,a.axx:visited{text-decoration:none;color:#fff;line-height:12px;font:9px sans-serif;background-color:#666;}');
                    document.write('a.axx:active,a.axx:hover{text-decoration:none;color:#fff;line-height:12px;font:9px sans-serif;background-color:#999;}');
                    document.write('.bxx{padding:1px 7px;border-left:#cccccc 1px solid;}');
                    document.write('a.bxx:link,a.bxx:visited{text-decoration:none;color:#fff;line-height:12px;font:9px sans-serif;background-color:#D34600;}');
                    document.write('a.bxx:active,a.bxx:hover{text-decoration:none;color:#fff;line-height:12px;font:9px sans-serif;background-color:#D34600;}');
                    document.write('</style>');
                    document.write('<div style="width:' + widths + 'px;height:' + heights + 'px;overflow:hidden;text-overflow:clip;">');
                    document.write('<div><a id="url"><img id="pic" style="border:0px;filter:progid:dximagetransform.microsoft.wipe(gradientsize=1.0,wipestyle=4, motion=forward)" width=' + widths + ' height=' + heights + ' /></a></div>');
                    document.write('<div style="filter:alpha(style=1,opacity=10,finishOpacity=80);background: #888888;width:100%-2px;text-align:right;top:-12px;position:relative;margin:1px;height:12px;padding:0px;margin:0px;border:0px;">');
                    for (var i = 1; i < counts + 1; i++) {
                        document.write('<a href="javascript:changeimg(' + i + ');" id="xxjdjj' + i + '" class="axx" target="_self">' + i + '</a>');
                    }
                    document.write('</div></div>');
                    change_img();
                </SCRIPT>
            </div>
            <div class="xw_middle">
                <div class="dbt"><h5><!--begin--><a href="introduce.php" target="_blank">2012河池学院大学生年度人物动态</a><!--end--></h5>


                    <table width="100%" border="0">
                        <tbody>
                            <tr><td align="left" class="yss01 p03"><a href="notice.php" target="_blank">·投票细则</a></td></tr>
                            <tr><td align="left" class="yss01 p03"><a href="#" target="_blank">·候选人名单</a></td></tr>
                            <tr><td align="left" class="yss01 p03"><a href="introduce.php" target="_blank">·关于举办“2012河池学院大学生年度人物”评选活动的通知</a></td></tr>
                            <tr><td align="left" class="yss01 p03"><a href="#" target="_blank"></a></td></tr>
                        </tbody></table>
                </div>
            </div>
            <div class="xw_right" style="line-height:20px; font-size:12px">
                <strong>一、投票方式
                </strong><br />
                <p>网络投票,应以“公平、公正、公开”为原则，利用本次活动为契机，充分挖掘典型，树立榜样，广泛宣传，进一步加强学风、校风建设。</p>
                <strong>二、投票细则</strong><br />
                1、投票对象：全院师生<br />
                2、投票要求：每天一个IP只能投一名参赛人员<br />
                3、投票截止时间：2013年**月**日<a href="notice.php" target="_blank">……[详细]</a></p>
            </div>
        </div>

        <!--  结束  -->





        <!--    投票的人物       -->
        <div class="clear"><img src="./images/12345de.jpg" width="980" height="33"></div>
        <div id="ccenter">
            <div id="ccmiddle">

<?php
include './admin/conn/conn.php';
$sql = "select * from tb_people";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$i = $row['id'];                         //指定投票项
?>

                <form id="form3" name="input" action="index_ok.php" method="POST" onsubmit="return CheckForm()">


<?php
$sql = "select * from tb_people";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {             //循环输出投票人信息
    $i++;
    ?>
                        <div id="box">

                            <center>
                                <a href="./every.php?vid=<?= $row['id']; ?>"><img src="./admin/content/uploads/<?php echo $row['picture'] ?>" border="0" class="imgs"></a>
                                <span>姓名：<?php echo $row['name']; ?></span>
                                <span>票数:<?php echo $row['votes']; ?></span>
                                <div class="toupiao">
                                    <li><label>
                                            <input type="checkbox" name=r value="<?php echo $row['id']; ?>" />&nbsp;投票选择</label></li></div>  <!--input传值-->
                            </center></div><?php } ?></div>
            <center>
                <div id="tpbt">
                    <br>
                    <input name="tpsubmit" id="tpsubmit" type="submit" value="投 票" title="一次只能投一票哦" style="font-size:16px; width:80px; height:30px;">&nbsp;&nbsp;&nbsp;<input name="resetbont" id="resetbont" type="reset" value="重 选" style="font-size:16px; width:80px; height:30px;">
                    <p>

                </div>
            </center>
            </form>
        </div>
        <!--   结束        -->
    </div>
</div>
<script language="JavaScript">
                    initDoubleTopBanner0()
                    function initDoubleTopBanner0()
                    {
                        var dlpicleft0 = document.getElementById("dlpicleft0");
                        var dlpicright0 = document.getElementById("dlpicright0");
                        dlpicleft0.style.left = "20px";
                        dlpicright0.style.right = "20px";
                        if (document.documentElement && document.documentElement.scrollTop)
                        {
                            dlpicleft0.style.top = (document.documentElement.scrollTop + 200) + "px";
                            dlpicright0.style.top = (document.documentElement.scrollTop + 200) + "px";
                        }
                        else if (document.body)
                        {
                            dlpicleft0.style.top = (document.body.scrollTop + 200) + "px";
                            dlpicright0.style.top = (document.body.scrollTop + 200) + "px";
                        }

                        setTimeout("initDoubleTopBanner0();", 100);
                    }

</script>

<script language="JavaScript">
    function closeDL(dlid1, dlid2) {
        document.getElementById(dlid1).style.visibility = 'hidden';
        if (dlid2)
        {
            document.getElementById(dlid2).style.visibility = 'hidden';
        }
    }
</script>

</div>