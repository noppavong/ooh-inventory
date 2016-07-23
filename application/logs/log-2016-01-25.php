<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2016-01-25 08:05:29 --> Config Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Hooks Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Utf8 Class Initialized
DEBUG - 2016-01-25 08:05:29 --> UTF-8 Support Enabled
DEBUG - 2016-01-25 08:05:29 --> URI Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Router Class Initialized
DEBUG - 2016-01-25 08:05:29 --> No URI present. Default controller set.
DEBUG - 2016-01-25 08:05:29 --> Output Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Security Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Input Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Global POST and COOKIE data sanitized
DEBUG - 2016-01-25 08:05:29 --> Language Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Loader Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Helper loaded: url_helper
DEBUG - 2016-01-25 08:05:29 --> Helper loaded: form_helper
DEBUG - 2016-01-25 08:05:29 --> Database Driver Class Initialized
DEBUG - 2016-01-25 08:05:29 --> Controller Class Initialized
DEBUG - 2016-01-25 08:05:29 --> File loaded: application/views/base_site.php
DEBUG - 2016-01-25 08:05:29 --> Final output sent to browser
DEBUG - 2016-01-25 08:05:29 --> Total execution time: 0.2734
DEBUG - 2016-01-25 08:05:43 --> Config Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Hooks Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Utf8 Class Initialized
DEBUG - 2016-01-25 08:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-01-25 08:05:43 --> URI Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Router Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Output Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Security Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Input Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Global POST and COOKIE data sanitized
DEBUG - 2016-01-25 08:05:43 --> Language Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Loader Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Helper loaded: url_helper
DEBUG - 2016-01-25 08:05:43 --> Helper loaded: form_helper
DEBUG - 2016-01-25 08:05:43 --> Database Driver Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Controller Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Model Class Initialized
DEBUG - 2016-01-25 08:05:43 --> Model Class Initialized
DEBUG - 2016-01-25 08:05:43 --> SELECT 
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
DEBUG - 2016-01-25 08:05:43 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2016-01-25 08:05:43 --> File loaded: application/views/base_site.php
DEBUG - 2016-01-25 08:05:43 --> Final output sent to browser
DEBUG - 2016-01-25 08:05:43 --> Total execution time: 0.3173
DEBUG - 2016-01-25 08:06:55 --> Config Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Hooks Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Utf8 Class Initialized
DEBUG - 2016-01-25 08:06:55 --> UTF-8 Support Enabled
DEBUG - 2016-01-25 08:06:55 --> URI Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Router Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Output Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Security Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Input Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Global POST and COOKIE data sanitized
DEBUG - 2016-01-25 08:06:55 --> Language Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Loader Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Helper loaded: url_helper
DEBUG - 2016-01-25 08:06:55 --> Helper loaded: form_helper
DEBUG - 2016-01-25 08:06:55 --> Database Driver Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Controller Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Model Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Model Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Model Class Initialized
DEBUG - 2016-01-25 08:06:55 --> Model Class Initialized
DEBUG - 2016-01-25 08:06:56 --> File loaded: application/views/credit_note/credit_note_edit.php
DEBUG - 2016-01-25 08:06:56 --> File loaded: application/views/base_site.php
DEBUG - 2016-01-25 08:06:56 --> Final output sent to browser
DEBUG - 2016-01-25 08:06:56 --> Total execution time: 0.5041
DEBUG - 2016-01-25 08:06:56 --> Config Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Hooks Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Utf8 Class Initialized
DEBUG - 2016-01-25 08:06:56 --> UTF-8 Support Enabled
DEBUG - 2016-01-25 08:06:56 --> URI Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Router Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Output Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Security Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Input Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Global POST and COOKIE data sanitized
DEBUG - 2016-01-25 08:06:56 --> Language Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Loader Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Helper loaded: url_helper
DEBUG - 2016-01-25 08:06:56 --> Helper loaded: form_helper
DEBUG - 2016-01-25 08:06:56 --> Database Driver Class Initialized
DEBUG - 2016-01-25 08:06:56 --> Controller Class Initialized
ERROR - 2016-01-25 08:06:56 --> 404 Page Not Found --> credit_note/img
