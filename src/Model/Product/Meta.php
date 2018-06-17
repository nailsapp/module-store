<?php

namespace Nails\Store\Model\Product;

use Nails\Common\Model\Base;

class Meta extends Base
{
    public function __construct()
    {
        parent::__construct();
        $this->table = NAILS_DB_PREFIX . 'store_product_meta';
        $this->addExpandableField([
            'trigger'   => 'product',
            'type'      => self::EXPANDABLE_TYPE_SINGLE,
            'property'  => 'product',
            'model'     => 'Product',
            'provider'  => 'nailsapp/module-store',
            'id_column' => 'product_id',
        ]);
    }
}
