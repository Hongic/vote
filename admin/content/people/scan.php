<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>查看人物</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
    </head>
    <body class="mainbg">
        <div  class="ustop">
            <?php
            include_once '../../conn/conn.php' ;
            require_once '../../conn/session.php' ;
            include_once '../../conn/page.class.php' ;

            // 截取中文字符

            function utf8Substr ( $str, $from, $len ) {
                return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $from . '}' .
                        '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $len . '}).*#s', '$1', $str) ;
            }

            $pageSize = 6 ; // 每页显示的记录数
            $sql0 = "select * from  tb_people order by id desc" ;
            $result0 = $mysqli->query($sql0) ;
            $total = $mysqli->affected_rows ; // 查询总记录！
            pageft($total, $pageSize, 1, 1, 1, 9, 20, 1) ;

            $sql = "select * from  tb_people order by id desc limit $firstcount,$pageSize" ;

            $result = $mysqli->query($sql) ;
            ?>
            <table class="pubtab">
                <tr>
                    <th class="pubth">ID</th>
                    <th class="pubth">姓名</th>
                    <th class="pubth">性别</th>
                    <th class="pubth">政治面貌</th>
                    <th class="pubth">图片</th>
                    <th class="pubth">标题</th>
                    <th class="pubth">简介</th>
                    <th class="pubth">票数</th>
                    <th class="pubth">操作</th>
                </tr>
                <?php while ( $row = $result->fetch_assoc() ) { ?>
                    <tr>
                        <td class="pubtd"><?= $row['id'] ; ?></td>
                        <td class="pubtd"><?= $row['name'] ; ?></td>
                        <td class="pubtd"><?= $row['sex'] ; ?></td>
                        <td class="pubtd"><?= $row['face'] ; ?></td>
                        <td class="pubtd" style="width: 138px;"><img src="../uploads/<?= $row['picture'] ; ?>" style="width: 130px;height: 50px;"/></td>
                        <td class="pubtd"><?php echo utf8Substr($row['title'], 0, 30) ; ?></td>
                        <td class="pubtd"><?php echo utf8Substr($row['info'], 0, 60) ; ?></td>
                        <td class="pubtd"><?= $row['votes'] ; ?></td>
                        <td class="pubtd">
                            <a href="./editor.php?edid=<?= $row['id'] ; ?>">修改</a> /
                            <a href="./delete.php?deid=<?= $row['id'] ?>">删除</a></td>
                    </tr>
                    <?php
                }

                $mysqli->close() ;
                ?>
            </table>

            <center style="padding: 6px;">
                <?php echo $pagenav ; ?>
            </center>

        </div>
    </body>
</html>
