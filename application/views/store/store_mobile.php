<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">edit</a>
        </li>
        <li class=""><a href="#tab_2" data-toggle="tab">search product</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">STORE UPDATE</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" id="detail-form">
                                <!-- text input -->
                                <input type="hidden" name="rectify_id" />
                                <div class="form-group">
                                    <label>สถานที่นำออก</label>
                                    <select class="form-control" name="store_code">
                                        <option value="">เลือก</option>
                                        <?php if(!empty($query_store_list)) { ?>
                                        <?php foreach ($query_store_list->result() as $store) { ?>
                                        <option value="<?php echo $store->code; ?>" <?php echo set_select( 'store_code', $store->code, $store->code == $store_code); ?> >
                                            <?php echo $store->short_name; ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>

                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <input type="telephone" class="barcode form-control" placeholder="barcode">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="telephone" class="amount form-control" placeholder="amount">
                                    </div>
                                    <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>
                                    </div>
                                </div>
                                <br/>

                            </form>
                            <button type="button" class="btn btn-primary add-btn">add more</button>
                            <!-- form start -->

                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary save-btn">Save</button>
                            <button class="btn btn-danger save-btn cancel">Cancel</button>
                        </div>

                        <div class="overlay" style="display:none"></div>
                        <div class="loading-img" style="display:none"></div>
                    </div>
                    <script type="text/javascript">
                        var template_row = ['<div class="row">',
                            '<div class="col-xs-4">',
                            '<input type="telephone" class="form-control barcode" placeholder="barcode">',
                            '</div>',
                            '<div class="col-xs-4">',
                            '<input type="telephone" class="form-control amount" placeholder="amount">',
                            '</div>',
                            '<div class="col-xs-4">',
                                    '<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" >name</button>',
                                    '</div>',
                            '</div><br/>'
                        ].join('');
                        var addRow = function() {
                            console.log('....add....');
                            for(var i =0 ;i<10;i++)
                            {
                                $('#detail-form').append(template_row);
                            }
                        }
                        var initData = function(detail) {
                            for (var idx = 0; idx < detail.length; idx++) {
                                console.log(idx);
                                var product_korea_barcode = detail[idx].product_korea_barcode;
                                var amount = detail[idx].amount;
                                var product_name = detail[idx].product_name;
                                if (amount <= 10) {
                                    console.log(idx);
                                    $('.barcode:eq(' + idx + ')').val(product_korea_barcode.replace('880925548', ''));
                                    $('.amount:eq(' + idx + ')').val(amount);
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').attr('title',product_name);
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').removeClass('btn-default');
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').addClass('btn-primary');
                                } else {
                                    addRow();
                                    $('.barcode:eq(' + idx + ')').val(product_korea_barcode);
                                    $('.amount:eq(' + idx + ')').val(amount);
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').attr('title',product_name);
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').removeClass('btn-default');
                                    $('.amount:eq(' + idx + ')').parent().parent().find('button').addClass('btn-primary');
                                }
                            }
                        }
                        var focusData = function(product_korea_barcode,ref){
                            $.ajax({
                                url: "/stock/get_product_by_criteria",
                                data: {
                                    "q": product_korea_barcode,
                                }, //returns all cells' data
                                dataType: 'json',
                                type: 'GET',
                                success: function(res) {
                                    if(res.length  > 0)
                                    {
                                        $(ref).parent().parent().find('button').attr('data-original-title',res[0].label);
                                        $(ref).parent().parent().find('button').removeClass('btn-default');
                                        $(ref).parent().parent().find('button').addClass('btn-primary'); 
                                        $(ref).parent().parent().find('button').tooltip('show');
                                    }
                                    else
                                    {

                                          alert('not found');
                                    }
                                },
                                error: function() {
                                    alert('not found');
                                },
                            });      
                        } 
                        var saveData = function() {
                            var result = [];
                            $('.barcode').each(function() {
                                var barcode = $(this).val();
                                var amount = $(this).parent().parent().find('.amount').val();
                                if (barcode) {
                                    result.push({
                                        'product_korea_barcode': barcode,
                                        'amount': amount
                                    });
                                }
                            });
                            console.log(result);
                            if (result.length > 0) {
                                $.ajax({
                                    url: "/store/save_mobile",
                                    data: {
                                        "data": result,
                                        "store_code": $('select[name="store_code"]').val(),
                                        "rectify_id": $('input[name="rectify_id"]').val()
                                    }, //returns all cells' data
                                    dataType: 'json',
                                    type: 'POST',
                                    success: function(res) {
                                        alert('success');
                                        window.location.replace('/store/all');
                                    },
                                    error: function() {
                                        alert('error');
                                    },
                                });
                            }
                        }
                        var searchData = function()
                        {
                            var search_product_name = $('#search_product_name').val();
                            $.ajax({
                                url: "/stock/get_product_by_criteria",
                                data: {
                                    "q": search_product_name,
                                }, //returns all cells' data
                                dataType: 'json',
                                type: 'GET',
                                success: function(res) {
                                    $('#search_product_barcode').html('');
                                    for(var i = 0; i< res.length ;i ++)
                                    {   console.log(res[i].value);
                                        $('#search_product_barcode').append('<li>'+res[i].label+'<input class="form-control" name="result_bar_'+i+'" value="'+res[i].value.substring(res[i].value.length-4,res[i].value.length )+'"</li>')
                                    }
                                },
                                error: function() {
                                    alert('error');
                                },
                            });                       
                        }
                        $(document).ready(function() {
                            $('.add-btn').click(function(evt) {
                                evt.preventDefault();
                                addRow();
                            });
                            $('.save-btn').click(function(evt) {
                                evt.preventDefault();
                                saveData();
                            });
                            $('.search-btn').click(function(evt){
                                evt.preventDefault();
                                searchData();
                            });
                            $('.barcode').focusout(function(){
                                if($(this).val())
                                {
                                    focusData($(this).val(),this);
                                }
                            })
                             <?php if (!empty($rectify_id)) { ?>
                                $('#rectify_id').val('<?php echo $rectify_id ?>');
                                console.log('<?php echo $rectify_id ?>');
                            <?php } ?>
                            <?php if (!empty($store_code)) { ?>
                                $('select[name="store_code"]').val('<?php echo $store_code?>'); 
                            <?php } ?>

                            <?php if (isset($rectify_item) && !empty($rectify_item)) { ?>
                                var data = []; 
                                <?php foreach($rectify_item->result()  as $row){ ?>
                                        data.push({
                                            'product_korea_barcode': '<?php echo $row->product_korea_barcode; ?>',
                                            'amount': '<?php echo $row->current_amount; ?>',
                                            'product_name':'<?php echo $row->product_name; ?>',
                                        }); 
                                <?php } ?>
                                initData(data); 
                            <?php } ?>

                        });
                    </script>
                </div>
                <!--/.col (left) -->
            </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Search product name</label>
                    <input type="telephone" class="form-control" name="search_product_name" id="search_product_name"/>
                    <br/>
                    <button type="button" class="btn btn-primary search-btn">search</button>
                    <ul id="search_product_barcode">
                    </ul>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
