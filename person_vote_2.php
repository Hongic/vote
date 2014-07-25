<!--    投票的人物       -->
<div class="clear">
    <img src="./images/12345de.jpg" width="980" height="33" style="-webkit-border-radius: 5px;-moz-border-radius: 5px; border-radius:6px;position:relative;behavior:url(pie.htc);">
</div>

<div id="masonry" class="container-fluid">

    <?php
    include './admin/conn/conn.php' ;
    $sql = "select * from tb_people" ;
    $result = $mysqli->query($sql) ;
    $row = $result->fetch_assoc() ;

    while ( $row = $result->fetch_assoc() ) {             //循环输出投票人信息
        ?>


        <div class="box">

            <a href="./every.php?vid=<?php echo base64_encode($row['id']) ; ?>">
                <img src="./admin/content/uploads/<?php echo $row['picture'] ?>" border="1" class="box-img">
            </a>
            <center>
                <span><?php echo $row['name'] ; ?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span><?php echo $row['votes'] ; ?>&nbsp;&nbsp;票</span>
                <br>
                <div class="toupiao">

                    <label>
                        <a href="index_ok.php?vote=<?php echo base64_encode($row['id']) ; ?>" class="votes_button">
                            投 票
                        </a>
                    </label>

                </div> 
            </center>
            <!--input传值-->


        </div>
    <?php } ?>

</div>
<script>
    $(function() {
        var $container = $('#masonry');
        $container.imagesLoaded(function() {
            $container.masonry({
                itemSelector: '.box',
                gutterWidth: 10,
                isAnimated: true,
            });
        });
    });
</script>

<!--   结束        -->