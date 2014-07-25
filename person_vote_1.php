
<!--    投票的人物       -->
<div class="clear"><img src="./images/12345de.jpg" width="980" height="33"></div>
<div id="ccenter">
    <div id="ccmiddle">

        <?php
        include './admin/conn/conn.php' ;
        $sql = "select * from tb_people" ;
        $result = $mysqli->query($sql) ;
        $row = $result->fetch_assoc() ;
        $i = $row['id'] ;                         //指定投票项
        ?>

        <?php
        $sql = "select * from tb_people" ;
        $result = $mysqli->query($sql) ;
        while ( $row = $result->fetch_assoc() ) {             //循环输出投票人信息
            $i++ ;
            ?>
            <div id="box">

                <center>
                    <a href="./every.php?vid=<?php echo base64_encode($row['id']) ; ?>"><img src="./admin/content/uploads/<?php echo $row['picture'] ?>" border="0" class="imgs"></a>
                    <span>姓名：<?php echo $row['name'] ; ?></span>
                    <span>票数:<?php echo $row['votes'] ; ?></span>
                    <div class="toupiao">
                        <li><label>
                                <input type="checkbox" name=r value="<?php echo $row['id'] ; ?>" />&nbsp;投票选择</label></li></div>  <!--input传值-->
                </center></div><?php } ?></div>
    <center>
        <div id="tpbt">
            <br>
            <input name="tpsubmit" id="tpsubmit" type="submit" value="投 票" title="一次只能投一票哦" style="font-size:16px; width:80px; height:30px;">&nbsp;&nbsp;&nbsp;<input name="resetbont" id="resetbont" type="reset" value="重 选" style="font-size:16px; width:80px; height:30px;">
            <p>

        </div>
    </center>
</div>
<!--   结束        -->