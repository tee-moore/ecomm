<?php
/**
 * Created by PhpStorm.
 * User: tee
 * Date: 03.12.18
 * Time: 19:11
 */

namespace App\Helpers;

use App\Helpers\AbstractClass\ProductAbstract;

class ProductSimple extends ProductAbstract
{
    public function getType()
    {
        echo "Simple";
    }
}