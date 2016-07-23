<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2016-07-16 15:45:11 --> Config Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Hooks Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Utf8 Class Initialized
DEBUG - 2016-07-16 15:45:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-16 15:45:11 --> URI Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Router Class Initialized
DEBUG - 2016-07-16 15:45:11 --> No URI present. Default controller set.
DEBUG - 2016-07-16 15:45:11 --> Output Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Security Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Input Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Global POST and COOKIE data sanitized
DEBUG - 2016-07-16 15:45:11 --> Language Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Loader Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Helper loaded: url_helper
DEBUG - 2016-07-16 15:45:11 --> Helper loaded: form_helper
DEBUG - 2016-07-16 15:45:11 --> Database Driver Class Initialized
DEBUG - 2016-07-16 15:45:11 --> Controller Class Initialized
DEBUG - 2016-07-16 15:45:11 --> File loaded: application/views/base_site.php
DEBUG - 2016-07-16 15:45:11 --> Final output sent to browser
DEBUG - 2016-07-16 15:45:11 --> Total execution time: 0.2470
DEBUG - 2016-07-16 17:02:56 --> Config Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Hooks Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Utf8 Class Initialized
DEBUG - 2016-07-16 17:02:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-16 17:02:56 --> URI Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Router Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Output Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Security Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Input Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Global POST and COOKIE data sanitized
DEBUG - 2016-07-16 17:02:56 --> Language Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Loader Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Helper loaded: url_helper
DEBUG - 2016-07-16 17:02:56 --> Helper loaded: form_helper
DEBUG - 2016-07-16 17:02:56 --> Database Driver Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Controller Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Model Class Initialized
DEBUG - 2016-07-16 17:02:56 --> Model Class Initialized
DEBUG - 2016-07-16 17:02:56 --> File loaded: application/views/invoice/invoice_list.php
DEBUG - 2016-07-16 17:02:56 --> File loaded: application/views/base_site.php
DEBUG - 2016-07-16 17:02:56 --> Final output sent to browser
DEBUG - 2016-07-16 17:02:56 --> Total execution time: 0.3536
DEBUG - 2016-07-16 17:03:01 --> Config Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Hooks Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Utf8 Class Initialized
DEBUG - 2016-07-16 17:03:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-16 17:03:01 --> URI Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Router Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Output Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Security Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Input Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Global POST and COOKIE data sanitized
DEBUG - 2016-07-16 17:03:01 --> Language Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Loader Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Helper loaded: url_helper
DEBUG - 2016-07-16 17:03:01 --> Helper loaded: form_helper
DEBUG - 2016-07-16 17:03:01 --> Database Driver Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Controller Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Model Class Initialized
DEBUG - 2016-07-16 17:03:01 --> Model Class Initialized
DEBUG - 2016-07-16 17:03:01 --> SELECT 
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
DEBUG - 2016-07-16 17:03:01 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2016-07-16 17:03:01 --> File loaded: application/views/base_site.php
DEBUG - 2016-07-16 17:03:01 --> Final output sent to browser
DEBUG - 2016-07-16 17:03:01 --> Total execution time: 0.1790
DEBUG - 2016-07-16 17:03:04 --> Config Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Hooks Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Utf8 Class Initialized
DEBUG - 2016-07-16 17:03:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-16 17:03:04 --> URI Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Router Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Output Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Security Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Input Class Initialized
DEBUG - 2016-07-16 17:03:04 --> Global POST and COOKIE data sanitized
DEBUG - 2016-07-16 17:03:04 --> Language Class Initialized
DEBUG - 2016-07-16 17:03:05 --> Loader Class Initialized
DEBUG - 2016-07-16 17:03:05 --> Helper loaded: url_helper
DEBUG - 2016-07-16 17:03:05 --> Helper loaded: form_helper
DEBUG - 2016-07-16 17:03:05 --> Database Driver Class Initialized
DEBUG - 2016-07-16 17:03:05 --> Controller Class Initialized
DEBUG - 2016-07-16 17:03:05 --> Model Class Initialized
DEBUG - 2016-07-16 17:03:05 --> Model Class Initialized
DEBUG - 2016-07-16 17:03:05 --> File loaded: application/views/receipt/receipt_list.php
DEBUG - 2016-07-16 17:03:05 --> File loaded: application/views/base_site.php
DEBUG - 2016-07-16 17:03:05 --> Final output sent to browser
DEBUG - 2016-07-16 17:03:05 --> Total execution time: 0.4416
