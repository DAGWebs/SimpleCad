<?php require_once "includes/header.php"; ?>
<?php require_once "includes/menu.php"; ?>
<div class="body-width <?php echo $background; ?>">
	<div class="row justify-content-between">
		<div class="col-4">
			<form action="" method="post">
				<h1 class="text-center">Login</h1>
				<?php require_once "includes/form_handlers/login.php"; ?>
				<div class="form-group">
					<label for="username">Username or Email: </label>
					<input type="text" name="username" placeholder="Username or Email" id="username" autocomplete="off" class="form-control" value="<?php echo $username; ?>">
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" placeholder="Password" id="password" autocomplete="off" class="form-control">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Remember Me!</label>
				</div>
				<button class="btn btn-block btn-primary" name="submit">Login</button>
				<h5>Dont have an account with us yet? <a href="register" class="text-primary">Register Here!</a></h5>
			</form>
		</div>
		<div class="col-1">
		</div>
		<div class="col-4 right">
			<h1>About Our Community!</h1>
			<p><?php echo $loginDescription; ?></p>
		</div>
	</div>
</div>
<?php require_once "includes/footer.php"; ?>