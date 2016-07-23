<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-10-24 07:33:38 --> Config Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Hooks Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Utf8 Class Initialized
DEBUG - 2014-10-24 07:33:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 07:33:38 --> URI Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Router Class Initialized
DEBUG - 2014-10-24 07:33:38 --> No URI present. Default controller set.
DEBUG - 2014-10-24 07:33:38 --> Output Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Security Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Input Class Initialized
DEBUG - 2014-10-24 07:33:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 07:33:38 --> Language Class Initialized
DEBUG - 2014-10-24 07:33:39 --> Loader Class Initialized
DEBUG - 2014-10-24 07:33:39 --> Helper loaded: url_helper
DEBUG - 2014-10-24 07:33:39 --> Helper loaded: form_helper
DEBUG - 2014-10-24 07:33:39 --> Database Driver Class Initialized
DEBUG - 2014-10-24 07:33:39 --> Controller Class Initialized
DEBUG - 2014-10-24 07:33:39 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 07:33:39 --> Final output sent to browser
DEBUG - 2014-10-24 07:33:39 --> Total execution time: 0.1801
DEBUG - 2014-10-24 07:34:21 --> Config Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Hooks Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Utf8 Class Initialized
DEBUG - 2014-10-24 07:34:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 07:34:21 --> URI Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Router Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Output Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Security Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Input Class Initialized
DEBUG - 2014-10-24 07:34:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 07:34:21 --> Language Class Initialized
DEBUG - 2014-10-24 07:34:22 --> Loader Class Initialized
DEBUG - 2014-10-24 07:34:22 --> Helper loaded: url_helper
DEBUG - 2014-10-24 07:34:22 --> Helper loaded: form_helper
DEBUG - 2014-10-24 07:34:22 --> Database Driver Class Initialized
DEBUG - 2014-10-24 07:34:22 --> Controller Class Initialized
DEBUG - 2014-10-24 07:34:22 --> Model Class Initialized
DEBUG - 2014-10-24 07:34:22 --> Model Class Initialized
DEBUG - 2014-10-24 07:34:22 --> SELECT 
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
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2014-10-24 07:34:22 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2014-10-24 07:34:22 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 07:34:22 --> Final output sent to browser
DEBUG - 2014-10-24 07:34:22 --> Total execution time: 0.7797
DEBUG - 2014-10-24 08:20:42 --> Config Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:20:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:20:42 --> URI Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Router Class Initialized
DEBUG - 2014-10-24 08:20:42 --> No URI present. Default controller set.
DEBUG - 2014-10-24 08:20:42 --> Output Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Security Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Input Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:20:42 --> Language Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Loader Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:20:42 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:20:42 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:20:42 --> Controller Class Initialized
DEBUG - 2014-10-24 08:20:42 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:20:42 --> Final output sent to browser
DEBUG - 2014-10-24 08:20:42 --> Total execution time: 0.0157
DEBUG - 2014-10-24 08:20:48 --> Config Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:20:48 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:20:48 --> URI Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Router Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Output Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Security Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Input Class Initialized
DEBUG - 2014-10-24 08:20:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:20:48 --> Language Class Initialized
DEBUG - 2014-10-24 08:20:49 --> Loader Class Initialized
DEBUG - 2014-10-24 08:20:49 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:20:49 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:20:49 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:20:49 --> Controller Class Initialized
DEBUG - 2014-10-24 08:20:49 --> Model Class Initialized
DEBUG - 2014-10-24 08:20:49 --> Model Class Initialized
DEBUG - 2014-10-24 08:20:49 --> File loaded: application/views/invoice/invoice_list.php
DEBUG - 2014-10-24 08:20:49 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:20:49 --> Final output sent to browser
DEBUG - 2014-10-24 08:20:49 --> Total execution time: 0.5129
DEBUG - 2014-10-24 08:20:56 --> Config Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:20:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:20:56 --> URI Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Router Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Output Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Security Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Input Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:20:56 --> Language Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Loader Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:20:56 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:20:56 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Controller Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Model Class Initialized
DEBUG - 2014-10-24 08:20:56 --> Model Class Initialized
DEBUG - 2014-10-24 08:20:56 --> SELECT 
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
            FROM credit_note LEFT JOIN store  as store1 
                on store1.code = credit_note.store_code ORDER BY create_date,credit_note_no desc
