<!DOCTYPE html>
<html>
<head>
    <title>Stock couting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="counting-list">

    <div data-role="header">
        <h1>stock counting list</h1>
        <a href="#store-list" onclick="addNewCount();" class="ui-btn ui-corner-all">Add New Counting</a>
        <a class="ui-aside" rel="external" href="<?php echo site_url(''); ?>" >Index</a>
    </div><!-- /header -->
    <div data-role="popup" id="delete_modal" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
        <h3>Delete Entry?</h3>
        <input type="hidden" id="delete_rectify_id"/>
        <a href="#" onclick="deleterec();"  data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Confirm</a>
        <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancel</a>
    </div>
    <div role="main" class="ui-content">
       <ul data-role="listview" data-split-icon="delete" data-split-theme="a" data-inset="true" id="list_count">

        <?php if(isset($query_rectify_list)){ ?>
            <?php foreach ($query_rectify_list->result() as $row) { ?>
            <li class="rectify_id_<?php echo $row->id ?>"><a href="javascript:edit('<?php echo $row->id ?>');">
            <h2><?php echo $row->short_name ?></h2>
                <p ><strong><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->register_date)->format('d/m/Y'); ?></strong></p>
            </a>
                 <a href="#delete_modal" onclick="javascript:initDelete('<?php echo $row->id ?>');" data-rel="popup" data-position-to="window" data-transition="pop">Delete entry</a>
            </li>
            <?php } ?>
        <?php } ?>
        </ul>

    </div><!-- /content -->
</div><!-- /page -->

<!-- Start of second page -->
<div data-role="page" id="store-list">

    <div data-role="header">
        <a href="javascript:backLink();" class="ui-btn-right ui-corner-all">Back</a>
        <h1>Choose Store</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
       <ul data-role="listview"  data-inset="true">
         <?php if(isset($query_store_list)){ ?>
            <?php foreach ($query_store_list->result() as $row) { ?>
            
            <li><a href="javascript:editDetail('<?php echo $row->code ?>');">
                <h2><?php echo $row->short_name ?></h2>
            </a></li>
            <?php } ?>
        <?php } ?>
       </ul>
    </div><!-- /content -->

</div><!-- /page -->
<div data-role="page" id="counting-detail">
    <div data-role="header" data-position="fixed">
           <div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-left">
                <a href="javascript:addProduct();" class="ui-btn">Add Product</a>
                <a href="javascript:goToList();" class="ui-btn ">List</a>
                <a href="javascript:backLink();" class="ui-btn">Back</a>
            </div>
        <h1>counting product</h1>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <form action="#" method="POST" id="">
            <input type="hidden" name="store_code" id="store_code" />
            <input type="hidden" name="rectify_id" id="rectify_id" />
            <input type="hidden" name="delete_recitem_id" id="delete_recitem_id"/>
        </form>

    <div data-role="popup" id="delete_item_modal" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
        <h3>Delete Item?</h3>
        <input type="hidden" id="delete_rectify_id"/>
        <a href="#" onclick="delete_item();" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Confirm</a>
        <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancel</a>
    </div>
       <ul data-role="listview" data-split-icon="delete" data-split-theme="a"  data-inset="true" id="counting-detail-list">

        </ul>   
    </div><!-- /content --> 
</div>
<div data-role="page" id="counting-form" >
     <div data-role="header">
        <a href="javascript:backLink();" class="ui-btn-right ui-corner-all">Back</a>
        <h1>Form</h1>
    </div><!-- /header -->
    <div role="main" class="ui-content">
         <form action="#" method="POST" id="">
            <ul id="autocomplete" data-role="listview"  data-inset="true" data-filter="true" data-filter-placeholder="barcode or name..." data-filter-theme="a"></ul>
           <input type="hidden" name="korea_barcode"  id="korea_barcode"/>
           <input type="hidden" name="select_product_name" id="select_product_name" />
           <input type="hidden" name="hidden_rec_item_id" id="hidden_rec_item_id"/>
            <input type="number" name="amount" pattern="[0-9]*" id="amount" />
            <input type="button" value="Save" id="save-btn"/>
        </form>
    </div><!-- /content --> 

