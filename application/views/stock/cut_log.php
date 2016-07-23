<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Cut stock log 
                                    <br/>
                                    รายละเอียด:
                                    <?php   
                                    echo 'เอาของออกจาก'.$trans->row()->source_name 
                                    .' ไปส่ง '
                                    .$trans->row()->destination_name; 
                                                                            ?>
                                    <br/>
                                     สต๊อกเปลี่ยนแปลงที่  
                                    <?php if($trans->row()->type == 'preparing') {?> <?php  echo $trans->row()->source_name ?><?php } ?>
                                    <?php if($trans->row()->type == 'done') {?> <?php  echo $trans->row()->destination_name ?><?php } ?>
                                     ดังนี้
                                   </h3>                                    

                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                    <table id="stock_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>product name</th>
                                                <th>Previous Stock </th>
                                                <th>Current Stock </th>
                                                <?php foreach ($display_table['relate']->result() as $row) { ?>
                                                
                                                    <th>
                                                       <?php if($row->type == 'done'){ ?>
                                                            <?php echo 'stock id = '.$row->id.'<br/>'.' เอาของเข้า ' ; ?>
                                                       <?php }else if($row->type == 'preparing') { ?>
                                                            <?php echo 'stock id = '.$row->id.'<br/>'.'เอาของออก ' ; ?>    
                                                       <?php } ?>
                                                    </th>
                                                <?php }?>
                                               
                                            </tr>
                                           
                                        </thead>
                                        <tbody>
                                             <?php foreach ($display_table as $key => $value) { ?>
                                                
                                                <?php if($key !== 'relate'){ ?>
                                                   <tr>
                                                    <td> <?php if(isset($value->name)) { ?><?php echo $value->name; ?><?php } ?></td>
                                                    <td> <?php if(isset($value->log)) { ?><?php echo $value->log; ?><?php } ?></td>
                                                    <td> <?php echo $value->cur; ?></td>
                                                     <?php foreach ($display_table['relate']->result() as $index => $row) { ?>
                                              
                                                        <td><?php if(isset($value->diff[$row->id])) {
                                                            if($value->diff[$row->id]->type=='preparing') {
                                                                echo '-'.$value->diff[$row->id.'']->amount; 
                                                            }else{
                                                                echo '+'.$value->diff[$row->id.'']->amount;
                                                            }
                                                        }
                                                        ?> </td> 
                                                     <?php } ?>
                                                   </tr>
                                                <?php }?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                     </br>
                                       <a class="btn btn-primary" href="<?php echo site_url('stock/all'); ?>" >Back </a>
                                </br>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
                  <script type="text/javascript">
            $(function() {
                    $("#stock_table").dataTable( {"bPaginate": false});
        </script>
</div>