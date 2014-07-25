<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>添加人物</title>
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

                background-color: #FFF;
                min-height: 300px;

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
                if (document.myform.face.value == "") {
                    alert("简介不能为空！");
                    return false;
                }
                if (document.myform.picture.value == "") {
                    alert("图片不能为空！");
                    return false;
                }
                if (document.myform.title.value == "") {
                    alert("标题不能为空！");
                    return false;
                }
                if (document.myform.xibie.value == "") {
                    alert("系院不能为空！");
                    return false;
                }
                if (document.myform.class.value == "") {
                    alert("班别不能为空！");
                    return false;
                }
                if (document.myform.info0.value == "") {
                    alert("简介不能为空！");
                    return false;
                }

            }
        </SCRIPT>

    </head>
    <body style="background-color: #273362">
        <?php require_once '../../conn/session.php' ; ?>
        <div class="ustop">
            <center>
                <form action="./add_ok.php" method="post" name="myform" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td class="tdr">姓 名：</td><td class="tdl"><input type="text" name="name" class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">性 别：</td><td class="tdl"><input type="text" name="sex"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">政治面貌：</td><td class="tdl"><input type="text" name="face"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">系(院)：</td><td class="tdl"><input type="text" name="xibie"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">班别：</td><td class="tdl"><input type="text" name="class"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">图 片：</td><td class="tdl"><input type="file" name="picture"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">标 题：</td><td class="tdl"><input type="text" name="title"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">简 介：</td>
                            <td><textarea  id ="editor_id" name="info" style="font-size: 18px;width: 700px;height:300px; "></textarea></td>
                        </tr>
                        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="提交" class="tdsub" onclick="return doSubmit()" name="submit"></td></tr>
                    </table>
                </form>
            </center>
        </div>

    </body>
</html>
