<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 013 大文字<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<?php
	$word=strtoupper(filter_input(INPUT_GET, 'word'));
 	echo "<h1>".$word."</h1>";
 ?>
<?php
printfooter();
?>
