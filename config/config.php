<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Zcash Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('ZCASHD_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Zcash Core is running at.
    |
    | If Zcash Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Zcash Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your Zcash.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('ZCASHD_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Zcash Core is listening for JSON-RPC connections.
    | Default is 22555 for mainnet and 22556 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to Zcash.conf file.
    |
    */

    'port' => env('ZCASHD_PORT', 8232),

    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in Zcash.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('ZCASHD_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in Zcash.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('ZCASHD_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Zcashd JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Zcash Core
    | you can specify custom ca package to verify against.
    | Note that using Zcash JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