DEBUG - 2014-10-24 08:20:56 --> File loaded: application/views/credit_note/credit_note_list.php
DEBUG - 2014-10-24 08:20:56 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:20:56 --> Final output sent to browser
DEBUG - 2014-10-24 08:20:56 --> Total execution time: 0.0901
DEBUG - 2014-10-24 08:42:34 --> Config Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:42:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:42:34 --> URI Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Router Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Output Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Security Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Input Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:42:34 --> Language Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Loader Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:42:34 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:42:34 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Controller Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Model Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Model Class Initialized
DEBUG - 2014-10-24 08:42:34 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-24 08:42:34 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:42:34 --> Final output sent to browser
DEBUG - 2014-10-24 08:42:34 --> Total execution time: 0.1767
DEBUG - 2014-10-24 08:42:34 --> Config Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:42:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:42:34 --> URI Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Router Class Initialized
DEBUG - 2014-10-24 08:42:34 --> No URI present. Default controller set.
DEBUG - 2014-10-24 08:42:34 --> Output Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Security Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Input Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:42:34 --> Language Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Loader Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:42:34 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:42:34 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:42:34 --> Controller Class Initialized
DEBUG - 2014-10-24 08:42:34 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:42:34 --> Final output sent to browser
DEBUG - 2014-10-24 08:42:34 --> Total execution time: 0.0147
DEBUG - 2014-10-24 08:42:36 --> Config Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:42:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:42:36 --> URI Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Router Class Initialized
DEBUG - 2014-10-24 08:42:36 --> No URI present. Default controller set.
DEBUG - 2014-10-24 08:42:36 --> Output Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Security Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Input Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:42:36 --> Language Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Loader Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:42:36 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:42:36 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:42:36 --> Controller Class Initialized
DEBUG - 2014-10-24 08:42:36 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:42:36 --> Final output sent to browser
DEBUG - 2014-10-24 08:42:36 --> Total execution time: 0.0138
DEBUG - 2014-10-24 08:52:47 --> Config Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Hooks Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Utf8 Class Initialized
DEBUG - 2014-10-24 08:52:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 08:52:47 --> URI Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Router Class Initialized
DEBUG - 2014-10-24 08:52:47 --> No URI present. Default controller set.
DEBUG - 2014-10-24 08:52:47 --> Output Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Security Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Input Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 08:52:47 --> Language Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Loader Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Helper loaded: url_helper
DEBUG - 2014-10-24 08:52:47 --> Helper loaded: form_helper
DEBUG - 2014-10-24 08:52:47 --> Database Driver Class Initialized
DEBUG - 2014-10-24 08:52:47 --> Controller Class Initialized
DEBUG - 2014-10-24 08:52:47 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 08:52:47 --> Final output sent to browser
DEBUG - 2014-10-24 08:52:47 --> Total execution time: 0.0133
DEBUG - 2014-10-24 09:01:54 --> Config Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:01:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:01:54 --> URI Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Router Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Output Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Security Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Input Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:01:54 --> Language Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Loader Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:01:54 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:01:54 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Controller Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Model Class Initialized
DEBUG - 2014-10-24 09:01:54 --> Model Class Initialized
DEBUG - 2014-10-24 09:01:54 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:01:54 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:01:54 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:01:54 --> Final output sent to browser
DEBUG - 2014-10-24 09:01:54 --> Total execution time: 0.0406
DEBUG - 2014-10-24 09:02:58 --> Config Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:02:58 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:02:58 --> URI Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Router Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Output Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Security Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Input Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:02:58 --> Language Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Loader Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:02:58 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:02:58 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Controller Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Model Class Initialized
DEBUG - 2014-10-24 09:02:58 --> Model Class Initialized
DEBUG - 2014-10-24 09:02:58 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:02:58 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:02:58 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:02:58 --> Final output sent to browser
DEBUG - 2014-10-24 09:02:58 --> Total execution time: 0.0222
DEBUG - 2014-10-24 09:03:00 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:00 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:00 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:00 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:00 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:00 --> File loaded: application/views/sale/sale_edit.php
DEBUG - 2014-10-24 09:03:00 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:03:00 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:00 --> Total execution time: 0.0467
DEBUG - 2014-10-24 09:03:00 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:00 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:00 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:00 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:00 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:00 --> Controller Class Initialized
ERROR - 2014-10-24 09:03:01 --> 404 Page Not Found --> sale/img
DEBUG - 2014-10-24 09:03:08 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:08 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:08 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:08 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:08 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:08 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:08 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-24 09:03:08 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:03:08 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:08 --> Total execution time: 0.0252
DEBUG - 2014-10-24 09:03:09 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:09 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:09 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:03:09 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:09 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:09 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:09 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:09 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:09 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:03:09 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:09 --> Total execution time: 0.0159
DEBUG - 2014-10-24 09:03:23 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:23 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:23 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:23 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:23 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:23 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:23 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:23 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:03:23 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:03:23 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:03:23 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:23 --> Total execution time: 0.0298
DEBUG - 2014-10-24 09:03:25 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:25 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:25 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:25 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:25 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:25 --> File loaded: application/views/sale/sale_edit.php
DEBUG - 2014-10-24 09:03:25 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:03:25 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:25 --> Total execution time: 0.0208
DEBUG - 2014-10-24 09:03:26 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:26 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:26 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:26 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:26 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:26 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:26 --> Controller Class Initialized
ERROR - 2014-10-24 09:03:26 --> 404 Page Not Found --> sale/img
DEBUG - 2014-10-24 09:03:28 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:28 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Config Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:03:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:03:28 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:28 --> URI Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Router Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Output Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Security Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Input Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:03:28 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Language Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Loader Class Initialized
DEBUG - 2014-10-24 09:03:28 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:28 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:28 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:03:29 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:03:29 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:29 --> Total execution time: 0.0486
DEBUG - 2014-10-24 09:03:29 --> Controller Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:03:29 --> SELECT *
FROM (`pricing`)
JOIN `product` ON `product`.`korea_barcode` = `pricing`.`product_korea_barcode`
WHERE `pricing`.`product_korea_barcode` IN ('8809255481051') 
DEBUG - 2014-10-24 09:03:29 --> Final output sent to browser
DEBUG - 2014-10-24 09:03:29 --> Total execution time: 0.0567
DEBUG - 2014-10-24 09:05:52 --> Config Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:05:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:05:52 --> URI Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Router Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Output Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Security Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Input Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:05:52 --> Language Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Loader Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:05:52 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:05:52 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Controller Class Initialized
DEBUG - 2014-10-24 09:05:52 --> order_id 20
DEBUG - 2014-10-24 09:05:52 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:52 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:52 --> data{"name":"Donut","surname":"","line_id":"","email":"","telephone_no":""}
DEBUG - 2014-10-24 09:05:52 --> address -----  ID -----
DEBUG - 2014-10-24 09:05:52 --> order20
DEBUG - 2014-10-24 09:05:52 --> data{"channel_id":"1","customer_id":"8"}
DEBUG - 2014-10-24 09:05:52 --> {"korea_barcode":"8809255481051","amount":"","mt_price":"","percent_discount":"","price":"","product_name":"Aurore Sticker No.3","mt_price\/unit":"120","price\/unit":"72"}
DEBUG - 2014-10-24 09:05:53 --> Final output sent to browser
DEBUG - 2014-10-24 09:05:53 --> Total execution time: 1.0009
DEBUG - 2014-10-24 09:05:53 --> Config Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:05:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:05:53 --> URI Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Router Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Output Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Security Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Input Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:05:53 --> Language Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Loader Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:05:53 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:05:53 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Controller Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:53 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:53 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:05:53 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:05:53 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:05:53 --> Final output sent to browser
DEBUG - 2014-10-24 09:05:53 --> Total execution time: 0.0227
DEBUG - 2014-10-24 09:05:55 --> Config Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:05:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:05:55 --> URI Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Router Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Output Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Security Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Input Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:05:55 --> Language Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Loader Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:05:55 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:05:55 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Controller Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:05:55 --> File loaded: application/views/sale/sale_edit.php
DEBUG - 2014-10-24 09:05:55 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:05:55 --> Final output sent to browser
DEBUG - 2014-10-24 09:05:55 --> Total execution time: 0.0222
DEBUG - 2014-10-24 09:05:55 --> Config Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:05:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:05:55 --> URI Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Router Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Output Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Security Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Input Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:05:55 --> Language Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Loader Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:05:55 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:05:55 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:05:55 --> Controller Class Initialized
ERROR - 2014-10-24 09:05:55 --> 404 Page Not Found --> sale/img
DEBUG - 2014-10-24 09:06:05 --> Config Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:06:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:06:05 --> Config Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:06:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:06:05 --> URI Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Router Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Output Class Initialized
DEBUG - 2014-10-24 09:06:05 --> URI Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Router Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Output Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Security Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Input Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:06:05 --> Language Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Security Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Input Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:06:05 --> Language Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Loader Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Loader Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:06:05 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:06:05 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:06:05 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:06:05 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Controller Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Controller Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:05 --> SELECT *
FROM (`pricing`)
JOIN `product` ON `product`.`korea_barcode` = `pricing`.`product_korea_barcode`
WHERE `pricing`.`product_korea_barcode` IN ('8809255481051') 
DEBUG - 2014-10-24 09:06:05 --> Final output sent to browser
DEBUG - 2014-10-24 09:06:05 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:05 --> Total execution time: 0.0408
DEBUG - 2014-10-24 09:06:05 --> Final output sent to browser
DEBUG - 2014-10-24 09:06:05 --> Total execution time: 0.0514
DEBUG - 2014-10-24 09:06:11 --> Config Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:06:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:06:11 --> URI Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Router Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Output Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Security Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Input Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:06:11 --> Language Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Loader Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:06:11 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:06:11 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Controller Class Initialized
DEBUG - 2014-10-24 09:06:11 --> order_id 20
DEBUG - 2014-10-24 09:06:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:11 --> data{"name":"Donut","surname":"","line_id":"","email":"","telephone_no":""}
DEBUG - 2014-10-24 09:06:12 --> address -----  ID -----
DEBUG - 2014-10-24 09:06:12 --> order20
DEBUG - 2014-10-24 09:06:12 --> data{"channel_id":"1","customer_id":"8"}
DEBUG - 2014-10-24 09:06:12 --> {"korea_barcode":"8809255481051","product_name":"Aurore Sticker No.3","amount":"5","mt_price":"120.00","price":"0.00","percent_discount":"","mt_price\/unit":"120","price\/unit":"72"}
DEBUG - 2014-10-24 09:06:12 --> Final output sent to browser
DEBUG - 2014-10-24 09:06:12 --> Total execution time: 1.2546
DEBUG - 2014-10-24 09:06:12 --> Config Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:06:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:06:12 --> URI Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Router Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Output Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Security Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Input Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:06:12 --> Language Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Loader Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:06:12 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:06:12 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Controller Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:06:12 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:06:12 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:06:12 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:06:12 --> Final output sent to browser
DEBUG - 2014-10-24 09:06:12 --> Total execution time: 0.0204
DEBUG - 2014-10-24 09:08:26 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:26 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:26 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:26 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:26 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:26 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:26 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:26 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:08:26 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:08:26 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:08:26 --> Final output sent to browser
DEBUG - 2014-10-24 09:08:26 --> Total execution time: 0.0262
DEBUG - 2014-10-24 09:08:34 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:34 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:34 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:34 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:34 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:34 --> File loaded: application/views/delivery/delivery_list.php
DEBUG - 2014-10-24 09:08:34 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:08:34 --> Final output sent to browser
DEBUG - 2014-10-24 09:08:34 --> Total execution time: 0.4575
DEBUG - 2014-10-24 09:08:39 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:39 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:39 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:39 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:39 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:39 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:39 --> select * from sale_item where order_id = '20'
DEBUG - 2014-10-24 09:08:39 --> UPDATE `store_product` SET `amount` = 22 WHERE `store_code` =  '00000' AND `product_korea_barcode` =  '8809255481051'
DEBUG - 2014-10-24 09:08:39 --> data{"tracking_no":"","shipment_fee":"","package_cost":"","status":"delivered"}
DEBUG - 2014-10-24 09:08:40 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:40 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:40 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:40 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:40 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:40 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:40 --> File loaded: application/views/delivery/delivery_list.php
DEBUG - 2014-10-24 09:08:40 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:08:40 --> Final output sent to browser
DEBUG - 2014-10-24 09:08:40 --> Total execution time: 0.0183
DEBUG - 2014-10-24 09:08:45 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:45 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:45 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:45 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:45 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:45 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:45 --> File loaded: application/views/stock/stock_list.php
DEBUG - 2014-10-24 09:08:45 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:08:45 --> Final output sent to browser
DEBUG - 2014-10-24 09:08:45 --> Total execution time: 0.0346
DEBUG - 2014-10-24 09:08:48 --> Config Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:08:48 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:08:48 --> URI Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Router Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Output Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Security Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Input Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:08:48 --> Language Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Loader Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:08:48 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:08:48 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Controller Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:08:48 --> File loaded: application/views/stock/stock_edit.php
DEBUG - 2014-10-24 09:08:48 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:08:48 --> Final output sent to browser
DEBUG - 2014-10-24 09:08:48 --> Total execution time: 0.0413
DEBUG - 2014-10-24 09:09:15 --> Config Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:09:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:09:15 --> URI Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Router Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Output Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Security Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Input Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:09:15 --> Language Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Loader Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:09:15 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:09:15 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Controller Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Model Class Initialized
DEBUG - 2014-10-24 09:09:15 --> Model Class Initialized
DEBUG - 2014-10-24 09:09:15 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-24 09:09:15 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:09:15 --> Final output sent to browser
DEBUG - 2014-10-24 09:09:15 --> Total execution time: 0.0254
DEBUG - 2014-10-24 09:09:16 --> Config Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:09:16 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:09:16 --> URI Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Router Class Initialized
DEBUG - 2014-10-24 09:09:16 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:09:16 --> Output Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Security Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Input Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:09:16 --> Language Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Loader Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:09:16 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:09:16 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:09:16 --> Controller Class Initialized
DEBUG - 2014-10-24 09:09:16 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:09:16 --> Final output sent to browser
DEBUG - 2014-10-24 09:09:16 --> Total execution time: 0.0133
DEBUG - 2014-10-24 09:13:49 --> Config Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:13:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:13:49 --> URI Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Router Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Output Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Security Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Input Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:13:49 --> Language Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Loader Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:13:49 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:13:49 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Controller Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Model Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Model Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Model Class Initialized
DEBUG - 2014-10-24 09:13:49 --> Model Class Initialized
DEBUG - 2014-10-24 09:13:49 --> File loaded: application/views/stock/stock_edit.php
DEBUG - 2014-10-24 09:13:49 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:13:49 --> Final output sent to browser
DEBUG - 2014-10-24 09:13:49 --> Total execution time: 0.0325
DEBUG - 2014-10-24 09:15:14 --> Config Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:15:14 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:15:14 --> URI Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Router Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Output Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Security Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Input Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:15:14 --> Language Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Loader Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:15:14 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:15:14 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Controller Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Model Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Model Class Initialized
DEBUG - 2014-10-24 09:15:14 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-24 09:15:14 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:15:14 --> Final output sent to browser
DEBUG - 2014-10-24 09:15:14 --> Total execution time: 0.0188
DEBUG - 2014-10-24 09:15:14 --> Config Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:15:14 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:15:14 --> URI Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Router Class Initialized
DEBUG - 2014-10-24 09:15:14 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:15:14 --> Output Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Security Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Input Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:15:14 --> Language Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Loader Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:15:14 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:15:14 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:15:14 --> Controller Class Initialized
DEBUG - 2014-10-24 09:15:14 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:15:14 --> Final output sent to browser
DEBUG - 2014-10-24 09:15:14 --> Total execution time: 0.0149
DEBUG - 2014-10-24 09:16:34 --> Config Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:16:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:16:34 --> URI Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Router Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Output Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Security Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Input Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:16:34 --> Language Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Loader Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:16:34 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:16:34 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Controller Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> Model Class Initialized
DEBUG - 2014-10-24 09:16:34 --> File loaded: application/views/sale/sale_edit.php
DEBUG - 2014-10-24 09:16:34 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:16:34 --> Final output sent to browser
DEBUG - 2014-10-24 09:16:34 --> Total execution time: 0.0287
DEBUG - 2014-10-24 09:19:08 --> Config Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:19:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:19:08 --> URI Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Router Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Output Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Security Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Input Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:19:08 --> Language Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Loader Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:19:08 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:19:08 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Controller Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:08 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:08 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:19:08 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:19:08 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:19:08 --> Final output sent to browser
DEBUG - 2014-10-24 09:19:08 --> Total execution time: 0.1148
DEBUG - 2014-10-24 09:19:16 --> Config Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:19:16 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:19:16 --> URI Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Router Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Output Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Security Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Input Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:19:16 --> Language Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Loader Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:19:16 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:19:16 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Controller Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:16 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('tabom market')
                 OR UPPER(product_name) LIKE '%TABOM MARKET%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:19:16 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:19:16 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:19:16 --> Final output sent to browser
