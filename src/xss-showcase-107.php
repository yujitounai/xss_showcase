<?php
include_once('xss-showcase-common.php');
printheader();
?>
DOM XSS showcase 107 addEventListener message<br>

<div class="box">
<div id="message">HelloWorld</div>
 
<script>
window.addEventListener('message',writeMessage,false);
function writeMessage(event){
    document.getElementById("message").innerHTML = event.data;
}
</script>
</div>

<?php
printfooter();
?>
