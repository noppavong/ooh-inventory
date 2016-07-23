<div class="row">
<script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
<link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">SALE B2S</h3>
            </div><!-- /.box-header -->
            <div class="box-body"> 
                <form role="form" method="GET" action="<?php echo site_url('sale/summary_b2s'); ?>">
                    <!-- text input -->
                  
                  <div class="form-group">
                            <label>เดือน</label>
                            <select class="form-control" name="month_year">
                                <?php foreach($dropdown->result() as $row) { ?>
                                <option value="<?php echo $row->month_year ?>" > <?php echo $row->month_year; ?></option>
                                <?php } ?>
                            </select>  
                    </div>

                      <button type="submit" class="btn btn-primary save-btn">Search</button>
                </form>
            <!-- form start -->
          <div class="form-group">
             <label>ตารางการขายสินค้า b2s <?php if(!empty($select_month)){ echo 'เดิอน '.$select_month. '/'.$select_year; ; } ?> </label>
            <div id="input_sale" class="handsontable">
            </div>
          </div>
        </div>
 
    </div><!--/.col (left) -->
<script>
$(function(){
       var data = [];
       <?php if(!empty($handsondata)) { ?>
                    <?php foreach($handsondata as $row) {
                        $name_array = explode("\n", $row['product_name']);
                        if (sizeof($name_array) > 1) { ?>

                            var temp_product_name = ["<?php echo $name_array[0] ?>", "<?php echo $name_array[1] ?>"].join('\n'); <?php
                        } else { ?>
                            var temp_product_name = ["<?php echo $name_array[0] ?>"].join('');

                            <?php
                        } ?>
                       var  store_obj = {};
                        <?php foreach ($row['store'] as $store_code => $qty) {?>
                            <?php if($store_code !== "name"){ ?>
                             store_obj['<?php echo $store_code ?>'] = '<?php echo $qty;  ?>';
                            <?php }?>
                       <?php }?>
                        data.push({
                                'korea_barcode': '<?php echo $row["product_korea_barcode"] ?>',
                                'product_name': temp_product_name,
                                'store':store_obj
                            }); 
               <?php } ?>
        <?php } ?>
           
            $('#input_sale').handsontable({
                data: data,
                dataSchema: {
                    product_korea_barcode: null,
                    product_name:null,
                    store:{<?php foreach ($store_header as $row) { ?>
                    <?php echo $row['store_code'] ?>: null,
                    <?php } ?>

                    },
                },
                  columns: [
                    {data: "product_korea_barcode"},
                    {data: "product_name"},
                   <?php foreach ($store_header as $row) { ?>
                    {data:'<?php echo "store.".$row["store_code"] ?>'},
                    <?php } ?>
                  ],
                minSpareRows: 2,
                minSpareCols: <?php echo 2+sizeof($store_header); ?>,
                maxCols: <?php echo 2+sizeof($store_header); ?>,
                //colWidths: [200, 200, 200, 200],
                contextMenu: true,
                colHeaders: ['korea barcode','product_name'<?php foreach ($store_header as $row) { ?>,'<?php echo $row["short_name"]  ?>' <?php } ?>],
                cells: function(r,c, prop) {
                    var cellProperties = {};
                    cellProperties.readOnly = true;
                    return cellProperties;        
                }
                
            });

        });
    </script>