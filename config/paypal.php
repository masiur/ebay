<?php
return array(
    // set your paypal credential
    'client_id' => 'AeO0XkJq8GJW6FT2Fs4L-GBLt7CFyAEltdoKQvqptw9JAzh3SgpWQhzXQH6kgtJxaFHlcWV3qJ6RirBO',
    'secret' => 'ECiiBVtTIc23mAaZOmIAFFlWfkutFKaRIjILbMcIFiceeRoN-c69HuZUK34M2QW13mfpCY24bqpDU6Kw',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);