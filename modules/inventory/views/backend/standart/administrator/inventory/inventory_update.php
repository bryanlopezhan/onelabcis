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
  padding: 100px; 
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
    width: 100%;
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
    padding: 0% 17%;
}
</style>

<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
    function domo() {

        // Binding keys
        $('*').bind('keydown', 'Ctrl+s', function assets() {
            $('#btn_save').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+x', function assets() {
            $('#btn_cancel').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+d', function assets() {
            $('.btn_save_back').trigger('click');
            return false;
        });

    }

    jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<!-- <section class="content-header">
    <h1>
        Inventory        <small>Edit Inventory</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/inventory'); ?>">Inventory</a></li>
        <li class="active">Edit</li>
    </ol>
</section> -->

<!-- Main content -->
<section class="background">
    <div class=" ">
        <div class=" ">
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <!-- <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                           
                            <h3 class="widget-user-username">Inventory</h3>
                            <h5 class="widget-user-desc">Edit Inventory</h5>
                            <hr>
                        </div> -->
                        <?= form_open(base_url('administrator/inventory/edit_save/'.$this->uri->segment(4)), [
                            'name' => 'form_inventory',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_inventory',
                            'method' => 'POST'
                        ]); ?>

                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>

                                                    
                        
                        <div class="form-group group-name_of_pure_chemical  ">
                                <label for="name_of_pure_chemical" class="col-sm-2 control-label">Name Of Pure Chemical                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name_of_pure_chemical" id="name_of_pure_chemical" placeholder="" value="<?= set_value('name_of_pure_chemical', $inventory->name_of_pure_chemical); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-chemical_formula  ">
                                <label for="chemical_formula" class="col-sm-2 control-label">Chemical Formula                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="chemical_formula" id="chemical_formula" placeholder="" value="<?= set_value('chemical_formula', $inventory->chemical_formula); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="location" class="col-sm-2 control-label">Location                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="location" id="location" data-placeholder="Select Location">
                                        <option value=""></option>
                                        <option <?= $inventory->location == "Room 221" ? 'selected' :''; ?> value="Room 221">Room 221</option>
                                        <option <?= $inventory->location == "Room 221A" ? 'selected' :''; ?> value="Room 221A">Room 221A</option>
                                        <option <?= $inventory->location == "Room 214A" ? 'selected' :''; ?> value="Room 214A">Room 214A</option>
                                                                            </select>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                                                
                        
                        <div class="form-group group-registered_by  ">
                                <label for="registered_by" class="col-sm-2 control-label">Registered By                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="registered_by" id="registered_by" placeholder="" value="<?= set_value('registered_by', $inventory->registered_by); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="state_of_chemical" class="col-sm-2 control-label">State Of Chemical                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="state_of_chemical" id="state_of_chemical" data-placeholder="Select State Of Chemical">
                                        <option value=""></option>
                                        <option <?= $inventory->state_of_chemical == "Liquid" ? 'selected' :''; ?> value="Liquid">Liquid</option>
                                        <option <?= $inventory->state_of_chemical == "Solid" ? 'selected' :''; ?> value="Solid">Solid</option>
                                                                            </select>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="chemical_color_group" class="col-sm-2 control-label">Chemical Color Group                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="chemical_color_group" id="chemical_color_group" data-placeholder="Select Chemical Color Group">
                                        <option value=""></option>
                                        <option <?= $inventory->chemical_color_group == "Blue" ? 'selected' :''; ?> value="Blue" style="color: white; background-color: blue;">Blue</option>
                                        <option <?= $inventory->chemical_color_group == "Red" ? 'selected' :''; ?> value="Red" style="color: white; background-color: red;">Red</option>
                                        <option <?= $inventory->chemical_color_group == "Green" ? 'selected' :''; ?> value="Green" style="color: white; background-color: green;">Green</option>
                                        <option <?= $inventory->chemical_color_group == "Yellow" ? 'selected' :''; ?> value="Yellow" style="color: black; background-color: yellow;">Yellow</option>
                                        <option <?= $inventory->chemical_color_group == "Peach" ? 'selected' :''; ?> value="Peach" style="color: black; background-color: #FFE5B4;">Peach</option>
                                        <option <?= $inventory->chemical_color_group == "White" ? 'selected' :''; ?> value="White" >White</option>                                   </select>
																			
										 
																			
																			
																			
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-cas_no  ">
                                <label for="cas_no" class="col-sm-2 control-label">Cas No                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="cas_no" id="cas_no" placeholder="" value="<?= set_value('cas_no', $inventory->cas_no); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-brand  ">
                                <label for="brand" class="col-sm-2 control-label">Brand                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="brand" id="brand" placeholder="" value="<?= set_value('brand', $inventory->brand); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-lot_no  ">
                                <label for="lot_no" class="col-sm-2 control-label">Lot No                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lot_no" id="lot_no" placeholder="" value="<?= set_value('lot_no', $inventory->lot_no); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="container" class="col-sm-2 control-label">Container                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="container" id="container" data-placeholder="Select Container">
                                        <option value=""></option>
                                        <option <?= $inventory->container == "Glass Bottle (Clear)" ? 'selected' :''; ?> value="Glass Bottle (Clear)">Glass Bottle (Clear)</option>
                                        <option <?= $inventory->container == "Glass Bottle (Amber)" ? 'selected' :''; ?> value="Glass Bottle (Amber)">Glass Bottle (Amber)</option>
                                        <option <?= $inventory->container == "Plastic Bottle" ? 'selected' :''; ?> value="Plastic Bottle">Plastic Bottle</option>
                                        <option <?= $inventory->container == "Canister" ? 'selected' :''; ?> value="Canister">Canister</option>
                                        <option <?= $inventory->container == "Plastic Bag" ? 'selected' :''; ?> value="Plastic Bag">Plastic Bag</option>
                                                                            </select>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="storage_condition" class="col-sm-2 control-label">Storage Condition                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="storage_condition" id="storage_condition" data-placeholder="Select Storage Condition">
                                        <option value=""></option>
                                        <option <?= $inventory->storage_condition == "Chilled (0-10°C)" ? 'selected' :''; ?> value="Chilled (0-10°C)">Chilled (0-10°C)</option>
                                        <option <?= $inventory->storage_condition == "Frozen (<0°C)" ? 'selected' :''; ?> value="Frozen (<0°C)">Frozen (<0°C)</option>
                                        <option <?= $inventory->storage_condition == "Desiccator" ? 'selected' :''; ?> value="Desiccator">Desiccator</option>
                                                                            </select>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-original_amount  ">
                                <label for="original_amount" class="col-sm-2 control-label">Original Amount                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="original_amount" id="original_amount" placeholder="Grams (g), Kilograms (kg), Milliliter (mL), Liter (L)" value="<?= set_value('original_amount', $inventory->original_amount); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-estimated_current_mount  ">
                                <label for="estimated_current_mount" class="col-sm-2 control-label">Estimated Current Mount                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="estimated_current_mount" id="estimated_current_mount" placeholder="Grams (g), Kilograms (kg), Milliliter (mL), Liter (L)" value="<?= set_value('estimated_current_mount', $inventory->estimated_current_mount); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-date_of_receipt  ">
                                <label for="date_of_receipt" class="col-sm-2 control-label">Date Of Receipt                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datepicker" name="date_of_receipt" placeholder="" id="date_of_receipt" value="<?= set_value('inventory_date_of_receipt_name', $inventory->date_of_receipt); ?>">
                                    </div>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>

                        
                        
                                                    
                        
                        <div class="form-group group-received_by  ">
                                <label for="received_by" class="col-sm-2 control-label">Received By                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="received_by" id="received_by" placeholder="" value="<?= set_value('received_by', $inventory->received_by); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-date_of_expiration  ">
                                <label for="date_of_expiration" class="col-sm-2 control-label">Date Of Expiration                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datepicker" name="date_of_expiration" placeholder="" id="date_of_expiration" value="<?= set_value('inventory_date_of_expiration_name', $inventory->date_of_expiration); ?>">
                                    </div>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
								<br>
                        
                        
                        
                                                    <div class="message"></div>
                                                <div class="row-fluid col-md-7 container-button-bottom view-nav">
                            <button class="btn btn-flat btn-primary btn_save btn_action " id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                <i class="fa fa-save"></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                                <i class="ion ion-ios-list-outline"></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>

                            <div class="custom-button-wrapper">

                                                        </div>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                                <i class="fa fa-undo"></i> <?= cclang('cancel_button'); ?>
                            </a><br><br><br><br><br>
                            <span class="loading loading-hide">
                                <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg">
                                <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                                                <?= form_close(); ?>
                        </div> 
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>
<!-- /.content -->
<!-- Page script -->
<script>
    $(document).ready(function() {
    window.event_submit_and_action = '';
            
    (function(){
    var chemical_code = $('#chemical_code');
   /* 
    chemical_code.on('change', function() {});
    */
    var name_of_pure_chemical = $('#name_of_pure_chemical');
   var chemical_formula = $('#chemical_formula');
   var location = $('#location');
   var date_registered = $('#date_registered');
   var registered_by = $('#registered_by');
   var state_of_chemical = $('#state_of_chemical');
   var chemical_color_group = $('#chemical_color_group');
   var cas_no = $('#cas_no');
   var brand = $('#brand');
   var lot_no = $('#lot_no');
   var container = $('#container');
   var storage_condition = $('#storage_condition');
   var original_amount = $('#original_amount');
   var estimated_current_mount = $('#estimated_current_mount');
   var date_of_receipt = $('#date_of_receipt');
   var received_by = $('#received_by');
   var date_of_expiration = $('#date_of_expiration');
   
})()
      
      
      
      
        
        
    
    $('#btn_cancel').click(function() {
        swal({
                title: "Are you sure?",
                text: " ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "YES",
                cancelButtonText: "NO",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = BASE_URL + 'administrator/inventory';
                }
            });

        return false;
    }); /*end btn cancel*/

    $('.btn_save').click(function() {
        $('.message').fadeOut();
        
    var form_inventory = $('#form_inventory');
    var data_post = form_inventory.serializeArray();
    var save_type = $(this).attr('data-stype');
    data_post.push({
        name: 'save_type',
        value: save_type
    });

    (function(){
    data_post.push({
        name : '_example',
        value : 'value_of_example',
    })
})()
      
      
    data_post.push({
        name: 'event_submit_and_action',
        value: window.event_submit_and_action
    });

    $('.loading').show();

    $.ajax({
            url: form_inventory.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            $('form').find('.form-group').removeClass('has-error');
            $('form').find('.error-input').remove();
            $('.steps li').removeClass('error');
            if (res.success) {
                var id = $('#inventory_image_galery').find('li').attr('qq-file-id');
                if (save_type == 'back') {
                    window.location.href = res.redirect;
                    return;
                }

                $('.message').printMessage({
                    message: res.message
                });
                $('.message').fadeIn();
                $('.data_file_uuid').val('');

            } else {
                if (res.errors) {
                    parseErrorField(res.errors);
                }
                $('.message').printMessage({
                    message: res.message,
                    type: 'warning'
                });
            }

        })
        .fail(function() {
            $('.message').printMessage({
                message: 'Error save data',
                type: 'warning'
            });
        })
        .always(function() {
            $('.loading').hide();
            $('html, body').animate({
                scrollTop: $(document).height()
            }, 2000);
        });

    return false;
    }); /*end btn save*/

    

    

    async function chain() {
            }

    chain();




    }); /*end doc ready*/
</script>