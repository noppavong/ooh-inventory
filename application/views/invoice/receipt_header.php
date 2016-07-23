        <div >
            <div class="col-xs-13" style="text-align:right">
              <p>
              หน้า {PAGENO} of {nbpg}
              </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <p>
                    <strong class="lead">บริษัท วีเทรนด์ อินเตอร์เทรด จำกัด (สำนักงานใหญ่)</strong><br/>
                    <strong class="lead">VTREND INTERTRADE CO.,LTD.</strong><br/>
                    158 หมู่ 6 ถ.สุขุมวิท ต.สำโรงเหนือ อ.เมือง จ.สมุทรปราการ 10270<br/>
                    Tel. 086-6020988 เลขประจำตัวผู้เสียภาษีอากร 0115556018561<br/>
                </p>
            </div>
            <div class="col-xs-2">
                <p>
                    <br/>

                    <?php if(isset($credit_note)){ ?>
                        เลขที่ <?php echo $credit_note_no; ?><br/>
                    <?php }else if(isset($receipt)){ ?>
                        เลขที่ <?php echo $receipt_no; ?><br/>
                    <?php }else{ ?>
                        เลขที่ <?php echo $invoice_no; ?><br/>
                    <?php } ?>
                    <br/>
                    วันที่ <?php echo $create_date; ?><br/>
                </p>
            </div>
            <div class="col-xs-2  text-center">
         
               <div id="label-copy"><?php if($is_copy){ ?>สำเนา<?php } else { ?>ต้นฉบับ<?php } ?></div>   
              <p>
                 <?php if(isset($credit_note_no)){ ?>
                    <strong class="lead">ใบลดหนี้</strong>
                    <br/>
                    <strong >CREDIT NOTE</strong>
                    <br/>
                 <?php }else if(isset($receipt_no)){ ?>
                    <strong class="lead">ใบเสร็จรับเงิน</strong> 
                    <br/>
                    <strong >RECEIPT</strong>
                    <br/>
                 <?php }else{ ?>
                    <strong class="lead">ใบส่งสินค้า/ใบกำกับภาษี</strong>
                    <br/>
                    <strong >DELIVERY ORDER/TAX INVOICE</strong>
                    <br/>
                 <?php } ?>
                 
              </p>      
            </div>
        </div>

        <div class="row">
             <table style="border-collapse:separate;" >
              <tr>
                <td style="border:double;width:50%" >
                 <table  id="title-left" style="border-collapse: separate;line-height:20px">
                  <tr>
                    <td style="vertical-align:top" ><strong>รหัสลูกค้า</strong></td>                    
                    <td style="vertical-align:top"><span>
                      <?php if($store_detail->code == 'other'){ ?>
                       <?php echo $custom_store_code; ?>
                         <?php }else{ ?> 
                      <?php echo $store_detail->code; ?>
                       <?php } ?>
                    </span></td>
                    <td style="vertical-align:top" ><strong>เลขประจำตัวผู้เสียภาษี</strong></td>
                    <?php if($store_detail->code == 'other'){ ?>

                    <td style="vertical-align:top"><?php echo $custom_tax_id; ?></td>
                    <?php }else{ ?> 

                    <td style="vertical-align:top"><?php echo $store_detail->tax_id; ?></td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td style="vertical-align:top"><strong>นามลูกค้า</strong></td>     
                      <?php if($store_detail->code == 'other'){ ?>
                       <td  style="vertical-align:top" colspan="3"><span><?php echo $custom_store_name; ?></span>
                      <?php }else{ ?> 
                    <td  style="vertical-align:top" colspan="3"><p><?php echo $store_detail->name; ?></p>
                       <?php } ?>
                    </td>
                    <!-- <td style="vertical-align:top"><strong>รหัสสาขา</strong>&nbsp;&nbsp;&nbsp;<span><?php echo $store_detail->branch_code; ?></span> </td>-->
                  </tr>
                 
                  <tr rowspan="2" >
                    <td style="vertical-align:top"><strong> ที่อยู่ </strong> 
                    </td>
                    <td style="vertical-align:top" colspan="3"> 
                  <p>
                       <?php if($store_detail->code == 'other'){ ?>

                        <?php echo $custom_store_address; ?>    
                        <?php }else{ ?> 
                        <?php echo $store_detail->address; ?>     
                         <?php } ?>              
                          </p>
                    </td>
                  </tr>  
                 </table>
             </td>
             <?php if(isset($credit_note)) { ?>
               <td style="border:double;width:50%">
              <table id="title-right"  style="border-collapse: separate;line-height:20px">
                 
                  <tr>
                    <td style="vertical-align:top"><strong>อ้างถึงใบส่งสินค้าเลขที่</strong></td>
                    <td><?php if(!empty($ref_invoice_no) ) { echo $ref_invoice_no; } ?></td>
                    <td style="vertical-align:top"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top"><strong>เลขที่ใบส่งคืนสินค้า</strong></td>
                    <td style="vertical-align:top"><?php if(!empty($rtv) ) { echo $rtv; } ?></td>
                    <td style="vertical-align:top"></td>
                    <td></td>
                  </tr>
                  <tr >
                    <td ><strong></strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr> 
                      <td style="vertical-align:top"></td>
                      <td></td>
                      <td style="vertical-align:top" class="text-center"></td>
                      <td></td>
                    </tr>
              </table>
             </td>
             <?php }else if(isset($receipt)){ ?>
              <td style="border:double;width:50%">
                <table id="title-right"  style="border-collapse: separate;line-height:20px">
                   
                    <tr>
                      <td style="vertical-align:top"><strong>วันครบกำหนด</strong></td>
                      <td></td>
                      <td style="vertical-align:top"><strong>เงื่อนไขตามบริษัท</strong></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:top"></td>
                      <td style="vertical-align:top"></td>
                      <td style="vertical-align:top"></td>
                      <td></td>
                    </tr>
                    <tr >
                      <td ><strong></strong></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr> 
                      <td style="vertical-align:top"></td>
                      <td></td>
                      <td style="vertical-align:top" class="text-center"></td>
                      <td></td>
                    </tr>
                </table>
               </td>
             <?php }else{ ?>
             <td style="border:double;width:50%">
              <table id="title-right"  style="border-collapse: separate;line-height:20px">
                 
                  <tr>
                    <td style="vertical-align:top"><strong>วันครบกำหนด</strong></td>
                    <td></td>
                    <td style="vertical-align:top"><strong>เงื่อนไขตามบริษัท</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top"><strong>เลขที่ใบสั่งซื้อ</strong></td>
                    <td style="vertical-align:top"><?php if(!empty($ref_order_no) ) { echo $ref_order_no; } ?></td>
                    <td style="vertical-align:top"></td>
                    <td></td>
                  </tr>
                  <tr >
                    <td ><strong></strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr> 
                      <td style="vertical-align:top"></td>
                      <td></td>
                      <td style="vertical-align:top" class="text-center"></td>
                      <td></td>
                    </tr>
              </table>
             </td>
             <?php } ?>
        </tr>
      </table>
