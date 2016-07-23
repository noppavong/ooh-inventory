var myApp;
myApp = myApp || (function () {
    var pleaseWaitDiv = $('#pleaseWaitDialog');
    return {
        showPleaseWait: function() {
            pleaseWaitDiv.modal();
        },
        hidePleaseWait: function () {
            pleaseWaitDiv.modal('hide');
        },

    };
})();
var addressTemplate = ["<fieldset>","<legend>ที่อยู่เดิม #index</legend>","<div class=\"form-group\" >"
    ,"<input type=\"radio\" value=\"#address_id\" name=\"address_id\"  /><label>&nbsp;จัดส่งตามที่อยู่นี้</label>"
   ,"</div>"
   ,"<div class=\"form-group\" >"
        ,"<label> ที่อยู่</label>"
        ,"#address"
   ,"</div>"
     ,"<div class=\"form-group\" >"
        ,"<label> รหัสไปรษณีย์</label>"
        ,"#zipcode"
   ,"</div>"
     ,"<div class=\"form-group\" >"
        ,"<label> จังหวัด</label>"
        ,"#province_desc_th"
   ,"</div>"
,"</fieldset>"
].join('');

 $('body').on('click', '#save-btn-invoice',function(e){
                var $container = $('#input_invoice');
                       //.... your business goes here....
                       // remember to replace $(this) with $(Elem)
                e.preventDefault();
                e.stopPropagation();
                var store_code = $('select[name=store_code]').val();
                var create_date = $('input[name=create_date]').val();
                var invoice_id = $('input[name="invoice_id"]').val();
                var invoice_no =  $('input[name="invoice_no"]').val();
                var ref_order_no = $('input[name="ref_order_no"]').val();
                var discount = $('input[name="discount_percent_all"]').val();
                var customer_code = $('input[name="customer_code"]').val();
                var special_discount = $('input[name="special_discount"]').val();
                var custom_tax_id = $('#custom_tax_id').val();
                var custom_store_name = $('#custom_store_name').val();
                var custom_store_address = $('textarea#custom_store_address').val();
                var custom_store_code = $('#custom_store_code').val();
                var gp = $('input[name="gp"]').val();
                var status = $('select[name="status"]').val();
                myApp.showPleaseWait();
                $.ajax({
                    url: "/ooh-inventory/invoice/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "store_code": store_code,
                        "create_date": create_date,
                        "invoice_no": invoice_no,
                        "invoice_id": invoice_id,
                        "ref_order_no":ref_order_no,
                        "percent_discount":discount,
                        "customer_code":customer_code,
                        "special_discount":special_discount,
                        "gp":gp,
                        "status":status,
                        "custom_store_name":custom_store_name,
                         "custom_store_address":custom_store_address,
                         "custom_tax_id":custom_tax_id,
                         "custom_store_code":custom_store_code,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            $('input[name="invoice_id"]').val(res.invoice_id);
                            window.location.replace('/ooh-inventory/invoice/all');
                        } else {
                            $('input[name="invoice_id"]').val(res.invoice_id);
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        myApp.hidePleaseWait();
                        alert('Save error');
                    }
                });
                return false;
            });

 $('body').on('click', '#save-btn-creditnote',function(e){
                var $container = $('#input_credit_note');
                e.preventDefault();
                var store_code = $('select[name=store_code]').val();
                var store_destination_code = $('select[name=store_destination_code]').val();
                var create_date = $('input[name=create_date]').val();
                var credit_note_id = $('input[name="credit_note_id"]').val();
                var credit_note_no =  $('input[name="credit_note_no"]').val();
                var sum_description = $('input[name="sum_description"]').val();
                var sum_value = $('input[name="sum_value"]').val();
                var remark = $('input[name="remark"]').val();
                var ref_invoice_no = $('input[name="ref_invoice_no"]').val();
                var rtv = $('input[name="rtv"]').val();
                var status = $('select[name="status"]').val();
                var discount = $('input[name="discount_percent_all"]').val();
                var gp = $('input[name="gp"]').val();
                var customer_code = $('input[name="customer_code"]').val();
                var special_discount = $('input[name="special_discount"]').val();
                var status = $('select[name="status"]').val();
                var custom_tax_id = $('#custom_tax_id').val();
                var custom_store_name = $('#custom_store_name').val();
                var custom_store_address = $('textarea#custom_store_address').val();
                var custom_store_code = $('#custom_store_code').val();
                myApp.showPleaseWait();
                $.ajax({
                    url: "/ooh-inventory/credit_note/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "store_code": store_code,
                        "create_date": create_date,
                        "credit_note_no": credit_note_no,
                        "credit_note_id": credit_note_id,
                        "sum_description":sum_description,
                        "sum_value":sum_value,
                        "status":status,
                        "rtv":rtv,
                        "remark":remark,
                        "percent_discount":discount,
                        "ref_invoice_no": ref_invoice_no,
                        "gp":gp,
                        "customer_code":customer_code,
                        "special_discount":special_discount,
                        "status":status,
                        "custom_store_name":custom_store_name,
                         "custom_store_address":custom_store_address,
                         "custom_tax_id":custom_tax_id,
                         "custom_store_code":custom_store_code,

                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            $('input[name="credit_note_id"]').val(res.credit_note_id);
                            window.location.replace('/ooh-inventory/credit_note/all');
                        } else {
                            $('input[name="credit_note_id"]').val(res.credit_note_id);
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        myApp.hidePleaseWait();
                        alert('Save error');
                    }
                });

                return false;
            });
			
			
 $('body').on('click', '#save-btn-receipt',function(evt){
                evt.preventDefault();
            var $container = $('#input_receipt');
                var store_code = $('select[name=store_code]').val();
                var store_destination_code = $('select[name=store_destination_code]').val();
                var create_date = $('input[name=create_date]').val();
                var receipt_id = $('input[name="receipt_id"]').val();
                var receipt_no =  $('input[name="receipt_no"]').val();
                var sum_description = $('input[name="sum_description"]').val();
                var discount = $('input[name="discount_percent_all"]').val();
                var sum_value = $('input[name="sum_value"]').val();
                var status = $('select[name="status"]').val();
                var gp = $('input[name="gp"]').val();
                var special_discount = $('input[name=special_discount]').val();
                var customer_code = $('input[name="customer_code"]').val();
                var custom_tax_id = $('#custom_tax_id').val();
                var custom_store_name = $('#custom_store_name').val();
                var custom_store_address = $('textarea#custom_store_address').val();
                var custom_store_code = $('#custom_store_code').val();
                myApp.showPleaseWait();
                $.ajax({
                    url: "/ooh-inventory/receipt/save",
                    data: {
                        "data": $container.data('handsontable').getData(),
                        "store_code": store_code,
                        "create_date": create_date,
                        "receipt_no": receipt_no,
                        "receipt_id": receipt_id,
                        "sum_description":sum_description,
                        "sum_value":sum_value,
                        "percent_discount":discount,
                        "status":status,
                        "gp":gp,
                        "customer_code":customer_code,
                        "special_discount":special_discount,
                        "custom_store_name":custom_store_name,
                         "custom_store_address":custom_store_address,
                         "custom_tax_id":custom_tax_id,
                         "custom_store_code":custom_store_code,
                    }, //returns all cells' data
                    dataType: 'json',
                    type: 'POST',
                    success: function (res) {
                        myApp.hidePleaseWait();
                        if (res.result === 'ok') {
                            $('input[name="receipt_id"]').val(res.receipt_id);
                            window.location.replace('/ooh-inventory/receipt/all');
                        } else {
                            $('input[name="receipt_id"]').val(res.receipt_id);
                            alert(res.msg);
                        }
                    },
                    error: function () {
                        myApp.hidePleaseWait();
                        alert('Save error');
                    }
                });
            });
