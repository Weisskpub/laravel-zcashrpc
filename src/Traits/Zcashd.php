<?php

namespace Weisskpub\Zcash\Traits;

trait Zcashd
{
    public function zcashd()
    {
        return app('zcashd');
    }
}
