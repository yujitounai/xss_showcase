<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 011 短い<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo mb_substr(filter_input(INPUT_GET, 'user'),0,20); ?>"><br>
password<input name="pass" type="password" value="<?php echo mb_substr(filter_input(INPUT_GET, 'pass'),0,25); ?>"><br>
<input type="submit" value="login">
</form>
<?php if(filter_input(INPUT_GET, 'user') && filter_input(INPUT_GET, 'pass'))echo "The username or password is incorrect...";?><br>
<br>
</div>
<?php
printfooter();
?>
