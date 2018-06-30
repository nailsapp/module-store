<?php

namespace Nails\Admin\Store;

use Nails\Store\Admin\Controller\Base;

class Voucher extends Base
{
    const CONFIG_MODEL_NAME     = 'Voucher';
    const CONFIG_MODEL_PROVIDER = 'nailsapp/module-store';
    const CONFIG_SIDEBAR_GROUP  = 'Store';
    const CONFIG_SIDEBAR_ICON   = 'fa-shopping-cart';
}
