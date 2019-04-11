<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 018 iframe<br>
<script language="javascript" type="text/javascript">
if (self != top) {
	if (document.images)
		top.location.replace('<?php echo htmlspecialchars($_GET['redir']);?>');
	else
		top.location.href = '<?php echo htmlspecialchars($_GET['redir']);?>';
	}
</script>
<div class="box">
<form method="get" action="">search
<input name="word" type="text" value="<?php echo htmlspecialchars(filter_input(INPUT_GET, 'word'),ENT_QUOTES); ?>">
<input type="submit">
</form>
</div>
<?php
printfooter();
?>
