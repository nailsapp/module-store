<?php

namespace Nails\Api\Store;

use Nails\Api\Controller\CrudController;

class Product extends CrudController
{
    const CONFIG_MODEL_NAME     = 'Product';
    const CONFIG_MODEL_PROVIDER = 'nailsapp/module-store';
}
