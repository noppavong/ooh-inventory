<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-09 14:31:50 --> Config Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Hooks Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Utf8 Class Initialized
DEBUG - 2015-01-09 14:31:50 --> UTF-8 Support Enabled
DEBUG - 2015-01-09 14:31:50 --> URI Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Router Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Output Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Security Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Input Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-09 14:31:50 --> Language Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Loader Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Helper loaded: url_helper
DEBUG - 2015-01-09 14:31:50 --> Helper loaded: form_helper
DEBUG - 2015-01-09 14:31:50 --> Database Driver Class Initialized
DEBUG - 2015-01-09 14:31:50 --> Controller Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Config Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Hooks Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Utf8 Class Initialized
DEBUG - 2015-01-09 14:31:51 --> UTF-8 Support Enabled
DEBUG - 2015-01-09 14:31:51 --> URI Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Router Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Output Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Security Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Input Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-09 14:31:51 --> Language Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Loader Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Helper loaded: url_helper
DEBUG - 2015-01-09 14:31:51 --> Helper loaded: form_helper
DEBUG - 2015-01-09 14:31:51 --> Database Driver Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Controller Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Model Class Initialized
DEBUG - 2015-01-09 14:31:51 --> Model Class Initialized
DEBUG - 2015-01-09 14:31:51 --> SELECT 
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
DEBUG - 2015-01-09 14:31:51 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-09 14:31:51 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-09 14:31:51 --> Final output sent to browser
DEBUG - 2015-01-09 14:31:51 --> Total execution time: 0.2076
