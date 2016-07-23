<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-10-27 19:34:28 --> Config Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Hooks Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Utf8 Class Initialized
DEBUG - 2014-10-27 19:34:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-27 19:34:28 --> URI Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Router Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Output Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Security Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Input Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-27 19:34:28 --> Language Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Loader Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Helper loaded: url_helper
DEBUG - 2014-10-27 19:34:28 --> Helper loaded: form_helper
DEBUG - 2014-10-27 19:34:28 --> Database Driver Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Controller Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Model Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Model Class Initialized
DEBUG - 2014-10-27 19:34:28 --> Model Class Initialized
DEBUG - 2014-10-27 19:34:28 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-10-27 19:34:28 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-10-27 19:34:28 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-27 19:34:28 --> Final output sent to browser
DEBUG - 2014-10-27 19:34:28 --> Total execution time: 0.4271
