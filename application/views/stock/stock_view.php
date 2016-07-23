<div class="row">
<script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
<link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                    <h3 class="box-title">delivery</h3>
            </div><!-- /.box-header -->
            <div class="box-body"> 
                <form role="form">
                    <!-- text input -->
                  <input type="hidden" name="stock_transaction_id" />
                  <div class="form-group">
                        <label>วันที่จด</label>
                    <input type="text" class="form-control focus.inputmask" name="register_date" id="register_date" placeholder="dd/mm/yyyy">
                  </div>
                    <div class="form-group">
                            <label>สถานที่นำออก</label>
                            <select class="form-control" name="store_source_code">
                                <option value="" > เลือก </option>
                                <?php if(!empty($query_store_list)) { ?>
                                    <?php foreach ($query_store_list->result() as $store) { ?>                            
                                        <option value="<?php echo $store->code; ?>" <?php echo set_select('store_source_code', $store->code, $store->code == $store_source_code); ?> ><?php echo $store->short_name; ?> </option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>สถานที่นำเข้า</label>
                        <select class="form-control" name="store_destination_code">
                            <option value="" > เลือก </option>
                            <?php if(!empty($query_store_list)) { ?>
                                <?php foreach ($query_store_list->result() as $store) { ?>                            
                                    <option value="<?php echo $store->code; ?>" <?php echo set_select('store_destination_code', $store->code, $store->code == $store_destination_code); ?> ><?php echo $store->short_name; ?> </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    
                </form>
            <!-- form start -->
          <div class="form-group">
             <label>รายละเอียดสินค้า</label>
            <div id="input_stock" class="handsontable">
            </div>
          </div>
            <button class="btn btn-primary save-btn">Save</button>
            <button class="btn btn-danger save-btn cancel">Cancel</button>
          </div>
             <div class="overlay" style="display:none"></div>
             <div class="loading-img" style="display:none"></div>
        </div>
 
    </div><!--/.col (left) -->
<script>
$(function(){
  $('.cancel').click(function(){
    window.location.replace('<?php echo site_url("stock/all"); ?>')
  });
                //Datemask2 mm/dd/yyyy
<?php $barcode_array = array();
  foreach ($query_product_list->result() as $row) { 
    $barcode_array[] = $row->korea_barcode;  
  }
  $barcode_string = implode(',', $barcode_array)
?> 
<?php if(!empty($stock_transaction_id)) {?>
  $('input[name="stock_transaction_id"]').val('<?php echo $stock_transaction_id ?>');
<?php } ?>
<?php if(!empty($register_date)) {?>
  $('input[name="register_date"]').val('<?php echo $register_date ?>');
<?php } ?>
 $("#register_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

       var data = []; <?php
            if (!empty($stock_transaction_detail)) { ?>
                    <?php foreach($stock_transaction_detail->result() as $row) {
                        $name_array = explode("\n", $row->product_name);
                        if (sizeof($name_array) > 1) { ?>

                            var temp_product_name = ["<?php echo $name_array[0] ?>", "<?php echo $name_array[1] ?>"].join('\n'); <?php
                        } else { ?>
                            var temp_product_name = ["<?php echo $name_array[0] ?>"].join('');

                            <?php
                        } ?>
                            data.push({
                                'korea_barcode': '<?php echo $row->product_korea_barcode ?>',
                                'product_name': temp_product_name,
                                'previous_amount':<?php echo $row->previous_amount ?>,
                                'amount': <?php echo $row->cur_amount ?>,
                                'after_cut':<?php echo $row->previous_amount - $row->cur_amount ?>
                            }); <?php
                } ?>
                    <?php
            } ?>
            var korea_barcode_string_set = '<?php echo $barcode_string; ?>';
            var korea_barcode_array = korea_barcode_string_set.split(',');
            var product_name_column = 1;
            var $container = $('#input_stock');
            initStockTable('input_stock',data); 
            $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
            $('.save-btn').click(function (evt) {
                evt.preventDefault();
                var store_source_code = $('select[name=store_source_code]').val();
                var store_destination_code = $('select[name=store_destination_code]').val();
                var register_date = $('input[name=register_date]').val();
                var stock_transaction_id = $('input[name="stock_transaction_id"]').val();
                myApp.showPleaseWait();
                $.ajax({
                    url: "/stock/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "store_source_code": store_source_code,
                        "store_destination_code":store_destination_code,
                        "register_date": register_date,
                        "stock_transaction_id": stock_transaction_id,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            if (res.transaction_id) {
                                $('input[name="stock_transaction_id"]').val(res.transaction_id);
                            }            
                           window.location.replace('/stock/all');
                        } else {
                            if (res.transaction_id) {
                                $('input[name="stock_transaction_id"]').val(res.transaction_id);
                            }
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        myApp.hidePleaseWait();
                        console.log('Save error');
                    }
                });
            });

        });
    </script>