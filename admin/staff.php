<?php require_once "includes/header.php"; ?>
<?php require_once "includes/menu.php"; ?>
<div id="page-contnet-wrapper">
			<div class="container-fluid">
				
			</div>
		</div>
	</div>
</div>
<script>
	$("#menu").click(function(e){
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script>
<?php require_once "includes/footer.php"; ?>