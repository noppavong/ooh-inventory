<div class="row">
    <script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
    <link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">credit_note edit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="<?php echo site_url('credit_note/create_credit_note'); ?>">
                    <!-- text input -->
                    <input type="hidden" name="credit_note_id" />
                      <div class="form-group">
                        <label>credit_note no</label>
                        <input type="text" name="credit_note_no" class="form-control"/>
                      </div>
                    <input type="hidden" name="data" />
                    <div class="form-group">
                        <label>วันที่จด</label>
                        <input type="text" class="form-control focus.inputmask" name="create_date" id="create_date" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="form-group">
                        <label>บริษัท</label>
                        <select class="form-control" name="store_code">
                            <option value="">เลือก</option>
                            <?php if(!empty($query_store_list)) { ?>
                            <?php foreach ($query_store_list->result() as $store) { ?>
                            <option value="<?php echo $store->code; ?>" <?php echo set_select( 'store_code', $store->code, $store->code == $store_code); ?> >
                                <?php echo $store->short_name; ?></option>
                            <?php } ?>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group custom_store_code">
                        <label>รหัส บริษัท(manual)</label>
                               <input id="custom_store_code" name="custom_store_code" class="form-control" />  
                    </div>
                    <div class="form-group custom_store_name">
                        <label>ชื่อ บริษัท(manual)</label>
                               <input id="custom_store_name" name="custom_store_name" class="form-control" />  
                    </div>

                    <div class="form-group custom_tax_id">
                        <label>เลขประจำตัวผู้เสียภาษี(manual)</label>
                                <input type="text" name="custom_tax_id" id="custom_tax_id" />
                    </div>
                    <div class="form-group custom_store_address">
                        <label>ที่อยู่บริษัท(manual)</label>
                               <textarea row="10" style="height:100px;" id="custom_store_address" name="custom_store_address" class="form-control" ><?php echo $custom_store_address ?></textarea>  

                    </div>
                    <?php if(!empty($credit_note_id)) { ?>
                        <div class="form-group">
                            <label>สถานะ</label>
                            <select class="form-control" name="status">
                                <option value="">เลือก</option>
                                <option value="created">created</option>
                                <option value="cancel">cancel</option>
                            </select>
                        </div>
                    <?php } ?>
                       <div class="form-group">
                          <label>รายละเอียด(กรณีต้องการทำใบลดหนี้แบบไม่ระบุสินค้า)</label>
                          <input type="text" id="sum_description" name="sum_description" class="form-control" />                                                             
                      </div>  
                     <div class="form-group">
                          <label>จำนวนเงิน(กรณีต้องการทำใบลดหนี้แบบไม่ระบุสินค้า)</label>
                          <input type="text" id="sum_value" name="sum_value" class="form-control" />                                                             
                      </div> 
                     <div class="form-group">
                      <label>อ้างถึงใบส่งสินค้า</label>
                      <input type="text" id="ref_invoice_no" name="ref_invoice_no" class="form-control" />                                                             
                  </div>  
                     <div class="form-group">
                      <label>return to vendor</label>
                      <input type="text" id="rtv" name="rtv" class="form-control" class="form-control"/>                                                             
                  </div> 
                  <div class="form-group">
                      <label>หมายเหตุ***</label>
                      <input type="text" id="remark" name="remark" class="form-control" class="form-control" placeholder="มีการลดราคาสินค้าที่ขายเนื่องจากสินค้าผิดข้อกำหนดที่ตกลงกัน,สินค้าชำรุดบกพร่อง"/>                                                             
                  </div> 

                <div class="form-group">
                  <label>gp</label>
                  <input type="text" id="gp" name="gp" class="form-control" />                                                             
                </div>  

                <div class="form-group">
                  <label>รหัสฝากขาย</label>
                  <input type="text" id="customer_code" name="customer_code" class="form-control" />                                                             
                </div>
                <div class="form-group">
                  <label>ส่วนลดพิเศษ</label>
                  <input type="text" id="special_discount" name="special_discount" class="form-control" />                                                             
                </div>   
                    <!-- form start -->
                    <div class="form-group">
                        <label>รายละเอียดสินค้า</label>
                        <div id="input_credit_note" class="handsontable">
                        </div>
                    </div>
                    <button id="save-btn-creditnote" class="btn btn-primary save-btn">Save</button>
                    <button class="btn btn-danger save-btn cancel">Cancel</button>
                </form>
            </div>
            <div class="overlay" style="display:none"></div>
            <div class="loading-img" style="display:none"></div>
        </div>

    </div>
    <!--/.col (left) -->
    <script>
        $(function () {
            $('.cancel').click(function () {
                window.location.replace('<?php echo site_url("credit_note/all"); ?>')
            });
            //Datemask2 mm/dd/yyyy
            <?php $barcode_array = array();
            foreach($query_product_list->result() as $row) {
                $barcode_array[] = $row->korea_barcode;
            }
            $barcode_string = implode(',', $barcode_array) ?>
                <?php
            if (!empty($credit_note_id)) { ?>
                    $('input[name="credit_note_id"]').val('<?php echo $credit_note_id ?>'); <?php
            } ?>
                <?php
            if (!empty($create_date)) { ?>
                    $('input[name="create_date"]').val('<?php echo $create_date ?>'); <?php
            } ?>
             <?php
            if (!empty($remark)) { ?>
                    $('input[name="remark"]').val('<?php echo $remark ?>'); <?php
            } ?>
            <?php
            if (!empty($credit_note_no)) { ?>
                    $('input[name="credit_note_no"]').val('<?php echo $credit_note_no ?>'); <?php
            } ?>
             <?php
            if (!empty($sum_description)) { ?>
                    $('input[name="sum_description"]').val('<?php echo $sum_description ?>'); <?php
            } ?>
               <?php
            if (!empty($sum_value)) { ?>
                    $('input[name="sum_value"]').val('<?php echo $sum_value ?>'); <?php
            } ?>
            <?php
            if (!empty($ref_invoice_no)) { ?>
                    $('input[name="ref_invoice_no"]').val('<?php echo $ref_invoice_no ?>'); <?php
            } ?>
             <?php
            if (!empty($customer_code)) { ?>
                    $('input[name="customer_code"]').val('<?php echo $customer_code ?>'); <?php
            } ?>
              <?php
            if (!empty($gp)) { ?>
                    $('input[name="gp"]').val('<?php echo $gp ?>'); <?php
            } ?>
            <?php
            if (!empty($rtv)) { ?>
                    $('input[name="rtv"]').val('<?php echo $rtv ?>'); <?php
            } ?>
             <?php if (!empty($status)) { ?>
                    $('select[name="status"]').val('<?php echo $status; ?>'); <?php
            } ?>
              <?php
            if (!empty($special_discount)) { ?>
                    $('input[name="special_discount"]').val('<?php echo $special_discount ?>'); <?php
            } ?>
               <?php
            if (!empty($custom_tax_id)) { ?>
                    $('input[name="custom_tax_id"]').val('<?php echo $custom_tax_id ?>'); <?php
            } ?>
             <?php
            if (!empty($custom_store_name)) { ?>
                    $('input[name="custom_store_name"]').val('<?php echo $custom_store_name ?>'); <?php
            } ?>
            <?php
             if (!empty($custom_store_code)) { ?>
                    $('input[name="custom_store_code"]').val('<?php echo $custom_store_code ?>'); <?php
            } ?>
              <?php if($store_code != "other") { ?>
                $('.custom_tax_id').hide();
                $('.custom_store_name').hide();
                $('.custom_store_address').hide();
                $('.custom_store_code').hide();

            <?php } ?>
                $("#create_date").inputmask("dd/mm/yyyy", {
                    "placeholder": "dd/mm/yyyy"
                });

            var data = []; <?php
            if (!empty($credit_note_detail)) { ?>
                    <?php foreach($credit_note_detail->result() as $row) {
                        $name_array = explode("\n", $row->product_name);
                        if (sizeof($name_array) > 1) { ?>

                            var temp_product_name = ['<?php echo $name_array[0] ?>', '<?php echo $name_array[1] ?>'].join('\n'); <?php
                        } else { ?>
                            var temp_product_name = ["<?php echo $name_array[0] ?>"].join('');

                            <?php
                        } ?>
                            data.push({
                                'korea_barcode': '<?php echo $row->korea_barcode ?>',
                                'product_name': temp_product_name,
                                'amount': '<?php echo $row->amount ?>',
                                'mt_price': '<?php echo $row->mt_price ?>', 
                                'price': '<?php echo $row->price ?>',
                                'price_with_amount':'<?php echo $row->price * $row->amount ?>'
                            }); <?php
                } ?>
                    <?php
            } ?>
            var korea_barcode_string_set = '<?php echo $barcode_string; ?>';
            var korea_barcode_array = korea_barcode_string_set.split(',');
            initTable2('input_credit_note',data,{discount:'<?php echo $percent_discount ?>'});
            $('select[name=store_code]').change(function(){
                getGpAndCustomerCode($(this).val(),$('#gp'),$('#customer_code'));
            });
          
            });
    </script>
