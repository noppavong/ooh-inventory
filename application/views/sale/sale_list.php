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
                                    <h3 class="box-title">Sale list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="sale_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>order id </th>
                                                <th>delivery id </th>
                                                <th>ชื่อลูกค้า</th>
                                                <th>ช่องทางขาย</th>
                                                <th>payment Type</th>
                                        <th>จำนวนเงินรวม</th>
                                                <th>วันที่โอนเงิน </th>
                                                <th>สถานะการโอนเงิน</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($display_sale)){ ?>
                                                <?php foreach ($display_sale as $row) { ?>
                                                    <tr><td class="details-control">
                                                            <span class="details-control-icon"></span>
                                                            <div class="row-detail" style="display:none">
                                                               <?php if($row->item){ ?>
                                                                <table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">
                                                                    <thead>
                                                                    <th style="width:100%"> Product Name </th>
                                                                    <th> Amount </th>
                                                                    <th> Price/unit </th>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php foreach($row->item->result() as $item): ?>
                                                                    <tr>
                                                                        <td style="width:20%"><?php echo $item->product_name ?></td>
                                                                        <td><?php echo $item->amount ?></td>
                                                                        <td><?php echo $item->price ?></td>
                                                                    </tr>

                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                                    <tfoot>
                                                                        <td>total</td>
                                                                        <td><?php echo $row->sale->sum_price; ?> </td>
                                                                    </tfoot>
                                                                </table>
                                                                <?php } ?>
                                                             </div>
                                                        </td>
                                                        <td><?php echo $row->sale->sale_order_id ?>

                                                        </td>
                                                        <td><a href="<?php echo site_url('delivery/all/'.$row->sale->delivery_id) ?>" ><?php echo $row->sale->delivery_id ?></a>

                                                        </td>
                                                        <td><?php echo $row->sale->name.' '.$row->sale->surname ?></td>
                                                        <td><?php echo $row->sale->channel_desc; ?></td>
                                                        <td><?php echo $row->sale->description; ?></td>
                                                        <td><?php echo $row->sale->sum_price; ?></td>
                                                        <td>
                                                            <?php if($row->sale->payment_date){?>
                                                            <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->sale->payment_date)->format('d/m/Y'); ?>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->sale->payment_status; ?>
                                                            <?php if(empty($row->sale->payment_status)) {?>
                                                                <a class="btn btn-info  button-modal" data-id="<?php echo $row->sale->sale_order_id ?>" data-target="#sale-modal"  >
                                                                <i class="fa fa-edit">
                                                                </i>ยืนยันการโอนเงิน</a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if(empty($row->sale->payment_status)) { ?>
                                                                <a class="btn btn-info" href="<?php echo site_url('sale/edit/'.$row->sale->sale_order_id); ?>" >
                                                                <i class="fa fa-edit">
                                                                </i>แก้ไข</a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                        <!-- COMPOSE MESSAGE MODAL -->
                                    <div class="modal fade" id="sale-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title"><i class="fa fa-tags"></i>Transfer Confirmation</h4>
                                                </div>
                                                <form class="modal-form"  method="post" action="<?php echo site_url('sale/confirm_transfer'); ?>">
                                                    <input id="order_id" type="hidden" name="order_id" />
                                                    <div class="modal-body">
                                                        
                                                        <div class="form-group">
                                                            <label>payment type</label>
                                                             <select class="form-control" name="payment_type_id">
                                                                    <option value="">เลือก</option>
                                                                    <?php if(!empty($query_payment_type)): ?>
                                                                        <?php foreach($query_payment_type->result() as $payment_type):?>
                                                                            <option value="<?php echo $payment_type->payment_type_id; ?>"  >
                                                                                <?php echo $payment_type->description; ?>
                                                                            </option>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                </select>
                                                          </div>
                                                          <div class="form-group">
                                                              <label>payment date</label>
                                                              <input type="name" id="payment_date" name="payment_date" class="form-control"  />
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

                        var order_id = _self.data('id');
                        $("#order_id").val(order_id);

                        $('#sale-modal').modal('show');
                });
                     $("#payment_date").inputmask("dd/mm/yyyy", {
                    "placeholder": "dd/mm/yyyy"
                });
                  var table = $("#sale_table").DataTable();
                    <?php
                    if (!empty($payment_date)) { ?>
                            $('input[name="payment_date"]').val('<?php echo $payment_date ?>'); <?php
                    } ?>
                   $('#sale_table tbody').on('click', 'td.details-control', function () {
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