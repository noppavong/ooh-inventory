<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Stock list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="stock_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>transaction id </th>
                                                <th>วันที่จด</th>
                                                <th>สถานที่นำออก</th>
                                                <th>สถานที่เอาเข้า</th>
                                                <th>ref invoice no </th>
                                                <th>สถานะ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_stock_list)){ ?>
                                                <?php foreach ($query_stock_list->result() as $row) { ?>
                                                    <tr>
                                                        <td><?php echo $row->id ?></td>
                                                        <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->register_date)->format('d/m/Y'); ?></td>
                                                        <td><?php echo $row->source_name; ?></td>
                                                        <td><?php echo $row->destination_name; ?></td>
                                                        <td><?php echo $row->ref_invoice_no; ?></td>
                                                        <td><?php echo $row->type; ?> </td>

                                                        <td style="width:30%">
                                                          <?php  if(empty($row->type)) { ?>
                                                      
                                                        <a class="btn btn-info" href="<?php echo site_url('stock/edit/'.$row->id); ?>" >
                                                            <i class="fa fa-edit">
                                                        </i></a>
                                                        <?php } ?>
                                                        <a class="btn btn-info" href="<?php echo site_url('stock/view/'.$row->id); ?>" ><i class="fa fa-search">

                                                        </i></a>
                                                        <?php if((empty($row->type) && !empty($row->store_source_code))
                                                         ||(($row->type === 'preparing') && !empty($row->store_destination_code))
                                                         || ($row->type === 'counting')){?>
                                                        <a class="btn btn-info" href="javascript:confirm_url('<?php echo site_url('stock/cut_stock/'.$row->id) ?>');" >
                                                            <i class="fa fa-ok-sign">
                                                            </i>
                                                            <?php if($row->type === 'preparing') {?>
                                                                Delivery
                                                            <?php } ?>
                                                            <?php if($row->type === 'counting') {?>
                                                                Finish counting
                                                            <?php } ?>
                                                            <?php if(empty($row->type)) {?>
                                                                Prepare
                                                            <?php } ?> 
                                                        </a>
                                                        <?php } ?>
                                                        <?php  if(empty($row->type)) { ?>
                                                        <a class="btn btn-danger" href="javascript:confirm_url('<?php echo site_url('stock/delete/'.$row->id) ?>');" >
                                                           
                                                                 Delete
                                                        </a>    
                                                        <?php } ?>
                                                        <?php if($row->type === 'done') { ?>
                                                          <a class="btn btn-info" href="#"  disabled="disabled" >
                                                            <i class="fa fa-ok-sign">
                                                            </i>
                                                             <?php if(!empty($row->store_source_code) && !empty($row->store_destination_code) ) {?>
                                                                Deliveried
                                                            <?php } ?> 
                                                             <?php if(!empty($row->store_source_code) && empty($row->store_destination_code) ) {?>
                                                                Finished counting
                                                            <?php } ?> 
                                                           </a>
                                                            
                                                        <?php } ?>
                                                    </td>
                                                        
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
                    $("#stock_table").dataTable( {columnDefs: [
                           { type: 'date-uk', targets:0 }
                         ], "order": [[ 0, "desc" ]]});
            });
        </script>
</div>