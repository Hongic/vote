<?php
/*
 * 排行榜：根据票数（votes）降序排名
 * 逻辑思想：
 *     左：显示部分详细的人物信息（图片、票数、主题、部分简介）
 *     右：前十的票数排名（前三特殊标识）
 */
include_once './header.php' ;
include_once './admin/conn/conn.php' ;
include_once './admin/conn/page.class.php' ;

// 截取中文字符
function utf8Substr ( $str, $from, $len ) {
    return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $from . '}' .
            '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $len . '}).*#s', '$1', $str) ;
}

$pageSize = 5 ; // 每页显示的记录数
$sql0 = "select * from  tb_people order by votes desc,name asc" ;
$result0 = $mysqli->query($sql0) ;
$total = $mysqli->affected_rows ; // 查询总记录！
pageft($total, $pageSize, 1, 1, 1, 9, 20, 1) ;

$sql = "select * from  tb_people order by votes desc,name asc limit $firstcount,$pageSize" ;
$result = $mysqli->query($sql) ;
$count = $mysqli->affected_rows ;
?>

<div class="votes_content" style="background-color:#FFF ">
    <!--  左   -->
    <div class="votes_left">
        <?php
        while ( $row1 = $result->fetch_assoc() ) {
            ?>
            <span>
                <a href="./every.php?vid=<?php echo base64_encode($row1['id']) ; ?>">
                    <img src="./admin/content/uploads/<?= $row1['picture'] ; ?>" style="width: 170px;height: 220px;">
                </a>
            </span>
            <div style="width: 522px;height: 0px;position: relative;top: -223px;left: 200px;line-height: 1.5em;">
                <b>主题：</b><?= $row1['title'] ; ?>
                <hr style="border-bottom:1px #BC4506 dashed;margin: 5px;">
                <b>姓名：</b><?= $row1['name'] ; ?>
                <font style="color: red;padding-left: 50px;">票数：<?= $row1['votes'] ; ?></font>
                <hr style="border-bottom: 1px #BC4506 dashed;margin:5px;">
                <b>简介：</b>
                <?php
                $ss = $row1['info'] ;

                echo "&nbsp;&nbsp;&nbsp;&nbsp;" . utf8Substr($ss, 0, 156) ;
                ?>
                <br>
            </div>
            <br>
        <?php } ?>

        <div style="margin-bottom: 0px;margin-top: 60px;text-align: center;position: relative;bottom: 0px;clear: both;">
            <?php echo $pagenav ; ?>
        </div>
    </div>

    <!--  右   -->
    <div class="votes_right">
        <table>
            <tr>
                <th class="rangk_r_th">名次</th>
                <th class="rangk_r_th">姓名</th>
                <th class="rangk_r_th">票数</th>
            </tr>
            <?php
//include_once './admin/conn/conn.php';
//$sql = "select * from tb_people";
            $result = $mysqli->query($sql0) ;

            $count = $mysqli->affected_rows ;
            for ( $i = 1 ; $i <= $count ; $i++ ) {
                $row = $result->fetch_assoc() ;
                ?>
                <tr>
                    <td class="rangk_r_td">

                        <span class="<?php
                        if ( $i < 4 ) {
                            echo "rang_pic_top3" ;
                        } else {
                            echo "rang_pic_fff" ;
                        }
                        ?>"><?php echo $i ; ?>
                        </span>
                    </td>
                    <td class="rangk_r_td">
                        <a href="./every.php?vid=<?php echo base64_encode($row['id']) ; ?>">
                            <?php echo $row['name'] ; ?>
                        </a>
                    </td>
                    <td class="rangk_r_td"><?php echo $row['votes'] ; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>


</div>


<?php
include_once './footer.php' ;
?>