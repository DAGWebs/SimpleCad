<?php $this->setSiteTitle(SITE_TITLE . ' | Page Not Found') ?>
<?php $this->start('head'); ?>

<?php $this->end(); ?>

<?php $this->start('body'); ?>
<!-- start: page -->
						<section class="body-error error-inside">
							<div class="center-error">

								<div class="row">
									<div class="col-md-8">
										<div class="main-error mb-xlg">
											<h2 class="error-code text-dark text-center text-semibold m-none">404 <i class="fa fa-file"></i></h2>
											<p class="error-explanation text-center">We're sorry, but the page you were looking for doesn't exist.</p>
										</div>
									</div>
									<div class="col-md-4">
										<h4 class="text">Here are some useful links</h4>
										<ul class="nav nav-list primary">
											<li>
												<a href="<?php echo PROOT ?>"><i class="fa fa-caret-right text-dark"></i> Home</a>
											</li>
											<li>
												<a href="<?php echo PROOT ?>register"><i class="fa fa-caret-right text-dark"></i> Register</a>
											</li>
											<li>
												<a href="<?php echo PROOT ?>faq"><i class="fa fa-caret-right text-dark"></i> FAQ's</a>
											</li>
											<?php  
												if(Session::loggedin()) {
													echo '<li>
															<a href="' . PROOT . 'dashboard"><i class="fa fa-caret-right text-dark"></i> Dashboard</a>
														</li>';
												}
											?>
										</ul>
									</div>
								</div>
							</div>
						</section>
					<!-- end: page -->
				</section>  
<?php $this->end(); ?>