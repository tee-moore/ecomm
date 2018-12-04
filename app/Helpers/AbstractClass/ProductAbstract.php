<?php
/**
 * Created by PhpStorm.
 * User: tee
 * Date: 03.12.18
 * Time: 19:06
 */

namespace App\Helpers\AbstractClass;

abstract class ProductAbstract
{
    public function getName()
    {
        echo "Name";
    }

    abstract public function getType();
}
