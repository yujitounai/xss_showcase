<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 017 外部スクリプト<br>

<?php
$src=htmlspecialchars(filter_input(INPUT_GET, 'src'),ENT_QUOTES);
?>
<div class="box">
<form method="get" action="">js
<input name="src" type="text" value="<?php echo $src; ?>">
<input type="submit">
</form>
</div>

<script src="<?php echo mb_substr($src,0,6); ?>"></script>

<?php
printfooter();
?>
