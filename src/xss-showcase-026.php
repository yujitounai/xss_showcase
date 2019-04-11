<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 026 hidden 2<br>
<div class="box">
<form method='get' action=''>search
<input name='word' type='text'>
<input name='country' type='hidden' value='<?php echo htmlspecialchars(filter_input(INPUT_GET, 'country')); ?>'>
<input type="submit">
</form>
</div>
<h1>
<?php
echo htmlspecialchars($_GET['word']);
?>
</h1>
<?php
printfooter();
?>
