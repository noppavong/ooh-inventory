<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Stock cost</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="stock_cost" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>สาขา</th>
                                                <th>มูลค่า</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($query_cost)){ ?>
                                                <?php foreach ($query_cost->result() as $row) { ?>
                                                    <tr>
                                                        <td><?php echo $row->name ?></td>
                                                        <td><?php  echo number_format((float)( $row->cost),2,'.',','); ?></td>
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
                 
</div>