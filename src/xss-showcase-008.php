<?php
include_once('xss-showcase-common.php');
$user=htmlspecialchars(filter_input(INPUT_GET, 'user'));
$pass=htmlspecialchars(filter_input(INPUT_GET, 'pass'));

printheader();
?>

<script>
function hello(){
document.write ('<?php echo $user; ?>'+"さん");
}
</script>
XSS showcase 008 JavaScript書き出し<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo $user; ?>"><br>
password<input name="pass" type="password" value="<?php echo $pass; ?>"><br>
<input type="submit" value="ログイン">
</form>
<?php
if(filter_input(INPUT_GET, 'user')){
  echo "<script>hello();</script><br>こんにちは。";
}
?>
</div>
<?php
printfooter();
?>
