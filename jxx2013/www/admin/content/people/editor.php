<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>更新人物</title>
        <style>

            .tdr{
                text-align: right;
                height: 42px;
                font-size: 22px;
            }
            .tdl{
                text-align: left;
            }
            .pt{
                height: 23px;
                font-size: 18px;
                background-color: #f2f0ed;
            }
            .tdsub{
                font-size: 23px;
                text-align: center;
                height: 36px;
                width: 90px;
            }
            .ustop{
                margin-top: 10px;
                background-color: #FFF;
                height: 560px;
                padding-top:20px;
            }
        </style>
        <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>

        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
            });
        </script>
        <SCRIPT language=JavaScript>

            // 表单提交客户端检测
            function doSubmit() {
                if (document.myform.name.value == "") {
                    alert("姓名不能为空！");
                    return false;
                }
                if (document.myform.sex.value == "") {
                    alert("性别不能为空！");
                    return false;
                }
                if (document.myform.picture0.value == "") {
                    alert("图片不能为空！");
                    return false;
                }
                if (document.myform.title.value == "") {
                    alert("标题不能为空！");
                    return false;
                }
                if (document.myform.info.value == "") {
                    alert("简介不能为空！");
                    return false;
                }

            }
        </SCRIPT>

    </head>
    <body style="background-color: #273362">

        <div class="ustop">
            <center>
                <?php
                require_once '../../conn/conn.php';
                require_once '../../conn/session.php';
                if (!empty($_GET['edid'])) {
                    @session_start();
                    $edid = $_GET['edid'];
                    $_SESSION['edid'] = $edid;
                    $sql = "select * from tb_people  where id ='$edid'";

                    $result = $mysqli->query($sql);
                    $row = $result->fetch_assoc();
                    ?>
                    <form action="./editor_ok.php" method="post" name="myform" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td class="tdr">姓 名：</td><td class="tdl"><input type="text" name="name" class="pt" value="<?= $row['name'] ?>"></td>
                            </tr>
                            <tr>
                                <td class="tdr">性 别：</td><td class="tdl"><input type="text" name="sex"  class="pt" value="<?= $row['sex'] ?>"></td>
                            </tr>
                            <tr>
                                <td class="tdr">图 片：</td><td class="tdl"><input type="file" name="picture"  class="pt">&nbsp;<img src="../uploads/<?= $row['picture']; ?>" style="width: 80px;height: 40px;"/><?= $row['picture'] ?></td>
                            </tr>
                            <tr>
                                <td class="tdr">标 题：</td><td class="tdl"><input type="text" name="title"  class="pt" value="<?= $row['title'] ?>"></td>
                            </tr>
                            <tr>
                                <td class="tdr">简 介：</td>
                                <td class="tdl"><textarea  id ="editor_id" name="info" style="font-size: 18px;width: 700px;height:300px; "><?= $row['info'] ?></textarea></td>
                            </tr>
                            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="添加" class="tdsub" onclick="return doSubmit()" name="submit"></td></tr>
                        </table>
                    </form>
                    <?php
                } else {
                    echo "<font style='color:red'>禁止非法操作.....</font>";
                }
                ?>
            </center>
        </div>

    </body>
</html>
