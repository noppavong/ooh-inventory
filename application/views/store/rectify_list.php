<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Stock Counting list </h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="rectify_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>วันที่จด</th>
                                                <th>Store</th>
                                                <th>Recify</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_rectify_list)){ ?>
                                                <?php foreach ($query_rectify_list->result() as $row) { ?>
                                                    <tr>
                                                        <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->register_date)->format('d/m/Y'); ?></td>
                                                        <td><?php echo $row->name ?></td>
                                                        <td> 
                                                        <?php if(empty($row->transaction_id)){?>
                                                              <a class="btn btn-info" href="<?php echo site_url('store/edit/'.$row->id) ?>" >
                                                                <i class="fa fa-edit">
                                                                </i>
                                                                edit
                                                            </a>
                                                            <a class="btn btn-info" href="<?php echo site_url('store/edit_mobile/'.$row->id) ?>" >
                                                                <i class="fa fa-edit">
                                                                </i>
                                                                edit mobile
                                                            </a>
                                                            <a class="btn btn-info" href="<?php echo site_url('store/rectify/'.$row->id) ?>" >
                                                                <i class="fa fa-ok-sign">
                                                                </i>
                                                                generate transaction
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
                    $("#rectify_table").dataTable( {columnDefs: [
                           { type: 'date-uk', targets:0 }
                         ], "order": [[ 0, "desc" ]]});
            });
        </script>
</div>