DEBUG - 2014-10-24 09:19:16 --> Total execution time: 0.0267
DEBUG - 2014-10-24 09:19:59 --> Config Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:19:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:19:59 --> URI Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Router Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Output Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Security Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Input Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:19:59 --> Language Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Loader Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:19:59 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:19:59 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Controller Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Model Class Initialized
DEBUG - 2014-10-24 09:19:59 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:00 --> File loaded: application/views/stock/stock_cost.php
DEBUG - 2014-10-24 09:20:00 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:00 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:00 --> Total execution time: 0.3075
DEBUG - 2014-10-24 09:20:09 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:09 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:09 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:09 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:09 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:09 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:09 --> File loaded: application/views/stock/stock_cost.php
DEBUG - 2014-10-24 09:20:09 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:09 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:09 --> Total execution time: 0.0230
DEBUG - 2014-10-24 09:20:17 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:17 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:17 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:17 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:17 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:17 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:17 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:17 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:20:17 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:20:17 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:17 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:17 --> Total execution time: 0.1126
DEBUG - 2014-10-24 09:20:22 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:22 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:22 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:22 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:22 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:22 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:20:22 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:20:22 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:22 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:22 --> Total execution time: 0.1200
DEBUG - 2014-10-24 09:20:24 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:24 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:24 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:24 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:24 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:24 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:24 --> File loaded: application/views/stock/stock_list.php
DEBUG - 2014-10-24 09:20:24 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:24 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:24 --> Total execution time: 0.0214
DEBUG - 2014-10-24 09:20:36 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:36 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:36 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:36 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:36 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:36 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:36 --> SELECT *,sale.order_id as sale_order_id,delivery.id as delivery_id,customer.id as customer_id,channel.description as channel_desc FROM sale 
        LEFT JOIN customer ON sale.customer_id = customer.id
        LEFT JOIN channel ON sale.channel_id = channel.id
        LEFT JOIN payment_type ON sale.payment_type_id = payment_type.payment_type_id
        LEFT JOIN address ON sale.address_id = address.id
        LEFT JOIN delivery ON sale.order_id = delivery.order_id
                ORDER BY payment_date DESC
