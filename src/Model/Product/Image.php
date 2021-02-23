<?php

namespace Nails\Store\Model\Product;

use Nails\Common\Model\Base;
use Nails\Common\Traits\Model\Sortable;
use Nails\Store\Constants;

class Image extends Base
{
    use Sortable;

    // --------------------------------------------------------------------------

    const TABLE_NAME = NAILS_DB_PREFIX . 'store_product_image';

    // --------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        $this->addExpandableField([
            'trigger'   => 'product',
            'type'      => self::EXPANDABLE_TYPE_SINGLE,
            'property'  => 'product',
            'model'     => 'Product',
            'provider'  => Constants::MODULE_SLUG,
            'id_column' => 'product_id',
        ]);
    }
}
