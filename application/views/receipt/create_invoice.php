<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                    <h3 class="box-title">create invoice</h3>
               
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('stock/create_invoice') ?>" method="POST"  enctype="multipart/form-data" >
                <div class="box-body">
                    <div class="form-group">
                    <label for="input-stockist">invoice no</label>
                        <input type="text" class="form-control" name="invoice_no" 
                        value="<?php echo set_value('invoice_no'); ?>"/>
                        <input type="hidden" name="stock_transaction_id"  value="<?php echo $stock_transaction_id ?>"  />
                    </div>  ref_invoice_no
                       <div class="form-group">
                    <label for="input-stockist">เลขที่ใบสั่งซื้อ </label>
                        <input type="text" class="form-control" name="ref_invoice_no" 
                        value="<?php echo set_value('ref_invoice_no'); ?>"/>
                    </div>     
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url() ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div><!-- /.box -->
 
    </div><!--/.col (left) -->