DEBUG - 2014-10-24 09:20:36 --> File loaded: application/views/sale/sale_list.php
DEBUG - 2014-10-24 09:20:36 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:36 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:36 --> Total execution time: 0.0178
DEBUG - 2014-10-24 09:20:40 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:40 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:40 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:20:40 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:40 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:40 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:40 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:40 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:40 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:40 --> Total execution time: 0.0228
DEBUG - 2014-10-24 09:20:40 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:40 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:40 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:20:40 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:40 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:40 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:40 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:40 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:40 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:40 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:40 --> Total execution time: 0.0188
DEBUG - 2014-10-24 09:20:56 --> Config Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:20:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:20:56 --> URI Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Router Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Output Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Security Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Input Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:20:56 --> Language Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Loader Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:20:56 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:20:56 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Controller Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:20:57 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:20:57 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:20:57 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:20:57 --> Final output sent to browser
DEBUG - 2014-10-24 09:20:57 --> Total execution time: 0.1007
DEBUG - 2014-10-24 09:21:31 --> Config Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:21:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:21:31 --> URI Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Router Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Output Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Security Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Input Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:21:31 --> Language Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Loader Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:21:31 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:21:31 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Controller Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:31 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:31 --> File loaded: application/views/stock/stock_edit.php
DEBUG - 2014-10-24 09:21:31 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:21:31 --> Final output sent to browser
DEBUG - 2014-10-24 09:21:31 --> Total execution time: 0.0212
DEBUG - 2014-10-24 09:21:41 --> Config Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:21:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:21:41 --> URI Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Router Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Config Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:21:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:21:41 --> Output Class Initialized
DEBUG - 2014-10-24 09:21:41 --> URI Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Router Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Security Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Output Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Input Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:21:41 --> Security Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Language Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Input Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:21:41 --> Language Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Loader Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Loader Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:21:41 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:21:41 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:21:41 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:21:41 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Controller Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Controller Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Model Class Initialized
DEBUG - 2014-10-24 09:21:41 --> Final output sent to browser
DEBUG - 2014-10-24 09:21:41 --> Total execution time: 0.0198
DEBUG - 2014-10-24 09:21:41 --> Final output sent to browser
DEBUG - 2014-10-24 09:21:41 --> Total execution time: 0.0162
DEBUG - 2014-10-24 09:22:12 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:12 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:12 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:12 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:12 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:12 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:12 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:12 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:12 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:12 --> Total execution time: 0.0190
DEBUG - 2014-10-24 09:22:12 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:12 --> Total execution time: 0.0160
DEBUG - 2014-10-24 09:22:28 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:28 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:28 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:28 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:28 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:28 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-24 09:22:28 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:28 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:28 --> Total execution time: 0.0183
DEBUG - 2014-10-24 09:22:28 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:28 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:28 --> No URI present. Default controller set.
DEBUG - 2014-10-24 09:22:28 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:28 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:28 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:28 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:28 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:28 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:28 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:28 --> Total execution time: 0.0227
DEBUG - 2014-10-24 09:22:39 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:39 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:39 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:39 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:39 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:39 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:39 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:39 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:39 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:39 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:39 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:39 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:39 --> Total execution time: 0.0193
DEBUG - 2014-10-24 09:22:39 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:39 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:39 --> Total execution time: 0.0182
DEBUG - 2014-10-24 09:22:43 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:43 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:43 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:43 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:43 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:43 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:43 --> tran id 
DEBUG - 2014-10-24 09:22:43 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:43 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:43 --> tran id 
DEBUG - 2014-10-24 09:22:44 --> {"last_store_amount":"","korea_barcode":"8809255485356","amount":"1","after_cut":"4","product_name":"TABOM MARKET WALLET","previous_amount":"5"}
DEBUG - 2014-10-24 09:22:44 --> {"last_store_amount":"","korea_barcode":"8809255484816","amount":"1","after_cut":"37","product_name":"TABOM ORANGE LIP TINT","previous_amount":"38"}
DEBUG - 2014-10-24 09:22:44 --> {"last_store_amount":"","korea_barcode":"8809255482799","amount":"1","after_cut":"0","product_name":"SPARK FLIP CASE For Galaxy note 2","previous_amount":"1"}
DEBUG - 2014-10-24 09:22:44 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:44 --> Total execution time: 0.6894
DEBUG - 2014-10-24 09:22:44 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:44 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:44 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:44 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:44 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:44 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:44 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:44 --> File loaded: application/views/stock/stock_list.php
DEBUG - 2014-10-24 09:22:44 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:44 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:44 --> Total execution time: 0.0276
DEBUG - 2014-10-24 09:22:48 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:48 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:48 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:48 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:48 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:48 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:48 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:48 --> UPDATE `store_product` SET `amount` = 0 WHERE `store_code` =  '00000' AND `product_korea_barcode` =  '8809255482799'
DEBUG - 2014-10-24 09:22:49 --> UPDATE `store_product` SET `amount` = 37 WHERE `store_code` =  '00000' AND `product_korea_barcode` =  '8809255484816'
DEBUG - 2014-10-24 09:22:50 --> UPDATE `store_product` SET `amount` = 4 WHERE `store_code` =  '00000' AND `product_korea_barcode` =  '8809255485356'
DEBUG - 2014-10-24 09:22:50 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:50 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:50 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:50 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:50 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:50 --> SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN '2014-10-24 00:00:00' AND '2014-10-24 00:00:00' 
            AND (
                   (store_source_code = '00000'  AND type='preparing')
                    OR 
                   (store_destination_code = '00000'  AND type='done')
                )
            ORDER BY id desc
