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
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="<?php echo site_url('invoice/create_invoice'); ?>">
                    <!-- text input -->
                    <input type="hidden" name="invoice_id" />
                      <div class="form-group">
                        <label>invoice no</label>
                        <input type="text" name="invoice_no" class="form-control"/>
                      </div>
                    <input type="hidden" name="is_sub_issue" />
                    <input type="hidden" name="data" />
                    <div class="form-group">
                        <label>วันที่จด</label>
                        <input type="text" class="form-control focus.inputmask" name="create_date" id="create_date" placeholder="dd/mm/yyyy">
                    </div>
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
                    
                    <?php if(!empty($invoice_id)): ?>
                        <div class="form-group">
                            <label>สถานะ</label>
                            <select class="form-control" name="status">
                                <option value="">เลือก</option>
                                <option value="created">created</option>
                                <option value="cancel">cancel</option>
                            </select>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                      <label>เลขที่ใบสั่งซื้อ</label>
                      <input type="text" id="ref_order_no" name="ref_order_no" class="form-control" />                                                             
                    </div>  

                    <!-- form start -->
                    <div class="form-group">
                        <label>รายละเอียดสินค้า</label>
                        <div id="input_invoice" class="handsontable">
                        </div>
                        <div class="summary" > 
                            
                        </div>
                    </div>
                    <button class="btn btn-primary back-btn">Back</button>
                </form>
            </div>
            <div class="overlay" style="display:none"></div>
            <div class="loading-img" style="display:none"></div>
        </div>

    </div>
    <!--/.col (left) -->
    <script>
        $(function () {
            $('.back-btn').click(function () {
                window.location.replace('<?= site_url("invoice/all"); ?>');
            });

            <?php $barcode_array = array(); 
            foreach($query_product_list->result() as $row) {
                $barcode_array[] = $row->korea_barcode;
            }
            $barcode_string = implode(',', $barcode_array) ?>
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
                            }); <?php
                } ?>
                    <?php
            } ?>

            var korea_barcode_string_set = '<?php echo $barcode_string; ?>';
            var korea_barcode_array = korea_barcode_string_set.split(',');
            var $container = $('#input_invoice');
            initTable2('input_invoice',data,{discount:'<?php echo $percent_discount ?>',readonly:true});
            

            $('input').attr('readonly','readonly');
            $('select').attr('disabled','disabled');
        });
    </script>
