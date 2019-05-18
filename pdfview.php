<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
<style>
body{
margin:0;
}
#divelement{
  overflow: hidden;
  position: relative;
}
#divelement iframe{
    border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>
<noscript>
   This page needs JavaScript activated to work. 
   <style>div { display:none; }</style>
 </noscript>
 <script>
   document.onkeydown = function (event) {
     var x = event.charCode || event.keyCode;
     if(x==37 || x==38 || x== 39 || x==40)
     return true;
    else
    return false;
}
 </script>
 
<body oncontextmenu="return false;">
<div id="divelement"></div>


<iframe src="https://debjoy.000webhostapp.com/others/web/viewer.php<?php
if(isset($_POST["file"]))
{
        $files=$_POST["file"];
        
        echo "?file=$files";
}
else
echo "";
?>" style="position: absolute; height: 100%; border: none;width:100%;" >
  <p>Your browser does not support iframes.</p>
</iframe>
</div>
<?php
goto a;
?>
</body>
<?php 
a:
    ?>
</html>
