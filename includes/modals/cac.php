<div class="modal fade cac" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="cac">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>Hello <?php echo $username; ?>, Lets Create A Civ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="ajax" id="cac">
          <?php require_once "includes/form_handlers/register_civ.php"; ?>
         <div class="form-group">
           <div class="row">
             <div class="col-6">
               <input type="text" name="first" placeholder="First Name" class="form-control" value="<?php echo $first; ?>">
             </div>
             <div class="col-6">
               <input type="text" name="last" placeholder="Last Name" class="form-control" value="<?php echo $last; ?>">
             </div>
           </div>
         </div> 
         <div class="form-group">
           <select name="gender" id=""  class="form-control">
             <option value="No Option">Select Your Gender</option>
             <option value="Male">Male</option>
             <option value="Femaile">Female</option>
           </select>
         </div>
         <div class="form-group">
          <input type="date" placeholder="Date Of Birth" class="form-control" name="dob" value="<?php echo $date; ?>" required>
         </div>
         <div class="form-group">
           <input type="text" placeholder="Current Address" class="form-control" name="address" value="<?php echo $address; ?>">
         </div>
         <div class="row">
           <div class="col-6">
             <div class="form-group">
               <select name="hair" id="" class="form-control">
                 <option value="No Option">Select Your Hair Color</option>
                 <option value="br">Brown</option>
                 <option value="bl">Blond</option>
                 <option value="blk">Black</option>
                 <option value="rd">Red</option>
                 <option value="gr">Gray</option>
               </select>
             </div>
           </div>
           <div class="col-6">
             <div class="form-group">
              <select name="eyes" id="" class="form-control">
                 <option value="No Option">Select Your Eye Color</option>
                 <option value="br">Brown</option>
                 <option value="bl">Blond</option>
                 <option value="blk">Black</option>
                 <option value="rd">Red</option>
                 <option value="gr">Gray</option>
               </select>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-6">
             <div class="form-group">
               <input type="text" placeholder="Height (IN)" class="form-control" name="height" value="<?php echo $height; ?>">
             </div>
           </div>
           <div class="col-6">
             <div class="form-group">
               <input type="text" placeholder="Weight" class="form-control" name="weight" value="<?php echo $weight; ?>">
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-6">
             <div class="form-group">
               <select name="blood" id="" class="form-control">
                 <option value="No Option">Select Your Blood Type</option>
                 <option value="A+">A+</option>
                 <option value="A-">A-</option>
                 <option value="B+">B+</option>
                 <option value="B-">B-</option>
                 <option value="O+">O+</option>
                 <option value="O-">O-</option>
                 <option value="AB+">AB+</option>
                 <option value="AB-">AB-</option>
               </select>
             </div>
           </div>
           <div class="col-6">
             <div class="form-group">
              <select name="organ" id="" class="form-control">
                 <option value="No Option">Select Your Organ Donor Status</option>
                 <option value="Yes">Yes</option>
                 <option value="No">No</option>
               </select>
             </div>
           </div>
         </div>
         <div class="form-group">
              <select name="dlStatus" id="" class="form-control">
                 <option value="No Option">Driver's License Status</option>
                 <option value="Valid">Valid</option>
                 <option value="InValid">InValid</option>
                 <option value="Not Obtained">Not Obtained</option>
               </select>
             </div>
         <button class="btn btn-block btn-primary" name="submit" onclick="$('#cac').modal({'backdrop': 'static'});">Register My Civilian</button>
        </form>
      </div>
    </div>
  </div>
</div>