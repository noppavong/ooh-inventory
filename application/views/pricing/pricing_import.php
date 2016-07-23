<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                	<h3 class="box-title">import pricing</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('pricing/import') ?>" method="POST" enctype="multipart/form-data" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="input-file">file</label>
                        <input type="file" class="form-control" name="pricing_excel" id="input-file" />
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url() ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div><!-- /.box -->
 
    </div><!--/.col (left) -->