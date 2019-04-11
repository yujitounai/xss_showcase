<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 016 alert()させたくない<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<?php
$patterns = array();
$patterns[0] = '/alert/i';
$patterns[1] = '/<script/i';
$patterns[2] = '/src/i';
$patterns[3] = '/data/i';
$patterns[4] = '/<svg/i';
$replacements = array();
$replacements[0] = '';
echo preg_replace($patterns, $replacements, filter_input(INPUT_GET, 'word'));

?>
<?php
printfooter();
?>
