<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS sample 010 ヘボいWAF １<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text">
<input type="submit">
</form>
</div>
<?php
$word=filter_input(INPUT_GET, 'word');
if((preg_match('/<script/i',$word))
||(preg_match('/src=/i',$word))
||(preg_match('/onerror=/i',$word))
||(preg_match('/onload=/i',$word))
||(preg_match('/onmouseover=/i',$word))
||(preg_match('/onmousemove=/i',$word))
||(preg_match('/onmouseout=/i',$word))
||(preg_match('/onmousedown=/i',$word))
||(preg_match('/onfocus=/i',$word))
||(preg_match('/action=/i',$word))
||(preg_match('/javascript/i',$word))
||(preg_match('/http-equiv=/i',$word))
){
echo "攻撃を検知したのでバリデーションしました";
}
else{
echo $word;
}
?>
<br><br>
<?php
printfooter();
?>
