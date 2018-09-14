<?php

if (! function_exists('zcashd')) {
    /**
     * Get zcashd client instance.
     *
     * @return \Weisskpub\Zcash\Client
     */
    function zcashd()
    {
        return app('zcashd');
    }
}
