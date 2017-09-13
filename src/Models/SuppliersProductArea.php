<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/9/12
 * Time: 17:18
 */

namespace SimpleShop\SupplierProductArea\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuppliersProductArea extends Model
{
    use SoftDeletes;

    /**
     * 主键
     */
    protected $primaryKey = "id";

    /**
     * 表名
     *
     * @var string
     */
    protected $table = 'shop_suppliers_product_area';

    /**
     * 黑名单列表
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'supplier_id',
        'area_id',
        'price',
    ];

    /**
     * 在数组中想要隐藏的属性。
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];
}