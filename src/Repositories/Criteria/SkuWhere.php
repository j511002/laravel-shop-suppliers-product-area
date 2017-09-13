<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 18:14
 */

namespace SimpleShop\SupplierProductArea\Repositories\Criteria;


use SimpleShop\Repositories\Contracts\RepositoryInterface as Repository;
use SimpleShop\Repositories\Criteria\Criteria;

class SkuWhere extends Criteria
{
    private $search;

    public function __construct(array $search)
    {
        $this->search = $search;
    }

    /**
     * @param            $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        if (isset($this->search['product_id'])) {
            $model = $model->where('product_id', $this->search['product_id']);
        }
        
        return $model;
    }
}