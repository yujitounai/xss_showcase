<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="xss-showcase.css" type="text/css" />
<title>XSS Showcase</title>
<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>

<body>
<div id="home" data-role="page">
<div data-role="header">
<h1>ホーム</h1>
</div>
<div data-role="content">
<p>XSS showcase 022 jQuery mobile</p>
<a data-role="button" data-transition="fade" href="#next">次へ</a>
</div>
</div>
<div id="next" data-role="page">
<div data-role="header">
<h1>次のページ</h1>
</div>
<div data-role="content">
<p><a href="/">bogus.jp</a>/<a href="./">index</a>/<a href="https://twitter.com/#!/yousukezan" target="_blank">twitter(@yousukezan)</a></p>
<a data-role="button" data-transition="fade" href="#home">戻る</a>
</div>
</div>
</html>
