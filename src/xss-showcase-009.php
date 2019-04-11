<?php
include_once('xss-showcase-common.php');
printheader();
?>

XSS showcase 009 基本的なDOM based XSS<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<script>
document.write('<a href="'+location.href+'">link</a>');
</script>
<br><br>

<?php
printfooter();
?>
