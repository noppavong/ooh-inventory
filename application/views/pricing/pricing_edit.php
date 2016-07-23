<div class="row">
        <script src="<?php echo site_url('assets/js/jquery.handsontable.full.js') ?>"></script>
    <link rel="stylesheet" media="screen" href="<?php echo site_url('assets/css/jquery.handsontable.full.css'); ?>">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
               	<h3 class="box-title">pricing</h3>             
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('pricing/save') ?>" method="POST"  enctype="multipart/form-data" >
                
                <div class="box-body">
                    <div class="form-group">
                        <label>รายละเอียดสินค้า (หน้านี้ จะ load จะ save จะช้าหน่อย)</label>
                        <div id="input_pricing" class="handsontable">
                        </div>
                     </div>
                </div><!-- /.box-body -->

                <div class="form-group">
                    <button class="btn btn-primary save-btn">Save</button>
                    <button class="btn btn-danger save-btn cancel">Cancel</button>
                </div>

            </form>
        </div><!-- /.box -->
        <script>
    $(document).ready(function() {
         var table = $('#input_pricing');
         var get_update_pricing_name = function (change_korea_barcode, change_row, table_id, change_index) {
          
            var change_value = change_korea_barcode.join(',');
            
            $.get('/ooh-inventory-test/ajaxutils/get_product_by_kbarcode/',{
                    data: change_value
            },
            function (data) {

                    for (var index = 0; index < change_korea_barcode.length; index++) {
                        
                        if(data[change_korea_barcode[index]])
                        {
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], change_index ,  data[change_korea_barcode[index]].product_name);
                        }
                    }
            });
        };

         $.get('<?php echo  site_url(); ?>ajaxutils/get_all_pricing/',
             function(data) {
                 $('#input_pricing').handsontable({
                     data: data,
                     dataSchema: {
                         id: null,
                         product_korea_barcode: null,
                         product_name: null,
                         korea_retail:null,
                         price_for_stockist:null,
                         cost_baht:null,
                         mt_price: null,
                     },
                     minSpareRows: 2,
                     minSpareCols: 6,
                     colWidths: [200, 100,100,100,100,200],
                     contextMenu: true,
                     colHeaders: ['korea barcode','korea_retail','price_for_stockist','cost_baht','mt_price/unit', 'name'],
                     cells: function(r, c, prop) {
                         var cellProperties = {};
                         var id = $('#input_pricing').handsontable('getDataAtRowProp', r, 'id');
                         if (id && c == 0) {
                             cellProperties.readOnly = true;
                         }
                         return cellProperties;
                     },
                     columns: [{
                         data: "product_korea_barcode",
                     }, {

                         data: "korea_retail",
                         type: 'numeric',
                         format: '0.00',
                     },  {

                         data: "price_for_stockist",
                         type: 'numeric',
                         format: '0.00',
                     },  {

                         data: "cost_baht",
                         type: 'numeric',
                         format: '0.00',
                     },  {

                         data: "mt_price",
                         type: 'numeric',
                         format: '0.00',
                     }, {

                         data: "product_name",
                     }, ]
                     ,afterChange: function (changes, source) {
                        if (changes) { 
                            var change_row_list = [];
                            var change_value_list = [];
                            for (var i = 0; i < changes.length; i++) {
                                var change_row = changes[i][0];
                                var change_column = changes[i][1];
                                var change_value = changes[i][3];
                                if (change_column === "product_korea_barcode") {
                                    if(change_value)
                                    {
                                        change_row_list.push(change_row);
                                        change_value_list.push(change_value);
                                    }
                                }
                            }
                            if (change_row_list.length > 0) {
                                get_update_pricing_name(change_value_list, change_row_list,'input_pricing',5);
                            }
                        }
                        var ht = $('#input_pricing').handsontable('getInstance');
                        ht.selectCell(change_row + 1, change_column);
                    }
                 });
             });
            $('.save-btn').click(function (evt) {
                evt.preventDefault();
                myApp.showPleaseWait();
                $.ajax({
                    url: "<?php echo base_url(); ?>pricing/save",
                    data: {
                        "data": table.data('handsontable').getData()
                    }, //returns all cells' data
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            window.location.replace('<?php echo base_url(); ?>pricing/all');
                        } else {
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
    </div><!--/.col (left) -->