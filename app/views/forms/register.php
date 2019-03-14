<?php $this->setSiteTitle(SITE_TITLE . ' | Register'); ?>
	<?php $this->start('head'); ?>
	
	<?php $this->end();?>

	<?php $this->start('body'); ?>
<!-- start: page -->
<div style="margin-top: -150px; ">
</div>
<section class="body-sign" >
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<h1><?php echo SITE_TITLE?></h1>
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<form method="post" autocomplete="off">
						<?php echo Helpers::csrfInput(); ?>
							<div class="">
								<?php echo $this->displayErrors ?>
								</div>
							<div class="form-group mb-lg">
								<label>Username</label>
								<input name="username" type="text" class="form-control input-lg" placeholder="Username" />
							</div>

							<div class="form-group mb-lg">
								<label>E-mail Address</label>
								<input name="email" type="email" class="form-control input-lg" placeholder="admin@yourdomain.com" />
							</div>

							<div class="form-group mb-lg">
								<label>Discord</label>
								<input name="discord" type="text" class="form-control input-lg" placeholder="Discord#09458" />
							</div>

							<div class="form-group mb-lg">
								<label>Password</label>
								<input name="password" type="password" class="form-control input-lg" placeholder="Password" />
							</div>

							<div class="form-group mb-lg">
								<label>Confirm Password</label>
								<input name="confirmPassword" type="password" class="form-control input-lg" placeholder="Confirm Password" />
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="tos" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<p class="text-center">Already have an account? <a href="pages-signin.html">Sign In!</a>

						</form>
					</div>
				</div>

				
			</div>
		</section>
<?php $this->end(); ?> 