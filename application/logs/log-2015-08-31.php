<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-08-31 07:06:42 --> Config Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Hooks Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Utf8 Class Initialized
DEBUG - 2015-08-31 07:06:42 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 07:06:42 --> URI Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Router Class Initialized
DEBUG - 2015-08-31 07:06:42 --> No URI present. Default controller set.
DEBUG - 2015-08-31 07:06:42 --> Output Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Security Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Input Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 07:06:42 --> Language Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Loader Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Helper loaded: url_helper
DEBUG - 2015-08-31 07:06:42 --> Helper loaded: form_helper
DEBUG - 2015-08-31 07:06:42 --> Database Driver Class Initialized
DEBUG - 2015-08-31 07:06:42 --> Controller Class Initialized
DEBUG - 2015-08-31 07:06:42 --> File loaded: application/views/base_site.php
DEBUG - 2015-08-31 07:06:42 --> Final output sent to browser
DEBUG - 2015-08-31 07:06:42 --> Total execution time: 0.1289
DEBUG - 2015-08-31 07:07:28 --> Config Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Hooks Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Utf8 Class Initialized
DEBUG - 2015-08-31 07:07:28 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 07:07:28 --> URI Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Router Class Initialized
DEBUG - 2015-08-31 07:07:28 --> No URI present. Default controller set.
DEBUG - 2015-08-31 07:07:28 --> Output Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Security Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Input Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 07:07:28 --> Language Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Loader Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Helper loaded: url_helper
DEBUG - 2015-08-31 07:07:28 --> Helper loaded: form_helper
DEBUG - 2015-08-31 07:07:28 --> Database Driver Class Initialized
DEBUG - 2015-08-31 07:07:28 --> Controller Class Initialized
DEBUG - 2015-08-31 07:07:28 --> File loaded: application/views/base_site.php
DEBUG - 2015-08-31 07:07:28 --> Final output sent to browser
DEBUG - 2015-08-31 07:07:28 --> Total execution time: 0.0134
DEBUG - 2015-08-31 07:07:42 --> Config Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Hooks Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Utf8 Class Initialized
DEBUG - 2015-08-31 07:07:42 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 07:07:42 --> URI Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Router Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Output Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Security Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Input Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 07:07:42 --> Language Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Loader Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Helper loaded: url_helper
DEBUG - 2015-08-31 07:07:42 --> Helper loaded: form_helper
DEBUG - 2015-08-31 07:07:42 --> Database Driver Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Controller Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Model Class Initialized
DEBUG - 2015-08-31 07:07:42 --> Model Class Initialized
DEBUG - 2015-08-31 07:07:42 --> SELECT 
            credit_note.credit_note_url
            ,credit_note.status
            ,credit_note.credit_note_copy_url 
            ,credit_note.total as total
            ,credit_note.sum_price as sum_price 
            ,credit_note.vat as vat
            ,credit_note.id as id
            ,credit_note.sum_description as sum_description
            ,credit_note.credit_note_no as credit_note_no
            ,store1.name as company_name
            ,credit_note.create_date as create_date
            ,credit_note.less_gp as less_gp
            ,credit_note.custom_store_name as custom_store_name
            ,store1.code as store_code
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-08-31 07:07:42 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-08-31 07:07:42 --> File loaded: application/views/base_site.php
DEBUG - 2015-08-31 07:07:42 --> Final output sent to browser
DEBUG - 2015-08-31 07:07:42 --> Total execution time: 0.2994
DEBUG - 2015-08-31 07:09:08 --> Config Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Hooks Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Utf8 Class Initialized
DEBUG - 2015-08-31 07:09:08 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 07:09:08 --> URI Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Router Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Output Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Security Class Initialized
DEBUG - 2015-08-31 07:09:08 --> Input Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 07:09:09 --> Language Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Loader Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Helper loaded: url_helper
DEBUG - 2015-08-31 07:09:09 --> Helper loaded: form_helper
DEBUG - 2015-08-31 07:09:09 --> Database Driver Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Controller Class Initialized
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 60
DEBUG - 2015-08-31 07:09:09 --> Model Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Model Class Initialized
DEBUG - 2015-08-31 07:09:09 --> Model Class Initialized
DEBUG - 2015-08-31 07:09:09 --> -****------- REAL ISSUE ------- ****---
DEBUG - 2015-08-31 07:09:09 --> File loaded: application/views/invoice/receipt_header.php
DEBUG - 2015-08-31 07:09:09 --> 7NUMBER OF ROWS ==
DEBUG - 2015-08-31 07:09:09 --> ------LAST MODE --------
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: special_discount /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 190
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 67
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 70
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 73
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 103
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 104
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 122
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 124
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 139
DEBUG - 2015-08-31 07:09:09 --> File loaded: application/views/invoice/receipt.php
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: THEAD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TBODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:09 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 5 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: miwnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23847
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23866
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23867
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27505
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27608
ERROR - 2015-08-31 07:09:10 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 9158
DEBUG - 2015-08-31 07:09:10 --> Final output sent to browser
DEBUG - 2015-08-31 07:09:10 --> Total execution time: 1.8084
DEBUG - 2015-08-31 08:07:14 --> Config Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Hooks Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Utf8 Class Initialized
DEBUG - 2015-08-31 08:07:14 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 08:07:14 --> URI Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Router Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Output Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Security Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Input Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 08:07:14 --> Language Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Loader Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Helper loaded: url_helper
DEBUG - 2015-08-31 08:07:14 --> Helper loaded: form_helper
DEBUG - 2015-08-31 08:07:14 --> Database Driver Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Controller Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Model Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Model Class Initialized
DEBUG - 2015-08-31 08:07:14 --> File loaded: application/views/product/product_list.php
DEBUG - 2015-08-31 08:07:14 --> File loaded: application/views/base_site.php
DEBUG - 2015-08-31 08:07:14 --> Final output sent to browser
DEBUG - 2015-08-31 08:07:14 --> Total execution time: 0.0732
DEBUG - 2015-08-31 08:07:14 --> Config Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Hooks Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Utf8 Class Initialized
DEBUG - 2015-08-31 08:07:14 --> UTF-8 Support Enabled
DEBUG - 2015-08-31 08:07:14 --> URI Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Router Class Initialized
DEBUG - 2015-08-31 08:07:14 --> No URI present. Default controller set.
DEBUG - 2015-08-31 08:07:14 --> Output Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Security Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Input Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-08-31 08:07:14 --> Language Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Loader Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Helper loaded: url_helper
DEBUG - 2015-08-31 08:07:14 --> Helper loaded: form_helper
DEBUG - 2015-08-31 08:07:14 --> Database Driver Class Initialized
DEBUG - 2015-08-31 08:07:14 --> Controller Class Initialized
DEBUG - 2015-08-31 08:07:14 --> File loaded: application/views/base_site.php
DEBUG - 2015-08-31 08:07:14 --> Final output sent to browser
DEBUG - 2015-08-31 08:07:14 --> Total execution time: 0.0227
