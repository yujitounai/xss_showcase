<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 019 イベントハンドラ内<br>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value="<?php echo htmlspecialchars(filter_input(INPUT_GET, 'user'), ENT_QUOTES); ?>"><br>
password<input name="pass" type="password" value="<?php echo htmlspecialchars(filter_input(INPUT_GET, 'pass'), ENT_QUOTES); ?>"><br>
<input type="submit" value="login"><br>
<a href="#" onclick="alert('こんにちは <?php echo htmlspecialchars(filter_input(INPUT_GET, 'user'), ENT_QUOTES); ?>さん')">ユーザー情報</a>

</form>


</div>
<?php
printfooter();
?>
