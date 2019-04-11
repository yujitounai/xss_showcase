<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 012 hiddenフィールド 1<br>
<div class="box">
<form method='get' action=''>search
<input name='word' type='text'>
<input name='country' value='<?php echo htmlspecialchars(filter_input(INPUT_GET, 'country')) ?>' type='hidden'>
<input type="submit">
</form>
</div>
<h1>
<?php
echo htmlspecialchars(filter_input(INPUT_GET, 'word'));
?>
</h1>
<?php
printfooter();
?>
