<?php
include_once('xss-showcase-common.php');
printheader();
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.1.js"></script>
<script type="text/javascript" src="yuga/thickbox-compressed.js"></script>
<script type="text/javascript" src="yuga/yuga.js" charset="utf-8"></script>
XSS showcase 027 yuga.js<br>

<div class="box">
<form method="get" action="">login<br>
username<input name="user" type="text" value=""><br>
password<input name="pass" type="password" value=""><br>
<input type="submit" value="login">
</form>
<?php if($_GET[user] && $_GET[pass])echo "The username or password is incorrect...";?><br>
<br>
</div>
<?php
printfooter();
?>
