<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
            	<?php if(!empty($korea_barcode)){ ?>
                	<h3 class="box-title">update product</h3>
                <?php }else{ ?>
                	<h3 class="box-title">insert product</h3>
                <?php } ?>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('product/edit') ?>" method="POST"  enctype="multipart/form-data" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="input-korea-barcode">korea-barcode</label>
                        <?php if(empty($korea_barcode)){ ?>
                        <input type="text" class="form-control" name="korea_barcode" id="input-korea-barcode" placeholder="Korea barcode"  />
                        <?php }else{ ?>
                            <input type="hidden" value="<?php echo $korea_barcode ?>" name="korea_barcode_hidden" />
                        <?php } ?> 
                    </div>
                    <div class="form-group">
                        <label for="input-thai-barcode">thai-barcode</label>
                        <input type="text" class="form-control" name="thai_barcode" id="input-thai-barcode" placeholder="Thai barcode"
                        value="<?php echo set_value('thai_barcode',$thai_barcode); ?>"/>
                    </div>
                     <div class="form-group">
                        <label for="input-product-name">product-name</label>
                        <input type="text" class="form-control" name="product_name" id="input-product-name" placeholder="Product name"
                        value="<?php echo set_value('product_name',$product_name); ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="input-product-icon">product-icon-image</label>
                        <input type="file" id="input-product-icon" name="icon_image">
                        <p class="help-block">(รูปภาพขนาดเล็กสำหรับ file pricing)</p>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url() ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div><!-- /.box -->
 
    </div><!--/.col (left) -->