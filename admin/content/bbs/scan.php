<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>查看评论</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
        <script src="jquery库文件路径"></script>
        <script>
            $(function() {
                $(':button').click(function() {
                    var but = $(this);
                    var id = but.attr('did'); //attr方法是获取对象的属性值，按钮中设定你data=10，那么，这里id的值就会等于10了
                    $.post('a.php', 'id = ' + id, function(did) { //ajax方法这里，把参数传递过去，参数键是id，参数值是刚才取得的id值，传递方式是post
                        but.val(did);
                    }
                    )
                })
            })
        </script>
    </head>
    <body class="mainbg">
        <div  class="ustop">
            <?php
            include_once '../../conn/conn.php';
            require_once '../../conn/session.php';

            include_once '../../conn/page.class.php';

            $pageSize = 8; // 每页显示的记录数
            $sql0 = "select id from  tb_bbs ";
            $result0 = $mysqli->query($sql0);
            $total = $mysqli->affected_rows; // 查询总记录！
            pageft($total, $pageSize, 1, 1, 1, 9, 20, 1);


            $sql = "select * from  tb_bbs order by id limit $firstcount,$pageSize";
            $result = $mysqli->query($sql);
            ?>
            <table class="pubtab">
                <tr>
                    <th class="pubth" style="padding: 5px;">ID</th>
                    <th class="pubth" style="padding: 5px;">访客</th>
                    <th class="pubth" style="padding: 5px;">评论被容</th>
                    <th class="pubth" style="padding: 5px;">发表时间</th>

                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="pubtd" style="padding: 3px;width: 50px;"><?= $row['id']; ?></td>
                        <td class="pubtd" style="padding: 3px;"><?= $row['visitor']; ?></td>
                        <td class="pubtd" style="padding: 3px;"><?= $row['info']; ?></td>
                        <td class="pubtd" style="padding: 3px;width: 160px;"><?= $row['time']; ?></td>

                    </tr>
                    <?php
                }
                $result->free();
                $mysqli->close();
                ?>
            </table>

            <center style="padding: 6px;">
                <?php echo $pagenav; ?>
            </center>

        </div>
    </body>
</html>
