<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 025 YUI<br>
<script src ="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
<script>
YUI().use("panel", function (Y) {
    var d = new Y.Panel({
        bodyContent: location.hash,
        render     : '.example',
        visible    : true,//なくてもいい
    });
});
</script>
<div class="box">

<form method="get" action="">login<br>
username<input name="user" type="text" value=""><br>
password<input name="pass" type="password" value=""><br>
<input type="submit" value="login">
</form>
<?php if($_GET[user] && $_GET[pass])echo "The username or password is incorrect...";?><br>
</div>
<?php
printfooter();
?>
