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
                        <th class="col-xs-1 text-center"  ><strong>ลำดับ <br/>Item</strong></th>
                        <th class="col-xs-2 text-center"><strong>รหัสสินค้า <br/>product</strong> </th>
                        <th class="col-xs-6 text-center"  ><strong>รายละเอียด <br/> description</strong></th>
                        <th class="col-xs-1 text-center" colspan="2" ><strong>ราคา/หน่วย <?php if($percent_discount >0 ) {?>(ลด <?php echo $percent_discount ?> %) <?php } ?><br/> price/unit <?php if($percent_discount >0 ) {?>(<?php echo $percent_discount ?> % off) <?php } ?></strong></th>
                        <th class="col-xs-1 text-center" ><strong>จำนวน <br/> quantity</strong></th>
                        <th class="col-xs-1 text-center" ><strong>จำนวนเงิน<br/>amount</strong></th>
                    </tr>
                </thead>
                <tbody>

                  <?php if($summary_text) { ?>
                  <tr>
                      <td class="col-xs-1 text-center"  ><p></p></td>
                      <td class="col-xs-2 text-center"><p> </p> </td>
                      <td class="col-xs-6 text-left" ><p><?php echo $summary_text ?></p></td>
                      <td class="col-xs-1 text-right" colspan="2" ><p></p></td>
                      <td class="col-xs-1 text-center" ><p></p></td>
                      <td class="col-xs-1 text-right" ><p><?php echo number_format((float)($summary_value), 2, '.', ','); ?></p></td>
                  </tr>
                  <?php } ?>
                  <?php $last_page = FALSE; ?>
                 <?php if(!empty($query_transaction_detail)){ ?>
                     <?php foreach ($query_transaction_detail as $row) { ?>
                       <?php $last_page = ($result_row === $row->index);?>    
                        <tr>
                            <td class="col-xs-1 text-center" ><p><?php echo $row->index; ?></p></td>
                            <?php if(empty($thai_barcode)){ ?>
                             <td class="col-xs-2 text-center" ><p><?php echo $row->product_korea_barcode ?> </p> </td>
                            <?php } else { ?>
                             <td class="col-xs-2 text-center" ><p><?php echo $row->thai_barcode ?> </p> </td>
                            <?php } ?>
                            <td class="col-xs-6 text-left"  ><p><?php echo $row->product_name ?></p></td>
                            <td class="col-xs-1 text-right"colspan="2" ><p><?php echo number_format((float)($row->price),2,'.',',');?></p></td>
                            <td class="col-xs-1 text-center" ><p><?php echo $row->amount ?></p></td>
                              <td class="col-xs-1 text-right" ><p><?php echo number_format((float)($row->price * $row->amount), 2, '.', ','); ?></p></td>
                        </tr>  
                    <?php  } ?>
                  <?php } ?>
                  <?php if(($last_page && !$sum_next_page) || $summary_text){ ?>
                      <tr>
                          <td class="col-xs-8 text-left" colspan= "3" style="border-bottom:0px" ><p>
                            <?php if($invoice_no) { ?>
                            บริษัทฯ จะคิดดอกเบี้ยร้อยละ 1.5 ต่อเดือนของจำนวนเงินที่ยังค้างชำระเมื่อครบกำหนดชำระแล้ว<br/>
                            INTEREST AT 1.5% PER MONTH WILL BE CHARGES ON OVERDUE ACCOUNTS
                            <?php } else if($receipt_no){ ?>
                              โปรดชำระเงินด้วยเช็คคร่อม หรือ สั่งจ่ายในนามบัญชี ' บริษัท วีเทรนด์ อินเตอร์เทรด จำกัด '
                              Payment should be made by cross cheque or A/C Payee only in favour of " VTREND INTERTRADE CO., LTD. ".
                            <?php } else if($credit_note_no){ ?>
                              <strong> หมายเหตุ </strong><span><?php echo $remark; ?> </span>
                            <?php } ?>
                          </p>
                          </td>
                          <td class="col-xs-2 text-left"  colspan= "3" > <p>รวมเป็นเงิน<br/>GROSS AMOUNT</p></td>
                          <td class="col-xs-2 text-right"  ><span><?php echo number_format((float)$sum_price, 2, '.', ',');  ?></span>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-xs-8 text-left" colspan= "3" style="border-top:0px;border-bottom:0px"></td>
                          <td class="col-xs-3 text-left" colspan="3" > <span>หัก ส่วนลด/มัดจำ</span> </br>
                            <p ><span >LESS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GP&nbsp;&nbsp;<?php  echo $gp.'%';?></span></p></td>
                          <td class="col-xs-1 text-right"  > <span><?php echo number_format((float)$gp_value, 2, '.', ','); ?></span></td>                       
                      </tr>
                      <tr>
                          <td class="col-xs-8 text-left" colspan= "3" style="border-top:0px;border-bottom:0px"></td>
                          <td class="col-xs-3 text-left" colspan="3" > <span>หัก ส่วนลดพิเศษ</span></td>
                          <td class="col-xs-1 text-right"  > <span><?php echo number_format((float)$special_discount, 2, '.', ','); ?></span></td>                       
                      </tr>
                       <tr>
                          <td class="col-xs-8 text-left" colspan= "3"  style="border-top:0px;border-bottom:0px"></td>
                          <td class="col-xs-3 text-left" colspan="3" > <p>จำนวนเงินหลังหักส่วนลด </br>
                                  TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ก่อนภาษีมูลค่าเพิ่ม)</p></td>                 
                          <td class="col-xs-1 text-right"  > <span><?php echo number_format((float)$total_before_tax, 2, '.', ',');  ?></span></td>                       
                      </tr>
                       <tr>
                          <td class="col-xs-4 text-left" colspan= "2" style="border-top:0px;border-right:0px;"><?php if($invoice_no) { ?><span>สินค้าซื้อแล้วไม่รับเปลี่ยนหรือคืน</span><?php } ?></td>            
                          <td class="col-xs-4 text-left" colspan= "1" style="border-top:0px;border-left:0px;"><?php if($invoice_no) { ?><span>หมายเลขฝากขาย<?php  echo $customer_code;  ?></span><?php }?></td>
                          <td class="col-xs-3 text-left" colspan="3"  ><p >ภาษีมูลค่าเพิ่ม<br/> VAT</p></td>                    
                          <td class="col-xs-1 text-right" > <span><?php echo number_format((float)$vat, 2, '.', ',');  ?></span></td>                       
                      </tr></span></td>                       
                      </tr>   
                        <tr>
                          <td class="col-xs-1 text-left"  style="border-left:double;border-top:double;border-bottom:double"><p>บาท <br/>Baht</p></td>
                          <td class="col-xs-7 text-left" colspan= "2"  style="border-left:1px solid;border-top:double;border-bottom:double;border-right:1px solid"><span><?php echo $grand_total_thai; ?></span></td>
                          <td class="col-xs-3 text-left" colspan="3" style="border-top:double;border-left:1px solid;border-right:1px solid;border-bottom:double;border-left:1px solid"><p>ยอดเงินสุทธิ<br/>GRAND TOTAL</p></td>                       
                          <td class="col-xs-1 text-right"  style="border-top:double;border-left:1px solid;border-right:double;border-bottom:double" ></span><?php echo number_format((float)$grand_total, 2, '.', ',');  ?></td>                       
                        </tr>              
                <?php } ?>
                </tbody>
                
            </table>

</div>

 <?php if(($last_page && !$sum_next_page) || $summary_text) { ?>
  <div class="row" style="padding-right:0px">
     <?php if($invoice_no || $credit_note_no) { ?>
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
     <?php } ?>
     <?php if($receipt_no) { ?>
      <div class="col-xs-4" >
        <p>ใบเสร็จรับเงินนี้จะสมบูรณ์ต่อเมื่อผู้รับเงิน และผู้รับมอบอำนาจ
         ลงลายมือชื่อร่วมกัน และ เช็คเรียกเก็บเงินจากธนาคารถูกต้องเรียบร้อยแล้ว</p>
        <p>This receipt will be valid only if signed by both receiver and authorized officer and after full collection is made on relevent cheque.</p>
      </div>
      <div class="col-xs-3 "  style="border:1px solid black;text-align:center;margin:0px;" >
        <br/>
        <p>...............................................</p>
        <p>ผู้รับเงิน/Received by</p>
        <p>............./............./.............</p>
      </div>

     <?php } ?>
      <div class="col-xs-3 "  style="border:1px solid black;text-align:center;margin:0 30px;" > 
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
