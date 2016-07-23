<div class="row">
    <script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
    <link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">invoice edit</h3>
            </div>

            <?php $barcode_array = array(); 
            foreach($query_product_list->result() as $row) {
                $barcode_array[] = $row->korea_barcode;
            }
            $barcode_string = implode(',', $barcode_array) ?>
            <!-- /.box-header -->
            <div class="hidden_barcode hide"><?php echo $barcode_string; ?></div>
            <div class="box-body">
                <form role="form" method="post" action="<?php echo site_url('invoice/create_invoice'); ?>">
                    <!-- text input -->

                    <input type="hidden" name="invoice_id" />
                    <input type="hidden" name="is_sub_issue" />
                    <input type="hidden" name="data" />
                    <div class="col-md-5">
                        <strong style="margin:0px;">
                        บริษัท วีเทรนด์ อินเตอร์เทรด จำกัด (สำนักงานใหญ่)
                        </strong>
                        <h4 style="margin:0px;">
                            VTREND INTERTRADE CO.,LTD.
                        </h4>

                        <p>
                        158 หมู่ 6 ถ.สุขุมวิท ต.สำโรงเหนือ อ.เมือง จ.สมุทรปราการ 10270<br/>
                        Tel. 086-6020988 เลขประจำตัวผู้เสียภาษีอากร 0115556018561
                    </p>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">
                        <label style="width:20%">เลขที่</label>
                        <input type="text" name="invoice_no" class="form-control" style="width:50%;display:inline-block" />       
                       
                      </div>

                      <div class="form-group">
                        <label style="width:20%">วันที่</label>
                        <input type="text" class="form-control focus.inputmask"  style="width:50%;display:inline-block" name="create_date" id="create_date" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="width:60%;margin-left:20%;margin-right:20%;text-align:center;color:white;background-color:black;font-size:1em;" >ต้นฉบับ</div>
                       <div style="width:100%;text-align:center">
                        <p style="margin:0px;">ใบส่งสินค้า/ใบกำกับภาษี</p>
                        <h4 style="margin:0px;"> DELIVERY<br/>
                        ORDER/TAX INVOICE</h4>
                    </div>

                    </div>
                    <br style="clear:both"/>
                    <table  style="width:100%">
                        <tr>
                        <td class="col-md-8" style="border: double">
                            
                            <div class="form-group">
                                <label>บริษัท</label>
                                <select class="form-control" name="store_code">
                                    <option value="">เลือก</option>
                                    <?php if(!empty($query_store_list)): ?>
                                        <?php foreach($query_store_list->result() as $store):?>
                                            <option value="<?php echo $store->code; ?>" 
                                                <?php echo set_select( 'store_code', $store->code, $store->code == $store_code); ?> >
                                                <?php echo $store->short_name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-md-3"  style="padding-right:0px;padding-left:0px;">
                               <label class="store-code-label"> รหัสลูกค้า </label>

                                <input type="text" name="custom_store_code" id="custom_store_code" />
                               <span id="store_code_label" ><?php echo $store_code; ?> </span>
                            </div>
                             <div class="col-md-9">
                                <label style="width:50%"> เลขประจำตัวผู้เสียภาษี </label>
                                <input type="text" name="custom_tax_id" id="custom_tax_id" />
                                <span id="tax_no" ><?php echo $tax_no ?> </span>
                             </div>
                             <br/> 

                            <div class="col-md-7" style="padding-right:0px;padding-left:0px;">

                                <div class="store_name-label" style="width:20%;padding-left:0;min-height:22px;padding-left:none;text-align:left">
                                <div style="display:block"> นามลูกค้า</div></div>
                               <span id="store_name" class="store_name-value" style="width:77%" ><?php echo $store_name ?></span>
                               <input id="custom_store_name" name="custom_store_name" class="custom_store_name-value" style="width:77%" />
                            </div>
                             <div class="col-md-5">
                               <!--  <label style="width:40%;padding-left:5%"> รหัสสาขา</label>
                                <span id="branch_code"  ><?php echo $branch_code ?> </span> -->
                             </div>
                             <br/>
                             <style>
                             .store-code-label{
                                width:71px;
                                text-align: left;
                             }
                              .address-label,.store_name-label{
                                    width:71px;
                                    display:inline-block;
                                    font-weight:bold;
                                    min-height:22px;
                                    vertical-align:middle;
                                    float:left;
                              }
                             .custom_address-value,.address-value,.store_name-value,.custom_store_name-value{
                                    width:70%;
                                    display:inline-block;
                              }
                              #custom_store_code{
                                width:90px;
                              }
                              .wtHider{

                                min-height:80px!important;
                              }
                             </style>
                             <div class="col-md-12" style="padding-left:0px;">
                                <div class="address-label">
                                <div style="display:block"> ที่อยู่</div></div>
                                <span id="address" class="address-value"><?php echo $address ?>
                                </span>
                                <textarea row="5" id="custom_store_address" name="customer_store_address" class="custom_address-value"><?php echo $custom_store_address ?>
                                </textarea>
                             </div>        
                        </td>
                        <td class="col-md-4" style="border:double">
                                <label >
                                    วันครบกำหนด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เงื่อนไขตามบริษัท
                                </label>

                            <br/>
                                <label > เลขที่ใบสั่งซื้อ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                              <input type="text" id="ref_order_no" name="ref_order_no" class="form-control" style="display:inline-block;width:40%" />      

                        </td>
                        </tr>
                    </table>
                    <br/>
                    <div class="col-md-9">
                        <div class="form-group" >
                            <label>รายละเอียดสินค้า</label>
                            <div id="input_invoice" class="handsontable">
                            </div>
                            <div class="summary" > 
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
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
                    </div>

                    <!-- form start -->
                    
                    <button id="save-btn-invoice" class="btn btn-primary save-btn">Save</button>
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
                window.location.replace('<?= site_url("invoice/all"); ?>');
            });

                <?php
            if (!empty($invoice_id)) { ?>
                    $('input[name="invoice_id"]').val('<?php echo $invoice_id ?>'); <?php
            } ?>
                <?php
            if (!empty($create_date)) { ?>
                    $('input[name="create_date"]').val('<?php echo $create_date ?>'); <?php
            } ?>

            <?php
            if (!empty($invoice_no)) { ?>
                    $('input[name="invoice_no"]').val('<?php echo $invoice_no ?>'); <?php
            } ?>
                
            <?php
            if (!empty($ref_order_no)) { ?>
                    $('input[name="ref_order_no"]').val('<?php echo $ref_order_no ?>'); <?php
            } ?>
            <?php
            if (!empty($customer_code)) { ?>
                    $('input[name="customer_code"]').val('<?php echo $customer_code ?>'); <?php
            } ?>
            <?php
            if (!empty($special_discount)) { ?>
                    $('input[name="special_discount"]').val('<?php echo $special_discount ?>'); <?php
            } ?>
              <?php
            if (!empty($gp)) { ?>
                    $('input[name="gp"]').val('<?php echo $gp ?>'); <?php
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
            <?php if($store_code == "other") { ?>
                $('#tax_no').hide();
                $('#store_name').hide();
                $('#address').hide();
                $('#store_code_label').hide();

            <?php }else { ?> 
                 $('#custom_tax_id').hide();
                $('#custom_store_name').hide();
                $('#custom_store_address').hide();
                $('#custom_store_code').hide();

            <?php } ?>
             <?php if (!empty($status)) { ?>
                    $('select[name="status"]').val('<?php echo $status; ?>'); <?php
            } ?>
                $("#create_date").inputmask("dd/mm/yyyy", {
                    "placeholder": "dd/mm/yyyy"
                });

            var data = []; <?php
            if (!empty($invoice_detail)) { ?>
                    <?php foreach($invoice_detail->result() as $row) {
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
                                'mt_price': '<?php echo $row->mt_price ?>', 
                                'price': '<?php echo $row->price ?>',
                                'price_with_amount':'<?php echo $row->price * $row->amount ?>'
                            }); <?php
                } ?>
                    <?php
            } ?>

            var korea_barcode_string_set = $('.hidden_barcode').html();
            var korea_barcode_array = korea_barcode_string_set.split(',');
            var $container = $('#input_invoice');
            initTable2('input_invoice',data,{discount:'<?php echo $percent_discount ?>'});
            $('select[name=store_code]').change(function(){
                get_store_detail($(this).val(),{'gp':$('#gp')
                    ,'customer_code':$('#customer_code')
                    ,'address':$('#address')
                    ,'store_code_label':$('#store_code_label')
                    ,'tax_no':$('#tax_no')
                    ,'store_name':$('#store_name')
                    ,'branch_code':$('#branch_code')

                    }
                    );
            });
          

        });
    </script>
