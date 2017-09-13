<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 16:58
 */

namespace SimpleShop\SupplierProductArea\Contracts;

interface SupplierProductArea
{
    /**
     * 展示sku对应的供应商价格信息
     *
     * @param $id
     *
     * @return mixed
     */
    public function show($id);

    /**
     * 增加一条sku对应的供应商信息
     *
     * @param int     $id sku的id
     * @param array $data
     *
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * 清掉sku_id对应的数据
     *
     * @return void
     */
    public function delete($id);
}