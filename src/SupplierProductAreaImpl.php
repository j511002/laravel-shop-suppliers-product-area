<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 16:54
 */

namespace SimpleShop\SupplierProductArea;

use DB;
use Illuminate\Database\Eloquent\Model;
use SimpleShop\SupplierProductArea\Contracts\SupplierProductArea;
use SimpleShop\SupplierProductArea\Repositories\Criteria\SkuWhere;
use SimpleShop\SupplierProductArea\Repositories\SupplierProductAreaRepository;

class SupplierProductAreaImpl implements SupplierProductArea
{
    private $repo;

    public function __construct(SupplierProductAreaRepository $supplierProductAreaRepository)
    {
        $this->repo = $supplierProductAreaRepository;
    }

    /**
     * @param $id
     *
     * @return Model
     */
    public function show($id)
    {
        return $this->repo->find($id);
    }

    /**
     * @param $id
     *
     * @return void
     */
    public function delete($id)
    {
        $this->repo->pushCriteria(new SkuWhere(['product_id' => $id]))->delete();
    }

    /**
     * 添加与sku_id相关的数据
     *
     * @param       $id
     * @param array $data
     *
     * @return void
     */
    public function update($id, array $data)
    {
        $array = [];

        foreach ($data['suppliers'] as $datum) {
            $array[] = [
                'product_id'     => $id,
                'supplier_id'    => $datum['supplier_id'],
                'area_id'        => $data['area_id'],
                'product_price'  => $data['product_price'],
                'supplier_price' => $datum['supplier_price'],
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ];
        }

        DB::transaction(function () use ($id, $array) {
            $this->delete($id);
            $this->repo->insert($array);
        });
    }
}