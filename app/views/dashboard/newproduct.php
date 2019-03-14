<?php $this->setSiteTitle('New Product') ?>
<?php $this->start('head'); ?>

<?php $this->end(); ?>

<?php $this->start('body'); ?>
	<h2>Create A Product</h2>
						
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="home">
					<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span><a href="../dashboard">Dashboard</a></span></li>
			<li><span>Create New Product</span></li>
		</ol>
						
		<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
   </header>
  	<div class="product-form">
  		<h2 class="text-center">Create A New Product!</h2>
  		<form action="" method="post">
  			<div class="row">
  				<?php echo inputBlock('text', 'Username', 'username', $_SESSION['username'], $inputAttrs=['class' => 'form-control', 'disabled' => 'true'], $divAttrs=['class' => 'col-md-6 form-group']); ?>
  				<?php echo inputBlock('text', 'Email', 'email', $_SESSION['email'], $inputAttrs=['class' => 'form-control', 'disabled' => 'true'], $divAttrs=['class' => 'col-md-6 form-group']); ?>
  			</div>
  			<?php  
				echo inputBlock('text', 'Product Name', 'product', '', $inputAttrs=['class' => 'form-control', 'placeholder' => 'Product Name'], $divAttrs=['class' => 'form-group']); 
				 
  			?>
  			<div class="row">
  				<div class="col-md-6 form-group">
  					<label for="">Product Price</label>
  					<div class="input-group mb-md">
						<span class="input-group-addon">$</span>
						<input type="text" class="form-control" placeholder="100">
						<span class="input-group-addon ">.00</span>
					</div>
  				</div>
  				<div class="col-md-6 form-group">
  					<label for="">Product Quantity</label>
  					<div class="input-group mb-md">
						<span class="input-group-addon"><i class="fas fa-sort-amount-up"></i></span>
						<input type="text" class="form-control" placeholder="100">
					</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label for="">Product Description</label>
  				<textarea name="desc" id="" cols="30" rows="10" class="form-control" placeholder="Product Description"></textarea>
  			</div>
  			<div class="form-group">
  				<input type="submit" class="btn btn-primary btn-block btn-flat" value="Create Product">
  			</div>
  			
  		</form>
  	</div>
<?php $this->end(); ?>