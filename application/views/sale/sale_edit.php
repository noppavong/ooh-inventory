<div class="row">
    <script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
    <link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">sale edit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" >
                    <!-- text input -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_customer" data-toggle="tab">  customer</a></li>
                    <li><a href="#tab_product" data-toggle="tab"> product</a></li>                   
                 </ul>
                 <div class="tab-content">
                    
                    <div class="tab-pane active" id="tab_customer">
                    
                       <input type="hidden" name="order_id" />
                       <div class="form-group">
                       <label>ช่องทางการขาย</label>
                            <select class="form-control" name="channel_id" id="channel_id" >
                            <option value="">เลือก</option>
                            <?php if(!empty($query_channel_list)): ?>
                                <?php foreach($query_channel_list->result() as $channel):?>
                                    <option discount="<?php echo $channel->percent_discount ?>" value="<?php echo $channel->id; ?>" 
                                        <?php echo set_select( 'channel_id', $channel->id, $channel->id == $channel_id); ?> >
                                        <?php echo $channel->description; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                             </select>
                        </div>
                    <fieldset>
                        <input type="hidden" name="data" />
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                   <h3 class="box-title"> ขัอมูลลูกค้า</h3>
                                </div>
                                <a class="btn btn-app" id="search_customer">
                                                <i class="fa fa-plus-circle"></i> ใส่ลูกค้า
                                </a>
                                <div class="box-body">
                                <input type="hidden" name="customer_id" id="customer_id"/>
                                <div class="form-group">
                                    <label>name</label>
                                    <input type="text" class="form-control" name="name" id="name" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>surname</label>
                                    <input type="text" class="form-control" name="surname" id="surname" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Line Name</label>
                                    <input type="text" class="form-control" name="line_id" id="line_id" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" readonly="readonly">
                                </div>
                                   <div class="form-group">
                                    <label>Telephone No</label>
                                    <input type="text" class="form-control" name="telephone_no" id="telephone_no" readonly="readonly">
                                </div>
                                </div>
                            </div>
                            <a class="btn btn-primary" id="btnnext" href="#" >next</a>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                   <h3 class="box-title"> ขัอมูลที่อยู่</h3>
                                </div>
                                <div class="box-body">
                                <div id="old_address_list">
                                <?php
                                 $i = 0;
                                 if(!empty($customer_address)){ ?>
                                    <?php foreach ($customer_address->result() as $row) { ?>
                                    <?php $i++ ; ?>
                                    <fieldset>
                                            <legend>ที่อยู่เดิม <?php echo $i; ?></legend>
                                           <div class="form-group" >
                                            <input type="radio" value="<?php echo $row->address_id ?>" name="address_id"  /><label>&nbsp;จัดส่งตามที่อยู่นี้</label>
                                           </div>
                                           <div class="form-group" >
                                                <label> ที่อยู่</label>
                                                <?php echo $row->address; ?>
                                           </div>
                                             <div class="form-group" >
                                                <label> รหัสไปรษณีย์</label>
                                                <?php echo $row->zipcode; ?>
                                           </div>
                                             <div class="form-group" >
                                                <label> จังหวัด</label>
                                                <?php echo $row->desc_th; ?>
                                           </div>
                                    </fieldset>
                                    <?php } ?>
                                <?php } ?>
                                </div>
                                <fieldset>
                                    <legend  >เพิ่มที่อยู่ใหม่</legend>
                                    <div class="form-group">
                                    <input type="radio" value="NEW" name="new_address_id" /><label>&nbsp;จัดส่งตามที่อยู่นี้</label>
                                    </div>
                                    <div class="form-group">
                                        <label>ที่อยู่</label>
                                       <textarea class="form-control" rows="3" name="address" id="address" placeholder="ที่อยู่ ..." ></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>จังหวัด</label>
                                        <select class="form-control" name="province_id" id="province_id">
                                        <option value="">เลือก</option>
                                        <?php if(!empty($query_province_list)): ?>
                                            <?php foreach($query_province_list->result() as $province):?>
                                                <option value="<?php echo $province->id; ?>" 
                                                    <?php echo set_select( 'province_id', $province->id, $province->id == $province_id); ?> >
                                                    <?php echo $province->desc_th; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control"  name="zipcode" />
                                    
                                    </div>

                                </fieldset>
                                </div>

                            </div>
                        </div>

                    </fieldset>
                    </div>
                    <!-- form start -->

                    <div class="tab-pane" id="tab_product">
                    <div class="form-group">
                    <input type="hidden" id="other_percentage" name="other_percentage"/>
                    <fieldset>
                        <legend>รายละเอียดสินค้า</legend>
                        <div id="input_item" class="handsontable">
                        </div>
                        <div class="summary" > 
                            
                        </div>
                    </fieldset>
                    </div>

                    <button class="btn btn-primary save-btn">Save</button>
                    <button class="btn btn-danger save-btn cancel">Cancel</button>
                    </div>
                 </div>
                </div>
                </form>
           
            <div class="overlay" style="display:none"></div>
            <div class="loading-img" style="display:none"></div>
            <!-- COMPOSE MESSAGE MODAL -->
                <div class="modal fade" id="customer-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-tags"></i>ADD CUSTOMER</h4>
                            </div>
                            
                            <form class="modal-form"  method="post" action="#">

                                <div class="modal-body">
                                    <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-primary">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Search customer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="box-body">
                                                     <div class="form-group">
                                                        <input type="text" name="search_name" class="form-control" placeholder="search by name"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="search_telephone" class="form-control" placeholder="search by telephone number"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="search_line" class="form-control" placeholder="search by line name"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="search_email" class="form-control" placeholder="search by email"/>
                                                    </div>
                                                    <div class="form-group">
                                                            <button class="btn btn-info btn-flat" id="search-submit" type="button">Search</button>
                                                    </div>
                                                    <table id="customer-search-list" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Surname</th>
                                                                <th>Email</th>
                                                                <th>Line Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="customer-search-listbody">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel box box-primary">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Add New customer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="box-body">
                                                <div class="form-group">
                                                      <input type="text" name="custom_name" class="form-control"  placeholder="ชื่อ.."/>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" name="custom_surname" class="form-control" placeholder="นามสกุล.."/>
                                                  </div>
                                                 <div class="form-group">
                                                      <input type="text" name="custom_email" class="form-control"  placeholder="email.."/>
                                                 </div>
                                                 <div class="form-group">
                                                       <input type="text" name="custom_line_id" class="form-control"  placeholder="line Name.."/>
                                                 </div>
                                                 <div class="form-group">
                                                       <input type="text" name="custom_telephone_no" class="form-control"  placeholder="telephone no.."/>
                                                 </div>
                                                 <div class="form-group">
                                                       <button class="btn btn-info btn-flat" id="add-customer-submit" type="button">Add</button>
                                                 </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>

    </div>
    <!--/.col (left) -->
    <script>

        $(function () {
            $('#btnnext').click(function(){
              $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });
             $('#search_customer').click(function(e)
            {
                    e.preventDefault();
                    $('#customer-modal').modal('show');
            });
             $('#search-submit').click(function(e)
             {
                      e.preventDefault();
                      var search_name = $('input[name="search_name"]').val();
                      var search_email  = $('input[name="search_email"]').val();
                      var search_line  = $('input[name="search_line"]').val();
                      var search_telephone = $('input[name="search_telephone"]').val();
                      getCustomerlist(search_name,search_email,search_line,search_telephone);
             });
             $('#add-customer-submit').click(function(e)
             {
                    e.preventDefault();
                    var customer = {};
                    customer['id'] = '';
                    customer['name'] = $('input[name="custom_name"]').val();
                    customer['surname'] = $('input[name="custom_surname"]').val();
                    customer['email'] = $('input[name="custom_email"]').val();
                    customer['line_id'] = $('input[name="custom_line_id"]').val();
                    customer['telephone_no'] = $('input[name="custom_telephone_no"]').val();
                    prepopCustomerForm(customer);
             });
            $('.cancel').click(function () {
                window.location.replace('<?= site_url("sale/all"); ?>');
            });
            $('#channel_id').change(function()
            {
                var discount = $(this).find(':selected').attr('discount');
                $('#other_percentage').val(discount);
            });

            <?php $barcode_array = array(); 
            foreach($query_product_list->result() as $row) {
                $barcode_array[] = $row->korea_barcode;
            }
            $barcode_string = implode(',', $barcode_array) ?>
                <?php
            if (!empty($order_id)) { ?>
                    $('input[name="order_id"]').val('<?php echo $order_id ?>'); <?php
            } ?>
                <?php
            if (!empty($name)) { ?>
                    $('input[name="name"]').val('<?php echo $name ?>'); <?php
            } ?>
             <?php
            if (!empty($surname)) { ?>
                    $('input[name="surname"]').val('<?php echo $surname ?>'); <?php
            } ?>
             <?php
            if (!empty($customer_id)) { ?>
                    $('input[name="customer_id"]').val('<?php echo $customer_id ?>'); <?php
            } ?>
            <?php
            if (!empty($line_id)) { ?>
                    $('input[name="line_id"]').val('<?php echo $line_id ?>'); <?php
            } ?>
            <?php
            if (!empty($email)) { ?>
                    $('input[name="email"]').val('<?php echo $email ?>'); <?php
            } ?>
              <?php
            if (!empty($telephone_no)) { ?>
                    $('input[name="telephone_no"]').val('<?php echo $telephone_no ?>'); <?php
            } ?>
        

            <?php
            if (!empty($channel_id)) { ?>
                    $('select[name="channel_id"]').val('<?php echo $channel_id ?>'); <?php
            } ?>
            <?php 
            if(!empty($address_id)) {?>
                $('input[name="address_id"]').each(function(){
                    console.log('value'+$(this).val());
                    if($(this).val() == '<?php echo $address_id; ?>')
                    {

                        $(this).prop('checked', true);
                    }
                });
            <?php  } ?>
            var data = []; <?php
            if (!empty($sale_item)) { ?>
                    <?php foreach($sale_item->result() as $row) {
                        $name_array = explode("\n", $row->product_name);
                
                        if (sizeof($name_array) > 1) { ?>
                            var temp_product_name = ["<?php echo $name_array[0] ?>", "<?php echo $name_array[1] ?>"].join('\n'); <?php
                        } else { ?>
                            var temp_product_name = ["<?php echo $name_array[0] ?>"].join('');

                            <?php
                        } ?>
                            data.push({
                                'korea_barcode': '<?php echo $row->korea_barcode ?>',
                                'product_name': temp_product_name,
                                'amount': '<?php echo $row->amount ?>',
                                'sum_amount': '<?php echo $row->amount * $row->price ?>',
                                'mt_price':'<?php echo $row->market_price ?>',
                                'price': '<?php echo $row->price ?>',
                                'percent_discount':'<?php echo $row->percent_discount ?>',
                            }); <?php
                } ?>
                    <?php
            } ?>

            var korea_barcode_string_set = '<?php echo $barcode_string; ?>';
            var korea_barcode_array = korea_barcode_string_set.split(',');
            var $container = $('#input_item');
            initTable('input_item',data);


            $('.save-btn').click(function (evt) {
                evt.preventDefault();
                var province_id = $('select[name=province_id]').val();
                var order_id = $('input[name="order_id"]').val();
                var channel_id =  $('select[name="channel_id"]').val();
                var payment_date = $('input[name="payment_date"]').val();
                var customer_id = $('input[name="customer_id"]').val();
                var name = $('input[name="name"]').val();
                var surname = $('input[name="surname"]').val();
                var address_id = $('input[name="address_id"]:checked').val();
                var address =  $('textarea[name="address"]').val();
                var line_id = $('input[name="line_id"]').val();
                var email =  $('input[name="email"]').val();
                var telephone_no =  $('input[name="telephone_no"]').val();
                var zipcode = $('input[name="zipcode"]').val();
                var new_address_id =  $('input[name="new_address_id"]:checked').val();
                myApp.showPleaseWait();
                $.ajax({
                    url: "<?php echo base_url(); ?>sale/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "customer_id": customer_id,
                        "address_id":address_id,
                        "name":name,
                        "surname":surname,
                        "address":address,
                        "line_id":line_id,
                        "email":email,
                        "address": address,
                        "order_id": order_id,
                        "channel_id":channel_id,
                        "telephone_no":telephone_no,
                        "zipcode":zipcode,
                        "new_address_id":new_address_id,
                        "province_id":province_id
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            $('input[name="order_id"]').val(res.order_id);
                            window.location.replace('<?php echo base_url(); ?>sale/all');
                        } else {
                            $('input[name="order_id"]').val(res.order_id);
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        myApp.hidePleaseWait();
                        alert('Save error');
                    }
                });
            });

        });
    </script>
