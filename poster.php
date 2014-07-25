<div id="img" style="position: absolute; left: 311; top: 815;visibility :hidden;float: left;z-index: 999;hight:900px;" onmouseover="clearInterval(interval)" onmouseout="interval = setInterval('changePos()', delay)" align="right">
    <a href="index.php" target="_blank">
        <img border="0" src="images/poster.jpg" onload="return imgzoom(this, 600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
    <font style="CURSOR:hand;color:#000;font-weight:bold;position: relative;top: -63px;left: -40px;" onclick="clearInterval(interval);
        img.style.visibility = 'hidden'">关闭
    </font>
</div>
<script language=javascript>
    var xPos = 20;//from alixixi.com
    var yPos = document.body.clientHeight;
    var step = 1;
    var delay = 30;
    var height = 0;
    var Hoffset = 100;
    var Woffset = 100;
    var yon = 0;
    var xon = 0;
    var pause = true;
    var interval;
    img.style.top = yPos;
    function changePos() {
        width = document.body.clientWidth;
        height = document.body.clientHeight;
        Hoffset = img.offsetHeight;
        Woffset = img.offsetWidth;
        img.style.left = xPos + document.body.scrollLeft;
        img.style.top = yPos + document.body.scrollTop;
        if (yon) {
            yPos = yPos + step;
        }
        else {
            yPos = yPos - step;
        }
        if (yPos < 0) {
            yon = 1;
            yPos = 0;
        }
        if (yPos >= (height - Hoffset)) {
            yon = 0;
            yPos = (height - Hoffset);
        }
        if (xon) {
            xPos = xPos + step;
        }
        else {
            xPos = xPos - step;
        }
        if (xPos < 0) {
            xon = 1;
            xPos = 0;
        }
        if (xPos >= (width - Woffset)) {
            xon = 0;
            xPos = (width - Woffset);
        }
    }
    function start() {
        img.style.visibility = "visible";
        interval = setInterval('changePos()', delay);
    }
    start();
</script>