var getGpAndCustomerCode = function(store_code,return_gp,return_customer_code)
{

            $.get('/ooh-inventory-test/ajaxutils/get_store_detail/',{
                    store_code:store_code
            },       
             function (data) {     
                return_gp.val(data.gp);
                return_customer_code.val(data.customer_code);
             });
             if(store_code == 'other'){

                     $('.custom_tax_id').show();
                    $('.custom_store_name').show();
                    $('.custom_store_address').show();
                    $('.custom_store_code').show();

            }else{

                     $('.custom_tax_id').hide();
                    $('.custom_store_name').hide();
                    $('.custom_store_address').hide();
                    $('.custom_store_code').hide();
            }
}
var get_store_detail = function(store_code,map_jquery_element)
{

            $.get('/ooh-inventory/ajaxutils/get_store_detail/',{
                    store_code:store_code
            },       
             function (data) { 
                map_jquery_element['store_code_label'].html(data.code);
                map_jquery_element['tax_no'].html(data.tax_id);
                map_jquery_element['store_name'].html(data.name);
                map_jquery_element['branch_code'].html(data.branch_code);    
                map_jquery_element['address'].html(data.address);
                map_jquery_element['customer_code'].val(data.customer_code);
                map_jquery_element['gp'].val(data.gp);    
                if(store_code == 'other'){
                    $('#tax_no').hide();
                    $('#store_name').hide();
                    $('#address').hide();
                     $('#store_code_label').hide();
                     $('#custom_tax_id').show();
                    $('#custom_store_name').show();
                    $('#custom_store_address').show();
                    $('#custom_store_code').show();
                }else{
                    $('#tax_no').show();
                    $('#store_name').show();
                    $('#address').show();
                     $('#store_code_label').show();
                     $('#custom_tax_id').hide();
                    $('#custom_store_name').hide();
                    $('#custom_store_address').hide();
                    $('#custom_store_code').hide();
                }
             });   
}


