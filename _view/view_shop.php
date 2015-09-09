<div class="bs-callout bs-callout-info">
  <div class="collapse navbar-collapse" style="padding-left:0px;">
    <label class="title">Master Shop</label>
    <ul class="nav navbar-nav navbar-right">
          <li><button id="btnInsert" class="btn-sm btn-primary hs-s" data-toggle="modal" data-target="#formInsert" onclick="loadForm('shop','insert')">Add</button></li>
          <!--<li><button id="btnUpdate" class="btn-sm btn-success hs-s" data-toggle="modal" data-target="#formUpdate" onclick="loadForm('shop','update')" disabled>Update</button></li>-->
          <!--<li><button id="btnDelete" class="btn-sm btn-danger hs-s" data-toggle="modal" data-target="#formDelete" onclick="loadForm('shop','delete')" disabled>Delete</button></li>-->
    </ul>
    <input type="hidden" value="" id="masterID">
  </div>
        
  <div class="vs-s"></div>    

<!--  <table class="tableList">-->
  <table class="table table-striped table-bordered table-font datatable" cellspacing="0" width="100%" id="table_master">
    <thead>
      <tr>
        <th class="no-sort" width="30px">&nbsp;</th>
        <th>Name</th>        
        <th>Korean</th>        
        <th>Location</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th class="no-sort" width="25px">&nbsp;</th>
        <th>Name</th>        
        <th>Korean</th>        
        <th>Location</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </tfoot>
    
    <tbody>
      <?php foreach($model->directory() as $data) { ?>
      <tr onclick="setID('<?php echo $data["shop_code"]; ?>')">
          <td>
            <img class='img_button' src="<?php echo _PATH_IMAGE?>icon_edit.png" data-toggle="modal" data-target="#formUpdate" onclick="openForm('shop','update','<?php echo $data["shop_code"]; ?>')" /> &nbsp;
            <img class='img_button' src="<?php echo _PATH_IMAGE?>icon_delete.png" data-toggle="modal" data-target="#formDelete" onclick="openForm('shop','delete','<?php echo $data["shop_code"]; ?>')" />
          </td>
          <td><?php echo $data["shop_name"]; ?></td>          
          <td><?php echo $data["shop_name_korean"]; ?></td>          
          <td><?php echo $data["location_name"]; ?></td>
          <td><?php echo $data["shop_phone"]; ?></td>
          <td><?php echo $data["shop_email"]; ?></td>          
      </tr>
      <?php } ?>      
    </tbody>    
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="formInsert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="pop-up">  
        <div class="panel panel-primary">
          <?php include(_PATH_VIEW . "view_shop_insert.php"); ?>
        </div>
      </div>    
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="formUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="pop-up">  
        <div class="panel panel-success" id="updateFormContent">
          <?php include (_PATH_VIEW . "view_shop_update.php"); ?>
        </div>    
      </div>
    </div>
  </div>  

  <!-- Modal -->	
  
  <div class="modal fade" id="formDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="pop-up">  
        <div class="panel panel-danger" id="deleteFormContent">
          <?php include (_PATH_VIEW . "view_shop_delete.php"); ?>
        </div>    
      </div>
    </div>
  </div>
 
</div>