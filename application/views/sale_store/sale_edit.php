<div class="row">
<script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
<link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                    <h3 class="box-title">SALE</h3>
            </div><!-- /.box-header -->
            <div class="box-body"> 
                <form role="form">
                    <!-- text input -->
                  <input type="hidden" name="sale_id" />
                  <div class="form-group">
                        <label>วันเริ่มต้นขาย</label>
                    <input type="text" class="form-control focus.inputmask" name="sale_start_date" id="sale_start_date" placeholder="dd/mm/yyyy">
                  </div>
                   <div class="form-group">
                        <label>วันสิ้นสุดขาย</label>
                    <input type="text" class="form-control focus.inputmask" name="sale_end_date" id="sale_end_date" placeholder="dd/mm/yyyy">
                  </div>
                    <div class="form-group">
                            <label>สาขา</label>
                            <select class="form-control" name="store_code">
                                <option value="" > เลือก </option>
                                <?php if(!empty($query_store_list)) { ?>
                                    <?php foreach ($query_store_list->result() as $store) { ?>                            
                                        <option value="<?php echo $store->code; ?>" <?php echo set_select('store_code', $store->code, $store->code == $store_code); ?> ><?php echo $store->short_name; ?> </option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                    </div>
                </form>
            <!-- form start -->
          <div class="form-group">
             <label>รายละเอียดการขาย</label>
            <div id="input_sale" class="handsontable">
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
    window.location.replace('<?php echo site_url("sale/all"); ?>')
  });
                //Datemask2 mm/dd/yyyy
<?php $barcode_array = array();
  foreach ($query_product_list->result() as $row) { 
    $barcode_array[] = $row->korea_barcode;  
  }
  $barcode_string = implode(',', $barcode_array)
?> 
<?php if(!empty($sale_id)) {?>
  $('input[name="sale_id"]').val('<?php echo $sale_id ?>');
<?php } ?>
<?php if(!empty($sale_start_date)) {?>
  $('input[name="sale_start_date"]').val('<?php echo $sale_start_date ?>');
<?php } ?>
<?php if(!empty($sale_end_date)) {?>
  $('input[name="sale_end_date"]').val('<?php echo $sale_end_date ?>');
<?php } ?>
 $("#sale_start_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
 $("#sale_end_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

       var data = []; <?php
            if (!empty($sale_detail)) { ?>
                    <?php foreach($sale_detail->result() as $row) {
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
                                'qty': '<?php echo $row->qty ?>',
                                'net_payment': '<?php echo $row->net_payment ?>',
                                'net_sale': '<?php echo $row->net_sale ?>',
                                'sale_gp_normal':'<?php echo $row->sale_gp_normal ?>',
                                'sale_gp_special':'<?php echo $row->sale_gp_special ?>',
                            }); <?php
                } ?>
                    <?php
            } ?>
            var korea_barcode_string_set = '<?php echo $barcode_string; ?>';
            var korea_barcode_array = korea_barcode_string_set.split(',');
            var product_name_column = 1;
            var $container = $('#input_sale');
            var get_update_data = function (change_korea_barcode, change_row) {
                var change_value = change_korea_barcode.join(',');
                console.log(change_value);
                $.get('/sale/get_product_by_barcode/', {
                        data: change_value
                    },
                    function (data) {
                        console.log('get_product_by_barcode');
                        console.log(data);
                        for (var index = 0; index < data.length; index++) {
                            $('#input_sale').handsontable('setDataAtCell', change_row[index], 6, data[index].product_name);
                        }
                        // $.get('/stock/get_cost_by_barcode/', {
                        //         data: change_value
                        //     },
                        //     function (data) {
                        //         console.log('get_cost_by_barcode');
                        //         console.log(data);
                        //         for (var index = 0; index < data.length; index++) {
                                   
                        //             $('#input_stock').handsontable('setDataAtCell', change_row[index], 2, Math.ceil(data[index].cost));
                           
                        //         }
                        //     });
                    });
                //var korea_barcode =  $('#input_stock').handsontable('getDataAtCell', change_row[index], 0);


            };
            $('#input_sale').handsontable({
                data: data,
                dataSchema: {
                    korea_barcode: null,
                    qty: null,
                    net_sale: null,
                    net_payment: null,
                    sale_gp_normal:null,
                    sale_gp_special:null,
                    product_name: null,
                },
                minSpareRows: 2,
                minSpareCols: 6,
                maxCols: 6,
                colWidths: [150, 100,100,100,100,100, 200],
                contextMenu: true,
                colHeaders: ['korea barcode'
                ,'quantity'
                ,'net sale'
                ,'net payment'
                ,'gp normal'
                ,'gp special'
                ,'product name'],
                columns: [{
                    data: "korea_barcode",
                }, {

                    data: "qty",
                    type: 'numeric',

                },{

                    data: "net_sale",
                    type: 'numeric',
                    format: '0.00'

                }, {

                    data: "net_payment",
                    type: 'numeric',
                    format: '0.00'

                }, {

                    data: "sale_gp_normal",
                    type: 'numeric',
                    format: '0.00'

                }, {

                    data: "sale_gp_special",
                    type: 'numeric',
                    format: '0.00'

                },{
                    data: "product_name",
                    readOnly: true
                }, ],
                afterChange: function (changes, source) {
                    console.log(changes);
                    if (changes) {
                        //do set column 

                        var change_row_list = [];
                        var change_value_list = [];
                        for (var i = 0; i < changes.length; i++) {
                            var change_row = changes[i][0];
                            var change_column = changes[i][1];
                            var change_value = changes[i][3];
                            if (change_column === "korea_barcode") {
                                console.log('change_value' + change_value);
                                change_row_list.push(change_row);
                                change_value_list.push(change_value);
                            }

                        }
                        if (change_row_list.length > 0) {
                            get_update_data(change_value_list, change_row_list);
                        }

                        $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
                    }
                    var ht = $('#input_sale').handsontable('getInstance');
                    ht.selectCell(change_row + 1, change_column);
                },
            });
            console.log(JSON.stringify($container.data('handsontable').getData()));
            $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
            $('.save-btn').click(function (evt) {
                evt.preventDefault();
                var store_code = $('select[name=store_code]').val();
                var sale_start_date = $('input[name=sale_start_date]').val();
                var sale_end_date = $('input[name=sale_end_date]').val();
                var sale_id = $('input[name="sale_id"]').val();
                $.ajax({
                    url: "/sale/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "store_code": store_code,
                        "sale_start_date":sale_start_date,
                        "sale_end_date": sale_end_date,
                        "sale_id": sale_id,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        if (res.result === 'ok') {
                            if (res.sale_id) {
                                $('input[name="sale_id"]').val(res.sale_id);
                            }            
                           window.location.replace('/sale/all');
                        } else {
                            if (res.sale_id) {
                                $('input[name="sale_id"]').val(res.sale_id);
                            }
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        console.log('Save error');
                    }
                });
            });

        });
    </script>