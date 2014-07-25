<?php
/*
 *  候选人表单列表：序号、姓名、性别、系院、班别
 */
include_once './header.php' ;
include_once './admin/conn/conn.php' ;
include_once './admin/conn/page.class.php' ;
?>
<center>
    <div class="list">
        <br>
        <h2>2012河池学院大学生年度人物候选人名单</h2>
        <h4>（共20名，排名不分先后顺序）</h4>
        <br>
        <table>
            <tr>
                <th class="list-tb-th">序号</th>
                <th class="list-tb-th">候选人姓名</th>
                <th class="list-tb-th">性别</th>
                 <th class="list-tb-th">政治面貌</th>
                <th class="list-tb-th">系（院）</th>
                <th class="list-tb-th">班别</th>
            </tr>
            <?php
            /*
             *  候选人按 order_id 排 升序
             */
            $listSQL = "SELECT id,face,name,sex,xibie,class FROM tb_people order by order_id asc" ;
            $listResult = $mysqli->query($listSQL) ;
            $count = $mysqli->affected_rows ;
            for ( $i = 1 ; $i <= $count ; $i++ ) {
                $lisRow = $listResult->fetch_assoc() ;
                ?>
                <tr>
                    <td><?php echo $i ; ?></td>
                    <td><?= $lisRow['name'] ; ?></td>
                    <td><?= $lisRow['sex'] ; ?></td>
                    <td><?= $lisRow['face'] ; ?></td>
                    <td><?= $lisRow['xibie'] ; ?></td>
                    <td><?= $lisRow['class'] ; ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <p>说明：经基层民主推荐和学院评委会认真评审，从48名推荐对象中确定出了本表所列20名年度人物候选人。</p>
        <br>
    </div>
</center>
<?php
include_once './footer.php' ;
?>