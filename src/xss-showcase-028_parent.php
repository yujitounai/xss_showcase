<?php
include_once('xsssample_common.php');
printheader();
?>
XSS showcase 028 UAE<br>

<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo mb_substr($_GET[user],0,20); ?>"><br>
password<input name="pass" type="password" value="<?php echo mb_substr($_GET[pass],0,25); ?>"><br>
<input type="submit" value="login">
</form>
<?php if($_GET[user] && $_GET[pass])echo "The username or password is incorrect...";?><br>
<a href="#" onclick=window.open('xss-showcase-028.php?CropH=300&CropW=500&sRedirectTo=//bogus.jp&sReason=marketing_box&imgurl=//bogus.jp/img1.jpg')>clip</a>

</div>
<?php
printfooter();
if($_GET[user])dattodb();
?>
