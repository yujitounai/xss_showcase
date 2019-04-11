<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 005 POSTリクエスト<br>
<div class="box">
<form method="post" action="">search
<input name="word" type="text" maxlength="10">
<input type="submit">
</form>
</div>
<?php
  echo "<h1>".filter_input(INPUT_POST, 'word')."</h1>";
?>

<?php
printfooter();
?>
