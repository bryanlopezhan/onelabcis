
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>

<style>


 .form-control {
    display: block;
    width: 100%;
    height: 50px;
    padding: 6px 12px;
    font-size: 17px;
	font-weight: 700;
    line-height: 1.42857143;
    color: #fff;
    background-color: rgb(255 255 255 / 20%);
    background-image: none;
    border: 0px solid #ccc;}
 
.form-control {
    border-color: #DEDCDC !important;
    border-radius: 0px !important;
}

 .background {
  padding: 55px; 
  background-image: url('../../../cc-content/themes/cicool/asset/img/header2.jpg');
  background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	
}
 .box {
    position: relative;
    border-radius: 3px;
    background: rgba(0, 0, 0, 0);
    border-top: 0px solid #d2d6de;
    margin-bottom: 20px;
    width: 170%;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}


.form-control:focus {
    box-shadow: 0 0 0 2pt rgb(255 255 255 / 90%) !important;
    border-radius: 0px !important;
}




.chosen-container-single .chosen-single {
    position: relative;
    display: block;
    overflow: hidden;
    padding: 11px 0 0 20px;
    height: 45px;
    border: 0px solid #d2d6de;
    background-color: rgb(255 255 255 / 20%);
    background-clip: padding-box;
    color: #fff;
    text-decoration: none;
    white-space: nowrap;
    line-height: 24px;
font-weight: 800;
}




.content-wrapper {
    content: '';
	position: relative;
	width: 98vw;
	height: 100vh;
	background-image: url('../cc-content/themes/cicool/asset/img/header2.jpg');
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
}
 
.bgg {
background-image: url('../cc-content/themes/cicool/asset/img/header2.jpg');
width: 100px;
height: 100px;
}


.row {
    margin-right: 15px;
    margin-left: -15px;
}
 

 
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 17px;
    line-height: 1.42857143;
    color: #ffffffe0;
    background-color: #fff;
}


.btn.btn-flat {
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-width: 0px;
}


.btn, .chosen-container .chosen-single, .chosen-container .chosen-choices {
    border-radius: 0px !important;
}

.col-md-7 {
    width: 62.333333%;
}

.btn {
    display: inline-block;
    padding: 13px 30px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 800;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

.view-nav {
    padding-bottom: 10px;
    padding: 0% 14%;
}
</style>
<!-- Content Header (Page header) -->
<!-- <section class="content-header">
   <h1>
      Inventory      <small><?= cclang('detail', ['Inventory']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/inventory'); ?>">Inventory</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
   </ol>
</section> -->
<!-- Main content -->
<section class="">
   <div class=" " >
     
      <div class="background">
         <div class="box box-warning">
            <div class="box-body ">

               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <!-- <div class="widget-user-header ">
                    
                    
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                      
                     <h3 class="widget-user-username">Inventory</h3>
                     <h5 class="widget-user-desc">Detail Inventory</h5>
                     <hr>
                  </div> -->

                 
                  <div class="form-horizontal form-step" name="form_inventory" id="form_inventory" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Chemical Code </label>

                        <div class="col-sm-8">
                        <span class="detail_group-chemical_code"><?= _ent($inventory->chemical_code); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Name Of Pure Chemical </label>

                        <div class="col-sm-8">
                        <span class="detail_group-name_of_pure_chemical"><?= _ent($inventory->name_of_pure_chemical); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Chemical Formula </label>

                        <div class="col-sm-8">
                        <span class="detail_group-chemical_formula"><?= _ent($inventory->chemical_formula); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Location </label>

                        <div class="col-sm-8">
                        <span class="detail_group-location"><?= _ent($inventory->location); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Registered By </label>

                        <div class="col-sm-8">
                        <span class="detail_group-registered_by"><?= _ent($inventory->registered_by); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">State Of Chemical </label>

                        <div class="col-sm-8">
                        <span class="detail_group-state_of_chemical"><?= _ent($inventory->state_of_chemical); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Chemical Color Group </label>

                        <div class="col-sm-8">
                        <span class="detail_group-chemical_color_group"><?= _ent($inventory->chemical_color_group); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Cas No </label>

                        <div class="col-sm-8">
                        <span class="detail_group-cas_no"><?= _ent($inventory->cas_no); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Brand </label>

                        <div class="col-sm-8">
                        <span class="detail_group-brand"><?= _ent($inventory->brand); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Lot No </label>

                        <div class="col-sm-8">
                        <span class="detail_group-lot_no"><?= _ent($inventory->lot_no); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Container </label>

                        <div class="col-sm-8">
                        <span class="detail_group-container"><?= _ent($inventory->container); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Storage Condition </label>

                        <div class="col-sm-8">
                        <span class="detail_group-storage_condition"><?= _ent($inventory->storage_condition); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Original Amount </label>

                        <div class="col-sm-8">
                        <span class="detail_group-original_amount"><?= _ent($inventory->original_amount); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Estimated Current Mount </label>

                        <div class="col-sm-8">
                        <span class="detail_group-estimated_current_mount"><?= _ent($inventory->estimated_current_mount); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Of Receipt </label>

                        <div class="col-sm-8">
                        <span class="detail_group-date_of_receipt"><?= _ent($inventory->date_of_receipt); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Received By </label>

                        <div class="col-sm-8">
                        <span class="detail_group-received_by"><?= _ent($inventory->received_by); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Of Expiration </label>

                        <div class="col-sm-8">
                        <span class="detail_group-date_of_expiration"><?= _ent($inventory->date_of_expiration); ?></span>
                        </div>
                    </div>
                                        
                    <br>
                   


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('inventory_update', function() use ($inventory){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="Update the Information" href="<?= site_url('administrator/inventory/edit/'.$inventory->chemical_code); ?>"><i class="fa fa-edit" ></i> Edit </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="Back" href="<?= site_url('administrator/inventory/'); ?>"><i class="fa fa-undo" ></i> Back</a>
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->

      </div>
   </div>
</section>
<!-- /.content -->

<script>
$(document).ready(function(){
   (function(){
        var chemical_code = $('.detail_group-chemical_code');
        var name_of_pure_chemical = $('.detail_group-name_of_pure_chemical');
        var chemical_formula = $('.detail_group-chemical_formula');
        var location = $('.detail_group-location');
        var date_registered = $('.detail_group-date_registered');
        var registered_by = $('.detail_group-registered_by');
        var state_of_chemical = $('.detail_group-state_of_chemical');
        var chemical_color_group = $('.detail_group-chemical_color_group');
        var cas_no = $('.detail_group-cas_no');
        var brand = $('.detail_group-brand');
        var lot_no = $('.detail_group-lot_no');
        var container = $('.detail_group-container');
        var storage_condition = $('.detail_group-storage_condition');
        var original_amount = $('.detail_group-original_amount');
        var estimated_current_mount = $('.detail_group-estimated_current_mount');
        var date_of_receipt = $('.detail_group-date_of_receipt');
        var received_by = $('.detail_group-received_by');
        var date_of_expiration = $('.detail_group-date_of_expiration');
    })()
      
   });
</script>