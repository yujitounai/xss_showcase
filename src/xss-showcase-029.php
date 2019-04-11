<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 029 prettyphoto 1<br>
<div class="box">
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js'></script>

<script src='jquery.prettyPhoto.3.1.2.js'></script>
<script type="text/javascript">
// JavaScript Document
$(document).ready(function(){
	//aタグ、areaタグのrelにprettyPhoto記述があった場合、クリックで起動
	$("a[rel^='prettyPhoto'], area[rel^='prettyPhoto']").prettyPhoto({
		theme:'light_square',
		social_tools:false
	});
});
</script>

<form method="get" action="">login<br>
username<input name="user" type="text" value=""><br>
password<input name="pass" type="password" value=""><br>
<input type="submit" value="login">
</form>
<?php if(filter_input(INPUT_GET, 'user') && filter_input(INPUT_GET, 'pass'))echo "The username or password is incorrect...";?><br>

</div>
<?php
printfooter();
?>
