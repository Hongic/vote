<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="美女图片 - WWW.MN606.COM" />
        <title>Masonry 瀑布流效果 - 美女图片</title>
        <style type="text/css">
            body{background:#eee;font-size:12px;font-family:"宋体";color:#333p;}
            body,html,p,ul,li,dl,dt,dd,ol,h1,h2,h3,h4,h5{margin:0;padding:0;}
            ul li{list-style:none;}
            a{text-decoration: none;background-color: none}
            a:hover{text-decoration: none;}
            #page{ width:980px;  margin:0 auto; }
            #main{background:#FFF; float:left; width:980px;}
            .item{  border:1px solid #EEE;float: left;display: inline;padding: 10px;margin: 10px 0px 0 14px;position: relative;}
            .item img{border: none;width: 206px;}
        </style>

    </head>
    <body>
        <div id="page">
            <div id="main"> 
                <?php
                include './admin/conn/conn.php' ;
                $sql = "select * from tb_people '" ;
                $result = $mysqli->query($sql) ;
                $row = $result->fetch_assoc() ;
                while ( $row = $result->fetch_assoc() ) {             //循环输出投票人信息
                    ?>
                    <div class="item">
                        <a href="./every.php?vid=<?php echo base64_encode($row['id']) ; ?>">
                            <img src="./admin/content/uploads/<?php echo $row['picture'] ?>"/>
                        </a>
                        <center>
                            <span>姓名：<?php echo $row['name'] ; ?></span>
                            <span>票数:<?php echo $row['votes'] ; ?></span>
                            <div class="toupiao">
                                <li><label>
                                        <input type="checkbox" name="r" value="<?php echo $row['id'] ; ?>" />&nbsp;投票选择</label></li></div>  
                        </center>
                    </div>

                <?php } ?>
            </div>
        </div>
    </body>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.masonry.min.js"></script>
    <script>
        $(function() {
            var $container = $('#main');
            $container.imagesLoaded(function() {
                $container.masonry({
                    itemSelector: '.item',
                });
            });
        });
    </script>
</html>
