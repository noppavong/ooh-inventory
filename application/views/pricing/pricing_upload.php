<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                	<h3 class="box-title">upload picture <?php if(isset($product_name)){echo $product_name;} ?></h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('pricing/upload_picture') ?>" method="POST" enctype="multipart/form-data" >
                <div class="box-body">
                    <?php if(isset($error)){print_r($error);}?>
                    <input type="hidden" name="korea_barcode" value="<?php if(isset($korea_barcode)){echo $korea_barcode;} ?>" />
                    <div class="form-group">
                        <label for="input-file">file</label>
                        <input type="file" class="form-control" name="userfile" id="input-file" />
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url('pricing/all') ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div><!-- /.box -->
 
    </div><!--/.col (left) -->