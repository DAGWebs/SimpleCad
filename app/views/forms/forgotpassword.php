<?php $this->setSiteTitle(SITE_TITLE . ' | Forgot Password'); ?>
	<?php $this->start('head'); ?>
	
	<?php $this->end();?>

<?php $this->start('body'); ?>
<!-- start: page -->
<div style="margin-top: -340px; "></div>
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<h1><?php echo SITE_TITLE ?></h1>
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info">
							<p class="m-none text-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
						</div>

						<form>
							<div class="form-group mb-none">
								<div class="input-group">
									<input name="username" type="email" placeholder="E-mail" class="form-control input-lg" />
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
									</span>
								</div>
							</div>

							<p class="text-center mt-lg">Remembered? <a href="login">Sign In!</a>
						</form>
					</div>
				</div>
		</section>
		<!-- end: page -->
<?php $this->end(); ?> 