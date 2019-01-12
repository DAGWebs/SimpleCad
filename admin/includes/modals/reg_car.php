<div class="modal fade reg_vehicle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
      	<h5>Register A New Car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="" method="post">
         <div class="form-group">
           <select name="" id=""  class="form-control">
             <option value="Make">Select Your Make</option>
           </select>
         </div> 
         <div class="form-group">
           <select name="" id=""  class="form-control">
             <option value="modal">Select Your Modle</option>
           </select>
         </div>
         <div class="form-group">
           <select name="" id="" class="form-control">
             <option value="character">Select Your Character</option>
             <?php  
                  $sql = "SELECT * FROM identities WHERE user_id = '$user_id'";
                  $query = query($sql);
                  if(rows($query) > 0) {
                    while($row = assoc($query)) {
                      echo "<option value='{$row['id_first']} {$row['id_last']}'>{$row['id_first']} {$row['id_last']}</option>";
                    }
                  } else {
                    echo '<option value="No Option">You Have No Identities</option>';
                  }
                ?>
           </select>
         </div>
         <div class="form-group">
           <input type="text" placeholder="Plate number" class="form-control">
         </div>
         <button class="btn btn-block btn-primary">Register Vehicle</button>
        </form>
      </div>
    </div>
  </div>
</div>