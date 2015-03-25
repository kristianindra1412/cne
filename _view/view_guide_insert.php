<div class="panel-heading">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 class="panel-title">Add Local Guide</h3>
</div>
<div class="panel-body">
  <form class="form-horizontal" action="guide_inserting" method="post">
    <div class="form-group">
      <label for="guide_name" class="control-label col-md-3 no-pad-r">Name</label>
      <div class="col-md-5">
        <input name="guide_name" type="text" class="form-control" id="guide_name" placeholder="Name">
      </div>
    </div>    
    <div class="form-group">
      <label for="guide_id_no" class="control-label col-md-3 no-pad-r">ID Number</label>
      <div class="col-md-5">
        <input name="guide_id_no" type="text" class="form-control" id="guide_id_no" placeholder="ID Number">
      </div>
    </div>
    <div class="form-group">
      <label for="guide_hp" class="control-label col-md-3 no-pad-r">Contact Number</label>
      <div class="col-md-3">
        <input name="guide_hp" type="text" class="form-control" id="guide_hp" placeholder="Handphone">
      </div>            
    </div>
    <div class="form-group">
      <label for="guide_phone" class="control-label col-md-3">&nbsp;</label>
      <div class="col-md-3">
        <input name="guide_phone" type="text" class="form-control" id="guide_phone" placeholder="Phone">
      </div>            
    </div>
    <div class="form-group">
      <label for="guide_fax" class="control-label col-md-3">&nbsp;</label>
      <div class="col-md-3">
        <input name="guide_fax" type="text" class="form-control" id="guide_fax" placeholder="Fax">
      </div>            
    </div>
    <div class="form-group">
      <label for="guide_bank_name" class="control-label col-md-3 no-pad-r">Bank Account</label>
      <div class="col-md-4" style="padding-right:5px;">
        <input name="guide_bank_name" type="text" class="form-control" id="guide_bank_name" placeholder="Bank Name">
      </div>
      <div class="col-md-4 no-pad-l">
        <input name="guide_bank_account" type="text" class="form-control" id="guide_bank_account" placeholder="Account Number">
      </div>              
    </div>          
    <div class="form-group">
      <label for="guide_email" class="control-label col-md-3 no-pad-r">Email</label>
      <div class="col-md-5">
        <input name="guide_email" type="email" class="form-control" id="guide_email" placeholder="Email">
      </div>            
    </div>
    <div class="form-group">
      <label for="guide_password" class="control-label col-md-3 no-pad-r">Password</label>
      <div class="col-md-5">
        <input name="guide_password" type="password" class="form-control" id="guide_password" placeholder="Password">
      </div>            
    </div>
    <div class="form-group">
      <label for="guide_address" class="control-label col-md-3 no-pad-r">Address</label>
      <div class="col-md-6" style="padding-right: 5px;">
        <input name="guide_address" type="text" class="form-control" id="guide_address" placeholder="Address">
      </div>            
      <div class="col-md-2 no-pad-l">
        <input name="guide_postal" type="text" class="form-control" id="guide_postal" placeholder="Postal">
      </div>  
    </div>
    <div class="form-group">
      <label for="guide_country" class="control-label col-md-3 no-pad-r">&nbsp;</label>
      <div class="col-md-4 no-pad-r" style="padding-right:5px;">
        <input name="guide_country" type="text" class="form-control" id="guide_country" placeholder="Country">
      </div>   
	  <div class="col-md-4 no-pad-l">
        <input name="guide_city" type="text" class="form-control" id="guide_city" placeholder="City">
      </div>  	
    </div>    
    <div class="form-group">
      <label class="control-label col-md-9">&nbsp;</label>
      <div class="col-md-2">
        <input type="submit" class="btn btn-primary btn-block" value="Save">
      </div>            
    </div>
    
  </form>
</div>
