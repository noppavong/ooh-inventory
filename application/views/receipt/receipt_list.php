<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Receipt list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                     <form role="form" method="POST" action="#"  id="search-form">
                                        <div class="form-group">
                                                <input name="issue_no" id="issue_no" type="text" class="form-control" placeholder="เลขที่เอกสาร"></input>
                                        </div>
                                         <div class="form-group">
                                                <input name="issue_place" id="issue_place" type="text" class="form-control" placeholder="บริษัทลูกค้า"></input>
                                        </div>
                                         <div class="form-group">
                                                <input name="issue_date" id="issue_date" type="text" class="form-control" placeholder="วันที่เอกสาร"></input>
                                        </div>
                                     </form>   
                                    <table id="receipt_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>วันที่</th>
                                                <th>รหัสเอกสาร</th>
                                                <th>บริษัทลูกค้า</th>
                                                <th>ราคารวม</th>
                                                <th>หัก gp </th>
                                                <th>ส่วนลดพิเศษ </th>
                                                <th>grand total</th>
                                                <th>สถานะ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_receipt_list)){ ?>
                                                <?php foreach ($query_receipt_list->result() as $row) { ?>
                                                    <tr>
                                                        <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->create_date)->format('d/m/Y'); ?></td>
                                                        <td><?php echo $row->receipt_no ?></td>
                                                         <?php if($row->store_code != 'other'){?>
                                                        <td><?php echo $row->company_name ?></td>
                                                        <?php }else{ ?>
                                                        <td><?php echo $row->custom_store_name ?></td>

                                                        <?php } ?>
                                                        <td><?php echo number_format($row->sum_price,2,'.',','); ?></td>
                                                        <td><?php echo number_format($row->less_gp,2,'.',','); ?></td>
                                                        <td><?php echo number_format($row->special_discount,2,'.',','); ?></td>
                                                        <td><?php echo number_format($row->total,2,'.',','); ?></td>
                                                        <td><?php echo $row->status ?></td>
                                                        <td style="width:30%">
                                                      
                                                        <div class="row" style="margin-left:0.1em;">
                                                        <a class="btn btn-info" href="<?php echo site_url('receipt/edit/'.$row->id) ?>" >
                                                            
                                                            <i class="fa fa-edit">
                                                        </i>แก้ไข</a>
                                                          <a class="btn btn-danger" href="javascript:confirm_url('<?php echo site_url('receipt/delete/'.$row->id); ?>')" > Delete </a>
                                                        </div>
                                                        <br/>
                                                        <div class="row" style="margin-left:0.1em">
                                                           <button  class="btn btn-primary pull-left button-modal" onclick="setid(<?php echo $row->id ?>)"  data-toggle="modal" data-id="<?php echo $row->id ?>" data-target="#receipt-modal"> create receipt</button >  
                                                          &nbsp;
                                                          <a class="btn btn-info" href="<?php echo $row->receipt_url ?>" target="_blank" ><i class="fa fa-search">
                                                              
                                                          </i>ต้นฉบับ</a>
                                                           <a class="btn btn-info" href="<?php echo $row->receipt_copy_url ?>" target="_blank" ><i class="fa fa-search">
                                                              
                                                          </i>สำเนา</a>
                                                        </div>
                                                            </td>
                                                        
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                      <!-- COMPOSE MESSAGE MODAL -->
                                    <div class="modal fade" id="receipt-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title"><i class="fa fa-tags"></i>Create receipt</h4>
                                                </div>
                                                <form class="modal-form"  method="post" action="<?php echo site_url('receipt/create_receipt'); ?>">
                                                    <input id="receipt_id" type="hidden" name="receipt_id" />
                                                   
                                                    <div class="modal-footer clearfix" style="margin-top:0px">
                                                        <button type="submit" class="btn btn-primary pull-left btn-save"><i class="fa fa-save"></i> Confirm</button>
                                                        <button type="button" class="btn btn-danger remove pull-left" > Cancel </button>

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
               function setid(invoice_id)
              {
                
                $("#receipt_id").val(invoice_id);

                $('#invoice-modal').modal('show');
              } 
            $(function() {
                initListTable('receipt_table');
            });
        //             jQuery.extend( jQuery.fn.dataTableExt.oSort, {
        //             "date-uk-pre": function ( a ) {
        //                 var ukDatea = a.split('/');
        //                 return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
        //             },

        //             "date-uk-asc": function ( a, b ) {
        //                 return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        //             },

        //             "date-uk-desc": function ( a, b ) {
        //                 return ((a < b) ? 1 : ((a > b) ? -1 : 0));
        //             }
        //          } );
        //             $("#receipt_table").datatable({ "aaSorting" : [[0, 'desc']],"aoColumns": [
        //     {"sType": "date-uk" },
        //      null,
        //     null,
        //     null,
        //     null,
        //     null,
        //     null,
        //     null  
        // ], "paginationType": "extjs"}
        //             );
        // $('.button-modal').click(function(e)
        // {
        //         e.preventDefault();

        //         var _self = $(this);

        //         var receipt_id = _self.data('id');
        //         $("#receipt_id").val(receipt_id);

        //         $('#receipt-modal').modal('show');
        // });
         $('#receipt-modal').on('hidden.bs.modal', function () {
              $('#receipt_id').val('');
              $('#ref_order_no').val('');
              $('#special_code').val('');
              $('#special_gp').val('');
      });
           $('.remove').click(function(){
                    $('#receipt-modal').modal('hide');
           });
        </script>
</div>