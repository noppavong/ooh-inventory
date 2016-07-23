<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-10-31 11:03:26 --> Config Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:03:26 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:03:26 --> URI Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Router Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Output Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Security Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Input Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:03:26 --> Language Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Loader Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:03:26 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:03:26 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Controller Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:26 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN '2014-10-07 00:00:00' AND '2014-10-07 00:00:00' 
            AND (
                   (store_source_code = '10403'  AND type='preparing')
                    OR 
                   (store_destination_code = '10403'  AND type='done')
                )
            ORDER BY id desc
DEBUG - 2014-10-31 11:03:26 --> ["59","60"]
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255480689 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255480689 : 10
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255480689' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255480689' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255480689' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255481693 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255481693 : 13
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255481693' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481693' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481693' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255481921 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255481921 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255481921' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481921' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481921' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255481952 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255481952 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255481952' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481952' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255481952' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482218 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482218 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482218' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482218' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482218' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482447 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482447 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482447' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482447' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482447' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482461 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482461 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482461' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482461' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482461' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482515 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482515 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482515' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482515' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482515' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482652 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482652 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482652' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482652' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482652' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255482669 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255482669 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255482669' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482669' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255482669' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255483178 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255483178 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255483178' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483178' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483178' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> 8809255483611 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255483611 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255483611' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483611' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 60
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483611' AND store_code = '10403' AND stock_transaction_id = '60'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255483628 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255483628 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255483628' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483628' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255483659 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255483659 : 2
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255483659' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483659' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255483666 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255483666 : 2
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255483666' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255483666' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484410 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484410 : 2
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484410' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484410' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484458 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484458 : 2
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484458' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484458' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484465 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484465 : 2
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484465' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484465' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484489 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484489 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484489' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484489' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484496 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484496 : 3
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484496' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484496' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484502 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484502 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484502' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484502' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> 8809255484519 : 
DEBUG - 2014-10-31 11:03:26 --> 8809255484519 : 1
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                              WHERE product_korea_barcode = '8809255484519' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> current trans id  = 59
DEBUG - 2014-10-31 11:03:26 --> SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = '8809255484519' AND store_code = '10403' AND stock_transaction_id = '59'
DEBUG - 2014-10-31 11:03:26 --> FOUND
DEBUG - 2014-10-31 11:03:26 --> File loaded: application/views/stock/cut_log.php
DEBUG - 2014-10-31 11:03:26 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:03:26 --> Final output sent to browser
DEBUG - 2014-10-31 11:03:26 --> Total execution time: 0.4121
DEBUG - 2014-10-31 11:03:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:03:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:03:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:03:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:03:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:03:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:03:28 --> Controller Class Initialized
ERROR - 2014-10-31 11:03:28 --> 404 Page Not Found --> stock/img
DEBUG - 2014-10-31 11:03:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:03:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:03:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:03:30 --> No URI present. Default controller set.
DEBUG - 2014-10-31 11:03:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:03:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:03:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:03:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:03:30 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:03:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:03:30 --> Total execution time: 0.0298
DEBUG - 2014-10-31 11:03:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:03:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:03:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:03:30 --> No URI present. Default controller set.
DEBUG - 2014-10-31 11:03:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:03:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:03:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:03:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:03:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:03:30 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:03:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:03:30 --> Total execution time: 0.0344
DEBUG - 2014-10-31 11:03:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:03:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:03:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:03:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:03:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:03:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:03:39 --> File loaded: application/views/stock/stock_edit.php
DEBUG - 2014-10-31 11:03:39 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:03:39 --> Final output sent to browser
DEBUG - 2014-10-31 11:03:39 --> Total execution time: 0.2021
DEBUG - 2014-10-31 11:04:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:20 --> Total execution time: 0.1197
DEBUG - 2014-10-31 11:04:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:20 --> Total execution time: 0.1267
DEBUG - 2014-10-31 11:04:21 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:21 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:21 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:21 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:21 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:21 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:21 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:21 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:21 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:21 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:21 --> Total execution time: 0.0222
DEBUG - 2014-10-31 11:04:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:21 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:21 --> Total execution time: 0.0192
DEBUG - 2014-10-31 11:04:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:22 --> Total execution time: 0.0194
DEBUG - 2014-10-31 11:04:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:22 --> Total execution time: 0.0150
DEBUG - 2014-10-31 11:04:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:25 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:04:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:25 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:04:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:56 --> Total execution time: 0.0193
DEBUG - 2014-10-31 11:04:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:04:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:04:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:04:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:04:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:04:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:04:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:04:56 --> Total execution time: 0.0189
DEBUG - 2014-10-31 11:05:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:10 --> Total execution time: 0.0182
DEBUG - 2014-10-31 11:05:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:10 --> Total execution time: 0.0211
DEBUG - 2014-10-31 11:05:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:10 --> Total execution time: 0.0184
DEBUG - 2014-10-31 11:05:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:10 --> Total execution time: 0.0177
DEBUG - 2014-10-31 11:05:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:11 --> Total execution time: 0.0252
DEBUG - 2014-10-31 11:05:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:11 --> Total execution time: 0.0295
DEBUG - 2014-10-31 11:05:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:30 --> Total execution time: 0.0185
DEBUG - 2014-10-31 11:05:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:30 --> Total execution time: 0.0218
DEBUG - 2014-10-31 11:05:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:33 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:05:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:33 --> Total execution time: 0.0184
DEBUG - 2014-10-31 11:05:34 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:34 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:34 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:34 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:34 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:34 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:34 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:35 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:35 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:35 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:35 --> Total execution time: 0.0231
DEBUG - 2014-10-31 11:05:35 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:35 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:35 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:05:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:05:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:38 --> Total execution time: 0.0199
DEBUG - 2014-10-31 11:05:42 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:42 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:42 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:42 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:42 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:42 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:42 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:42 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:42 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:42 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Total execution time: 0.0234
DEBUG - 2014-10-31 11:05:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:42 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:42 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:05:44 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:44 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:44 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:44 --> Config Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:05:44 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:05:44 --> URI Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Router Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:44 --> Output Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Security Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:44 --> Input Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:05:44 --> Language Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Loader Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:05:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:05:44 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:44 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:05:44 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Controller Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:05:44 --> Final output sent to browser
DEBUG - 2014-10-31 11:05:44 --> Total execution time: 0.0195
DEBUG - 2014-10-31 11:06:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:01 --> Total execution time: 0.0187
DEBUG - 2014-10-31 11:06:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:01 --> Total execution time: 0.0236
DEBUG - 2014-10-31 11:06:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:02 --> Total execution time: 0.0233
DEBUG - 2014-10-31 11:06:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:02 --> Total execution time: 0.0219
DEBUG - 2014-10-31 11:06:04 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:04 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:04 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:04 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:04 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:04 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:04 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:04 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:04 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:04 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:04 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:04 --> Total execution time: 0.0216
DEBUG - 2014-10-31 11:06:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:04 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:04 --> Total execution time: 0.0185
DEBUG - 2014-10-31 11:06:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:09 --> Total execution time: 0.0241
DEBUG - 2014-10-31 11:06:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:09 --> Total execution time: 0.0236
DEBUG - 2014-10-31 11:06:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
ERROR - 2014-10-31 11:06:10 --> Severity: Notice  --> Trying to get property of non-object /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/invoice.php 366
ERROR - 2014-10-31 11:06:10 --> Severity: Notice  --> Trying to get property of non-object /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/invoice.php 367
DEBUG - 2014-10-31 11:06:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:10 --> Total execution time: 0.0154
DEBUG - 2014-10-31 11:06:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:10 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:06:12 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:12 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:12 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:12 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:12 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:12 --> Model Class Initialized
ERROR - 2014-10-31 11:06:12 --> Severity: Notice  --> Trying to get property of non-object /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/invoice.php 366
ERROR - 2014-10-31 11:06:12 --> Severity: Notice  --> Trying to get property of non-object /home/chgthcom/domains/chgth.com/public_html/ooh-inventory/application/controllers/invoice.php 367
DEBUG - 2014-10-31 11:06:13 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:13 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:13 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:13 --> No URI present. Default controller set.
DEBUG - 2014-10-31 11:06:13 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:13 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:13 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:13 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:13 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:13 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:06:13 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:13 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:06:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:21 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:21 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:21 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:21 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:21 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:21 --> File loaded: application/views/invoice/invoice_list.php
DEBUG - 2014-10-31 11:06:21 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 11:06:21 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:21 --> Total execution time: 0.3754
DEBUG - 2014-10-31 11:06:32 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:32 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:32 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:32 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:32 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:32 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:32 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:32 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:32 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:32 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:32 --> Total execution time: 0.0188
DEBUG - 2014-10-31 11:06:32 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:32 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:32 --> Total execution time: 0.0176
DEBUG - 2014-10-31 11:06:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:36 --> Total execution time: 0.0160
DEBUG - 2014-10-31 11:06:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:36 --> Total execution time: 0.0169
DEBUG - 2014-10-31 11:06:39 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:39 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:39 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:39 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:39 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:39 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:39 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:39 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:39 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:39 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:39 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:39 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:39 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:39 --> Total execution time: 0.0226
DEBUG - 2014-10-31 11:06:39 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:39 --> Total execution time: 0.0285
DEBUG - 2014-10-31 11:06:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:52 --> Total execution time: 0.0240
DEBUG - 2014-10-31 11:06:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:52 --> Total execution time: 0.0201
DEBUG - 2014-10-31 11:06:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:56 --> Total execution time: 0.0197
DEBUG - 2014-10-31 11:06:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:56 --> Total execution time: 0.0176
DEBUG - 2014-10-31 11:06:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:06:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:06:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:06:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:06:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:06:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Total execution time: 0.0238
DEBUG - 2014-10-31 11:06:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:06:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:06:59 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:07:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:02 --> Total execution time: 0.0162
DEBUG - 2014-10-31 11:07:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:02 --> Total execution time: 0.0287
DEBUG - 2014-10-31 11:07:04 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:04 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:04 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:04 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:04 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:04 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:04 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:04 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:04 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:04 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:04 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:04 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:07:04 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:04 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:04 --> Total execution time: 0.0188
DEBUG - 2014-10-31 11:07:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:20 --> Total execution time: 0.0220
DEBUG - 2014-10-31 11:07:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:20 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:07:34 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:34 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:34 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:34 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:34 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:34 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:34 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:34 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:34 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:34 --> Total execution time: 0.0228
DEBUG - 2014-10-31 11:07:34 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:34 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:34 --> Total execution time: 0.0256
DEBUG - 2014-10-31 11:07:42 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:42 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:42 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:42 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:42 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:42 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:42 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:42 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:42 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:42 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:42 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:42 --> Total execution time: 0.0223
DEBUG - 2014-10-31 11:07:42 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:42 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:42 --> Total execution time: 0.0204
DEBUG - 2014-10-31 11:07:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:07:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:07:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:07:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:46 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:07:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:07:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:07:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:07:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:07:46 --> Total execution time: 0.0271
DEBUG - 2014-10-31 11:08:27 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:27 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:27 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:27 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:27 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:27 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:27 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:27 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:27 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:27 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:08:27 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:27 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:27 --> Total execution time: 0.0188
DEBUG - 2014-10-31 11:08:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:28 --> Total execution time: 0.0214
DEBUG - 2014-10-31 11:08:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:28 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:08:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:30 --> Total execution time: 0.0225
DEBUG - 2014-10-31 11:08:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:30 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:08:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:33 --> Total execution time: 0.0159
DEBUG - 2014-10-31 11:08:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:33 --> Total execution time: 0.0247
DEBUG - 2014-10-31 11:08:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:08:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:08:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:08:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:08:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:08:59 --> Total execution time: 0.0204
DEBUG - 2014-10-31 11:08:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:08:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:08:59 --> Total execution time: 0.0216
DEBUG - 2014-10-31 11:09:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:02 --> Total execution time: 0.0219
DEBUG - 2014-10-31 11:09:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:02 --> Total execution time: 0.0204
DEBUG - 2014-10-31 11:09:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:30 --> Total execution time: 0.0219
DEBUG - 2014-10-31 11:09:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:30 --> Total execution time: 0.0207
DEBUG - 2014-10-31 11:09:32 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:32 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:32 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:32 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:32 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:32 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:32 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:32 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:32 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:32 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:32 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:09:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:32 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:32 --> Total execution time: 0.0195
DEBUG - 2014-10-31 11:09:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:36 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:09:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:36 --> Total execution time: 0.0199
DEBUG - 2014-10-31 11:09:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:46 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:09:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:46 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:09:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:47 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:09:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:09:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:47 --> Output Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:47 --> Security Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Input Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:09:47 --> Language Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Loader Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:09:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:09:47 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:47 --> Total execution time: 0.0168
DEBUG - 2014-10-31 11:09:47 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Controller Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:09:47 --> Final output sent to browser
DEBUG - 2014-10-31 11:09:47 --> Total execution time: 0.0156
DEBUG - 2014-10-31 11:10:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:20 --> Total execution time: 0.0264
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:20 --> Total execution time: 0.0243
DEBUG - 2014-10-31 11:10:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:20 --> Total execution time: 0.0245
DEBUG - 2014-10-31 11:10:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:20 --> Total execution time: 0.0220
DEBUG - 2014-10-31 11:10:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:22 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:10:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:22 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:10:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:24 --> Total execution time: 0.0207
DEBUG - 2014-10-31 11:10:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:24 --> Total execution time: 0.0196
DEBUG - 2014-10-31 11:10:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:49 --> Total execution time: 0.0187
DEBUG - 2014-10-31 11:10:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:49 --> Total execution time: 0.0241
DEBUG - 2014-10-31 11:10:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:50 --> Total execution time: 0.0160
DEBUG - 2014-10-31 11:10:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:50 --> Total execution time: 0.0159
DEBUG - 2014-10-31 11:10:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:52 --> Total execution time: 0.0222
DEBUG - 2014-10-31 11:10:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:52 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:10:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:54 --> Total execution time: 0.0168
DEBUG - 2014-10-31 11:10:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:54 --> Total execution time: 0.0241
DEBUG - 2014-10-31 11:10:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:55 --> Total execution time: 0.0179
DEBUG - 2014-10-31 11:10:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:55 --> Total execution time: 0.0183
DEBUG - 2014-10-31 11:10:57 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:57 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:57 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:57 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:57 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:57 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:57 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:57 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:57 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:57 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:57 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:57 --> Total execution time: 0.0207
DEBUG - 2014-10-31 11:10:57 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:57 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:57 --> Total execution time: 0.0199
DEBUG - 2014-10-31 11:10:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:10:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:10:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:10:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:59 --> Total execution time: 0.0178
DEBUG - 2014-10-31 11:10:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:10:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:10:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:10:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:10:59 --> Total execution time: 0.0211
DEBUG - 2014-10-31 11:11:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:00 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:11:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:00 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:11:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:20 --> Total execution time: 0.0153
DEBUG - 2014-10-31 11:11:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:20 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:11:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:24 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:11:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:24 --> Total execution time: 0.0238
DEBUG - 2014-10-31 11:11:27 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:27 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:27 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:27 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:27 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:27 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:27 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:27 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:27 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:27 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:27 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:27 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:11:27 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:27 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:27 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:11:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:31 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:11:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:31 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:11:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:45 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:11:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:45 --> Total execution time: 0.0192
DEBUG - 2014-10-31 11:11:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:52 --> Total execution time: 0.0150
DEBUG - 2014-10-31 11:11:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:52 --> Total execution time: 0.0223
DEBUG - 2014-10-31 11:11:53 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:53 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Config Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:11:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:11:53 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:53 --> URI Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Router Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Output Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Security Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:53 --> Input Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:11:53 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:53 --> Language Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Loader Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:11:53 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:11:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:53 --> Total execution time: 0.0242
DEBUG - 2014-10-31 11:11:53 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Controller Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:11:53 --> Final output sent to browser
DEBUG - 2014-10-31 11:11:53 --> Total execution time: 0.0227
DEBUG - 2014-10-31 11:12:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:07 --> Total execution time: 0.0238
DEBUG - 2014-10-31 11:12:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:07 --> Total execution time: 0.0210
DEBUG - 2014-10-31 11:12:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:08 --> Total execution time: 0.0260
DEBUG - 2014-10-31 11:12:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:08 --> Total execution time: 0.0239
DEBUG - 2014-10-31 11:12:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:09 --> Total execution time: 0.0197
DEBUG - 2014-10-31 11:12:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:09 --> Total execution time: 0.0170
DEBUG - 2014-10-31 11:12:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:33 --> Total execution time: 0.0214
DEBUG - 2014-10-31 11:12:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:33 --> Total execution time: 0.0268
DEBUG - 2014-10-31 11:12:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:36 --> Total execution time: 0.0394
DEBUG - 2014-10-31 11:12:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:36 --> Total execution time: 0.0489
DEBUG - 2014-10-31 11:12:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:38 --> Total execution time: 0.0304
DEBUG - 2014-10-31 11:12:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:38 --> Total execution time: 0.0385
DEBUG - 2014-10-31 11:12:41 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:41 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Config Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:12:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:12:41 --> URI Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Router Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Output Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Security Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:41 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Input Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:12:41 --> Language Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:41 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:41 --> Loader Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:12:41 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:12:41 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Controller Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:12:41 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:41 --> Total execution time: 0.0310
DEBUG - 2014-10-31 11:12:41 --> Final output sent to browser
DEBUG - 2014-10-31 11:12:41 --> Total execution time: 0.0409
DEBUG - 2014-10-31 11:13:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:13:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:13:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:13:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:13:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:13:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:13:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:13:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:13:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:13:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:13:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:13:09 --> Total execution time: 0.0247
DEBUG - 2014-10-31 11:13:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:13:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:13:09 --> Total execution time: 0.0229
DEBUG - 2014-10-31 11:14:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:05 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:14:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:05 --> Total execution time: 0.0189
DEBUG - 2014-10-31 11:14:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:24 --> Total execution time: 0.0159
DEBUG - 2014-10-31 11:14:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:24 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:14:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:25 --> Total execution time: 0.0204
DEBUG - 2014-10-31 11:14:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:25 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:14:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:28 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:14:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:28 --> Total execution time: 0.0196
DEBUG - 2014-10-31 11:14:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:31 --> Total execution time: 0.0237
DEBUG - 2014-10-31 11:14:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:31 --> Total execution time: 0.0359
DEBUG - 2014-10-31 11:14:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:38 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:38 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:38 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:38 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:38 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:38 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:38 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:14:38 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:38 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:38 --> Total execution time: 0.0194
DEBUG - 2014-10-31 11:14:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:49 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:14:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:49 --> Total execution time: 0.0188
DEBUG - 2014-10-31 11:14:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:50 --> Total execution time: 0.0156
DEBUG - 2014-10-31 11:14:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:50 --> Total execution time: 0.0234
DEBUG - 2014-10-31 11:14:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:14:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:14:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:14:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:14:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:14:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:51 --> Total execution time: 0.0168
DEBUG - 2014-10-31 11:14:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:14:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:14:51 --> Total execution time: 0.0282
DEBUG - 2014-10-31 11:15:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:09 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:15:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:09 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:15:23 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:23 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:23 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:23 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:23 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:23 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:23 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:23 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:23 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:23 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:15:23 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:23 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:23 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:15:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:24 --> Total execution time: 0.0160
DEBUG - 2014-10-31 11:15:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:24 --> Total execution time: 0.0241
DEBUG - 2014-10-31 11:15:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:25 --> Total execution time: 0.0169
DEBUG - 2014-10-31 11:15:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:25 --> Total execution time: 0.0238
DEBUG - 2014-10-31 11:15:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:30 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:30 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:30 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:30 --> Total execution time: 0.0149
DEBUG - 2014-10-31 11:15:30 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:30 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:30 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:30 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:30 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:15:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:40 --> Total execution time: 0.0175
DEBUG - 2014-10-31 11:15:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:40 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:15:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:46 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:15:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:46 --> Total execution time: 0.0267
DEBUG - 2014-10-31 11:15:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:52 --> Total execution time: 0.0232
DEBUG - 2014-10-31 11:15:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:52 --> Total execution time: 0.0220
DEBUG - 2014-10-31 11:15:58 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:58 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:58 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Config Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:15:58 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:15:58 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:58 --> URI Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Router Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:58 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Output Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Security Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Input Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:15:58 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:58 --> Language Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:58 --> Loader Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:15:58 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:15:58 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Controller Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Model Class Initialized
DEBUG - 2014-10-31 11:15:58 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:58 --> Total execution time: 0.0237
DEBUG - 2014-10-31 11:15:58 --> Final output sent to browser
DEBUG - 2014-10-31 11:15:58 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:16:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:00 --> Total execution time: 0.0180
DEBUG - 2014-10-31 11:16:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:00 --> Total execution time: 0.0161
DEBUG - 2014-10-31 11:16:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:05 --> Total execution time: 0.0183
DEBUG - 2014-10-31 11:16:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:05 --> Total execution time: 0.0185
DEBUG - 2014-10-31 11:16:18 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:18 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:18 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:18 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:18 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:18 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:18 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:18 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:18 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:18 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:18 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:18 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:16:18 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:18 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:18 --> Total execution time: 0.0195
DEBUG - 2014-10-31 11:16:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:19 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:16:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:19 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:16:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:24 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:16:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:24 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:16:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:25 --> Total execution time: 0.0180
DEBUG - 2014-10-31 11:16:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:25 --> Total execution time: 0.0157
DEBUG - 2014-10-31 11:16:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:51 --> Total execution time: 0.0249
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:51 --> Total execution time: 0.0292
DEBUG - 2014-10-31 11:16:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:51 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:16:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:51 --> Total execution time: 0.0194
DEBUG - 2014-10-31 11:16:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Config Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:16:59 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:16:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:59 --> URI Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:59 --> Router Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:59 --> Output Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Security Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Input Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:16:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Language Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:59 --> Loader Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Total execution time: 0.0240
DEBUG - 2014-10-31 11:16:59 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:16:59 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:16:59 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Controller Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Model Class Initialized
DEBUG - 2014-10-31 11:16:59 --> Final output sent to browser
DEBUG - 2014-10-31 11:16:59 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:17:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:00 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:00 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:00 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:00 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:00 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:17:00 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:00 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:00 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:00 --> Total execution time: 0.0246
DEBUG - 2014-10-31 11:17:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:09 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:09 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:09 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:09 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:09 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:09 --> Total execution time: 0.0161
DEBUG - 2014-10-31 11:17:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:09 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:09 --> Total execution time: 0.0231
DEBUG - 2014-10-31 11:17:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:15 --> Total execution time: 0.0215
DEBUG - 2014-10-31 11:17:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:15 --> Total execution time: 0.0210
DEBUG - 2014-10-31 11:17:23 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:23 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:23 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:23 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:23 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:23 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:23 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:23 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:23 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:23 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:23 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:23 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:17:23 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:23 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:23 --> Total execution time: 0.0187
DEBUG - 2014-10-31 11:17:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:28 --> Total execution time: 0.0155
DEBUG - 2014-10-31 11:17:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:28 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:17:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:31 --> Total execution time: 0.0207
DEBUG - 2014-10-31 11:17:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:31 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:17:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Config Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:33 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:17:33 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:17:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:33 --> URI Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Router Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Output Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Security Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Input Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:17:33 --> Language Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:33 --> Total execution time: 0.0157
DEBUG - 2014-10-31 11:17:33 --> Loader Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:17:33 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:17:33 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Controller Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Model Class Initialized
DEBUG - 2014-10-31 11:17:33 --> Final output sent to browser
DEBUG - 2014-10-31 11:17:33 --> Total execution time: 0.0190
DEBUG - 2014-10-31 11:18:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:24 --> Total execution time: 0.0199
DEBUG - 2014-10-31 11:18:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:24 --> Total execution time: 0.0220
DEBUG - 2014-10-31 11:18:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:45 --> Total execution time: 0.0164
DEBUG - 2014-10-31 11:18:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:45 --> Total execution time: 0.0164
DEBUG - 2014-10-31 11:18:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:49 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:49 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:49 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:49 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:49 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:49 --> Total execution time: 0.0154
DEBUG - 2014-10-31 11:18:49 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:49 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:49 --> Total execution time: 0.0246
DEBUG - 2014-10-31 11:18:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:50 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:50 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:50 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:50 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:50 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:50 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:18:50 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:50 --> Total execution time: 0.0300
DEBUG - 2014-10-31 11:18:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:18:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:18:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:18:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:18:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:18:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:51 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:18:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:18:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:18:51 --> Total execution time: 0.0150
DEBUG - 2014-10-31 11:19:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:19:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:19:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:19:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:19:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:19:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:19:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:19:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:19:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:19:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:19:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:19:01 --> Total execution time: 0.0194
DEBUG - 2014-10-31 11:19:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:19:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:19:01 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:19:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:19:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:19:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:19:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:19:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:19:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:19:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:19:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:19:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:19:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:19:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:19:02 --> Total execution time: 0.0211
DEBUG - 2014-10-31 11:19:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:19:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:19:02 --> Total execution time: 0.0196
DEBUG - 2014-10-31 11:20:18 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:18 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:18 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:18 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:18 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:18 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:18 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:18 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:18 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:18 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:18 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:18 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:18 --> Total execution time: 0.0219
DEBUG - 2014-10-31 11:20:18 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:18 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:18 --> Total execution time: 0.0201
DEBUG - 2014-10-31 11:20:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:19 --> Total execution time: 0.0158
DEBUG - 2014-10-31 11:20:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:19 --> Total execution time: 0.0160
DEBUG - 2014-10-31 11:20:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:20 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:20 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:20 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:20 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:20 --> Total execution time: 0.0175
DEBUG - 2014-10-31 11:20:20 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:20 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:20 --> Total execution time: 0.0185
DEBUG - 2014-10-31 11:20:43 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:43 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:43 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:43 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:43 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:43 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:43 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:43 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:43 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:43 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:43 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:43 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:20:43 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:43 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:43 --> Total execution time: 0.0260
DEBUG - 2014-10-31 11:20:44 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:44 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:44 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:44 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:44 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:44 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:44 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:44 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:44 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:44 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:44 --> Total execution time: 0.0158
DEBUG - 2014-10-31 11:20:44 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:44 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:44 --> Total execution time: 0.0306
DEBUG - 2014-10-31 11:20:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:45 --> Total execution time: 0.0242
DEBUG - 2014-10-31 11:20:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:45 --> Total execution time: 0.0222
DEBUG - 2014-10-31 11:20:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:46 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:46 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:46 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:46 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:46 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:46 --> Total execution time: 0.0262
DEBUG - 2014-10-31 11:20:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:46 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:46 --> Total execution time: 0.0349
DEBUG - 2014-10-31 11:20:53 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:53 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:53 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:53 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:53 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:53 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:53 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:53 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:53 --> Total execution time: 0.0242
DEBUG - 2014-10-31 11:20:53 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:53 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:53 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:20:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:54 --> Total execution time: 0.0192
DEBUG - 2014-10-31 11:20:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:54 --> Total execution time: 0.0250
DEBUG - 2014-10-31 11:20:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:55 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:20:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:55 --> Total execution time: 0.0289
DEBUG - 2014-10-31 11:20:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:20:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:20:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:20:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:20:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:20:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:20:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:20:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:56 --> Total execution time: 0.0384
DEBUG - 2014-10-31 11:20:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:20:56 --> Total execution time: 0.0437
DEBUG - 2014-10-31 11:21:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:02 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:02 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:02 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:02 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:02 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:02 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:02 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:02 --> Total execution time: 0.0231
DEBUG - 2014-10-31 11:21:02 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:21:06 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:06 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:06 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:06 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:06 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:06 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:06 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:06 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:06 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:06 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:06 --> Total execution time: 0.0227
DEBUG - 2014-10-31 11:21:06 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:06 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:06 --> Total execution time: 0.0250
DEBUG - 2014-10-31 11:21:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:07 --> Total execution time: 0.0217
DEBUG - 2014-10-31 11:21:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:07 --> Total execution time: 0.0253
DEBUG - 2014-10-31 11:21:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:21:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:21:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:21:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:21:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:21:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:08 --> Total execution time: 0.0251
DEBUG - 2014-10-31 11:21:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:21:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:21:08 --> Total execution time: 0.0255
DEBUG - 2014-10-31 11:22:06 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:06 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:06 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:06 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:06 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:06 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:06 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:06 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:06 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:06 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:06 --> Total execution time: 0.0218
DEBUG - 2014-10-31 11:22:06 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:06 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:06 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:22:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:07 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:07 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:07 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:07 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:07 --> Total execution time: 0.0154
DEBUG - 2014-10-31 11:22:07 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:07 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:07 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:07 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:07 --> Total execution time: 0.0219
DEBUG - 2014-10-31 11:22:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Total execution time: 0.0244
DEBUG - 2014-10-31 11:22:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:11 --> Total execution time: 0.0221
DEBUG - 2014-10-31 11:22:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:15 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:22:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:15 --> Total execution time: 0.0210
DEBUG - 2014-10-31 11:22:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:25 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:25 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:25 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:25 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:25 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:25 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:25 --> Total execution time: 0.0208
DEBUG - 2014-10-31 11:22:25 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:25 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:25 --> Total execution time: 0.0196
DEBUG - 2014-10-31 11:22:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:28 --> Total execution time: 0.0158
DEBUG - 2014-10-31 11:22:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:28 --> Total execution time: 0.0196
DEBUG - 2014-10-31 11:22:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Config Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:31 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:22:31 --> URI Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Router Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Output Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:31 --> Security Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Input Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:22:31 --> Language Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Loader Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:31 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:22:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:31 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:22:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Controller Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Model Class Initialized
DEBUG - 2014-10-31 11:22:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:31 --> Total execution time: 0.0162
DEBUG - 2014-10-31 11:22:31 --> Final output sent to browser
DEBUG - 2014-10-31 11:22:31 --> Total execution time: 0.0211
DEBUG - 2014-10-31 11:23:14 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:14 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:14 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:14 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:14 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:14 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:14 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:14 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:14 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:15 --> Total execution time: 0.0434
DEBUG - 2014-10-31 11:23:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:15 --> Total execution time: 0.0412
DEBUG - 2014-10-31 11:23:17 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:17 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:17 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:17 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:17 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:17 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:17 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:17 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:17 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:17 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:17 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:17 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:17 --> Total execution time: 0.0186
DEBUG - 2014-10-31 11:23:17 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:17 --> Total execution time: 0.0158
DEBUG - 2014-10-31 11:23:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:19 --> Total execution time: 0.0155
DEBUG - 2014-10-31 11:23:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:19 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:23:21 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:21 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:21 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:21 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:21 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:21 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:21 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:21 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:21 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:21 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:21 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:21 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:21 --> Total execution time: 0.0184
DEBUG - 2014-10-31 11:23:21 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:21 --> Total execution time: 0.0164
DEBUG - 2014-10-31 11:23:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:40 --> Total execution time: 0.0204
DEBUG - 2014-10-31 11:23:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:40 --> Total execution time: 0.0155
DEBUG - 2014-10-31 11:23:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:47 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:47 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:47 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Total execution time: 0.0154
DEBUG - 2014-10-31 11:23:47 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:47 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:47 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:47 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:47 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:47 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:23:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Config Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:23:54 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:23:54 --> URI Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Router Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Output Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Security Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:54 --> Input Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:23:54 --> Language Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Loader Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:54 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:23:54 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:23:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:54 --> Total execution time: 0.0168
DEBUG - 2014-10-31 11:23:54 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Controller Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Model Class Initialized
DEBUG - 2014-10-31 11:23:54 --> Final output sent to browser
DEBUG - 2014-10-31 11:23:54 --> Total execution time: 0.0265
DEBUG - 2014-10-31 11:24:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:10 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:10 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:10 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:10 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:10 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:10 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:10 --> Total execution time: 0.0224
DEBUG - 2014-10-31 11:24:10 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:10 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:10 --> Total execution time: 0.0207
DEBUG - 2014-10-31 11:24:12 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:12 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:12 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:12 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:12 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:12 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:12 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:12 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:12 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:13 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:13 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:13 --> Total execution time: 0.0158
DEBUG - 2014-10-31 11:24:13 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:13 --> Total execution time: 0.0221
DEBUG - 2014-10-31 11:24:14 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:15 --> Total execution time: 0.2004
DEBUG - 2014-10-31 11:24:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:15 --> Total execution time: 0.1970
DEBUG - 2014-10-31 11:24:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:51 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:51 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:51 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:51 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:24:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:51 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:51 --> Total execution time: 0.0199
DEBUG - 2014-10-31 11:24:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:52 --> Config Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:24:52 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:24:52 --> URI Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Router Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:52 --> Output Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:52 --> Security Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Input Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:24:52 --> Language Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Loader Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:24:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:24:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:52 --> Total execution time: 0.0217
DEBUG - 2014-10-31 11:24:52 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Controller Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Model Class Initialized
DEBUG - 2014-10-31 11:24:52 --> Final output sent to browser
DEBUG - 2014-10-31 11:24:52 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:25:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:08 --> Total execution time: 0.0203
DEBUG - 2014-10-31 11:25:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:08 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:25:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:08 --> Total execution time: 0.0153
DEBUG - 2014-10-31 11:25:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:08 --> Total execution time: 0.0226
DEBUG - 2014-10-31 11:25:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:11 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:11 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:11 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:11 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:11 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:11 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:11 --> Total execution time: 0.0177
DEBUG - 2014-10-31 11:25:11 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:11 --> Total execution time: 0.0155
DEBUG - 2014-10-31 11:25:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:40 --> Total execution time: 0.0232
DEBUG - 2014-10-31 11:25:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:40 --> Total execution time: 0.0285
DEBUG - 2014-10-31 11:25:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:45 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:45 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:45 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:45 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:45 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:45 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:45 --> Total execution time: 0.0206
DEBUG - 2014-10-31 11:25:45 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:45 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:45 --> Total execution time: 0.0200
DEBUG - 2014-10-31 11:25:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Config Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:25:55 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:25:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:55 --> URI Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Router Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:55 --> Output Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:55 --> Security Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Input Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:25:55 --> Language Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Loader Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:25:55 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:25:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:55 --> Total execution time: 0.0191
DEBUG - 2014-10-31 11:25:55 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Controller Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Model Class Initialized
DEBUG - 2014-10-31 11:25:55 --> Final output sent to browser
DEBUG - 2014-10-31 11:25:55 --> Total execution time: 0.0195
DEBUG - 2014-10-31 11:26:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:26:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:26:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Output Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Security Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Config Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Input Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:26:47 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:26:47 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:26:47 --> Language Class Initialized
DEBUG - 2014-10-31 11:26:47 --> URI Class Initialized
DEBUG - 2014-10-31 11:26:47 --> Router Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Loader Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Output Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:26:48 --> Security Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:26:48 --> Input Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:26:48 --> Language Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Loader Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:26:48 --> Controller Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:26:48 --> Final output sent to browser
DEBUG - 2014-10-31 11:26:48 --> Total execution time: 0.0217
DEBUG - 2014-10-31 11:26:48 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Controller Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:48 --> Final output sent to browser
DEBUG - 2014-10-31 11:26:48 --> Total execution time: 0.0201
DEBUG - 2014-10-31 11:26:53 --> Config Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:26:53 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:26:53 --> URI Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Router Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Output Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Security Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Input Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:26:53 --> Language Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Loader Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:26:53 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:26:53 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Controller Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:53 --> Final output sent to browser
DEBUG - 2014-10-31 11:26:53 --> Total execution time: 0.0193
DEBUG - 2014-10-31 11:26:56 --> Config Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:26:56 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:26:56 --> URI Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Router Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Output Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Security Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Input Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:26:56 --> Language Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Loader Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:26:56 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:26:56 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Controller Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Model Class Initialized
DEBUG - 2014-10-31 11:26:56 --> Final output sent to browser
DEBUG - 2014-10-31 11:26:56 --> Total execution time: 0.0217
DEBUG - 2014-10-31 11:27:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:01 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:01 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:01 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:01 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:01 --> Total execution time: 0.0212
DEBUG - 2014-10-31 11:27:01 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:01 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:01 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:01 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:01 --> Total execution time: 0.0214
DEBUG - 2014-10-31 11:27:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:05 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:05 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:05 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:05 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:05 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:05 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:05 --> Total execution time: 0.0205
DEBUG - 2014-10-31 11:27:05 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:05 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:05 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:27:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:08 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:08 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:08 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:08 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:08 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:08 --> Total execution time: 0.0152
DEBUG - 2014-10-31 11:27:08 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:08 --> Total execution time: 0.0202
DEBUG - 2014-10-31 11:27:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Config Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:27:15 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:27:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:15 --> URI Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Router Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Output Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Security Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:15 --> Input Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:27:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:15 --> Language Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Loader Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:27:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:27:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:15 --> Total execution time: 0.0201
DEBUG - 2014-10-31 11:27:15 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Controller Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Model Class Initialized
DEBUG - 2014-10-31 11:27:15 --> Final output sent to browser
DEBUG - 2014-10-31 11:27:15 --> Total execution time: 0.0184
DEBUG - 2014-10-31 11:28:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:28:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:28:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Config Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:28:40 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:28:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:28:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:28:40 --> URI Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Router Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:28:40 --> Output Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:28:40 --> Security Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Input Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:28:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Language Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Loader Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:28:40 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:28:40 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:28:40 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:28:40 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Controller Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:40 --> Final output sent to browser
DEBUG - 2014-10-31 11:28:40 --> Total execution time: 0.0232
DEBUG - 2014-10-31 11:28:41 --> Config Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:28:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:28:41 --> URI Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Router Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Config Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:28:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:28:41 --> Output Class Initialized
DEBUG - 2014-10-31 11:28:41 --> URI Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Security Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Router Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Output Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Input Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:28:41 --> Security Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Language Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Input Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:28:41 --> Language Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Loader Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Loader Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:28:41 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:28:41 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:28:41 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:28:41 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Controller Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Controller Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Final output sent to browser
DEBUG - 2014-10-31 11:28:41 --> Total execution time: 0.0161
DEBUG - 2014-10-31 11:28:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Model Class Initialized
DEBUG - 2014-10-31 11:28:41 --> Final output sent to browser
DEBUG - 2014-10-31 11:28:41 --> Total execution time: 0.0241
DEBUG - 2014-10-31 11:29:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:24 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:24 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:24 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:24 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:24 --> Total execution time: 0.0213
DEBUG - 2014-10-31 11:29:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:24 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:24 --> Total execution time: 0.0198
DEBUG - 2014-10-31 11:29:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:28 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:28 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:28 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:28 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:28 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:28 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:28 --> Total execution time: 0.0205
DEBUG - 2014-10-31 11:29:28 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:28 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:28 --> Total execution time: 0.0188
DEBUG - 2014-10-31 11:29:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Config Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:36 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:29:36 --> URI Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:36 --> Router Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Output Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Security Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Input Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:29:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Language Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:36 --> Loader Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:29:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:36 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:29:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Controller Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Model Class Initialized
DEBUG - 2014-10-31 11:29:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:36 --> Total execution time: 0.0169
DEBUG - 2014-10-31 11:29:36 --> Final output sent to browser
DEBUG - 2014-10-31 11:29:36 --> Total execution time: 0.0220
DEBUG - 2014-10-31 11:31:13 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:13 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:13 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:13 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:13 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:13 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:13 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:13 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:13 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:13 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:13 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:13 --> Total execution time: 0.0433
DEBUG - 2014-10-31 11:31:13 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:13 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:13 --> Total execution time: 0.0474
DEBUG - 2014-10-31 11:31:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:19 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:19 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:19 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:19 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:19 --> Total execution time: 0.3371
DEBUG - 2014-10-31 11:31:19 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:19 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:19 --> Total execution time: 0.3433
DEBUG - 2014-10-31 11:31:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Config Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Hooks Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Utf8 Class Initialized
DEBUG - 2014-10-31 11:31:22 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 11:31:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:22 --> URI Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Router Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:22 --> Output Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Security Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Input Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 11:31:22 --> Language Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Loader Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Helper loaded: url_helper
DEBUG - 2014-10-31 11:31:22 --> Helper loaded: form_helper
DEBUG - 2014-10-31 11:31:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:22 --> Total execution time: 0.0209
DEBUG - 2014-10-31 11:31:22 --> Database Driver Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Controller Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Model Class Initialized
DEBUG - 2014-10-31 11:31:22 --> Final output sent to browser
DEBUG - 2014-10-31 11:31:22 --> Total execution time: 0.0387
DEBUG - 2014-10-31 12:26:08 --> Config Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 12:26:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 12:26:08 --> URI Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Router Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Output Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Config Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Hooks Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Utf8 Class Initialized
DEBUG - 2014-10-31 12:26:08 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 12:26:08 --> Security Class Initialized
DEBUG - 2014-10-31 12:26:08 --> URI Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Input Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 12:26:08 --> Router Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Language Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Output Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Security Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Loader Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Input Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 12:26:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 12:26:08 --> Language Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 12:26:08 --> Loader Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Helper loaded: url_helper
DEBUG - 2014-10-31 12:26:08 --> Helper loaded: form_helper
DEBUG - 2014-10-31 12:26:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Controller Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Final output sent to browser
DEBUG - 2014-10-31 12:26:08 --> Total execution time: 0.0231
DEBUG - 2014-10-31 12:26:08 --> Database Driver Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Controller Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:08 --> Final output sent to browser
DEBUG - 2014-10-31 12:26:08 --> Total execution time: 0.0225
DEBUG - 2014-10-31 12:26:24 --> Config Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Hooks Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Utf8 Class Initialized
DEBUG - 2014-10-31 12:26:24 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 12:26:24 --> URI Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Router Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Output Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Security Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Input Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 12:26:24 --> Language Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Loader Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Helper loaded: url_helper
DEBUG - 2014-10-31 12:26:24 --> Helper loaded: form_helper
DEBUG - 2014-10-31 12:26:24 --> Database Driver Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Controller Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:24 --> Final output sent to browser
DEBUG - 2014-10-31 12:26:24 --> Total execution time: 0.0234
DEBUG - 2014-10-31 12:26:34 --> Config Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Hooks Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Utf8 Class Initialized
DEBUG - 2014-10-31 12:26:34 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 12:26:34 --> URI Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Router Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Output Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Security Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Input Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 12:26:34 --> Language Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Loader Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Helper loaded: url_helper
DEBUG - 2014-10-31 12:26:34 --> Helper loaded: form_helper
DEBUG - 2014-10-31 12:26:34 --> Database Driver Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Controller Class Initialized
DEBUG - 2014-10-31 12:26:34 --> tran id 
DEBUG - 2014-10-31 12:26:34 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:34 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:34 --> tran id 
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485011","amount":"3","after_cut":"-3","product_name":"AURORE AND FRIENDS HARD COVER NOTE  (line)","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485028","amount":"3","after_cut":"-3","product_name":"AURORE IMAGINE HARD COVER NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485042","amount":"3","after_cut":"-3","product_name":"TABOM STRIPE VINTAGE HARD COVER NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485035","amount":"1","after_cut":"4","product_name":"TABOM RETRO HARD COVER NOTE (line)","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481532","amount":"5","after_cut":"-5","product_name":"Aurore Face Note Jumbo (150 sheets)","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485134","amount":"2","after_cut":"1","product_name":"TABOM BOY AND GIRL IN THE RAIN UMBRELLA","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485110","amount":"2","after_cut":"2","product_name":"ROSE AURORE UMBRELLA","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485127","amount":"2","after_cut":"3","product_name":"AURORE MON AMOUR UMBRELLA","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482492","amount":"2","after_cut":"14","product_name":"FLYING AURORE SNAP CASE for iPhone 5","previous_amount":"16"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482478","amount":"2","after_cut":"7","product_name":"MINT AURORE SNAP CASE for iPhone 5","previous_amount":"9"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484557","amount":"2","after_cut":"2","product_name":"AURORE FLOWER MINT             SNAP CASE for iPhone 5\/5s","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484526","amount":"2","after_cut":"1","product_name":"VERY VERY UNIQUE                  SNAP CASE for iPhone 5\/5s","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482508","amount":"2","after_cut":"8","product_name":" AURORE BALLOON SNAP CASE for iPhone 5","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482515","amount":"2","after_cut":"5","product_name":" TABOM PINK SNAP CASE for iPhone 5","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482461","amount":"2","after_cut":"12","product_name":"TABOM SNAP CASE for iPhone 5","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482454","amount":"2","after_cut":"10","product_name":"LOVE BEAM SNAP CASE for  iPhone 5","previous_amount":"12"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482447","amount":"2","after_cut":"6","product_name":"ALL STAR SNAP CASE for iPhone 5","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484564","amount":"1","after_cut":"0","product_name":"AURORE IN SWAN DRESS           SNAP CASE for iPhone 5\/5s","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484540","amount":"1","after_cut":"0","product_name":"AURORE MON AMOUR              SNAP CASE for iPhone 5\/5s","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484991","amount":"2","after_cut":"4","product_name":"AURORE LANDSCAPE SOFT TOWEL  ","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484984","amount":"2","after_cut":"4","product_name":"TABOM RETRO SOFT TOWEL","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485004","amount":"2","after_cut":"3","product_name":"AURORE PICNIC SOFT TOWEL","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485547","amount":"2","after_cut":"5","product_name":"TABOM RETRO ECO BAG","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484601","amount":"2","after_cut":"11","product_name":"AURORE_MINT ECO BAG","previous_amount":"13"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484595","amount":"2","after_cut":"6","product_name":"WONDER AURORE ECO BAG                   ","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484588","amount":"2","after_cut":"5","product_name":"AURORE_VILLAGE ECO BAG                   ","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484625","amount":"2","after_cut":"5","product_name":"AURORE_VINTAGE ECO BAG","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485745","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485769","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485752","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255480672","amount":"20","after_cut":"12","product_name":"Aurore Sticker No.1","previous_amount":"32"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481068","amount":"20","after_cut":"-19","product_name":"Tabon Sticker","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481051","amount":"20","after_cut":"2","product_name":"Aurore Sticker No.3","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255480689","amount":"20","after_cut":"-10","product_name":"Aurore Sticker No.2","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485448","amount":"3","after_cut":"0","product_name":"AURORE FRUTAS SPRING NOTE_LONG","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482706","amount":"2","after_cut":"1","product_name":"GOOD JOB SPRING NOTE_LONG","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483994","amount":"2","after_cut":"-2","product_name":"AURORE_MINT FABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484007","amount":"2","after_cut":"-2","product_name":"AURORE_VINTAGE FABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484038","amount":"2","after_cut":"-2","product_name":"AURORE IN SWAN DRESS\nFABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485431","amount":"4","after_cut":"-4","product_name":"TABOM FLOWER SPRING NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485424","amount":"4","after_cut":"-4","product_name":"PINK CAR SPRING NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485080","amount":"6","after_cut":"-2","product_name":"PHOEBE FACE MIRROR","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485073","amount":"6","after_cut":"-4","product_name":"AURORE FACE MIRROR","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485097","amount":"6","after_cut":"-6","product_name":"PIERRE FACE MIRROR","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485103","amount":"6","after_cut":"-6","product_name":"ANDRE FACE MIRROR","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483574","amount":"1","after_cut":"21","product_name":"SPARK BOY & GIRL SNAP CASE\nfor Galaxy S4 \/ LTE-A  ","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484083","amount":"1","after_cut":"0","product_name":" TABOM STRIPE SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484144","amount":"1","after_cut":"1","product_name":"AURORE MON AMOUR SNAP CASE\nfor Galaxy note3 ","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484090","amount":"1","after_cut":"0","product_name":"VERY VERT UNIQUE SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484137","amount":"1","after_cut":"3","product_name":"HAND IN HAND SNAP CASE\nfor Galaxy note3 ","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484106","amount":"1","after_cut":"2","product_name":"LOVE BEAM POP SNAP CASE\nfor Galaxy note3 ","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484120","amount":"1","after_cut":"2","product_name":"TABOM PINK SNAP CASE\nfor Galaxy note3 ","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484076","amount":"1","after_cut":"0","product_name":"AURORE & DEER SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484243","amount":"2","after_cut":"4","product_name":"SPARK BOY & GIRL MINI POCKET","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484250","amount":"2","after_cut":"14","product_name":"BLUE MINI POCKET","previous_amount":"16"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484267","amount":"2","after_cut":"6","product_name":"NEON PEACH MINI POCKET","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484236","amount":"4","after_cut":"0","product_name":"FLOWER GARDEN MINI POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484649","amount":"10","after_cut":"4","product_name":"TABOM BOY & GIRL               Comics Sticky Note","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484632","amount":"10","after_cut":"-10","product_name":"AURORE ET SES AMIS            Comics Sticky Note","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481310","amount":"2","after_cut":"1","product_name":"Tabom key holder","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481334","amount":"2","after_cut":"8","product_name":"Triangle girl key holder","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481327","amount":"2","after_cut":"-2","product_name":"Aurore key holder","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482690","amount":"1","after_cut":"11","product_name":"LIBERTY CARD POCKET","previous_amount":"12"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482966","amount":"1","after_cut":"16","product_name":"AURORE HAND IN HAND CARD POCKET","previous_amount":"17"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482676","amount":"1","after_cut":"3","product_name":"TABOM STRIPE CARD POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482959","amount":"1","after_cut":"1","product_name":"WONDER AURORE CARD POCKET","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482942","amount":"1","after_cut":"3","product_name":"TABOM DESK CARD POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482980","amount":"1","after_cut":"1","product_name":"TABOM PINK CARD POCKET","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483031","amount":"1","after_cut":"0","product_name":"TABOM WHITE CARD POCKET","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482560","amount":"2","after_cut":"2","product_name":"TABOM_ORANGE CAMPUS NOTE","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482546","amount":"2","after_cut":"1","product_name":"TABOM_YELLOW CAMPUS NOTE","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482553","amount":"2","after_cut":"0","product_name":"TABOM_PINK CAMPUS NOTE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482539","amount":"1","after_cut":"0","product_name":"SPARK BOY CAMPUS NOTE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482577","amount":"10","after_cut":"-10","product_name":"50 STICKERS","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484472","amount":"3","after_cut":"5","product_name":"TABOM MINT CLASS NOTE","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484458","amount":"3","after_cut":"2","product_name":"AURORE NEON PINK CLASS NOTE","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484441","amount":"3","after_cut":"7","product_name":"AURORE PICNIC CLASS NOTE","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255480900","amount":"2","after_cut":"0","product_name":"Elizabeth Comics Sticky Note","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484502","amount":"3","after_cut":"-3","product_name":"AURORE RED CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484519","amount":"3","after_cut":"-3","product_name":"AURORE DOODLE CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484489","amount":"3","after_cut":"-3","product_name":"TABOM GIRL CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484496","amount":"2","after_cut":"0","product_name":"TABOM BOY CLASS NOTE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485141","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485165","amount":"5","after_cut":"-5","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485172","amount":"5","after_cut":"-5","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481426","amount":"9","after_cut":"5","product_name":"Micro-bus Sticky Note (Beige)","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481419","amount":"1","after_cut":"0","product_name":"Micro-bus Sticky Note (Green)","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485158","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483017","amount":"1","after_cut":"4","product_name":"TABOM YELLOW CARD WALLET","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483000","amount":"1","after_cut":"3","product_name":"AURORE IMAGINE CARD WALLET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485349","amount":"2","after_cut":"3","product_name":"TABOM RETRO WALLET","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485332","amount":"2","after_cut":"0","product_name":"tabom retro wallet","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482935","amount":"2","after_cut":"1","product_name":"LIBERTY WALLET","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483116","amount":"1","after_cut":"5","product_name":"AURORE IMAGINE_PINK WALLET","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483048","amount":"4","after_cut":"-3","product_name":"SPARK BOY SECOND BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485066","amount":"4","after_cut":"-4","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484892","amount":"4","after_cut":"-4","product_name":"AURORE STAINED GLASS   second bag","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481235","amount":"4","after_cut":"10","product_name":"Aurore's kitchen Second Bag","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485790","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485783","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481198","amount":"2","after_cut":"0","product_name":"Love Beam Pencil Case","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255480870","amount":"4","after_cut":"6","product_name":"Poppy Strap Pouch","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485707","amount":"4","after_cut":"-4","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483666","amount":"4","after_cut":"-4","product_name":"VERY VERY UNIQUE\nPENCIL POUCH VER.2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483659","amount":"4","after_cut":"-6","product_name":"SPARK \nPENCIL POUCH VER.2","previous_amount":"-2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483673","amount":"4","after_cut":"1","product_name":"AURORE IN SWAN DRESS\nPENCIL POUCH VER.2","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483642","amount":"3","after_cut":"1","product_name":"TABOM PINK \nPENCIL POUCH VER.2","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483680","amount":"1","after_cut":"0","product_name":"SPARK BOY & GIRL \nPENCIL POUCH VER.2","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484816","amount":"12","after_cut":"25","product_name":"TABOM ORANGE LIP TINT","previous_amount":"37"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484809","amount":"12","after_cut":"24","product_name":"PHOEBE PINK LIP TINT","previous_amount":"36"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484793","amount":"12","after_cut":"26","product_name":"AURORE RED LIP TINT","previous_amount":"38"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484335","amount":"2","after_cut":"0","product_name":"AURORE_MINT POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484397","amount":"2","after_cut":"0","product_name":"TABOM PINK POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484342","amount":"2","after_cut":"0","product_name":"AURORE_VILLAGE POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484373","amount":"2","after_cut":"0","product_name":"AURORE ORANGE POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481723","amount":"12","after_cut":"14","product_name":"ALL STAR PASSPORT CASE","previous_amount":"26"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481716","amount":"12","after_cut":"-12","product_name":"VERY VERY UNIQUE PASSPORT CASE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481747","amount":"12","after_cut":"-12","product_name":"AURORE TRIP PASSPORT CASE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485530","amount":"12","after_cut":"14","product_name":"PINK CAR PASSPORT CASE","previous_amount":"26"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255481730","amount":"4","after_cut":"0","product_name":"LOVE BEAM PASSPORT CASE","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484359","amount":"1","after_cut":"0","product_name":"WONDER AURORE POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484328","amount":"1","after_cut":"0","product_name":"AURORE_VINTAGE POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484380","amount":"1","after_cut":"0","product_name":"LOVE BEAM POP POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484946","amount":"2","after_cut":"-1","product_name":"AURORE LANDSCAPE BIG CLUTCH BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484939","amount":"2","after_cut":"-1","product_name":"AURORE DOT BIG CLUTCH BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484953","amount":"2","after_cut":"4","product_name":"TABOM MARKET BEIGE BIG CLUTCH BAG","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484960","amount":"2","after_cut":"0","product_name":"TABOM MARKET PINK BIG CLUTCH BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483093","amount":"2","after_cut":"2","product_name":"SPARK BOY & GIRL MULTI POUCH","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485479","amount":"2","after_cut":"-1","product_name":"AURORE_PINK MULTIPOUCH","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485462","amount":"2","after_cut":"0","product_name":"ALL STAR MULTIPOUCH","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484434","amount":"4","after_cut":"-4","product_name":"TABOM SUNGLASSES MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484427","amount":"4","after_cut":"-4","product_name":"POPPY MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484403","amount":"4","after_cut":"-4","product_name":"AURORE JELLY GIRLS MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484410","amount":"4","after_cut":"-1","product_name":"AURORE MAKE UP MINI POUCH VER2","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485738","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485721","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485714","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482652","amount":"4","after_cut":"-4","product_name":"PINK AURORE MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482669","amount":"4","after_cut":"-4","product_name":"VERY VERY UNIQUE MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255482218","amount":"4","after_cut":"-4","product_name":"PINK CAR MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483314","amount":"1","after_cut":"2","product_name":"AURORE_ORANGE RIBBON POUCH","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483338","amount":"1","after_cut":"5","product_name":"TABOM PINK RIBBON POUCH","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483970","amount":"2","after_cut":"6","product_name":"WONDER AURORE PLANNER","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483956","amount":"2","after_cut":"0","product_name":"AURORE_VINTAGE PLANNER","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483963","amount":"1","after_cut":"0","product_name":"AURORE_VILLAGE PLANNER","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255480764","amount":"2","after_cut":"0","product_name":"Red Heart Card","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485370","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255485387","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483888","amount":"1","after_cut":"9","product_name":"SPARK BOY & GIRL \nCLUTCH BAG","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483833","amount":"1","after_cut":"-1","product_name":"AURORE C'EST BON\nCLUTCH BAG","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483857","amount":"1","after_cut":"-1","product_name":"VERY VERY UNIQUE\nCLUTCH BAG","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483840","amount":"1","after_cut":"7","product_name":"SPARK CLUTCH BAG","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483871","amount":"1","after_cut":"1","product_name":"AURORE VILLAGE\nCLUTCH BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483864","amount":"1","after_cut":"4","product_name":"TABOM FLOWER \nCLUTCH BAG","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483130","amount":"2","after_cut":"4","product_name":"AURORE_ORANGEECO BAG","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255484618","amount":"2","after_cut":"0","product_name":"AURORE IN SWAN DRESS\n ECO BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483154","amount":"2","after_cut":"9","product_name":"TABOM PINK ECO BAG","previous_amount":"11"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483499","amount":"2","after_cut":"19","product_name":"AURORE IMAGINE BOTTLE","previous_amount":"21"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483529","amount":"2","after_cut":"20","product_name":"C'EST SI BON BOTTLE","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:35 --> {"last_store_amount":"","korea_barcode":"8809255483505","amount":"2","after_cut":"22","product_name":"TABOM YELLOW BOTTLE","previous_amount":"24"}
DEBUG - 2014-10-31 12:26:35 --> DB Transaction Failure
ERROR - 2014-10-31 12:26:35 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`chgthcom_oohlala`.`stock_transaction_detail`, CONSTRAINT `fk_stock_transaction_detail_product1` FOREIGN KEY (`product_korea_barcode`) REFERENCES `product` (`korea_barcode`) ON DELETE NO ACTIO)
DEBUG - 2014-10-31 12:26:35 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-10-31 12:26:41 --> Config Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Hooks Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Utf8 Class Initialized
DEBUG - 2014-10-31 12:26:41 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 12:26:41 --> URI Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Router Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Output Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Security Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Input Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 12:26:41 --> Language Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Loader Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Helper loaded: url_helper
DEBUG - 2014-10-31 12:26:41 --> Helper loaded: form_helper
DEBUG - 2014-10-31 12:26:41 --> Database Driver Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Controller Class Initialized
DEBUG - 2014-10-31 12:26:41 --> tran id 
DEBUG - 2014-10-31 12:26:41 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:41 --> Model Class Initialized
DEBUG - 2014-10-31 12:26:41 --> tran id 
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485011","amount":"3","after_cut":"-3","product_name":"AURORE AND FRIENDS HARD COVER NOTE  (line)","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485028","amount":"3","after_cut":"-3","product_name":"AURORE IMAGINE HARD COVER NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485042","amount":"3","after_cut":"-3","product_name":"TABOM STRIPE VINTAGE HARD COVER NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485035","amount":"1","after_cut":"4","product_name":"TABOM RETRO HARD COVER NOTE (line)","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481532","amount":"5","after_cut":"-5","product_name":"Aurore Face Note Jumbo (150 sheets)","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485134","amount":"2","after_cut":"1","product_name":"TABOM BOY AND GIRL IN THE RAIN UMBRELLA","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485110","amount":"2","after_cut":"2","product_name":"ROSE AURORE UMBRELLA","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485127","amount":"2","after_cut":"3","product_name":"AURORE MON AMOUR UMBRELLA","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482492","amount":"2","after_cut":"14","product_name":"FLYING AURORE SNAP CASE for iPhone 5","previous_amount":"16"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482478","amount":"2","after_cut":"7","product_name":"MINT AURORE SNAP CASE for iPhone 5","previous_amount":"9"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484557","amount":"2","after_cut":"2","product_name":"AURORE FLOWER MINT             SNAP CASE for iPhone 5\/5s","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484526","amount":"2","after_cut":"1","product_name":"VERY VERY UNIQUE                  SNAP CASE for iPhone 5\/5s","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482508","amount":"2","after_cut":"8","product_name":" AURORE BALLOON SNAP CASE for iPhone 5","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482515","amount":"2","after_cut":"5","product_name":" TABOM PINK SNAP CASE for iPhone 5","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482461","amount":"2","after_cut":"12","product_name":"TABOM SNAP CASE for iPhone 5","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482454","amount":"2","after_cut":"10","product_name":"LOVE BEAM SNAP CASE for  iPhone 5","previous_amount":"12"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482447","amount":"2","after_cut":"6","product_name":"ALL STAR SNAP CASE for iPhone 5","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484564","amount":"1","after_cut":"0","product_name":"AURORE IN SWAN DRESS           SNAP CASE for iPhone 5\/5s","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484540","amount":"1","after_cut":"0","product_name":"AURORE MON AMOUR              SNAP CASE for iPhone 5\/5s","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484991","amount":"2","after_cut":"4","product_name":"AURORE LANDSCAPE SOFT TOWEL  ","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484984","amount":"2","after_cut":"4","product_name":"TABOM RETRO SOFT TOWEL","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485004","amount":"2","after_cut":"3","product_name":"AURORE PICNIC SOFT TOWEL","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485547","amount":"2","after_cut":"5","product_name":"TABOM RETRO ECO BAG","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484601","amount":"2","after_cut":"11","product_name":"AURORE_MINT ECO BAG","previous_amount":"13"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484595","amount":"2","after_cut":"6","product_name":"WONDER AURORE ECO BAG                   ","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484588","amount":"2","after_cut":"5","product_name":"AURORE_VILLAGE ECO BAG                   ","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484625","amount":"2","after_cut":"5","product_name":"AURORE_VINTAGE ECO BAG","previous_amount":"7"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485745","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485769","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485752","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255480672","amount":"20","after_cut":"12","product_name":"Aurore Sticker No.1","previous_amount":"32"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481068","amount":"20","after_cut":"-19","product_name":"Tabon Sticker","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481051","amount":"20","after_cut":"2","product_name":"Aurore Sticker No.3","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255480689","amount":"20","after_cut":"-10","product_name":"Aurore Sticker No.2","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485448","amount":"3","after_cut":"0","product_name":"AURORE FRUTAS SPRING NOTE_LONG","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482706","amount":"2","after_cut":"1","product_name":"GOOD JOB SPRING NOTE_LONG","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483994","amount":"2","after_cut":"-2","product_name":"AURORE_MINT FABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484007","amount":"2","after_cut":"-2","product_name":"AURORE_VINTAGE FABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484038","amount":"2","after_cut":"-2","product_name":"AURORE IN SWAN DRESS\nFABRIC NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485431","amount":"4","after_cut":"-4","product_name":"TABOM FLOWER SPRING NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485424","amount":"4","after_cut":"-4","product_name":"PINK CAR SPRING NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485080","amount":"6","after_cut":"-2","product_name":"PHOEBE FACE MIRROR","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485073","amount":"6","after_cut":"-4","product_name":"AURORE FACE MIRROR","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485097","amount":"6","after_cut":"-6","product_name":"PIERRE FACE MIRROR","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485103","amount":"6","after_cut":"-6","product_name":"ANDRE FACE MIRROR","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483574","amount":"1","after_cut":"21","product_name":"SPARK BOY & GIRL SNAP CASE\nfor Galaxy S4 \/ LTE-A  ","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484083","amount":"1","after_cut":"0","product_name":" TABOM STRIPE SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484144","amount":"1","after_cut":"1","product_name":"AURORE MON AMOUR SNAP CASE\nfor Galaxy note3 ","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484090","amount":"1","after_cut":"0","product_name":"VERY VERT UNIQUE SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484137","amount":"1","after_cut":"3","product_name":"HAND IN HAND SNAP CASE\nfor Galaxy note3 ","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484106","amount":"1","after_cut":"2","product_name":"LOVE BEAM POP SNAP CASE\nfor Galaxy note3 ","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484120","amount":"1","after_cut":"2","product_name":"TABOM PINK SNAP CASE\nfor Galaxy note3 ","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484076","amount":"1","after_cut":"0","product_name":"AURORE & DEER SNAP CASE\nfor Galaxy note3 ","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484243","amount":"2","after_cut":"4","product_name":"SPARK BOY & GIRL MINI POCKET","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484250","amount":"2","after_cut":"14","product_name":"BLUE MINI POCKET","previous_amount":"16"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484267","amount":"2","after_cut":"6","product_name":"NEON PEACH MINI POCKET","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484236","amount":"4","after_cut":"0","product_name":"FLOWER GARDEN MINI POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484649","amount":"10","after_cut":"4","product_name":"TABOM BOY & GIRL               Comics Sticky Note","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484632","amount":"10","after_cut":"-10","product_name":"AURORE ET SES AMIS            Comics Sticky Note","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481310","amount":"2","after_cut":"1","product_name":"Tabom key holder","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481334","amount":"2","after_cut":"8","product_name":"Triangle girl key holder","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481327","amount":"2","after_cut":"-2","product_name":"Aurore key holder","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482690","amount":"1","after_cut":"11","product_name":"LIBERTY CARD POCKET","previous_amount":"12"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482966","amount":"1","after_cut":"16","product_name":"AURORE HAND IN HAND CARD POCKET","previous_amount":"17"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482676","amount":"1","after_cut":"3","product_name":"TABOM STRIPE CARD POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482959","amount":"1","after_cut":"1","product_name":"WONDER AURORE CARD POCKET","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482942","amount":"1","after_cut":"3","product_name":"TABOM DESK CARD POCKET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482980","amount":"1","after_cut":"1","product_name":"TABOM PINK CARD POCKET","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483031","amount":"1","after_cut":"0","product_name":"TABOM WHITE CARD POCKET","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482560","amount":"2","after_cut":"2","product_name":"TABOM_ORANGE CAMPUS NOTE","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482546","amount":"2","after_cut":"1","product_name":"TABOM_YELLOW CAMPUS NOTE","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482553","amount":"2","after_cut":"0","product_name":"TABOM_PINK CAMPUS NOTE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482539","amount":"1","after_cut":"0","product_name":"SPARK BOY CAMPUS NOTE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482577","amount":"10","after_cut":"-10","product_name":"50 STICKERS","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484472","amount":"3","after_cut":"5","product_name":"TABOM MINT CLASS NOTE","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484458","amount":"3","after_cut":"2","product_name":"AURORE NEON PINK CLASS NOTE","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484441","amount":"3","after_cut":"7","product_name":"AURORE PICNIC CLASS NOTE","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255480900","amount":"2","after_cut":"0","product_name":"Elizabeth Comics Sticky Note","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484502","amount":"3","after_cut":"-3","product_name":"AURORE RED CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484519","amount":"3","after_cut":"-3","product_name":"AURORE DOODLE CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484489","amount":"3","after_cut":"-3","product_name":"TABOM GIRL CLASS NOTE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484496","amount":"2","after_cut":"0","product_name":"TABOM BOY CLASS NOTE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485141","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485165","amount":"5","after_cut":"-5","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485172","amount":"5","after_cut":"-5","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481426","amount":"9","after_cut":"5","product_name":"Micro-bus Sticky Note (Beige)","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481419","amount":"1","after_cut":"0","product_name":"Micro-bus Sticky Note (Green)","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485158","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483017","amount":"1","after_cut":"4","product_name":"TABOM YELLOW CARD WALLET","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483000","amount":"1","after_cut":"3","product_name":"AURORE IMAGINE CARD WALLET","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485349","amount":"2","after_cut":"3","product_name":"TABOM RETRO WALLET","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485332","amount":"2","after_cut":"0","product_name":"tabom retro wallet","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482935","amount":"2","after_cut":"1","product_name":"LIBERTY WALLET","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483116","amount":"1","after_cut":"5","product_name":"AURORE IMAGINE_PINK WALLET","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483048","amount":"4","after_cut":"-3","product_name":"SPARK BOY SECOND BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485066","amount":"4","after_cut":"-4","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484892","amount":"4","after_cut":"-4","product_name":"AURORE STAINED GLASS   second bag","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481235","amount":"4","after_cut":"10","product_name":"Aurore's kitchen Second Bag","previous_amount":"14"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485790","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485783","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481198","amount":"2","after_cut":"0","product_name":"Love Beam Pencil Case","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255480870","amount":"4","after_cut":"6","product_name":"Poppy Strap Pouch","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485707","amount":"4","after_cut":"-4","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483666","amount":"4","after_cut":"-4","product_name":"VERY VERY UNIQUE\nPENCIL POUCH VER.2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483659","amount":"4","after_cut":"-6","product_name":"SPARK \nPENCIL POUCH VER.2","previous_amount":"-2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483673","amount":"4","after_cut":"1","product_name":"AURORE IN SWAN DRESS\nPENCIL POUCH VER.2","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483642","amount":"3","after_cut":"1","product_name":"TABOM PINK \nPENCIL POUCH VER.2","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483680","amount":"1","after_cut":"0","product_name":"SPARK BOY & GIRL \nPENCIL POUCH VER.2","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484816","amount":"12","after_cut":"25","product_name":"TABOM ORANGE LIP TINT","previous_amount":"37"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484809","amount":"12","after_cut":"24","product_name":"PHOEBE PINK LIP TINT","previous_amount":"36"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484793","amount":"12","after_cut":"26","product_name":"AURORE RED LIP TINT","previous_amount":"38"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484335","amount":"2","after_cut":"0","product_name":"AURORE_MINT POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484397","amount":"2","after_cut":"0","product_name":"TABOM PINK POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484342","amount":"2","after_cut":"0","product_name":"AURORE_VILLAGE POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484373","amount":"2","after_cut":"0","product_name":"AURORE ORANGE POMPOM PENCIL CASE","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481723","amount":"12","after_cut":"14","product_name":"ALL STAR PASSPORT CASE","previous_amount":"26"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481716","amount":"12","after_cut":"-12","product_name":"VERY VERY UNIQUE PASSPORT CASE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481747","amount":"12","after_cut":"-12","product_name":"AURORE TRIP PASSPORT CASE","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485530","amount":"12","after_cut":"14","product_name":"PINK CAR PASSPORT CASE","previous_amount":"26"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255481730","amount":"4","after_cut":"0","product_name":"LOVE BEAM PASSPORT CASE","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484359","amount":"1","after_cut":"0","product_name":"WONDER AURORE POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484328","amount":"1","after_cut":"0","product_name":"AURORE_VINTAGE POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484380","amount":"1","after_cut":"0","product_name":"LOVE BEAM POP POMPOM PENCIL CASE","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484946","amount":"2","after_cut":"-1","product_name":"AURORE LANDSCAPE BIG CLUTCH BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484939","amount":"2","after_cut":"-1","product_name":"AURORE DOT BIG CLUTCH BAG","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484953","amount":"2","after_cut":"4","product_name":"TABOM MARKET BEIGE BIG CLUTCH BAG","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484960","amount":"2","after_cut":"0","product_name":"TABOM MARKET PINK BIG CLUTCH BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483093","amount":"2","after_cut":"2","product_name":"SPARK BOY & GIRL MULTI POUCH","previous_amount":"4"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485479","amount":"2","after_cut":"-1","product_name":"AURORE_PINK MULTIPOUCH","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485462","amount":"2","after_cut":"0","product_name":"ALL STAR MULTIPOUCH","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484434","amount":"4","after_cut":"-4","product_name":"TABOM SUNGLASSES MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484427","amount":"4","after_cut":"-4","product_name":"POPPY MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484403","amount":"4","after_cut":"-4","product_name":"AURORE JELLY GIRLS MINI POUCH VER2","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484410","amount":"4","after_cut":"-1","product_name":"AURORE MAKE UP MINI POUCH VER2","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485738","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485721","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485714","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482652","amount":"4","after_cut":"-4","product_name":"PINK AURORE MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482669","amount":"4","after_cut":"-4","product_name":"VERY VERY UNIQUE MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255482218","amount":"4","after_cut":"-4","product_name":"PINK CAR MINI POUCH","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483314","amount":"1","after_cut":"2","product_name":"AURORE_ORANGE RIBBON POUCH","previous_amount":"3"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483338","amount":"1","after_cut":"5","product_name":"TABOM PINK RIBBON POUCH","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483970","amount":"2","after_cut":"6","product_name":"WONDER AURORE PLANNER","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483956","amount":"2","after_cut":"0","product_name":"AURORE_VINTAGE PLANNER","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483963","amount":"1","after_cut":"0","product_name":"AURORE_VILLAGE PLANNER","previous_amount":"1"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255480764","amount":"2","after_cut":"0","product_name":"Red Heart Card","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485370","amount":"2","after_cut":"-2","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255485387","amount":"1","after_cut":"-1","product_name":"not found","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483888","amount":"1","after_cut":"9","product_name":"SPARK BOY & GIRL \nCLUTCH BAG","previous_amount":"10"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483833","amount":"1","after_cut":"-1","product_name":"AURORE C'EST BON\nCLUTCH BAG","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483857","amount":"1","after_cut":"-1","product_name":"VERY VERY UNIQUE\nCLUTCH BAG","previous_amount":"0"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483840","amount":"1","after_cut":"7","product_name":"SPARK CLUTCH BAG","previous_amount":"8"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483871","amount":"1","after_cut":"1","product_name":"AURORE VILLAGE\nCLUTCH BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483864","amount":"1","after_cut":"4","product_name":"TABOM FLOWER \nCLUTCH BAG","previous_amount":"5"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483130","amount":"2","after_cut":"4","product_name":"AURORE_ORANGEECO BAG","previous_amount":"6"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255484618","amount":"2","after_cut":"0","product_name":"AURORE IN SWAN DRESS\n ECO BAG","previous_amount":"2"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483154","amount":"2","after_cut":"9","product_name":"TABOM PINK ECO BAG","previous_amount":"11"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483499","amount":"2","after_cut":"19","product_name":"AURORE IMAGINE BOTTLE","previous_amount":"21"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483529","amount":"2","after_cut":"20","product_name":"C'EST SI BON BOTTLE","previous_amount":"22"}
DEBUG - 2014-10-31 12:26:41 --> {"last_store_amount":"","korea_barcode":"8809255483505","amount":"2","after_cut":"22","product_name":"TABOM YELLOW BOTTLE","previous_amount":"24"}
DEBUG - 2014-10-31 12:26:42 --> DB Transaction Failure
ERROR - 2014-10-31 12:26:42 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`chgthcom_oohlala`.`stock_transaction_detail`, CONSTRAINT `fk_stock_transaction_detail_product1` FOREIGN KEY (`product_korea_barcode`) REFERENCES `product` (`korea_barcode`) ON DELETE NO ACTIO)
DEBUG - 2014-10-31 12:26:42 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-10-31 16:27:51 --> Config Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Hooks Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Utf8 Class Initialized
DEBUG - 2014-10-31 16:27:51 --> UTF-8 Support Enabled
DEBUG - 2014-10-31 16:27:51 --> URI Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Router Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Output Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Security Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Input Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-10-31 16:27:51 --> Language Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Loader Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Helper loaded: url_helper
DEBUG - 2014-10-31 16:27:51 --> Helper loaded: form_helper
DEBUG - 2014-10-31 16:27:51 --> Database Driver Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Controller Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Model Class Initialized
DEBUG - 2014-10-31 16:27:51 --> Model Class Initialized
DEBUG - 2014-10-31 16:27:51 --> File loaded: application/views/invoice/invoice_list.php
DEBUG - 2014-10-31 16:27:51 --> File loaded: application/views/base_site.php
DEBUG - 2014-10-31 16:27:51 --> Final output sent to browser
DEBUG - 2014-10-31 16:27:51 --> Total execution time: 0.1710
