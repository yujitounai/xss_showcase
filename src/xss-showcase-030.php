<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 030 Edge<br>
<?php
$src=htmlspecialchars(filter_input(INPUT_GET, 'src'), ENT_QUOTES);
if ((strpos($src,"//" )!==false)
	||(strpos($src,"\\\\" )!==false)
	||(strpos($src,"\\/" )!==false)
	||(strpos($src,"/\\" )!==false)
	)$src="";
?>
<div class="box">
<form method="get" action="">src
<input name="src" type="text" value="<?php echo $src; ?>">
<input type="submit">
</form>
</div>
<script src="<?php echo mb_substr($src,0,20); ?>"></script>

<?php
printfooter();
?>