var prepopAddressForm = function(data)
{
    $('#old_address_list').html('');
    if(data.length > 0)
    {
        for(var i = 0; i<data.length; i ++)
        {
            var addressTemplateEntry = addressTemplate;
            console.log(addressTemplateEntry);
           addressTemplateEntry =  addressTemplateEntry.replace('#index',(i+1));
           addressTemplateEntry =  addressTemplateEntry.replace('#address_id',data[i].address_id);
           addressTemplateEntry =  addressTemplateEntry.replace('#address',data[i].address);
            addressTemplateEntry =  addressTemplateEntry.replace('#zipcode',data[i].zipcode);
            addressTemplateEntry =  addressTemplateEntry.replace('#province_desc_th',data[i].desc_th);
            var $row = $(addressTemplateEntry);
            $row.find('input[type="radio"]').iCheck({checkboxClass: 'icheckbox_minimal',radioClass: 'iradio_minimal'});
            $('#old_address_list').append($row);
        }
    }
}
var prepopCustomerForm = function(customer)
{
    if(customer)
    {

        console.log('GO');
        $('#customer_id').val(customer.id);
        $('#name').val(customer.name);
        $('#surname').val(customer.surname);
        $('#line_id').val(customer.line_id);
        $('#email').val(customer.email);
        $('#telephone_no').val(customer.telephone_no);
        if(customer.id)
        {
            $.get('/ooh-inventory/ajaxutils/get_address/',{
                    customer_id:customer.id
            },       
             function (data) {
                prepopAddressForm(data);            
                $('#customer-modal').modal('hide');
             });
        }else{
               $('#customer-modal').modal('hide');
        }

    }
}
var getCustomerlist = function(search_name,search_email,search_line,telephone_no)
{

    $.get('/ooh-inventory/ajaxutils/get_customer/',{
            data: {name:search_name,
                email:search_email,
                line:search_line,
                telephone_no:telephone_no
            },
    },
    function (data) {
        $('#customer-search-listbody').empty();
        if(data.length > 0)
        {
            for(var i = 0; i<data.length; i ++)
            {
                var row = ['<tr>',
                        '<td>'+data[i].name+'</td>',
                        '<td>'+data[i].surname+'</td>',
                        '<td>'+data[i].email+'</td>',
                        '<td>'+data[i].line_id+'</td>',
                        '</tr>'
                        ].join('');
                var $row = $(row);
                $row.on('click',{val: data[i] },function(evt){
                    prepopCustomerForm(evt.data.val);
                });
                $row.css('cursor','pointer');
                $('#customer-search-listbody').append($row);
            }
        }
    });
}
var initListTable = function(table_id)
{
      var table =   $('#'+table_id).dataTable( {columnDefs: [
                           { type: 'date-uk', targets:0 }
                         ], "order": [[ 0, "desc" ]]});
    $('.dataTables_filter').css('display','none');
   $( '#issue_no' ).on( 'keyup change', function () {
       table.api()
            .column( 1 )
            .search( this.value )
            .draw();
    } );
   $( '#issue_place' ).on( 'keyup change', function () {
        table.api()
            .column( 2 )
            .search( this.value )
            .draw();
    } );
   $( '#issue_date' ).on( 'keyup change', function () {
        table.api()
            .column( 0 )
            .search( this.value )
            .draw();
    } );
}
var confirm_url = function(url)
{
    if(confirm("press ok to confirm"))
    {
        window.location.replace(url);
    }
}
var get_current_stock = function(change_korea_barcode, change_row, table_id, change_index,store_code){
    var change_value = change_korea_barcode.join(',');
    $.get('/ooh-inventory/ajaxutils/get_stock_by_kbarcode/',{
            data: change_value,
            store_code:store_code
    },
    function (data) {

            for (var index = 0; index < change_korea_barcode.length; index++) {
                if(data[change_korea_barcode[index]])
                {    
                    $('#'+table_id).handsontable('setDataAtCell', change_row[index], change_index , data[change_korea_barcode[index]].amount);
                }else{

                    $('#'+table_id).handsontable('setDataAtCell', change_row[index], change_index , 0);
                }
            }
    });
}
var get_update_name = function (change_korea_barcode, change_row, table_id, change_index) {
    var change_value = change_korea_barcode.join(',');
    if(change_value)
    {
        $.get('/ooh-inventory/ajaxutils/get_product_by_kbarcode/',{
                data: change_value
        },
        function (data) {
                for (var index = 0; index < change_korea_barcode.length; index++) {
                    
                    if(data[change_korea_barcode[index]])
                    {
                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], change_index ,  data[change_korea_barcode[index]].product_name);
                    }else{
                        alert('ไม่พบ barcode ['+change_korea_barcode[index]+'] ในระบบ');
                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], change_index , "not found");
                        break;
                    }
                }
        });
    }
};
var get_update_price =  function (change_korea_barcode, change_row, table_id, price_index) {
     var change_value = change_korea_barcode.join(',');

    var channel_id = $('#channel_id');
    var discount_all = channel_id.find(":selected").attr('discount');
    
    $.get('/ooh-inventory/ajaxutils/get_pricing_by_kbarcode/', {
            data: change_value 
    },
    function (data) {
        for (var index = 0; index < change_korea_barcode.length; index++) {  
                var quantity = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"amount");
                var percent_discount = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"percent_discount");
                
                if(data[change_korea_barcode[index]])
                {                     
                    if(percent_discount) {
                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index, data[change_korea_barcode[index]].mt_price*(1-(percent_discount*0.01)));
                        // $('#'+table_id).handsontable('setDataAtCell', change_row[index],price_index-1,discount_percent);
                        if(quantity){
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index+1, quantity*data[change_korea_barcode[index]].mt_price*(1-(percent_discount*0.01)));
                        }
                    }else if(discount_all){                                
                        $('#'+table_id).handsontable('setDataAtRowProp', change_row[index],"percent_discount",discount_all);
                       $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index, data[change_korea_barcode[index]].mt_price*(1-(discount_all*0.01)));
                        // $('#'+table_id).handsontable('setDataAtCell', change_row[index],price_index-1,discount_percent);
                        if(quantity){
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index+1, quantity*data[change_korea_barcode[index]].mt_price*(1-(discount_all*0.01)));
                        }

                    } else{                                
                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index, data[change_korea_barcode[index]].mt_price);
                        if(quantity){
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index+1, quantity*data[change_korea_barcode[index]].mt_price);
                        }
                    }
                }
        }
    });
}
var get_update_sumprice = function(table_id,change_row,quantity_index){

        var quantity = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"amount");
        var price = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"price");
           if(quantity){
            $('#'+table_id).handsontable('setDataAtCell', change_row, quantity_index, quantity*price);
        }    
}
var check_manual = function (korea_barcode,current_price){
    $.get('/ooh-inventory/ajaxutils/get_pricing_by_kbarcode/', {
            data: korea_barcode 
    },

    function (data) {
        var mt_price = data[korea_barcode].mt_price;
        console.log('mt price'+mt_price);
        console.log('exact calculate'+(mt_price * (1-(discount_percent_all*0.01))));
        if(mt_price && (mt_price * (1-(discount_percent_all*0.01))) !== current_price){
            console.log('manual');
            discount_percent_all = '';
            $('input.discount').val('');
        }
    });
}
var get_update_price2 =  function (change_korea_barcode, change_row, table_id , price_index, discount_percent) {
    console.log('get_update_price2');
    var change_value = change_korea_barcode.join(',');
    $.get('/ooh-inventory/ajaxutils/get_pricing_by_kbarcode/', {
            data: change_value 
    },
    function (data) {
        for (var index = 0; index < change_korea_barcode.length; index++) {  
                var quantity = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"amount");
                if(data[change_korea_barcode[index]]){ 
                    if(discount_percent > 0) {

                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index, data[change_korea_barcode[index]].mt_price*(1-(discount_percent*0.01)));
                       if(quantity){
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index+1, quantity*data[change_korea_barcode[index]].mt_price*(1-(discount_percent*0.01)));
                        }

                    }else{                             

                        $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index, data[change_korea_barcode[index]].mt_price);
                        if(quantity){
                            $('#'+table_id).handsontable('setDataAtCell', change_row[index], price_index+1, quantity*data[change_korea_barcode[index]].mt_price);
                        }
                    }
                }
        }
    });
}
var initTable = function(table_id,data,options){
    function getTotal(){
            return data.reduce(function(sum, row){
               return sum + (row["price"]*row["amount"]); 
            }, 0);
    }
      var $container = $('#'+table_id);
      $('#'+table_id).handsontable({
        data: data,
        dataSchema: {
            korea_barcode: null,
            amount: null,
            percent_discount: null,
            price: null,
            sum_amount: null,
            product_name: null,
        },
        minSpareRows: 2,
        minSpareCols: 6,
        maxCols: 6,
        colWidths: [100, 100, 100, 100, 100, 200],
        contextMenu: true,
        colHeaders: ['korea barcode', 'quantity' , 'discount(%)' , 'price/unit' , 'amount' , 'product name'],
        columns: [{
            data: "korea_barcode",
              renderer: function(instance, td, row, col, prop, value){
                    if(row == instance.countRows() - 1){
                        td.style.fontWeight = 'bold';
                        td.style.textAlign = 'right';
                        td.innerText = 'Total Price: ';
                        return;
                    } else {
                        Handsontable.NumericRenderer.apply(this, arguments);
                    }
            }
        }, {

            data: "amount",
            type: 'numeric',
        }, {

            data: "percent_discount",
             type: 'numeric',
            format: '0.00',
        },{
            data: "price",
            type: 'numeric',
            format: '0.00'
        },{
            data: "sum_amount",
             type: 'numeric',
            format: '0.00',
            renderer: function(instance, td, row, col, prop, value){
                if(row == instance.countRows() - 1){
                    value = getTotal();
                }                
                Handsontable.NumericRenderer.apply(this, arguments);
                
            }
        },{
            data: "product_name",
            readOnly: true
        },],
        afterChange: function (changes, source) {
            if (changes) { 
                var change_row_list = [];
                var change_value_list = [];
                for (var i = 0; i < changes.length; i++) {
                    var change_row = changes[i][0];
                    var change_column = changes[i][1];
                    var change_value = changes[i][3];
                    if (change_column === "korea_barcode") {
                        change_row_list.push(change_row);
                        change_value_list.push(change_value);
                    }
                    else if (change_column === "percent_discount")
                    {   var korea_barcode = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"korea_barcode");
                        change_row_list.push(change_row);
                        change_value_list.push(korea_barcode);
                        
                    }
                    if(change_column === "amount"||change_column === "price") {
                        get_update_sumprice(table_id,change_row,4);
                    }
                }
                if (change_row_list.length > 0) {
                    get_update_name(change_value_list, change_row_list,table_id,5);
                    get_update_price(change_value_list,change_row_list,table_id,3);
                }
                $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
            }
            var ht = $('#'+table_id).handsontable('getInstance');
            ht.selectCell(change_row + 1, change_column);
        },
    });
    $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
}
      
     var discount_percent_all = '';
     var change_in_discount = false;
   var change_discount = function(table_id)
    {
        var maxrow_data = $('#'+table_id).handsontable('countRows') -2;
        var change_row_list = [];
        var change_value_list = [];

        var discount = $('input.discount').val()||0;
        discount_percent_all = discount;
        for(var i = 0 ;i< maxrow_data;i++)
        {
            if(discount >= 0)
            {    
                var korea_barcode = $('#'+table_id).handsontable('getDataAtRowProp', i,"korea_barcode");
                if(korea_barcode)
                {
                    change_value_list.push(korea_barcode);
                    change_row_list.push(i);
                }
            }
        }
        if(change_row_list.length > 0)
        {
            get_update_price2(change_value_list,change_row_list,table_id,2,discount);
        }
    }

