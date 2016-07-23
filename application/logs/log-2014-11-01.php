<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-11-01 17:17:10 --> Config Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Hooks Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Utf8 Class Initialized
DEBUG - 2014-11-01 17:17:10 --> UTF-8 Support Enabled
DEBUG - 2014-11-01 17:17:10 --> URI Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Router Class Initialized
DEBUG - 2014-11-01 17:17:10 --> No URI present. Default controller set.
DEBUG - 2014-11-01 17:17:10 --> Output Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Security Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Input Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-11-01 17:17:10 --> Language Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Loader Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Helper loaded: url_helper
DEBUG - 2014-11-01 17:17:10 --> Helper loaded: form_helper
DEBUG - 2014-11-01 17:17:10 --> Database Driver Class Initialized
DEBUG - 2014-11-01 17:17:10 --> Controller Class Initialized
DEBUG - 2014-11-01 17:17:10 --> File loaded: application/views/base_site.php
DEBUG - 2014-11-01 17:17:10 --> Final output sent to browser
DEBUG - 2014-11-01 17:17:10 --> Total execution time: 0.4373
DEBUG - 2014-11-01 17:17:14 --> Config Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Hooks Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Utf8 Class Initialized
DEBUG - 2014-11-01 17:17:14 --> UTF-8 Support Enabled
DEBUG - 2014-11-01 17:17:14 --> URI Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Router Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Output Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Security Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Input Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-11-01 17:17:14 --> Language Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Loader Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Helper loaded: url_helper
DEBUG - 2014-11-01 17:17:14 --> Helper loaded: form_helper
DEBUG - 2014-11-01 17:17:14 --> Database Driver Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Controller Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Model Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Model Class Initialized
DEBUG - 2014-11-01 17:17:14 --> Model Class Initialized
DEBUG - 2014-11-01 17:17:15 --> SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code 
GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc
DEBUG - 2014-11-01 17:17:15 --> File loaded: application/views/stock/stock_summary.php
DEBUG - 2014-11-01 17:17:15 --> File loaded: application/views/base_site.php
DEBUG - 2014-11-01 17:17:15 --> Final output sent to browser
DEBUG - 2014-11-01 17:17:15 --> Total execution time: 0.2071
