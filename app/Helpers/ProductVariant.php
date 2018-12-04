<?php
/**
 * Created by PhpStorm.
 * User: tee
 * Date: 03.12.18
 * Time: 19:14
 */

namespace App\Helpers;

use App\Helpers\AbstractClass\ProductAbstract;

class ProductVariant extends ProductAbstract
{
    public function getType()
    {
        echo "Variant";
    }
}