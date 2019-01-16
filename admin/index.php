<?php require_once "includes/header.php"; ?>
<?php require_once "includes/menu.php"; ?>
<div id="page-contnet-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<h2 class="text-center">Manualy Validate Users</h2>
						<?php  
							$sql = "SELECT * FROM users WHERE user_confirmed = 0";
							$query = query($sql);

							if(rows($query) > 0) {
								while($row = assoc($query)) {
									$val_id = $row["user_id"];
									$validate_user = 'validate_' . $val_id;
									
									echo '
										<div class="row" style="padding:10px; margin-top: 10px; background: #222; border-radius: 10px;">
											<div class="col-4">
												<p style="padding:0px;">Username: </p>
												' . $row["user_username"] . '
											</div>
											<div class="col-4">
											<p style="padding:0px;">Discord: </p>
												' . $row["user_discord"] . '
											</div>
											<div class="col-4">
												<form action="" method="post">
													<button class="btn btn-danger btn-block" name="' . $validate_user . '">Validate User</button>
												</form>
											</div>
										</div>	
									';
									if(isset($_POST[$validate_user])) {
										$sql = "UPDATE users SET user_confirmed = 1 WHERE user_id = '$val_id'";
										query($sql);
										header("Refresh:0");
									}
								}
							} else {
								echo "<h4 class='text-center'>All Users Have Been Confirmed And Can Login</h4>";
							}
						?>
					</div>
					<div class="col-4">
						
					</div>
					<div class="col-4">
						
					</div>
				</div>
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

