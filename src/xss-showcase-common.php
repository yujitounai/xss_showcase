<?php

function printheader(){
print <<< HEADER_END
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="xss-showcase.css" type="text/css" />
<title>XSS Showcase</title>
<script src="hook.js"></script>
</head>
<body>
HEADER_END;
}

function printfooter(){
print <<< FOOTER_END
<a href="/">bogus.jp</a>/<a href="./">index</a>/<a href="https://twitter.com/#!/yousukezan" target="_blank">twitter(@yousukezan)</a>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</body>
</html>
FOOTER_END;
}
?>
