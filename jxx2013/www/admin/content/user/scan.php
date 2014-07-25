<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>查看用户</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
    </head>
    <body class="mainbg">
        <div  class="ustop">
            <?php
            include_once '../../conn/conn.php';
            require_once '../../conn/session.php';
            $sql = "select * from  tb_admin";
            $result = $mysqli->query($sql);
            ?>
            <table class="pubtab">
                <tr>
                    <th class="pubth" style="padding: 5px;">ID</th>
                    <th class="pubth" style="padding: 5px;">用户</th>
                    <th class="pubth" style="padding: 5px;">密码</th>
                    <th class="pubth" style="padding: 5px;">注册时间</th>
                    <th class="pubth" style="padding: 5px;">操作</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                        <td class="pubtd" style="padding: 3px;"><?= $row['id']; ?></td>
                        <td class="pubtd" style="padding: 3px;"><?= $row['user']; ?></td>
                        <td class="pubtd" style="padding: 3px;"><?= $row['pwd']; ?></td>
                        <td class="pubtd" style="padding: 3px;"><?= $row['time']; ?></td>
                        <td class="pubtd" style="padding: 3px;">
                            <a href="./editor.php?edid=<?= $row['id']; ?>">修改</a> /
                            <a href="./delete.php?deid=<?= $row['id']; ?>">删除</a></td>
                    </tr>
                    <?php
                }
                $result->free();
                $mysqli->close();
                ?>
            </table>
        </div>
    </body>
</html>
