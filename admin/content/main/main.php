<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>相关信息</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
    </head>
    <body class="mainbg">
        <div  class="ustop">
            <?php
            include_once '../../conn/conn.php' ;
            require_once '../../conn/session.php' ;
            $sql = "select id from  tb_people" ;
            $result = $mysqli->query($sql) ;
            ?>
            <table class="pubtab" >
                <tr>
                    <th class="pubth" style="padding: 6px;">名称</th>
                    <th class="pubth">参数</th>
                </tr>
                <tr>
                    <td class="pubtd" style="padding: 6px;">当前的IP</td>
                    <td class="pubtd"><?= $_SERVER['REMOTE_ADDR'] ; ?></td>
                </tr>
                <tr>
                    <td class="pubtd" style="padding: 6px;">参选人数</td>
                    <td class="pubtd"><?= $mysqli->affected_rows ; ?></td>
                </tr>
                <?
                mysqli_free_result($result) ;
                ?>
            </table>
        </div>
    </body>
</html>
