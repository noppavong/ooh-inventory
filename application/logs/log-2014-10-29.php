<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-10-29 04:38:07 --> Config Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Hooks Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Utf8 Class Initialized
DEBUG - 2014-10-29 04:38:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 04:38:07 --> URI Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Router Class Initialized
DEBUG - 2014-10-29 04:38:07 --> No URI present. Default controller set.
DEBUG - 2014-10-29 04:38:07 --> Output Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Security Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Input Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 04:38:07 --> Language Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Loader Class Initialized
DEBUG - 2014-10-29 04:38:07 --> Helper loaded: url_helper
DEBUG - 2014-10-29 04:38:07 --> Helper loaded: form_helper
DEBUG - 2014-10-29 04:38:07 --> Database Driver Class Initialized
ERROR - 2014-10-29 04:38:18 --> Severity: Warning  --> mysql_pconnect() [<a href='function.mysql-pconnect'>function.mysql-pconnect</a>]: Lost connection to MySQL server at 'reading initial communication packet', system error: 104 /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/system/database/drivers/mysql/mysql_driver.php 91
ERROR - 2014-10-29 04:38:18 --> Unable to connect to the database
DEBUG - 2014-10-29 04:38:18 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-10-29 04:40:16 --> Config Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Hooks Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Utf8 Class Initialized
DEBUG - 2014-10-29 04:40:16 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 04:40:16 --> URI Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Router Class Initialized
DEBUG - 2014-10-29 04:40:16 --> No URI present. Default controller set.
DEBUG - 2014-10-29 04:40:16 --> Output Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Security Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Input Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 04:40:16 --> Language Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Loader Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Helper loaded: url_helper
DEBUG - 2014-10-29 04:40:16 --> Helper loaded: form_helper
DEBUG - 2014-10-29 04:40:16 --> Database Driver Class Initialized
DEBUG - 2014-10-29 04:40:16 --> Controller Class Initialized
DEBUG - 2014-10-29 04:40:17 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-29 04:40:17 --> Final output sent to browser
DEBUG - 2014-10-29 04:40:17 --> Total execution time: 0.1924
DEBUG - 2014-10-29 04:40:49 --> Config Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Hooks Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Utf8 Class Initialized
DEBUG - 2014-10-29 04:40:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 04:40:49 --> URI Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Router Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Output Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Security Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Input Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 04:40:49 --> Language Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Loader Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Helper loaded: url_helper
DEBUG - 2014-10-29 04:40:49 --> Helper loaded: form_helper
DEBUG - 2014-10-29 04:40:49 --> Database Driver Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Controller Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Model Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Model Class Initialized
DEBUG - 2014-10-29 04:40:49 --> Model Class Initialized
DEBUG - 2014-10-29 04:40:49 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-29 04:40:49 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-29 04:40:49 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-29 04:40:49 --> Final output sent to browser
DEBUG - 2014-10-29 04:40:49 --> Total execution time: 0.2022
DEBUG - 2014-10-29 05:17:15 --> Config Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Hooks Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Utf8 Class Initialized
DEBUG - 2014-10-29 05:17:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 05:17:15 --> URI Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Router Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Output Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Security Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Input Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 05:17:15 --> Language Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Loader Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Helper loaded: url_helper
DEBUG - 2014-10-29 05:17:15 --> Helper loaded: form_helper
DEBUG - 2014-10-29 05:17:15 --> Database Driver Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Controller Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Model Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Model Class Initialized
DEBUG - 2014-10-29 05:17:15 --> File loaded: application/views/pricing/pricing_list.php
DEBUG - 2014-10-29 05:17:15 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-29 05:17:15 --> Final output sent to browser
DEBUG - 2014-10-29 05:17:15 --> Total execution time: 0.1668
DEBUG - 2014-10-29 05:17:15 --> Config Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Hooks Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Utf8 Class Initialized
DEBUG - 2014-10-29 05:17:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 05:17:15 --> URI Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Router Class Initialized
DEBUG - 2014-10-29 05:17:15 --> No URI present. Default controller set.
DEBUG - 2014-10-29 05:17:15 --> Output Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Security Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Input Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 05:17:15 --> Language Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Loader Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Helper loaded: url_helper
DEBUG - 2014-10-29 05:17:15 --> Helper loaded: form_helper
DEBUG - 2014-10-29 05:17:15 --> Database Driver Class Initialized
DEBUG - 2014-10-29 05:17:15 --> Controller Class Initialized
DEBUG - 2014-10-29 05:17:15 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-29 05:17:15 --> Final output sent to browser
DEBUG - 2014-10-29 05:17:15 --> Total execution time: 0.0358
DEBUG - 2014-10-29 05:17:27 --> Config Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Hooks Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Utf8 Class Initialized
DEBUG - 2014-10-29 05:17:27 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 05:17:27 --> URI Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Router Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Output Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Security Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Input Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 05:17:27 --> Language Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Loader Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Helper loaded: url_helper
DEBUG - 2014-10-29 05:17:27 --> Helper loaded: form_helper
DEBUG - 2014-10-29 05:17:27 --> Database Driver Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Controller Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Model Class Initialized
DEBUG - 2014-10-29 05:17:27 --> Model Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Config Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Hooks Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Utf8 Class Initialized
DEBUG - 2014-10-29 05:18:04 --> UTF-8 Support Enabled
DEBUG - 2014-10-29 05:18:04 --> URI Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Router Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Output Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Security Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Input Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-29 05:18:04 --> Language Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Loader Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Helper loaded: url_helper
DEBUG - 2014-10-29 05:18:04 --> Helper loaded: form_helper
DEBUG - 2014-10-29 05:18:04 --> Database Driver Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Controller Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Model Class Initialized
DEBUG - 2014-10-29 05:18:04 --> Model Class Initialized
DEBUG - 2014-10-29 05:18:05 --> Final output sent to browser
DEBUG - 2014-10-29 05:18:05 --> Total execution time: 0.5474
