<?php
/*
 * 点击人物时跳转到该人物的详细信息
 * 思路：1、获取传过来的人物ID
 *       2、如果有ID就查询并显示信息，否则提示禁止访问
 */

include './header.php' ;
include_once './admin/conn/conn.php' ;
include_once './admin/conn/page.class.php' ;
?>

<div class="votes_content">
    <!--  详细的信息    -->

    <?php
    if ( !isset($_GET['vid']) || empty($_GET['vid']) ) {
        echo "<font style='color:#fff;font-size:23px; text-align: center;padding:200px;'><br>没有任何数据</font>" ;
    } else {
        $vid = base64_decode(trim($_GET['vid'])) ;
        $sql = "select * from tb_people where id='$vid'" ;
        $result = $mysqli->query($sql) ;
        $row = $result->fetch_assoc() ;
        ?>
        <div class="votes_every">
            <center>
                <h1><?= $row['title'] ; ?></h1>
                <p>&nbsp;</p>
                <img src="./admin/content/uploads/<?php
                $pic = $row['picture'] ;
                if ( empty($pic) ) {
                    echo "nothing.gif" ;
                } else {
                    echo $pic ;
                }
                ?>" style="padding: 6px;min-width: 200px;max-width: 950px;min-height: 360px;max-height: 700px;"><br>
            </center>
            <br>
            <p>
                <?= $row['info'] ; ?>
            </p>
        </div>


        <!--   评论区   -->



        <!--   发表区      -->



        <?php
    }
    ?>

</div>


<?php
include './footer.php' ;
?>
