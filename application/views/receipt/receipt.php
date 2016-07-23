<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
    <br/>
    <br/>
    <br/>
          <div class="row">
            <table class="table detail" style="border-collapse: separate;line-height:20px;border: 1px solid black">
                <thead>
                    <tr >
                        <th class="col-xs-1 text-center" ><strong>ลำดับ <br/>Item</strong></th>
                        <th class="col-xs-2 text-center" ><strong>รหัสสินค้า <br/>product</strong> </th>
                        <th class="col-xs-5 text-center" ><strong>รายละเอียด <br/> description</strong></th>
                        <th class="col-xs-1 text-center" ><strong>ราคา/หน่วย<br/> price/unit</strong></th>
                        <th class="col-xs-1 text-center" ><strong>จำนวน <br/> quantity</strong></th>
                        <th class="col-xs-1 text-center" ><strong>ส่วนลด</strong></th>
                        <th class="col-xs-2 text-center" ><strong>จำนวนเงิน</strong></th>
                    </tr>
                </thead>
                <tbody>
                  <?php if(!empty($summary_text) && !empty($summary_value)) { ?>
                  <tr>
                      <td class="col-xs-1 text-center" ><p></p></td>
                      <td class="col-xs-2 text-center" ><p> </p> </td>
                      <td class="col-xs-5 text-left" ><p><?php echo $summary_text ?></p></td>
                      <td class="col-xs-1 text-right" ><p></p></td>
                      <td class="col-xs-1 text-center" ><p></p></td>
                      <td class="col-xs-1 text-center" ><p></p></td>
                      <td class="col-xs-2 text-right" ><p><?php echo number_format((float)($summary_value), 2, '.', ','); ?></p></td>
                  </tr>


                  <?php } ?>
                  <?php $last_page = FALSE; 
                  if(!empty($query_transaction_detail)){ ?>
                     <?php foreach ($query_transaction_detail as $row) { 
                          if($result_row == $row->index){
                            $last_page = TRUE;
                          }
                      ?>    
                        <tr>
                            <td class="col-xs-1 text-center" ><p><?php echo $row->index; ?></p></td>
                            <?php if(empty($thai_barcode)){ ?>
                             <td class="col-xs-2 text-center" ><p><?php echo $row->product_korea_barcode ?> </p> </td>
                            <?php } else { ?>
                             <td class="col-xs-2 text-center" ><p><?php echo $row->thai_barcode ?> </p> </td>
                            <?php } ?>
                            <td class="col-xs-5 text-left" ><p><?php echo $row->product_name ?></p></td>
                            <td class="col-xs-1 text-right" ><p><?php echo number_format((float)( $row->price),2,'.',',');?></p></td>
                            <td class="col-xs-1 text-center" ><p><?php echo $row->amount ?></p></td>
                            <td class="col-xs-1 text-center" ><p></p></td>
                            <td class="col-xs-2 text-right" ><p><?php echo number_format((float)($row->price * $row->amount), 2, '.', ','); ?></p></td>
                        </tr>  
                  <?php  } ?>
                  <?php } ?>
                  <?php if(($last_page && !$sum_next_page) || !empty($summary_text)){ ?>
                      <tr>
                          <td class="col-xs-8 text-left" colspan= "4" style="border-bottom:0px" ><p>
บริษัทฯ จะคิดดอกเบี้ยร้อยละ 1.5 ต่อเดือนของจำนวนเงินที่ยังค้างชำระเมื่อครบกำหนดชำระแล้ว<br/>
INTEREST AT 1.5% PER MONTH WILL3 BE CHARGES ON OVERDUE ACCOUNTS</p></td>
                          <td class="col-xs-2 text-left"  colspan= "2" > <p>รวมเป็นเงิน<br/>GROSS AMOUNT</p></td>
                          <td class="col-xs-2 text-right"  ><span><?php echo number_format((float)$sum_price, 2, '.', ',');  ?></span>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-xs-8 text-left" colspan= "4" style="border-top:0px;border-bottom:0px"></td>
                          <td class="col-xs-3 text-left" colspan="2" > <span>หัก ส่วนลด/มัดจำ</span> </br>
<p ><span >LESS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GP&nbsp;&nbsp;<?php if(!empty($special_gp)){echo $special_gp.'%';}else{ echo $store_detail->gp.'%';} ?></span></p></td>
                          <td class="col-xs-1 text-right"  > <span><?php echo number_format((float)$gp_value, 2, '.', ','); ?></span></td>                       
                      </tr>
                       <tr>
                          <td class="col-xs-8 text-left" colspan= "4"  style="border-top:0px;border-bottom:0px"></td>
                          <td class="col-xs-3 text-left" colspan="2" > <p>จำนวนเงินหลังหักส่วนลด </br>
TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ก่อนภาษีมูลค่าเพิ่ม)</p></td>                 
                          <td class="col-xs-1 text-right"  > <span><?php echo number_format((float)$total_before_tax, 2, '.', ',');  ?></span></td>                       
                      </tr>
                       <tr>
                          <td class="col-xs-4 text-left" colspan= "2" style="border-top:0px;border-right:0px;"><span>สินค้าซื้อแล้วไม่รับเปลี่ยนหรือคืน</span></td>            
                          <td class="col-xs-4 text-left" colspan= "2" style="border-top:0px;border-left:0px;"><span>หมายเลขฝากขาย<?php if(!empty($special_code)){ echo $special_code; }else{ echo $store_detail->customer_code;} ?></span></td>
                          <td class="col-xs-3 text-left" colspan="2"  ><p >ภาษีมูลค่าเพิ่ม<br/> VAT</p></td>                    
                          <td class="col-xs-1 text-right" > <span><?php echo number_format((float)$vat, 2, '.', ',');  ?></span></td>                       
                      </tr></span></td>                       
                      </tr>   
                        <tr>
                          <td class="col-xs-1 text-left"  style="border-left:double;border-top:double;border-bottom:double"><p>บาท <br/>Baht</p></td>
                            <td class="col-xs-7 text-left" colspan= "3"  style="border-left:1px solid;border-top:double;border-bottom:double;border-right:1px solid"><span><?php echo $grand_total_thai; ?></span></td>
                          <td class="col-xs-3 text-left" style="border-top:double;border-left:1px solid;border-right:1px solid;border-bottom:double;border-left:1px solid" colspan="2" ><p>ยอดเงินสุทธิ<br/>GRAND TOTAL</p></td>                       
                           <td class="col-xs-1 text-right" style="border-top:double;border-left:1px solid;border-right:double;border-bottom:double" ></span><?php echo number_format((float)$grand_total, 2, '.', ',');  ?></td>                       
      
                        </tr>              
                <?php } ?>
                </tbody>
                
            </table>

</div>

 <?php if(($last_page && !$sum_next_page) || $summary_value) { ?>
  <div class="row">
      <div class="col-xs-3" style="border:1px solid black;text-align:center" >
         <br/>
        <p>...............................................</p>
        <p>ผู้รับ/Received by</p>
        <p>............./............./.............</p>

      </div>
      <div class="col-xs-3 "  style="border:1px solid black;text-align:center;margin:0 45px;" >
        <br/>
        <p>...............................................</p>
        <p>ผู้ส่ง/Delivered by</p>
        <p>............./............./.............</p>
      </div>
      <div class="col-xs-3 "  style="border:1px solid black;text-align:center;margin:0 45px;" > 
      <br/>
        <p>...............................................</p>
        <p>ผู้มีอำนาจลงนาม/Authorized by</p>
        <p>............./............./.............</p>
      </div>
  </div>
<?php } ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html> 
