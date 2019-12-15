<?php
include_once('xss-showcase-common.php');
printheader();
?>
DOM XSS showcase 104 window.open<br>

<div class="box">
<form method="get" action="">login<br>
username<input name="user" type="text" value=""><br>
password<input name="pass" type="password" value=""><br>
<input type="submit" value="login">
</form>
<?php if($_GET["user"] && $_GET["pass"])echo "The username or password is incorrect...";?><br>
<br>
</div>
<div id="xss">
<a onclick=openxss()>click</a>
<div>
<br>
<script src="./xss-showcase-104.js"></script>

<?php
printfooter();
?>
