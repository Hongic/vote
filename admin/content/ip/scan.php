<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>查看IP</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
    </head>
    <body class="mainbg">
        <div  class="ustop">
            <?php
            include_once '../../conn/conn.php';
            require_once '../../conn/session.php';
            include_once '../../conn/page.class.php';

            $pageSize = 8; // 每页显示的记录数
            $sql0 = "select id from  tb_ip ";
            $result0 = $mysqli->query($sql0);
            $total = $mysqli->affected_rows; // 查询总记录！
            pageft($total, $pageSize, 1, 1, 1, 9, 20, 1);


            $sql = "select * from  tb_ip order by id limit $firstcount,$pageSize";
            $result = $mysqli->query($sql);
            ?>
            <table class="pubtab">
                <tr>
                    <th class="pubth">ID</th>
					<th class="pubth">人物ID</th>
                    <th class="pubth">投票IP</th>
                    <th class="pubth">投票时间</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="pubtd"><?= $row['id']; ?></td>
                        <td class="pubtd"><?= $row['ip']; ?></td>
						<td class="pubtd"><?= $row['nid']; ?></td>
                        <td class="pubtd"><?= $row['time']; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <center style="padding: 6px;">
                <?php echo $pagenav; ?>
            </center>

        </div>
    </body>
</html>
