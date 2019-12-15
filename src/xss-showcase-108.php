<script>
function go() {
window.opener.postMessage((document.getElementById('secret').innerText.slice(-32)),'*')
}
setTimeout(go, 500)</script>
<code id='secret'>Secret: d5seccda68754fdfd941159539e0dacd</code>
</div>