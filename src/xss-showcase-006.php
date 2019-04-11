<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 006 リンク<br>
<div class="box">

<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>

<h1><a href="<?php echo htmlspecialchars(filter_input(INPUT_GET, 'word'),ENT_QUOTES); ?>">link</a></h1>

</div>
<?php
printfooter();
if($_GET[word])dattodb();
?>