DEBUG - 2014-10-24 09:22:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482799' AND store_code = '00000' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484816' AND store_code = '00000' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255485356' AND store_code = '00000' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:50 --> File loaded: application/views/stock/cut_log.php
DEBUG - 2014-10-24 09:22:50 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:50 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:50 --> Total execution time: 0.0367
DEBUG - 2014-10-24 09:22:51 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:51 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:51 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:51 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:51 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:51 --> Controller Class Initialized
ERROR - 2014-10-24 09:22:51 --> 404 Page Not Found --> stock/img
DEBUG - 2014-10-24 09:22:53 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:53 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:53 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:53 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:53 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:53 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:53 --> File loaded: application/views/stock/stock_list.php
DEBUG - 2014-10-24 09:22:53 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:53 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:53 --> Total execution time: 0.0218
DEBUG - 2014-10-24 09:22:55 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:55 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:55 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:55 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:55 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:55 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:56 --> amount======>7
DEBUG - 2014-10-24 09:22:57 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:57 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:57 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:57 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:57 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:57 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Controller Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Model Class Initialized
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN '2014-10-24 00:00:00' AND '2014-10-24 00:00:00' 
            AND (
                   (store_source_code = 'internet'  AND type='preparing')
                    OR 
                   (store_destination_code = 'internet'  AND type='done')
                )
            ORDER BY id desc
