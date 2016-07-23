<style>
.details-control-icon {
   display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    cursor: pointer;
    -moz-osx-font-smoothing: grayscale;
    margin: 0 auto;
}
.details-control{
    cursor: pointer;
}
.details-control-icon:before {
    content: "\f067";
}
tr.shown .details-control-icon:before{
    content: "\f068";   
}
</style>
<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Delivery list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="delivery_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>order id </th>
                                                <th>delvery id </th>
                                                <th>tracking no</th>
                                                <th>ชื่อผูัรับ</th>
                                                <th>ที่อยู่ผู้รับ</th>
                                                <th>shipment fee</th>
                                                <th>package cost</th>
                                                <th>สถานะจัดส่ง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($display_delivery)){ ?>
                                                <?php foreach ($display_delivery as $row) { ?>
                                                    <tr>
                                                        <td class="details-control">
                                                            <span class="details-control-icon"></span>
                                                            <div class="row-detail" style="display:none">
                                                               <?php if($row->item){ ?>
                                                                <table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">
                                                                    <thead>
                                                                    <th style="width:100%"> Product Name </th>
                                                                    <th> Amount </th>
                                                                    <th> Price/Unit </th>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $summary = 0.00; ?>
                                                                    <?php foreach($row->item->result() as $item): ?>
                                                                    <tr>
                                                                        <td style="width:20%"><?php echo $item->product_name ?></td>
                                                                        <td><?php echo $item->amount ?></td>
                                                                        <td><?php echo number_format($item->price,2) ?></td>

                                                                    </tr>
                                                                    <?php $summary += $item->amount*$item->price; ?>
                                                                    <?php endforeach; ?>

                                                                </tbody>
                                                                  <?php if($summary > 0.00){ ?>
                                                                        <tfoot>
                                                                            <td> total </td>
                                                                            <td><?php echo number_format($summary,2) ?></td>
                                                                        </tfoot>
                                                                    <?php } ?>
                                                                </table>
                                                                <?php } ?>
                                                             </div>
                                                        </td>
                                                        <td><?php echo $row->delivery->order_id ?></td>
                                                        <td><?php echo $row->delivery->delivery_id ?></td>
                                                        <td><?php echo $row->delivery->tracking_no ?></td>
                                                        <td><?php echo $row->delivery->name.' '.$row->delivery->surname ?></td>
                                                        <td><?php echo $row->delivery->address; ?></td>
                                                        <td><?php echo  number_format($row->delivery->shipment_fee,2); ?></td>   
                                                         <td><?php echo  number_format($row->delivery->package_cost,2); ?></td>                                                     
                                                        <td>
                                                            <?php echo $row->delivery->status; ?>
                                                            <?php if(empty($row->delivery->status)) {?>
                                                                <a class="btn btn-info  button-modal" data-id="<?php echo $row->delivery->delivery_id ?>"
                                                                    data-order-id="<?php echo $row->delivery->order_id ?>"
                                                                 data-target="#delivery-modal"  >
                                                                <i class="fa fa-edit">
                                                                </i>ยืนยันการส่ง</a>
                                                            <?php } ?>
                                                        </td>
                                                        
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                        <!-- COMPOSE MESSAGE MODAL -->
                                    <div class="modal fade" id="delivery-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title"><i class="fa fa-tags"></i>Confirm Delivery</h4>
                                                    </div>
                                                    <form class="modal-form"  method="post" action="<?php echo site_url('delivery/confirm_delivery'); ?>">
                                                        <input id="delivery_id" type="hidden" name="delivery_id" />
                                                        <input id="order_id" type="hidden" name="order_id" />
                                                        <div class="modal-body">
                                                              <div class="form-group">
                                                                  <label>tracking no</label>
                                                                  <input type="name" id="tracking_no" name="tracking_no" class="form-control"  />
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>shipment fee</label>
                                                                  <input type="name" id="shipment_fee" name="shipment_fee" class="form-control"  />
                                                              </div>  
                                                              <div class="form-group">
                                                                  <label>package cost </label>
                                                                  <input type="name" id="package_cost" name="package_cost" class="form-control"  />
                                                              </div>
                                                               
                                                               
                                                        </div>
                                                        <div class="modal-footer clearfix">
                                                            <button type="submit" class="btn btn-primary pull-left btn-save"><i class="fa fa-save"></i> Confirm</button>
                                                            <button type="button" class="btn btn-danger remove" > Cancel </button>

                                                         </div>
                                                    </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
                  <script type="text/javascript">
            $(function() {

                $('.button-modal').click(function(e)
                {
                        e.preventDefault();

                        var _self = $(this);

                        var delivery_id = _self.data('id');
                        var order_id = _self.data('order-id');
                        $("#delivery_id").val(delivery_id);
                        $('#order_id').val(order_id);

                        $('#delivery-modal').modal('show');
                });
                $("#payment_date").inputmask("dd/mm/yyyy", {
                    "placeholder": "dd/mm/yyyy"
                });
             
                   var table = $("#delivery_table").DataTable();
                       $('#delivery_table tbody').on('click', 'td.details-control', function () {
                                var tr = $(this).closest('tr');
                                var row = table.row( tr );
                         
                                if ( row.child.isShown() ) {
                                    // This row is already open - close it
                                    row.child.hide();
                                    tr.removeClass('shown');
                                }
                                else {
                                    var format = $(this).find('.row-detail').find('table').clone();
                                    row.child(format).show();
                                    row.child().find('td').css('background-color','#ffffff');
                                    tr.addClass('shown');
                                }
                            } );
            });
        </script>
</div>