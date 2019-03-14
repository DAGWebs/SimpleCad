<?php $this->setSiteTitle(SITE_TITLE . ' | Login'); ?>
	<?php $this->start('head'); ?>
	
	<?php $this->end();?>

<?php $this->start('body'); ?>
<!-- start: page -->
<div style="margin-top: -260px; ">
</div>
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<h1><?php echo SITE_TITLE ?></h1>
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="" method="post">
							<?php echo Helpers::csrfInput(); ?>
							<div class="">
								<?php echo $this->displayErrors ?>
								</div>
							<div class="form-group mb-lg">
								
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="reset" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="remember_me" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<p class="text-center">Don't have an account yet? <a href="register">Sign Up!</a>

						</form>
					</div>
				</div>

				
			</div>
		</section>
		<script src="<?php echo PROOT; ?>assets/javascripts/forms/examples.wizard.js"></script>
		<!-- end: page -->
<?php $this->end(); ?> 