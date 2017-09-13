<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 18:27
 */

namespace SimpleShop\SupplierProductArea\Https\Requests;


use SimpleShop\Commons\Utils\Requests\Request;

class UpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id'                 => 'requried|integer',
            'suppliers'                  => 'required|array',
            'area_id'                    => 'required|integer|max:50',
            'product_price'              => 'required|numeric',
            'suppliers.*.supplier_id'    => 'required|integer',
            'suppliers.*.supplier_price' => 'required|numeric',
        ];
    }
}