DEBUG - 2014-10-24 09:22:57 --> ["92"]
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> 8809255482799 : 
DEBUG - 2014-10-24 09:22:57 --> 8809255482799 : 1
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482799' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482799' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> 8809255484816 : 
DEBUG - 2014-10-24 09:22:57 --> 8809255484816 : 7
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484816' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484816' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> 8809255485356 : 
DEBUG - 2014-10-24 09:22:57 --> 8809255485356 : 1
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255485356' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> current trans id  = 92
DEBUG - 2014-10-24 09:22:57 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255485356' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:22:57 --> FOUND
DEBUG - 2014-10-24 09:22:57 --> File loaded: application/views/stock/cut_log.php
DEBUG - 2014-10-24 09:22:57 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:22:57 --> Final output sent to browser
DEBUG - 2014-10-24 09:22:57 --> Total execution time: 0.0271
DEBUG - 2014-10-24 09:22:57 --> Config Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:22:57 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:22:57 --> URI Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Router Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Output Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Security Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Input Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:22:57 --> Language Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Loader Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:22:57 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:22:57 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:22:57 --> Controller Class Initialized
ERROR - 2014-10-24 09:22:57 --> 404 Page Not Found --> stock/img
DEBUG - 2014-10-24 09:23:00 --> Config Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:23:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:23:00 --> URI Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Router Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Output Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Security Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Input Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:23:00 --> Language Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Loader Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:23:00 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:23:00 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Controller Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:23:00 --> Model Class Initialized
DEBUG - 2014-10-24 09:23:00 --> File loaded: application/views/stock/stock_list.php
DEBUG - 2014-10-24 09:23:00 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:23:00 --> Final output sent to browser
DEBUG - 2014-10-24 09:23:00 --> Total execution time: 0.0203
DEBUG - 2014-10-24 09:28:50 --> Config Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:28:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:28:50 --> URI Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Router Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Output Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Security Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Input Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:28:50 --> Language Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Loader Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:28:50 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:28:50 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Controller Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:28:50 --> Model Class Initialized
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN '2014-10-24 00:00:00' AND '2014-10-24 00:00:00' 
            AND (
                   (store_source_code = 'internet'  AND type='preparing')
                    OR 
                   (store_destination_code = 'internet'  AND type='done')
                )
            ORDER BY id desc
DEBUG - 2014-10-24 09:28:50 --> ["92"]
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> 8809255482799 : 
DEBUG - 2014-10-24 09:28:50 --> 8809255482799 : 1
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482799' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482799' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> 8809255484816 : 
DEBUG - 2014-10-24 09:28:50 --> 8809255484816 : 7
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484816' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484816' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> 8809255485356 : 
DEBUG - 2014-10-24 09:28:50 --> 8809255485356 : 1
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255485356' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> current trans id  = 92
DEBUG - 2014-10-24 09:28:50 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255485356' AND store_code = 'internet' AND stock_transaction_id = '92'
DEBUG - 2014-10-24 09:28:50 --> FOUND
DEBUG - 2014-10-24 09:28:50 --> File loaded: application/views/stock/cut_log.php
DEBUG - 2014-10-24 09:28:50 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:28:50 --> Final output sent to browser
DEBUG - 2014-10-24 09:28:50 --> Total execution time: 0.0343
DEBUG - 2014-10-24 09:28:51 --> Config Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:28:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:28:51 --> URI Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Router Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Output Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Security Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Input Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:28:51 --> Language Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Loader Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:28:51 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:28:51 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:28:51 --> Controller Class Initialized
ERROR - 2014-10-24 09:28:51 --> 404 Page Not Found --> stock/img
DEBUG - 2014-10-24 09:30:21 --> Config Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:30:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:30:21 --> URI Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Router Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Output Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Security Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Input Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:30:21 --> Language Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Loader Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:30:21 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:30:21 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Controller Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:21 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:22 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:30:22 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:30:22 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:30:22 --> Final output sent to browser
DEBUG - 2014-10-24 09:30:22 --> Total execution time: 0.1841
DEBUG - 2014-10-24 09:30:32 --> Config Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:30:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:30:32 --> URI Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Router Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Output Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Security Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Input Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:30:32 --> Language Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Loader Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:30:32 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:30:32 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Controller Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:30:32 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('eco bag')
                 OR UPPER(product_name) LIKE '%ECO BAG%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:30:32 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:30:32 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:30:32 --> Final output sent to browser
DEBUG - 2014-10-24 09:30:32 --> Total execution time: 0.0292
DEBUG - 2014-10-24 09:32:07 --> Config Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:32:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:32:07 --> URI Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Router Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Output Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Security Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Input Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:32:07 --> Language Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Loader Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:32:07 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:32:07 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Controller Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:07 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:07 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('umbrella')
                 OR UPPER(product_name) LIKE '%UMBRELLA%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:32:07 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:32:07 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:32:07 --> Final output sent to browser
DEBUG - 2014-10-24 09:32:07 --> Total execution time: 0.0233
DEBUG - 2014-10-24 09:32:22 --> Config Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:32:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:32:22 --> URI Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Router Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Output Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Security Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Input Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:32:22 --> Language Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Loader Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:32:22 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:32:22 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Controller Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:22 --> Model Class Initialized
DEBUG - 2014-10-24 09:32:22 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('travel')
                 OR UPPER(product_name) LIKE '%TRAVEL%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:32:22 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:32:22 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:32:22 --> Final output sent to browser
DEBUG - 2014-10-24 09:32:22 --> Total execution time: 0.0291
DEBUG - 2014-10-24 09:34:32 --> Config Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:34:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:34:32 --> URI Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Router Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Output Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Security Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Input Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:34:32 --> Language Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Loader Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:34:32 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:34:32 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Controller Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:32 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:32 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('backpack')
                 OR UPPER(product_name) LIKE '%BACKPACK%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:34:32 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:34:32 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:34:32 --> Final output sent to browser
DEBUG - 2014-10-24 09:34:32 --> Total execution time: 0.0207
DEBUG - 2014-10-24 09:34:58 --> Config Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:34:58 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:34:58 --> URI Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Router Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Output Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Security Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Input Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:34:58 --> Language Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Loader Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:34:58 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:34:58 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Controller Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:58 --> Model Class Initialized
DEBUG - 2014-10-24 09:34:58 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('canvas')
                 OR UPPER(product_name) LIKE '%CANVAS%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:34:58 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:34:58 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:34:58 --> Final output sent to browser
