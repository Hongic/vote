<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>添加用户</title>
        <style>

            .tdr{
                text-align: right;
                height: 60px;
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
                height: 460px;
                padding-top:60px;
            }
        </style>

    </head>
    <body style="background-color: #273362">
        <SCRIPT language=JavaScript>

            // 表单提交客户端检测
            function doSubmit() {
                if (document.myform.user.value == "") {
                    alert("用户名不能为空！");
                    return false;
                }
                if (document.myform.pwd.value == "") {
                    alert("密码不能为空！");
                    return false;
                }
                if (document.myform.pwd.value != document.myform.repwd.value) {
                    alert("两次输入的密码不同！");
                    return false;
                }

            }
        </SCRIPT>
        <div class="ustop">
            <?php require_once '../../conn/session.php';?>
            <center>
                <form action="add_ok.php" method="post" name="myform">
                    <table>
                        <tr>
                            <td class="tdr">用户名：</td><td><input type="text" name="user" class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">密    码：</td><td><input type="password" name="pwd"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">确认密码：</td><td><input type="password" name="repwd"  class="pt"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;"><input type="submit" value="添加" class="tdsub" onclick="return doSubmit()" name="submit"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>

    </body>
</html>
