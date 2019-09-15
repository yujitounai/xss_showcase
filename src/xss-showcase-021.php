<?php
include_once('xss-showcase-common.php');
printheader();
$src=filter_input(INPUT_GET, 'src');
?>
XSS showcase 021 object<br>
<div class="box">

<form method="get" action="">object
<input name="src" type="text" value="<?php echo $src; ?>">
<input type="submit">
</form>

<object data="<?php echo htmlspecialchars($src, ENT_QUOTES); ?>"></object>
</div>
<?php
printfooter();
?>
