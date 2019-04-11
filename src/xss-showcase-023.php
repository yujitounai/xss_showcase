<?php
include_once('xss-showcase-common.php');
printheader();
?>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.js"></script>
XSS showcase 023 angular 1<br>
<div class="box">
<form method="get" action="">search
<input name="word" type="text" value="">
<input type="submit">
</form>
</div>
<h1 ng-app><?php echo htmlspecialchars(filter_input(INPUT_GET, 'word'),ENT_QUOTES); ?></h1>

<?php
printfooter();
?>
