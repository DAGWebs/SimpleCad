<?php require_once "includes/header.php"; ?>
<?php require_once "includes/menu.php"; ?>
<?php require_once "includes/modals/tos.php"; ?>
<div class="body-width <?php echo $background; ?>">
	<div class="row justify-content-between">
		<div class="col-4">
			<form action="" method="post">
				<h1 class="text-center">Register</h1>
				<?php require_once "includes/form_handlers/register.php"; ?>
				<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" placeholder="Your Username" id="username" autocomplete="off" class="form-control" value="<?php echo $username; ?>">
				</div>
				<div class="form-group">
					<label for="email">Email: </label>
					<input type="text" name="email" placeholder="email@example.com" id="email" autocomplete="off" class="form-control" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label for="discord">Discord: </label>
					<input type="text" name="discord" placeholder="Discord#1112" id="discord" autocomplete="off" class="form-control" value="<?php echo $discord; ?>">
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" placeholder="Password" id="password" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label for="cpas">Confirm Password: </label>
					<input type="password" name="cpas" placeholder="Confirm Password" id="cpas" autocomplete="off" class="form-control">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" name="tos" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Do you agree to our <a href="#tos" id="exampleCheck1" class="text-primary" data-toggle="modal" data-target="#exampleModalLong">TOS</a>!</label>
				</div>
				<button class="btn btn-block btn-primary" type="submit" name="submit">Register</button>
				<h5>Already have an account with us? <a href="login" class="text-primary">Login Here!</a></h5>
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