</div>
<script type="text/javascript">
var $ref_text = '';
$( document ).on( "pagecreate", "#counting-form", function() {
   $('input[data-type="search"]').val($('#select_product_name').val());

    $( "#autocomplete" ).on( "filterablebeforefilter", function ( e, data ) {
        var $ul = $( this ),
            $input = $( data.input ),
            value = $input.val(),
            html = "";
            $ref_text = $input;
        $ul.html( "" );

        if ( value && value.length > 2 ) {
            $ul.html( "<li><div class='ui-loader'><span class='ui-icon ui-icon-loading'></span></div></li>" );
            $ul.listview( "refresh" );
            $.ajax({
                url: "/stock/get_product_by_criteria",
                dataType: "json",
                data: {
                    q: $input.val()
                }
            })
            .then( function ( response ) {
                $.each( response, function ( i, val ) {
                    html_reg = ["<li class=\"ui-btn ui-btn-icon-right ui-icon-carat-r\"", 
                    "onclick=\"setAutoCompleteVal(\'{label}\',\'{value}\');\">{label}</li>"].join('');
                    html_reg = html_reg.replace(/{label}/g,val.label.replace(/\r?\n|\r/g,'').replace(/\'/g,''));
                    html+=html_reg.replace(/{value}/g,val.value);
                    console.log(html);
                });
                $ul.html( html );
                $ul.listview( "refresh" );
                $ul.trigger( "updatelayout");
            });
        }
    });
});
$.fn.exists = function () {
    return this.length !== 0;
}
var goToList = function()
{
    $.mobile.navigate('#counting-list');
}
$('#save-btn').click(function(){
    var rectify_id = $('#rectify_id').val();
    var amount = $('#amount').val();
    var korea_barcode = $('#korea_barcode').val();
    var rectify_item_id = $('#hidden_rec_item_id').val();
    var store_code = $('#store_code').val();
    $.ajax({
        url: "/store/save_rect_item",
        data: {
            "korea_barcode": korea_barcode,
            "amount":amount,
            "rectify_id":rectify_id,
            "rectify_item_id":rectify_item_id,
            "store_code":store_code,
        }, 
        dataType: 'json',
        type: 'POST',
        success: function (res) {
            if(!$(".rectify_item_id_"+res.rectify_item_id).exists()){
                var rectify_item_template_txt = rectify_item_template.replace(/{rectify_item_id}/g,res.rectify_item_id);
                var rectify_item_template_txt = rectify_item_template_txt.replace(/{product_name}/g,res.product_name);
                var rectify_item_template_txt = rectify_item_template_txt.replace(/{amount}/g,amount);
                $('#counting-detail-list').append($(rectify_item_template_txt));
                $('#counting-detail-list').listview("refresh");
                $.mobile.navigate( "#counting-detail" );
            }else{
                var current_amount = parseInt($(".rectify_item_id_"+res.rectify_item_id).find('p strong').html())+parseInt(amount);
                $(".rectify_item_id_"+res.rectify_item_id).find('p strong').html(current_amount);
                // var rectify_item_template_txt = rectify_item_template.replace(/{rectify_item_id}/g,res.rectify_item_id);
                // var rectify_item_template_txt = rectify_item_template_txt.replace(/{product_name}/g,res.product_name);
                // var rectify_item_template_txt = rectify_item_template_txt.replace(/{amount}/g,current_amount);
                // $('#counting-detail-list').append($(rectify_item_template_txt));
                $('#counting-detail-list').listview("refresh");
                $.mobile.navigate( "#counting-detail" );
            }
                $('#amount').val('');
                $('#korea_barcode').val('');
                $('#hidden_rec_item_id').val('');
                $('#select_product_name').val('');
        },
        error: function () {
            console.log('Save error');
        }
    });
    // var item = template.replace(/{product_name}/g,$('#select_product_name').val());
    // item.replace(/{rectify_item_id}/,1);
    // $('#counting-detail-list').append(item);
    // $.mobile.navigate( "#counting-detail" );

});
var li_template = ['',''];
var initDelete = function(id)
{
    $('#delete_rectify_id').val(id);
}
var initDeleteItem = function(id)
{
     $('#delete_recitem_id').val(id);
}

var deleterec = function()
{
    if($('#delete_rectify_id').val())
    {
         $.ajax({
                    url: "/store/delete_rect",
                    data: {
                        "rectify_id": $('#delete_rectify_id').val(),
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'GET',
                    success: function (res) {
                            $('.rectify_id_'+$('#delete_rectify_id').val()).remove();
                            $('#counting-detail-list').html('');
                            $('#delete_rectify_id').val('');
                            $('#list_count').listview("refresh");
                    },
                    error: function () {
                        console.log('Delete error');
                    }
                });
    }
}
var delete_item = function()
{
     if($('#delete_recitem_id').val())
    {
         $.ajax({
                    url: "/store/delete_rect_item",
                    data: {
                        "rectify_item_id": $('#delete_recitem_id').val(),
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'GET',
                    success: function (res) {
                            $('.rectify_item_id_'+$('#delete_recitem_id').val()).remove();
                            $('#delete_recitem_id').val('');
                            $('#counting-detail-list').listview("refresh");
                    },
                    error: function () {
                        console.log('Delete error');
                    }
                });
    }
}
var editDetail = function(store_code)
{
    var rectify_id = $('#rectify_id').val();
    if(!rectify_id)
    {
         $.ajax({
                    url: "/store/add_rect",
                    data: {
                        "store_code": store_code,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                            $('#rectify_id').val(res.id);
                            $('#store_code').val(store_code);
                            var rectify_txt = rectify_template.replace(/{id}/g,res.id);
                            rectify_txt = rectify_txt.replace(/{name}/,res.name);
                            rectify_txt = rectify_txt.replace(/{date}/,res.date);
                            $('#list_count').append($(rectify_txt));
                            $('#list_count').listview("refresh");
                            $.mobile.navigate( "#counting-detail" );
                    },
                    error: function () {
                        console.log('Save error');
                    }
                });
    }else{

            $('#store_code').val(store_code);
            $.mobile.navigate( "#counting-detail" );
    }
}
var editRecDetail = function(rectify_item_id)
{
      $.ajax({
                    url: "/store/get_rec_item_detail",
                    data: {
                        "rectify_item_id": rectify_item_id,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'GET',
                    success: function (res) {

                            $('#korea_barcode').val(res.korea_barcode);
                            $('#amount').val(res.amount);
                            $('#select_product_name').val(res.product_name);
                            $('#hidden_rec_item_id').val(rectify_item_id);

                            $.mobile.navigate( "#counting-form" );
                    },
                    error: function () {
                        console.log('Save error');
                    }
                });    
       
}
var setAutoCompleteVal = function(label,value)
{
    console.log('open');
    console.log(label);
    console.log(value);
    $('#korea_barcode').val(value);
    $ref_text.val(label);
    $('#select_product_name').val(label);
    $('#autocomplete').html('');
    $('#autocomplete').listview("refresh");
    $('#autocomplete').trigger( "updatelayout");
}
var edit = function(rectify_id)
{
    $('#rectify_id').val(rectify_id)
         $.ajax({
                    url: "/store/get_rec_item",
                    data: {
                        "rectify_id":rectify_id ,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'GET',
                    success: function (res) {
                                console.log(res.length);
                            var oldValue = false;
                            if( $('#counting-detail-list').children().length > 0)
                            {
                                var oldValue = true;
                                $('#counting-detail-list').html('');
                            }
                           for(var idx = 0; idx < res.length; idx++)
                           {   
                                 var rectify_item_template_txt = rectify_item_template.replace(/{rectify_item_id}/g,res[idx].rectify_item_id);
                                 var rectify_item_template_txt = rectify_item_template_txt.replace(/{product_name}/g,res[idx].product_name);
                                 var rectify_item_template_txt = rectify_item_template_txt.replace(/{amount}/g,res[idx].amount);
                                 console.log(rectify_item_template_txt);
                                 $('#counting-detail-list').append($(rectify_item_template_txt));
                           }
                           if(oldValue)
                           {
                                $('#counting-detail-list').listview('refresh');
                           }
                            $.mobile.navigate('#counting-detail');
                    },
                    error: function () {
                        console.log('Save error');
                    }
                });
}
var addProduct = function()
{
   
    $.mobile.navigate('#counting-form');
}
var addNewCount = function()
{
     $('#rectify_id').val('');
    $('#store_code').val('');
}
var backLink = function()
{
    window.history.back();
}
var rectify_item_template = [
,'<li class="rectify_item_id_{rectify_item_id}"><a href="javascript:editRecDetail({rectify_item_id});"><h2>{product_name}</h2><p><strong>{amount}</strong></p></a>',
'<a href="#delete_item_modal"  onclick="javascript:initDeleteItem(\'{rectify_item_id}\');" data-rel="popup" data-position-to="window" data-transition="pop">Delete item</a></li>'].join('');
var rectify_template =[
'<li class="rectify_id_{id}"><a href="javascript:edit({id});">',
            '<h2>{name}</h2>',
                '<p ><strong>{date}</strong></p>',
            '</a>',
                 '<a href="#delete_modal"  onclick="javascript:initDelete(\'{id}\');" data-rel="popup" data-position-to="window" data-transition="pop">Delete entry</a>',
            '</li>'].join('');            
</script>
</body>
</html>