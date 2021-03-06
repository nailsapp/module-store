<?php

namespace Nails\Admin\Store;

use Nails\Store\Admin\Controller\Base;
use Nails\Store\Constants;

class Product extends Base
{
    const CONFIG_MODEL_NAME          = 'Product';
    const CONFIG_MODEL_PROVIDER      = Constants::MODULE_SLUG;
    const CONFIG_SIDEBAR_GROUP       = 'Store';
    const CONFIG_SIDEBAR_ICON        = 'fa-shopping-cart';
    const CONFIG_EDIT_FIELDSET_ORDER = [
        'Details',
        'Listing',
        'Categories',
        'Inventory',
        'Gallery',
    ];
    const CONFIG_EDIT_DATA           = [
        'expand' => ['images', 'downloads'],
    ];
}
