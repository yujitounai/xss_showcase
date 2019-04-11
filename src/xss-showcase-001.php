<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 001 基本<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<?php
echo "<h1>".filter_input(INPUT_GET, 'word')."</h1>";
?>
<?php
printfooter();
?>
