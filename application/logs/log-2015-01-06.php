<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-06 09:51:38 --> Config Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Hooks Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Utf8 Class Initialized
DEBUG - 2015-01-06 09:51:38 --> UTF-8 Support Enabled
DEBUG - 2015-01-06 09:51:38 --> URI Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Router Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Output Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Security Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Input Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-06 09:51:38 --> Language Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Loader Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Helper loaded: url_helper
DEBUG - 2015-01-06 09:51:38 --> Helper loaded: form_helper
DEBUG - 2015-01-06 09:51:38 --> Database Driver Class Initialized
DEBUG - 2015-01-06 09:51:38 --> Controller Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Config Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Hooks Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Utf8 Class Initialized
DEBUG - 2015-01-06 09:51:39 --> UTF-8 Support Enabled
DEBUG - 2015-01-06 09:51:39 --> URI Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Router Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Output Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Security Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Input Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-06 09:51:39 --> Language Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Loader Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Helper loaded: url_helper
DEBUG - 2015-01-06 09:51:39 --> Helper loaded: form_helper
DEBUG - 2015-01-06 09:51:39 --> Database Driver Class Initialized
DEBUG - 2015-01-06 09:51:39 --> Controller Class Initialized
DEBUG - 2015-01-06 09:51:40 --> Model Class Initialized
DEBUG - 2015-01-06 09:51:40 --> Model Class Initialized
DEBUG - 2015-01-06 09:51:40 --> SELECT 
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
DEBUG - 2015-01-06 09:51:40 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-06 09:51:40 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-06 09:51:40 --> Final output sent to browser
DEBUG - 2015-01-06 09:51:40 --> Total execution time: 0.7277
DEBUG - 2015-01-06 11:24:39 --> Config Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Hooks Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Utf8 Class Initialized
DEBUG - 2015-01-06 11:24:39 --> UTF-8 Support Enabled
DEBUG - 2015-01-06 11:24:39 --> URI Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Router Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Output Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Security Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Input Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-06 11:24:39 --> Language Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Loader Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Helper loaded: url_helper
DEBUG - 2015-01-06 11:24:39 --> Helper loaded: form_helper
DEBUG - 2015-01-06 11:24:39 --> Database Driver Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Controller Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Config Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Hooks Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Utf8 Class Initialized
DEBUG - 2015-01-06 11:24:39 --> UTF-8 Support Enabled
DEBUG - 2015-01-06 11:24:39 --> URI Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Router Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Output Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Security Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Input Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-06 11:24:39 --> Language Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Loader Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Helper loaded: url_helper
DEBUG - 2015-01-06 11:24:39 --> Helper loaded: form_helper
DEBUG - 2015-01-06 11:24:39 --> Database Driver Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Controller Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Model Class Initialized
DEBUG - 2015-01-06 11:24:39 --> Model Class Initialized
DEBUG - 2015-01-06 11:24:39 --> SELECT 
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
DEBUG - 2015-01-06 11:24:39 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2015-01-06 11:24:39 --> File loaded: application/views/base_site.php
DEBUG - 2015-01-06 11:24:39 --> Final output sent to browser
DEBUG - 2015-01-06 11:24:39 --> Total execution time: 0.1059
