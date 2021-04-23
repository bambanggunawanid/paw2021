<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = '01_products';

    public function getDetailProduct($product_id = false)
    {
        if ($product_id == false) {
            return "Not Found";
        }
        $this->join('02_product_color', 'product_id = color_id');
        $this->join('02_product_image', 'product_id = image_id');
        return $this->where(['product_id' => $product_id])->first();
    }
}
