<!--    投票的人物       -->
<div class="clear">
    <img src="./images/12345de.jpg" width="980" height="33" style="-webkit-border-radius: 5px;-moz-border-radius: 5px; border-radius:6px;position:relative;behavior:url(pie.htc);">
</div>
<div class="box-list">
    <?php
    include './admin/conn/conn.php' ;
    $sql = "select * from tb_people" ;
    $result = $mysqli->query($sql) ;
    $count = $mysqli->affected_rows ;
    for ( $i = 1 ; $i <= $count ; $i++ ) {
        $row1 = $result->fetch_assoc() ;
        ?>
        <a href="./every.php?vid=<?php echo base64_encode($row1['id']) ; ?>">
            <?php echo $row1['name'] ; ?>
        </a>
        <?php
        if ( $i % 10 == 0 ) {
            echo "<br>" ;
        }
    }
    ?>
</div>
<script>
    $(function() {
        var $container = $('#masonry');
        $container.imagesLoaded(function() {
            $container.masonry({
                itemSelector: '.box',
                gutterWidth: 30,
                isAnimated: true,
            });
        });
    });
</script>

<div id="masonry" class="container-fluid">
    <?php
    include './admin/conn/conn.php' ;
    $sql1 = "select * from tb_people order by name asc" ;
    $result1 = $mysqli->query($sql1) ;
    // $row = $result1->fetch_assoc() ;

    while ( $row = $result1->fetch_assoc() ) {             //循环输出投票人信息
        ?>

        <div class="box">

            <a href="./every.php?vid=<?php echo base64_encode($row['id']) ; ?>">
                <img src="./admin/content/uploads/<?php echo $row['picture'] ?>" border="1" class="box-img">
            </a>

            <div class="box-pe">
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
            </div>


        </div>
    <?php } ?>
</div>


<!--   结束        -->