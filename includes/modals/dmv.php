<div class="modal fade dmv" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
      	<h5>Hello <?php echo $username; ?>, Welcome to <?php echo $com_name ?>'s DMV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block">Get Driver's Licence</button>
      		</div>
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target=".reg_vehicle">Register New Vehicle</button>
      		</div>
      	</div>
      	<br>
      	<div class="row">
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block">Report Stolen Vehicle</button>
      		</div>
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block">Manage My DMV</button>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
      	
      </div>
    </div>
  </div>
</div>