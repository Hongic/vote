<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD id=Head1>
        <TITLE>TOP</TITLE>
        <META http-equiv=Content-Type content="text/html; charset=utf-8">
        <STYLE type=text/css> 
            *{
                FONT-SIZE: 18px; COLOR: white
            }
            #logo {
                COLOR: white
            }
            #logo A {
                COLOR: white
            }
            FORM {
                MARGIN: 0px
            }
        </STYLE>
        <SCRIPT src="Top.files/Clock.js" type=text/javascript></SCRIPT>
        <META content="MSHTML 6.00.2900.5848" name=GENERATOR>
    </HEAD>
    <BODY 
        style="BACKGROUND-IMAGE: url(../images/bg.gif); MARGIN: 0px; BACKGROUND-REPEAT: repeat-x">
        <form id="form1">
            <DIV id=logo 
                 style="BACKGROUND-IMAGE: url(../images/logo.png); BACKGROUND-REPEAT: no-repeat">
                <DIV 
                    style="PADDING-RIGHT: 50px; BACKGROUND-POSITION: right 50%; DISPLAY: block; PADDING-LEFT: 0px; BACKGROUND-IMAGE: url(../images/bg_banner_menu.gif); PADDING-BOTTOM: 0px; PADDING-TOP: 3px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 30px; TEXT-ALIGN: right">
                    <A id=HyperLink2   href="../../../index.php" target="_blank">前台首页</A>
                    <IMG  src="Top.files/menu_seprator.gif" align=absMiddle>
                    <A id=HyperLink3 href="../../login/logout.php" target="_top">退出系统</A> </DIV>
                <DIV style="DISPLAY: block; HEIGHT: 54px"></DIV>
                <DIV 
                    style="BACKGROUND-IMAGE: url(../images/bg_nav.gif); BACKGROUND-REPEAT: repeat-x; HEIGHT: 30px">
                    <TABLE cellSpacing=0 cellPadding=0 width="100%">
                        <TBODY>
                            <TR>
                                <TD>
                                    <DIV>
                                        <IMG src="Top.files/nav_pre.gif" align=absMiddle> 
                                        欢迎  
                                        <?php
                                        session_start();
                                        echo $_SESSION['admin'];
                                        ?> 
                                        光临 
                                    </DIV>
                                </TD>
                                <TD align=right width="70%">
                                    <SPAN style="PADDING-RIGHT: 50px">
                                        <A  href="javascript:history.go(-1);">
                                            <IMG src="Top.files/nav_back.gif"  align=absMiddle border=0>后退</A>
                                        <A href="javascript:history.go(1);">
                                            <IMG  src="Top.files/nav_forward.gif" align=absMiddle border=0>前进</A> 
                                        <A  href="../../login/index.html" target=_top>
                                            <IMG  src="Top.files/nav_changePassword.gif" align=absMiddle border=0>重新登录</A> 
                                        <A href="../user/editor_pwd.php" target=mainFrame><IMG src="Top.files/nav_resetPassword.gif"  align=absMiddle border=0>修改密码</A>
                                    </SPAN>
                                </TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                </DIV>
            </DIV>
            <SCRIPT type=text/javascript>
                var clock = new Clock();
                clock.display(document.getElementById("clock"));
            </SCRIPT>
        </form>
    </BODY>
</HTML>
