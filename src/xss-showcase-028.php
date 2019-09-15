<?php
include_once('xss-showcase-common.php');
printheader();
?>
XSS showcase 028 UAE<br>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script>
		var crop;
		var isSavedButton = false;

		$(window).unload(function() {
			if(!isSavedButton){
				//parent.location.replace(HOSTSSL+"/<?php echo htmlspecialchars($_GET['sRedirectTo'])?>");
			}
		});
		$(document).ready(function(){
			$("#save-logo").click(function(){
				isSavedButton = true;
				//var cropArea = crop.getCropCoords();
				parent.location.replace("/xss-showcase-028.php?action=cropImage&sReason=marketing_box&sRedirectTo=<?php echo htmlspecialchars($_GET['sRedirectTo'])?>&originalfile=<?php echo htmlspecialchars($_GET['originalfile'])?>&file=<?php echo htmlspecialchars($_GET['imgurl'])?>");
				})
				$("#cancel").click(function(){
					self.parent.tb_remove();
				})
		})
	</script>
	<div class="box">
	<div id="save-logo">save</div>
	</div>
<?php
printfooter();
?>
