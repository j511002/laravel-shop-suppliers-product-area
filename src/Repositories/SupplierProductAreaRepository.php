<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 17:14
 */

namespace SimpleShop\SupplierProductArea\Repositories;


use SimpleShop\Repositories\Eloquent\Repository;
use SimpleShop\SupplierProductArea\Models\SuppliersProductArea;

class SupplierProductAreaRepository extends Repository
{
    public function model()
    {
        return SuppliersProductArea::class;
    }
}