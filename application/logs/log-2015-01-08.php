<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-08 18:07:10 --> Config Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Hooks Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Utf8 Class Initialized
DEBUG - 2015-01-08 18:07:10 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 18:07:10 --> URI Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Router Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Output Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Security Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Input Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 18:07:10 --> Language Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Loader Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Helper loaded: url_helper
DEBUG - 2015-01-08 18:07:10 --> Helper loaded: form_helper
DEBUG - 2015-01-08 18:07:10 --> Database Driver Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Controller Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Config Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Hooks Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Utf8 Class Initialized
DEBUG - 2015-01-08 18:07:10 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 18:07:10 --> URI Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Router Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Output Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Security Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Input Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 18:07:10 --> Language Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Loader Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Helper loaded: url_helper
DEBUG - 2015-01-08 18:07:10 --> Helper loaded: form_helper
DEBUG - 2015-01-08 18:07:10 --> Database Driver Class Initialized
DEBUG - 2015-01-08 18:07:10 --> Controller Class Initialized
DEBUG - 2015-01-08 18:07:11 --> Model Class Initialized
DEBUG - 2015-01-08 18:07:11 --> Model Class Initialized
DEBUG - 2015-01-08 18:07:11 --> SELECT 
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
DEBUG - 2015-01-08 18:07:11 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-08 18:07:11 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-08 18:07:11 --> Final output sent to browser
DEBUG - 2015-01-08 18:07:11 --> Total execution time: 0.1530
