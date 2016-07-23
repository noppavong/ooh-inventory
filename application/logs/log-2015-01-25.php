<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-25 16:16:12 --> Config Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:16:12 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:16:12 --> URI Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Router Class Initialized
DEBUG - 2015-01-25 16:16:12 --> No URI present. Default controller set.
DEBUG - 2015-01-25 16:16:12 --> Output Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Security Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Input Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:16:12 --> Language Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Loader Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:16:12 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:16:12 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:16:12 --> Controller Class Initialized
DEBUG - 2015-01-25 16:16:12 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 16:16:12 --> Final output sent to browser
DEBUG - 2015-01-25 16:16:12 --> Total execution time: 0.3414
DEBUG - 2015-01-25 16:16:17 --> Config Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:16:17 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:16:17 --> URI Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Router Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Output Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Security Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Input Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:16:17 --> Language Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Loader Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:16:17 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:16:17 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Controller Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Model Class Initialized
DEBUG - 2015-01-25 16:16:17 --> Model Class Initialized
DEBUG - 2015-01-25 16:16:17 --> SELECT 
            credit_note.credit_note_url
            ,credit_note.status
            ,credit_note.credit_note_copy_url 
            ,credit_note.total as total
            ,credit_note.sum_price as sum_price 
            ,credit_note.vat as vat
            ,credit_note.id as id
            ,credit_note.credit_note_no as credit_note_no
            ,store1.name as company_name
            ,credit_note.create_date as create_date
            ,credit_note.less_gp as less_gp
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-01-25 16:16:17 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-25 16:16:17 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 16:16:17 --> Final output sent to browser
DEBUG - 2015-01-25 16:16:17 --> Total execution time: 0.2621
DEBUG - 2015-01-25 16:53:21 --> Config Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:53:21 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:53:21 --> URI Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Router Class Initialized
DEBUG - 2015-01-25 16:53:21 --> No URI present. Default controller set.
DEBUG - 2015-01-25 16:53:21 --> Output Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Security Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Input Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:53:21 --> Language Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Loader Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:53:21 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:53:21 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:53:21 --> Controller Class Initialized
DEBUG - 2015-01-25 16:53:21 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 16:53:21 --> Final output sent to browser
DEBUG - 2015-01-25 16:53:21 --> Total execution time: 0.0173
DEBUG - 2015-01-25 16:53:25 --> Config Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:53:25 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:53:25 --> URI Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Router Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Output Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Security Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Input Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:53:25 --> Language Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Loader Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:53:25 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:53:25 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Controller Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:25 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:25 --> SELECT 
            credit_note.credit_note_url
            ,credit_note.status
            ,credit_note.credit_note_copy_url 
            ,credit_note.total as total
            ,credit_note.sum_price as sum_price 
            ,credit_note.vat as vat
            ,credit_note.id as id
            ,credit_note.credit_note_no as credit_note_no
            ,store1.name as company_name
            ,credit_note.create_date as create_date
            ,credit_note.less_gp as less_gp
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-01-25 16:53:25 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-25 16:53:25 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 16:53:25 --> Final output sent to browser
DEBUG - 2015-01-25 16:53:25 --> Total execution time: 0.1118
DEBUG - 2015-01-25 16:53:35 --> Config Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:53:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:53:35 --> URI Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Router Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Output Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Security Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Input Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:53:35 --> Language Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Loader Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:53:35 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:53:35 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Controller Class Initialized
ERROR - 2015-01-25 16:53:35 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 60
DEBUG - 2015-01-25 16:53:35 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:35 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:35 --> -****------- REAL ISSUE ------- ****---
DEBUG - 2015-01-25 16:53:35 --> File loaded: application/views/invoice/receipt_header.php
DEBUG - 2015-01-25 16:53:36 --> 3NUMBER OF ROWS ==
DEBUG - 2015-01-25 16:53:36 --> ------LAST MODE --------
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: special_discount /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 163
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: summary_text /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 39
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 67
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 70
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 73
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 103
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 104
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 122
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 124
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 139
DEBUG - 2015-01-25 16:53:36 --> File loaded: application/views/invoice/receipt.php
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: THEAD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TBODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:36 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 5 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: miwnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23847
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23866
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23867
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27505
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27608
ERROR - 2015-01-25 16:53:37 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 9158
DEBUG - 2015-01-25 16:53:38 --> Final output sent to browser
DEBUG - 2015-01-25 16:53:38 --> Total execution time: 2.4508
DEBUG - 2015-01-25 16:53:49 --> Config Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:53:49 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:53:49 --> URI Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Router Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Output Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Security Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Input Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:53:49 --> Language Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Loader Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:53:49 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:53:49 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Controller Class Initialized
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 65
DEBUG - 2015-01-25 16:53:49 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:49 --> Model Class Initialized
DEBUG - 2015-01-25 16:53:49 --> -****------- COPY ------- ****---
DEBUG - 2015-01-25 16:53:49 --> File loaded: application/views/invoice/receipt_header.php
DEBUG - 2015-01-25 16:53:49 --> 3NUMBER OF ROWS ==1
DEBUG - 2015-01-25 16:53:49 --> ------LAST MODE --------
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: special_discount /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 163
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: summary_text /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 39
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 67
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 70
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 73
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 103
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 104
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 122
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 124
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 139
DEBUG - 2015-01-25 16:53:49 --> File loaded: application/views/invoice/receipt.php
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: THEAD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TBODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 5 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: miwnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23847
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23866
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23867
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:49 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27505
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27608
ERROR - 2015-01-25 16:53:50 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 9158
DEBUG - 2015-01-25 16:53:50 --> Final output sent to browser
DEBUG - 2015-01-25 16:53:50 --> Total execution time: 0.9606
DEBUG - 2015-01-25 16:58:46 --> Config Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Hooks Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Utf8 Class Initialized
DEBUG - 2015-01-25 16:58:46 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 16:58:46 --> URI Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Router Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Output Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Security Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Input Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 16:58:46 --> Language Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Loader Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Helper loaded: url_helper
DEBUG - 2015-01-25 16:58:46 --> Helper loaded: form_helper
DEBUG - 2015-01-25 16:58:46 --> Database Driver Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Controller Class Initialized
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 60
DEBUG - 2015-01-25 16:58:46 --> Model Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Model Class Initialized
DEBUG - 2015-01-25 16:58:46 --> Model Class Initialized
DEBUG - 2015-01-25 16:58:46 --> -****------- REAL ISSUE ------- ****---
DEBUG - 2015-01-25 16:58:46 --> File loaded: application/views/invoice/receipt_header.php
DEBUG - 2015-01-25 16:58:46 --> 3NUMBER OF ROWS ==
DEBUG - 2015-01-25 16:58:46 --> ------LAST MODE --------
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: special_discount /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 163
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: summary_text /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 39
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 67
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 70
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 73
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 103
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 104
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: sum_next_page /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 122
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 124
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 139
DEBUG - 2015-01-25 16:58:46 --> File loaded: application/views/invoice/receipt.php
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:46 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: THEAD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TBODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 5 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: miwnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23847
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23866
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23867
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27505
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27608
ERROR - 2015-01-25 16:58:47 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 9158
DEBUG - 2015-01-25 16:58:47 --> Final output sent to browser
DEBUG - 2015-01-25 16:58:47 --> Total execution time: 0.8792
DEBUG - 2015-01-25 18:24:48 --> Config Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:24:48 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:24:48 --> URI Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Router Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Output Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Security Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Input Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:24:48 --> Language Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Loader Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:24:48 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:24:48 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Controller Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Model Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Model Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Model Class Initialized
DEBUG - 2015-01-25 18:24:48 --> Model Class Initialized
ERROR - 2015-01-25 18:24:48 --> Severity: Notice  --> Undefined variable: query_receipt /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 450
DEBUG - 2015-01-25 18:25:29 --> Config Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:25:29 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:25:29 --> URI Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Router Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Output Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Security Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Input Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:25:29 --> Language Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Loader Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:25:29 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:25:29 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Controller Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:29 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:29 --> File loaded: application/views/credit_note/credit_note_edit.php
DEBUG - 2015-01-25 18:25:29 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:25:29 --> Final output sent to browser
DEBUG - 2015-01-25 18:25:29 --> Total execution time: 0.1366
DEBUG - 2015-01-25 18:25:30 --> Config Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:25:30 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:25:30 --> URI Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Router Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Output Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Security Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Input Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:25:30 --> Language Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Loader Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:25:30 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:25:30 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:25:30 --> Controller Class Initialized
ERROR - 2015-01-25 18:25:30 --> 404 Page Not Found --> credit_note/img
DEBUG - 2015-01-25 18:25:44 --> Config Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:25:44 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:25:44 --> URI Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Router Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Output Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Security Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Input Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:25:44 --> Language Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Loader Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:25:44 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:25:44 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Controller Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:44 --> Model Class Initialized
DEBUG - 2015-01-25 18:25:44 --> create_date __> 2015-01-25
DEBUG - 2015-01-25 18:25:44 --> MONTH __> 01
DEBUG - 2015-01-25 18:25:44 --> LAST QUERY select credit_note_no as credit_note_no from credit_note where MONTH(create_date) = "01"
DEBUG - 2015-01-25 18:25:44 --> create_issue_no3
DEBUG - 2015-01-25 18:25:44 --> File loaded: application/views/credit_note/credit_note_edit.php
DEBUG - 2015-01-25 18:25:44 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:25:44 --> Final output sent to browser
DEBUG - 2015-01-25 18:25:44 --> Total execution time: 0.0720
DEBUG - 2015-01-25 18:26:21 --> Config Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:26:21 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:26:21 --> URI Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Router Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Output Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Security Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Input Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:26:21 --> Language Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Loader Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:26:21 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:26:21 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Controller Class Initialized
DEBUG - 2015-01-25 18:26:21 --> credit_note_id 
DEBUG - 2015-01-25 18:26:21 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:21 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Final output sent to browser
DEBUG - 2015-01-25 18:26:22 --> Total execution time: 0.4348
DEBUG - 2015-01-25 18:26:22 --> Config Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:26:22 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:26:22 --> URI Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Router Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Output Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Security Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Input Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:26:22 --> Language Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Loader Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:26:22 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:26:22 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Controller Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:22 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:22 --> SELECT 
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
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-01-25 18:26:22 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-25 18:26:22 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:26:22 --> Final output sent to browser
DEBUG - 2015-01-25 18:26:22 --> Total execution time: 0.1031
DEBUG - 2015-01-25 18:26:35 --> Config Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:26:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:26:35 --> URI Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Router Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Output Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Security Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Input Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:26:35 --> Language Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Loader Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:26:35 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:26:35 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Controller Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Model Class Initialized
DEBUG - 2015-01-25 18:26:35 --> File loaded: application/views/credit_note/credit_note_edit.php
DEBUG - 2015-01-25 18:26:35 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:26:35 --> Final output sent to browser
DEBUG - 2015-01-25 18:26:35 --> Total execution time: 0.0755
DEBUG - 2015-01-25 18:26:35 --> Config Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:26:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:26:35 --> URI Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Router Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Output Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Security Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Input Class Initialized
DEBUG - 2015-01-25 18:26:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:26:35 --> Language Class Initialized
DEBUG - 2015-01-25 18:26:36 --> Loader Class Initialized
DEBUG - 2015-01-25 18:26:36 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:26:36 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:26:36 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:26:36 --> Controller Class Initialized
ERROR - 2015-01-25 18:26:36 --> 404 Page Not Found --> credit_note/img
DEBUG - 2015-01-25 18:28:40 --> Config Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:28:40 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:28:40 --> URI Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Router Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Output Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Security Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Input Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:28:40 --> Language Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Loader Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:28:40 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:28:40 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Controller Class Initialized
DEBUG - 2015-01-25 18:28:40 --> credit_note_id 70
DEBUG - 2015-01-25 18:28:40 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:40 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:40 --> credit_note_id70
DEBUG - 2015-01-25 18:28:40 --> data{"store_code":"10201","create_date":"2014-01-25","ref_invoice_no":"","remark":"","rtv":"","credit_note_no":"CN1402-1","percent_discount":null,"sum_description":"\u0e25\u0e14\u0e2b\u0e19\u0e35\u0e49\u0e40\u0e14\u0e37\u0e2d\u0e19 \u0e21\u0e01\u0e23\u0e32\u0e04\u0e21","sum_price":"100","special_discount":"0.00","gp":"38","customer_code":"","less_gp":38,"vat":4.05607476636,"total":62}
DEBUG - 2015-01-25 18:28:41 --> Final output sent to browser
DEBUG - 2015-01-25 18:28:41 --> Total execution time: 0.4173
DEBUG - 2015-01-25 18:28:41 --> Config Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:28:41 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:28:41 --> URI Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Router Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Output Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Security Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Input Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:28:41 --> Language Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Loader Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:28:41 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:28:41 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Controller Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:41 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:41 --> SELECT 
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
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-01-25 18:28:41 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-25 18:28:41 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:28:41 --> Final output sent to browser
DEBUG - 2015-01-25 18:28:41 --> Total execution time: 0.0739
DEBUG - 2015-01-25 18:28:54 --> Config Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:28:54 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:28:54 --> URI Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Router Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Output Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Security Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Input Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:28:54 --> Language Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Loader Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:28:54 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:28:54 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Controller Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Model Class Initialized
DEBUG - 2015-01-25 18:28:54 --> File loaded: application/views/credit_note/credit_note_edit.php
DEBUG - 2015-01-25 18:28:54 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:28:54 --> Final output sent to browser
DEBUG - 2015-01-25 18:28:54 --> Total execution time: 0.0800
DEBUG - 2015-01-25 18:28:54 --> Config Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:28:54 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:28:54 --> URI Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Router Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Output Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Security Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Input Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:28:54 --> Language Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Loader Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:28:54 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:28:54 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:28:54 --> Controller Class Initialized
ERROR - 2015-01-25 18:28:54 --> 404 Page Not Found --> credit_note/img
DEBUG - 2015-01-25 18:30:27 --> Config Class Initialized
DEBUG - 2015-01-25 18:30:27 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:30:27 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:30:27 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:30:28 --> URI Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Router Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Output Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Security Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Input Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:30:28 --> Language Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Loader Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:30:28 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:30:28 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Controller Class Initialized
ERROR - 2015-01-25 18:30:28 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 60
DEBUG - 2015-01-25 18:30:28 --> Model Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Model Class Initialized
DEBUG - 2015-01-25 18:30:28 --> Model Class Initialized
ERROR - 2015-01-25 18:30:28 --> Severity: Notice  --> Undefined variable: query_receipt /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 92
DEBUG - 2015-01-25 18:30:42 --> Config Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:30:42 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:30:42 --> URI Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Router Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Output Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Security Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Input Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:30:42 --> Language Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Loader Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:30:42 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:30:42 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Controller Class Initialized
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: thai_barcode /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/credit_note.php 60
DEBUG - 2015-01-25 18:30:42 --> Model Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Model Class Initialized
DEBUG - 2015-01-25 18:30:42 --> Model Class Initialized
DEBUG - 2015-01-25 18:30:42 --> -****------- REAL ISSUE ------- ****---
DEBUG - 2015-01-25 18:30:42 --> File loaded: application/views/invoice/receipt_header.php
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 70
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 73
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 103
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 104
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: invoice_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 124
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined variable: receipt_no /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/views/invoice/receipt.php 139
DEBUG - 2015-01-25 18:30:42 --> File loaded: application/views/invoice/receipt.php
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>CLASS>>DETAIL /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: THEAD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: THEAD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TH>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TBODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TBODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:42 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-8 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-4 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: cstr /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 31839
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-7 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>COL-XS-1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-3 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: -1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: BODY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: BODY>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-13 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-6 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>COL-XS-2 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>>LABEL-COPY /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: P>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>CLASS>>ROW /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: DIV>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-LEFT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1003
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TABLE>>ID>>TITLE-RIGHT /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TR>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 969
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>CLASS>>TEXT-CENTER /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1007
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 966
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: TD>>ID>> /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/classes/cssmgr.php 1011
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: overflow /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23641
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: miwnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23847
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23866
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined variable: mawnon /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 23867
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22877
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22888
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 22897
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: headernrows /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 24332
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 0 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5889
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5903
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: hyphens /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 5908
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined offset: 1 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 26572
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined index: outline-s /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 3892
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27505
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 27608
ERROR - 2015-01-25 18:30:43 --> Severity: Notice  --> Undefined property: mPDF::$hasOC /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/third_party/mpdf/mpdf.php 9158
DEBUG - 2015-01-25 18:30:43 --> Final output sent to browser
DEBUG - 2015-01-25 18:30:43 --> Total execution time: 1.6508
DEBUG - 2015-01-25 18:31:04 --> Config Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:31:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:31:04 --> URI Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Router Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Output Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Security Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Input Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:31:04 --> Language Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Loader Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:31:04 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:31:04 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Controller Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Model Class Initialized
DEBUG - 2015-01-25 18:31:04 --> Model Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Config Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Hooks Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Utf8 Class Initialized
DEBUG - 2015-01-25 18:31:05 --> UTF-8 Support Enabled
DEBUG - 2015-01-25 18:31:05 --> URI Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Router Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Output Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Security Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Input Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-25 18:31:05 --> Language Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Loader Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Helper loaded: url_helper
DEBUG - 2015-01-25 18:31:05 --> Helper loaded: form_helper
DEBUG - 2015-01-25 18:31:05 --> Database Driver Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Controller Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Model Class Initialized
DEBUG - 2015-01-25 18:31:05 --> Model Class Initialized
DEBUG - 2015-01-25 18:31:05 --> SELECT 
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
            ,credit_note.special_discount as special_discount 
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2015-01-25 18:31:05 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-25 18:31:05 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-25 18:31:05 --> Final output sent to browser
DEBUG - 2015-01-25 18:31:05 --> Total execution time: 0.0810