DEBUG - 2014-10-24 09:34:58 --> Total execution time: 0.0211
DEBUG - 2014-10-24 09:37:10 --> Config Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:37:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:37:10 --> URI Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Router Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Output Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Security Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Input Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:37:10 --> Language Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Loader Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:37:10 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:37:10 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Controller Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:10 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:10 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('pencil pouch')
                 OR UPPER(product_name) LIKE '%PENCIL POUCH%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:37:10 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:37:10 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:37:10 --> Final output sent to browser
DEBUG - 2014-10-24 09:37:10 --> Total execution time: 0.0256
DEBUG - 2014-10-24 09:37:29 --> Config Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:37:29 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:37:29 --> URI Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Router Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Output Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Security Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Input Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:37:29 --> Language Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Loader Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:37:29 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:37:29 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Controller Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:29 --> Model Class Initialized
DEBUG - 2014-10-24 09:37:29 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('pencil case')
                 OR UPPER(product_name) LIKE '%PENCIL CASE%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:37:29 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:37:29 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:37:29 --> Final output sent to browser
DEBUG - 2014-10-24 09:37:29 --> Total execution time: 0.0222
DEBUG - 2014-10-24 09:41:11 --> Config Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:41:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:41:11 --> URI Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Router Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Output Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Security Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Input Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:41:11 --> Language Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Loader Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:41:11 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:41:11 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Controller Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:41:11 --> Model Class Initialized
DEBUG - 2014-10-24 09:41:11 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('flat pouch ')
                 OR UPPER(product_name) LIKE '%FLAT POUCH %' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:41:11 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:41:11 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:41:11 --> Final output sent to browser
DEBUG - 2014-10-24 09:41:11 --> Total execution time: 0.0365
DEBUG - 2014-10-24 09:42:16 --> Config Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:42:16 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:42:16 --> URI Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Router Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Output Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Security Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Input Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:42:16 --> Language Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Loader Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:42:16 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:42:16 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Controller Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:42:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:42:16 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('flat pouch ')
                 OR UPPER(product_name) LIKE '%FLAT POUCH %' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:42:16 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:42:16 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:42:16 --> Final output sent to browser
DEBUG - 2014-10-24 09:42:16 --> Total execution time: 0.0263
DEBUG - 2014-10-24 09:43:47 --> Config Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:43:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:43:47 --> URI Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Router Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Output Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Security Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Input Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:43:47 --> Language Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Loader Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:43:47 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:43:47 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Controller Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:47 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:47 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('tabom flat')
                 OR UPPER(product_name) LIKE '%TABOM FLAT%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:43:47 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:43:47 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:43:47 --> Final output sent to browser
DEBUG - 2014-10-24 09:43:47 --> Total execution time: 0.0281
DEBUG - 2014-10-24 09:43:56 --> Config Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:43:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:43:56 --> URI Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Router Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Output Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Security Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Input Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:43:56 --> Language Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Loader Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:43:56 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:43:56 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Controller Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:56 --> Model Class Initialized
DEBUG - 2014-10-24 09:43:56 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:43:56 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:43:56 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:43:56 --> Final output sent to browser
DEBUG - 2014-10-24 09:43:56 --> Total execution time: 0.2010
DEBUG - 2014-10-24 09:44:24 --> Config Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:44:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:44:24 --> URI Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Router Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Output Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Security Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Input Class Initialized
DEBUG - 2014-10-24 09:44:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:44:24 --> Language Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Loader Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:44:25 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:44:25 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Controller Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:44:25 --> Model Class Initialized
DEBUG - 2014-10-24 09:44:25 --> create_date __> 2014-10-24
DEBUG - 2014-10-24 09:44:25 --> MONTH __> 10
DEBUG - 2014-10-24 09:44:25 --> LAST QUERY select invoice_no as invoice_no from invoice where MONTH(create_date) = "10"
DEBUG - 2014-10-24 09:44:25 --> create_issue_no11
DEBUG - 2014-10-24 09:44:25 --> File loaded: application/views/invoice/invoice_edit.php
DEBUG - 2014-10-24 09:44:25 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:44:25 --> Final output sent to browser
DEBUG - 2014-10-24 09:44:25 --> Total execution time: 0.1357
DEBUG - 2014-10-24 09:45:16 --> Config Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:45:16 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:45:16 --> URI Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Router Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Output Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Security Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Input Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:45:16 --> Language Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Loader Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:45:16 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:45:16 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Controller Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Model Class Initialized
DEBUG - 2014-10-24 09:45:16 --> Final output sent to browser
DEBUG - 2014-10-24 09:45:16 --> Total execution time: 0.0331
DEBUG - 2014-10-24 09:45:17 --> Config Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:45:17 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:45:17 --> URI Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Router Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Output Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Security Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Input Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:45:17 --> Language Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Loader Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:45:17 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:45:17 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Controller Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Model Class Initialized
DEBUG - 2014-10-24 09:45:17 --> Model Class Initialized
DEBUG - 2014-10-24 09:45:17 --> SELECT *
FROM (`pricing`)
JOIN `product` ON `product`.`korea_barcode` = `pricing`.`product_korea_barcode`
WHERE `pricing`.`product_korea_barcode` IN ('8809255482232') 
DEBUG - 2014-10-24 09:45:17 --> Final output sent to browser
DEBUG - 2014-10-24 09:45:17 --> Total execution time: 0.0240
DEBUG - 2014-10-24 09:47:02 --> Config Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:47:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:47:02 --> URI Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Router Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Output Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Security Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Input Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:47:02 --> Language Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Loader Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:47:02 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:47:02 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Controller Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:02 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:02 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:47:02 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:47:02 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:47:02 --> Final output sent to browser
DEBUG - 2014-10-24 09:47:02 --> Total execution time: 0.0948
DEBUG - 2014-10-24 09:47:06 --> Config Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:47:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:47:06 --> URI Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Router Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Output Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Security Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Input Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:47:06 --> Language Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Loader Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:47:06 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:47:06 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Controller Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('8809255482232')
                 OR UPPER(product_name) LIKE '%8809255482232%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:47:06 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:47:06 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:47:06 --> Final output sent to browser
DEBUG - 2014-10-24 09:47:06 --> Total execution time: 0.0235
DEBUG - 2014-10-24 09:47:06 --> Config Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:47:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:47:06 --> URI Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Router Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Output Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Security Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Input Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:47:06 --> Language Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Loader Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:47:06 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:47:06 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Controller Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> Model Class Initialized
DEBUG - 2014-10-24 09:47:06 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('8809255482232')
                 OR UPPER(product_name) LIKE '%8809255482232%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:47:06 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:47:06 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:47:06 --> Final output sent to browser
