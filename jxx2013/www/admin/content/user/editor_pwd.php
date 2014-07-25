<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>修改密码</title>
        <link type="text/css" rel="stylesheet" href="../css/public.css">
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

        </style>
        <SCRIPT language=JavaScript>

            // 表单提交客户端检测
            function doSubmit() {
                if (document.myform.pwd.value == "") {
                    alert("密码不能为空！");
                    return false;
                }
                if (document.myform.repwd.value == "") {
                    alert("确认码不能为空！");
                    return false;
                }
                if (document.myform.repwd.value != document.myform.pwd.value) {
                    alert("输入的两次密码不相同！");
                    return false;
                }

            }
        </SCRIPT>
    </head>
    <body style="background-color: #273362">
        <?php
        // 修改密码：用户名显示（不可改），密码重置
        require_once '../../conn/conn.php';
        require_once '../../conn/session.php';
        @session_start();
        $name = $_SESSION['admin'];
        $sql = "select * from tb_admin where user='$name'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <div class="ustop">
            <center>
                <form action="./editor_pwd_ok.php" method="post" name="myform">
                    <table>

                        <tr>
                            <td class="tdr">新 密 码：</td><td><input type="password" name="pwd"  class="pt"></td>
                        </tr>
                        <tr>
                            <td class="tdr">确认密码：</td><td><input type="password" name="repwd"  class="pt"></td>
                        </tr>
                        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="提交" class="tdsub" onclick="return doSubmit()" name="submit"></td></tr>
                    </table>
                </form>
            </center>
        </div>
    </body>
</html>
