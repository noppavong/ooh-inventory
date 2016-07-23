<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Pricing list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <form role="form" method="POST" action="#"  id="search-form">
                                        <div class="form-group">
                                                <input name="product_korea_barcode" id="product_korea_barcode" type="text" class="form-control" placeholder="รหัสสินค้า"></input>
                                        </div>
                                        <div class="form-group">
                                                <input name="product_name" id="product_name" type="text" class="form-control" placeholder="ชื่อสินค้า"></input>
                                        </div>
                                     <!--    <div class="form-group">
                                            <input name="column_check[]" type="checkbox" value="0"/><span> Product image </span> 
                                        </div> -->
                                        <div class="form-group">
                                        <a  class="btn btn-primary" href="<?php echo site_url('pricing/export')?>" > export</a>
                                    </div>
                                     </form>   
                                    <table id="pricing_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product image</th>
                                                <th>Korea barcode (EAN13)</th>
                                                <th>Thai barcode</th>
                                                <th>Product name</th>
                                                <th>korea retail (won)</th>
                                                <th>pricing for stockist</th>
                                                <th>cost(Baht)</th>
                                                <th>MT Price</th>
                                                <th>Normal Promotion</th>
                                                <th>Big Sale</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_pricing_list)){ ?>
                                                <?php foreach ($query_pricing_list->result() as $row) { ?>
                                                    <tr>
                                                        <td><img src="<?php echo site_url('assets/uploads/'.$row->file_name); ?>" /></td>
                                                        <td><?php echo $row->korea_barcode ?></td>
                                                        <td><?php echo $row->thai_barcode ?></td>
                                                        <td><?php echo $row->product_name ?></td>
                                                        <td><?php echo $row->korea_retail ?></td>
                                                        <td><?php echo $row->price_for_stockist ?></td>
                                                        <td><?php echo $row->cost_baht ?></td>
                                                        <td><?php echo $row->mt_price ?></td>
                                                        <td><?php echo $row->normal_promotion ?></td>
                                                        <td><?php echo $row->big_sale ?></td>
                                                        <td><a href="<?php echo site_url('pricing/upload_form/'.$row->korea_barcode) ?>" class="btn btn-primary"> UPLOAD IMAGE </a></td>

                                                          </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
                  <script type="text/javascript">
            $(function() {
                // {columnDefs: [
                //            {"targets": [ 0 ],visible:false} 
                //            ,{"targets": [ 8],visible:false}
                //            ,{"targets": [ 9],visible:false}
                //          ]}
                 var table =    $("#pricing_table").dataTable( {
                        "iDisplayLength": 100
                      } );
                    $('.dataTables_filter').css('display','none');
                   $( '#product_korea_barcode' ).on( 'keyup change', function () {
                       table.api()
                            .column( 1 )
                            .search( this.value )
                            .draw();
                    } );
                   $( '#product_name' ).on( 'keyup change', function () {
                       table.api()
                            .column( 3 )
                            .search( this.value )
                            .draw();
                    } );
                    // $('input').on('ifChecked', function(event){
                    //         // Get the column API object
                    //         var column = table.api().column( event.target.value );
                    //         // Toggle the visibility
                    //         column.visible( ! column.visible() );
                    // } );
                    //  $('input').on('ifUnchecked', function(event){
                    //         // Get the column API object
                    //         var column = table.api().column( event.target.value );
                    //         // Toggle the visibility
                    //         column.visible( ! column.visible() );
                    // } );
            });
        </script>
</div>