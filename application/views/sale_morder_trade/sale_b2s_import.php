<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                    <h3 class="box-title">import sale</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('sale/sale_b2s_import') ?>" method="POST" enctype="multipart/form-data" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="month"> month </label>
                        <select class="form-control" name="sale_month">
                            <option value="January" >January </option>
                            <option value="February" >February  </option>
                            <option value="March" >March </option>
                            <option value="April" >April </option>
                            <option value="May" >May </option>
                            <option value="June" >June </option>
                            <option value="July" >July </option>
                            <option value="August" >August </option>
                            <option value="September" >September </option>
                            <option value="October" >October </option>
                            <option value="November" >November </option>
                            <option value="December" >December </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year"> year </label>
                        <select class="form-control" name="sale_year">
                            <option value="2014" >2014 </option>
                            <option value="2015" >2015  </option>
                            <option value="2016" >2016 </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-file">file</label>
                        <input type="file" class="form-control" name="sale_excel" id="input-file" />
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url() ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div><!-- /.box -->
 
    </div><!--/.col (left) -->