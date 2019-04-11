<?php
include_once('xss-showcase-common.php');
$word=preg_replace('/<script>/i','',$_GET[word]);
$word=preg_replace('/<\/script>/i','',$word);
printheader();
?>

XSS showcase 007 SCRIPTタグ制限<br>
<div class="box">

<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
<?php
  echo "<h1>".$word."</h1>";
 ?>
</div>
<?php
printfooter();
?>
