<?php

return [
    # Define your application mode here
    #'mode' => 'live',

    # Account credentials from developer portal
    'account' => [
        'client_id' => 'AbtbVBmoEJV1Xf_2LNXHdWpkl-S5YUPY95twlrhLPtdHzQBmtZAv1bwju4Hz2rSRxw3slJWKXlmAE2aP',
        'client_secret' => 'EK7kgHRm1ycmSHGKynKA00zwY1xHGoJA3K9DJaIK2cMlpofpuCvnDGFSEyJvBGEcHsogXOkdfdZS8ybD',
    ],

    # Connection Information
    'http' => [
        'connection_time_out' => 50,
        'retry' => 1,
    ],

    # Logging Information
    'log' => [
        'log_enabled' => true,

        # When using a relative path, the log file is created
        # relative to the .php file that is the entry point
        # for this request. You can also provide an absolute
        # path here
        'file_name' => '../PayPal.log',

        # Logging level can be one of FINE, INFO, WARN or ERROR
        # Logging is most verbose in the 'FINE' level and
        # decreases as you proceed towards ERROR
        'log_level' => 'FINE',
    ],
];
