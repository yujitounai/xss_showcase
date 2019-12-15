<?php
include_once('xss-showcase-common.php');
printheader();
?>
DOM XSS showcase 200 vue.js<br>

<div class="box">
<form action="">
  <label>
    <input
      type="text" name="v" value=""
    />
    <button>Submit</button>
  </label>
</form>

<div id="app">
  <div>
    <?= htmlspecialchars($_GET['v'], ENT_QUOTES, 'utf-8') ?>
  </div>
</div>
</div>

<script>
  window.addEventListener('load', function () {
    new Vue({
      el: '#app',
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>

<!-- {{ constructor.constructor("alert(1)")() }} -->

<?php
printfooter();
?>