var initTable2 = function(table_id,data,options){
    function getTotal(){
            return data.reduce(function(sum, row){
               return sum + (row["price"]*row["amount"]); 
            }, 0);
    }

     if(options.discount){
        discount_percent_all = options.discount;
     }
      var $container = $('#'+table_id);
      $('#'+table_id).handsontable({
        data: data,
        readOnly:options.readonly,
        dataSchema: {
            korea_barcode: null,
            amount: null,
            price: null,
            price_with_amount:null,
            product_name: null,
        },
        minSpareRows: 2,
        minSpareCols: 5,
        maxCols: 5,
        colWidths: [100, 60, 200 ,100, 200],
        contextMenu: true,
        colHeaders:function (col) {
                switch (col) {
                  case 0:
                    return "<b>รหัสสินค้า<br/>product</b>";

                  case 1:
                    return "<b>จำนวน<br/>quantity</b>";
                  case 2:
                    var txt = "<b>ราคา/หน่วย<br/>price/unit (discount </b><input type='text' class='discount' onblur='change_discount(\""+table_id+"\")'   name='discount_percent_all' value='"+discount_percent_all+"' style='width:40px' /> <b> %) </b>";
                    return txt;
                  case 3:
                    return "<b>จำนวนเงิน <br/>amount</b>";  
                  case 4:
                    return "<b>รายละเอียด<br/>description</b>";  
                }
              },
        columns: [{
            data: "korea_barcode",
              renderer: function(instance, td, row, col, prop, value){
                    if(row == instance.countRows() - 1){
                        td.style.fontWeight = 'bold';
                        td.style.textAlign = 'right';
                        td.innerText = 'รวมเป็นเงิน \n GROSS AMOUNT  ';
                        return;
                    } else {
                        Handsontable.NumericRenderer.apply(this, arguments);
                    }
            }
        }, {

            data: "amount",
            type: 'numeric',
        },{
            data: "price",
            type: 'numeric',
            format: '0.00',            
        }, {

            data: "price_with_amount",
            type: 'numeric',
            format: '0.00',
            renderer: function(instance, td, row, col, prop, value){
                if(row == instance.countRows() - 1){
                    value = getTotal();
                }                
                Handsontable.NumericRenderer.apply(this, arguments);
                
            }
        },{
            data: "product_name",
            readOnly: true
        },],
        beforeChange:function(changes,source){
            if(changes){
                console.log(changes);
                for (var i = 0; i < changes.length; i++) {
                    var change_row = changes[i][0];
                    var change_column = changes[i][1];
                    var change_value = changes[i][3];
                    var korea_barcode = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"korea_barcode");
                    if(change_column === "price"){
                        var old_value = changes[i][2];
                        var new_value = changes[i][3];

                        console.log('discount_percent'+ discount_percent_all);
                        console.log('old_value '+ old_value);
                        console.log('new_value '+ new_value);
                        if(discount_percent_all && old_value > 0
                         && old_value !== new_value && old_value  * (1-(discount_percent_all*0.01)) !== new_value 
                        )
                        {

                            console.log('korea_barcode manual'+korea_barcode);
                            check_manual(korea_barcode,new_value);
                            
                        }
                    }
                }

                if(change_in_discount)
                {
                    change_in_discount = false;
                }
            }
        },
        afterChange: function (changes, source) {
            if (changes) { 
                var change_row_list = [];
                var change_value_list = [];
                for (var i = 0; i < changes.length; i++) {
                    var change_row = changes[i][0];
                    var change_column = changes[i][1];
                    var change_value = changes[i][3];
                    if (change_column === "korea_barcode") {
                        change_row_list.push(change_row);
                        change_value_list.push(change_value);
                    }
                    
                    if(change_column === "amount"||change_column === "price") {
                        console.log('get_update_sumprice');
                        get_update_sumprice(table_id,change_row,3);
                    }
                   
                }
                if (change_row_list.length > 0) {             
                    get_update_name(change_value_list, change_row_list,table_id,4);
                    get_update_price2(change_value_list,change_row_list,table_id,2,discount_percent_all);
                }
                $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
            }
            var ht = $('#'+table_id).handsontable('getInstance');
            ht.selectCell(change_row + 1, change_column);
        },
    });
    $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
    $('input[name=discount_percent_all]').on('change', function (event) {
      discount_percent_all = $(this).val();
    });

    
    $(document).on('keydown' , 'input.discount', function(ev) {
        
        if(ev.which === 13) {
            discount_percent_all = $(this).val();
            change_in_discount = true;
            var maxrow_data = $('#'+table_id).handsontable('countRows') -2;
            var change_row_list = [];
            var change_value_list = [];

            for(var i = 0 ;i< maxrow_data;i++)
            {
                var discount = $(this).val()||0;
                if(discount >= 0)
                {    
                    var korea_barcode = $('#'+table_id).handsontable('getDataAtRowProp', i,"korea_barcode");
                    if(korea_barcode)
                    {
                        change_value_list.push(korea_barcode);
                        change_row_list.push(i);

                    }
                }
            }
            if(change_row_list.length > 0)
            {
                get_update_price2(change_value_list,change_row_list,table_id,2,discount);
            }
            
            
            return false;
        }
    });
}
var initStockTable = function(table_id,data)
{           
             function getTotal(){
                    return data.reduce(function(sum, row){
                        if(row["amount"])
                        {
                            return sum + row["amount"]; 
                        }
                        else
                        {
                            return sum + row["amount"];
                        }
                    }, 0);
            }
            var $container = $('#input_stock');   
             $('#'+table_id).handsontable({
                data: data,
                dataSchema: {
                    last_store_amount:null,
                    korea_barcode: null,
                    amount: null,
                    after_cut:null,
                    product_name: null
                },
                minSpareRows: 2,
                minSpareCols: 5,
                maxCols: 5,
                colWidths: [100, 200, 100, 100, 200],
                contextMenu: true,
                colHeaders: ['korea barcode','previous_amount','amount','after_cut','product name'],
                columns: [{
                    data: "korea_barcode",
                      renderer: function(instance, td, row, col, prop, value){
                            if(row == instance.countRows() - 1){
                                td.style.fontWeight = 'bold';
                                td.style.textAlign = 'right';
                                td.innerText = 'Total: ';
                                return;
                            } else {
                                Handsontable.NumericRenderer.apply(this, arguments);
                            }
                    }
                }, {

                    data: "previous_amount",
                    type: 'numeric',
                }, {

                    data: "amount",
                    type: 'numeric',
                    renderer: function(instance, td, row, col, prop, value){
                        if(row == instance.countRows() - 1){
                            value = getTotal();
                        }                
                        Handsontable.NumericRenderer.apply(this, arguments);
                        
                    }
                }, {

                    data: "after_cut",
                    type: 'numeric',
                },{
                    data: "product_name",
                    readOnly: true
                }, ],
                afterChange: function (changes, source) {
                    console.log(changes);
                    if (changes) {
                        //do set column 

                        var change_row_list = [];
                        var change_value_list = [];
                        for (var i = 0; i < changes.length; i++) {
                            var change_row = changes[i][0];
                            var change_column = changes[i][1];
                            var change_value = changes[i][3];
                            if (change_column === "korea_barcode") {
                                change_row_list.push(change_row);
                                change_value_list.push(change_value);
                            }
                            if (change_column === "amount") {
                                 var previous_amount = $('#'+table_id).handsontable('getDataAtRowProp', change_row,"previous_amount");
                                  $('#'+table_id).handsontable('setDataAtCell', change_row, 3 , previous_amount-change_value);
                            }

                        }
                        if (change_row_list.length > 0) {
                            get_update_name(change_value_list, change_row_list,table_id,4);
                            get_current_stock(change_value_list, change_row_list,table_id,1,$('select[name=store_source_code]').val());
                        }

                        $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
                    }
                    var ht = $('#'+table_id).handsontable('getInstance');
                    ht.selectCell(change_row + 1, change_column);
                },
            });
}

