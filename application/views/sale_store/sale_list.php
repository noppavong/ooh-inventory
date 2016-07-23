<div class="row">                
<!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Stock list</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="sale_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>วันที่เริ่ม</th>
                                                <th>วันที่สิ้นสุด</th>
                                                <th>store</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_sale_list)){ ?>
                                                <?php foreach ($query_sale_list->result() as $row) { ?>
                                                    <tr>
                                                        <td><?php echo DateTime::createFromFormat('Y-m-d', $row->start_date)->format('d/m/Y'); ?></td>
                                                        <td><?php echo DateTime::createFromFormat('Y-m-d', $row->end_date)->format('d/m/Y'); ?></td>
                                                        <td><?php echo $row->name ?></td>
                                                        <td><a class="btn btn-info" href="<?php echo site_url('sale/edit/'.$row->id); ?>" >
                                                            <i class="fa fa-edit">
                                                        </i></a>
           
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
                    $("#sale_table").dataTable( {columnDefs: [
                           { type: 'date-uk', targets:0 }
                         ], "order": [[ 0, "desc" ]]});
            });
        </script>
</div>