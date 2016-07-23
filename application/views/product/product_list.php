<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Product list</h3>
                <div class="box-tools">
                    <div class="input-group">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default" ><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>Product Icon</th>
                        <th>korea barcode</th>
                        <th>Thai barcode</th>
                        <th>Product name</th>
                        <th></th>
                    </tr>
                    <?php if(isset($query_product_list)){ ?>
                        <?php foreach ($query_product_list->result() as $row) { ?>
                            <tr>
                                <td><img src="<?php echo site_url($row->icon_image_url); ?>" /></td>
                                <td><?php echo $row->korea_barcode ?></td>
                                <td><?php echo $row->thai_barcode ?></td>
                                <td><?php echo $row->product_name ?></td>
                                <td><a class="btn btn-info" href="<?php echo site_url('product/edit/'.$row->korea_barcode) ?>" ><i class="fa fa-edit"></i></a></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody></table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>