      <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="panel-title">Update Room</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" action="dhotel_updating" method="post">
          <input type="hidden" name="hotel_code" value="<?php echo $data["hotel_code"]; ?>" >
          <div class="form-group">
            <label for="room_code" class="control-label col-md-3 no-pad-r">Code</label>
            <div class="col-md-5">
              <input name="room_code" type="text" class="form-control" id="room_code" value="<?php echo $data['room_code']; ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="room_name" class="control-label col-md-3 no-pad-r">Name</label>
            <div class="col-md-5">
              <input name="room_name" type="text" class="form-control" id="room_name" placeholder="Name" value="<?php echo $data['room_name']; ?>">
            </div>
          </div>     			  
			<div class="form-group">
			  <label for="room_type" class="control-label col-md-3 no-pad-r">Type</label>
			  <div class="col-md-5">
        <select name="room_type" class="form-control min-padding" id="room_type">
          <option <?php echo ($data['room_type'] == "B" ? "selected" : "") ?> value="B">Budget</option>
          <option <?php echo ($data['room_type'] == "D" ? "selected" : "") ?> value="D">Deluxe</option>
          <option <?php echo ($data['room_type'] == "SD" ? "selected" : "") ?> value="SD">Super Deluxe</option>
          <option <?php echo ($data['room_type'] == "BB" ? "selected" : "") ?> value="BB">Breakfast Budget</option>
          <option <?php echo ($data['room_type'] == "BD" ? "selected" : "") ?> value="BD">Breakfast Deluxe</option>
          <option <?php echo ($data['room_type'] == "BSD" ? "selected" : "") ?> value="BSD">Breakfast Super Deluxe</option>
        </select>
			  </div>
			</div> 
			<div class="form-group">
			  <label for="room_price" class="control-label col-md-3 no-pad-r">Price</label>
			  <div class="col-md-3">
				<input name="room_price" type="number" class="form-control" id="room_price" placeholder="Price" value="<?php echo $data['room_price']; ?>">        
			  </div>            
			</div>			  
		  <div class="form-group">
			  <label for="room_description" class="control-label col-md-3 no-pad-r">Description</label>
			  <div class="col-md-8">
				<textarea name="room_description" class="form-control" id="room_description" placeholder="Description"><?php echo $data['room_description']; ?></textarea>      				
			  </div>            
			</div>
          <div class="form-group">
            <label class="control-label col-md-9">&nbsp;</label>
            <div class="col-md-2">
              <input type="submit" class="btn btn-success btn-block" value="Update">
            </div>            
          </div>
          
        </form>
      </div>	 