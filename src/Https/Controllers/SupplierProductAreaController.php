<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 18:23
 */

namespace SimpleShop\SupplierProductArea\Https\Controllers;


use SimpleShop\Commons\Https\Controllers\Controller;
use SimpleShop\SupplierProductArea\Https\Requests\UpdateRequest;
use SimpleShop\SupplierProductArea\SupplierProductAreaImpl;

class SupplierProductAreaController extends Controller
{
    private $service;

    public function __construct(SupplierProductAreaImpl $supplierProductAreaImpl)
    {
        $this->service = $supplierProductAreaImpl;
    }

    /**
     * @param               $id
     * @param UpdateRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, UpdateRequest $request)
    {
        $this->service->update($id, $request->all());

        return $this->success();
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $this->service->delete($id);

        return $this->success();
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $reData = $this->service->show($id);

        return $this->success($reData);
    }
}