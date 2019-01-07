<div class="modal fade cac" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5>Hello <?php echo $username; ?>, Lets Create A Civ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
         <div class="form-group">
           <div class="row">
             <div class="col-6">
               <input type="text" name="first" placeholder="First Name" class="form-control">
             </div>
             <div class="col-6">
               <input type="text" name="first" placeholder="First Name" class="form-control">
             </div>
           </div>
         </div> 
         <div class="form-group">
           <select name="" id=""  class="form-control">
             <option value="modal">Select Your Gender</option>
             <option value="modal">Male</option>
             <option value="modal">Female</option>
           </select>
         </div>
         <div class="form-group">
          <input type="date" placeholder="Date Of Birth" class="form-control">
         </div>
         <div class="form-group">
           <input type="text" placeholder="Current Address" class="form-control">
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
               <input type="text" placeholder="Height (IN)" class="form-control">
             </div>
           </div>
           <div class="col-6">
             <div class="form-group">
               <input type="text" placeholder="Weight" class="form-control">
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-6">
             <div class="form-group">
               <select name="hair" id="" class="form-control">
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
              <select name="eyes" id="" class="form-control">
                 <option value="No Option">Select Your Organ Donor Status</option>
                 <option value="Yes">Yes</option>
                 <option value="No">No</option>
               </select>
             </div>
           </div>
         </div>
         <div class="form-group">
              <select name="eyes" id="" class="form-control">
                 <option value="No Option">Driver's License Status</option>
                 <option value="Valid">Valid</option>
                 <option value="InValid">InValid</option>
               </select>
             </div>
         <button class="btn btn-block btn-primary">Register My Civilian </button>
        </form>
      </div>
    </div>
  </div>
</div>