<link href="<?php echo site_url('assets/css/footable.core.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo site_url('assets/css/footable.standalone.min.css')?>" rel="stylesheet" type="text/css" />
<style>
th{
   height: 140px;
}
th >div{
  text-align: left;
width: 30px;
/* Safari */
-webkit-transform: rotate(-90deg);

/* Firefox */
-moz-transform: rotate(-90deg);

/* IE */
-ms-transform: rotate(-90deg);

/* Opera */
-o-transform: rotate(-90deg);

/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

}
.ui-autocomplete {
  z-index: 1000;
  display: none;
  min-width: 80%;
  width: 80%;
  padding: 4px 0;
  margin: 2px 0 0 0;
  list-style: none;
  background-color: #ffffff;
  border-color: #ccc;
  border-color: rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  border-right-width: 2px;
  border-bottom-width: 2px;
}
.ui-menu-item{
    word-wrap:break-word;
}
.ui-menu-item > a.ui-corner-all {
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    word-wrap:break-word;
    cursor: pointer;
}
.ui-menu-item > a:hover{
      color: #ffffff;
      text-decoration: none;
      background-color: #0088cc;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      background-image: none;  
} 
   .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
        background: #0088cc;
        border: none;
        color:#000;
        border-radius:0;
        font-weight: normal;
    }

</style>
<div class="row">                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Summary</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                       <form role="form" method="POST" action="<?php echo site_url('stock/summary')?>" >
                                               <div style="display:none;" id="product_list" ><?php echo $result_product_array; ?></div>
                                            
                                            <div class="form-group">
                                                    <label>product</label>
                                                    <input name="product_name" id="product_name" type="text" class="form-control" placeholder="product name"></input>
                                            </div>
                                          <div class="form-group">
                                            <label>store</label> 
                                            <select class="form-control" name="store_code_search">
                                                 <option value="" > เลือก </option>
                                                <?php if(!empty($query_store_list)) { ?>
                                                    <?php foreach ($query_store_list->result() as $store) { ?>                            
                                                        <option value="<?php echo $store->code; ?>" ><?php echo $store->short_name; ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>                             
                                         </div>
                                         <div class="form-group">
                                            <button type="submit" class="btn btn-primary save-btn">Search</button>
                                        </div>
                                        </form>
                                    <table id="stock_summary" class="footable table toggle-arrow">
                                        <thead>
                                            <tr>
                                                <th>Product name</th>
                                                    <?php foreach ($query_store_criteria->result() as $store) { ?> 
                                                    <?php if(is_numeric($store->code) ){ ?>
                                                      <th data-hide="phone,tablet"  data-sort-ignore="true" data-type="numeric"><div><span><?php echo $store->short_name; ?></span></div></th>
                                                    <?php } ?>
                                                    <?php } ?>
                                                <th>รวม</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                              <?php if($summary_list) {?>
                                                <?php foreach($summary_list as $korea_barcode=>$entry) { ?>
                                                  <tr>
                                                    <td><?php echo $entry[0]; ?> </td>
                                                    <?php $sum = 0 ; ?>
                                                       <?php  foreach ($query_store_criteria->result() as $store) {  ?>

                                                    <?php if(is_numeric($store->code) ){ ?>
                                                        <?php  if(isset($entry[$store->code])){ ?>
                                                          <td> <?php echo $entry[$store->code]; ?> </td>
                                                         <?php $sum +=  $entry[$store->code]; ?>
                                                        <?php }else { ?>
                                                          <td> </td>
                                                        <?php } ?>
                                                        <?php } ?>
                                                      <?php } ?>
                                                    <td><?php echo $sum; ?> </td>
                                                  </tr>
                                                <?php } ?>
                                              <?php  } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
                <script>
                    $(function () {
                      $('.footable').footable(
                        {breakpoints:{
                        phone: 480,
                        tablet: 768
                      }});
                        //       $('#product_name').autocomplete({
                        //     appendTo:".modal-form",
                        //     minLength: 4,
                        //     select: function (event, ui) { 
                        //         event.preventDefault();
                        //         $("#korea_barcode").val(ui.item.value);
                        //         $("#product_name").val(ui.item.label);
                        //         return false;
                        //     },
                        //     focus: function(event, ui) {
                        //         $("#product_name").val(ui.item.label);
                        //         return false;
                        //     },
                        //     source: function(request, response) {
                        //       var searchString = request.term;
                        //       var search_array = searchString.split(" ");
                        //       var aSearch = [];
                        //       var iSearch = []
                        //       var product_list  = JSON.parse($('#product_list').html());
                        //       var max_size = 3;
                        //       var size = 0;
                        //        for(var i  = 0 ; i< product_list.length ; i ++ ){
                        //           var ok = true;
                                  
                        //           for(var j = 0 ;j < search_array.length ; j++ ){
                        //             if(search_array[j])
                        //             {
                        //               var check = product_list[i].label.toUpperCase().indexOf(search_array[j].toUpperCase());
                        //               var check2 = product_list[i].value.indexOf(search_array[j]);
                        //               ok = ok && (check > -1 || check2 > -1);
                        //             }
                        //           }
                        //           if(ok){
                        //             aSearch.push(product_list[i]);
                        //             iSearch.push(product_list[i].value);
                        //             size++;
                        //           }
                        //           if(max_size <= size)
                        //           {
                        //               break;
                        //           }
                        //        }
                        //         $('#product_search_list').val(iSearch.join(','));
                        //         response(aSearch);
                        //     }
                        // });

                        // $('#product_name').click(function(){
                        //     $("#product_name").autocomplete( "search", "" );
                        // });        $('#product_name').autocomplete({
                        //     appendTo:".modal-form",
                        //     minLength: 4,
                        //     select: function (event, ui) { 
                        //         event.preventDefault();
                        //         $("#korea_barcode").val(ui.item.value);
                        //         $("#product_name").val(ui.item.label);
                        //         return false;
                        //     },
                        //     focus: function(event, ui) {
                        //         $("#product_name").val(ui.item.label);
                        //         return false;
                        //     },
                        //     source: function(request, response) {
                        //       var searchString = request.term;
                        //       var search_array = searchString.split(" ");
                        //       var aSearch = [];
                        //       var iSearch = []
                        //       var product_list  = JSON.parse($('#product_list').html());
                        //       var max_size = 3;
                        //       var size = 0;
                        //        for(var i  = 0 ; i< product_list.length ; i ++ ){
                        //           var ok = true;
                                  
                        //           for(var j = 0 ;j < search_array.length ; j++ ){
                        //             if(search_array[j])
                        //             {
                        //               var check = product_list[i].label.toUpperCase().indexOf(search_array[j].toUpperCase());
                        //               var check2 = product_list[i].value.indexOf(search_array[j]);
                        //               ok = ok && (check > -1 || check2 > -1);
                        //             }
                        //           }
                        //           if(ok){
                        //             aSearch.push(product_list[i]);
                        //             iSearch.push(product_list[i].value);
                        //             size++;
                        //           }
                        //           if(max_size <= size)
                        //           {
                        //               break;
                        //           }
                        //        }
                        //         $('#product_search_list').val(iSearch.join(','));
                        //         response(aSearch);
                        //     }
                        // });

                        // $('#product_name').click(function(){
                        //     $("#product_name").autocomplete( "search", "" );
                        // });
                    });

                   
                </script>
</div>
