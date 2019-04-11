var _alert = alert;
window.alert = function(s) {
	if(s=="xss"){
		_alert("Congrats!")
		console.log("Congrats!");
		fetch('http://bogus.jp/access.php?'+location)
	}
  _alert(s);
}