DEBUG - 2014-10-24 09:47:06 --> Total execution time: 0.0190
DEBUG - 2014-10-24 09:48:33 --> Config Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:48:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:48:33 --> URI Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Router Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Output Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Security Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Input Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:48:33 --> Language Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Loader Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:48:33 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:48:33 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Controller Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:33 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:33 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('ta bom')
                 OR UPPER(product_name) LIKE '%TA BOM%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:48:33 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:48:33 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:48:33 --> Final output sent to browser
DEBUG - 2014-10-24 09:48:33 --> Total execution time: 0.0234
DEBUG - 2014-10-24 09:48:43 --> Config Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:48:43 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:48:43 --> URI Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Router Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Output Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Security Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Input Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:48:43 --> Language Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Loader Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:48:43 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:48:43 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Controller Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:43 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:43 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('pen')
                 OR UPPER(product_name) LIKE '%PEN%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:48:43 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:48:43 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:48:43 --> Final output sent to browser
DEBUG - 2014-10-24 09:48:43 --> Total execution time: 0.0276
DEBUG - 2014-10-24 09:48:59 --> Config Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:48:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:48:59 --> URI Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Router Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Output Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Security Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Input Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:48:59 --> Language Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Loader Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:48:59 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:48:59 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Controller Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:59 --> Model Class Initialized
DEBUG - 2014-10-24 09:48:59 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('ball pen')
                 OR UPPER(product_name) LIKE '%BALL PEN%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:48:59 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:48:59 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:48:59 --> Final output sent to browser
DEBUG - 2014-10-24 09:48:59 --> Total execution time: 0.0280
DEBUG - 2014-10-24 09:59:37 --> Config Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:59:37 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:59:37 --> URI Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Router Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Output Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Security Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Input Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:59:37 --> Language Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Loader Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:59:37 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:59:37 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Controller Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:37 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:37 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('towell')
                 OR UPPER(product_name) LIKE '%TOWELL%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:59:37 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:59:37 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:59:37 --> Final output sent to browser
DEBUG - 2014-10-24 09:59:37 --> Total execution time: 0.0226
DEBUG - 2014-10-24 09:59:42 --> Config Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Hooks Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Utf8 Class Initialized
DEBUG - 2014-10-24 09:59:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 09:59:42 --> URI Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Router Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Output Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Security Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Input Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 09:59:42 --> Language Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Loader Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Helper loaded: url_helper
DEBUG - 2014-10-24 09:59:42 --> Helper loaded: form_helper
DEBUG - 2014-10-24 09:59:42 --> Database Driver Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Controller Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:42 --> Model Class Initialized
DEBUG - 2014-10-24 09:59:42 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('towel')
                 OR UPPER(product_name) LIKE '%TOWEL%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 09:59:42 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 09:59:42 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 09:59:42 --> Final output sent to browser
DEBUG - 2014-10-24 09:59:42 --> Total execution time: 0.0207
DEBUG - 2014-10-24 10:06:12 --> Config Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Hooks Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Utf8 Class Initialized
DEBUG - 2014-10-24 10:06:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 10:06:12 --> URI Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Router Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Output Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Security Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Input Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 10:06:12 --> Language Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Loader Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Helper loaded: url_helper
DEBUG - 2014-10-24 10:06:12 --> Helper loaded: form_helper
DEBUG - 2014-10-24 10:06:12 --> Database Driver Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Controller Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Model Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Model Class Initialized
DEBUG - 2014-10-24 10:06:12 --> Model Class Initialized
DEBUG - 2014-10-24 10:06:12 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('towel')
                 OR UPPER(product_name) LIKE '%TOWEL%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 10:06:12 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 10:06:12 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 10:06:12 --> Final output sent to browser
DEBUG - 2014-10-24 10:06:12 --> Total execution time: 0.0182
DEBUG - 2014-10-24 10:07:11 --> Config Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Hooks Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Utf8 Class Initialized
DEBUG - 2014-10-24 10:07:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 10:07:11 --> URI Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Router Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Output Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Security Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Input Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 10:07:11 --> Language Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Loader Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Helper loaded: url_helper
DEBUG - 2014-10-24 10:07:11 --> Helper loaded: form_helper
DEBUG - 2014-10-24 10:07:11 --> Database Driver Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Controller Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> Model Class Initialized
DEBUG - 2014-10-24 10:07:11 --> File loaded: application/views/sale/sale_edit.php
DEBUG - 2014-10-24 10:07:11 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 10:07:11 --> Final output sent to browser
DEBUG - 2014-10-24 10:07:11 --> Total execution time: 0.0237
DEBUG - 2014-10-24 10:12:48 --> Config Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Hooks Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Utf8 Class Initialized
DEBUG - 2014-10-24 10:12:48 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 10:12:48 --> URI Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Router Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Output Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Security Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Input Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 10:12:48 --> Language Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Loader Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Helper loaded: url_helper
DEBUG - 2014-10-24 10:12:48 --> Helper loaded: form_helper
DEBUG - 2014-10-24 10:12:48 --> Database Driver Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Controller Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:48 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:48 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 10:12:48 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 10:12:48 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 10:12:48 --> Final output sent to browser
DEBUG - 2014-10-24 10:12:48 --> Total execution time: 0.0923
DEBUG - 2014-10-24 10:12:57 --> Config Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Hooks Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Utf8 Class Initialized
DEBUG - 2014-10-24 10:12:57 --> UTF-8 Support Enabled
DEBUG - 2014-10-24 10:12:57 --> URI Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Router Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Output Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Security Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Input Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-24 10:12:57 --> Language Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Loader Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Helper loaded: url_helper
DEBUG - 2014-10-24 10:12:57 --> Helper loaded: form_helper
DEBUG - 2014-10-24 10:12:57 --> Database Driver Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Controller Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:57 --> Model Class Initialized
DEBUG - 2014-10-24 10:12:57 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
 WHERE 
korea_barcode in ('clear pouch')
                 OR UPPER(product_name) LIKE '%CLEAR POUCH%' 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-24 10:12:57 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-24 10:12:57 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-24 10:12:57 --> Final output sent to browser
DEBUG - 2014-10-24 10:12:57 --> Total execution time: 0.0267
