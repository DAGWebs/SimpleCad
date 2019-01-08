<div class="modal fade dmv" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
      	<h5>Hello <?php echo $username; ?>, Welcome to <?php echo $county_name ?>'s DMV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".driver">Get Driver's Licence</button>
      		</div>
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".reg_vehicle">Register New Vehicle</button>
      		</div>
      	</div>
      	<br>
      	<div class="row">
      		<div class="col-6">
      			<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".stolen">Report Stolen Vehicle</button>
      		</div>
      		<div class="col-6">
      			<a href="mydmv" class="btn btn-primary btn-lg btn-block">View My DMV</a>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
      	
      </div>
    </div>
  </div>
</div>

<div class="modal fade driver" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>Get Your License</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="?type=civ&license=submitted" method="post">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Select Your Identity</option>
              </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Get Driver's Licence Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade stolen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>Report Your Car Stolen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="?type=civ&stolen=submitted" method="post">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Select Your Car</option>
              </select>
            </div>
             <button class="btn btn-primary btn-block" type="submit">Report Stolen</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade reg_gun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>Register Your Fire Arm - If You Cant Find It Here Its Illegal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="?type=civ&atf=submitted" method="post">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Select Your Identity</option>
              </select>
            </div>
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Select Your Gun</option>
              </select>
            </div>
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">concealed carry Status</option>
                <option value="Not Valid">Not Valid For This Type Gun</option>
                <option value="Permit Obtained">Permit Obtained</option>
                <option value="Permit Not Obtained">Permit Not Obtained</option>
              </select>
            </div>
             <button class="btn btn-primary btn-block" type="submit">Register Fire Arm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade call_911" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>911 Call Center</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="?type=civ&atf=submitted" method="post">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Select Your Identity</option>
              </select>
            </div>
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="No Option">Emergancy Type</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Location">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Emergancy Description"></textarea>
            </div>
             <button class="btn btn-primary btn-block" type="submit">Call 911</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade warents" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>My Warents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          Display all IDENTITES WARENTS
        </div>
      </div>
    </div>
  </div>
</div>