// var initPurchaseTable = function(table_id,data){
//     function getTotal(){
//             return data.reduce(function(sum, row){
//                return sum + (row["price"]*row["amount"]); 
//             }, 0);
//     }
//       var $container = $('#'+table_id);
//       $('#'+table_id).handsontable({
//         data: data,
//         dataSchema: {
//             korea_barcode: null,
//             amount: null,
//             mt_price:null,
//             percent_discount: null,
//             price: null,
//             product_name: null,
//         },
//         minSpareRows: 2,
//         minSpareCols: 4,
//         maxCols: 4,
//         colWidths: [100, 100, 100 , 200],
//         contextMenu: true,
//         colHeaders: ['korea barcode', 'amount', 'price/unit' , 'product name'],
//         columns: [{
//             data: "korea_barcode",
//               renderer: function(instance, td, row, col, prop, value){
//                     if(row == instance.countRows() - 1){
//                         td.style.fontWeight = 'bold';
//                         td.style.textAlign = 'right';
//                         td.innerText = 'Total: ';
//                         return;
//                     } else {
//                         Handsontable.NumericRenderer.apply(this, arguments);
//                     }
//             }
//         }, {

//             data: "amount",
//             type: 'numeric',
//         },{
//             data: "price",
//              type: 'numeric',
//             format: '0.00',
//             renderer: function(instance, td, row, col, prop, value){
//                 if(row == instance.countRows() - 1){
//                     value = getTotal();
//                 }                
//                 Handsontable.NumericRenderer.apply(this, arguments);
                
//             }
//         },{
//             data: "product_name",
//             readOnly: true
//         },],
//         afterChange: function (changes, source) {
//             if (changes) { 
//                 var change_row_list = [];
//                 var change_value_list = [];
//                 for (var i = 0; i < changes.length; i++) {
//                     var change_row = changes[i][0];
//                     var change_column = changes[i][1];
//                     var change_value = changes[i][3];
//                     if (change_column === "korea_barcode") {
//                         change_row_list.push(change_row);
//                         change_value_list.push(change_value);
//                     }
//                 }
//                 if (change_row_list.length > 0) {
//                     get_update_name(change_value_list, change_row_list,table_id,3);
//                     get_update_price(change_value_list,change_row_list,table_id,2,2,2,null);
//                 }
//                 $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
//             }
//             var ht = $('#'+table_id).handsontable('getInstance');
//             ht.selectCell(change_row + 1, change_column);
//         },
//     });
//     $('input[name=data]').val(JSON.stringify($container.data('handsontable').getData()));
// }