<?php
include_once('xss-showcase-common.php');
$user=preg_replace('/</','&lt;',$_GET[user]);
$user=preg_replace('/>/','&gt;',$user);

$pass=preg_replace('/</','&lt;',$_GET[pass]);
$pass=preg_replace('/>/','&gt;',$pass);
printheader();
?>
XSS showcase 004 イベントハンドラ<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo $user; ?>"><br>
password<input name="pass" type="password" value="<?php echo $pass; ?>"><br>
<input type="submit" value="login">
</form>
<?php if(filter_input(INPUT_GET, 'user') && filter_input(INPUT_GET, 'pass'))echo "The username or password is incorrect...";?><br>
</div>
<?php
printfooter();
?>
