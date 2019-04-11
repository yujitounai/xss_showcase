<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 003 長さ制限<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" maxlength="10" type="text" value="<?php echo filter_input(INPUT_GET, 'user'); ?>"><br>
password<input name="pass" maxlength="10" type="password" value="<?php echo filter_input(INPUT_GET, 'pass'); ?>"><br>
<input type="submit" value="login">
</form>
<?php if(filter_input(INPUT_GET, 'user') && filter_input(INPUT_GET, 'pass'))echo "The username or password is incorrect...";?><br>
</div>
<?php
printfooter();
?>
