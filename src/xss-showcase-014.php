<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 014 サニタイズ<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<?php
$patterns = array();
$patterns[0] = '/<[ ()`\'"=\/a-zA-Z0-9]+?>/';
$replacements = array();
$replacements[0] = '';
echo preg_replace($patterns, $replacements, filter_input(INPUT_GET, 'word'));
?>
<?php
printfooter();
?>
