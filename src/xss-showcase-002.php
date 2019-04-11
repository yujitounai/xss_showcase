<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 002 区切り文字<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo filter_input(INPUT_GET, 'user'); ?>"><br>
password<input name="pass" type="password" value=""><br>
<input type="submit" value="login">
</form>
<?php if(filter_input(INPUT_GET, 'user') && filter_input(INPUT_GET, 'pass'))echo "The username or password is incorrect...";?><br>

</div>

<?php
printfooter();
?>
