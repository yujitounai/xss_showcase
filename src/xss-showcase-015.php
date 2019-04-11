<?php
include_once('xss-showcase-common.php');
printheader();
?>
<script src="https://code.jquery.com/jquery-1.4.2.js"></script>
<script src="xss-showcase-015.js"></script>

XSS showcase 015 古いjquery<br>
<div class="box">

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
